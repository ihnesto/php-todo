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

        <h1 class="text-center mt-5">Todo list</h1>
        
        <p class="text-center mt-2 fz-22">What I need to do</p>

        <form class="form-inline col-md-8 offset-md-2 mb-5" action="index.php" method="POST">
            <input type="text" class="form-control flex-grow-1 mr-2" id="new-task" placeholder="Enter new task" name="new-task">
            <button type="submit" class="btn btn-primary" name="add-task">Add task</button>
        </form>


        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="list-group">

                    <?php 
                        foreach($tasks as $task) {
                    ?>
                    <li class="list-group-item d-flex">
                        <span class="flex-grow-1 fz-22">
                            <?= $task['taskname'] ?>
                        </span>
                        <span>
                            <a class="btn btn-success mr-1" href="edit-item.php?id=
                            <?= $task['id'] ?>
                            ">Edit</a>
                            <a class="btn btn-danger" href="index.php?action=remove-task&id=
                            <?= $task['id'] ?>
                            ">Remove</a>
                        </span>
                    </li>
                    <?php 
                        }
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
