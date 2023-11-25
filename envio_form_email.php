<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mensagem_erro = "";
$mensagem_sucesso = "";

require 'vendor/autoload.php'; // O caminho para o arquivo autoload.php pode variar dependendo do seu projeto

$mail = new PHPMailer(true);


$mail->isSMTP();
$mail->Host = 'smtp.outlook.com';
$mail->SMTPAuth = true;
$mail->Username = 'ygor-nogueira@hotmail.com';
$mail->Password = 'babinogueira7292';
$mail->SMTPSecure = 'tls'; // Use 'tls' ou 'ssl' dependendo das configurações do seu servidor
$mail->Port = 587; // Porta SMTP


$mail->setFrom('ygor-nogueira@hotmail.com', 'Cliente');
$mail->addAddress('ygorpacheco92@gmail.com', 'Ygor');

$mail->isHTML(true);
$mail->Subject = 'Contato do site';
$mail->Body = 'Olá gostaria de orçamento e mais informações sobre seu trabalho';

 // Coleta os dados do formulário
 $nome = $_POST["nome"];
 $email = $_POST["email"];
 $tel = $_POST["tel"];
 $tipoContato = $_POST["tipoContato"];
 $contato = $_POST["contato"];
 $obs = $_POST["obs"];

 // Monta a mensagem com os dados do formulário
 $mensagem_completa = "Nome: $nome<br>";
 $mensagem_completa .= "Email: $email<br>";
 $mensagem_completa .= "Telefone: $tel<br>";
 $mensagem_completa .= "Tipo de serviço: $tipoContato<br>";
 $mensagem_completa .= "Contato cliente: $contato<br>";
 $mensagem_completa .= "Mensagem: $obs";

 $mail->MsgHTML($mensagem_completa);

 // Envie o e-mail
 if ($mail->send()) {
    header("Location: index.php");
    exit();
 } else {
    $mail->ErrorInfo;
 }

?>