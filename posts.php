<?php

$link = mysqli_connect("127.0.0.1", "root", "kali", "first");

if (!$link) {
    die("Ошибка подключения к базе данных");
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";
$res = mysqli_query($link, $sql);

if (!$res || mysqli_num_rows($res) == 0) {
    die("Пост не найден");
}

$post = mysqli_fetch_array($res);

$title = $post['title'];
$main_text = $post['main_text'];
$image = $post['image'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FlyVerse Posts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-dark p-3">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">FlyVerse</a>

        <div>
            <a href="profile.php" class="btn btn-primary">Profile</a>
            <a href="index.php" class="btn btn-outline-light">Exit</a>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <div class="post-card text-center">
        <h1><?php echo $title; ?></h1>

        <p><?php echo $main_text; ?></p>

        <?php
        if (!empty($image)) {
            echo "<img src='$image' class='hacker-img mt-3' alt='post image'>";
        }
        ?>
    </div>

</div>

</body>
</html>