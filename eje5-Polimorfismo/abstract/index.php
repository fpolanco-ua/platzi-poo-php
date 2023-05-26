<?php
require_once 'Guest.php';
require_once 'Admin.php';
require_once 'User.php';

$guest = new Guest();
echo $guest->login();

$user = new User('Fer');
echo $user->login();

$admin = new Admin('dueño');
echo $admin->login();
