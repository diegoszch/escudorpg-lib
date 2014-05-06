<?php

namespace Escudorpg\Olddragon\Personagem\Racas;

use Escudorpg\Olddragon\Personagem\Racas\Raca;

class Anao extends Raca 
{
    public function __construct()
    {
        $this->setNome('Anao');
        $this->setDeslocamentoBase(6);        
    }
}