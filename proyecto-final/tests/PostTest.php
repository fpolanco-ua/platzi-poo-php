<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Author;
use App\Category;
use App\Post;
use App\Comment;
# para hacer las pruebas comando : php vendor/phpunit/phpunit/phpunit

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertSame(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);

        // Categoría PHP
        $php_category = new Category();
        $php_category->set_name("PHP");

        // Categoría VueJS
        $vue_category = new Category();
        $vue_category->set_name("VueJS");

        // Ahora creo al autor
        $retaxmaster = new Author();
        $retaxmaster->set_name("Carlos", "Gómez");

        // Ahora creo un post sobre PHP
        $php_functions_post = new Post();
        $php_functions_post->add_title("Post para hablar acerca de funciones en PHP");
        $php_functions_post->add_content("En este post hablaremos sobre cómo funcionan las funciones en PHP");
        $php_functions_post->add_category($php_category);

        // Ahora creo un post sobre VueJS
        $vue_app_post = new Post();
        $vue_app_post->add_title("Post sobre cómo crear una app con VueJS");
        $vue_app_post->add_content("En este post hablaremos sobre qué necesitamos para crear una app con VueJS");
        $vue_app_post->add_category($vue_category);

        // Ahora le asigno los posts al autor
        $retaxmaster->create_post($php_functions_post);
        $retaxmaster->create_post($vue_app_post);

        // Y por último listamos los posts
        $author_post = $retaxmaster->get_postst();

        foreach ($author_post as $post) {

            echo "El usuario {$retaxmaster->get_full_name()} tiene el siguiente post: <br><br>";
            echo $post->get_post();
            echo "<br><br><br>";
        }
    }
}
