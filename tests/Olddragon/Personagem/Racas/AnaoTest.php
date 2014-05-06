<?php

use Escudorpg\Olddragon\Personagem\Racas\Anao;
    
class AnaoTest extends PHPUnit_Framework_TestCase 
{
    private $raca;
            
    public function setUp()            
    {        
        $this->raca = new Anao();
    }
            
    public function testNome()
    {        
        $this->assertEquals('Anao', $this->raca->getNome());
    }
    
    public function testDeslocamentoBase()
    {
        $this->assertEquals(6, $this->raca->getDeslocamentoBase());
    }
}