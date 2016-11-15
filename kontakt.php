<?php
include 'header.php';

if (isset($_GET['msg']) and $_GET['msg'] == "success"){
	echo ("<SCRIPT>
        window.alert('Vielen Dank für deine Nachricht. Wir werden uns sobald wie möglich darum kümmern')
		window.location.href='index.php'
        </SCRIPT>");
}elseif (isset($_GET['msg']) and $_GET['msg'] == "press"){
	echo ("<SCRIPT>
        window.alert('Danke für Ihre Anfrage. Wir werden uns so bald wie möglich bei Ihnen melden.')
		window.location.href='kontakt.php?press=true'
        </SCRIPT>");
}

$press = false;

if (isset($_GET['press']) and $_GET['press'] == true){
$press = true;
}

if (isset($_POST['btn-submit']) and $_POST['url'] == "" and filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
	$name = htmlspecialchars($_POST['name']);
	$mail = htmlspecialchars($_POST['mail']);
	$Subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	$media = htmlspecialchars($_POST['media']);
	
	if(isset($_POST['media']) and $_POST['media'] != ""){
		$media = htmlspecialchars($_POST['media']);
		$name = $name." von ".$media;
	}	
	
	contactmail($name, $mail, $subject, $press, $message);
}

function contactmail($name, $mail, $subject, $press, $message){
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
	if ($press == true){
		array_push($headers,'X-Priority: 1 (Highest)', 'X-MSMail-Priority: High','Importance: High');
	}
	
	$headers = implode("\r\n",$headers);
	$subject = "Kontaktformular: ".$subject;
	
	if ($press == true){
	$message = $name." schrieb am ".date("r",time())." folgende Anfrage über das Presseformular auf gonimo.com \r \n \r \n".$message."\r\n \r\nEND OF TRANSMISSION";
	}else{
	$message = $name." schrieb am ".date("r",time())." folgende Nachricht über das Kontaktformular auf gonimo.com \r \n \r \n".$message."\r\n \r\nEND OF TRANSMISSION";
	}	
		
	mail ($mail_to,'=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);
	
	if ($press == true){
	header("Location: kontakt.php?msg=press");		
	}else{
	header("Location: kontakt.php?msg=success");
	}
}

?>
<title>Gonimo Kontakt</title>
<div class="container-fluid s-k lvl-0">
	<div class="container s-k lvl-1">
	<h1><?php if ($press==true){echo("PRESSE-ANFRAGE:");}else{echo("Kontakt");} ?></h1>
	<p>
	<?php 
	if ($press==true){
		echo("Bitte stellen sie uns Ihre Presse-Anfrage über das untenstehende Formular");
		}else{
		echo("Stell uns eine Frage, <br>
			Teile uns deine Gedanken mit, <br>
			Gib uns Feedback, <br>
			<br>
			Schreib uns eine Nachricht ! <br>
			<br>
			aber bitte benutze dazu dieses Formular:<br>");
		} ?>
	
	<div class="container s-k s-k-form">
		<form action="" method="POST" name="contact-form" id="contact-form" role="form">
		<div class="form-group">
		<label for="name">Name *</label>
		<input id="name" name="name" type="text" required class="form-control" placeholder="Name">
		</div>
		<div class="form-group">
		<label for="mail">Mail *</label>
		<input id="mail" name="mail" type="text" required class="form-control" placeholder="Ihre Mail-Adresse">
		</div>
		<div class="form-group">
		<label for="subject">Betreff *</label>
		<input id="subject" name="subject" type="text" required class="form-control" placeholder="Betreff" value=<?php if ($press==true){echo("PRESSE-ANFRAGE: ");} ?>>
		</div>
		<div class="form-group">
		<label for="message">Nachricht *</label>
		<textarea id="message" name="message" required class="form-control" maxlength="2000" rows="4" cols="40" placeholder="Ihre Nachricht"></textarea>
		</div>
		<?php
		if ($press==true){
			echo("
		<div class='form-group'>
		<label for='media'>Bitte geben Sie Ihr Medium an, damit Ihre Anfrage richtig zugeordnet werden kann *</label>
		<input id='media' name='media' type='text' required class='form-control' placeholder='Medium'>
		</div>");
		}
		?>
		<input class="url" type="text" name="url" placeholder="url" maxlength="30" size="30">
		<button name="btn-submit" type="submit" class="btn btn-success btn-block"> Senden </button>
		</form>
	</div>
	</div>

</div>
<?php 
include 'footer.php';
?>
</body>
</html>