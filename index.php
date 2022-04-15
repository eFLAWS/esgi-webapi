<?php

/*
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);
*/

$route = $_REQUEST["route"] ?? "undefined";

$method = $_SERVER["REQUEST_METHOD"];

if ($route === "albums") {

    if ($method === "GET") {
        include __DIR__ . "/controllers/albums/get.php";
        die();
    }

    if ($method === "POST") {
        include __DIR__ . "/controllers/albums/post.php";
        die();
    }

    if ($method === "PUT") {
        include __DIR__ . "/controllers/albums/put.php";
        die();
    }

    if ($method === "DELETE") {
        include __DIR__ . "/controllers/albums/delete.php";
        die();
    }
}

if ($route === "comments") {

    if ($method === "GET") {
        include __DIR__ . "/controllers/comments/get.php";
        die();
    }

    if ($method === "POST") {
        include __DIR__ . "/controllers/comments/post.php";
        die();
    }

    if ($method === "PUT") {
        include __DIR__ . "/controllers/comments/put.php";
        die();
    }

    if ($method === "DELETE") {
        include __DIR__ . "/controllers/comments/delete.php";
        die();
    }
}

if ($route === "photos") {

    if ($method === "GET") {
        include __DIR__ . "/controllers/photos/get.php";
        die();
    }

    if ($method === "POST") {
        include __DIR__ . "/controllers/photos/post.php";
        die();
    }

    if ($method === "PUT") {
        include __DIR__ . "/controllers/photos/put.php";
        die();
    }

    if ($method === "DELETE") {
        include __DIR__ . "/controllers/photos/delete.php";
        die();
    }
}

if ($route === "posts") {

    if ($method === "GET") {
        include __DIR__ . "/controllers/posts/get.php";
        die();
    }

    if ($method === "POST") {
        include __DIR__ . "/controllers/posts/post.php";
        die();
    }

    if ($method === "PUT") {
        include __DIR__ . "/controllers/posts/put.php";
        die();
    }

    if ($method === "DELETE") {
        include __DIR__ . "/controllers/posts/delete.php";
        die();
    }
}

if ($route === "todos") {

    if ($method === "GET") {
        include __DIR__ . "/controllers/todos/get.php";
        die();
    }

    if ($method === "POST") {
        include __DIR__ . "/controllers/todos/post.php";
        die();
    }

    if ($method === "PUT") {
        include __DIR__ . "/controllers/todos/put.php";
        die();
    }

    if ($method === "DELETE") {
        include __DIR__ . "/controllers/todos/delete.php";
        die();
    }
}

if ($route === "users") {

    if ($method === "GET") {
        include __DIR__ . "/controllers/users/get.php";
        die();
    }

    if ($method === "POST") {
        include __DIR__ . "/controllers/users/post.php";
        die();
    }

    if ($method === "PUT") {
        include __DIR__ . "/controllers/users/put.php";
        die();
    }

    if ($method === "DELETE") {
        include __DIR__ . "/controllers/users/delete.php";
        die();
    }
}

include __DIR__ . "/functions/json-response.php";

jsonResponse(404, [], ["success" => false, "error" => "Not found"]);

