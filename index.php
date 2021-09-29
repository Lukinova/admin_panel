<?php

session_start();
if ($_SESSION['authorized'] == 1) {
  header("Location: /panel");
  exit;
}

?><!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8">
	<title>Вход</title>
</head>
<body>
	<form action="login.php" method="post">
		<h3>Вход в админ панель</h3>
  <div class="mb-3 col-md-12">
    <label for="examplelogin" class="form-label">Логин</label>
    <input type="text" name="login" class="form-control" id="examplelogin">
  </div>
  <div class="mb-3  col-md-12">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Вход</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>