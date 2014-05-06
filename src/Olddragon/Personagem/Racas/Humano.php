<?php

namespace Escudorpg\Olddragon\Personagem\Racas;

use Escudorpg\Olddragon\Personagem\Racas\Raca;

class Humano extends Raca 
{
    public function __construct()
    {
        $this->setNome('Humano');
        $this->setDeslocamentoBase(9);
    }            
}