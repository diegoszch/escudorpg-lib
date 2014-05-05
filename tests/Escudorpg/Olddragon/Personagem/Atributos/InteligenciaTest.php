<?php

use Escudorpg\Olddragon\Personagem\Atributos\Inteligencia;

class InteligenciaTest extends PHPUnit_Framework_TestCase
{
    private $inteligencia = 0;
    
    private $listIdiomaAdicional = array(
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 0,
        9 => 0,
        10 => 0,
        11 => 0,
        12 => 0,
        13 => 0,
        14 => 1,
        15 => 1,
        16 => 2,
        17 => 2,
        18 => 3,
        19 => 3,
        20 => 4,
        21 => 4,
        22 => 5,
        23 => 5,
        24 => 6,
        25 => 6,
        26 => 7,
        27 => 7,
        28 => 8,
        29 => 8,         
    );
    
    private $listChanceAprenderMagia = array(
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 0,
        9 => 0,
        10 => 0,
        11 => 0,
        12 => 0,
        13 => 0,
        14 => 25,
        15 => 25,
        16 => 35,
        17 => 35,
        18 => 45,
        19 => 45,
        20 => 55,
        21 => 55,
        22 => 65,
        23 => 65,
        24 => 75,
        25 => 75,
        26 => 85,
        27 => 85,
        28 => 95,
        29 => 95,         
    );      
    
    public function setUp()
    {
        $this->inteligencia = new Inteligencia();
    }
    
    public function testConstrutor()
    {
        $atributo = new Inteligencia(3);
        $this->assertEquals(3, $atributo->get());
    }
    
    public function testNivelEstrapolado()
    {
        $this->inteligencia->set(0);        
        $this->assertEquals(null, $this->inteligencia->getQtdIdiomas());
        
        $this->inteligencia->set(30);        
        $this->assertEquals(null, $this->inteligencia->getQtdIdiomas());
        
        $this->inteligencia->set(60);
        $this->assertEquals(null, $this->inteligencia->getQtdIdiomas());
        
        ////
                
        $this->inteligencia->set(0);        
        $this->assertEquals(null, $this->inteligencia->getChanceAprenderMagia());
        
        $this->inteligencia->set(30);        
        $this->assertEquals(null, $this->inteligencia->getChanceAprenderMagia());
        
        $this->inteligencia->set(60);
        $this->assertEquals(null, $this->inteligencia->getChanceAprenderMagia());

    }
    
    public function testSetValor()
    {
        $this->inteligencia->set(3);        
        $this->assertEquals(3, $this->inteligencia->get());
    }
    
    public function testIdiomas()
    {     
        foreach ($this->listIdiomaAdicional as $nivel => $valor)
        {
            $this->inteligencia->set($nivel);
            $this->assertEquals($valor, $this->inteligencia->getQtdIdiomas());
        }
    }
    
    public function testChanceAprenderMagia()
    {
        foreach ($this->listChanceAprenderMagia as $nivel => $valor)
        {
            $this->inteligencia->set($nivel);
            $this->assertEquals($valor, $this->inteligencia->getChanceAprenderMagia());
        }
    }
}