<form action="index.php?page=submit_comment" method="POST">

<h1>Enter your comment:</h1>
<textarea id="comment" name="comment"></textarea>

<p>You are logged in as <?php echo $_SESSION['email']; ?></p>
<button>Post Comment</button>

</form>
