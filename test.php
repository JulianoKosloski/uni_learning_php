<!DOCTYPE html>
<html>
<body>
<h1>TEST</h1>
<!--I need localhost to see the result of the php script on browser, running this file directly only shows the html-->
<?php
// use . to concatenate strings
echo "Hello World!\n";
echo "Hello" . " World!!!\n";
$color = "Red\n";
echo "The World is ".$color;
echo "String length: ".strlen("Horse")."\n"; //length of string
define("THEWORLD", 1024); // constant defining
echo "Constant THEWORLD: ".THEWORLD."\n";

function sayHello($times) {
    $i = 0;
    while($i < $times) {
        echo "HELLO"."\n";
        $i++;
    }
}

function numberJudge($numbers) {
    for($i=0;$i<count($numbers);$i++) {
        if ($numbers[$i] % 2 == 0) {
            echo $numbers[$i]." is even!\n";
        } else {
            echo $numbers[$i]." is odd and I don't like it!\n";
        }
    }
}

$a = 3;
$b = 5;
$c = $a + $b;
if ($c > 6) {
    sayHello(5);
}

$myArray = array(3, 5, 6, 8, 10, 12, 45, 7);
numberJudge($myArray);








?> 


</body>
</html>