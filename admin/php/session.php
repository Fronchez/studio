<?php

header("Content-type: application/json; charset=utf-8");

session_start();

if (isset($_SESSION["userID"])) {
    $result = ['status' => 'ok'];
} else {
    $result = ['status' => 'error'];
}

echo json_encode($result);
