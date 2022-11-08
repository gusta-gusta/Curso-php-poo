<?php
  require_once 'pessoa.php';
  class Aluno extends Pessoa {
    private $matricula;
    private $curso;

            function getCurso() {
                return $this->curso;
              }
               function setCurso($curso) {
                $this->curso = $curso;
              }
              function getMensalidade() {
                return $this->mensalidade;
              }
               function setMensalidade($mensalidade) {
                $this->mensalidade = $mensalidade;
              }

        public function Matricula() {
            echo $this->getNome() . " está Matriculado";
        }

        public function Cursando() {
            echo $this->getNome() . " está Cursando: " . $this->getCurso();

        }

        public function pagarMensalidade() {
            echo "O Aluno : " . $this->getNome() . " está pagando a mensalidade de :" . $this->getMensalidade();
        }
    }
  
 ?>