<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
?>
<title>Gonimo Team</title>
<div class="container s-t lvl-0">
<main>
	<div class="container-fluid s-t lvl-1">
	<img class="img-responsive" src="/img/team.jpg" />
	<header>
	<h2><?php echo $t[0]; ?></h2>
	</header>
	<h3><?php echo $t[1]; ?></h3>
	<p>
	<?php echo $t[2]; ?>
	</p>
	
		<div class="row s-t lvl-2">
	
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/robert.jpg" class="img-responsive img-portrait" alt="Robert" />
			<h4 class="name">Robert</h4>
			<h4 class="job"><?php echo $t[3]; ?></h4>
            <p class="comment"><?php echo $t[4]; ?></p>
            </div>
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/hannes.jpg" class="img-responsive img-portrait" alt="Hannes" />
			<h4 class="name">Hannes</h4>
			<h4 class="job"><?php echo $t[5]; ?></h4>
			<p class="comment"><?php echo $t[6]; ?></p>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/martin.jpg" class="img-responsive img-portrait" alt="Martin" />
			<h4 class="name">Martin</h4>
			<h4 class="job"><?php echo $t[7]; ?></h4>
			<p class="comment"><?php echo $t[8]; ?></p>
			</div>
			<div class="clearfix visible-md-block"></div>
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/aris.jpg" class="img-responsive img-portrait" alt="Aris" />
			<h4 class="name">Aris</h4>
			<h4 class="job"><?php echo $t[13]; ?></h4>
			<p class="comment"><?php echo $t[14]; ?></p>
			</div>
			<div class="clearfix visible-lg-block"></div>
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/michi.jpg" class="img-responsive img-portrait" alt="Michael" />
			<h4 class="name">Michael</h4>
			<h4 class="job"><?php echo $t[13]; ?></h4>
			<p class="comment"><?php echo $t[15]; ?></p>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/esther.jpg" class="img-responsive img-portrait" alt="Esther" />
			<h4 class="name">Esther</h4>
			<h4 class="job"><?php echo $t[16]; ?></h4>
			<p class="comment"><?php echo $t[17]; ?></p>
			</div>
			<div class="clearfix visible-md-block"></div>
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/no-foto.jpg" class="img-responsive img-portrait" alt="Christian" />
			<h4 class="name">Christian</h4>
			<h4 class="job"><?php echo $t[18]; ?></h4>
			<p class="comment"><?php echo $t[19]; ?></p>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 s-t lvl-3">
			<img src="/img/team/no-foto.jpg" class="img-responsive img-portrait" alt="Georg" />
			<h4 class="name">Georg</h4>
			<h4 class="job"><?php echo $t[22]; ?></h4>
			<p class="comment"><?php echo $t[23]; ?></p>
			</div>
			
		</div>
	
	</div>
</main>
</div>
<?php 
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>