<?php
include "inc/functions.php";

$tasks = [];
if (isset($_POST['add-task'])) {
    add_task();
}

if (isset($_POST['save-task'])) {
   save_task();
}

if (isset($_GET['action'])) {
    remove_task();
}

show_task();

include 'template/main.php';
