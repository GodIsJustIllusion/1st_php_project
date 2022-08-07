<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $md5Pass = md5 ($pass);
        echo "Имя: $name<br>Пароль: $md5Pass";
    }