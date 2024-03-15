<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Rubik:wght@300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/styles.css" />
</head>
<body>
<nav class="navbar">
        <div class="navbar__header">
            <p class="header-text">Song Lyrics Exam</p>
        </div>
        <div class="navbar__list">
            <ul>
                <li><a href="./add.php">Add Song</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="back-wrap">
            <a href="./index.php" class="btn btn-back">&larr; back</a>
        </div>
        <div class="song-add">
            <h1 class="h1">Add Song</h1>
            <form class="form" action="/includes/form-add.php" method="POST">
                <div class="form__control">
                    <label for="title" class="form__label">Title</label>
                    <input id="title" type="text" name="title" class="form__input"/>
                </div>

                <div class="form__control">
                    <label for="artist" class="form__label">Artist</label>
                    <input id="artist" type="text" name="artist" class="form__input"/>
                </div>

                <div class="form__control">
                    <label for="song_lyrics" class="form__label">Lyrics</label>
                    <textarea id="song_lyrics" name="song_lyrics" class="form__input"></textarea>
                </div>

                <div class="text-right">
                    <input type="submit" value="Save" class="form__submit btn btn-edit"/>
                </div>
            </form>
        </div>
    </main>
</body>
</html>