<?php
	session_start();
	session_destroy();
	header("Location: panel_u.php");
?>