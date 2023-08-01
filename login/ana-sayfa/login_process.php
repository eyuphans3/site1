<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // MySQL bağlantı bilgilerini girin
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "admin";

    // Veritabanı bağlantısı oluşturun
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    // Bağlantı hatasını kontrol edin
    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }

    // Kullanıcıyı veritabanında arayın
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Kullanıcı bulundu, oturumu başlatın ve ana sayfaya yönlendirin
        $_SESSION["username"] = $username;
        header("Location: adminpage.php");
    } else {
        // Kullanıcı bulunamadı, hatalı giriş sayfasına yönlendirin
        header("Location: admin.php");
    }

    $conn->close();
}
?>
