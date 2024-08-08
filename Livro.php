<?php 

class Livro{

    private $titulo;
    private $ano;
    private $autor;


    public function __construct($titulo, $ano, $autor){
        $this->titulo = $titulo;
        $this->ano = $ano;
        $this->autor = $autor;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAno(){
        return $this->ano;
    }

    public function getAutor(){
        return $this->autor;
    }

}
?>
