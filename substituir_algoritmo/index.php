<?php declare(strict_types=1);

$aulasDisponiveis = [
    'JavaScript Avançado',
    'Iniciando com Laravel',
    'Técnicas de Git',
    'JAVA Web'
];

function buscaAulas(string $pesquisa, array $aulasDisponiveis): array
{
    $encontradas = [];

    foreach ($aulasDisponiveis as $aula) {
        // O 'i' desabilita o case-sensitive
        if (preg_match("/{$pesquisa}/i", $aula) !== 0) {
            array_push($encontradas, $aula);
        }
    }

    return $encontradas;
}

var_dump(buscaAulas('Java', $aulasDisponiveis));
