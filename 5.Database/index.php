<?php
    include 'database.php';
    include 'user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <?php
        $result= User::addUser(NULL,'jon','didit@didit.be','didit',1);
        $user = new User('jon','didit');
        $user->loginUser();
        //$user->updateUsername('jon');
        //$user->updateEmail('bilou@bilou.be');
        //$user->deleteUser();
    ?>
</body>
</html>