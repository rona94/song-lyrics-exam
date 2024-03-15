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
        <div class="song-lists">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Date Created</th>
                        <th width="150"></th>
                    </tr>
                </thead>
                <tbody>
                    <div class="landing-wrap">
                        <h1 class="h1">Song Lyrics</h1>
                    </div>

                    <?php 
                        require_once "includes/form-get-all.php"; 

                        if(count($results) > 0) :
                            foreach ($results as $item) :

                            $date = date_create($item["date_created"]);
                    ?>
                        <tr>
                            <td><?php echo $item["title"]; ?></td>
                            <td><?php echo $item["artist"]; ?></td>
                            <td><?php echo date_format($date,"M d, Y"); ?></td>
                            <td>
                                <a href="<?php echo 'lyrics.php?id='.$item['id']; ?>" class="btn btn-view">View</a>
                                <a href="<?php echo 'edit.php?id='.$item['id']; ?>" class="btn btn-edit">Edit</a>
                                
                                <form class="inline-block" action="/includes/form-delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $item["id"];?>">
                                    <input type="submit" class="btn btn-delete" value="Delete" />
                                </form>
                            </td>
                        </tr>
                    <?php
                            endforeach;
                        else :
                    ?>
                        <tr>
                            <td colspan="4" class="text-center">No Results</td>
                        </tr>
                    <?php
                        endif;
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>