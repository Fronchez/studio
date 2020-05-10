<?php

header("Content-type: application/json; charset=utf-8");

session_start();
$_SESSION = array();
session_destroy();

$error = ['status' => 'okey'];
echo json_encode($error);