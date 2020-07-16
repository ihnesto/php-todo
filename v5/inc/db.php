<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'todolist';

function make_req_to_db($sql) {
    global $host, $user, $pass, $db;
    $link = mysqli_connect($host, $user, $pass, $db);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    $res = mysqli_query($link, $sql);
    if (!$res) {
        echo "Failed to run query: (" . $mysqli->errno . ") " . $mysqli->error;
        echo 'SQL query is:' . $sql;
        exit();
    }
    if (gettype($res) != 'boolean')
        $tasks = mysqli_fetch_all($res, MYSQLI_ASSOC);
    else
        $tasks = [];
    mysqli_close($link);

    return [$res, $tasks];
}
