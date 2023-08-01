<?php
session_start();

// Kullanıcının oturum açık mı kontrol edelim
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    // Eğer oturum açık değilse, kullanıcıyı giriş yapmaya yönlendirelim
    header("Location: admin.php");
    exit();
}
?>
<!-- admin.php dosyası -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Paneli</title>
</head>
<body>
    <h1>Admin Paneli - Anasayfa Başlığı Değiştirme</h1>
    <form action="update_title.php" method="post">
        <label for="new_title">Yeni Başlık:</label>
        <input type="text" id="new_title" name="new_title" required>
        <button type="submit">Başlığı Güncelle</button>
    </form>
    <a href="add_anime.php">Anime Ekle</a>
    <a href="add_episode.php">Bölüm Ekle</a>
</body>
</html>
