<?php header("Content-Type: text/html; charset=utf-8");?>
<? 
	$field_subject		= $_POST['field-subject'];
	$field_name 		= $_POST['field-name'];
	$field_contacts 	= $_POST['field-contacts'];
	$field_message 		= $_POST['field-message'];

	$to 		= 'leads@techno-krovlya.ru';
	$subject 	= $field_subject.' с сайта roof.techno-krovlya.ru';
	$headers 	= 'From: roof.techno-krovlya.ru'."\r\n";
	$message 	= 'Имя: '.$field_name."\r\n".'Контакт: '.$field_contacts."\r\n".'Сообщение/отзыв: '.$field_message."\r\n";
	

	if (!mail($to, $subject, $message, $headers)) echo 'Какая-то ошибка. Но не может быть ошибки. Попробуйте еще раз.'; else echo date ("H:i:s").' Успешная отправка!';
?>
