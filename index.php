<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <title>Todo List Php</title>
</head>

<body class="bg-primary">
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">TODO </h3>
                <div class="col-8">
                    <input type="text name" name="list" class="form-control" placeholder="">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-circle-plus"></i></button>
                </div>
            </div>
        </div>
    </form>
    <br>
</body>
<!-- Handle Get Data--> <?php
include 'config.php';
$rowData=mysqli_query($con,"select * from todolist");

// echo '<pre>';
// print_r($rowData->num_rows);
// echo '</pre>';
?>
<!-- Get Data-->
<div class="container">
    <div class="row justify-content-center bg-white m-auto shadow mt-1 py-3 col-md-6 ">
        <table class="table">
            <tbody> <?php
                    if($rowData->num_rows>0){
                    ?> <?php
                    while($row=mysqli_fetch_array($rowData)){            
                    ?> <tr>
                    <td> <?php
                            echo $row['id']
                            ?> </td>
                    <td> <?php
                            echo $row["list"]
                            ?> </td>
                    <td style="width: 10%;">
                        <a href="delete.php? ID=<?php  echo $row["id"] ?>" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure you want to delete this item')"><i
                                class=" fa-solid fa-trash"></i></a>
                    </td>
                    <td style="width: 10%;">
                        <a href="edit.php? ID=<?php echo $row["id"] ?>" class="btn btn-outline-success"><i
                                class="fa-solid fa-pencil"></i></a>
                    </td>
                </tr> <?php
                           }
                    ?> <?php } 
                    else{
                        
                     ?> <td>Đã hết Todo Mời bạn thêm vào,😙</td> <?php  
                    }
                    ?> </tbody>
        </table>
    </div>
</div>

</html>