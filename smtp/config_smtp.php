<?php
/*
include "../sistema/funcoes/conexao.php";

conecta();
$query = "select nm_email,nm_email_senha from ti_filiais";
$resul = mysql_query($query) or die (mysql_error());
$row   = mysql_fetch_array($resul);

$smtp_endereco = "smtp.lojasguaibim.com.br";	// coloque aqui seu endereço ou ip do servidor SMTP
$seu_email     = $row['nm_email'];     // coloque aqui o endereço de email que deseja receber as mensagems do formulário de contato.
$usuario_smtp  = $row['nm_email'];     // coloque aqui seu usuário SMTP em geral é o próprio email que envia.
$senha_smtp    = $row['nm_email_senha'];	// coloque aqui sua senha para o usuário SMTP acima.
*/

$smtp_endereco = "smtp.tcix.com.br";	// coloque aqui seu endereço ou ip do servidor SMTP
$seu_email     = "daniele@tcix.com.br"; // coloque aqui o endereço de email que deseja receber as mensagems do formulário de contato.
$usuario_smtp  = "daniele@tcix.com.br"; // coloque aqui seu usuário SMTP em geral é o próprio email que envia.
$senha_smtp    = "XPxtcix+03";				// coloque aqui sua senha para o usuário SMTP acima.