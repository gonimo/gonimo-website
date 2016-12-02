<?php
include 'header.php';
?>
<title>Gonimo</title>
<div class="container-fluid lvl-0">
<section class="impact">
<div class="container-fluid impact lvl-1">
	<img class="img-responsive" src="/img/impact.png" id="img-impact" alt="Ein Laptop mit Gonimo hilft ein Kind zu beschützen."/>
	<div class="container impact lvl-2">
		<h2 class="impact-txt">
		Schütze das Wertvolle im Leben.
		</h2>
		<div class="impact lvl-3">
			<a href="https://dev.gonimo.com" role="button"><div class="impact-btn">
				<p>
				JETZT STARTEN<br>
				<span class="version">ALPHA-VERSION 0.7</span>
				</p>
			</div></a>
		</div>
	</div>
	<script>
	$(window).resize(function(){
		var width = $(window).width();
		var source = "img/impact.png";		
		
		if (width <= 360 ){
			source = "/img/impact-xs.png";
		}else if(width > 360 && width <= 750 ){
			source = "/img/impact-sm.png";
		}else if(width > 750 && width <= 1280){
			source = "/img/impact-lg.png";
		}else{
			source = "/img/impact.png";
		}
		$("#img-impact").attr("src",source);
	});
	</script> 
</div>
</section>
<section class="intro">
<div class="container-fluid intro lvl-1">
	<div class="container intro lvl-2">
	<div class="row intro lvl-3">
	<div class="col-xs-12 intro lvl-4">
	<h2> Gonimo das Babyphon – Immer mit dabei. </h2>
		<div class="intro-txt">
			<p>
			Gonimo ist ein Babyphon, für dessen Benutzung du einfach einen Web-Browser benötigst.<br>
			Zum Beispiel Chrome, Firefox, Microsoft Edge, Opera oder Safari.<br>
			Über "Jetzt Starten" kannst du sofort loslegen, ohne Download und ohne Installation.<br>
			</p>
		</div>
	</div>
	</div>
	<div class="row intro lvl-3">
	<div class="col-sm-4 intro steps lvl-4">
	<div class="img-wrapper step1">
	<img class="img-responsive" src="/img/ico/steps/step1.svg" alt="Versende eine Einladung von einem Gerät zu einem zweiten.">
	</div>
	<h3> 1. ADD DEVICE </h3>
	<p> Füge mindestens ein zweites Gerät zu deiner "Familie" hinzu, indem du eine Einladung per Mail, Whatsapp oder Telegram verschickst. </p>
	</div>
	<div class="col-sm-4 intro steps lvl-4">
	<div class="img-wrapper">
	<img class="img-responsive" src="/img/ico/steps/step2.svg" alt="Drücke auf einem der Geräte START BABYSTATION.">
	</div>
	<h3> 2. START BABYSTATION </h3>
	<p> Wenn auf dem eingeladenen Gerät die Anfrage akzeptiert wurde, machst du eines der Geräte zur Babystation. Dazu wählst du im Menü den Punkt "Baby Station" aus. </p>
	</div>
	<div class="col-sm-4 intro steps lvl-4">
	<div class="img-wrapper">
	<img class="img-responsive" src="/img/ico/steps/step3.svg" alt="Drücke auf dem anderen Gerät CONNECT TO BABY.">
	</div>
	<h3> 3. CONNECT TO BABY </h3>
	<p> Super! Jetzt brauchst du nur noch auf dem Elterngerät auf "verbinden (connect)" klicken und du hast erfolgreich eine sichere Verbindung zu deinem Kind aufgebaut. </p>
	</div>
	</div>
	<div class="row intro lvl-3">
	<div class="col-xs-12 intro lvl-4">
	<a href="https://dev.gonimo.com" role="button"><div class="intro-btn">
		<p>
		JETZT STARTEN<br>
		<span class="version">ALPHA-VERSION 0.7</span>
		</p>
	</div></a>
	</div>
	
	</div>
	</div>
</div>
</section>
<section class="family">
<div class="container-fluid family lvl-1">
	<h2> Erweitere deine Gonimo Family </h2>
	<div class="container family lvl-2">
	<img class="img-responsive" src="/img/ico/family/gonimo-family-08.svg" alt="Baby/Eltern-Station funktioniert mit einer Vielzahl an Geräten">
		<div class="family lvl-3">
		<p>
		Gratulation! Du hast bereits ein Gerät zu deiner Familie hinzugefügt. Du bist nun bereit diese zu erweitern. Mit Gonimo ist es möglich so viele Geräte wie du benötigst in deine Familie einzuladen und anschliessend als Eltergerät oder Babystation zu verwenden.
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
			<h2> Vorteile von Gonimo </h2>
			</div>
		</div>
		<div class="row benefits lvl-3">
			<div class="col-xs-12 col-md-6 col-md-offset-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-02.svg" alt="Gonimo überreicht dir ein Geschenk"/>
			<h3> OPEN SOURCE &amp KOSTENLOS </h3>
			<p>
			Gonimo ist ein Open Source Projekt und für jeden kostenlos und werbefrei ohne Einschränkungen zugänglich.
			</p>
			</div>
		</div>
		<div class="row benefits lvl-3">		
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-03.svg" alt="Gonimo steckt in einem Rucksack"/>
			<h3> IMMER MIT DABEI </h3>
			<p>
    Gonimo ist das erste Babyphon, das Plattform unabhängig, rein Browser-basierend ist und auf so gut wie allen Geräten funktioniert.
			</p>
			</div>
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-04.svg" alt="Gonimo mit einer Ritterrüstung"/>
			<h3> ZUVERLÄSSIG &amp SICHER </h3>
			<p>
    Egal ob unterwegs oder zu Hause, es ist stets für größt mögliche Sicherheit deiner Daten gesorgt.
			</p>
			</div>
			<div class="clearfix visible-xs-block visible-sm-block"></div>
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-05.svg" alt="Gonimo rennt schnell"/>
			<h3> EINFACH &amp SCHNELL </h3>
			<p>
    Gehe einfach auf gonimo.com, schicke eine Einladung an ein zweites Gerät und mache deinen Web-Browser zu einem Babyphon!
            </p>
			</div>
			
			<div class="col-xs-6 col-md-3 benefits lvl-4">
			<img class="img-responsive" src="/img/ico/usp/gonimo-06.svg" alt="Gonimo giesst eine Topfpflanze"/>
			<h3> NACHHALTIG </h3>
			<p>
			Erwecke alte Geräte zum Leben, schmeiße sie nicht weg! Ich ermögliche es dir.
			</p>
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
	<img src="/img/gonimo-robert.png" alt="Grossaufnahme von Robert Klotzner">
	<div class="container robert lvl-2">
		<h3 class="robert-quote">
		&#x201C;The best things <br> in life <br> are free&#x201D;
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
			<h2>Funktionen</h2>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/live-stream.svg" alt="LIVE PLAY-Symbol">
			</div>
			<div class="content-wrapper">
			<h3>LIVE STREAM</h3>
			<p>
			Sei jede Sekunde live dabei, wenn dein Schatz dich braucht, oder dir etwas mitteilen will.
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/allegeraeusche.svg" alt="Audio Spektrogramm">
			</div>
			<div class="content-wrapper">
			<h3>ALLE GERÄUSCHE</h3>
			<p>
			Egal wie laut dein Schatz deine Aufmerksamkeit einfordert, mit Gonimo bekommst du auch das leiseste Geräusch im Kinderzimmer mit.
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/wifi-lte.svg" alt="WiFi/LTE">
			</div>
			<div class="content-wrapper">
			<h3>WIFI & MOBILE</h3>
			<p>
			Deine Grenzen der Reichweite kannst du dir selbst setzen: Gonimo funktioniert nicht nur im gemeinsamen WLAN, sondern auch unterwegs über mobile Datenverbindungen.
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/multi-elterngeraete.svg" alt="Zwei Mobilgeräte">
			</div>
			<div class="content-wrapper">
			<h3>MULTIBABY/MULTIELTERN</h3>
			<p>
			Mit Gonimo ist es möglich so viele Elterngeräte wie du willst und so viele Babystationen wie du brauchst gleichzeitig zu konfigurieren.
			</p>
			</div>
			</div>
			<!--
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/aktivitaetenprotokoll.svg">
			</div>
			<div class="content-wrapper">
			<h3>AKTIVITÄTENPROTOKOLL</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/schlaflieder.svg">
			</div>
			<div class="content-wrapper">
			<h3>SCHLAFLIEDER</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/regler.svg">
			</div>
			<div class="content-wrapper">
			<h3>REGULIERBARER TON</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/reden.svg">
			</div>
			<div class="content-wrapper">
			<h3>REDE MIT DEINEM KIND</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/nachtlicht.svg">
			</div>
			<div class="content-wrapper">
			<h3>NACHTLICHT</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/anpassung.svg">
			</div>
			<div class="content-wrapper">
			<h3>ANPASSUNG</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/vibrationsalarm.svg">
			</div>
			<div class="content-wrapper">
			<h3>VIBRATIONSALARM</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/wifi-lte.svg">
			</div>
			<div class="content-wrapper">
			<h3>WIFI & MOBILE</h3>
			<p>
			Deine Grenzen der Reichweite kannst du dir selbst setzen: Gonimo funktioniert nicht nur im gemeinsamen WLAN, sondern auch unterwegs über mobile Datenverbindungen.
			</p>
			</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-3 functions lvl-4">
			<div class="img-wrapper">
			<img class="img" src="/img/ico/funktionen/stromsparen.svg">
			</div>
			<div class="content-wrapper">
			<h3>ENERGIESPAREND</h3>
			<p>
			Babyphon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst!
			</p>
			</div>
			</div>
			-->
			<!--
			<div class="col-xs-12 functions lvl-4"><a href="soon.php">
			<p class="functions-btn">
			MEHR ERFAHREN
			</p></a>
			</div>
			-->
		</div>
	</div>
	<script>
	$(window).resize(function(){
    $('.img-wrapper').each(function() {
        $(this).height($(this).width());
    });
	});
	</script>
<!-- for function toogle
	<script>
	$(".functions.lvl-4").click(function(){
		if( $(window).width() > 800 ){
			return;
		}else{
		$(this).find('.content-wrapper').slideToggle();
		$(this).toggleClass("detailed");
		}
	});
	</script>
-->
</div>
</section>
<section class="team">
<div class="container-fluid team lvl-1">
	<img class="img-responsive" src="/img/team.jpg" alt="Gonimo-Team-Foto"/>

	<div class="container team lvl-2">
		<div class="team lvl-3">
			<p class="team-btn"><a href="/team.php">
				ÜBER UNS
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
			<h2> Wie kannst du uns helfen ? </h2>
			</div>
			<div class="col-xs-12 col-sm-6 help lvl-4">
			<div class="help lvl-5">
			<img class="img-responsive" src="/img/ico/helfen/spenden.svg" alt="Ein Sparschwein"/>
			<h3> Spenden </h3>
			<p>
			Mit deiner Spende unterstützt du unser Open Source Projekt, um dieses weiter entwickeln und verbessern zu können.<br>
			<br>
			Vielen Dank für deine Unterstützung!
			</p>
			<form class="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
			<input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="L9NH9QRDE4ZXG">
			<input type="image" src="https://www.paypalobjects.com/de_DE/AT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online spenden – mit PayPal.">
			</form>
			</div>
			</div>
			<a href="/kontakt.php">
			<div class="col-xs-12 col-sm-6 help lvl-4">
			<div class="help lvl-5">
			<img class="img-responsive" src="/img/ico/helfen/feedback.svg" alt="Zwei Sprechblasen"/>
			<h3> Feedback </h3>
			<p>
            Wir freuen uns über jedes Feedback, dass uns bei der Verbesserung von Gonimo hilft.
            <br>
			<!-- Du würdest uns sehr helfen wenn du an einer kleinen Umfrage teilnimmst und uns hilfst unser Projekt noch weiter zu verbessern.<br> -->
			</p>
			</div>
			</div>
			</a>
		</div>
	</div>
	<script>
	$(window).resize(function(){
    $('.help.lvl-5').each(function() {
        $(this).height($(this).width());
    });
	}).resize();
	</script>
</div>
</section>
<section class="partner">
<div class="container-fluid partner lvl-1">
	<div class="container partner lvl-2">
		<div class="row partner lvl-3">
			<div class="col-xs-12 help lvl-4">
			<h3> Mit freundlicher Unterstützung durch netidee.at</h3>
			<a href="https://www.netidee.at/" title="Netidee.at" target="_blank">
			<img class="img-responsive" src="/img/netidee.png" alt="NETIDEE - Logo"/>
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