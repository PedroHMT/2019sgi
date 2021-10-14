<?php
include("../../config/conexao.php");
session_start();
  if( !isset($_SESSION["usuario"]) ){
  session_destroy();
  header("location:login.php");
  }

$Blog_Titulo = $_POST['Blog_Titulo'];
$Blog_Corpo = $_POST['Blog_Corpo'];
$Blog_Codigo = $_POST['Blog_Codigo'];

mysqli_query($conexao, "UPDATE blog SET Blog_Titulo='$Blog_Titulo', Blog_Corpo='$Blog_Corpo' WHERE Blog_Codigo='$Blog_Codigo'");

header("location: ../editarnot.php?noticia=$Blog_Codigo");



?>