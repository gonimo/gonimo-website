<?php
include $_SERVER["DOCUMENT_ROOT"].'/header.php';
require $_SERVER["DOCUMENT_ROOT"].'/bootstrap/php/secrets.php';
require $_SERVER["DOCUMENT_ROOT"].'/bootstrap/php/functions.php';

$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("MySQL Error: " . mysqli_error());
mysqli_select_db($con,$dbname) or die("MySQL Error: " . mysqli_error());


if (isset($_POST['btn-submit'])){
	$overall = esc_sql($_POST['overall'], $con);
	$operation = esc_sql($_POST['operation'], $con);
	$functions = esc_sql($_POST['functions'], $con);
	$missing = esc_sql($_POST['missing'], $con);
	$app = esc_sql($_POST['app'], $con);
	$price = esc_sql($_POST['price'], $con);
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
		$success = mysqli_query($con, "INSERT INTO `feedback` (`ID`, `overall`, `operation`, `functions`, `missing`, `app`, `price`, `usecase`, `location`, `message`, `recommend`, `publish`, `src`, `time`) VALUES (NULL, '$overall', '$operation', '$functions', '$missing', '$app', '$price', '$usecase', '$location', '$message', '$recommend', '$publish', '$src', CURRENT_TIMESTAMP)");
		if ($success == true){
            echo ("<SCRIPT>
        window.alert('".$fb[23]."');
		window.location.href='/index.php';
        </SCRIPT>");
        }else{
            echo ("<SCRIPT>
        window.alert('".$fb[24]."');
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
		<label for="functions"><?php echo $fb[4]; ?></label>
		<select class="star-rating" name="functions">
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
		</select>
		</div>
		<div class="form-group">
		<label for="missing"><?php echo $fb[5]; ?></label>
		<input id="missing" name="missing" type="text" class="form-control" placeholder="<?php echo $fb[6]; ?>" >
		</div>
		<label><?php echo $fb[7]; ?></label><br>
		<input type="radio" value="1" name="app" value="yes" checked><label><?php echo $fb[8]; ?></label><br>
		<input type="radio" value="1" name="app" value="no" ><label><?php echo $fb[9]; ?></label><br>
		<br>
		<div class="form-group">
		<label for="price"><?php echo $fb[10]; ?></label>
		<input id="price" name="price" type="range" class="form-control range" min="0" max="10" step="0.01" value="3.99"><br>
		<span class="select-price">3,99€</span>
		</div>
		<div class="form-group">
		<label for="usecase"><?php echo $fb[12]; ?></label>
		<input id="usecase" name="usecase" type="text" class="form-control" placeholder="<?php echo $fb[13]; ?>" >
		</div>
		<div class="form-group">
		<label for="location"><?php echo $fb[14]; ?></label>
		<input id="location" name="location" type="text" class="form-control" placeholder="<?php echo $fb[15]; ?>" >
		</div>
		<div class="form-group">
		<label for="message"><?php echo $fb[16]; ?></label>
		<textarea id="message" name="message" class="form-control" maxlength="2000" rows="4" cols="40" placeholder="<?php echo $fb[17]; ?>"></textarea>
		<span class="char-count"><span id="chars">2000</span> <?php echo $fb[18]; ?></span>
		</div>
		<div class="form-group">
		<div class="checkbox" >
		<label><input type="checkbox" value="1" name="recommend" checked><?php echo $fb[19]; ?></label><br>
		<label><input type="checkbox" value="1" name="publish"><?php echo $fb[20]; ?></label>
		</div>
		</div>
		<div class="g-recaptcha" data-sitekey="<?php echo $captchasitekey;?>"></div>
		<button name="btn-submit" type="submit" class="btn btn-success btn-block" role="button"> <?php echo $fb[21]; ?> </button>
		<button name="btn-reset" type="reset" class="btn btn-warning btn-block" role="button"> <?php echo $fb[22]; ?> </button>
		</form>
	</section>
	</div>
	</div>
	</div>
</div>
<?php 
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
<script>
$('#price').on("change mousemove", function(){
	if ($('#price').val() == 0){
		$('.select-price').text("<?php echo $fb[11]; ?>");
	}else{
	$('.select-price').text($('#price').val()+"€");
	}
});
</script>
</body>
</html>