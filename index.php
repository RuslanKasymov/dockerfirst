<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/health/') {
    header('Content-Type: application/json');
    echo json_encode(["status" => "OK"]);
    exit;
}

header("HTTP/1.1 404 Not Found");
echo "Not Found";