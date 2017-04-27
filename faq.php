<?php
require_once 'header.php';
?>
<title>Gonimo FAQ</title>
<div class="container-fluid s-f lvl-0">
	<div class="container s-f lvl-1">
	<header>
	<h1><?php echo $f[0]; ?></h1>
	<h2><?php echo $f[1]; ?></h2>
	</header>
	<article>

		<div class="s-f lvl-2">
		<h3><?php echo $f[2]; ?></h3>
		<p>
		</p>
		</div>
		
	<?php
	foreach ($faq as $cat){
		echo "<div class='s-f lvl-2 panel-group'>
			<a data-toggle='collapse' href='#".preg_replace("/\s+/","",$cat[0])."'>
			<div class='s-f lvl-2 panel-head'><h3 class='s-f category'>".$cat[0]."</h3></div>
			</a>
			<div class='panel-collapse collapse s-f' id='".preg_replace("/\s+/","",$cat[0])."'>
			<div class='panel-body'>";
		for ($counter = 1; $counter < count($cat); $counter++){
			echo "<div class='s-f lvl-2'>
			<h3>".$cat[$counter][0]."</h3>
			<p>".$cat[$counter][1]."</p></div>";
			}
		echo "</div></div></div>";
		}
	?>	

		<div class="s-f lvl-2">
		<h3><?php echo $f[3]; ?></h3>
		<p>
		</p>
		</div>
	</article>
	</div>
</div>
<?php 
include 'footer.php';
?>
</body>
</html>