<?php

use Escudorpg\Olddragon\Personagem\Racas\Humano;
    
class HumanoTest extends PHPUnit_Framework_TestCase 
{
    private $raca;
            
    public function setUp()            
    {        
        $this->raca = new Humano();
    }
            
    public function testNome()
    {        
        $this->assertEquals('Humano', $this->raca->getNome());
    }
    
    public function testDeslocamentoBase()
    {
        $this->assertEquals(9, $this->raca->getDeslocamentoBase());
    }
}