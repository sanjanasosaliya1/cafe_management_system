<?php
session_start();
echo "Logging you out. Please wait";
unset($_SESSION["loggedin"]);
unset($_SESSION["username"]);
unset($_SESSION["userId"]);

header("Location: /cafe_management_system/logout_confirmation.php");
?>