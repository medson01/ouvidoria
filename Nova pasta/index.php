<?php

// Importa classes do PHPMailer para o namespace global
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';;
// Cria uma nova instância do PHPMailer
$mail = new PHPMailer;
// Diga ao PHPMailer para usar o SMTP
$mail->isSMTP();
// Ativar depuração de SMTP
// 0 = off (para uso em produção)
// 1 = mensagens do cliente
// 2 = mensagens do cliente e do servidor
$mail->SMTPDebug = 2;
// Definir o nome do host do servidor de email
$mail->Host = 'ssl://smtp.gmail.com:465'; 
// use
// $mail-> Host = gethostbyname ('smtp.gmail.com');
// se sua rede não suporta SMTP sobre IPv6
// Defina o número da porta SMTP - 587 para o TLS autenticado, também conhecido como envio SMTP RFC4409
$mail->Port = 465;
// Definir o sistema de criptografia para usar - ssl (reprovado) ou tls
$mail->SMTPSecure  =  'ssl' ;
// Se deseja usar a autenticação SMTP
$mail->SMTPAuth  =  false ;
// Nome de usuário para usar na autenticação SMTP - use o endereço de e-mail completo para o gmail
$mail->Username  =  "dtiipaseal@gmail.com" ;
// Senha para usar para autenticação SMTP
$mail->Password  =  "porceidom01" ;
// Defina para quem a mensagem deve ser enviada
$mail->setFrom ( 'dtiipaseal@gmail.com' , ' teste ' );
// Definir um endereço de resposta alternativo
//$mail->addReplyTo ( ' replyto@example.com ' , ' Primeiro Último ' );
// Defina para quem a mensagem deve ser enviada
$mail->addAddress ( 'medson01@gmail.com' , ' João da Silva ' );
// Definir a linha de assunto
$mail->Subject  =  ' Teste SMTP do GMail do PHPMailer ' ;
// Leia um corpo de mensagem HTML de um arquivo externo, converta imagens referenciadas em
// converte HTML em um corpo alternativo de texto simples básico
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
// Substitua o corpo do texto simples por um criado manualmente
$mail->AltBody  =  ' Este é um corpo de mensagem de texto simples ' ;
// Anexe um arquivo de imagem
//$mail->addAttachment ( ' images / phpmailer_mini.png ' );

// envia a mensagem, verifique se há erros
if( !$mail -> send() ){
    echo  " Mailer Error: "  .  $mail->ErrorInfo ;
}else{
    echo  " Mensagem enviada! " ;
    // Seção 2: IMAP
    // Descomente-os para salvar sua mensagem na pasta "E-mails enviados".
    # if (save_mail ($mail)) {
    #     echo "Mensagem salva!";
    # }
}
// Seção 2: IMAP
// Comandos IMAP requerem a extensão PHP IMAP, encontrada em: https://php.net/manual/en/imap.setup.php
// Função para chamar que usa as funções PHP imap _ * () para salvar mensagens: https://php.net/manual/en/book.imap.php
// Você pode usar imap_getmailboxes ($ imapStream, '/ imap / ssl', '*') para obter uma lista de pastas ou rótulos disponíveis.
// seja útil se você estiver tentando fazer isso funcionar em um servidor IMAP que não seja do Gmail.
function save_mail($mail)
{
    // Você pode alterar o 'E-mail enviado' para qualquer outra pasta ou tag
    $path  =  " {imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail " ;
    // Diga ao seu servidor para abrir uma conexão IMAP usando o mesmo nome de usuário e senha que você usou para o SMTP
    $imapStream  =  imap_open ( $path , $mail->Username , $mail->Password );
    $result  =  imap_append ( $imapStream , $path , $mail->getSentMIMEMessage ());
    imap_close ( $imapStream );
    return  $result ;
}