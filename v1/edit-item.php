<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'todolist');
$sql = "SELECT taskname FROM tasks WHERE id=$id";
$res = mysqli_query($link, $sql);
$tasks = mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_close($link);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .fz-22 {
            font-size: 22px;
        }
        li > span {
            font-size: 1rem;
        }
        
    </style>
    <title>Todo list</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">Edit task</h1>
        <p class="text-center mt-2 fz-22">Change value of item</p>

        <form class="form-inline col-md-8 offset-md-2 mb-5" action="index.php" method="POST">
            <input type="text" class="form-control flex-grow-1 mr-2" id="new-task" placeholder="Enter new task" name="edited-task" value="<?php echo $tasks[0]['taskname'] ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary" name="save-task">Save task</button>
          </form>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
