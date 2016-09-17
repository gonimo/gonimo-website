<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"> 
	<script src="bootstrap/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row-head-logo">
<div class="container head-logo">
    <div class="head-logo" id="headlogo">
    <a href="index.php#"><img src="img/logo.svg" alt="Gonimo-Logo" class="img-head-logo" width="200px"></a>
    </div>
</div>
</div>

<div class="row-head-menu">
<div class="container" id="navbar">
<nav class="navbar navbar-default nav-justified">
  <div class="container">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
   </button>
     <div class="collapse navbar-collapse" id="Navbar">
      <ul class="nav nav-justified">
      <li><a href="index.php#">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="index.php#team">Team</a></li>
      <li><a href="index.php#join">Help Us</a></li>
      <li><a href="index.php#faq">F.A.Q</a></li>
    </ul>
    </div>
  </div>
</nav>
</div>
</div>

<script>
$('#navbar').affix({
    offset: {
        top: $('#headlogo').height()
    }   
});
</script>
