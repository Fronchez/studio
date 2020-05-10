<?php 

header("Content-type: application/json; charset=utf-8");

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$mail->isSMTP();                                     
$mail->Host = 'smtp.mywonders.ru';  																							
$mail->SMTPAuth = true;                              
$mail->Username = 'feedback@mywonders.ru'; 
$mail->Password = 'l35al13al45'; 
$mail->SMTPSecure = 'ssl';                           
$mail->Port = 465;

$mail->setFrom('feedback@mywonders.ru');
$mail->addAddress('pudeyan2000@mail.ru');
$mail->isHTML(true); 

$mail->Subject = 'Заявка на запись';
$mail->Body    = '' .$name. ' оставил заявку, его телефон: ' .$phone. ' и почта: ' .$email;
$mail->AltBody = 'Заявка на запись';

if (!$mail->send()) {
  $status = array(
	    'message' => 'Ошибка', 
  );

  echo json_encode($status);
} else {
  $status = array(
	    'message' => 'Успешно', 
  );

  echo json_encode($status);
}