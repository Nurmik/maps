<?php

$mysqli = new mysqli(
    "***",
    "***",
    "***",
    "***"
);
/* check connection */
if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}
