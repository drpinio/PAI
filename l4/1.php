<html>
<head>

</head>
<body>
<?php

$tab1[1] ="harry potter";
$tab1[2] ="Władca Pierścieni";
$tab1[3] ="Hobbit";
for($j =3; $j >=1; --$j){
        echo "$j: $tab1[$j] <br>";
}
$tab2['proszek']="2 miarki";
$tab2['płyn']="20 ml";
$tab2['kapsułka']="1 kapsułka";
foreach($tab2 as $tab3)
echo "$tab3<br>";
?>
</body>
</html>