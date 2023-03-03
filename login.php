<form method="POST">
    <input type="text" name="login" placeholder="Enter login">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit">
</form>
<?php
if(!empty($_POST['login']) && !empty($_POST['password'])) {
    include 'utils.php';        
    $status = checkuser($_POST['login'], $_POST['password']);  
    print($status?"Авторизация прошла успешно!": "Авторизация не закончена!");
}
?>