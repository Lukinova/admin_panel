<?php
/*$login = "admin";
$password = "admin";

echo '<pre>' . print_r([$_POST['password'], hash('sha256', $_POST['password'])], true);


if ($login === $_POST['login'] && $password === $_POST['password']) {
	header("Location: panel/");
}else{
	header("Location: /admin/");
}
*/

class DB
{
	// сохраненный экземпляр соединения
	private static $instance;
	
	private function __construct() {
		self::$instance = mysqli_connect(
		    $hostname = 'localhost',
		    $username = 'root',
		   	$password = '3213232',
		    $database = 'application'
		);
	}

	// получение экземпляра соединения с БД
	public static function getInstance() {
		if (!self::$instance) {
			new DB();
		}
		return self::$instance;
	}

	// sql-запрос к БД 
	public function query (string $q) {
		// todo: prepare
		$connection = self::getInstance();
		$result = $connection->query($q);
		$arr_res = [];
		while ($row = $result->fetch_assoc()) {
			$arr_res[] = $row;
		}
		return $arr_res;
	}
}


class User
{
	public static function get ($id = null) {
		if ($id) {
			$user = DB::query('select * from users where id = '.$id.';');
		} else {
			$user = DB::query('select * from users;');
		}
		return $user;
	}

	public function add ($name, $login, $password) {
		$q = 'insert into users (name, login, password) values ("'.$name.'", "'.$login.'", "'.hash('sha256', $password).'");';
		echo $q;
		DB::query($q);
	}

	public function cheсkup () {
		$f_login = $_POST['login'];
		$f_password = hash('sha256', $_POST['password']);

		$result = DB::query('select * from users where login = "'.$f_login.'" and password = "'.$f_password.'" limit 0,1;')[0];

		if ($result){
			header("Location: /panel");
		} else { 
			header("Location: /admin");
		}

	} 
}



$entrance = new User();
$entrance->cheсkup();

/* User::add('donat', 'monkey', '12345');
$user = User::get();
echo '<pre>' . print_r($user, true);
*/












