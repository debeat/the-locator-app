<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Adan Altamira &amp; Kyle Weber" />
	<meta name="description" content="A geolocation mobile web app experiment." />
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	
	<title>Locator</title>
	
	<link rel="stylesheet" type="text/css" href="assets/styles/global.css" media="screen" />
	
</head>
<body>
	<header role="banner">
		<hgroup>
			<h1>Locator</h1>
			<h2>Geolocation Experiment</h2>
		</hgroup>
		<hr />
		<section id="enable-message" class="hidden">JavaScript is disabled please enable to unleash awesome.</section>
	</header>
	<section role="main">
		<article>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat congue mauris vel pellentesque. Phasellus quis lorem lorem. Curabitur nec eleifend leo.</p>
		</article>
		<article id="location-prompt">
			<p>We're stalking you.</p>
			<section>
				<p>Please enable location in your browser. Press the button.</p>
				<input class="locate-button" type="button" value="Locate!">
			</section>
		</article>
		<section id="map"></section>
	</section>
	<footer role="conteninfo">
		<p>&copy; 2012 and Forever. Kyle Weber &amp; Adan Altamira.</p>
	</footer>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="assets/scripts/main.js"></script>
</body>
</html>