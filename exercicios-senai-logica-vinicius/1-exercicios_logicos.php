<?php
//Declaração das variáveis

$notas=[6,8];
$aulas_assistidas=33;
$total_aulas=40;

//Processamento dos Dados

$operacao_media=($notas[0]+$notas[1])/2;
$operacao_presenca=($aulas_assistidas/$total_aulas)*100;

function dados_alunos($media,$presenca){
    $media;
    $presenca;
    echo("Média: " . $media);
    echo "\n";
    echo("Presença: ". $presenca."%");
    echo "\n";
}

if($operacao_media>=7&&$operacao_presenca>=75){
    echo("Aprovado\n");
    dados_alunos($operacao_media,$operacao_presenca);
}else{
    echo("Reprovado\n");
    dados_alunos($operacao_media,$operacao_presenca);
};
?>
