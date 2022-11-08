<?php
  require_once 'pessoa.php';
  class Professor extends Pessoa {
        private $especialidade;
        private $salario;
    
        public final function receberAumento(){
          $this->salario = $this->salario + ;
        }
        function getNome() {
          return $this->nome;
        }
        function getIdade() {
          return $this->Idade;
        }
        function getSexo() {
          return $this->sexo;
        }
        function setNome($n) {
          $this->nome = $n;
        }
        function setIdade($i) {
          $this->idade = $i;
        }

  }

  ?>