	<h1>Login Comment App</h1>
		<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<?php

			// Check if the $_SESSION loggedIn exists
			if (isset($_SESSION['loggedIn'])) {

				// Check if $_SESSION loggedIn is true or false
				if ($_SESSION['loggedIn']) {
					// If the user is logged in, show them the logout link
					echo '<li><a href="index.php?page=friend_list">Friends</a></li>';
					echo '<li><a href="index.php?page=logout">Logout</a></li>';
				} else {
					// If the user is not logged in, show them login and register links
					echo '<li><a href="index.php?page=login">Login</a></li>';
					echo '<li><a href="index.php?page=register">Register</a></li>';
				}

			} else {
					// If $_SESSION loggedIn does not exist, show default state.
					echo '<li><a href="index.php?page=login">Login</a></li>';
					echo '<li><a href="index.php?page=register">Register</a></li>';
			}

			?>
		</ul>
		</nav>
