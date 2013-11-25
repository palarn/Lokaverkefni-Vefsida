<!--gerðu afrit af þessari síðu og breyttu þeirri síðu svo.-->	

<!DOCTYPE html>
<html lang="is">

<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="../helper/mobile.css">
		<link rel="stylesheet" href="../helper/mobile_small.css">
		<link rel="stylesheet" href="../helper/mobile_big.css">
		<link rel="stylesheet" href="../helper/slider_style.css">

		<script type="text/javascript" src="../helper/jquery-2.0.3.js"></script>
		<script type="text/javascript" src="../helper/slider.js"></script>
		<script type="text/javascript" src="../helper/senda.js"></script>
	<!-- Settu inn titil hér-->
	<title>Forritunar-Fréttir</title>
</head>


<body>

<section id="top">
	
	<section class="logomynd">
	<img src="../myndir/logo.png" class="logo" alt="Lógó síðunar">
	</section>
	
	<section class="logotext">
	<nav>
		<a class="lk" href="https://en.wikipedia.org/wiki/Guns_N%27_Roses">HOME</a>
		<a class="lk" href="https://en.wikipedia.org/wiki/Guns_N%27_Roses">STORE</a>
		<a class="lk" href="https://en.wikipedia.org/wiki/Guns_N%27_Roses">WHY</a>
		<a class="lk" href="https://en.wikipedia.org/wiki/Guns_N%27_Roses">HISTORY</a>
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
		</ul>	
	</div>

	<form action="" id="samband">
		<p>Tölvupóstfang <input type="text" id="net" placeholder="" ></p>
		<p>Símanúmer <input type="number" id="numer" placeholder="" ></p>
		<p>Skrá <input type="file" name="skra" id="nr_skra" class="upload" ></p>
		<p>Settu inn texta.<br><textarea rows="4" cols="50"></textarea></p>
		<button type="button" form="samband" onClick="validateForm();">Senda</button>

	</form>

</div>

<section class="bottom">
	<section id="b1">
	<aside class="b2">
		<h2>Donec Laoreet</h2>
		<ul>
			<li><a class="bt" href="http://www.hi.is">Phasellus ac vehicula nulla</a>
			<li><a class="bt" href="http://www.hi.is">Suspendisse eu odio arcu</a>		
			<li><a class="bt" href="http://www.hi.is">Pellentesque eu lorem in risus pretium</a>		
			<li><a class="bt" href="http://www.hi.is">Sed est erat, pharetra quis</a>			
		</ul>
	</aside>
	
	<aside class="b3">
	<h2>Curabitur</h2>
		<ul>
			<li><a class="bt" href="http://www.hi.is">Proin sed velit dignissim</a>
			<li><a class="bt" href="http://www.hi.is">Duis dignissim lacinia augue</a>		
			<li><a class="bt" href="http://www.hi.is">Maecenas fringilla nisi at tortor ullamcorper</a>		
			<li><a class="bt" href="http://www.hi.is">Lorem ipsum dolor sit amet</a>		
		</ul>	
	</aside>
	</section>


	<footer>© Lorem Ipsum & Associates 1500 - 2013</footer>
</section>

</body>

</html>	