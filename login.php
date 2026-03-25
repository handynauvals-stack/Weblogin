<?php
session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == "Successfully") {
    header("Location: dashboard_view.php");
    exit();
}

$email_benar = "admin";
$pass_benar = "123";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == $email_benar && $password == $pass_benar) {
        $_SESSION["login"] = "Successfully";
        $_SESSION["email"] = $email;

        header("Location: dashboard.php");
        exit();
    } else {
        $pesan = "Username atau password salah.";
    }
}

include "index.html";
?>
