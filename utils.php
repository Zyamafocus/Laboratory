<?php
function addUser($login, $password, $email) {
    $newUser = $login . " : " . md5($password) . " : " . $email . PHP_EOL;
    file_put_contents ("users.txt",  $newUser, FILE_APPEND);         
} 
function getusers() {
    $users = array_map(function ($item) {
        return explode( " : ", $item);    
    }, explode(PHP_EOL, file_get_contents("users.txt")));
    return $users;
}
function checkuser($login, $password){
    $users = getusers();
    $status = false;
    foreach($users as $user) {
        if($user[0] == $login && $user[1] == md5($password)) {
            $status = true;
        }
    }
    return $status;
}
?>