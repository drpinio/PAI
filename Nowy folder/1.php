<html>
	<head> 
		<link rel="stylesheet" href="">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript, PHP">

	</head>
	<body>
        <?PHP
        $l1 = 1;
        $l2 = 1;
        
        for($l1 =1;$l1 <= 10; ++$l1){
            echo "<br>";
            for($l2 =1;$l2 <= 10; ++$l2){
                echo $l1 ."*". $l2 ."=". $l1 * $l2 .'<br>';
            }
        }
		for($s=0; $s<=7; ++$s)
		{
			echo "*";
			}
		echo "<br>";
		echo "*";for($s=0; $s<=5; ++$s){echo "#";}echo "*";echo "<br>";
		echo "*";for($s=0; $s<=5; ++$s){echo "#";}echo "*";echo "<br>";
        for($s=0; $s<=7; ++$s)
		{
			echo "*";
			}
        ?>
        
	</body>
</html>