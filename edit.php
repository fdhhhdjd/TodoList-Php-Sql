<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <title>Edit Todo List</title>
</head> <?php
include 'config.php';
$id=$_GET["ID"];
$rowDataID=mysqli_query($con,"select * from todolist where id=$id");
$data=mysqli_fetch_array($rowDataID);
?>
<!-- Handle Edit Data-->

<body class="bg-primary">
    <form action="edit1.php" method="POST">
        <div class="container">
            <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">TODO Update </h3>
                <div class="col-8">
                    <input type="text name" value="<?php echo $data['list'] ?>" name="list" class="form-control"
                        placeholder="">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-pencil"></i></button>
                    <input type="hidden" value="<?php echo $data['id'] ?>" name="id">
                </div>
            </div>
        </div>
    </form>
</body>

</html>