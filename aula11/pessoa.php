<?php

    class Pessoa{
        #atributos
        private $nome;
        private $idade;
        private $sexo;
    }

    function getNome() {
        return $this->nome;
      }
       function setNome($nome) {
        $this->nome = $nome;
      }
      function getIdade() {
        return $this->idade;
      }
       function setX($idade) {
        $this->idade = $idade;
      }
      function getsexo() {
        return $this->sexo;
      }
       function setSexo($sexo) {
        $this->sexo = $sexo;
      }

      public function FazerAniversario() {
        $this->getIdade() = $this->idade + 1;
        echo "Feliz Aniversario!!!!";
      }

?>