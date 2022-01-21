<?php declare(strict_types=1);

namespace Alura\SubstituirNumeroMagico;

class CalculadoraDeSalario
{
    private string $salario;

    private const INSS = .08;
    private const IR = .075;

    public function __construct(string $salario)
    {
        $this->salario = $salario;
    }

    public function aplicaDescontos()
    {
        return $this->salario - $this->salario * self::INSS - $this->salario * self::IR;
    }
}
