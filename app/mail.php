<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['tel'];
$formText = $_POST['formText'];
$submit = $_POST['submit'];



//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.adm.tools';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mailhideaway@varitas.men'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '3^LM9zny+R(3'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('mailhideaway@varitas.men'); // от кого будет уходить письмо?
$mail->addAddress('pavelbiletskyi87@gmail.com');     // Кому будет уходить письмо 
  
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Текст сообщения: ' .$formText;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}

if ( $submit['submit']) {
    
    if ( !$_POST['g-recaptcha-response'])
        exit('Заполните капчу');
    // var_dump($_POST);
    
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $key = '6Le0eC8gAAAAAAct1RUo_qH6CctLVrvOxnj4k60j';
    $query = $url. '?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
    
    $data = file_get_contents($query);

    exit($data);
    // exit ('')
}
?>




 