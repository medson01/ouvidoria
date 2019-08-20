<?php

//#########################################
// Recebe as informações do formulário
//#########################################

if(isset($_POST['nome'])){
 	$nome = $_POST['nome'];
}
if(isset($_POST['email'])){
	$email = $_POST['email'];
}
if(isset($_POST['telefone'])){
    $telefone = $_POST['telefone'];
}




switch ($_POST['assunto']) {
    case '0':
        $assunto = "";
        break;
    case '1':
       $assunto = "Reclamação";
        break;
    case '2':
       $assunto = "Solicitação de Providência";
        break;
    case '3':
        $assunto = "Sugestão";
        break;
    case '4':
        $assunto = "Elogio";
        break;
    case '5':
        $assunto = "Denúncia";
    break;

}


switch ($_POST['orgao']) {
    case '0':
        # code...
        break;
    
    case '1':
       $orgao = "Administração";
        break;
    case '2':
       $orgao = "Educação";
        break;
    case '3':
        $orgao = "Saúde";
        break;
    case '4':
        $orgao = "Seguraça";
        break;
    case '5':
        $orgao = "Transposte";
    break;
	case '6':
        $orgao = "Outros";
    break;

}


if(isset($_POST['mensagem'])){
	$mensagem = $_POST['mensagem'];
}

if(isset($_POST['numero_protocolo'])){
    $numero_protocolo = $_POST['numero_protocolo'];
}


// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');

 

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';	

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Email usado para servidor SMTP para enviar os emails.
$mail->Username = "dtiipaseal@gmail.com";

//Senha do Email SMTP
$mail->Password = "porceidom01";

//De quem está saindo. O remetente
$mail->setFrom('dtiipaseal@gmail.com', 'Ouvidoria N: '.$numero_protocolo);

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Destinatário a Email da Ouvidoria do Município
$mail->addAddress('medson01@gmail.com', 'Email');

//Assunto do Email
$mail->Subject = utf8_decode($assunto);


//Corpo da mensagem

$body = file_get_contents('contents.php');
$data = date("j / n / Y");
$hora = date("H:i:s");

$body = str_replace('$numero_protocolo', $numero_protocolo, $body);
$body = str_replace('$nome', $nome, $body);
$body = str_replace('$data', $data, $body);
$body = str_replace('$hora', $hora, $body);
$body = str_replace('$telefone', $telefone, $body);
$body = str_replace('$email', $email, $body);
$body = str_replace('$orgao', $orgao, $body);
$body = str_replace('$assunto', $assunto, $body);
$body = str_replace('$mensagem', $mensagem, $body);

$mail->MsgHTML($body);


//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';



//Anexar arquivos no E-mail

// Arquivos em anexo            
if(isset($_FILES['arquivo'])){

    $numeroCampos = 5;
                                        
    for ($i = 0; $i < $numeroCampos; $i++) {
                            
    // Informações do arquivo enviado
        $nomeArquivo = $_FILES["arquivo"]["name"][$i];
        $tamanhoArquivo = $_FILES["arquivo"]["size"][$i];
        $nomeTemporario = $_FILES["arquivo"]["tmp_name"][$i];
                            
        $nomeArqAntigo[$i] = $nomeArquivo;
                            

$mail->AddAttachment($nomeTemporario, $nomeArquivo);


    }

}



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "<script>alert('Mensagem envida com sucesso!');</script>";
  echo "<script>window.location = 'formulario.php?&numero_protocolo=".$numero_protocolo."';</script>"; //Altere aqui para o endereço de sua página.
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}



?>