<?php declare(strict_types=1);

namespace Alura\MoverCampo;

class Contato
{
    private string $endereco;
    private string $telefone;
    private string $email;

    public function __construct(string $endereco, string $telefone, string $email)
    {
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function __toString()
    {
        return "<p>Email: $this->email</p>
                <p>Endereço: $this->endereco</p>
                <p>Telefone: $this->telefone</p>";
    }
}
