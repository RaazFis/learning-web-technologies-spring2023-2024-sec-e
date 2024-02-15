</php

$num1=$_REQUEST['number1'];
$num2=$_REQUEST['number2'];
$num3=$_REQUEST['number3'];

$largest=$sum1;

if($num2>$largest)
{
  $largest =$num2;
}
if($num3>$largest)
{
    $largest=$num3;
}
echo"{$largest}is the largest number";

?>