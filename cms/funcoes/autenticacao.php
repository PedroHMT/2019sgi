<?php
    include('../../config/conexao.php');
    session_start();

    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = mysqli_query($conexao, "SELECT Usuarios_Nome, Usuarios_Senha FROM usuarios WHERE Usuarios_Nome = '$name'");
    $result = mysqli_fetch_array($query);

    if($name == "$result[0]" && $password == $result[1])
    {
        $_SESSION['usuario'] = $result[0];
        header("location: ../index.php");
    }
    else{
        header("location: ../login.php");
    }


?>