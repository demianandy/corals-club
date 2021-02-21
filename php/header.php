<?php
if(isset($_POST['emailuser'])){
    $login = $_POST['emailuser'];
    $parol = $_POST['passworduser'];
    $parol = md5($parol);
    foreach ($users as $user) {
        if(($login === $user['email']) and ($parol === $user['password'])){
            $_SESSION['message'] = "Вы успешно вошли";
            $_SESSION['user'] = $user['name'];
            break;
        } else {
            $_SESSION['message'] = "Логин или пароль неверны";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" d="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/app.js"></script>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>Коралловый клуб</title>
</head>
<body>
        <div class="header" >

            <div class="polotno">
                <video src="../img/video.mp4" autoplay muted loop></video>
            </div>

            <div class="header-top" id="header">

                <div class="container">
                    <div class="logo">
                        <img src="../img/logo.png" alt="logo">
                        <span>corals-club</span>
                    </div>
                    <div class="slogan">
                        <span class="independed">Независимый</span>
                        <span>дистрибьютор</span>
                        <p>Иван Харитонов</p>
                    </div>
                </div>

                <div class="icons">
                    <ul>
                        <li><i class="far fa-envelope"><a href="mailto:corals_club@mail.ru?subject=The question of the Corals-Club"></a></i></li>
                        <li><i class="fas fa-phone"><a href="tel:+998977539453"></a></i></li>
                        <li><i class="fas fa-user-tie"><a href="contacts.php"></a></i></li>
                    </ul>
                </div>
                
                <?php
                if (!$_SESSION['user']){?>
                <div class="registration">
                    <a href="#" class="admin_enter">Вход</a> <a href="#" class="admin_reg">Регистрация</a>
                </div>
                <?} else {?>
                    <span class="hello">Здравствуйте, <?=$_SESSION['user'];?></span>
                    <a href="out.php" class="out">Выйти</a>
                <?}?>
            </div>

            <div class="main-menu">
                <div class="menu">
                    <ul>
                        <?if($file=='index'){?>
                            <li><a href="#header" class="link active"><span>Главная</span></a></li>
                        <? }else {?>
                            <li><a href="../index.php"><span>Главная</span></a></li>
                        <?}?>

                        <?if($file=='products' or $file=='specification' or $file=='section'){?>
                            <li><a href="#arsenal" class="link active"><span>Товары</span></a></li>
                        <? }else {?>
                            <li><a href="../products.php"><span>Товары</span></a></li>
                        <?}?>

                        <?if($file=='articles' or $file=='article'){?>
                            <li><a href="#art" class="link active"><span>Статьи</span></a></li>
                        <? }else {?>
                            <li><a href="../articles.php"><span>Статьи</span></a></li>
                        <?}?>

                        <?if($file=='reviews'){?>
                            <li><a href="#otziv" class="link active"><span>Отзывы</span></a></li>
                        <? }else {?>
                            <li><a href="../reviews.php"><span>Отзывы</span></a></li>
                        <?}?>

                        <?if($file=='about'){?>
                            <li><a href="#about" class="link active"><span>О нас</span></a></li>
                        <? }else {?>
                            <li><a href="../about.php"><span>О нас</span></a></li>
                        <?}?>

                        <li><a href="#footer" class="link"><span>Контакты</span></a></li>
                    </ul>
                </div>
                <div class="reg">
                    <i class="fas fa-times"></i>
                    <h2>Регистрация</h2>
                    <form action="../regent.php" method="POST" id="regist">
                        <input type="text" name="nameuser" class="username" id="username" placeholder="Имя" autocomplete="off" maxlength="25">
                        <input type="email" name="emailuser" id="useremail" class="useremail" placeholder="Электронная почта" autocomplete="off">
                        <input type="password" name="passworduser" id="userpassword" class="userpassword" placeholder="Пароль" autocomplete="off">
                        <input type="password" name="password2user" id="userpassword2" class="userpassword2" placeholder="Подтвердите пароль" autocomplete="off">
                        <span class="errr">
                            <?php 
                                if($_SESSION['message2']){
                                    echo $_SESSION['message2'];
                                }
                                unset($_SESSION['message2']);
                            ?>
                        </span>
                        <input type="submit" class="connector" name="regan" id="regan" value="Зарегистрироваться">
                    </form>
                </div>

                <div class="avt">
                    <i class="fas fa-times"></i>
                    <h2>Авторизация</h2>
                    <form method="POST" id="logan">
                        <input type="email" name="emailuser" id="useremailenter" class="useremail" placeholder="Электронная почта" autocomplete="off">
                        <input type="password" name="passworduser" id="userpasswordenter" class="userpassword" placeholder="Пароль" autocomplete="off">
                        <span class="errrr" id="fatality">
                        <?php 
                            if($_SESSION['message']){
                                echo $_SESSION['message'];
                            }
                            unset($_SESSION['message']);
                        ?>
                        </span>
                        <?php
                        if (!$_SESSION['user']){?>
                        <input type="submit" class="connector" name="avtorization" id="avtoriz" value="Авторизоваться">
                        <?}
                        ?>
                    </form>
                </div>
            </div>
