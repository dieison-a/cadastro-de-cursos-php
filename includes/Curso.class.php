<?php

class Curso
{
    private $nome;
    private $duracao;

    public function __construct($nome, $duracao)
    {
        $this->nome = $nome;
        $this->duracao = $duracao;
    }

    public function classificarDuracao()
    {
        if ($this->duracao < 2) {
            return 'Curso de curta duração';
        }

        if ($this->duracao >= 2 && $this->duracao <= 3) {
            return 'Curso de média duração';
        }

        return 'Curso de longa duração';
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }
}
