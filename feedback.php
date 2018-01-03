<?php
include $_SERVER["DOCUMENT_ROOT"].'/header.php';
require $_SERVER["DOCUMENT_ROOT"].'/bootstrap/php/secrets.php';
require $_SERVER["DOCUMENT_ROOT"].'/bootstrap/php/functions.php';

$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("MySQL Error: " . mysqli_error());
mysqli_select_db($con,$dbname) or die("MySQL Error: " . mysqli_error());


if (isset($_POST['btn-submit'])){
	$overall = esc_sql($_POST['overall'], $con);
	$operation = esc_sql($_POST['operation'], $con);
	$connection = esc_sql($_POST['connection'], $con);
	$stability = esc_sql($_POST['stability'], $con);
	$functions = esc_sql($_POST['functions'], $con);
	$usecase = esc_sql($_POST['usecase'], $con);
	$location = esc_sql($_POST['location'], $con);
	$message = esc_sql($_POST['message'], $con);
	$captcharesponse = $_POST['g-recaptcha-response'];
	if (isset($_POST['recommend'])){$recommend = true;}else{$recommend = false;}
	if (isset($_POST['publish'])){$publish = true;}else{$publish = false;}
	if (isset($_GET['src'])){$src = esc_sql($_GET['src'], $con);}else{$src = "homepage";}
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $captchasecret . "&response=" . $captcharesponse . "");
	$responseArray = json_decode($response, true);
	if( $responseArray["success"]  == true){
		$success = mysqli_query($con, "INSERT INTO `feedback` (`ID`, `overall`, `operation`, `connection`, `stability`, `functions`, `usecase`, `location`, `message`, `recommend`, `publish`, `src`, `time`) VALUES (NULL, '$overall', '$operation', '$connection', '$stability', '$functions', '$usecase', '$location', '$message', '$recommend', '$publish', '$src', CURRENT_TIMESTAMP)");
		if ($success == true){
            echo ("<SCRIPT>
        window.alert('".$fb[18]."');
		window.location.href='/index.php';
        </SCRIPT>");
        }else{
            echo ("<SCRIPT>
        window.alert('".$fb[19]."');
		window.location.href='/feedback.php?src=error';
        </SCRIPT>");
        }
	}
}

?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="/bootstrap/js/barrating.min.js"></script>
<script type="text/javascript">
   $(function() {
      $('.star-rating').barrating({
        theme: 'fontawesome-stars'
      });
   });
</script>
<title>Gonimo <?php echo $fb[0]; ?></title>
<div class="container s-k lvl-0">
	<div class="container-fluid s-k lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<header class="feedback">
	<h1><?php echo $fb[0]; ?></h1>
	<h3><?php echo $fb[1]; ?></h3>
	</header>
	<section class="feedback">
		<form action="" method="POST" name="feedback-form" id="contact-form" role="form">
		<div class="form-group">
		<label for="overall"><?php echo $fb[2]; ?></label>
		<select class="star-rating" name="overall">
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
		</select>
		</div>
		<div class="form-group">
		<label for="operation"><?php echo $fb[3]; ?></label>
		<select class="star-rating" name="operation">
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
		</select>
		</div>
		<div class="form-group">
		<label for="connection"><?php echo $fb[4]; ?></label>
		<select class="star-rating" name="connection">
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
		</select>
		</div>
		<div class="form-group">
		<label for="stability"><?php echo $fb[5]; ?></label>
		<select class="star-rating" name="stability">
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
		</select>
		</div>
		<div class="form-group">
		<label for="functions"><?php echo $fb[6]; ?></label>
		<select class="star-rating" name="functions">
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
		</select>
		</div>
		<div class="form-group">
		<label for="usecase"><?php echo $fb[7]; ?></label>
		<input id="usecase" name="usecase" type="text" class="form-control" placeholder="<?php echo $fb[8]; ?>" >
		</div>
		<div class="form-group">
		<label for="location"><?php echo $fb[9]; ?></label>
		<input id="location" name="location" type="text" class="form-control" placeholder="<?php echo $fb[10]; ?>" >
		</div>
		<div class="form-group">
		<label for="message"><?php echo $fb[11]; ?> *</label>
		<textarea id="message" name="message" required class="form-control" maxlength="2000" rows="4" cols="40" placeholder="<?php echo $fb[12]; ?>"></textarea>
		<span class="char-count"><span id="chars">2000</span> <?php echo $fb[13]; ?></span>
		</div>
		<div class="form-group">
		<div class="checkbox" >
		<label><input type="checkbox" value="1" name="recommend" checked><?php echo $fb[14]; ?></label><br>
		<label><input type="checkbox" value="1" name="publish" checked><?php echo $fb[15]; ?></label>
		</div>
		</div>
		<div class="g-recaptcha" data-sitekey="<?php echo $captchasitekey;?>"></div>
		<button name="btn-submit" type="submit" class="btn btn-success btn-block" role="button"> <?php echo $fb[16]; ?> </button>
		<button name="btn-reset" type="reset" class="btn btn-warning btn-block" role="button"> <?php echo $fb[17]; ?> </button>
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