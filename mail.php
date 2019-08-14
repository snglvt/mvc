<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//инициализируем переменную имя пользователя
$name = isset($_POST['name']) ? $_POST['name'] : null;
//инициализируем переменную телефон
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = ''; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = ''; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom(''); // от кого будет уходить письмо?
$mail->addAddress('');     // Кому будет уходить письмо

$mail->Subject = 'Заявка с сайта';
$mail->Body    = $name . ' оставил заявку, его телефон: ' .$phone;
$mail->AltBody = '';
if(!$mail->send()) {
    echo 'Errorr';
} else {
    header('location: //');
}
?>