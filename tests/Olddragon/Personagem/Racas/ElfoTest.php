<?php

use Escudorpg\Olddragon\Personagem\Racas\Elfo;
    
class ElfoTest extends PHPUnit_Framework_TestCase 
{
    private $raca;
            
    public function setUp()            
    {        
        $this->raca = new Elfo();
    }
            
    public function testNome()
    {        
        $this->assertEquals('Elfo', $this->raca->getNome());
    }
    
    public function testDeslocamentoBase()
    {
        $this->assertEquals(9, $this->raca->getDeslocamentoBase());
    }
}
