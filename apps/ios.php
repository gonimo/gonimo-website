<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
?>
<script type='application/ld+json'>
{
    "@context": "http://schema.org/",
    "@type": "Product",
    "name": "gonimo ios",
    "url": "https://gonimo.com",
    "image": "https://gonimo.com/logo.jpg",
    "description": "das originale browserbasierte gonimo-Babyfon",
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
	<h1><?php echo $apps['ios'][0]; ?></h1>
	<h2><?php echo $apps['ios'][1]; ?></h2>
	<a href="#" role="button" title="gonimo in google Play" id="start-btn"><div class="impact-btn">
				<p>
				Playstore - Link 
				</p>
	</div></a>
	<h3><?php echo $apps['ios'][2]; ?></h3>
	<a>
	<?php echo $apps['ios'][3]; ?>
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