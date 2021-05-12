<?php
session_start();
unset($_SESSION["statut"]);
session_destroy();
header('location: login.php');
exit;
?>