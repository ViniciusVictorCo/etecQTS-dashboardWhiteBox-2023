<?php
namespace app;

class Product{
    private string $name;
    private float $preco;

    public function __construct(String $name, float $preco)
    {
        $this->name = $name;
        $this->preco = $preco;
    }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getPreco(){
            return $this->preco;
        }
    } 
?>