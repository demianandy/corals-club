<? 
session_start();
include_once('php/functions.php'); ?>
<?if(isset($_POST['passworduser'])){
    $pochta = $_POST['emailuser'];
    $pass = $_POST['passworduser'];
    $pass = md5($pass);
    $count = 0;
    foreach ($users as $user) {
        if($pochta === $user['email']){
            $_SESSION['message2'] = "Вы уже зарегистрированы";
            header('location: index.php');
            exit;
        }
    }
    $sql = mysqli_query($database, "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('{$_POST['nameuser']}', '{$_POST['emailuser']}', '{$pass}')");
    $_SESSION['message2'] = "Вы успешно зарегистрированы!";
}
header('location: index.php');
exit;
?>