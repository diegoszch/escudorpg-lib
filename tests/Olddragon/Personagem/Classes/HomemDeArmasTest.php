<?php

use Escudorpg\Olddragon\Personagem\Classes\HomemDeArmas;
    
class HomemDeArmasTest extends PHPUnit_Framework_TestCase 
{
    private $classe;
            
    public function setUp()            
    {        
        $this->classe = new HomemDeArmas();
    }
            
    public function testNome()
    {        
        $this->assertEquals('HomemDeArmas', $this->classe->getNome());
    }        
}