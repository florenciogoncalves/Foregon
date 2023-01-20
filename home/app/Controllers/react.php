<?php

// require __DIR__ . "/../Models/blogModel.php";
require __DIR__ . "/../../../_app/models/User.php";

$Model = new User();

if (!isset($_GET['id'])) {
    // header("Location: ../../artigo.php");
} else {


    $id = $_GET['id'];

    $numLikesPost = $Model->numLikes($id);

    $like = 0;
    $like = $numLikesPost + 1;

    if ($Model->getLike($like, $id)) {
        header("Location: ../../artigo.php?id={$id}");
    }
}

// var_dump($_REQUEST);
