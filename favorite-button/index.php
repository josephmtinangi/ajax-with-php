<?php
	session_start();
    // destroy the session
	// $_SESSION['favorite'] = [];
	!isset($_SESSION['favorite']) ? $_SESSION['favorite'] = [] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Favorites</title>
</head>
<body>
	<?php 
		// debug
		echo join(', ', $_SESSION['favorite']);
	?>
	<div id="blog-posts">
		<div id="blog-post-101" class="blog-post">
			<h3>Blog Post 101</h3>
		<p>
			Digital plastic faded narrative office garage advert spook warehouse uplink-ware Chiba. Courier faded narrative savant Shibuya numinous ablative car denim shrine sunglasses papier-mache computer. Tower drone lights apophenia engine jeans futurity hacker math-car. Assassin chrome rebar wonton soup garage gang rifle office grenade papier-mache tiger-team plastic spook j-pop drugs refrigerator. Order-flow market neon uplink soul-delay futurity hacker geodesic sentient military-grade j-pop. Computer digital neon pistol uplink saturation point nodality numinous soul-delay math-decay neural rifle military-grade cardboard hacker bridge. 
		</p>
		<p>
			DIY sensory carbon assassin cartel Tokyo post-Shibuya sprawl wonton soup footage human free-market monofilament order-flow Chiba. Corrupted apophenia shrine nodality plastic dome Chiba shoes girl shanty town weathered refrigerator skyscraper youtube cyber-tattoo. Futurity faded tank-traps cartel franchise post-refrigerator engine shrine. 
		</p>
		<button class="favorite-button">Favorite</button>
		</div>
		<div id="blog-post-102" class="blog-post">
			<h3>Blog Post 102</h3>
			<p>
				Rain corrupted film kanji monofilament grenade faded systema pre. Silent towards sign claymore mine kanji franchise drone. Corrupted spook silent dome film courier sprawl footage nodal point neon singularity decay rebar San Francisco. Nodal point San Francisco bomb beef noodles towards saturation point industrial grade courier. Katana corporation skyscraper shrine RAF military-grade systema kanji corrupted carbon office knife futurity. Girl decay youtube sprawl papier-mache dissident augmented reality. Sentient 8-bit Chiba order-flow military-grade free-market knife media. 
			</p>
			<p>
				Table nano-boy disposable sprawl computer bicycle neon convenience store. Office pistol 3D-printed industrial grade convenience store corrupted geodesic soul-delay towards faded narrative dome. Disposable wristwatch crypto-human table sprawl franchise monofilament car into vehicle courier. Sign sentient table carbon market cardboard Chiba dissident shrine post-stimulate range-rover. 
			</p>
			<button class="favorite-button">Favorite</button>
		</div>
		<div id="blog-post-103" class="blog-post">
			<h3>Blog Post 103</h3>
			<p>
				Dome face forwards faded film car industrial grade tube franchise math-boy sub-orbital savant artisanal. 3D-printed car cyber-tanto San Francisco-space tower beef noodles decay futurity grenade free-market. Grenade sprawl denim range-rover skyscraper pre-face forwards media savant Legba vinyl corrupted hotdog boy office. Garage-space bomb tank-traps DIY futurity shoes voodoo god hotdog sprawl BASE jump math. 
			</p>
			<p>
				Nano-plastic Shibuya denim grenade chrome render-farm BASE jump franchise Chiba youtube advert 8-bit assassin. Towards disposable kanji vinyl paranoid hacker San Francisco order-flow. Meta-industrial grade systemic neural free-market car drone dolphin carbon. Hacker table network spook grenade convenience store dolphin savant. Film geodesic wristwatch corporation rebar hacker render-farm drugs computer euro-pop uplink RAF nodal point urban sub-orbital gang. Faded chrome singularity BASE jump disposable denim kanji film semiotics-ware camera assault boy youtube systema. Crypto-media city lights numinous narrative realism jeans film order-flow tank-traps BASE jump dissident bomb. 
			</p>
			<button class="favorite-button">Favorite</button>
		</div>
	</div>

	<script>
		function favorite() {
			var parent = this.parentElement;

			var xhr = new XMLHttpRequest();
			xhr.open('POST', '/favorite.php', true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			xhr.onreadystatechange = function() {
				if(xhr.readyState == 4 && xhr.status == 200) {
					var result = xhr.responseText;
					console.log("Result: " + result);
				}
			};
			xhr.send("id=" + parent.id);
		}

		var buttons = document.getElementsByClassName('favorite-button');
		for(i=0; i < buttons.length; i++) {
			buttons.item(i).addEventListener("click", favorite);
		}

	</script>

</body>
</html>