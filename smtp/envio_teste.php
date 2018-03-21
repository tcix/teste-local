<?php
require("config_smtp.php"); 
require("class.phpmailer.php");

$_NM_RAZAO = "TCIx Informática";

$mail = new PHPMailer();
$mail->SetLanguage("br", "language/");
$mail->IsHTML(true);//ativa mensagem no formato html
$mail->IsSMTP();

//Cria PHPmailer class
$mail->From     = $seu_email; //email do remetente
$mail->FromName = $_NM_RAZAO; //Nome de formatado do remetente
$mail->Host     = "$smtp_endereco"; //Pegando dados do alterar_esse_arquivo.php
$mail->Mailer   = "smtp"; //Usando protocolo SMTP
$mail->AddAddress('daniele@tcix.com.br');
#$mail->AddAddress('regional2@lojasguaibim.com.br'); // enviar para esse email
$mail->Subject  = "teste de assunto";

$limitador = "_=======". date('YmdHms'). time() . "=======_";
$mailheaders = "From: $_NM_RAZAO <$seu_email>\r\n";
$mailheaders .= "MIME-version: 1.0\r\n";
$mailheaders .= "Content-type: multipart/related; boundary=\"$limitador\"\r\n";
$cid = date('YmdHms').'.'.time();

$mail->Body .= "teste de envio de email";

print "corpo do email<br><br>";
print $mail->Body;
print "<br>fim de corpo do email<br><br>";

$mail->SMTPAuth = true;
$mail->Username = "$usuario_smtp"; 
$mail->Password = "$senha_smtp";

// Exibe uma mensagem de resultado
if(!$mail->Send()){
	echo "<b>Informa&ccedil;&otilde;es do erro:</b> <br />" . $mail->ErrorInfo;
} else {
	echo "<br>E-mail enviado com sucesso!";
}