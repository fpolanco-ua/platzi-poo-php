<?php
interface Person{
    public function getName();
}

class Admin implements Person{
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }
}

$admin = new Admin('FER');
echo $admin ->getName();