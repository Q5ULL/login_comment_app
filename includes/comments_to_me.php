<h1>Comments for You: <?php echo $_SESSION['id']; ?></h1>

<?php 
// call your comment_list group so you can use it in both your home and on other people's page
	include("comment_list.php"); 
	showCommentList($_SESSION["id"]);
?>
	



<style>
#comments {
	border-radius: 5px;
	background-color: gold;
	padding: 10px;
}


.username {
	font-size: 50px;
}

.comment {
	font-size: 20px;
	font-style: italic;
}
</style>
