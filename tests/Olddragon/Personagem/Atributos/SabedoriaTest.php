<?php

use Escudorpg\Olddragon\Personagem\Atributos\Sabedoria;

class SabedoriaTest extends PHPUnit_Framework_TestCase
{
    private $sabedoria = 0;
        
    private $listAjusteProtecao = array(
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
        $this->sabedoria = new Sabedoria();
    }
    
    public function testConstrutor()
    {
        $atributo = new Sabedoria(2);
        $this->assertEquals(2, $atributo->get());
    }
    
    public function testSetValor()
    {
        $this->sabedoria->set(3);   
        $this->assertEquals(3, $this->sabedoria->get());
    }
    
    public function testNivelEstrapolado()
    {
        $this->sabedoria->set(0);        
        $this->assertEquals(null, $this->sabedoria->getAjusteProtecao());
        
        $this->sabedoria->set(30);        
        $this->assertEquals(null, $this->sabedoria->getAjusteProtecao());
        
        $this->sabedoria->set(60);
        $this->assertEquals(null, $this->sabedoria->getAjusteProtecao());
    }
    
    public function testAjusteProtecao()
    {         
        foreach ($this->listAjusteProtecao as $nivel => $valor)
        {
            $this->sabedoria->set($nivel);
            $this->assertEquals($valor, $this->sabedoria->getAjusteProtecao());
        }
    }
}