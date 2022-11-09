<?php

require_once 'pessoa.php';
require_once 'aluno.php';

class Bolsista extends Aluno {

    private $bolsa;

    function getBolsa(){
       return $this->bolsa;
    }
    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "<p> Bolsa Renovada com Sucesso! </p>";
    }

    function CalcularBolsa($mensalidade) {
        $mensalidade = x;
        $desconto = $bolsa;
        $valor_descontado = $mensalidade - ($mensalidade / 100 * $desconto);
        return $valor_descontado;
      } 
      
    

}


?>
