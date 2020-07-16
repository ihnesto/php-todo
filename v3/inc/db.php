<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'todolist';

function make_req_to_db($sql) {
    global $host, $user, $pass, $db;
    $link = mysqli_connect($host, $user, $pass, $db);
    $res = mysqli_query($link, $sql);
    if (gettype($res) != 'boolean')
        $tasks = mysqli_fetch_all($res, MYSQLI_ASSOC);
    else
        $tasks = [];
    mysqli_close($link);
    return [$res, $tasks];

}
