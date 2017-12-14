<?php
include $_SERVER["DOCUMENT_ROOT"].'/header.php';
require $_SERVER["DOCUMENT_ROOT"].'/bootstrap/php/secrets.php';
require $_SERVER["DOCUMENT_ROOT"].'/bootstrap/php/functions.php';

$press = false;
$successmsg = $k[0];
$formvalues = ["name" => "", "mail" => "", "subject" => "", "message" => ""];

if (isset($_GET['press']) and $_GET['press'] == true){
$press = true;
$successmsg = $k[1];
}

if (isset($_POST['btn-submit']) and $_POST['url'] == "" and filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
	$name = htmlspecialchars($_POST['name']);
	$mail = htmlspecialchars($_POST['mail']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	$captcharesponse = $_POST['g-recaptcha-response'];
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $captchasecret . "&response=" . $captcharesponse . "");
	$responseArray = json_decode($response, true);
	if(isset($_POST['media']) and $_POST['media'] != ""){
		$media = htmlspecialchars($_POST['media']);
		$name = $name." von ".$media;
	}
	
	if( $responseArray["success"] == true){
	contactmail($name, $mail, $subject, $press, $message, $successmsg);
	echo "<script>console.log('success');</script>";
	}else{
		$formvalues = ["name" => $name, "mail" => $mail, "subject" => $subject, "message" => $message];
		echo "<script>console.log('error');</script>";
		echo ("<SCRIPT>
		window.alert('".$k[15]."');
		</SCRIPT>"); 
	}
}


?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<title>Gonimo <?php echo $k[2]; ?></title>
<div class="container s-k lvl-0">
	<div class="container-fluid s-k lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<header class="contact">
	<h1><?php if ($press==true){echo $k[3];}else{echo $k[2];} ?></h1>
	<p>
	<?php 
	if ($press==true){
		echo $k[4];
		}else{
		echo $k[5];
		} ?>
	</p>
	</header>
	<section class="contact">
		<form action="" method="POST" name="contact-form" id="contact-form" role="form">
		<div class="form-group">
		<label for="name"><?php echo $k[6]; ?> *</label>
		<input id="name" name="name" type="text" required class="form-control" placeholder="<?php echo $k[6]; ?>" value="<?php echo $formvalues['name'];?>" >
		</div>
		<div class="form-group">
		<label for="mail"><?php echo $k[7]; ?> *</label>
		<input id="mail" name="mail" type="text" required class="form-control" placeholder="<?php echo $k[8]; ?>" value="<?php echo $formvalues['mail'];?>">
		</div>
		<div class="form-group">
		<label for="subject"><?php echo $k[9]; ?> *</label>
		<input id="subject" name="subject" type="text" required class="form-control" placeholder="<?php echo $k[9]; ?>" value=<?php if ($press==true){echo($k[3]);} echo $formvalues['subject']; ?>>
		</div>
		<div class="form-group">
		<label for="message"><?php echo $k[10]; ?> *</label>
		<textarea id="message" name="message" required class="form-control" maxlength="2000" rows="4" cols="40" placeholder="<?php echo $k[11]; ?>"><?php echo $formvalues['message'];?></textarea>
		<span class="char-count"><span id="chars">2000</span> <?php echo $fb[13]; ?></span>
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
		<div class="g-recaptcha" data-sitekey="<?php echo $captchasitekey;?>"></div>
		<input class="url" type="text" name="url" placeholder="url" maxlength="30" size="30">
		<button name="btn-submit" type="submit" class="btn btn-success btn-block" role="button"> <?php echo $k[13]; ?> </button>
		<button name="btn-reset" type="reset" class="btn btn-warning btn-block" role="button"> <?php echo $k[14]; ?> </button>
		</form>
	</section>
	</div>
	</div>
	</div>
</div>
<?php 
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>