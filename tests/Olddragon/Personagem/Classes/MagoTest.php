<?php

use Escudorpg\Olddragon\Personagem\Classes\Mago;
    
class MagoTest extends PHPUnit_Framework_TestCase 
{
    private $classe;

    public function setUp()
    {
        $this->classe = new Mago();
    }

    public function testNome()
    {
        $this->assertEquals('Mago', $this->classe->getNome());
    }
}