<?php
$serve_nome = "localhost";
$nome_usuario='root';
$senha_usuario = '';
$database_nome="musica_usuario";

$conectar = mysqli_connect($serve_nome, $nome_usuario, $senha_usuario, $database_nome);

/*
if ($conectar) {
    # code...
    die('Conexão Falhada' . mysqli_error());
} else {
    # code...
    echo ('Conexão com Base dados concluido');

    
}*/



?>