<?php

function getDatabaseConnection() {
    $driver = "mysql";

    $databaseName = "esgi-webapi-2mcsi-2022";

    $hostName = "localhost";

    $dataSourceName = "$driver:dbname=$databaseName;host=$hostName";

    $username = "root";

    $password = "root";

    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $connection = new PDO($dataSourceName, $username, $password, $options);

    return $connection;
}