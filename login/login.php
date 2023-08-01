<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="block">.</div>
    <h2 class="girisy">Giriş Yap</h2>
    <form class="logiin" action="login_process.php" method="post">
        <label class="kadi" for="username">Kullanıcı Adı:</label>
        <input class="kinp" type="text" name="username" required><br>
        <label class="sadi" for="password">Şifre:</label>
        <input class="sinp" type="password" name="password" required><br>
        <input class="giris" type="submit" value="Giriş Yap">
    </form>

    <p class="hk">Hesabınız yok mu?</p>
    <a class="hk1" href="register.php">Kayıt Ol</a>
</body>
</html>
