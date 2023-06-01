<?php

session_start();

require './class/User.php';

$user = new User();

$login = $_POST['login'];
$password = $_POST['password'];

$success = $user->register($login, $password);

echo json_encode(['success' => $success]);
