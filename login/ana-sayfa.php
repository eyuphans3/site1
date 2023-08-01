<?php
session_start();

// Kullanıcının oturum açık mı kontrol edelim
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    // Eğer oturum açık değilse, kullanıcıyı giriş yapmaya yönlendirelim
    header("Location: login.php");
    exit();
}

include ("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo getPageTitle(); ?></title>
    <link rel="stylesheet" href="style.css">
<style>    
    .kullanıcı {
        position: absolute;
        color: black;
        z-index: 10;
        font-size: 18px;
        top: 10px;
        left: 1150px;
        font-family: 'Roboto', sans-serif;
        cursor: pointer;
    }
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
<body>
    <div class="navbar">
        <p class="kullanıcı">Merhaba, <?php echo $username; ?>!</p>
        <h1>.</h1>
        <h1 class="menu">MENU</h1>
    </div>
    <a href=""><img class="logo" src="logo.png" alt=""></a>
    <script src="script.js"></script>
</body>
</html>
