<?php

require_once('blog/src/lib/database.php');
require_once('blog/src/model/post.php');
require_once('blog/src/model/comment.php');

function post(string $identifier)
{
    $postRepository = new PostRepository();
    $postRepository->connection = new DatabaseConnection();
    $post = $postRepository->getPost($identifier);
    $comments = getComments($identifier);

    require('templates/post.php');
}
