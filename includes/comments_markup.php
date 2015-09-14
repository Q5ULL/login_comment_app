<form action="index.php?page=submit_comment" method="POST">

	<h1>Enter your comment:</h1>
	<textarea id="comment" name="comment"></textarea>
	<!-- create a php call that pulls the id, either yours or someone elses -->
	<?php $to_user_id = $_GET["id"]?$_GET["id"]:$_SESSION["id"]  ?>
	<!-- echo that id to the variable to_user_id, so you can use it in your comments pages -->
	<input type="hidden" name="to_user_id" value="<?php echo $to_user_id; ?>">

	<p>You are logged in as <?php echo $_SESSION['email']; ?></p>
	<button>Post Comment</button>

</form>
