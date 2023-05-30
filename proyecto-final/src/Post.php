<?php

namespace App;

class Post {

    protected $title;
    protected $content;
    protected $category;

    public function add_category(Category $category) {
        $this->category = $category;
    }

    public function add_title(string $title) {
        $this->title = $title;
    }

    public function add_content(string $content) {
        $this->content = $content;
    }

    public function get_post() : string {
        return "<strong>Título:</strong> $this->title <br> <strong>Contenido:</strong> $this->content <br> <strong>Categoría:</strong> {$this->category->get_name()}";
    }

}