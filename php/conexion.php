<?php

    $host="localhost";
    $user="root";
    $pass="";
    $db="sifar";

    $con=mysqli_connect($host,$user,$pass,$db)or die
    ("error en la consulta".mysqli_error($con));

?>