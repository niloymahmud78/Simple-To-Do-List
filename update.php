<!DOCTYPE html>

<?php
include 'db.php';

$id = $_GET['id'];

$sql = "select * from tasks whwere id='$id'";

$rows = $db->query($sql);

$row = $rows->fetch_assoc();

if (isset($_POST['send'])) {

    $task = $_POST['task'];

    $sql = "update task set name='$task' where id ='$id'";

    $db->query($sql);

    header('location: index.php');
}

?>


<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <title>Blogger</title>
</head>

<body>

    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-10 col-md-offset-1">
                <div class="table">

                    <h1>Update To Do List</h1>

                    <hr> <br>
                    <!-------- Modal ------------>


                    <form method="post">
                        <div class="form-group">
                            <label for="">Task Name</label>
                            <input type="text" required name="task" value="<?php echo $row['name']; ?>" class="form-controll">
                        </div>
                        <input type="submit" name="send" value="Add Task" class="btn btn-success">
                    </form>





                </div>

            </div>
        </div>


</body>

</html>