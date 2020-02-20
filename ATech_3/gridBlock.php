<?php

class gridBlock{
    
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
            ->setBloco("<div class='grid-block'>
            <div>
                <p class='txt_center'>" . $this->getNome() . "</p>
                <hr>
                <p class='txt_center'> 
                ".$this->getDescricao()."
                </p>
                <hr>
                <ul class='ul-undecored'>
                    <li>Ano: <div>".$this->getAno()."</div></li>
                    <li>N° de Aulas:<div>".$this->getAulas()."</div></</li>
                    <li>Carga Horária:<div>".$this->getCarga()."</div></</li>
                </ul>
                <div class='center-content md-padding' ><button>Matricular-se</button></div>
            </div>
        </div>")
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
}