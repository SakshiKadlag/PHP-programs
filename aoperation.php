<?php

$menu=$_GET['menu'];

$a=array(50,20,5,6,9,10);
$b=array(11,22,33,44,50,10);

switch($menu)
{
case "achunks": array_chunks($a);  break;

case "wkey": sort_wkeys($a); break;

case "fodd":odd($a);break;	

case "marray":merge($a,$b);break;	

case "intersection":array_intersection($a,$b);break;	

case "union":array_union($a,$b);break;	

case "setdiff":set_difference($a,$b);break;	
}

function array_chunks($a)
{
$c=array_chunk($a,2);
print_r($c);
}

function sort_wkeys($a)
{
print_r($a);
$s=natsort($a);
echo "<br>";
print_r($a);

}

function odd($a)
{
print_r($a);

function is_odd($var)
{
return($var %2);
}

$odd=array_filter($a,"is_odd");
echo "<br>";
echo "Odd numbers";
echo "<br>";
print_r($odd);
}

function merge($a,$b)
{
print_r($a);
echo "<br>";
print_r($b);

echo "Merge";
echo "<br>";
$m=array_merge($a,$b);
print_r($m);
}

function array_intersection($a,$b)
{
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";
echo "Intersection";
echo "<br>";
$inter=array_intersect($a,$b);
print_r($inter);

}

function array_union($a,$b)
{
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";
echo "Union";
echo "<br>";
$union=array_unique(array_merge($a,$b));
print_r($union);
}

function set_difference($a,$b)
{
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";
echo "Difference";
echo "<br>";
$result=array_diff($a,$b);
print_r($result);
}




?>
