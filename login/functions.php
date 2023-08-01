<!-- functions.php dosyası -->
<?php
function getPageTitle() {
    $servername = "localhost"; // MySQL sunucu adresi
    $username = "root"; // Veritabanı kullanıcı adı
    $password = ""; // Veritabanı şifresi
    $dbname = "pages"; // Veritabanı adı

    // MySQL sunucusuna bağlanmak
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol etmek
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    // Şu anki sayfanın adını almak (Örneğin, "admin-panel.php" gibi)
    $currentPage = basename($_SERVER['PHP_SELF']);

    // Sayfa başlığını veritabanından çekmek
    $sql = "SELECT title FROM pages WHERE page_name = '$currentPage'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["title"];
    } else {
        return "Site Başlığı"; // Başlık bulunamazsa varsayılan başlık
    }

    $conn->close();
}
?>
