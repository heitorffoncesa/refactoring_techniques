<?php

declare(strict_types=1);

namespace Alura\SubstituirArrayPorObjeto;

class Usuario
{
    private string $nome;
    private string $sobrenome;
    private string $empresa;
    private string $cargo;

    public function __construct(string $nome, string $sobrenome, string $empresa, string $cargo)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->empresa = $empresa;
        $this->cargo = $cargo;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    /**
     * @return string
     */
    public function getEmpresa(): string
    {
        return $this->empresa;
    }

    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }
}