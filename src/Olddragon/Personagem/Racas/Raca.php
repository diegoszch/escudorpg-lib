<?php

namespace Escudorpg\Olddragon\Personagem\Racas;

abstract class Raca {
    
    protected $nome_da_raca = "";    
    protected $deslocamento_base = 0;

    /**
     * Seta o Nome da Raça
     * @param type $nome_da_raca
     */
    protected function setNome($nome_da_raca = "")
    {
        $this->nome_da_raca = $nome_da_raca;
    }
            
    /**
     * Recupera o Nome da Raça
     * @return type
     */
    public function getNome()
    {
        return $this->nome_da_raca;
    }
    
    /**
     * Seta o deslocamento da raça
     * @param int $deslocamento
     */
    protected function setDeslocamentoBase($deslocamento = 0)
    {
        $this->deslocamento_base = $deslocamento;
    }

    /**
     * Retorna o deslocamento base da raça
     * @return int
     */
    public function getDeslocamentoBase()
    {
        return $this->deslocamento_base;
    }
    
}