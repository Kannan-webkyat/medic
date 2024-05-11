<?php
session_start();
if (isset($_SESSION['user_id'])) {
          // Destroy the session to log out the user
          session_destroy();
          // Redirect to the login page or home page
          header("Location: /login.php");
          exit();
} else {
          // If no session exists, redirect to the login page directly
          header("Location: /login.php");
          exit();
}
