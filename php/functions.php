<?php
    include_once('database.php');
    session_start();
    function get_tovar($database) {
        $sql = "SELECT * FROM tovar ORDER BY RAND() LIMIT 10";
        $result = mysqli_query($database, $sql);
        $tovar = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $tovar;
    }

    function get_all($database) {
        $sql2 = "SELECT * FROM tovar";
        $result2 = mysqli_query($database, $sql2);
        $all = mysqli_fetch_all($result2, MYSQLI_ASSOC);
        return $all;
    }

    $top = get_tovar($database);
    $all = get_all($database);

    $day = date('d');
    $month = date('M');
    $year = date('Y');

    switch ($month) {
        case 'Jan' : $month = 'января'; break;
        case 'Feb' : $month = 'февраля'; break;
        case 'Mar' : $month = 'марта'; break;
        case 'Apr' : $month = 'апреля'; break;
        case 'May' : $month = 'мая'; break;
        case 'Jun' : $month = 'июня'; break;
        case 'Jul' : $month = 'июля'; break;
        case 'Aug' : $month = 'августа'; break;
        case 'Sep' : $month = 'сентября'; break;
        case 'Oct' : $month = 'октября'; break;
        case 'Nov' : $month = 'ноября'; break;
        case 'Dec' : $month = 'декабря'; break;
    }

    $date = "$day $month, $year";

    $i = $_GET['id']; 

    $menu[] = 0;
    foreach ($all as $al):
        if ($i == $al['id']){
            $menu = $al;
        }
    endforeach;

    $sql5 = "SELECT * FROM `articles`";
    $result5 = mysqli_query($database, $sql5);
    $art = mysqli_fetch_all($result5, MYSQLI_ASSOC);
    
    $artic = $_GET['art']; 

    $new_art[] = 0;
    foreach ($art as $ar):
        if ($artic == $ar['id']){
            $new_art = $ar;
        }
    endforeach;

    $data = date('Y');

    $sql7 = "SELECT * FROM rewievs ORDER BY id DESC";
    $result7 = mysqli_query($database, $sql7);
    $review = mysqli_fetch_all($result7, MYSQLI_ASSOC);

    $sql8 = "SELECT * FROM users";
    $result8 = mysqli_query($database, $sql8);
    $users = mysqli_fetch_all($result8, MYSQLI_ASSOC);

    $sql9 = "SELECT * FROM about";
    $result9 = mysqli_query($database, $sql9);
    $about = mysqli_fetch_all($result9, MYSQLI_ASSOC);

    $file = basename($_SERVER['PHP_SELF'], ".php");
?>