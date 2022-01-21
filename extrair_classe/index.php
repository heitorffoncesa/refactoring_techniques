<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

require 'Contato.php';
require 'Usuario.php';

$contato = new Contato("Rua teste", "19834-209", "8374-1294", "Fixo", "00");
$usuario = new Usuario("Giovanni", "Silva", $contato);

echo $usuario->getNome();
echo "<br/>";
echo $usuario->getEnderecoECep();
echo "<br/>";
echo $usuario->getTelefoneDdd();
