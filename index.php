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
        // ссылка на полную новость
        $link = "http://test-php-junior/news.php";

        // считываем текст новости в переменную из файла
        $a = file_get_contents("news.txt", "r");

        // регулярное выражение двух последних слов
        $pattern = '~[\S]+[\s]{1}[\S]+$~u';

        // обрезаем новость до 180 символов по ближайшему пробелу, и применяем регулярное выражение
        $b = preg_replace($pattern, "<a href=$link>$0...</a>", substr($a, 0, strpos($a, ' ', 180)));

        // выводим обрезанную новость
        echo "<h3> $b </h3>";

        // создаём новое изображение из файла используя библеотеку GD
        $img_small = @imagecreatefrompng("img_small/image-small.png");

        // если файл изображения отсутствует выводим изображение по умолчанию
        if (!$img_small) {
            echo "<img src=https://via.placeholder.com/200x100 class='img-thumbnail'>";
        } else {
            echo "<img src=img_small/image-small.png class='img-thumbnail'>";
        }
        ?>

<!-- если файл изображения отсутствует отправляем Ajax запрос на файл loading.php-->
        <script type="text/javascript">
            fetch('loading.php')
                .then(function (response) {
                    if (response.status === 200) { // при удачном ответе выводим изображение
                        document.querySelector(".img-thumbnail").src = "img_small/image-small.png";
                    }
                })
        </script>
    </div>
</div>
<div>
    <?php
    // создаем рандомный массив
    $array = [];
    for ($i = 0; $i < 100; $i++) {
        $array[] = mt_rand(1, 100);
    }

    // подсчитываем количестов вхождений элементов
    $counted = array_count_values($array);

    // выводим количестов вхождений элементов более одного
    echo "<pre>";
    print_r(array_filter($counted, function ($item) {
        return $item !== 1;
    }));
    echo "</pre>";
    ?>
</div>
</body>
</html>