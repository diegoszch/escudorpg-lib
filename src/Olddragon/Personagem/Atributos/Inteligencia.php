<?php

namespace Escudorpg\Olddragon\Personagem\Atributos;

use Escudorpg\Olddragon\Common\Atributos\Inteligencia as CommonInteligencia;

/**
 * Classe responsavel pelo atributo Inteligencia
 * 
 * @author Diego Spiegelberg Zuge
 */
class Inteligencia extends CommonInteligencia
{            
    private $list_idioma_adicional = array(
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
    
    private $list_chance_aprender_magia = array(
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
    
    /**
     * Magias arcanas adicionais (Desenvolver)
     * @var type 
     */
    private $list_magias_arcanas = array(
        
    );
    
    /**
     * Retorna quantidade de idiomas adicionais
     * @return int
     */
    public function getQtdIdiomas()
    {        
        if(!$this->valAtributoValido())
        {
            return null;
        }
        
        return $this->list_idioma_adicional[$this->get()];
    }
    
    /**
     * Retorna a porcentagem de chance de aprender magia
     * @return int
     */
    public function getChanceAprenderMagia()
    {
        if(!$this->valAtributoValido())
        {
            return null;
        }
        
        return $this->list_chance_aprender_magia[$this->get()];
    }
    
    /**
     * Retorna magias arcanas adicionais (Desenvolver depois)
     * @return null
     */
    public function getMagiasArcanasAdicionais()
    {
        return null;
    }
}
