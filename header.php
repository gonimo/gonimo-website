<!doctype html>
<?php 
require_once 'lang/locals.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="application-name" content="Gonimo">
	<meta name="author" content="Gonimo/ninjagulbi">
	<?php 
	foreach ($header as $name => $content){
		echo "<meta name='".$name."' content='".$content."'>";
	};
	?>
	<meta name="ROBOTS" content="INDEX,FOLLOW">
	<link rel="canonical" href="https://gonimo.com"/>
	<link rel="alternate" hreflang="de" href="https://gonimo.com/de/"/>
	<link rel="alternate" hreflang="en" href="https://gonimo.com/en/"/>
	<meta name="theme-color" content="#E6CAD4">
	<meta name="msapplication-navbutton-color" content="#E6CAD4">
	<meta name="apple-mobile-web-app-status-bar-style" content="#E6CAD4">
	<meta name="msapplication-navbutton-color" content="#E6CAD4">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="og:title" content="gonimo" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://gonimo.com/" />
	<meta property="og:image" content="https://gonimo.com/img/impact-lg.jpg" />
		<?php 
	foreach ($og as $name => $content){
		echo "<meta property='".$name."' content='".$content."'>";
	};
	?>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="/gonimo-style.css" rel="stylesheet"> 
	<script src="/bootstrap/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="/bootstrap/js/script.js"></script>
    <?php 
	if (date('n') >= 11 or date('n') <=3){
		echo "<script src='/bootstrap/js/snowstorm-min.js'></script>";
	};
	//Check $_SERVER['SERVER_NAME'] on alpha-server and insert result in if-Statement
	if($_SERVER['SERVER_NAME'] == "alpha.gonimo.com"){
		echo "<script src='/bootstrap/js/gonimo-piwik-alpha.js'></script><noscript><p><img src='//gonimo.innocraft.cloud/piwik.php?idsite=2&rec=1' style='border:0;' alt='' /></p></noscript>";
	}else{
		echo "<script src='/bootstrap/js/gonimo-piwik.js'></script><noscript><p><img src='//gonimo.innocraft.cloud/piwik.php?idsite=1&rec=1' style='border:0;# alt='' /></p></noscript>";
	};
	?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header nav-bg">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php" title="Home">GONIMO</a>
    </div>
  <div class="nav-menu collapse navbar-collapse nav-bg" id="Navbar">
  <div class="container-fluid">
    <ul class="nav nav-justified">
      <li><a href="/index.php" title="<?php echo $m[0]; ?>"><?php echo $m[0]; ?> </a></li>
      <li><a href="/index.php#vorteile" data-toggle="collapse" data-target="#Navbar" title="<?php echo $m[1]; ?>"><?php echo $m[1]; ?></a></li>
      <li><a href="/index.php#funktionen" data-toggle="collapse" data-target="#Navbar" title="<?php echo $m[2]; ?>"><?php echo $m[2]; ?></a></li>
      <li><a href="/team.php" title="<?php echo $m[3]; ?>"><?php echo $m[3]; ?></a></li>
	  <li><a href="/faq.php" title="<?php echo $m[4]; ?>"><?php echo $m[4]; ?></a></li>
	  <li><a href="https://blog.gonimo.com" target="_blank" title="<?php echo $m[5]; ?>"><?php echo $m[5]; ?></a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-flag"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu lang">
            <li><a href="?lang=de"><img class="lang" src="/lang/at.svg" alt="Deutsch" title="Deutsch"> Deutsch</a></li>
            <li><a href="?lang=de"><img class="lang" src="/lang/de.svg" alt="Deutsch" title="Deutsch"> Deutsch</a></li>
            <li><a href="?lang=en"><img class="lang" src="/lang/en.svg" alt="English" title="English"> English</a></li>
        <!--    <li><a href="?lang=pt"><img class="lang" src="/lang/pt.svg" alt="Português" title="Português"> Português</a></li>
            <li><a href="?lang=pt"><img class="lang" src="/lang/br.svg" alt="Português" title="Português"> Português</a></li>-->
          </ul>
        </li>
	</ul>
	</div>
  </div>
  </div>
</nav>
<?php
	if(!isset($_COOKIE['cookie_confirm'])){
		echo "<div class='container-fluid' id='cookie-confirm'><div class='container cookie-confirm'>".$c[0]."</div></div>";
	}
	if(isset($_GET['t'])){
		$t = htmlspecialchars($_GET['t']);
		echo "<script>$('document').ready(function(){
			$('#".$t."').collapse();
			$('html, body').animate({ scrollTop: $('#".$t."').offset().top - 150}, 'slow');
		});</script>";
	}
?>