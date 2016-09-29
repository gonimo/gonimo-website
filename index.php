<?php
require_once 'header.php';

if (isset($_GET['msg']) and $_GET['msg'] == "success"){
	echo ("<SCRIPT>
        window.alert('Vielen Dank für deine Nachricht. Wir werden uns sobald wie möglich bei dir melden')
		window.location.href='index.php'
        </SCRIPT>");
}elseif (isset($_GET['msg']) and $_GET['msg'] == "question"){
	echo ("<SCRIPT>
        window.alert('Danke für deine Frage! wir werden sie bald in den F.A.Qs beantworten')
		window.location.href='index.php'
        </SCRIPT>");
}

?>

<title>GoNiMo</title>


<div class="container container-main">
<div class="row row-room">
  <div class="col-md-12 room room1">
  <img src="img/room1.png" alt="room1" class="room1 img-responsive">
  <img src="img/room2.png" alt="room2" class="room2 img-responsive">
  </div>
</div>

<div class="row usp-even">
	<div class="col-sm-9 col-lg-7 usp-text">
    <h3 class="usp-head">ALREADY IN YOUR POCKET:</h3>
    <p class="usp-text">
     Babyfon vergessen? Ab sofort ein Problem der Vergangenheit - denn ich, Gonimo, bin immer da, wenn du mich brauchst! Egal ob zu Hause, bei den Großeltern oder unterwegs. Ohne Installation. Ich bin stets sofort verfügbar!
    </p>
    </div>
    <div class="col-sm-3 col-lg-3 usp-img">
    <img src="img/gonimo-rucksack-dot.svg" class="img-responsive img-usp img-circle">
    </div>
	<div class="col-lg-2 col-sm-0 usp-space">
	</div>
</div>

<div class="row usp-odd">
	<div class="col-sm-9 col-lg-7 usp-text">
    <h3 class="usp-head">WIE FUNKTIONIERE ICH?</h3>
    <p class="usp-text">
     Gehe einfach auf gonimo.com, sende eine Einladung an ein zweites Gerät und mache deinen Web-Browser zu einem Babyfon!
    </p>
    </div>
    <div class="col-sm-3 col-lg-3 usp-img">
    <img src="img/USP.png" class="img-responsive img-usp img-circle">
    </div>
	<div class="col-lg-2 col-sm-0 usp-space">
	</div>
</div>

<div class="row usp-even">
	<div class="col-sm-9 col-lg-7 usp-text">
    <h3 class="usp-head">ZUVERLÄSSIG UND SICHER:</h3>
    <p class="usp-text">
   Egal, was geschieht, ich melde es dir. Sei es, dass dein Schützling schreit, die Verbindung schlecht ist, abbricht oder die Batterie leer wird, ich gebe dir - und NUR dir - Bescheid! Alles was ich dir sage, erreicht dich über <a href="https://de.wikipedia.org/wiki/Transport_Layer_Security" title="Wikipedia: Transport Layer Security" target="_blank">TLS-gesicherte</a> Verbindungen. Mein Panzer ist hart. Audio und Video verlässt in der Regel nicht einmal dein Zuhause!
Mehr Info? <a href="index.php#faq" title="F.A.Q."> &gt;&gt;Klicke hier&lt;&lt; </a>
    </p>
    </div>
    <div class="col-sm-3 col-lg-3 usp-img">
    <img src="img/gonimo-ritter-dot.svg" class="img-responsive img-usp img-circle">
    </div>
	<div class="col-lg-2 col-sm-0 usp-space">
	</div>
</div>

<div class="row usp-odd">
	<div class="col-sm-9 col-lg-7 usp-text">
    <h3 class="usp-head">BENUTZERFREUNDLICH - spielend einfach:</h3>
    <p class="usp-text">
Spielerische und intuitive Bedieung. Verbinde deine Eltern- und Babystationen auf schnellstmögliche Weise. Verliere keine Zeit - ich unterstütze dich dabei!
    </p>
    </div>
    <div class="col-sm-3 col-lg-3 usp-img">
    <img src="img/USP.png" class="img-responsive img-usp img-circle">
    </div>
	<div class="col-lg-2 col-sm-0 usp-space">
	</div>
</div>

<div class="row usp-even">
	<div class="col-sm-9 col-lg-7 usp-text">
    <h3 class="usp-head">NACHHALTIG:</h3>
    <p class="usp-text">
Erwecke alte Geräte zum Leben, schmeiße sie nicht weg! Ich ermögliche es dir.    
 	</p>
    </div>
    <div class="col-sm-3 col-lg-3 usp-img">
    <img src="img/USP.png" class="img-responsive img-usp img-circle">
    </div>
	<div class="col-lg-2 col-sm-0 usp-space">
	</div>
</div>

<div class="row" id="team">
<div class="col-lg-12 team">
<h2 class="team-head"> Wer sind wir? </h2>
<img src="img/teamfoto.jpg" alt="Team" class="img img-responsive team">
<br>
<br>
<a href="team.php" title="Team" class="btn btn-default btn-block btn-team"> Erfahre mehr über uns </a>
</div>
</div>

<div class="row row-join" id="join">
<div class="col-lg-12 join">
<h2 class="join-head"> Wie kannst du uns helfen? </h2>
</div>
  <div class="col-md-4 join-donate">
	<div class="panel panel-danger">
		<div class="panel-heading">
    		<h3 class="panel-title">Spende was</h3>
  		</div>
  		<div class="panel-body">
   			<p>Mit einer Spende kannst du uns helfen das Projekt weiterzuführen. Wir haben leider viele Ausgaben. Server muss man bezahlen und Strom und Hasenfutter für das Maskottchen und sogar so Super-Nerds wie wir müssen hin und wieder etwas essen. Also hilf uns mit einer kleinen Spende.</p>
            <form class="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4XFJNH9YTRP4W">
<input type="image" src="https://www.paypalobjects.com/de_DE/AT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>
  		</div>
  	</div>
  </div>
  
  <div class="col-md-4 join-social">
	<div class="panel panel-warning">
		<div class="panel-heading">
    		<h3 class="panel-title">Teile das</h3>
  		</div>
  		<div class="panel-body">
   			<p>Du kannst uns helfen indem du dieses Projekt teilst und deinen Freunden davon erzählst.<br>
			</p>
            <button id="btn-share" title="Social-Buttons laden" class="btn btn-warning btn-block" >Teilen</button>
<br>
<div id="share">
<script>
$(document).ready(function(){
    $("#btn-share").click(function(){
        $.ajax({url: "share.html", success: function(result){
            $("#share").html(result);
			$("#btn-share").css('display','none');
        }});
    });
});
</script>
</div>
  		</div>
  	</div>
  </div>
  
  <div class="col-md-4 join-feedback">
	<div class="panel panel-success">
		<div class="panel-heading">
    		<h3 class="panel-title">Gib uns Feedback</h3>
  		</div>
  		<div class="panel-body">
   			<p>Du würdest uns sehr helfen wenn du an einer kleinen Umfrage teilnimmst und uns hilfst unser Projekt noch weiter zu verbessern.</p>
            <a href="feedback.php" title="Feedback" class="btn btn-success btn-block" target="_blank"> Feedback </a>
  		</div>
  	</div>
 </div>

</div>

<div class="row" id="faq">
<div class="col-sm-12 faq">
  <h2>Frequently Asked Questions</h2>
  <div class="panel-group">
    <div class="panel panel-default panel-faq">
          <a data-toggle="collapse" href="#faq-1" class="panel-heading click-faq">Frage 1 </a>
      <div id="faq-1" class="panel-collapse collapse">
        <div class="panel-body">Antwort 1</div>
      </div>
    </div>
    
      <div class="panel panel-default panel-faq">
          <a data-toggle="collapse" href="#faq-2" class="panel-heading click-faq">Frage 2 </a>
      <div id="faq-2" class="panel-collapse collapse">
        <div class="panel-body">Antwort 2</div>
      </div>
    </div>
    
    <div class="panel panel-default panel-faq">
          <a data-toggle="collapse" href="#faq-3" class="panel-heading click-faq">Frage 3 </a>
      <div id="faq-3" class="panel-collapse collapse">
        <div class="panel-body">Antwort 3</div>
      </div>
    </div>
    
    <div class="panel panel-default panel-faq">
          <a data-toggle="collapse" href="#faq-4" class="panel-heading click-faq">Frage 4 </a>
      <div id="faq-4" class="panel-collapse collapse">
        <div class="panel-body">Antwort 4</div>
      </div>
    </div>
    
  </div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
