<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <?php
        $link = "http://test-php-junior/news.php";
        $a = file_get_contents("news.txt", "r");
        $pattern = '~[\S]+[\s]{1}[\S]+$~u';
        $b = preg_replace($pattern, "<a href=$link>$0</a>", substr($a, 0, strpos($a, ' ', 250)));
        echo "<h3> $b... </h3>";
        $img_small = @imagecreatefrompng("img_small/image-small.png");
        if (!$img_small) {
            echo "<img src=https://via.placeholder.com/200x100 class='img-thumbnail'>";
        } else {
            echo "<img src=img_small/image-small.png class='img-thumbnail'>";
        }
        ?>
        <script type="text/javascript">
            fetch('loading.php', {
                method: 'get',
            }).then(function (response) {
                if (response.status >= 200 && response.status < 300) {
                    let img = document.querySelector(".img-thumbnail");
                    img.src = "img_small/image-small.png";
                }
            })
        </script>
    </div>
</div>
</body>
</html>