<?php

namespace App;

class User{

    protected $name;
    protected $last_name;

    public function set_name(string $name, string $last_name) {
        $this->name = $name;
        $this->last_name = $last_name;
    }

    public function get_full_name() : string {
        return $this->name . " " . $this->last_name;
    }

}