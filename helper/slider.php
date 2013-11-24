<?php

		$site_info = array(
				array("Title not found","#","myndir/68.jpg"),
				array("Kisa 1","#","myndir/290.jpg"),
				array("Kisa 2","#","myndir/289.jpg"),
				array("Kisa 3","#","myndir/288.jpg"),
				array("Kisa 4","#","myndir/291.jpg"),

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

				<a href='undirsidur/panda.php'><img src='".$slide_image."' alt='".$slide_title."' width='520px' height='290px'></a>
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