<?php

use Escudorpg\Olddragon\Personagem\Atributos\Carisma;

class CarismaTest extends PHPUnit_Framework_TestCase 
{
    private $carisma;
    
    private $listNumeroMaximoSeguidores = array(
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 0,
        9 => 0,
        10 => 1,
        11 => 1,
        12 => 2,
        13 => 2,
        14 => 3,
        15 => 3,
        16 => 4,
        17 => 4,
        18 => 5,
        19 => 5,
        20 => 6,
        21 => 6,
        22 => 7,
        23 => 7,
        24 => 8,
        25 => 8,
        26 => 9,
        27 => 9,
        28 => 10,
        29 => 10,        
    );    
    
    private $listAjusteReacao = array(    
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
    
    private $listMortosVivosAfastados = array(    
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 1,
        9 => 1,
        10 => '1d2',
        11 => '1d2',
        12 => '1d3',
        13 => '1d3',
        14 => '1d4',
        15 => '1d4',
        16 => '1d6',
        17 => '1d6',
        18 => '1d8',
        19 => '1d8',
        20 => '2d4',
        21 => '2d4',
        22 => '1d10',
        23 => '1d10',
        24 => '1d12',
        25 => '1d12',
        26 => '2d6',
        27 => '2d6',
        28 => '1d20',
        29 => '1d20',        
    );       
    
    public function setUp()            
    {        
        $this->carisma = new Carisma();
    }
    
    public function testConstrutor()
    {
        $atributo = new Carisma(2);        
        $this->assertEquals(2, $atributo->get());
    }
    
    public function testNivelEstrapolado()
    {
        $this->carisma->set(0);        
        $this->assertEquals(null, $this->carisma->getNumMaxSeguidores());
        
        $this->carisma->set(30);        
        $this->assertEquals(null, $this->carisma->getNumMaxSeguidores());
        
        $this->carisma->set(60);
        $this->assertEquals(null, $this->carisma->getNumMaxSeguidores());         
    }
    
    public function testSetValor()
    {
        $this->carisma->set(1);                
        $this->assertEquals(1, $this->carisma->get());
    }    
    
    public function testNumeroMaximoSeguidores()
    {
        foreach ($this->listNumeroMaximoSeguidores as $nivel => $valor)
        {
            $this->carisma->set($nivel);
            $this->assertEquals($valor, $this->carisma->getNumMaxSeguidores());
        }        
    }
    
    public function testAjusteDeReacao()
    {                
        foreach ($this->listAjusteReacao as $nivel => $valor)
        {
            $this->carisma->set($nivel);
            $this->assertEquals($valor, $this->carisma->getAjuReacao());
        }        
    }
    
    public function testMortosVivosAfastados()
    {                
        foreach ($this->listMortosVivosAfastados as $nivel => $valor)
        {
            $this->carisma->set($nivel);
            $this->assertEquals($valor, $this->carisma->getMorVivAfastados());
        }        
    }
    
    
    
    

}