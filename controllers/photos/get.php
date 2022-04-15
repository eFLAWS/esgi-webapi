<?php

include __DIR__ . "/../../functions/json-response.php";
include __DIR__ . "/../../functions/get-database-connection.php";

try {
    $connection = new PDO($dataSourceName, $username, $password, $options);
    $query = $connection->query("SELECT * FROM photos");
    $users = $query->fetchAll();

    jsonResponse(200, [], ["success" => true, "photos" => []]);

} catch (PDOException $exception) {
    $errorMessage = $exception->getMessage();

    jsonResponse(500, [], ["success" => false, "error" => "Error while trying to access the dabtabase: $errorMessage"]);
}