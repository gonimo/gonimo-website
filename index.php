<?php
require_once 'header.php';
?>
<title>Gonimo - Already in your Pocket</title>
<div class="container-fluid lvl-0">
<section class="impact">
<div class="container-fluid impact lvl-1">
	<img class="img-responsive" src="" id="img-impact" alt="Gonimo" title="Gonimo - Already in your pocket"/>
	<div class="container impact lvl-2 impact-txt">
			<h2 class="impact-txt">
			<?php echo $i_i[0]; ?>
			</h2>
	</div>
	<div class="impact lvl-2 start-btn">
		<a href="https://app.gonimo.com" role="button" title="<?php echo $i_i[1]; ?>" id="start-btn"><div class="impact-btn">
			<p>
			<?php echo $i_i[2]; ?>
			</p>
		</div></a>
	</div>
</div>
</section>
<section class="video">
<div class="container-fluid video lvl-1">
	<div class="container video lvl-2">
		<video  controls preload="metadata">
			<source src=<?php echo "/vid/".$i_v[0].".webm" ?> type="video/webm">
			<source src=<?php echo "/vid/".$i_v[0].".mp4" ?> type="video/mp4">
			<div class="embed-responsive embed-responsive-16by9">
			<embed aria-label='ARIA label for embed' type='video/mp4' src="<?php echo $i_v[1]; ?>" allowfullscreen>
			</div>
		</video>
	</div>
</div>
</section>
<section class="intro">
<div class="container-fluid intro lvl-1">
	<div class="container intro lvl-2">
	<div class="row intro lvl-3">
	<div class="col-xs-12 intro lvl-4">
	<h2> <?php echo $i_i[4]; ?> </h2>
		<div class="intro-txt">
			<p>
			<?php echo $i_i[5]; ?>
			</p>
		</div>
	</div>
	</div>
	<div class="row intro lvl-3">
	<div class="col-sm-4 intro steps lvl-4">
	<div class="img-wrapper step1">
	<img class="img-responsive" src="/img/ico/steps/step1.svg" alt="<?php echo $i_s[0]; ?>" title="<?php echo $i_s[0]; ?>">
	</div>
	<h3><?php echo $i_s[1]; ?></h3>
	<p> <?php echo $i_s[2]; ?></p>
	</div>
	<div class="col-sm-4 intro steps lvl-4">
	<div class="img-wrapper">
	<img class="img-responsive" src="/img/ico/steps/step2.svg" alt="<?php echo $i_s[3]; ?>" title="<?php echo $i_s[3]; ?>">
	</div>
	<h3><?php echo $i_s[4]; ?></h3>
	<p><?php echo $i_s[5]; ?></p>
	</div>
	<div class="col-sm-4 intro steps lvl-4">
	<div class="img-wrapper">
	<img class="img-responsive" src="/img/ico/steps/step3.svg" alt="<?php echo $i_s[6]; ?>" title="<?php echo $i_s[6]; ?>">
	</div>
	<h3><?php echo $i_s[7]; ?></h3>
	<p><?php echo $i_s[8]; ?></p>
	</div>
	</div>
	<div class="row intro lvl-3">
	<div class="col-xs-12 intro lvl-4">
	<a href="https://app.gonimo.com" role="button" title="<?php echo $i_i[1]; ?>" id="start-btn"><div class="intro-btn">
		<p>
		<?php echo $i_i[2]; ?>
		</p>
	</div></a>
	</div>
	
	</div>
	</div>
</div>
</section>
<section class="video">
<div class="container-fluid video lvl-1">
	<div class="container video lvl-2">
		<video  controls preload="metadata">
			<source src=<?php echo "/vid/".$i_v[2].".webm" ?> type="video/webm">
			<source src=<?php echo "/vid/".$i_v[2].".mp4" ?> type="video/mp4">
			<div class="embed-responsive embed-responsive-16by9">
			<embed aria-label='ARIA label for embed' type='video/mp4' src="<?php echo $i_v[3]; ?>" allowfullscreen>
			</div>
		</video>
	</div>
</div>
</section>
<section class="family">
<div class="container-fluid family lvl-1">
	<h2> <?php echo $i_s[9]; ?> </h2>
	<div class="container family lvl-2">
	<img class="img-responsive" src="/img/ico/family/gonimo-family-08.svg" alt="<?php echo $i_s[10]; ?>" title="<?php echo $i_s[10]; ?>">
		<div class="family lvl-3">
		<p>
		<?php echo $i_s[11]; ?>
		</p>
		</div>
	</div>
</div>

</section>
<!--
<section class="devices">
<div class="container-fluid devices lvl-1">
	<div class="container devices lvl-2">
	<p>
	Alle Geräte und Browser Icons <br>
	Coming soon!
	</p>
	</div>
</div>
</section>
-->
<section class="benefits">
<div class="container-fluid benefits lvl-1" id="vorteile">
	<div class="container benefits lvl-2">
		<div class="row benefits lvl-3">
			<div class="col-xs-12 benefits lvl-4">
			<h2><?php echo $i_b[0]; ?></h2>
			</div>
		</div>
		<div class="row benefits lvl-3">
			<div class="col-xs-12 col-md-6 col-md-offset-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-02.svg" alt="<?php echo $i_b[1]; ?>" title="<?php echo $i_b[1]; ?>"/>
			<h3><?php echo $i_b[2]; ?></h3>
			<p>
			<?php echo $i_b[3]; ?>
			</p>
			</div>
		</div>
		<div class="row benefits lvl-3">		
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-03.svg" alt="<?php echo $i_b[4]; ?>" title="<?php echo $i_b[4]; ?>"/>
			<h3><?php echo $i_b[5]; ?></h3>
			<p><?php echo $i_b[6]; ?></p>
			</div>
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-04.svg" alt="<?php echo $i_b[7]; ?>" title="<?php echo $i_b[7]; ?>"/>
			<h3><?php echo $i_b[8]; ?></h3>
			<p><?php echo $i_b[9]; ?></p>
			</div>
			<div class="clearfix visible-xs-block visible-sm-block"></div>
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-05.svg" alt="<?php echo $i_b[10]; ?>" title="<?php echo $i_b[10]; ?>"/>
			<h3><?php echo $i_b[11]; ?></h3>
			<p><?php echo $i_b[12]; ?></p>
			</div>
			
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-06.svg" alt="<?php echo $i_b[13]; ?>" title="<?php echo $i_b[13]; ?>"/>
			<h3><?php echo $i_b[14]; ?></h3>
			<p><?php echo $i_b[15]; ?></p>
			</div>
			<!--
			<div class="col-xs-12 benefits lvl-4"><a href="soon.php">
			<p class="benefits-btn">
			MEHR ERFAHREN
			</p></a>
			</div>
			-->
		</div>
	</div>
</div>
</section>
<section class="robert">
<div class="container-fluid robert lvl-1">
	<img src="/img/gonimo-robert.jpg" alt="<?php echo $i_r[0]; ?>" title="<?php echo $i_r[0]; ?>">
	<div class="container robert lvl-2">
		<h3 class="robert-quote">
		&#x201C;<?php echo $i_r[1]; ?>&#x201D;
		</h3>
		<br>
	</div>
</div>
</section>
<section class="functions">
<div class="container-fluid functions lvl-1" id="funktionen">
	<div class="container functions lvl-2">
		<div class="row functions lvl-3">
			<div class="col-xs-12 functions lvl-4">
			<h2><?php echo $i_f[0]; ?></h2>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/live-stream.svg" alt="<?php echo $i_f[1]; ?>" title="<?php echo $i_f[1]; ?>">
			</div>
			<div class="content-wrapper">
			<h3><?php echo $i_f[2]; ?></h3>
			<p>
			<?php echo $i_f[3]; ?>
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/allegeraeusche.svg" alt="<?php echo $i_f[4]; ?>" title="<?php echo $i_f[4]; ?>">
			</div>
			<div class="content-wrapper">
			<h3><?php echo $i_f[5]; ?></h3>
			<p>
			<?php echo $i_f[6]; ?>
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/wifi-lte.svg" alt="<?php echo $i_f[7]; ?>" title="<?php echo $i_f[7]; ?>">
			</div>
			<div class="content-wrapper">
			<h3><?php echo $i_f[8]; ?></h3>
			<p>
			<?php echo $i_f[9]; ?>
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/multi-elterngeraete.svg" alt="<?php echo $i_f[10]; ?>" title="<?php echo $i_f[10]; ?>">
			</div>
			<div class="content-wrapper">
			<h3><?php echo $i_f[11]; ?></h3>
			<p>
			<?php echo $i_f[12]; ?>
			</p>
			</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="team">
<div class="container-fluid team lvl-1">
	<img class="img-responsive" src="/img/team.jpg" alt="<?php echo $i_t[0]; ?>" title="<?php echo $i_t[0]; ?>"/>

	<div class="container team lvl-2">
		<div class="team lvl-3">
			<a href="/team.php"  title="<?php echo $i_t[1]; ?>"><p class="team-btn">
				<?php echo $i_t[2]; ?>
			</p></a>
		</div>
	</div>
</div>
</section>
<section class="help">
<div class="container-fluid help lvl-1">
	<div class="container help lvl-2">
		<div class="row help lvl-3">
			<div class="col-xs-12 help lvl-4">
			<h2><?php echo $i_h[0]; ?></h2>
			</div>
			<div class="col-xs-12 col-sm-6 help lvl-4">
			<div class="help lvl-5">
			<img class="img-responsive" src="/img/ico/helfen/spenden.svg" alt="<?php echo $i_h[1]; ?>" title="<?php echo $i_h[1]; ?>"/>
			<h3><?php echo $i_h[2]; ?></h3>
			<p>
			<?php echo $i_h[3]; ?>
			</p>
			<form class="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" role="link">
			<input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="L9NH9QRDE4ZXG">
			<input type="image" src="https://www.paypalobjects.com/de_DE/AT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="<?php echo $i_h[4]; ?>">
			</form>
			</div>
			</div>
			<a href="/kontakt.php" title="<?php echo $i_h[5]; ?>">
			<div class="col-xs-12 col-sm-6 help lvl-4">
			<div class="help lvl-5">
			<img class="img-responsive" src="/img/ico/helfen/feedback.svg" alt="<?php echo $i_h[6]; ?>" title="<?php echo $i_h[6]; ?>"/>
			<h3><?php echo $i_h[7]; ?></h3>
			<p>
           <?php echo $i_h[8]; ?>
            <br>
			<!-- Du würdest uns sehr helfen wenn du an einer kleinen Umfrage teilnimmst und uns hilfst unser Projekt noch weiter zu verbessern.<br> -->
			</p>
			</div>
			</div>
			</a>
		</div>
	</div>
</div>
</section>
<section class="partner">
<div class="container-fluid partner lvl-1">
	<div class="container partner lvl-2">
		<div class="row partner lvl-3">
			<div class="col-xs-12 help lvl-4">
			<h3><?php echo $i_p[0]; ?></h3>
			<a href="https://www.netidee.at/" title="Netidee.at" target="_blank">
			<img class="img-responsive" src="/img/netidee.png" alt="NETIDEE - Logo" title="NETIDEE - Logo"/>
			</a>
			</div>
		</div>
	</div>
</div>
</section>
</div>
<?php 
include 'footer.php';
?>
</body>
</html>