<?php
include "inc/functions.php";

$tasks = [];
$id = 0;

if (isset($_POST['add-task'])) {
    add_task();
}

if (isset($_POST['save-task'])) {
   save_task();
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    if ($action == 'remove-task') {
        remove_task();
    } elseif ($action == 'edit-task') {
        get_taskname();
        include "template/modify.php";
        exit();
    } else{
        //echo 'Unknown action';
    }
}

show_task();

include 'template/main.php';
