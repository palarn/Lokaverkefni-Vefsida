<!--gerðu afrit af þessari síðu og breyttu þeirri síðu svo.-->	

<!DOCTYPE html>
<html lang="is">

<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="../helper/mobile.css">
		<link rel="stylesheet" href="../helper/mobile_small.css">
		<link rel="stylesheet" href="../helper/mobile_big.css">

		<script type="text/javascript" src="../helper/jquery-2.0.3.js"></script>
		<script type="text/javascript" src="../helper/senda.js"></script>
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

<!--Settu inn frétt í main-->
<div id="main">

	<h1>Hafa Samband</h1>

	<p>Hér getur þú haft samband við okkur, hvort sem þú hefur ábendingu um frétt eða annað sem þú vilt koma á framfæri</p>
	
	<div class="error" id="error1">
		<ul>
			<p id="e"></p>
			<p id="e1"></p>
		</ul>	
	</div>

	<form action="" id="samband">
		<p>Tölvupóstfang <input type="text" id="net" placeholder="" ></p>
		<p>Símanúmer <input type="text" id="numer" placeholder="" ></p>
		<p>Skrá <input type="file" name="skra" id="nr_skra" class="upload" ></p>
		<p>Settu inn texta.<br><textarea rows="4" cols="50"></textarea></p>
		<button type="button" form="samband" onClick="validateForm();">Senda</button>

	</form>

</div>

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

</body>

</html>	