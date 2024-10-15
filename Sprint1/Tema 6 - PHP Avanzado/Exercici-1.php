<?php
session_start();

$user = array('name' => $_POST['nombre'], 'genre' => $_POST['genero'], 'city' => $_POST['ciudad']);

print_r($user);

$_SESSION["sessionOwnerInfo"] = $user;

?>