<html lang="pl">
	<head> 
		<title>Zadania</title>
		<link rel="stylesheet" href="ak.css">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	</head>
	

    <form action="./2.php" method="POST">
        <a><b>Podaj swój wiek:</a> <input type="number" name="n" value="n" >
        <input type="submit" value="wyslij"><br><br>
    </form>

    <form action="./2.php" method="POST">
            <a><b>wpisz tekst:</a> <input type="textarea" name="text" placeholder="wprowadz text" >
            <button type="submit" name="submit">Potwierdz</button>
    </form>
    
    <?php

if(isset($_POST['n'])){
    echo "<br><br><b>Twój wiek: " . htmlspecialchars($_POST['n']) . "<br>";
    $n= $_POST['n'];
wiek($n); }


function wiek($n) {
    if($n<=18) {
        echo "<br><b>Młody i głupi jeszcze jesteś";
    }
    elseif($n<=45) {
        echo "<br><b>Jesteś dorosły";
    }
    else {
        echo "<br><b>Jedną nogą w trumnie ;(";
    }
}



if(isset($_POST['submit'])){
    main();
}

function main() {
    $text = $_POST['text'];

    if(strlen($text)== 0) {
        echo "<br><br><b>Nie ma tekstu";
    }
    else{
        echo "<br><br><b>Twój tekst: ".$text;
    }

}

    ?>


	</body>
</html>