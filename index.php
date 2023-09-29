<?php
    include("function.php");

    $objCrudAdmin = new crudApp();

    if(isset($_POST['add_info'])){
        $return_msg = $objCrudAdmin->add_data($_POST);
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container my-4 p-4 shadow">
        <h2><a style="text-decoration: none" href="index.php">Student Database</a></h2>
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <?php if(isset($return_msg)){echo $return_msg;} ?>
            <input class="form-control mb-2" name="std_name" placeholder="Enter your name" type="text">
            <input class="form-control mb-2" name="std_roll" placeholder="Enter your roll" type="number">
            <label for="image">Upload your Image</label>
            <input class="form-control mb-2" name="std_img" type="file">
            <input type="submit" value="Add Information" class="form-control bg-warning" name="add_info">
        </form>
    </div>

    <div class="container my-4 p-4 shadow">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nahid</td>
                    <td>1234</td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


</html>