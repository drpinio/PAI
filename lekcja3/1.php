<html>
<head>

</head>
<body>
<?php

$b=40 ;


if(($b>0)&&($b<=39))
{//echo "Dostałeś 1<br>";
$c=1;
}
 else if(($b>39)&&($b<=54))
{//echo "Dostałeś 2<br>";
$c=2;
}
else if(($b>54)&&($b<=69))
{//echo "Dostałeś 3<br>";
$c=3;
}
else if(($b>69)&&($b<=84))
{//echo "Dostałeś 4<br>";
$c=4;
}
else if(($b >84)&&($b<=94))
{//echo "Dostałeś 5<br>";
$c=5;}
else if(($b >94)&&($b<=100))
{//echo "Dostałeś 6<br>";
$h=6;}
switch($c)
{
case 1:
        echo "Dostałeś 1";
        break;
		
case 2:
        echo "Dostałeś 2";
        break;
case 3:
        echo "Dostałeś 3";
        break;
case 4:
        echo "Dostałeś 4";
        break;
case 5:
        echo "Dostałeś 5";
        break;
case 6:
        echo "Dostałeś 6";
        break;		
		}
?>
</body>
</html>