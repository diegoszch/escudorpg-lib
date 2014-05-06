<?php

use Escudorpg\Olddragon\Personagem\Classes\Ladrao;
    
class LadraoTest extends PHPUnit_Framework_TestCase 
{
    private $classe;
            
    public function setUp()            
    {        
        $this->classe = new Ladrao();
    }
            
    public function testNome()
    {        
        $this->assertEquals('Ladrao', $this->classe->getNome());
    }        
}