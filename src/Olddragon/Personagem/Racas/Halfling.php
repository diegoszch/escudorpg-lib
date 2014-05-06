<?php

namespace Escudorpg\Olddragon\Personagem\Racas;

use Escudorpg\Olddragon\Personagem\Racas\Raca;

class Halfling extends Raca 
{
    public function __construct()
    {
        $this->setNome('Halfling');
        $this->setDeslocamentoBase(6);
    }
}

