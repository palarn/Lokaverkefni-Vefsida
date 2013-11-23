<?php
include_once("connect.php");
echo "connected.";

function getComments(){
		$comments = "";
		$sql = mysql_query("SELECT * FROM comments") or die(mysql_error() );
		if(mysql_num_rows($sql) === 0){
			$comments = "<div class='each_comment'>There are no comments at this time</div>";
		}
		else{
			while($row = mysql_fetch_assoc($sql)){
				$comments .= "<div class='each_comment'><small><em>".$row['comment_date']."</em></small><br />".$row['comment']."</div>";
			}
		}
		return $comments;
	}
	function postComments($comment){
		$comment = mysql_real_escape_string(strip_tags($comment));
		$sql = mysql_query("INSERT INTO comments (comment, comment_date) VALUES('".$comment."', now())");
		return true;
	}

	if((isset($_GET['action'])) && ($_GET['action'] == "post")){
		postComments($_POST['comment']);
	}

	echo getComments();
?>