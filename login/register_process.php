<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // MySQL bağlantı bilgilerini girin
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "hesaplar";

    // Veritabanı bağlantısı oluşturun
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    // Bağlantı hatasını kontrol edin
    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }

    // Kullanıcıyı veritabanına ekleyin
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Kayıt sırasında bir hata oluştu: " . $conn->error;
    }
 
    $conn->close();
}
?>
