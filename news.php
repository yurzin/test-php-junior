<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>news</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>В Волгограде начался сезон рисования дорожной разметки</h1>
        <h2>Основные работы обещают вести по ночам</h2>
        <?php
        $news = file_get_contents("news.txt", "r");
        echo "<text> $news </text>";
        ?>
        <a href="index.php">На главную</a>
    </div>
</div>
</body>
</html>