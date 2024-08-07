<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa{

private int $idFuncionario;
private string $cargo;

public function __constructor($idFuncionario, $cargo){
    $this -> idFuncionario = $idFuncionario;
    $this -> cargo = $cargo;
}

public function getIdFuncionario(){
    $this -> idFuncionario;
}

public function getCargo(){
    $this -> cargo;
}

}

?>