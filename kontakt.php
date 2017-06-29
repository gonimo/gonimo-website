<?php
include 'header.php';

// require_once 'swiftmailer/lib/swift_required.php'; //set path to swiftmailer installation see homepage for instalation guide
$transport = new Swift_SmtpTransport('localhost', 25); //set server here!


$press = false;
$successmsg = $k[0];

if (isset($_GET['press']) and $_GET['press'] == true){
$press = true;
$successmsg = $k[1];
}

if (isset($_POST['btn-submit']) and $_POST['url'] == "" and filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
	$name = htmlspecialchars($_POST['name']);
	$mail = htmlspecialchars($_POST['mail']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	$media = htmlspecialchars($_POST['media']);
	
	if(isset($_POST['media']) and $_POST['media'] != ""){
		$media = htmlspecialchars($_POST['media']);
		$name = $name." von ".$media;
		$message = $name." schrieb am ".date("r",time())." folgende Anfrage über das Presseformular auf gonimo.com \r \n \r \n".$message."\r\n \r\n END OF TRANSMISSION";
	}else{
		$message = $name." schrieb am ".date("r",time())." folgende Nachricht über das Kontaktformular auf gonimo.com \r \n \r \n".$message."\r\n \r\nEND OF TRANSMISSION";
	}
	
	$mailer = new Swift_Mailer($transport); //create swiftmailer object
	
	//create message here using the escaped input
	$email = (new Swift_Message($subject))
  ->setFrom([$mail => $name])
  ->setTo(['hello@gonimo.com' => 'Gonimo Team'])
  ->setBody('Here is the message itself')
  ;
	
	$success= $mailer->send($message); //send message
	
	if (!$success) {
        syslog(LOG_CRIT, "Mail sending failed!");
		$mailpath = "/var/lib/nginx/gonimo-landingPage/mails-backup/".date("y-m-d")."-".$mail.".txt"; //path and file for backup
		$mailfile = fopen($mailpath, "w"); //create file
			if ($mailfile == false){
				syslog(LOG_CRIT, "Backup failed too. Now thats a real problem");} //error log for backupfile
		$mailstring = $message->toString(); //convert message to string
		fwrite($mailfile, $mailstring); //write to file
		fclose($mailfile); //close file
		echo ("<SCRIPT>
        window.alert('an error occured')
		window.location.href='/kontakt.php'
        </SCRIPT>");
    }
    elseif($success == true and $press == true) {
        syslog(LOG_INFO, 'press-mail successfully sent');
		echo ("<SCRIPT>
        window.alert('".$successmsg."')
		window.location.href='/kontakt.php?press=true'
        </SCRIPT>");
    }else{
		syslog(LOG_INFO, 'mail successfully sent');
		echo ("<SCRIPT>
        window.alert('".$successmsg."')
		window.location.href='/index.php'
        </SCRIPT>");	
	}
}

?>
<title>Gonimo <?php echo $k[2]; ?></title>
<div class="container-fluid s-k lvl-0">
	<div class="container s-k lvl-1">
	<header class="contact">
	<h1><?php if ($press==true){echo $k[3];}else{echo $k[2];} ?></h1>
	<p>
	<?php 
	if ($press==true){
		echo $k[4];
		}else{
		echo $k[5];
		} ?>
	</header>
	<section class="contact">
	<div class="container s-k s-k-form">
		<form action="" method="POST" name="contact-form" id="contact-form" role="form">
		<div class="form-group">
		<label for="name"><?php echo $k[6]; ?> *</label>
		<input id="name" name="name" type="text" required class="form-control" placeholder="<?php echo $k[6]; ?>">
		</div>
		<div class="form-group">
		<label for="mail"><?php echo $k[7]; ?> *</label>
		<input id="mail" name="mail" type="text" required class="form-control" placeholder="<?php echo $k[8]; ?>">
		</div>
		<div class="form-group">
		<label for="subject"><?php echo $k[9]; ?> *</label>
		<input id="subject" name="subject" type="text" required class="form-control" placeholder="<?php echo $k[9]; ?>" value=<?php if ($press==true){echo($k[3]);} ?>>
		</div>
		<div class="form-group">
		<label for="message"><?php echo $k[10]; ?> *</label>
		<textarea id="message" name="message" required class="form-control" maxlength="2000" rows="4" cols="40" placeholder="<?php echo $k[11]; ?>"></textarea>
		</div>
		<?php
		if ($press==true){
			echo("
		<div class='form-group'>
		<label for='media'>".$k[12]." *</label>
		<input id='media' name='media' type='text' required class='form-control' placeholder='Medium'>
		</div>");
		}
		?>
		<input class="url" type="text" name="url" placeholder="url" maxlength="30" size="30">
		<button name="btn-submit" type="submit" class="btn btn-success btn-block" role="button"> <?php echo $k[13]; ?> </button>
		</form>
	</div>
	</section>
	</div>

</div>
<?php 
include 'footer.php';
?>
</body>
</html>