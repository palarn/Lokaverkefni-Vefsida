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

<?php
include 'header.php';
?>
	
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
include 'footer.php';
?>

    <script src="dropdown.js"></script>  

</body>

</html>	