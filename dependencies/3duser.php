<?php
$version = 2.8; // to 4.3
		echo'
		<style>
		*{
		transition:.5s;
		-webkit-transition:.5s;
		font-family: "Ubu", sans-serif;
		text-shadow:1px 1px 5px black;
		}
		@font-face {
		font-family: "Ubu";
		font-style: normal;
		font-weight: 300;
		src: url(\'dependencies/ubu.woff\') format("woff");
}
		#skinpreview {
		margin-top:-86px;
		color:white;
		}
		</style>
		<center><h1 style="color:white;">'.$_GET['player'].'</h1><div id="skinpreview"></div></center>
		<script src="dependencies/three.js"></script>
		<script>
		var defaultImages = [
		"dependencies/gs.php?player='.$_GET['player'].'"
		];
		</script>
		<script src="dependencies/main.js"></script>
		';
?>