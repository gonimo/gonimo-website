<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
?>
<title>Gonimo 403</title>
<div class="container error lvl-0">
	<div class="container-fluid error lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<header>
	<h1><?php echo $error['403']['title']; ?></h1>
	</header>
	<article>
	<img class="img img-responsive" src="/http_errors/403.svg" alt="403">
	<h2><?php echo $error['403']['description']; ?></h2>
	<h2><a href="/index.php" title="gonimo" class="link"><?php echo $error['back']; ?></a></h2>
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