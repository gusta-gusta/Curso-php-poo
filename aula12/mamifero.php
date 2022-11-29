<?php
    require_once 'animal.php';
    class Mamifero extends Animal {
        private $corPelo;
# Gets e Sets
        function getCorPelo() {
            return $this->corPelo;
        }
         function setCorPelo() { 
            $this->$corPelo = $corPelo;
        }
# Metodos
        public function Locomover() {
            echo "<p>Correndo !!!!</p>";
        }
        public function Alimentar() {
            echo "<p>Mamando</p>";
        }
        public function Emitir_Som() {
            echo "<p>Som de Mamifero</p>";
        }


    }

?>