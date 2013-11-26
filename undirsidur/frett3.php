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
	</section>
</section>

	<section id="altmynd">
		<div class="inpic">
		<p></p>
		</div>


	</section>


	
<div id="main">

	<section id="I">
		<article class="frett1">

			<p> ForritunarFréttir | 19.11.2013 | 11:52 </p>
			<h1>Hvað er hlutbundin forritun og til hvers er hún notuð?</h1>

			<img src="../myndir/frett3.jpg" alt="Frétt3" align="left"><div class="frett">Hlutbundin forritun (e. object-oriented programming) er fyrst og fremst heiti yfir ákveðnar forritunaraðferðir sem gjarnan er stillt upp á móti ferlislegri forritun (e. procedural programming). Forritunarmál eins og Smalltalk, Java og C++ styðja hlutbundna forritun, meðan önnur, svo sem C, Pascal og Basic, gera það ekki sérstaklega þó hægt sé að notast við hlutbundnar aðferðir í þeim. Þegar talað er um hlutbundin forritunarmál (e. object-oriented programming languages) er því átt við þau forritunarmál sem sérstaklega styðja þessar aðferðir.

Eitt megineinkenni hlutbundinnar forritunar er að þar er notast við svokallaða klasa (e. objects) til að skilgreina einingar forrita. Klasarnir eru eins konar sniðmát fyrir tilvik innan forritsins. Sem dæmi má taka að ef forritari vill skilgreina hvað fólksbíll er innan forrits, myndi hann búa til klasa sem tilgreinir almennar jafnt sem sértækar eigindir fólksbílsins, allt eftir því hversu nákvæmar upplýsingar forritið þarf á að halda. Hann myndi skilgreina að fólksbíll hefði hurðir, dekk, stýri, vél og svo framvegis. Hann gæfi ef til vill möguleika á að tilgreina lit, tegundarheiti, áklæðistegund og jafnvel tóntegund flautu bílsins. Forritarinn gæti einnig viljað skilgreina hegðun bílsins, til dæmis aksturshæfni hans, annars vegar við góðar aðstæður og hins vegar í hálku.

Eftir að klasinn er tilbúinn getur forritarinn auðveldlega búið til eins mörg mismunandi fólksbílatilvik og hann vill; óteljandi fjölda bíla með mismunandi fjölda hurða, mismunandi vél og allavega á litinn, bara með því að fylla inn í sniðmátið. Þegar forritarinn hefur skilgreint einn bíl á þennan hátt væri sagt að hann hafi búið til tilvik hlutar út frá sniðmáti.

Hlutirnir í hlutbundnum forritum eru einnig þannig uppbyggðir að þeir geta erft einingar úr öðrum hlutum, eða jafnvel innihaldið fleiri hluti. Þannig væri hægt að hugsa sér að fólksbíllinn okkar myndi erfa mismunandi tegundir dekkja úr öðrum klasa sem innihéldi skilgreiningar á dekkjum. Þar væri til dæmis skilgreind mismunandi breidd dekkjanna, mynstur, felgutegund og útlit hjólkoppa. Með því að skilgreina sniðmát fyrir hvern hluta bíls fyrir sig er hægt að byggja upp mjög nákvæma mynd af eigindum og hegðun bílsins. Þessa uppbyggingu væri síðan einnig hægt að nota í öðrum forritum, þar sem bíll er jú alltaf bíll, og óþarft er að forrita allt upp á nýtt í hvert skipti sem við kynnum að þurfa á bíl að halda.					

Hlutbundin forritun (e. object-oriented programming) er fyrst og fremst heiti yfir ákveðnar forritunaraðferðir sem gjarnan er stillt upp á móti ferlislegri forritun (e. procedural programming). Forritunarmál eins og Smalltalk, Java og C++ styðja hlutbundna forritun, meðan önnur, svo sem C, Pascal og Basic, gera það ekki sérstaklega þó hægt sé að notast við hlutbundnar aðferðir í þeim. Þegar talað er um hlutbundin forritunarmál (e. object-oriented programming languages) er því átt við þau forritunarmál sem sérstaklega styðja þessar aðferðir.

</br></br>

Eitt megineinkenni hlutbundinnar forritunar er að þar er notast við svokallaða klasa (e. objects) til að skilgreina einingar forrita. Klasarnir eru eins konar sniðmát fyrir tilvik innan forritsins. Sem dæmi má taka að ef forritari vill skilgreina hvað fólksbíll er innan forrits, myndi hann búa til klasa sem tilgreinir almennar jafnt sem sértækar eigindir fólksbílsins, allt eftir því hversu nákvæmar upplýsingar forritið þarf á að halda. Hann myndi skilgreina að fólksbíll hefði hurðir, dekk, stýri, vél og svo framvegis. Hann gæfi ef til vill möguleika á að tilgreina lit, tegundarheiti, áklæðistegund og jafnvel tóntegund flautu bílsins. Forritarinn gæti einnig viljað skilgreina hegðun bílsins, til dæmis aksturshæfni hans, annars vegar við góðar aðstæður og hins vegar í hálku.

Eftir að klasinn er tilbúinn getur forritarinn auðveldlega búið til eins mörg mismunandi fólksbílatilvik og hann vill; óteljandi fjölda bíla með mismunandi fjölda hurða, mismunandi vél og allavega á litinn, bara með því að fylla inn í sniðmátið. Þegar forritarinn hefur skilgreint einn bíl á þennan hátt væri sagt að hann hafi búið til tilvik hlutar út frá sniðmáti.

Hlutirnir í hlutbundnum forritum eru einnig þannig uppbyggðir að þeir geta erft einingar úr öðrum hlutum, eða jafnvel innihaldið fleiri hluti. Þannig væri hægt að hugsa sér að fólksbíllinn okkar myndi erfa mismunandi tegundir dekkja úr öðrum klasa sem innihéldi skilgreiningar á dekkjum. Þar væri til dæmis skilgreind mismunandi breidd dekkjanna, mynstur, felgutegund og útlit hjólkoppa. Með því að skilgreina sniðmát fyrir hvern hluta bíls fyrir sig er hægt að byggja upp mjög nákvæma mynd af eigindum og hegðun bílsins. Þessa uppbyggingu væri síðan einnig hægt að nota í öðrum forritum, þar sem bíll er jú alltaf bíll, og óþarft er að forrita allt upp á nýtt í hvert skipti sem við kynnum að þurfa á bíl að halda.
</div>
		
			
		</article>
	</div>

<h2>Komments</h2>

    <div id="Comments"></div>

    <h2>Skildu eftir komment</h2>

    <div id="CommentForm"></div>
		

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