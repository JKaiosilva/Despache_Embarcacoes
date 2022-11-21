<?php

if(!isset($_POST) || empty($_POST)) {
    $erro = 'Nada foi postado';
}


$nome = $_POST['nome'];
$CPF = $_POST['CPF'];
$dataSaida = $_POST['dataSaida'];
$dataVolta = $_POST['dataVolta'];
$registro = $_POST['registro'];
$emailRemetente = $_POST['emailRemetente'];
$email = 'jkaio37@hotmail.com';

$dataSaidaFinal = DateTime::createFromFormat('d/m/Y', $dataSaida);
$dataVoltaFinal = DateTime::createFromFormat('d/m/Y', $dataVolta);


foreach($_POST as $chave => $valor) {
    $$chave = trim(strip_tags($valor));
    if(empty($valor)) {
        $erro = 'Existem campos em branco';
    }
}

if((!isset($nome) || ! is_string($idade)) && !$erro) {
    $erro = 'O nome deve conter apenas caracteres válidos.';
}

if((!isset($CPF) || ! is_numeric($CPF)) && !$erro) {
    $erro = 'O CPF deve conter apenas números.';
}

if($dataSaidaFinal && $dataSaidaFinal->format('d/m/Y') != $dataSaida && !$erro) {
    $erro = 'Data de saída inválida.';
}

if($dataVoltaFinal && $dataVoltaFinal->format('d/m/Y') != $dataVolta && !$erro) {
    $erro = 'Data de volta inválida.';
}





?>