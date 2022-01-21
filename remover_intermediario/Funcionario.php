<?php declare(strict_types=1);

namespace Alura\RemoverIntermediario;

class Funcionario
{

    private string $nome;
    private string $cargo;

    public function __construct(string $nome, string $cargo)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
}
