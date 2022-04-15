<?php

function jsonResponse($statusCode, $headers, $body) {
    
    http_response_code($statusCode);
    header("Content-Type: application/json");

    foreach ($headers as $key => $value) {
        header("$key: $value");
    }

    echo json_encode($body);
}
