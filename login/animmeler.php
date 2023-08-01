<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animes</title>
</head>
<body>
    <ul>
        <?php
        $query = "SELECT * FROM animes";
        $results = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($results)) {
            echo "<li>
                <a href='anime.php?id=" . $row['id'] . "'>" . $row['title'] . "</a>
                <ul>
                    <?php
                        $anime_id = intval($row['id']);
                        $query = "SELECT * FROM episodes WHERE anime_id=$anime_id";
                        $results = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($results)) {
                            echo "<li>" . $row['title'] . "</li>";
                        }
                    ?>
                </ul>
            </li>";
        }
        ?>
    </ul>
</body>
</html>
