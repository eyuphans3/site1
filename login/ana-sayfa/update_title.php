<!-- update_title.php dosyası -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost"; // MySQL sunucu adresi
    $username = "root"; // Veritabanı kullanıcı adı
    $password = ""; // Veritabanı şifresi
    $dbname = "pages"; // Varolan veritabanı adı

    // MySQL sunucusuna bağlanmak
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol etmek
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    // Yeni başlık verisini almak
    $newTitle = $_POST["new_title"];

    // Güncelleme sorgusu
    $sql = "UPDATE pages SET title = '$newTitle' WHERE page_name = 'ana-sayfa.php'";

    if ($conn->query($sql) === TRUE) {
        echo "Başlık başarıyla güncellendi.";
    } else {
        echo "Güncelleme hatası: " . $conn->error;
    }

    $conn->close();
}
?>
