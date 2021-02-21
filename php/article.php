<? include_once('../php/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/app.js"></script>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title><?=$new_art['name'];?></title>
</head>
<body>
<? include_once('header.php'); ?>  
<div class="container_art">
    <div class="art-page">
        <h1 style="color: <?=$new_art['color'];?>"><?=$new_art['name'];?></h1>
        <img src="../img/articles/<?=$new_art['id'];?>.jpg" alt="Изображение для статьи">
        <p><?=$new_art['text'];?></p>
    </div>
</div>
<? include_once('footer.php'); ?>  
</body>
</html>