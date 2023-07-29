<?php
$host="localhost";
$usuario="root";
$clave="";
$db="sifar";

$con=mysqli_connect($host, $usuario, $clave, $db) or
die ("error al consultar consulta1".mysqli_error($con));


