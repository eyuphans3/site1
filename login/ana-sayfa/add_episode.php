<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Episode</title>
</head>
<body>
    <form action="add_episode.php" method="post">
        <input type="hidden" name="anime_id" value="<?php echo $_GET['id']; ?>">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <input type="text" name="video" placeholder="Video">
        <input type="submit" value="Add Episode">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $anime_id = $_POST['anime_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $video = $_POST['video'];

        $conn = mysqli_connect('localhost', 'root', '', 'anime');

        $query = "INSERT INTO episodes (anime_id, title, description, video) VALUES ($anime_id, '$title', '$description', '$video');";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Bölüm başarıyla eklendi.";
        } else {
            echo "Bölüm eklenemedi. Hata: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
</body>
</html>
