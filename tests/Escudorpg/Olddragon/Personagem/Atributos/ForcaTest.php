<?php

use Escudorpg\Olddragon\Personagem\Atributos\Forca;

class ForcaTest extends PHPUnit_Framework_TestCase 
{
    private $forca;
    
    private $listAtaque = array(
        1 => -5,
        2 => -4,
        3 => -4,
        4 => -3,
        5 => -3,
        6 => -2,
        7 => -2,
        8 => -1,
        9 => -1,
        10 => 0,
        11 => 0,
        12 => 1,
        13 => 1,
        14 => 2,
        15 => 2,
        16 => 3,
        17 => 3,
        18 => 4,
        19 => 4,
        20 => 5,
        21 => 5,
        22 => 6,
        23 => 6,
        24 => 7,
        25 => 7,
        26 => 8,
        27 => 8,
        28 => 9,
        29 => 9,        
    );    
    
    public function setUp()            
    {        
        $this->forca = new Forca();
    }
    
    public function testConstrutor()
    {
        $atributo = new Forca(2);        
        $this->assertEquals(2, $atributo->get());
    }
    
    public function testNivelEstrapolado()
    {
        $this->forca->set(0);        
        $this->assertEquals(null, $this->forca->getAjusteAtaque());
        
        $this->forca->set(30);        
        $this->assertEquals(null, $this->forca->getAjusteAtaque());
        
        $this->forca->set(60);
        $this->assertEquals(null, $this->forca->getAjusteAtaque());
    }
                
    public function testSetValor()
    {
        $this->forca->set(1);                
        $this->assertEquals(1, $this->forca->get());
    }

    public function testSetAjusteDeAtaque()
    {           
        foreach ($this->listAtaque as $nivel => $valor)
        {
            $this->forca->set($nivel);
            $this->assertEquals($valor, $this->forca->getAjusteAtaque());
        }                
    }        
}