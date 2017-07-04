<?php
include 'head.php';
include 'nav.php';
include 'header.php';
?>
<style type="text/css">
	h1{
		text-align: center;
		margin: 10px;
	}
	.flexx{
		display: flex;
		margin: 15px;
		padding: 10px;
	}
	img{
		border-radius: 25px;
	}
	p{
		font-size: 18px;
	}
</style>
<body>
	<h1>Traçabilité et environnement</h1>
	<div class="flexx">
		<img src="img/trac1.png">
		<p>
			Toutes nos remorques et tous nos porteurs sont équipés thermo
			d’enregistreurs de température
		</p>
	</div>
	<div class="flexx">
		<img src="img/trac2.png">
		<p>Nous pouvons suivre en temps réel chacun de nos véhicules gps
			grâce à un système de géolocalisation (Transics)
		</p>
	</div>
	<div class="flexx">
		<img src="img/trac3.png">
		<p>    En 2009, signature de la Charte de Réduction des Emissions de CO2<br />
		Nous disposons de tracteurs aux normes :<br />
			Euro 6 : 15%<br />
			Euro 5 EEV : 24%<br />
			Euro 5 : 48%<br />
			Euro 4 : 13%
		</p>
	</div>

	<?php
	include 'footer.php';
	?>