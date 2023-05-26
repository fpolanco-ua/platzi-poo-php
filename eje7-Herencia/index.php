<?php 
class User{
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }

}

class Admin extends User
{

}

$admin = new Admin('Italo');
echo $admin->getName();