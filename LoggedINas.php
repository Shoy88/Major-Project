<?php
require "config.php";
session_start();
?>
					<a><center>
					Logged in as <?php echo $_SESSION["userName"]; ?> </center>
					</a>
			