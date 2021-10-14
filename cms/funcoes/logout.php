<?php
    include('../../config/conexao.php');
    session_start();
    session_destroy();
    header("location: ../login.php");


?>