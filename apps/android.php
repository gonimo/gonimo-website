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
<title><?php echo "gonimo-".$m[2]." ".$apps['browser'][0]; ?></title>
<div class="container s-apps lvl-0">
	<div class="container-fluid s-apps lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<h1><?php echo $apps['android'][0]; ?></h1>
	<h2><?php echo $apps['android'][1]; ?></h2>

    <a href='https://play.google.com/store/apps/details?id=com.gonimo.baby&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/></a>

    <a href='https://play.google.com/store/apps/details?id=com.gonimo.baby&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Jetzt bei Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/de_badge_web_generic.png'/></a>

	<h3><?php echo $apps['android'][2]; ?></h3>
	<a>
	<?php echo $apps['android'][3]; ?>
	</a>
	</div>
	</div>
	</div>
</div>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>