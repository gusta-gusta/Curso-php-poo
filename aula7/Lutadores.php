<?php

class Lutadores{
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos Construtor
    function _construct(){
        $this->$nome = no;
        $this->$nacionalidade = na;
        $this->$idade = id;
        $this->$altura = al;
        setPeso(pe);
        $this->$vitorias = vi;
        $this->$derrotas = de;
        $this->$empates = em;

    }
//---------------------------------------------------- 
// Getters 
    public function getNome(){
        return $this-> nome;
    }
    public function getNacionalidade(){
        return $this-> nacionalidade;
    }
    public function getIdade(){
        return $this-> idade;
    }
    public function getAltura(){
        return $this-> altura;
    }
    public function getPeso(){
        return $this-> peso;
    }
    public function getCategoria(){
        return $this-> categoria;
    }
    public function getVitorias(){
        return $this-> vitorias;
    }
    public function getDerrotas(){
        return $this-> derrotas;
    }
    public function getEmpates(){
        return $this-> empates;
    }

//---------------------------------------------------- 
// Setters
    public function setNome(){
    $this->no = $nome;
    } 
    public function setNacionalidade(){
    $this->na = $nacionalidade;
    }
    public function setIdade(){
    $this->id = $idade;
    }
    public function setAltura(){
    $this->al = $altura;
    }
    public function setPeso(){
    $this->pe = $peso;
    setCategoria();
    }
    public function setCategoria(){
    $this->ca = $categoria;
    if ($this->$peso < 52.2){
        $this->$categoria = "Inválido";
    }elseif ($this->$peso <= 70.3){
        $this-> $categoria = "Leve";
    }elseif ($this->$peso <= 83.9){
        $this-> $categoria = "Médio";
    }elseif ($this->$peso <= 120.2){
        $this->$categoria = "Pesado";
    }else{
        $this->$categoria = "Inválido";
    }

    }
    public function setVitorias(){
    $this->vi = $vitorias;
    }
    public function setDerrotas(){
        $this->de = $derrotas;
    }
    public function setEmpates(){
    $this->em = $empates;
    }      






//---------------------------------------------------- 
    // Métodos
    public function ganharLuta(){
        setVitorias()(getVitorias() +1);
    }
}


?>