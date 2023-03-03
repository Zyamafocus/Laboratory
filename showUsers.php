<?php
include 'utils.php';
$users = getusers();
?>
<table>
    <th>Список пользователей</th>
    <tr>
        <th>Login</th>
        <th>Password</th>
        <th>E-mail</th>
    </tr>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user[0] ?></td>
            <td><?= $user[1] ?></td>
            <td><?= $user[2] ?></td>
        </tr>
    <?php } ?>
</table>