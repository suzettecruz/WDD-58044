<?php
//Looping statement

echo "-----Output While Loop-----";

echo "<br>";

$fuel = 10;
//while loop
while($fuel>=1)
{
    //keep driving
    echo "There's enough fuel"."<br>";
    --$fuel;
}

echo "----End of while Loop----";
echo "<br><br>";

echo "-----Output Do While Loop-----";
echo "<br>";
$count = 1;
//do while loop
do
    echo "$count times 12 is ". $count*12 . "<br>";
while(++$count <=12);
echo "----End of do while Loop----";
echo "<br><br>";

echo "-----Output For Loop-----";
echo "<br>";
//for loop
for($count=1; $count<=12; ++$count)
    echo "$count times 12 is " . $count*12 . "<br>";
echo "----End of For Loop----";
echo "<br><br>";

echo "-----Output Foreach Loop-----";
echo "<br>";

$colors = array("red","green","blue","yellow");
//foreach loop
foreach($colors as $value)
{
    echo "$value <br>";
}
echo "----End of Foreach Loop----";
echo "<br><br>";

//break statement
echo "-----Output Break Statement-----";
echo "<br>";
for($x=0;$x<10;$x++){
    if($x==4){
        break;
    }
    echo "The number is: $x <br>";
}
echo "----End of Break Statement----";
echo "<br><br>";

//continue statement
echo "-----Output Continue Statement-----";
echo "<br>";
for($x=0;$x<10;$x++){
    if($x==4){
        continue;
    }
    echo "The number is: $x <br>";
}
echo "----End of Continue Statement----";
echo "<br><br>";

//Application 1
echo "Application 1";
echo "<br>";
for($x=0; $x<=10; $x++)
    echo "Hello $x " . "<br>";
//End of Application 1

echo "<br><br>";

//Application 2
// Create a PHP program that displays integers less than 10 but not less than 3.
echo "Application 2";
echo "<br>";
$num = 10;
//while loop
while($num>=3)
{
    if($num<10){
        echo $num . "<br>";  
    }
    --$num;
}
//End of Application 2

echo "<br><br>";

?>
