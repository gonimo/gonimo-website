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
	<meta name="description" content="Good Night Monitor - das erste kostenlose, web-basierte Babyphon. KEINE App-Installation! Web-Browser öffnen und loslegen. Das Familien-System ermöglicht Multi-Baby und Multi-Parent von Beginn an. Already in your pocket!">
	<meta name="keywords" content="babyphon, babyfon, baby, good, night, monitor, best, free, open, source, webrtc, web, browser, gratis, kostenlos, reliable, zuverlässig, secure, sicher, sicherheit, verschlüsselt, encrypted, wlan, wifi, mobil, werbefrei, einfach, schnell, fast, bestes, reichweite, setup, multi, multi-baby, multi-parent, eltern, station, babystation, familie, family, invitation, system, loslegen, smartphone, tablet, laptop, vorteile, funktionen, advantages, skype,  verbindung, connection, app, keine installation, benutzung, recycling, upcycling">
	<meta name="ROBOTS" content="INDEX,FOLLOW">
	<meta name="theme-color" content="#E6CAD4">
	<meta name="msapplication-navbutton-color" content="#E6CAD4">
	<meta name="apple-mobile-web-app-status-bar-style" content="#E6CAD4">
	<meta name="msapplication-navbutton-color" content="#E6CAD4">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="og:title" content="gonimo" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://gonimo.com/" />
	<meta property="og:image" content="https://gonimo.com/img/impact.png" />
	<meta property="og:site_name" content="gonimo" />
	<meta property="og:description" content="Kennst du in deinem Verwandten- oder Bekanntenkreis gerade werdende, oder frisch gebackene Eltern? Benötigen sie ein Babyphon? Dann teile mit ihnen diese Seite und sag‘ ihnen: „Ihr habt bereits eines! Already in your pocket!“ ;)" />
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet"> 
	<script src="/bootstrap/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<!--<script src="/bootstrap/js/snowstorm-min.js"></script>
	 <script>
	snowStorm.flakesMax = 100;
	snowStorm.flakesMaxActive = 75;
	snowStorm.followMouse = false;
	snowStorm.freezeOnBlur = true;
	snowStorm.vMaxX = 5;
	snowStorm.vMaxY = 5;
	snowStorm.snowStick = false;
	snowStorm.useMeltEffect = false;
	</script> -->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid nav-bg">
    <div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <spans class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php" title="Home">GONIMO</a>
    </div>
  <div class="nav-menu collapse navbar-collapse" id="Navbar">
  <div class="container">
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
            <li><a href="?lang=de"><img class="lang" src="/lang/de.svg">Deutsch</a></li>
            <li><a href="?lang=en"><img class="lang" src="/lang/en.svg">English</a></li>
          </ul>
        </li>
	</ul>
	</div>
  </div>
  </div>
</nav>
