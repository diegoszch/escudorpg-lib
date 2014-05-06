<?php

namespace Escudorpg\Olddragon\Personagem\Classes;

abstract class Classe {
    
    protected $nome_da_classe = "";    
    
    /**
     * Seta o Nome da Classe
     * @param type $nome_da_classe
     */
    protected function setNome($nome_da_classe = "")
    {
        $this->nome_da_classe = $nome_da_classe;
    }
            
    /**
     * Recupera o Nome da Classe
     * @return type
     */
    public function getNome()
    {
        return $this->nome_da_classe;
    }
        
}