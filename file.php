<?php
$file=$_GET['file'];
$r=$_GET['menu'];


switch($r)
{
case "type":   file_type($file);        break;
case "last": last_access($file);            break;
case "size":   file_size($file);       break;
case "delete":filedelete($file);  break; 
}

function file_type($file)
{
   echo filetype($file);
}

function last_access($file)
{
   echo "Last modified:".date("F d Y H:i:s.",filemtime($file));
}
function file_size($file)
{
echo "File size is:".filesize($file);
}
function filedelete($file)
{
   if(unlink($file))
   {
      echo sprintf("the file %s deleted successfully",$file);

   }
   else{
      echo sprintf("An error occured");
   }
}
?>