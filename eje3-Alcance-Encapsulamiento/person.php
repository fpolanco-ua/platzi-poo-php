<?php
class Person
{
    public $name;

    public function great()
    {
        return "Hola $this->name";
    }
}
