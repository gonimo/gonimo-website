<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
?>
<script type='application/ld+json'>
{
    "@context": "http://schema.org/",
    "@type": "Product",
    "name": "Gonimo Android",
    "url": "https://gonimo.com",
    "image": "https://gonimo.com/logo.jpg",
    "description": "das originale browserbasierte Gonimo Babyfon",
    "brand": {
        "@type": "Thing",
        "name": "gonimo"
    },
    "offers": {
        "@type": "Offer",
        "priceCurrency": "EUR",
        "price": "5",
        "itemCondition": "New",
        "availability": "InStock"
    }
}
</script>
<title><?php echo "gonimo-".$m[2]." ".$apps['android'][0]; ?></title>
<div class="container s-apps lvl-0">
	<div class="container-fluid s-apps lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<h1><?php echo $apps['android'][0]; ?></h1>
	<h2><?php echo $apps['android'][1]; ?></h2>
  <div class="app-link"><?php echo $apps['android'][6]; ?></div>
  <div class="promo">    
    <h3> <?php echo $apps['android'][7]; ?></h3>
    <p> <?php echo $apps['android'][8]; ?></p>
    <div class="promo-code"><span class="code" id="promo-code"></span>
    <button class="promo-button visible" id="promo-button"><i class='fa fa-refresh' title='Code' aria-hidden='true'></i> <?php echo $apps['android'][9]; ?></button></div>
  </div>
  <h3><?php echo $apps['android'][2]; ?></h3>
  <div class="app-description">
  <h4> <?php echo $apps['android'][3]; ?></h4>
    <?php echo $apps['android'][4]; ?>
    <?php echo $apps['android'][5]; ?>
  </div>
  </div>
	</div>
	</div>
</div>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>