<?php
$str = file_get_contents(
    "users.txt"     
);
$arr = explode(PHP_EOL, $str);
print_r($arr);
?>
<?php
    $content = " ";

    foreach($arr as $item){
        $user = $item.explode(":", $item);
        $content = "<tr>
            <td>{$user[0]}</td>
            <td>{$user[1]}</td>
            <td>{$user[2]}</td>
        </tr>";        
    }
?>
<table>
    <th>Список пользователей</th>
    <tr>        
        <th>Login</th>
        <th>Password</th>
        <th>E-mail</th>
    </tr>

    <?=$content?>

    <?php foreach($arr as $item){
        $user = explode(":", $item);
    ?>

        <tr>
            <td><?=$user[0]?></td>
            <td><?=$user[1]?></td>
            <td><?=$user[2]?></td>
        </tr>
    <?php } ?>    
       
    
    
</table>
