<?php

class Biblioteca {
    private $livros = [];
    private $usuarios = [];

    public function adicionarLivro($livro) {
        $this->livros[] = $livro;
        return true;
    }

    public function removerLivro($livro) {
       
        $key = array_search($livro, $this->livros);
        if ($key !== false) {
            unset($this->livros[$key]);
            return true;
        }
        return false;
    }

    public function emprestarLivro($livro, $usuario) {
        
        $key = array_search($livro, $this->livros);
        if ($key !== false) {
            if (in_array($usuario, $this->usuarios)) {
                unset($this->livros[$key]);
                $usuario->adicionarLivro($livro);
                return true;
            }
        }
        return false;
    }

    public function devolverLivro($livro, $usuario) {
        if (in_array($usuario, $this->usuarios)) {
            if ($usuario->removerLivro($livro)) {
                $this->livros[] = $livro;
                return true;
            }
        }
        return false;
    }
}

class Usuario {
    private $livros = [];

    public function adicionarLivro($livro) {
        $this->livros[] = $livro;
    }

    public function removerLivro($livro) {
        $key = array_search($livro, $this->livros);
        if ($key !== false) {
            unset($this->livros[$key]);
            return true;
        }
        return false;
    }
}

class Livro {
    private $titulo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }
}
?>
