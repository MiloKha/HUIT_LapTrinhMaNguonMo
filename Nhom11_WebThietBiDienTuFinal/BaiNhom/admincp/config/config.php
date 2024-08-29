<?php
// $mysqli = new mysqli("localhost","root","","web_bainhom");

// // Check connection
// if ($mysqli->connect_errno) {
//   echo "Kết nối tới mySQL lỗi:  ".$mysqli->connect_error;
//   exit();
// }
try{
  $conn=new PDO("mysql:host=localhost;dbname=web_bainhom",'root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $conn->query("set names utf8");
}
catch(PDOException $e)
{
  echo "Kết nối thất bại: ".$e->getMessage();
}
?>