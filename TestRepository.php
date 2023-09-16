<?php 

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// testing insert
// $comment = new Comment(email: "testing@test.com", comment:"hai");
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// testing findById
// $comment = $repository->findByid(44);
// var_dump($comment);

// testing findAll
$comments = $repository->findAll();
var_dump($comments);

$connection = null;