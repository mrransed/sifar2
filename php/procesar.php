<?php

    require("conexion.php");

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];


    echo $usuario;
    echo $clave;

    $consulta="SELECT * FROM usuarios WHERE usuario='$usuario' 
    AND clave='$clave'";

    $resultado=mysqli_query($con,$consulta);
    $fila=mysqli_fetch_array($resultado);

    echo $fila['tipo'];




    if($fila){

        session_start();
        $_SESSION['id']=$fila['id'];
        $_SESSION['user']=$fila['usuario'];

        header("Location: ../index.php");
        // echo "funciona";
    }else{
        header("Location: ../login.php?var=error");
        // echo "error";
    }
  


?>