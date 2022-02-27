<?php


$num1=$_GET['num1'];
$num2=$_GET['num2'];

$menu=$_GET['menu'];

switch($menu)
{
case "mod": mod_number($num1,$num2);  break;
case "power": power_number($num1,$num2);  break;
case "sum": natural_number($num1);  break;
case "factorial": factorial_number($num2);  break;
}

function mod_number($num1,$num2)
{
    $m=$num1 % $num2;
    echo "mod of the number".$m;


}

function power_number($num1,$num2)
{
    $power=1;
    for($i=0;$i<$num2;$i++)
    {
        $power=$power*$num1;

    }
    echo "power of the nuumber:". $power;
}


function natural_number($num1)
{
    $sum=0;
for($i=1;$i<=$num1;$i++)
{
 $sum=$sum+$i;
}
echo "sum of natural number". $sum;
}

function factorial_number($num2)
{
    $fact=1;
    for($i=$num2;$i>0;$i--)
    {
        $fact=$fact*$i;
    }
    echo "factorial of number". $fact;
}
?>