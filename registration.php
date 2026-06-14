<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-12 text-center">

            <h1 class="mb-4">Create Account</h1>

            <form action="registration.php" method="POST" class="d-flex flex-column gap-3">
                <input type="text" name="login" class="form-control-purple" placeholder="Username">
                <input type="email" name="email" class="form-control-purple" placeholder="Email">
                <input type="password" name="password" class="form-control-purple" placeholder="Password">

                <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>

                <p class="mt-3">
                    Already have an account?
                    <a href="login.php">Login</a>
                </p>
            </form>

        </div>
    </div>
</div>

</body>
</html>
<?php

require_once('db.php');

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
    exit();
}

$link = mysqli_connect("127.0.0.1", "root", "kali", "first");

if (!$link) {
    die("Ошибка подключения к базе данных");
}

if (isset($_POST['submit'])) {

    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (!$login || !$email || !$pass) {
        die("Введите все данные");
    }

    $sql = "INSERT INTO users(username, email, pass) 
            VALUES('$login', '$email', '$pass')";

    if (!mysqli_query($link, $sql)) {
        echo "Ошибка добавления пользователя";
    } else {
        header("Location: login.php");
        exit();
    }
}

?>