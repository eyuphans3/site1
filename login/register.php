<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <h2 class="girisy">Kayıt Ol</h2>
    <div class="block">.</div>
    <form action="register_process.php" method="post">
        <label class="kadi" for="username">Kullanıcı Adı:</label>
        <input class="kinp" type="text" name="username" required><br>
        <label class="sadi" for="password">Şifre:</label>
        <input class="sinp" type="password" name="password" required><br>
        <input class="giris" type="submit" value="Kayıt Ol">
    </form>

    <p class="hk">Zaten bir hesabınız var mı? Giriş yapmak için:</p>
    <a class="hk1" href="login.php">Giriş Yap</a>
</body>
</html>
