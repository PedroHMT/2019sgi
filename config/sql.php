<?php
header("Content-Type: text/html; charset=utf-8");

$sql_01 = "SELECT * FROM blog INNER JOIN blog_imagens ON BlogImagens_Blog_Codigo = Blog_Codigo INNER JOIN usuarios ON Blog_Usuarios_Codigo = Usuarios_Codigo";
$sql_02 = "SELECT * FROM blog INNER JOIN blog_imagens ON BlogImagens_Blog_Codigo = Blog_Codigo INNER JOIN usuarios ON Blog_Usuarios_Codigo = Usuarios_Codigo WHERE Blog_Codigo = ";
$sql_03 = "SELECT * FROM blog INNER JOIN blog_imagens ON BlogImagens_Blog_Codigo = Blog_Codigo INNER JOIN usuarios ON Blog_Usuarios_Codigo = Usuarios_Codigo LIMIT 1";
$sql_04 = "SELECT * FROM blog INNER JOIN blog_imagens ON BlogImagens_Blog_Codigo = Blog_Codigo INNER JOIN usuarios ON Blog_Usuarios_Codigo = Usuarios_Codigo WHERE Blog_Codigo = 4";
$sql_05 = "SELECT * FROM grade";
$sql_06 = "SELECT * FROM piso";

?>