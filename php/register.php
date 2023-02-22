<?php
namespace Handlers;



$fh = fopen("userinfo.txt", 'a');

if (!$fh) die("File not found");

$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['loc'];
$lookingFor = $_POST['look'];
$tech = $_POST['tech'];


if(fputs($fh,$name.",".$email.",".$location.",".$lookingFor.",".$tech."\n"))
{
   fclose($fh);
   header("Location: catolog.php");
}




