<?php

require 'src/DataBase.php';

$db = new MyDataBase();

$db->deleteUser($_POST['userid']);

header("Location: http://localhost:3000/users.php");
die();
