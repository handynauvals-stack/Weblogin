<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == "Successfully") {
    header("Location: dashboard.php");
    exit();
}


$email_benar = "admin";
$pass_benar = "123";
$pesan="";
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
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Login</title>

    <link rel="stylesheet" href="ui_login.css"/>

</head>
<body>
    <div class="Frame">
        <section>
            <center>
                <h1 class="Titleteks">Porto Mewah</h1>
                <h1 class="Subtitleteks">Login:</h1>
                <form method="post">
                    <table border="1" class="loginbox">
                        <tr>
                            <td colspan="1" >Email:</td>
                            <td colspan="2" id="inputbox">
                                <input type="text" name="email" id="email"placeholder="email or username">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" >Password:</td>
                            <td colspan="2" id="inputbox">
                                <input type="password" name="password" id="password" placeholder="password">
                            </td>
                        </tr>
                        <tr colspan="2">
                            <td colspan="1"></td>
                            <td>
                                <button type="submit" class="SignIn" >Log In</button>
                            </td>
                        </tr>
                    </table>
                    <div class="Logo">
                        <table>
                            <tr class="continuewith">Or continue with</tr>
                            <tr>
                                <td class="logoicon" id="logo1" colspan="1"></td>
                                <td class="logoicon" id="logo2" colspan="1"></td>
                                <td class="logoicon" id="logo3" colspan="1"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="message">
                        <?php
                            echo $pesan;
                        ?>
                    </div>
                </form>
            </center>
        </section>
        
        
        <script>
            
            
        </script>

    </div>
</body>
</html>