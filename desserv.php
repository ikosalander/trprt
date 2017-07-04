<?php
include 'head.php';
include 'nav.php';
include 'header.php';
?>
<style type="text/css">
	h1{
		text-align: center;
	}
	p{
		text-align: center;
	}
	.imgDesserv{
		text-align: center;
		margin: 15px;
	}
</style>
<body>
<br />
<h1>Régions desservies</h1>
<br />
<p>Nord, Pas-de-Calais, Somme, Seine Maritime,<br/>
Oise, Aisne, Ardennes, Marne, Eure<br/>
Belgique<br/>
Région Parisenne<br/>
(Hauts-de-Seine, Seine-Saint-Denis, Val de Marne, Paris)<br/>
</p>
<?php
include 'galleryDesserv.php';
?>
<p class="imgDesserv"><img src="img/dessrv.png"></p>
</body>
<?php
include 'footer.php';
?>