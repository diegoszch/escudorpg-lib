<?php

use Escudorpg\Olddragon\Personagem\Atributos\Constituicao;

class ConstituicaoTest extends PHPUnit_Framework_TestCase
{
    private $constituicao = 0;
        
    private $listAjustePontosDeVidaProtecao = array(
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
    
    private $listChanceRessurreicao = array(
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 1,
        7 => 1,
        8 => 5,
        9 => 5,
        10 => 10,
        11 => 10,
        12 => 25,
        13 => 25,
        14 => 50,
        15 => 50,
        16 => 75,
        17 => 75,
        18 => 95,
        19 => 95,
        20 => 100,
        21 => 100,
        22 => 100,
        23 => 100,
        24 => 100,
        25 => 100,
        26 => 100,
        27 => 100,
        28 => 100,
        29 => 100,        
    );
 
    
    public function setUp()
    {
        $this->constituicao = new Constituicao();
    }
    
    public function testConstrutor()
    {
        $atributo = new Constituicao(2);
        $this->assertEquals(2, $atributo->get());
    }
    
    public function testSetValor()
    {
        $this->constituicao->set(3);   
        $this->assertEquals(3, $this->constituicao->get());
    }
    
    public function testNivelEstrapolado()
    {
        $this->constituicao->set(0);        
        $this->assertEquals(null, $this->constituicao->getAjustePonVidProtecao());
        
        $this->constituicao->set(30);        
        $this->assertEquals(null, $this->constituicao->getAjustePonVidProtecao());
        
        $this->constituicao->set(60);
        $this->assertEquals(null, $this->constituicao->getAjustePonVidProtecao());
    }
    
    public function testAjusteDePontosDeVidaProtecao()
    {         
        foreach ($this->listAjustePontosDeVidaProtecao as $nivel => $valor)
        {
            $this->constituicao->set($nivel);
            $this->assertEquals($valor, $this->constituicao->getAjustePonVidProtecao());
        }
    }
    
    public function testChanceDeRessurreicao()
    {        
        foreach ($this->listChanceRessurreicao as $nivel => $valor)
        {
            $this->constituicao->set($nivel);
            $this->assertEquals($valor, $this->constituicao->getChanceRessurreicao());
        }        
    }
}