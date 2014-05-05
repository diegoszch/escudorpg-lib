<?php

namespace Escudorpg\Olddragon\Common\Atributos;

/**
 * Classe geram do atributo
 * 
 * @author Diego Spiegelberg Zuge
 * 
 * @package Escudorpg\Olddragon\Personagem\Atributos
 * @abstract  
 */
abstract class Atributo {
    
    protected $atributo;
        
    /**
     * Caso setado já atribui o forca automaticamente
     * @param int $atributo
     */
    public function __construct($atributo = 0)
    {
        $this->set($atributo);        
    }    
    
    /**
     * Seta atributo valor atributo
     * @param int $atributo
     */
    public function set($attributo)
    {
        $this->attributo = $attributo;
    }
    
    /**
     * Retorna Valor Atributo
     * @return int 
     */ 
    public function get()
    {
        return $this->attributo;
    }
    
    /**
     * Veficia se o valor do atributo é valido
     * @return boolean
     */
    protected function valAtributoValido()
    {
        return ($this->get() > 29 || $this->get() < 1) ? false : true;        
    }
}
