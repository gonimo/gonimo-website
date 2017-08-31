<?php
require_once 'header.php';
?>
<title>Gonimo Impressum</title>
<div class="container s-i lvl-0">
	<div class="container-fluid s-i lvl-1">
	<section class="impressum">
	<div class="row">
	<div class="col-sm-12">
	<header class="impressum">
	<h1><?php echo $i[0]; ?></h1>
	</header>
	<p> 
	<h4><?php echo $i[1]; ?></h4>
	<br>
	Robert Klotzner<br>
	<br>
	<h4><?php echo $i[2]; ?></h4>
	<span class="glyphicon glyphicon-home"></span><?php echo $i[3]; ?><br>
	Erdbergstraße 61/10<br>
	1030 Wien<br>
	Österreich<br>
	<br>
	<span class="glyphicon glyphicon-earphone"></span><?php echo $i[4]; ?><br>
	<a href="tel:+4367762096744" target="_blank" title="<?php echo $i[5]; ?>">+43 677 620 967 44</a><br>
	<br>
	<span class="glyphicon glyphicon-envelope"></span> E-Mail: <br>
	<a href="mailto:hello@gonimo.com" target="_blank" title="<?php echo $i[6]; ?>">hello@gonimo.com</a><br>
	<br>
	<?php echo $i[7]; ?><a href="mailto:hello@gonimo.com" target="_blank" title="Mail an hello@gonimo.com senden">hello@gonimo.com</a><br>
	Internet: <a class='link' href="http://www.gonimo.com" target="_blank" title="gonimo.com">www.gonimo.com</a><br>
	<br>
	<h4><?php echo $i[8]; ?></h4>
	Romana Roithner<br>
	Christian Klotzner<br>
	<br>
	<h4><?php echo $i[9]; ?></h4>
	Aristoteles Riedmann<br>
	<br>
	<h4><?php echo $i[10]; ?></h4>
	Aristoteles Riedmann<br>
	<br>
	<h4><?php echo $i[11]; ?></h4>
	<a class='link' href="http://getbootstrap.com/" target="_blank" title="Bootstrap">Bootstrap</a><br>
	<a class='link' href="http://glyphicons.com/" target="_blank" title="Glyphicons">Glyphicons</a><br>
	<a class='link' href="https://jquery.com/" target="_blank" title="JQuery">JQuery</a><br>
	<br>
	</p>
	</div>
	</div>
	</section>
	<section class="disclaimer">
	<div class="row">
	<div class="col-sm-12">
	<header class="disclaimer">
	<h1><?php echo $i[12]; ?></h1>
	</header>
	<h4><?php echo $i[13]; ?></h4>
	<p>
	<?php echo $i[14]; ?>
	</p>
	<h4><?php echo $i[15]; ?></h4>
	<p>
	<?php echo $i[16]; ?>
	</p>
	<h4><?php echo $i[17]; ?></h4>
	<p>
	<?php echo $i[18]; ?>
	</p>
	<h4><?php echo $i[19]; ?></h4>
	<p>
	<?php echo $i[20]; ?>
	</p>
	</div>
	</div>
	</section>
</div>
</div>
<?php 
include 'footer.php';
?>
</body>
</html>