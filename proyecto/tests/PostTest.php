<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
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
    }
}
