<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body>

	<h2>1</h2>
	<form method="POST">
		<input type="text" name="login" placeholder="Login...">
		<input type="password" name="password" placeholder="Password..."></br>
		<label for="checkbox">Zapamietaj mnie</label>
		<input id="checkbox" type="checkbox" name="save"></br>

		<button name="loginButton" type="submit">Login</button>
	</form>

	</br>
	</br>

	<h2> 2</h2>
	<form method="POST">
		<input type="text" name="pseudonim" placeholder="Pseudonim..."></br>
		<textarea type="textarea" name="komentarz" placeholder="Komentarz..."></textarea></br>
		<button type="submit" name="kom">Zostaw komentarz</button>
	</form>

	</br>
	</br>

	<h2> 3</h2>
	<form method="POST">
		<label for="sztucce">:</label>
		<select id="sztucce" name="sztucce">
			<option selected disabled>--Wybierz/option>
			<option>Widelec</option>
			<option>Nóż<option>
			<option>Łyżka</option>
		</select>

		<p style="margin-bottom: 0px;">Płeć:</p>
		<input type="radio" name="plec" id="mezczyzna" value="Mężczyzna">
		<label for="mezczyzna">Mężczyzna</label>

		<input type="radio" name="plec" id="kobieta" value="Kobieta">
		<label for="kobieta">Kobieta</label>

		<input type="radio" name="plec" id="inna" value="Inna">
		<label for="inne">Inna</label>

		<p style="margin-bottom: 0px;">Naczynia</p>
		<input type="checkbox" name="naczynia" value="Jan">
		<label>Talerz</label>

		<input type="checkbox" name="naczynia" value="Stefan">
		<label>Miska</label>

		<input type="checkbox" name="naczynia" value="Blair">
		<label>Talerzyk</label></br>

		<button type="submit" name="naczynia">Wpisz dane</button>
	</form>

	<?php

		if(isset($_POST['loginButton'])) {
			login();
		}
		if(isset($_POST['kom'])) {
			kom();
		}
		if(isset($_POST['naczynia'])) {
			ankieta();
		}

		function login() {
			$login = $_POST['login'];
			$password = $_POST['password'];

			echo "</br>Witaj ".$login.'!</br>Twoje hasło to '.sha1($password);

			if(isset($_POST['save'])) {
				echo "</br>Zaznaczyłeś checkboxa!";
			}
		}

		function kom() {
			$pseudonim = $_POST['pseudonim'];
			$komentarz = $_POST['komentarz'];

			echo "</br>Pseudonim: ".$pseudonim."</br>Komentarz bez HTML: ".htmlentities($komentarz)."</br>Komentarz z HTML: ".$komentarz;
		}

		function ankieta() {
			$sztucce = $_POST['sztucce'];
			$plec = $_POST['plec'];
			$naczynia = $_POST['naczynia'];


			echo "</br>Myjesz: ".$sztucce.".</br>Twoja płeć to: ".$plec.".</br>Myjesz: ".$naczynia;

		}

	?>

</body>
</html>