<?php

include 'admin.php';
include_once 'person.php';
include 'user.php';

$user= new User;
$user->type=new Admin;
echo $user->type->great();