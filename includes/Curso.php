<?php

class Curso
{
    private string $nome;
    private int $duracao;

    public function __construct(string $nome, int $duracao)
    {
        $this->nome = $nome;
        $this->duracao = $duracao;
    }

    public function classificarDuracao(): string
    {
        if ($this->duracao < 2) {
            return 'Curso de curta duração';
        }

        if ($this->duracao >= 2 && $this->duracao <= 3) {
            return 'Curso de média duração';
        }

        return 'Curso de longa duração';
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDuracao(): int
    {
        return $this->duracao;
    }
}

?>
