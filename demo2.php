<html>
<head><title>My First Web page</title></head>
<body>
<?php
$content = "Welcome to PHP Programming";
$a = 5;
$x = 8;
$y = 8;
$b = "Hi";
$c = "again";
echo "<br>";
$_msg = 'Hello again';

define ("value", 100);   //case-sensitive
	echo value;
echo "<br>";
echo $content;
echo "<br>";
echo "<br>". $a;
echo "<br>". $_msg;

//Single line comment
/* Multi-line comment               */
//Arithmetic operations
echo "<br>";
echo $x+$y. "\n";
echo "<br>";
echo $x/$y. "\n";
echo "<br>";
echo $x**$y. "\n";
echo "<br>";
echo $x%$y. "\n";
echo "<br>";
if ($x===$y) 
{
	echo "They are identical". "\n";
}
else
{
	echo "They are not identical". "\n";
}
echo "<br>";

echo $b.' '.$c;

// Looping statement
echo "<br>";
//for loop
for ($a = 5; $a>=1;$a--)
{
	echo $a. "\n";
}

// Looping statement
echo "<br>";
//Suzette Cruz while loop
echo "While Loop";
echo "<br>";
$a=5;
while($a>=1){
    echo $a;
    $a--;
}

// Looping statement
echo "<br>";
//Suzette Cruz do.. while loop
echo "Do While Loop";
echo "<br>";
$a=5;
do{
    echo $a;
    $a--;
}
while($a>=1);

    



?>


</body>
















</html>
