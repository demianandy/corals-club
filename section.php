<? include_once('php/functions.php'); ?>

<?
    $sql3 = "SELECT * FROM `tovar` WHERE `type` = '{$menu['type']}'";
    $result3 = mysqli_query($database, $sql3);
    $ces_tovar = mysqli_fetch_all($result3, MYSQLI_ASSOC);
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
    <title><?=$menu['type'];?></title>
</head>
<body>    
    <? include_once('php/header.php'); ?>  
    <? include_once('php/arsenal.php'); ?>  
    <? include_once('php/footer.php'); ?>  
</body>
</html>