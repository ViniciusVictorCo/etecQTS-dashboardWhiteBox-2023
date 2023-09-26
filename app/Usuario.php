<?php 
namespace app;

    class Usuario{
        
        // ATRIBUTOS

        private $nomeUsuario;
        private $idadeUsuario;
        private $pesoUsuario;
        private $alturaUsuario;
        private $imcUsuario;
        private $categoriaImc;


        // CONSTRUTOR

        public function __construct($nomeUsuario, $idadeUsuario, $pesoUsuario,  $alturaUsuario, $categoriaImc, $imcUsuario) {

            $this->nomeUsuario = $nomeUsuario;
            $this->idadeUsuario = $idadeUsuario;
            $this->pesoUsuario = $pesoUsuario;
            $this->alturaUsuario = $alturaUsuario;
            $this->imcUsuario = $this->calcularImc();
            $this->categoriaImc = $this->categoriaImc();

        }

        // MÉTODO PARA CALCULAR IMC

        public function calcularImc() {

            return number_format($this->imcUsuario = $this->pesoUsuario / pow($this->alturaUsuario ,2), 2);

        }
    
        // MÉTODO PARA CATEGORIA IMC

        public function categoriaImc() {

            if ($this->imcUsuario <= 18.5) {
    
                return ($this->categoriaImc = "Você está abaixo do peso");
    
            } else if ($this->imcUsuario >= 18.6 && $this->imcUsuario <= 24.9) {
        
                return ($this->categoriaImc = "Você está com peso normal");
    
            } else if ($this->imcUsuario >= 25 && $this->imcUsuario <= 29.9) {
    
                return ($this->categoriaImc = "Você está acima do peso");
        
            } else if ($this->imcUsuario >= 30 && $this->imcUsuario <= 34.9) {
    
                return ($this->categoriaImc = "Você está com obesidade grau 1");
    
            } else if ($this->imcUsuario >= 35 && $this->imcUsuario <= 39.9) {
    
                return ($this->categoriaImc = "Você está com obesidade grau 2");
    
            } else if ($this->imcUsuario >= 40) {
    
                return ($this->categoriaImc = "Você está com obesidade grau 3");
    
            }

        }



        // MÉTODOS GETTERS

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }
        public function getIdadeUsuario(){
            return $this->idadeUsuario." anos";
        }
        public function getPesoUsuario(){
            return $this->pesoUsuario."kg";
        }
        public function getAlturaUsuario(){
            return $this->alturaUsuario."m";
        }
        public function getImcUsuario(){
            return $this->imcUsuario;
        }
        public function getCategoriaImcUsuario(){
            return $this->categoriaImc;
        }

        // MÉTODOS SETTERS

        // public function setNomeUsuario($nomeUsuario){
        //     $this->nomeUsuario = $nomeUsuario;
        // }
        // public function setIdadeUsuario($idadeUsuario){
        //     $this->idadeUsuario = $idadeUsuario;
        // }
        // public function setImcUsuario($pesoUsuario, $alturaUsuario){
        //     $this->pesoUsuario = $pesoUsuario;
        //     $this->alturaUsuario = $alturaUsuario;
        //     $this->imcUsuario = $this->calcularImc();
        //     $this->categoriaImc = $this->categoriaImc();
        // }

    }

?>
