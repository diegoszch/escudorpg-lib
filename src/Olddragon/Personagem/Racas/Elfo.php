<?php

namespace Escudorpg\Olddragon\Personagem\Racas;

use Escudorpg\Olddragon\Personagem\Racas\Raca;

class Elfo extends Raca 
{
    public function __construct()
    {
        $this->setNome('Elfo');
        $this->setDeslocamentoBase(9);
    }
}