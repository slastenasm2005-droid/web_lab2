<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FlyVerse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-12 text-center">

            <h1 class="mb-4">Welcome to FlyVerse</h1>

            <p class="mb-4">
                A fly is also a helicopter.
            </p>

            <?php

            if (!isset($_COOKIE['User'])) {

            ?>

                <div class="d-flex justify-content-center gap-3">
                    <a href="registration.php" class="btn btn-primary">
                        Register
                    </a>

                    <a href="login.php" class="btn btn-primary">
                        Login
                    </a>
                </div>

            <?php

            } else {

                $link = mysqli_connect(
                    "127.0.0.1",
                    "root",
                    "kali",
                    "first"
                );

                if (!$link) {
                    die("Ошибка подключения к БД");
                }

                $sql = "SELECT * FROM posts ORDER BY id DESC";

                $res = mysqli_query($link, $sql);

                echo "<h2 class='mb-4'>Posts</h2>";

                if (mysqli_num_rows($res) > 0) {

                    while ($post = mysqli_fetch_assoc($res)) {

                        echo "
                        <div class='mb-3'>
                            <a
                                href='posts.php?id={$post['id']}'
                                class='btn btn-primary'
                            >
                                {$post['title']}
                            </a>
                        </div>
                        ";
                    }

                } else {

                    echo "<p>No posts yet</p>";

                }

                echo "
                <div class='mt-3'>
                    <a href='profile.php' class='btn btn-primary'>
                        Profile
                    </a>

                    <a href='logout.php' class='btn btn-outline-danger'>
                        Exit
                    </a>
                </div>
                ";

                mysqli_close($link);

            }

            ?>

        </div>
    </div>
</div>

</body>
</html>