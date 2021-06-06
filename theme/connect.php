<?php 
session_start();
$db = mysqli_connect('localhost','root','','management');
if($db->connect_error) {
  echo"Connection failed";
}
else{
}
?>