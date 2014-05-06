<?php

use Escudorpg\Olddragon\Personagem\Racas\Halfling;
    
class HalflingTest extends PHPUnit_Framework_TestCase 
{
    private $raca;
            
    public function setUp()            
    {        
        $this->raca = new Halfling();
    }
            
    public function testNome()
    {        
        $this->assertEquals('Halfling', $this->raca->getNome());
    }
    
    public function testDeslocamentoBase()
    {
        $this->assertEquals(6, $this->raca->getDeslocamentoBase());
    }
}