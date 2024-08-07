<?php 

require_once "InterfaceUsuario.php";

class Usuario implements InterfaceUsuario{
    private $idUsuario;
    private $novaSenha;
    private $senha;

    public function __constructor($idUsuario, $senha){

        $this ->idUsuario = $idUsuario;
        $this -> senha = $senha;
    }

    public function getIdUsuario(){
        return $this -> idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this -> idUsuario = $idUsuario;
    }

    public function setSenha($senha){
        $this ->senha = $senha;
    }
    public function getSenha(){
        return $this ->senha;
    }

    //Funções que vieram da interface
    public function login(){
        echo"Login efetuado";
    }

    public function logout(){
        echo "Logout efetuado";
    }

    //Função própria

    public function redefinirSenha($novaSenha){
    
        echo "Redefina a senha";
        $this->novaSenha = $novaSenha;
        echo "Senha atualizada";
    }
}
