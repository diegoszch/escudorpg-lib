<?php

use Escudorpg\Olddragon\Personagem\Atributos\Destreza;

class DestrezaTest extends PHPUnit_Framework_TestCase 
{
    private $destreza;
    
    private $listAjusteAtaSurDefPro = array(
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
    
    private $listLocDesArmadilhas = array(
        1 => -25,
        2 => -20,
        3 => -20,
        4 => -15,
        5 => -15,
        6 => -10,
        7 => -10,
        8 => -5,
        9 => -5,
        10 => 0,
        11 => 0,
        12 => 0,
        13 => 0,
        14 => 0,
        15 => 0,
        16 => 5,
        17 => 5,
        18 => 10,
        19 => 10,
        20 => 15,
        21 => 15,
        22 => 20,
        23 => 20,
        24 => 25,
        25 => 25,
        26 => 30,
        27 => 30,
        28 => 35,
        29 => 35,        
    ); 
    
    private $listMovSilAbrFechaduras = array(
        1 => -25,
        2 => -20,
        3 => -20,
        4 => -15,
        5 => -15,
        6 => -10,
        7 => -10,
        8 => -5,
        9 => -5,
        10 => 0,
        11 => 0,
        12 => 5,
        13 => 5,
        14 => 10,
        15 => 10,
        16 => 15,
        17 => 15,
        18 => 20,
        19 => 20,
        20 => 25,
        21 => 25,
        22 => 30,
        23 => 30,
        24 => 35,
        25 => 35,
        26 => 40,
        27 => 40,
        28 => 45,
        29 => 45,        
    ); 

    private $listEscSobPungar = array(
        1 => -25,
        2 => -20,
        3 => -20,
        4 => -15,
        5 => -15,
        6 => -10,
        7 => -10,
        8 => -5,
        9 => -5,
        10 => 0,
        11 => 0,
        12 => 0,
        13 => 0,
        14 => 5,
        15 => 5,
        16 => 10,
        17 => 10,
        18 => 15,
        19 => 15,
        20 => 20,
        21 => 20,
        22 => 25,
        23 => 25,
        24 => 30,
        25 => 30,
        26 => 35,
        27 => 35,
        28 => 40,
        29 => 40,        
    );     
 
    public function setUp()            
    {        
        $this->destreza = new Destreza();
    }
    
    public function testConstrutor()
    {
        $atributo = new Destreza(2);        
        $this->assertEquals(2, $atributo->get());
    }
                
    public function testSetValor()
    {
        $this->destreza->set(1);      
        $this->assertEquals(1, $this->destreza->get());
    }
    
    public function testAjusteDeAtaqueSurpresaDefesaProtecao()
    {
        foreach ($this->listAjusteAtaSurDefPro as $nivel => $valor)
        {
            $this->destreza->set($nivel);
            $this->assertEquals($valor, $this->destreza->getAjusteAtaSurDefPro());
        }        
    }
    
    public function testLocalizarDesarmarArmadilhas()
    {
        foreach ($this->listLocDesArmadilhas as $nivel => $valor)
        {
            $this->destreza->set($nivel);
            $this->assertEquals($valor, $this->destreza->getLocDesArmadilhas());
        }                
    }

    public function testMoverseEmSilencioAbrirFechaduras()
    {
        foreach ($this->listMovSilAbrFechaduras as $nivel => $valor)
        {
            $this->destreza->set($nivel);
            $this->assertEquals($valor, $this->destreza->getMovSilAbrFechaduras());
        }        
    }
    
    public function testEsconderseNasSombrasPungar()
    {
        foreach ($this->listEscSobPungar as $nivel => $valor)
        {
            $this->destreza->set($nivel);
            $this->assertEquals($valor, $this->destreza->getEscSobPungar());
        }             
    }
}
   