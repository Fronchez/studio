<?php

$dbo = new mysqli('localhost', 'a0376238_studio', '16102000', 'a0376238_studio');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}