<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
?>
<title>Gonimo 404</title>
<div class="container error lvl-0">
	<div class="container-fluid error lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<header>
	<h1><?php echo $error['404']['title']; ?></h1>
	</header>
	<article>
	<div class="row">
		<div class="col-xs-12 col-md-6 col-md-offset-3"><img class="img img-responsive" src="/http_errors/404.svg" alt="404"></div>
		<div class="col-xs-12">
		<p><?php echo $error['404']['description']; ?></p>
		<h2><a href="/index.php" title="gonimo" class="link"><?php echo $error['back']; ?></a></h2>
		</div>
	</div>
	</article>
	</div>
	</div>
	</div>
</div>
<?php 
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>