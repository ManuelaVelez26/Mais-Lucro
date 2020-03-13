<?php

include 'conecta_mysql.inc';

$campanha       = $_POST['campanha']; //Tipo de modelo da campanha
$titulo         = $_POST['titulo']; //Titulo da campanha
$conteudo_email = $_POST['conteudo_email']; //Conteudo do email
$rodape         = $_POST['rodape']; //rodapé do email
$dh_email       = $_POST['dh_email']; //Data e hora de disparo do email
$conteudo_sms   = $_POST['conteudo_sms']; //Conteudo que vai no sms
$dh_sms         = $_POST['dh_sms']; //data e hora do envio de sms
$retorno        = $_POST['retorno']; //periodo de retorno

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$campanha',$titulo','$conteudo_email','$rodape','$dh_email','$conteudo_sms','$dh_sms',$retorno')";

if ($conexao->query($sql) === TRUE) {
    echo "Formulário enviado com sucesso!";
} else {
    echo "Erro:" . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>