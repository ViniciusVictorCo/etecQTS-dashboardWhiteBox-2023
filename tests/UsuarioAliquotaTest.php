<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\UsuarioAliquota;

    class UsuarioAliquotaTest extends TestCase
    {
        
        public function testNomeUsuario()
        {
            $p1 = new UsuarioAliquota("Vinicius Victor", "111.111.111-11", 10000);

            $this->assertEquals("Vinicius Victor", $p1->getNomeUsuario());
        }

        public function testCPFUsuario(){
            $p2 = new UsuarioAliquota("Vinicius Victor", "11111111111", 10000);
            
            $this->assertEquals(11111111111, $p2->getCpfUsuario());        
        }

        public function testRendimentoUsuario(){
            $p3 = new UsuarioAliquota("Vinicius Victor", "111.111.111-11", 10000);
            
            $this->assertEquals("R$10000", $p3->getRendimentoUsuario());        
        }

        /**
         * @dataProvider testAliquotaProvider
         */
        public function calculaAliquota($nome, $cpf, $renda,$aliquota)
        {
           $p4 = new UsuarioAliquota($nome, $cpf, $renda);

           $this->assertEquals($aliquota, $p4->calcularAliquota());        
        }

        static function testAliquotaProvider(){
            return [
                ["Vinicius Victor", "111.111.111-11", 0, 0]
                
            ];
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

        
    }
?>

