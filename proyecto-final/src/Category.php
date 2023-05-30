<?php

namespace App;

class Category {

    protected $name;

    public function set_name(string $name) {
        $this->name = $name;
    }

    public function get_name() : string {
        return $this->name;
    }

}