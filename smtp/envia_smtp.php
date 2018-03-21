<?php
#teste de envio de email

require("config_smtp.php"); 
require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->SetLanguage("br", "language/");
$mail->IsHTML(true);//ativa mensagem no formato html
$mail->IsSMTP();

//Cria PHPmailer class
$mail->From     = $seu_email; //email do remetente
$mail->FromName = "TESTE GUAIBIM"; //Nome de formatado do remetente
$mail->Host     = "$smtp_endereco"; //Pegando dados do alterar_esse_arquivo.php
$mail->Mailer   = "smtp"; //Usando protocolo SMTP
$mail->AddAddress("daniele_tcix@hotmail.com"); // envia email para cliente
//$mail->AddAddress("mixplick87@hotmail.com"); // envia email para cliente
$mail->Subject  = "Teste de envio de email";

#corpo da mensagem
$mail->Body .= "mensagem recebida!!!";

$mail->SMTPAuth = true;
$mail->Username = "$usuario_smtp"; 
$mail->Password = "$senha_smtp";

#Verifica se email sera enviado
if($mail->Send())
{	echo "Email enviado com sucesso!";
}else{
	echo "<br>Ocorreram erros ao enviar email.";
}	