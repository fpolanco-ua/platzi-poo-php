<?php

interface Search
{
    public function all();
}

class User implements Search
{
    public function all()
    {
        return "user, XML";
    }
}

class Post implements Search
{
    public function all()
    {
        return "Obteniendo JSON";
    }
}

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();
