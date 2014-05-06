<?php

use Escudorpg\Olddragon\Personagem\Classes\Clerigo;
    
class ClerigoTest extends PHPUnit_Framework_TestCase 
{
    private $classe;
            
    public function setUp()            
    {        
        $this->classe = new Clerigo();
    }
            
    public function testNome()
    {        
        $this->assertEquals('Clerigo', $this->classe->getNome());
    }        
}