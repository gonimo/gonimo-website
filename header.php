<!doctype html>
<?php 
require_once $_SERVER["DOCUMENT_ROOT"].'/lang/locals.php';
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
	if ((date('n') >= 11 or date('n') <=3) and $_SERVER['SERVER_NAME'] != "gonimo.local"){
		echo "<script src='/bootstrap/js/snowstorm-min.js'></script>";
	};
	//Check $_SERVER['SERVER_NAME'] on alpha-server and insert result in if-Statement
	if($_SERVER['SERVER_NAME'] == "alpha.gonimo.com"){
		echo "<script src='/bootstrap/js/gonimo-piwik-alpha.js'></script><noscript><p><img src='//piwik.gonimo.com/piwik.php?idsite=2&rec=1' style='border:0;' alt='' /></p></noscript>";
	}else{
		echo "<script src='/bootstrap/js/gonimo-piwik.js'></script><noscript><p><img src='//piwik.gonimo.com/piwik.php?idsite=1&rec=1' style='border:0;' alt='' /></p></noscript>";
	};
	?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header nav-bg">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar" data-parent="#Navbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php" title="Home">GONIMO</a>
    </div>
  <div class="nav-menu collapse navbar-collapse" id="Navbar">
  <div class="container-fluid nav-bg">
    <ul class="nav nav-justified">
      <li><a href="/index.php" title="<?php echo $m[0]; ?>"><?php echo $m[0]; ?> </a></li>
      <li><a href="/index.php#vorteile" data-toggle="collapse" data-target="#Navbar" title="<?php echo $m[1]; ?>"><?php echo $m[1]; ?></a></li>
<!--      <li><a href="/index.php#funktionen" data-toggle="collapse" data-target="#Navbar" title="<?php echo $m[2]; ?>"><?php echo $m[2]; ?></a></li>
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo $m[2]; ?>"><?php echo $m[2]; ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/apps/browser.php"><?php echo $apps['browser'][0]." ".$apps['browser'][1]; ?></a></li>
          <li><a href="/apps/android.php"><?php echo $apps['android'][0]." ".$apps['android'][1]; ?></a></li>
<!--          <li><a href="/apps/ios.php"><?php echo $apps['ios'][0]." ".$apps['ios'][1]; ?></a></li> 
        </ul>
      </li> -->
      <li><a href="/team.php" title="<?php echo $m[3]; ?>"><?php echo $m[3]; ?></a></li>
	  <li><a href="/faq.php" title="<?php echo $m[4]; ?>"><?php echo $m[4]; ?></a></li>
	  <li><a href="https://blog.gonimo.com" target="_blank" title="<?php echo $m[5]; ?>"><?php echo $m[5]; ?></a></li>
		<li class="dropdown">
          <a href="#" class="" data-toggle="collapse" data-target="#settings" data-parent="#Navbar" role="button" aria-expanded="false"><img class="lang-nav" src="/lang/<?php echo $header['lang']; ?>.svg" alt="<?php echo $header['language']; ?>" title="<?php echo $m[9]; ?>"></span><span class="caret"></span></a>
	</ul>
	</div>
	<div class="settings collapse" id="settings">
		<div class="lang"><?php echo $m[9]; ?>
			<ul class="menu lang">
			<a href="?lang=de"><li><img class="lang" src="/lang/de.svg" alt="Deutsch" title="Deutsch"> Deutsch</li></a>
			<a href="?lang=en"><li><img class="lang" src="/lang/en.svg" alt="English" title="English"> English</li></a>
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