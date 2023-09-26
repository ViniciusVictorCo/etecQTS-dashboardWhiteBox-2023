<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\Usuario;

    class UsuarioTest extends TestCase
    {
        
        public function testNomeUsuario()
        {
            $p1 = new Usuario("Vinicius Victor", 22, 80.9, 1.7, 'Acima do peso', 111.6);

            $this->assertEquals("Vinicius Victor", $p1->getNomeUsuario());
        }

        public function testIdadeUsuario(){
            $p2 = new Usuario("Vinicius Victor", 22, 80.9, 1.7, 'Acima do peso', 111.6);
            
            $this->assertEquals("22 anos", $p2->getIdadeUsuario());        
        }

        public function testPesoUsuario(){
            $p3 = new Usuario("Vinicius Victor", 22, 80.9, 1.7, 'Acima do peso', 111.6);
            
            $this->assertEquals("80.9kg", $p3->getPesoUsuario());        
        }

        public function testAlturaUsuario(){
            $p4 = new Usuario("Vinicius Victor", 22, 80.9, 1.7, 'Acima do peso', 111.6);
            
            $this->assertEquals("1.7m", $p4->getAlturaUsuario());        
        }

        /**
         * @dataProvider testCategoriaIcmProvider
         */
        public function testCategoriaImcUsuario($nome, $idade, $peso, $altura, $categoria, $imc, $esperado){
            $p5 = new Usuario($nome, $idade,$peso,$altura,$categoria, $imc);
            
            $this->assertEquals($esperado, $p5->getCategoriaImcUsuario());        
        }

        public function testImcUsuario(){
            $p6 = new Usuario("Vinicius Victor", 22, 80.9, 1.7, 'Acima do peso', 111.6);
            
            $this->assertEquals(27.99, $p6->getImcUsuario());   
        }


        static function testCategoriaIcmProvider(){
            return [
                ["Vinicius Victor", 22, 8.9, 1.7, 'Acima do peso', 111.6, "Você está abaixo do peso"],
                ["Vinicius Victor", 22, 65, 1.7, 'Acima do peso', 111.6, "Você está com peso normal"],
                ["Vinicius Victor", 22, 80.9, 1.7, 'Acima do peso', 111.6, "Você está acima do peso"],
                ["Vinicius Victor", 22, 90.9, 1.7, 'Acima do peso', 111.6, "Você está com obesidade grau 1"],
                ["Vinicius Victor", 22, 110, 1.7, 'Acima do peso', 111.6, "Você está com obesidade grau 2"],
                ["Vinicius Victor", 22, 130, 1.7, 'Acima do peso', 111.6, "Você está com obesidade grau 3"],
            
            ];
        }





        
        // public function verificaIdade() {
        //     if(getIdadeUsuario() > 5){
        //         return $this->assertTrue(true);
        //     } else {
        //         return $this->assertFalse(false);
        //     }
        // }
    }
?>

