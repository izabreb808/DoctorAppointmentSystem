<?php

		session_start();

?> 

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Przychodnia</title>
	<style type-"text/css">
		body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background-image: url(gradient.jpg);
		background-size: cover;
	  }
	  p, input[type="submit"]{
		  margin-left: 20px;
	  }
	</style>
</head>

<body>

<p> Rejestracja przebiegła pomyślnie :) </p>

<form action="index.php" method="post">
	<input type="submit" value="Zaloguj się" />
</form>

</body>
</html>