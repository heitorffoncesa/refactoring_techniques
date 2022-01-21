<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

class Funcionario
{
    private string $nome;
    private float $salario;

    public function __construct(string $nome, int $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function aumentaSalario(float $aumento)
    {
        $this->salario += $aumento;
    }
}
