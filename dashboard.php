<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != "Successfully") {
    header("Location: login.html");
    exit();
}

// Sertakan file tampilan (HTML)
include "dashboard_view.php";
?>
