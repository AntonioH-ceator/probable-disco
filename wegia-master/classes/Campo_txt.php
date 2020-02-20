<?php

class Campo {

    private $id;
    private $nome;
    private $texto;
    private $tipo;

// Construct

public function __construct($id, $nome, $txt){
    $this
        ->setId($id)
        ->setNome($nome)
        ->setTexto($txt)
    ;
}

// Getters e Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

// Metodos

    public function display(){
        $html = "

        ";
    }

    
}