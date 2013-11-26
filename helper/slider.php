<?php

		$site_info = array(
				array("Title not found","#","myndir/68.jpg"),
				array("Hugbúnaðarráðstefnan 2013","undirsidur/frett1.php","myndir/frett1.jpg"),
				array("Er erfitt að læra forritun?","undirsidur/frett2.php","myndir/frett2.png"),
				array("Stóra pöndumálið","undirsidur/panda.php","myndir/panda.png"),
				array("Hefur þú prófað leikina okkar?","leikur/leikir.php","myndir/leikur3.png"),

			);

		$slider_default_title = $site_info[0][0];
		$slider_default_link = $site_info[0][1];
		$slider_default_image = $site_info[0][2];

		?>

		<div class="slider-large-image">
			<?php

			for($i = 1; $i <= 4; $i++){
				$slide_title = $site_info[$i][0];
				$slide_link = $site_info[$i][1];
				$slide_image = $site_info[$i][2];

				echo "
				<div style='display: none;' class='large-image' id='slider-image-".$i."'>

				<a href='undirsidur/frett1.php'><img src='".$slide_image."' alt='".$slide_title."' width='520px' height='290px'></a>
				</div>";

				echo"
				<div style='display: none;' class='info-area' id='slider-info-".$i."'>
					<a href='".$slide_link."'>".$slide_title."</a>
				</div>";
			}
			?>
			

		</div>

		<div class='slider-sidebar'>
			
			<?php

			for($i = 1; $i <= 4; $i++){
				$slide_title = $site_info[$i][0];
				$slide_link = $site_info[$i][1];
				$slide_image = $site_info[$i][2];

				echo "<img onClick=\"slider_select(".$i.");\" class='image".$i."' src='".$slide_image."' alt='".$slide_title."' width='110px' height='65px'>";
			
			}
			?>
			</div>
			<script type="text/javascript"> slider_select_next(); </script>