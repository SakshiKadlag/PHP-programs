<?php
$str=$_GET['str'];
$menu=$_GET['menu'];

$a=array(1,2,3,4,5,6,7,8,9,10);
switch($menu)
{
case "Insert": Insert_stack($str,$a);  break;

case "Delete": Delete_stack($a); break;

case "Display":Display_stack($a);break;	

case "InsertQ":Insert_queue($str,$a);break;	

case "DeleteQ": Delete_queue($a); break;

case "DisplayQ":Display_queue($a);break;	
}

function Insert_stack($str,$a)
{
//$a=array(1,2,3);

//print_r($a);

Array_push($a,$str);
print_r($a);

}
function Delete_stack($a)
{
//$b=array(4,5,6,7);
$b=Array_pop($a);
print_r($a);
echo "<br>"."pop element is:$b";

}

function Display_stack($a)
{
print_r($a);

}

function Insert_queue($str,$a)
{
Array_unshift($a,$str);
print_r($a);
}

function Delete_queue($a)
{
   $d= Array_shift($a);
   print_r($a);
   echo "<br>". "Deleted element is:$d";
    
}

function Display_queue($a)
{
    print_r($a);
}

?>
