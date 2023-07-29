<?php

    $host="localhost";
    $usuario="root";
    $clave="";
    $db="sifar";

    $con=mysqli_connect($host,$usuario,$clave,$db)or
    die("error al consultar consulta 1".mysqli_error($con));

    // verificar la conexión
    if ($con->connect_error)
    {
        echo ("Conexión fallida: " . $connect_error);
    }

        echo ("Conexión exitosa a la base de datos.");

