<?php

class searchBlock{
    public $nome;
    public $descricao;
    public $carga;
    public $aulas;
    public $ano;
    public $bloco;

    // Construct

    public function __construct($n, $d, $c, $aulas, $ano){
        $this
            ->setNome($n)
            ->setDescricao($d)
            ->setCarga($c)
            ->setAulas($aulas)
            ->setAno($ano)
            ->setBloco("<li class='search-result-block'><h3 class='link'><a href=''>" . $this->getNome() . "</a></h3><hr><div class='description'> " . $this->getAulas() . " Aulas <span>&#8226;</span> " . $this->getCarga() . " Horas de Curso <span>&#8226;</span> " . $this->getAno() . " </div><p> " . $this->getDescricao() ."</p></li>")
        ;
    }

    //Getters e Setters 
    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getCarga()
    {
        return $this->carga;
    }

    public function setCarga($carga)
    {
        $this->carga = $carga;

        return $this;
    }

    public function getAulas()
    {
        return $this->aulas;
    }

    public function setAulas($aulas)
    {
        $this->aulas = $aulas;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    public function getBloco()
    {
        return $this->bloco;
    }

    public function setBloco($bloco)
    {
        $this->bloco = $bloco;

        return $this;
    }

    // Metodos

    public function display(){
        echo $this->getBloco();
    }
}