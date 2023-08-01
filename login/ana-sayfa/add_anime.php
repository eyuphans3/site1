<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Anime</title>
</head>
<body>
    <form action="add_anime.php" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <input type="text" name="image" placeholder="Image">
        <input type="text" name="episodes" placeholder="Episodes">
        <input type="submit" value="Add Anime">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $episodes = $_POST['episodes'];

        $conn = mysqli_connect('localhost', 'root', '', 'anime');

        $query = "INSERT INTO animes (title, description, image, episodes) VALUES ('$title', '$description', '$image', '$episodes');";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Anime başarıyla eklendi.";
        } else {
            echo "Anime eklenemedi. Hata: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
</body>
</html>
