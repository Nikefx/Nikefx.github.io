<?php 

$name = $_POST['user-name'];
$email = $_POST['user-mail'];
$price = $_POST['foto-price'];
$num = $_POST['num-foto'];
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';



//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'znafoto@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '...:::kent:::...'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('znafoto@mail.ru', 'Заказ'); // от кого будет уходить письмо?
$mail->addAddress('yandex.nn14@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заказ по часам ';
$mail->Body    = 'Здравствуйте, меня зовут: ' .$name . ' <br>Мои контактные данные для связи: ' .$email .
'<br>  Хочу фотосессию на ' .$num .' часов <br>  Цена: '. $price .' рублей'
;
$mail->AltBody = '';

if(!$mail->send()) {
  return false;
} else {
    return true;
}
?>