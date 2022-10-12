<html>
    <body>
    </body>
<?php
//Equality
echo "Equality output";
echo "<br>";
$month = "December";
if($month == "December") echo "It's Christmas Time!";
echo "<br><br>";

//Inequality
echo "Inequality output";
echo "<br>";
$a = "1000";
$b = "+1000";
if($a != $b)echo "1";
if($a !== $b)echo "2";
echo "<br><br>";

//Comparison Operators
echo "Comparison Operators output";
echo "<br>";
$a = 2;
$b = 3;

if($a > $b) echo "a is greater than b<br>";
if($a < $b) echo "a is less than b<br>";
if($a >= $b) echo "a is greater than or equal to b<br>";
if($a <= $b) echo "a is less than or equal to b<br>";
echo "<br><br>";

//Logical Operators
echo "Logical Operators output";
echo "<br>";
$a = 1;
$b = 0;

echo $a AND $b."<br>";
echo $a or $b ."<br>";
echo $a XOR $b."<br>";
echo !$a. "<br>";
echo "<br><br>";

//Conditional Operators
echo "Conditional Operators output";
echo "<br>";
    $bank_balance = 99;

    if($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance+=$money;   
        echo "Bank Balance: ".$bank_balance;
    }

    echo "<br><br>";

//Nested if else

?>
</html>