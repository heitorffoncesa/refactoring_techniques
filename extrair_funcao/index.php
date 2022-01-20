<?php declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => 5000,
];

function exibeSaldo($nome, $saldo)
{
    echo "<p>O saldo do(a) {$nome} é: {$saldo}</p>";
}

function exibeErro()
{
    echo "<p>Correntista não existente.</p>";
}

function exibeSaldoCorrentista(string $nome, array $saldos)
{
    if (array_key_exists($nome, $saldos)) {
        exibeSaldo($nome, $saldos['Giovanni']);
    } else {
        exibeErro();
    }
}

exibeSaldoCorrentista("Giovanni", $saldos);
// NOTA: Não é necessário colocar comentário quando a função já indica o que faz no nome

