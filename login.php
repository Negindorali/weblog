<?php
require_once "func/function.php";
$users = json_decode(file_get_contents("user"));

//$a=array_filter($users,function ($data){
//    return $data->name=="";
//});
//echo  md5("reza");
?>

<!doctype html>
<html lang=fa>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>register</title>
</head>
<style>
    input{
        border-radius: 5px;
        box-shadow:3px 3px 2px #d6d2d2;
    }
</style>
<body>
<div class="container p-3" style="font-family: 'DejaVu Serif'">
    <h4 class="text-center mt-5">please enter your personal informations to know you better!</h4>
    <form action="dashboard.php" method="post" class="mt-5">
        <div class="form-control m-2">
            <div class="col p-2 pt-3">
                <label for="email">email address</label>
                <input type="email" class="form-control" name="email" placeholder="example:negin@gmail.com">
            </div>
            <div class="col p-2 pt-3">
                <label for="password">email address</label>
                <input type="password" class="form-control" name="password" placeholder="example:negin@gmail.com">
            </div>

            <button name="save" class="btn btn-success text-white btn-block px-4 m-2 mt-4">
                login
            </button>
        </div>

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>