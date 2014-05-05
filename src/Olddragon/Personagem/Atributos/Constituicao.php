<?php

namespace Escudorpg\Olddragon\Personagem\Atributos;
      
use Escudorpg\Olddragon\Common\Atributos\Constituicao as CommonConstituicao;

/**
 * Classe responsavel pelo atributo Constituicao
 * 
 * @author Diego Spiegelberg Zuge
 */
class Constituicao extends CommonConstituicao
{     
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
    

    /**
     * Retorna Ajuste de pontos de vida e protecao
     * @return int
     */
    public function getAjustePonVidProtecao()
    {
        if(!$this->valAtributoValido())
        {
            return null;
        }

        return $this->listAjustePontosDeVidaProtecao[$this->get()];
    }
    
    /**
     * Retorna a chance de ressurreicao
     * @return int
     */
    public function getChanceRessurreicao()
    {
        if(!$this->valAtributoValido())
        {
            return null;
        }

        return $this->listChanceRessurreicao[$this->get()];
    }
}