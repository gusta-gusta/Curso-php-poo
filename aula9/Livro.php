<?php

    Class Livro{ 

// Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

// Método Construtor
        function _construct() {
            $this->$tit = $titulo;
            $this->$aut = $autor;
            $this->$totpg = $totPaginas;
            $this->pgat = $pagAtual;
            $this->ab = $aberto;
            $this->lei = $leitor;

        }
//Getters
        function getTitulo() {
            return $this->tit;
        }
        function getAutor() {
            return $this->aut;
        }
        function getTotPag() {
            return $this->totpg;
        }
        function getPagAtual() {
            return $this->pgat;
        }
        function getAberto() {
            return $this->ab;
        }
        function getLeitor() {
            return $this->lei;
        }
//Setters
        function setTitulo() {
            $this->tit = $titulo;
        }
        function setAutor() {
            $this->aut = $autor;
        }
        function setTotPag() {
            $this->totpg = $totPaginas;
        }
        function setPagAtual() {
            $this->pgat = $pagAtual;
        }
        function setAberto() {
            $this->ab = $aberto;
        }
        function setIdade() {
            $this->id = $idade;
        }

        public function detalhes(){

        }
// 

        

    }





?>