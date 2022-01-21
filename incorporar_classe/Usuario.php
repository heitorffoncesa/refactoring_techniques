<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Usuario
{
    private string $nome;
    private string $sobrenome;
    private Contato $contato;
    private Telefone $telefone;

    public function __construct(
        string $nome,
        string $sobrenome,
        Contato $contato,
        Telefone $telefone
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->contato = $contato;
        $this->telefone = $telefone;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getTelefoneDdd(): string
    {
        return $this->telefone->getTelefoneDdd();
    }
}
