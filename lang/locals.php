<?php 
session_start();

if (isset($_GET["lang"])){
	$lang = substr(htmlspecialchars($_GET["lang"]),0,2);
	$_SESSION["lang"] = $lang."get";
	setcookie("gonimo-lang",$lang,time()+31536000);
	}elseif(isset($_COOKIE["gonimo-lang"]) and !isset($_SESSION["lang"])){
		$_SESSION["lang"] = substr($_COOKIE["gonimo-lang"],0,2)."cookie";
	}elseif(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) and !isset($_SESSION["lang"]) and !isset($_COOKIE["gonimo-lang"])){
		$_SESSION["lang"] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2)."http";
	}elseif(!isset($_SESSION["lang"])){
		$_SESSION["lang"] = "undefined";
	}

switch (substr($_SESSION["lang"],0,2)){
	case "de":
		include_once 'lang/de.php';
		break;
	case "en":
		include_once 'lang/en.php';
		break;
	case "pt":
		include_once 'lang/pt.php';
		break;
	default:
		include_once 'lang/en.php';
	}

?>