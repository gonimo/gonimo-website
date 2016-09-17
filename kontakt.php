<?php
require_once 'header.php';


if (isset($_POST['btn-submit']) and $_POST['url'] == "" and filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
	$name = htmlspecialchars($_POST['name']);
	$mail = htmlspecialchars($_POST['mail']);
	$message = htmlspecialchars($_POST['message']);
	contactmail($name, $mail, $message);
}

function contactmail($name, $mail, $message){
	$mail_to = "hello@gonimo.com";
	$email_from = $mail;
	$headers    = array
    (
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=utf-8; format=flowed;',
        'Content-Transfer-Encoding: 8-bit',
        'Date: ' . date('r', $_SERVER['REQUEST_TIME']),
        'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>',
        'From: ' . $email_from,
        'Reply-To: ' . $email_from,
        'Return-Path: ' . $email_from,
        'X-Mailer: PHP v' . phpversion(),
        'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'],
    );
	$headers = implode("\r\n",$headers);
	$subject = "Kontaktformular: ".$name;
	$message = $name." schrieb am ".date("r",time())." folgende Nachricht über das Kontaktformular auf gonimo.com \r \n \r \n ".$message;
	
	mail ($mail_to,'=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);
	header("Location: index.php?msg=success");
}


?>

<title>Gonimo-Team-Blog</title>
<div class="container">
<p>
So kannst du uns erreichen:<br>
<br>
<span class="glyphicon glyphicon-home"></span> Adresse: <a class="contact" href="" target="_blank"></a><br>
<br>
<span class="glyphicon glyphicon-earphone"></span> Tel: <a class="contact" href=""></a><br>
<br>
<span class="glyphicon glyphicon-phone"></span> Mobil: <a class="contact" href="">  </a><br>
<br>
<br>
</p>
<form action="" method="POST" name="contact-form" id="contact-form" role="form">
<div class="form-group">
<label for="name">Name *</label>
<input id="name" name="name" type="text" required class="form-control" placeholder="Dein Name">
</div>
<div class="form-group">
<label for="mail">Mail *</label>
<input id="mail" name="mail" type="text" required class="form-control" placeholder="Deine Mail-Adresse">
</div>
<div class="form-group">
<label for="message">Nachricht *</label>
<textarea id="message" name="message" required class="form-control" maxlength="2000" rows="4" cols="40" placeholder="Deine Nachricht"></textarea>
</div>
<input class="url" type="text" name="url" placeholder="url" maxlength="30" size="30">
<button name="btn-submit" type="submit" class="btn btn-success btn-block"> Senden </button>
</form>
</div>

<?php include 'footer.php'; ?>