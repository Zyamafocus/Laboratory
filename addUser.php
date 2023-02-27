<form method="POST">
    <input type="text" name="login" placeholder="Enter login">
    <input type="text" name="password" placeholder="Enter password">
    <input type="email" name="email" placeholder="Enter e-mail">
    <input type="submit">
</form>
<?php 
if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email'])) {
        
    file_put_contents (
        "users.txt",
        $_POST['login'] . " : " . $_POST['password'] . " : " . $_POST['email'] . PHP_EOL,
        FILE_APPEND
           
    );
} 
?>