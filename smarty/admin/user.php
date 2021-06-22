<?php
require_once("header.php");
if(isset($_SESSION['userid'],$_SESSION['username'],$_SESSION['userrole'],$_SESSION['useravatar'])&& $_SESSION['userrole']==1) {
    $smarty_main->assign("userid",$_SESSION['userid']);
    $smarty_main->assign("username",$_SESSION['username']);
    $smarty_main->assign("userrole",$_SESSION['userrole']);
    $smarty_main->assign("useravatar",$_SESSION['useravatar']);//підставляємо дані про користувача в тпл файл захищаємо сторінку від несанкціонованого входу крім того працювати з цією стор можуть користувачі в яких є права адміна

    if (!isset($_POST['send'])) {
        $smarty_user = new Smarty();
        $content = $smarty_user->fetch("user.tpl");
    } else if (isset($_POST['send'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['login'], $_POST['password'], $_POST['role']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && $_POST['password'] == $_POST['password1'] && !empty($_POST['role'])) {
        if ($_FILES['photo']['error'] == 0) {
            $filenameTMP = $_FILES['photo']['tmp_name'];
            $filename = time() . $_FILES['photo']['name'];
            move_uploaded_file($filenameTMP, "../images/$filename");
            $query = "Insert into user(name,email,phone,login,password,role,avatar) value('{$_POST['name']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['login']}',sha1('{$_POST['password']}'),'{$_POST['role']}','{$filename}')";
            //echo $query;
        } else {
            $query = "Insert into user(name,email,phone,login,password,role) value('{$_POST['name']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['login']}',sha1('{$_POST['password']}'),'{$_POST['role']}')";
        }
        mysqli_query($dbc, $query) or die("query error");
        $content = "Ви успішно зареєстувалися";
    } else {
        $content = "Недостатньо даних для реєстрації";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->assign("title", "реєстрація користувача");
    $smarty_main->display("main.tpl");
}
else{
    header("location:404.html");
}
?>