<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/header.php';
?>
<script type='application/ld+json'>
{
    "@context": "http://schema.org/",
    "@type": "Product",
    "name": "gonimo WebApp",
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
        "price": "0",
        "itemCondition": "New",
        "availability": "InStock"
    }
}
</script>
<script src="https://cdn.webrtc-experiment.com/DetectRTC.js"></script>
<title><?php echo "gonimo-".$m[2]." ".$apps['browser'][0]; ?></title>
<div class="container s-apps lvl-0">
	<div class="container-fluid s-apps lvl-1">
	<div class="row">
	<div class="col-xs-12">
	<h1><?php echo $apps['browser'][0]; ?></h1>
	<h2><?php echo $apps['browser'][1]; ?></h2>
	<a href="https://app.gonimo.com" role="button" title="<?php echo $i_i[1]; ?>" id="start-btn"><div class="impact-btn">
				<p>
				<?php echo $i_i[2]; ?>
				</p>
	</div></a>
	<h3><?php echo $apps['browser'][2]; ?></h3>
	<p>
	<?php echo $apps['browser'][3]; ?>
	</p>
	<h4><?php echo $apps['browser'][4]; ?></h4>
	<table>
	<tbody>
	<tr><th><?php echo $apps['browser'][5]; ?></th><th><?php echo $apps['browser'][6]; ?></th></tr>
	<tr><td>Google Chrome</td><td>Version 50 +</td></tr>
	<tr><td>Mozilla Firefox</td><td>Version 44 +</td></tr>
	<!-- <tr><td>Apple Safari</td><td>Version 11 +</td></tr> -->
	<tr><td>Microsoft Internet Explorer</td><td><?php echo $apps['browser'][7]; ?></td></tr>
	<tr><td>Microsoft Edge</td><td>ab Version 11 <?php echo $apps['browser'][8]; ?></td></tr>
	<!-- <tr><td>Opera</td><td>Version 48+</td></tr> -->
	</tbody>
	</table>
	<h4><?php echo $apps['browser'][9]; ?></h4>
	<table>
	<tbody>
	<tr><th colspan="2"><?php echo $apps['browser'][10]; ?></th></tr>
	<?php
	foreach ($apps['browser'][11] as $key => $value){
		echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
	};
	?>
	</tbody>
	</table>
	</div>
	<div class="col-xs-12 apps webrtc-test">
		<div class="panel panel-primary test">
		<a data-toggle="collapse" href="#test" class="panel-primary">
		<div class="panel-heading"><?php echo $apps['browser'][12]; ?></div>
		</a>
		<div class="panel-body panel-primary panel-collapse collapse test" id="test">
		<h3><?php echo $apps['browser'][13]; ?></h3>
		<h4><?php echo $apps['browser'][14]; ?></h4>
		<noscript><?php echo $apps['browser'][15]; ?></noscript>
		<div class="test-btn" role="button" id="test-btn">
			<p>
			<?php echo $apps['browser'][16]; ?>
			</p>
		</div>
		<div class="results">
		<h3><?php echo $apps['browser'][17]; ?></h3>
		<table>
		<tbody>
		<tr><th><?php echo $apps['browser'][18]; ?></th><th><?php echo $apps['browser'][19]; ?></th></tr>
		<?php
		foreach ($apps['browser'][20] as $key => $value){
			echo "<tr><td>".$value."</td><td id='result-".$key."'></td></tr>";
		};
		?>
		</tbody>
		</table>
		</div>
		</div>
		</div>
		
	</div>	
<script>
$(document).ready(function(){
    $("#test-btn").click(function(){
		$("div.results").toggleClass("success");
		$("[id^=result]").html("<i class='fa fa-cog fa-spin fa-2x fa-fw'></i><span class='sr-only'>Loading...</span>");
		$("#result-perm-cam").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").addClass("error");
		$("#result-perm-mic").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").addClass("error");
		DetectRTC.load(function() {
		$("#result-os").html(DetectRTC.osName+" "+DetectRTC.osVersion);
		if (DetectRTC.isMobileDevice == true){
			$("#result-mobile").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>");
		} else {
			$("#result-mobile").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>");
		}
		$("#result-browser").html(DetectRTC.browser.name+" "+DetectRTC.browser.version);
		if (DetectRTC.isPrivateBrowsing == true){
			$("#result-private").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>");
		} else {
			$("#result-private").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>");
		}
		$("#result-resolution").html(DetectRTC.displayResolution+" ( "+DetectRTC.displayAspectRatio+" : 1 )");
		// for better device detection -START-
		if (DetectRTC.MediaDevices[0] && DetectRTC.MediaDevices[0].label === 'Please invoke getUserMedia once.') {
			navigator.mediaDevices.getUserMedia({
				audio: true,
				video: true
			}).then(function(stream) {
				var video;
				try {
					video = document.createElement('video');
					video.muted = true;
					video.src = URL.createObjectURL(stream);
					video.style.display = 'none';
					(document.body || document.documentElement).appendChild(vide);
				} catch (e) {}

				DetectRTC.load(function() {
					stream.getTracks().forEach(function(track) {
						track.stop();
					});

					if (video && video.parentNode) {
						video.parentNode.removeChild(video);
					}
						var cams = [];
						DetectRTC.videoInputDevices.forEach(function(device) {
						cams.push(device.label);});	
						var speakers = [];
						DetectRTC.audioOutputDevices.forEach(function(device) {
						speakers.push(device.label);});
						var mics = [];
						DetectRTC.audioInputDevices.forEach(function(device) {
						mics.push(device.label);});
						$("#result-speaker").html(speakers.join('<br>'));
						$("#result-mic").html(mics.join('<br>'));
						$("#result-cam").html(cams.join('<br>'));
						if (DetectRTC.isWebsiteHasWebcamPermissions == true){
							$("#result-perm-cam").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>").addClass("success").removeClass("error");
						} else {
							$("#result-perm-cam").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").addClass("error");
						}
						if (DetectRTC.isWebsiteHasMicrophonePermissions == true){
							$("#result-perm-mic").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>").addClass("success").removeClass("error");
						} else {
							$("#result-perm-mic").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").addClass("error");
						}
				});
			});
		} else {
			DetectRTC.videoInputDevices.forEach(function(device, idx) {
				console.log(device.label+"2");});
										var cams = [];
						DetectRTC.videoInputDevices.forEach(function(device) {
						cams.push(device.label);});	
						var speakers = [];
						DetectRTC.audioOutputDevices.forEach(function(device) {
						speakers.push(device.label);});
						var mics = [];
						DetectRTC.audioInputDevices.forEach(function(device) {
						mics.push(device.label);});
						$("#result-speaker").html(speakers.join('<br>'));
						$("#result-mic").html(mics.join('<br>'));
						$("#result-cam").html(cams.join('<br>'));
						if (DetectRTC.isWebsiteHasWebcamPermissions == true){
							$("#result-perm-cam").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>").addClass("success").removeClass("error");
						} else {
							$("#result-perm-cam").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").addClass("error");
						}
						if (DetectRTC.isWebsiteHasMicrophonePermissions == true){
							$("#result-perm-mic").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>").addClass("success").removeClass("error");
						} else {
							$("#result-perm-mic").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").addClass("error");
						}
			
		}
		
		//-END-
			if (DetectRTC.isWebRTCSupported == true){
				$("#result-webrtc").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>").toggleClass("success");
			} else {
				$("#result-webrtc").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").toggleClass("error");
			}

			if (DetectRTC.isWebSocketsSupported == true){
				$("#result-websocket").html("<i class='fa fa-check fa-2x'></i><span class='sr-only'>check</span>").toggleClass("success");
			} else {
				$("#result-websocket").html("<i class='fa fa-times fa-2x'></i><span class='sr-only'>check</span>").toggleClass("error");
			}
		});
	});
});
</script>
	

	</div>
	</div>
</div>
<?php 
include $_SERVER["DOCUMENT_ROOT"].'/footer.php';
?>
</body>
</html>