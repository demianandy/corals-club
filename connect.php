<? include_once('php/functions.php'); ?>
<?if(isset($_POST['avtor']) and isset($_POST['email']) 
      and isset($_POST['call'])){
         $name = trim(strip_tags($_POST['avtor']));
         $email = trim(strip_tags($_POST['email']));
         $message = trim(strip_tags($_POST['call']));
         $headers  = "Content-type: text/html; charset=utf-8 \r\n";
         $headers .= "From: =?utf-8?b?".base64_encode('Вам письмо')."?= <my-site.ru>\r\n";
         mail('demian@gmail.com', 'Письмо с сайта', 
         'Вам написал: '.$name.'<br />Почта отправителя: '.$email.'<br />
         Сообщение: '.$message, $headers); 
         header('location: mail.php'.$_SERVER['HTTP_REFERER']);
         exit;
    }
    if(!empty($_POST['rew'])){
        $text = $_POST['rew'];
        mysqli_query($database, "INSERT INTO `rewievs` (`avtor`, `rewiev`, `data`) VALUES ('{$_SESSION['user']}', '{$text}', '{$date}')");
        $_SESSION['err'] = "Отзыв отправлен";
        header('location: reviews.php');
        exit;
    } else {
        $_SESSION['errr'] = "Введите текст отзыва";
        header('location: reviews.php#form');
        exit;
    }
?>