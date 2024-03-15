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
        <div class="song">
            <?php 
                require_once "includes/form-get.php"; 
                $item = $results[0];
            ?>
            <h1 class="h1 song__title"><?php echo $item["title"]; ?></h1>
            <p class="song__artist"><em><?php echo $item["artist"]; ?></em></p>
            <p class="song__date-created">
                <?php 
                    $date = date_create($item["date_created"]);
                    echo date_format($date,"M d, Y"); 
                ?>
            </p>
            <p class="song__lyrics"><?php echo $item["song_lyrics"]; ?></p>
        </div>
    </main>
</body>
</html>