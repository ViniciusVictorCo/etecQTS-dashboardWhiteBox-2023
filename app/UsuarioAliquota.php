<?php 
namespace app;
    class UsuarioAliquota{
        


        // ATRIBUTOS

        private $nomeUsuario;
        private $cpfUsuario;
        private $rendimentoUsuario;
        private $aliquotaUsuario;
        private $impostoUsuario;


        // CONSTRUTOR

        public function __construct($nomeUsuario, $cpfUsuario, $rendimentoUsuario) {

            $this->nomeUsuario = $nomeUsuario;
            $this->cpfUsuario = $cpfUsuario;
            $this->rendimentoUsuario = $rendimentoUsuario;
            $this->aliquotaUsuario = $this->calcularAliquota();
            $this->impostoUsuario = $this->calcularImposto();

        }

        // MÉTODO PARA CALCULAR ALIQUOTA

        public function calcularAliquota() {

            if ($this->rendimentoUsuario > 0 && $this->rendimentoUsuario <= 22847.76) {
    
                return 0;
    
            } else if ($this->rendimentoUsuario > 22847.76 && $this->rendimentoUsuario <= 33919.80) {
        
                return 7.5;
    
            } else if ($this->rendimentoUsuario > 33919.80 && $this->rendimentoUsuario <= 45012.60) {
    
                return 15;
        
            } else if ($this->rendimentoUsuario > 45012.61 && $this->rendimentoUsuario <= 55976.16) {
    
                return 22.5;
    
            } else {
    
                return 27.5;
                
            }

        }

        // MÉTODO PARA CALCULAR IMPOSTO

        public function calcularImposto() {

            if ($this->aliquotaUsuario == 0) {
                
                return 0;
    
            } else {
    
                $this->impostoUsuario = ($this->rendimentoUsuario * $this->aliquotaUsuario) / 100;
    
                return ($this->impostoUsuario = number_format($this->impostoUsuario, 2, '.',''));
            }
        }

        // MÉTODOS GETTERS

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }
        public function getCpfUsuario(){
            return $this->cpfUsuario;
        }
        public function getRendimentoUsuario(){
            return "R$".$this->rendimentoUsuario;
        }
        public function getAliquotaUsuario(){
            return $this->aliquotaUsuario."%";
        }
        public function getImpostoUsuario(){
            return "R$".$this->impostoUsuario;
        }

        // MÉTODOS SETTERS

        public function setNomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }
        public function setCpfUsuario($cpfUsuario){
            $this->cpfUsuario = $cpfUsuario;
        }
        public function setRendimentoUsuario($rendimentoUsuario){
            $this->rendimentoUsuario = $rendimentoUsuario;
            $this->aliquotaUsuario = $this->calcularAliquota();
            $this->impostoUsuario = $this->calcularImposto();
        }

    }
?>
