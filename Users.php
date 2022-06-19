<?php
require 'src/DataBase.php';

$db = new MyDataBase();
$users = $db->getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino Banco de Dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Users</h1>
        <table class="table overflow-auto">
            <thead>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                    echo "<tr> <th scope='row'>" . $user['id'] . "</th>" .
                        "<th>" . $user['username'] . "</th>" .
                        "<th>" . $user['email'] . "</th>" .
                        "<th>" . $user['password'] . "</th>" .
                        "<th>
                            <form action='deleteUser.php' method='POST'>
                                <input hidden name='userid' value=" . $user['id'] .
                        "/> <button class='btn btn-danger btn-sm'>trash</button>
                            </form>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <form action="">

        </form>
    </div>
</body>

</html>