<?php

class Pessoa {

// Atributos
    private $nome;
    private $idade;
    private $sexo;

// Método construtor
    public function _construct($nome, $idade, $sexo){
        $this->$nome = $nome;
        $this->$idade = $idade;
        $this->$sexo = $sexo;
    }

// Getters
    function getNome(){
        return $this->nome;
    }
        function getIdade() {
        return $this->idade;
    }
    function getSexo() {
        return $this->sexo;
    }
// Setters
    function setNome(){
        $this->nome = $nome;
    }
    function setIdade() {
        $this->idade = $idade;
    }
    function setSexo() {
        $this->sexo = $sexo;
    }
// Métodos & Funções
    public function fazerAniver() {

    }

}