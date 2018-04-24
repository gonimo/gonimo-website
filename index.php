<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
$videosPath="/videos/";
?>
<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "gonimo",
  "url": "https://gonimo.com",
  "sameAs": [
    "https://www.facebook.com/mygonimo/",
    "https://twitter.com/mygonimo",
    "https://www.instagram.com/mygonimo/"
	],
  "logo": "",
  "image": "https://gonimo.com/img/impact-lg.jpg",
  "description": "<?php echo $header['description']; ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Erdbergstraße 61/10",
    "addressLocality": "Wien",
    "postalCode": "1030",
    "addressCountry": "Austria"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+43 677 620 967 44",
	"email": "hello@gonimo.com",
    "contactType": "Customer Support"
  }
}
</script>
<title>Gonimo - Already in your Pocket</title>
<div class="container lvl-0">
<section class="impact">
<div class="container-fluid impact lvl-1">
	<div class="row impact lvl-2">
<!--		<div class="col-md-6 sm-hidden impact lvl-2">
			<img class="img img-responsive" src="/img/w-impact-lg.png" alt="Gonimo" title="Gonimo">
		</div> -->
    <?php echo $banner; ?>
		<div class="col-xs-12 col-md-6 col-md-offset-6 impact lvl-2">
			<h1>Gonimo</h1>
			<h3>Good Night Monitor</h3>
			<h2><?php echo $i_i[0]; ?></h2>
			<a href="https://app.gonimo.com" role="button" title="<?php echo $i_i[1]; ?>" id="start-btn"><div class="impact-btn">
				<p>
				<?php echo $i_i[2]; ?>
				</p>
			</div></a>
			<br>
			<ul class="impact-list">
				<?php echo $i_i[6]; ?>
			</ul>
		</div>
		<!-- <div class="col-xs-12 impact lvl-2 feedback">
		<h4 class="impact-feedback"><?php echo $i_i[11]; ?></h4>
		<a href="/feedback.php" title="<?php echo $i_i[12]; ?>"><div class="feedback-btn"><?php echo $i_i[12]; ?></div></a>
		</div>
        -->
		<div class="col-xs-12 impact lvl-2">
			<p>
				<?php echo $i_i[7]; ?>
			</p>
			<ul class="impact-links">				
				<a href="#intro" title="<?php echo $i_i[8]; ?>"><li><?php echo $i_i[8]; ?></li></a>
				<a href="#trailer" data-toggle="collapse" data-video="trailer" title="<?php echo $i_i[9]; ?>"><li><?php echo $i_i[9]; ?></li></a>
				<a href="/faq.php" title="<?php echo $i_i[10]; ?>"><li><?php echo $i_i[10]; ?></li></a>
			</ul>
		</div>
	</div>
</div>
</section>
  <div class="container-fluid news lvl-1">
	<div class="row news lvl-2">
		<div class="col-xs-12 col-md-6 col-md-offset-3 news lvl-3">
			<h3><?php echo $news['icon'].$news['head'].$news['icon']; ?></h3>
			<p>
			<?php echo $news['body']; ?>
			</p>
			<a class="link" href="<?php echo $news['link']; ?>" title="<?php echo $news['link-title']; ?>"><?php echo $news['link-title']; ?></a>
		</div>
	</div>
</div>
<section class="video collapse" id="trailer">
<div class="container-fluid video lvl-1">
	<div class="video lvl-2">
		<video  controls preload="metadata" data-videoname="trailer">
			<source src=<?php echo $videosPath.$i_v[0].".webm" ?> type="video/webm">
			<source src=<?php echo $videosPath.$i_v[0].".mp4" ?> type="video/mp4">
			<div class="embed-responsive embed-responsive-16by9">
			<embed aria-label='ARIA label for embed' type='video/mp4' src="<?php echo $i_v[1]; ?>" allowfullscreen>
			</div>
		</video>
	</div>
</div>
</section>
<section class="benefits">
<div class="container-fluid benefits lvl-1" id="vorteile">
	<div class="benefits lvl-2">
		<div class="row benefits lvl-3">
			<div class="col-xs-12 benefits lvl-4">
			<h2><?php echo $i_b[0]; ?></h2>
			</div>
		</div>
		<div class="row benefits lvl-3">
			<div class="col-xs-6 col-md-4 col-md-offset-2 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-02.svg" alt="<?php echo $i_b[1]; ?>" title="<?php echo $i_b[1]; ?>"/>
			<h3><?php echo $i_b[2]; ?></h3>
			<p><?php echo $i_b[3]; ?></p>
			</div>		
			<div class="col-xs-6 col-md-4 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-03.svg" alt="<?php echo $i_b[4]; ?>" title="<?php echo $i_b[4]; ?>"/>
			<h3><?php echo $i_b[5]; ?></h3>
			<p><?php echo $i_b[6]; ?></p>
			</div>
			<div class="clearfix visible-xs-block visible-sm-block visible-md-block"></div>
			<div class="col-xs-6 col-md-4 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-04.svg" alt="<?php echo $i_b[7]; ?>" title="<?php echo $i_b[7]; ?>"/>
			<h3><a href="/security.php" class="link" title="<?php echo $s[0]; ?>"><?php echo $i_b[8]; ?></a></h3>
			<p><?php echo $i_b[9]; ?></p>
			</div>
			<div class="col-xs-6 col-md-4 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-05.svg" alt="<?php echo $i_b[10]; ?>" title="<?php echo $i_b[10]; ?>"/>
			<h3><?php echo $i_b[11]; ?></h3>
			<p><?php echo $i_b[12]; ?></p>
			</div>
			<div class="clearfix visible-xs-block visible-sm-block"></div>
			<div class="col-xs-6 col-md-4 col-xs-offset-3 col-md-offset-0 benefits lvl-4">
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
<section class="intro" id="intro">
<div class="container-fluid intro lvl-1">
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
		<a href="https://app.gonimo.com" role="button" title="<?php echo $i_i[1]; ?>" id="start-btn"><div class="impact-btn">
			<p>
			<?php echo $i_i[2]; ?>
			</p>
		</div></a>
		</div>
	</div>
	<div class="row intro lvl-3">
		<div class="col-xs-12 intro lvl-4">
		<a href="#tutorial" role="button" data-toggle="collapse" data-video="tutorial" title="<?php echo $i_s[12]; ?>" id="start-btn"><div class="video-btn">
			<?php echo $i_s[12]; ?>
		</div></a>
		</div>
	</div>
</div>
</section>
<section class="video collapse" id="tutorial">
<div class="container-fluid video lvl-1">
	<div class="video lvl-2">
		<video  controls preload="metadata" data-videoname="tutorial">
			<source src=<?php echo $videosPath.$i_v[2].".webm" ?> type="video/webm">
			<source src=<?php echo $videosPath.$i_v[2].".mp4" ?> type="video/mp4">
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
	<div class="family lvl-2">
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

<!-- <section class="robert">
<div class="container-fluid robert lvl-1">
	<img src="/img/gonimo-robert.jpg" alt="<?php echo $i_r[0]; ?>" title="<?php echo $i_r[0]; ?>">
	<div class="container robert lvl-2">
		<h3 class="robert-quote">
		&#x201C;<?php echo $i_r[1]; ?>&#x201D;
		</h3>
		<br>
	</div>
</div>
</section> -->
<section class="functions">
<div class="container-fluid functions lvl-1" id="funktionen">
	<div class="functions lvl-2">
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
	<div class="team lvl-2">
		<div class="team lvl-3">
			<a href="/team.php"  title="<?php echo $i_t[1]; ?>"><div class="impact-btn">
				<?php echo $i_t[2]; ?>
			</div></a>
		</div>
	</div>
</div>
</section>
<section class="help">
<div class="container-fluid help lvl-1">
	<div class="help lvl-2">
		<div class="row help lvl-3">
			<div class="col-xs-12 help lvl-4">
			<h2><?php echo $i_h[0]; ?></h2>
			</div>
			<div class="col-xs-6 col-sm-4 col-sm-offset-2 help lvl-4">
			<div class="img-wrapper"><img class="img-responsive" src="/img/ico/helfen/spenden.svg" alt="<?php echo $i_h[1]; ?>" title="<?php echo $i_h[1]; ?>"/></div>
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
			<a href="/kontakt.php" title="<?php echo $i_h[5]; ?>">
			<div class="col-xs-6 col-sm-4 help lvl-4">
			<div class="img-wrapper"><img class="img-responsive" src="/img/ico/helfen/feedback.svg" alt="<?php echo $i_h[6]; ?>" title="<?php echo $i_h[6]; ?>"/></div>
			<h3><?php echo $i_h[7]; ?></h3>
			<p>
           <?php echo $i_h[8]; ?>
			</p>
			</div>
			</a>
			<div class="col-xs-12 help partner lvl-4">
			<h3><?php echo $i_p[0]; ?></h3>
			<a href="https://www.netidee.at/" title="Netidee.at" target="_blank">
			<img class="img-responsive" src="/img/partner/netidee.svg" alt="NETIDEE - Logo" title="NETIDEE - Logo"/><br>
			</a>
			</div>
		</div>
	</div>
</div>
</section>
</div>
<?php 
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>