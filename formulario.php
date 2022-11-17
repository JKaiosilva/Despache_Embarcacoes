<?php

$nome = $_POST['nome'];
$CPF = $_POST['CPF'];
$dataSaida = $_POST['dataSaida'];
$dataVolta = $_POST['dataVolta'];
$registro = $_POST['registro'];
$emailRemetente = $_POST['emailRemetente'];
$email = 'jkaio37@hotmail.com';


$destino ='jkaio37@hotmail.com';
$assunto = 'Despache embarcacoes';
$corpo = "Nome: ".$nome."\n".$CPF."\n".$registro."\n".$emailRemetente;
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";

if(mail($destino,$assunto,$corpo,$headers)) {
    echo("Email enviado");
}else{
    echo("Erro");
}
?>