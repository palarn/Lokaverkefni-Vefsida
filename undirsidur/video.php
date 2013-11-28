<!DOCTYPE html>
<html lang="is">

<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="../helper/mobile.css">
		<link rel="stylesheet" href="../helper/mobile_small.css">
		<link rel="stylesheet" href="../helper/mobile_big.css">
		<link rel="stylesheet" type="text/css" href="EasyPageComments.css"/>

		<script type="text/javascript" src="../helper/jquery-2.0.3.js"></script>
		<script type="text/javascript" src="EasyPageComments.js"></script>
   		<script type="text/javascript" src="pushComments.js"></script>
	<title>Forritunar-Fréttir</title>
</head>


<body>

<section id="top">
	
	<section class="logomynd">
	<img src="../myndir/logo.png" class="logo" alt="Lógó síðunar">
	</section>
	
	<section class="logotext">
	<nav>
		<a class="lk" href="../index.php">HEIM</a>
		<a class="lk" href="video.php">KENNSLUMYNDBÖND</a>
		<a class="lk" href="hafdu_samband.php">HAFÐU SAMBAND</a>
		<a class="lk" href="../leikur/leikir.php">LEIKUR</a>
	</nav>
	</section>
</section>

	<section id="altmynd">
		<div class="inpic">
		<p></p>
		</div>

	</section>


	
<div id="main">
		<article class="frett">
			
		

        <h1>Kennslumyndbönd!</h1>

		<div id="text">
			 <a href="" onclick="return false"><h3>Ýmislegt</h3></a>
    	</div>
   		<div id="moreText" style="display:none"></div>
   		
   		<div id="java">
   			<a href="" onclick="return false"><h3>Java</h3></a>
   		</div>
   		<div id="moreJava" style="display:none"></div>

   		<div id="php">
   			<a href="" onclick="return false"><h3>PHP</h3></a>
   		</div>
   		<div id="morePhp" style="display:none"></div>



		</article>
	</div>

<?php
include 'komment_kerfi.php';
?>

		

<section class="bottom">
	<section id="b1">
	<aside class="b2">
		<h2>Forritunar Fréttir</h2>
		<ul>
			<li><a class="bt" href="../index.php">Heim</a>
			<li><a class="bt" href="video.php">Kennslumyndbönd</a>		
			<li><a class="bt" href="hafdu_samband.php">Hafðu Samband</a>		
			<li><a class="bt" href="../leikur/leikir.php">Leikur</a>				
		</ul>
	</aside>
	
	<aside class="b3">
	<h2>Contact info:</h2>
		<ul>
			<li>ForritunarFréttir
			<li>Laugavegi 38 - 101 Reykjavík		
			<li>510 1212		
			<li>forritunarfrettir@snilld.is		
		</ul>	
	</aside>
	</section>


	<footer>© Páll, Helga Lóa & Garðar 1977 - 2013</footer>
</section>

    <script src="dropdown.js"></script>  

</body>

</html>	