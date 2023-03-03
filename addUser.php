<form method="POST">
    <input type="text" name="login" placeholder="Enter login">
    <input type="password" name="password" placeholder="Enter password">
    <input type="email" name="email" placeholder="Enter e-mail">
    <input type="submit">
</form>
<?php 
if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email'])) {
    include 'utils.php';        
    adduser($_POST['login'], $_POST['password'], $_POST['email']);          
} 
?>