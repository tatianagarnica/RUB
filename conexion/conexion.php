<?php
$server="localhost";
$user="root";
$pass="";
$db="rub";

$conexcion = new mysqli($server,$user,$pass,$db);
if($conexcion->connect_errno){
    die("conexcion fallida". $conexcion->connect_errno);
}else {
    echo"";
}


?>