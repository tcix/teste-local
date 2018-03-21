<?php
#include "../sistema/funcoes/conexao.php";

if( $_SERVER['REQUEST_METHOD']=='POST' )
{

	$nome     = getPost('nome');
	$email    = getPost('email');
	$mensagem = getPost('mensagem');

	$nome = utf8_decode($nome);
	$email = utf8_decode($email);
	$mensagem = utf8_decode($mensagem);

	#envia email
	$_NM_RAZAOSOCIAL = "TCIx Informática";

    /*conecta();
	$queryfi = "select nm_email from ti_filiais";
	$resulfi = mysql_query($queryfi);
	$rowfi   = mysql_fetch_object($resulfi);
	$mail_from = $rowfi->nm_email;*/

	$mail_from = "daniele@tcix.com.br";

	require("smtp/config_smtp.php"); // pega os dados personalizados desse arquivo
	require("smtp/class.phpmailer.php"); // envio de e-mail com autenticacao do provedor

	$mail = new PHPMailer();
	$mail->SetLanguage("br", "language/");
	$mail->IsHTML(true);//ativa mensagem no formato html
	$mail->IsSMTP();

	//Cria PHPmailer class
	$mail->From     = $mail_from; //email do remetente
	$mail->FromName = $_NM_RAZAOSOCIAL; //Nome de formatado do remetente
	$mail->Host     = "$smtp_endereco"; //Pegando dados do alterar_esse_arquivo.php
	$mail->Mailer   = "smtp"; //Usando protocolo SMTP
	$mail->AddAddress($mail_from); // envia email para Guaibim
	$mail->AddBCC('daniele@tcix.com.br'); //cópia oculta
	$mail->AddBCC('tcix@hotmail.com'); //cópia oculta
	$mail->Subject  = "Contato Site TCIx";

	$limitador = "_=======". date('YmdHms'). time() . "=======_";
	$mailheaders = "From: $_NM_RAZAOSOCIAL <$mail_from>\r\n";
	$mailheaders .= "MIME-version: 1.0\r\n";
	$mailheaders .= "Content-type: multipart/related; boundary=\"$limitador\"\r\n";
	$cid  = date('YmdHms').'.'.time();
	$envio = date("d/m/Y H:i:s");

	$totSUBTOTALs = 0;

	$mail->Body .= "
	<html>
	<body>
	<table width='800' border='0' style='border-collapse: collapse;'>
	<tr>
		<td colspan='2'><font size='3'><strong>Contato Site TCIx</strong></font></td>
	</tr>
	<tr><td colspan='2' height='10px'></td></tr>
	<tr>
		<td>Nome:</td>
		<td align='left'>$nome</td>
	</tr>
	<tr>
		<td>E-mail:</td>
		<td>$email</td>
	</tr>
	<tr>
		<td>Mensagem:</td>
		<td>$mensagem</td>
	</tr>
	<tr><td colspan='2' height='10px'></td></tr>
	<tr><td colspan='2'><font size='2'>contato enviado em: $envio</font></td></tr>
	</table>
	</body>
	</html>";

	#testa como email está sendo enviado
	#print $mail->Body;
	#exit();

	$mail->SMTPAuth = true;
	$mail->Username = "$usuario_smtp"; 
	$mail->Password = "$senha_smtp";

	//Verifica se email sera enviado
	if(!$mail->Send())
	{ //Checa erros no envo do email
	echo "<font color='#D90000'>Opss..ocorreram erros ao enviar email!</font><br />"; //Imprime mensagem de que email n&agrave;o foi enviado
	echo "<b>Informa&ccedil;&otilde;es do erro:</b> <br />" . $mail->ErrorInfo;
	exit; 
	}

	echo "<font color='#1A6600'>Mensagem enviada com sucesso!</font>";
}

function getPost( $key ){
	return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
}
function filter( $var ){
	return $var;
}