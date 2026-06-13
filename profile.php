<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smirnova Anastasia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark p-3">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <img src="logohack.webp" alt="логотип сайта" class="me-2">
            <span class="text-light">FlyVerse</span>
        </a>

        <div>
            <a href="posts.php" class="btn btn-primary">Posts</a>
            <a href="index.php" class="btn btn-outline-danger">Exit</a>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <div class="story-container">
        <div class="story-text">
            <h1>Smirnova Anastasia</h1>
            <p>
            Welcome to FlyVerse — a small website about a simple but funny idea:
            a fly is also a helicopter.
            </p>
        </div>

        <img src="hack1.webp" alt="основное фото" class="hacker-img">
    </div>

    <div class="text-center mt-4">
        <button id="toggleButton" class="btn btn-primary">Open</button>
    </div>

    <div id="extraImage" class="mt-3 text-center" style="display: none;">
        <img class="hacker-img" src="hack2.webp" alt="скрытое фото">
    </div>

    <div class="mt-5">
        <h2 class="text-center mb-4">Add New Post</h2>

        <form action="posts.php" id="postForm" class="d-flex flex-column gap-3" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label" for="postTitle">Post Title</label>
                <input type="text" name="postTitle" class="form-control hacker-input" id="postTitle" placeholder="Enter post title" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="postContent">Post Content</label>
                <textarea name="postContent" class="form-control hacker-input" id="postContent" placeholder="Enter post content" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="file">Show Fly</label>
                <input type="file" name="file" class="form-control hacker-input" id="file">
            </div>

            <button class="btn btn-primary" type="submit" name="submit">Save Post</button>
        </form>
    </div>

</div>

<script src="js/script.js"></script>
</body>
</html>