<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

require 'Contato.php';
require 'Usuario.php';
require 'Telefone.php';

$telefone = new Telefone('00', '4324-5423', 'Fixo');

$contato = new Contato('Rua Vergueiro 3185', '04101-300');

$usuario = new Usuario('Giovanni', 'Tempobono', $contato, $telefone);

echo $usuario->getNome();

echo $usuario->getTelefoneDdd();
