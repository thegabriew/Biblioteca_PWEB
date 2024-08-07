<?php

session_start();

include_once 'Livro.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];  

    $livro = new Livro($titulo, $ano, $autor);

    $_SESSION['livro'] = serialize($livro);

    $mensagem = "Livro cadastrado com sucesso!";


}

$livro_recuperado = isset($_SESSION['livro']) ? unserialize($_SESSION['livro']) : null;

?>