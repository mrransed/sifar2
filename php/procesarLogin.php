<?php

    require("conexion.php");

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $query=mysqli_query($con,"SELECT * FROM usuarios WHERE nombre='$usuario' AND Contraseña='$clave'")
    or die("error en la consulta 1".mysqli_error($con));

    $resultado=mysqli_fetch_array($query);

    $tipo=$resultado['Tipo'];
    
    echo $tipo;

    if($tipo)
    {
    session_start();
    $_SESSION['user']=$usuario;
    header("LOCATION:../index.php");

    }
    else{
     header("LOCATION:login.php?var=error");
    }

    ?> 