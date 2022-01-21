<?php declare(strict_types=1);

namespace Alura\MoverCampo;

require 'Contato.php';
require 'Usuario.php';

$contato = new Contato('Rua teste 3185', '115021-0231', 'mario@teste.com.br');
$usuario = new Usuario('Mario', 'Costa', $contato);

$usuario->imprimirInformacoes();
