<?php declare(strict_types=1);

namespace Alura\OcultarDelegado;

require 'Departamento.php';
require 'Gerente.php';
require 'Pessoa.php';

$maria = new Pessoa(new Departamento(new Gerente('José')));

// violando o princípio do menor conhecimento Lei de Demeter (objeto só deve ter conhecimento de objetos próximos)
// echo $maria->getDepartamento()->getGerente()->getNome();

echo $maria->getNomeDoGerente();
