<!DOCTYPE html>

<?php
include 'db.php';

$sql = "select * from tasks";

$rows = $db->query($sql);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <title>Todo List | dbcrudgen</title>
</head>

<body>

    <div class="container">
        <div class="row" style="margin-top: 70px;">

            <h1>To Do List</h1>
            <h3>Add Your To Do List Here:</h3>
            <button type="button" data-target="#myModal" data-toggle="modal" class=" btn btn-success ">Add Task</button>

            <hr> <br>
            <!-------- Modal ------------>
            <div id="myModal" class=" modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Task</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="add.php">
                                <div class="form-group">
                                    <label for="">Task Name</label>
                                    <input type="text" required name="task" class="form-controll">
                                </div>
                                <input type="submit" name="send" value="Add Task" class="btn btn-success">
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1">
                < <table class="table">

                    <head>
                        <tr>
                            <th scope="col">ID.</th>
                            <th scope="col">Name</th>

                        </tr>
                    </head>

                    <tbody>
                        <tr>
                            <?php

                            while ($row = $rows->fetch_assoc()) :
                            ?>



                                <th scope="row"><?php echo $row['id'] ?></th>

                                <td class="col-md-10"><?php echo $row['name'] ?></td>

                                <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>

                                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endwhile; ?>

                    </tbody>
                    </table>
            </div>

        </div>
    </div>
</body>

</html>


<!-------  STYLE CSS  ----------->
<style>
    * {
        background: black;
        color: white;
        padding: 50px 50px 50px 50px;
    }

    h1 {
        font-size: 68px;
        color: crimson;
    }

    /* responsive media query start */
    @media screen and (max-width: 1900px) and (min-width: 200px) {
        div.example {
            font-size: 50px;
            padding: 50px;
            border: 8px solid black;
            background: red;
        }
    }
</style>