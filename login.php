<? 
session_start();
include_once('php/functions.php'); ?>
<?if(isset($_POST['emailuser'])){
    $login = $_POST['emailuser'];
    $parol = $_POST['passworduser'];
    $parol = md5($parol);
    foreach ($users as $user) {
        if($login === admin@ and $parol === admin){
            $_SESSION['admin'];
            break;
        } else {
            if(($login === $user['email']) and ($parol === $user['password'])){
                $_SESSION['message'] = "Вы успешно вошли";
                $_SESSION['user'] = $user['name'];
                break;
            } else {
                $_SESSION['message'] = "Логин или пароль неверны";
            }
        }
    }
}
header('Location:' . $_SERVER['REQUEST_URI']);
// header('location: index.php');
exit;
?>