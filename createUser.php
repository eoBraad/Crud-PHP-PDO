<?php

require 'src/DataBase.php';

$db = new MyDataBase();

$db->createUser($_POST['username'], $_POST['password'], $_POST['email']);

header("Location: http://localhost:3000/users.php");
die();
