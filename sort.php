<?php

$menu=$_GET['menu'];

$a=array("sophia"=>"31","jacob"=>"41","William"=>"39","Ramesh"=>"40");

switch($menu)
{
case "avalue": ascending_sort_value($a);  break;

case "akey": ascending_sort_key($a); break;

case "dvalue":descending_sort_value($a);break;	

case "dkey":descending_sort_key($a);break;	
}


function ascending_sort_value($a)
{
asort($a);
print_r($a);

}
function ascending_sort_key($a)
{
print_r($a);
echo "<br>";
ksort($a);
print_r($a);

}
function descending_sort_value($a)
{

arsort($a);
print_r($a);

}
function descending_sort_key($a)
{
krsort($a);
print_r($a);

}
?>
