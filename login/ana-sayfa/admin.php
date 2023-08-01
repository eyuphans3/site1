<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="block">.</div>
    <h2 class="girisy">Admin Login</h2>
    <form class="logiin" action="login_process.php" method="post">
        <label class="kadi" for="adminu">Kullanıcı Adı:</label>
        <input class="kinp" type="text" name="username" required><br>
        <label class="sadi" for="password">Şifre:</label>
        <input class="sinp" type="password" name="password" required><br>
        <input class="giris" type="submit" value="Giriş Yap">
    </form>
</body>
</html>
