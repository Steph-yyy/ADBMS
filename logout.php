<?php
session_start(); // Start the session
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session

// Redirect the user to the login page
header('Location: index.php');
exit();
?>
