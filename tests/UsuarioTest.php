<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\Usuario;

    class UsuarioTest extends TestCase
    {
        
        public function testNomeUsuario()
        {
            $p1 = new Usuario("Vinicius Victor", 22, 80.9, 1.7);

            $this->assertEquals("Vinicius Victor", $p1->getNomeUsuario());
        }

        public function testIdadeUsuario(){
            $p2 = new Usuario("Vinicius Victor", 22, 80.9, 1.7);
            
            $this->assertEquals("22 anos", $p2->getIdadeUsuario());        
        }

        public function testPesoUsuario(){
            $p3 = new Usuario("Vinicius Victor", 22, 80.9, 1.7);
            
            $this->assertEquals("80.9kg", $p3->getPesoUsuario());        
        }

        public function testAlturaUsuario(){
            $p4 = new Usuario("Vinicius Victor", 22, 80.9, 1.7);
            
            $this->assertEquals("1.7m", $p4->getAlturaUsuario());        
        }


        // public function testVerificarTrue(){
        //     $this->assertTrue(true);
        // }

        // public function testVerificarFalse(){
        //     $this->assertFalse(false);
        // }

        // public function testSetPreco(){
        //     $p1 = new Product("Celular IPHONE 8", 10000.00);
        //     $p1->setPreco(10.00);
        //     $this->assertEquals(10.00, $p1->getPreco());
        // }

        // public function testSetName()
        // {
        //     $p1 = new Product("Celular IPHONE 8", 10000.00);
        //     $p1->setName('cel');
        //     $this->assertEquals("cel", $p1->getName());
        // }

        // REFINADOR DE TESTE

        public function verificaIdade() {
            if(getIdadeUsuario() > 5){
                return $this->assertTrue(true);
            } else {
                return $this->assertFalse(false);
            }
        }
    }
?>

