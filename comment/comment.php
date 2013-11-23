<!DOCTYPE html>
<html lang="is">

<head>
	<meta charset="utf-8">
		<script type="text/javascript" src="jquery-2.0.3.js"></script>
		
	<title>komment</title>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#comment_process").click(function(){
			if($("#comment_text").val() !==""){
				$.post("comments.php?action=post", {comment: $("#comment_text").val() }, function(data){
					$(".comments").html(data);
					$("#comment_text").val("");
				});
			}
		});
	});

</script>
<link rel="stylesheet" type="text/css" href="comment_style.css">
</head>

<body>

<h2> PHP MYSql Basic Comment System</h2><hr />
<div class="comment_container">
	<div class="comments">
		<?php
			include_once("comments.php");
		?>
	</div>
	<div class="comment_form">
		<table>
			<tr><td><textarea id="comment_text"></textarea></td>
				<td><input type="button" id="comment_process" value="Post Comment"/></td>
			</tr>
		</table>
	</div>
</div>



</body>

</html>