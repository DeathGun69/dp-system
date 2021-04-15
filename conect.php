<?php

    include "includes\db.php";  

    $login = $_POST['login'];
    $password = $_POST['password'];

    if(empty($login) | empty($password)) {
        exit ('Не введен логин или пароль');
    } else {
        $result = $connection -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
    }    

    /*$user = $result->fetch_assoc();
	//$user = $result -> FETCH_ASSOC();
	if (count($user) == 0 ) {
		echo "неверный пароль";
		exit();	
	}*/
	
    /*session_start();
    setcookie('user', $user['name'], time() + 3600*4, "/");*/
	
    $connection->close();
    header('Location: glav.php');

?>