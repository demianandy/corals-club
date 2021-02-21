<? include_once('php/functions.php'); ?>

<?
    $sql4 = "SELECT * FROM `tovar`";
    $result4 = mysqli_query($database, $sql4);
    $ces_tovar = mysqli_fetch_all($result4, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/app.js"></script>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>Товары</title>
</head>
<body>    
    <? include_once('php/header.php'); ?>  
    <? include_once('php/arsenal.php'); ?>  
    <? include_once('php/footer.php'); ?>  
</body>
</html>