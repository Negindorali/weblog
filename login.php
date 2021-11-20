<?php
require_once "func/function.php";
$users = json_decode(file_get_contents("user"));
require('template/master.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = text_input($_POST['password']);
    $email = text_input($_POST['email']);
}

array_filter($users, function ($data) {

    global $password,$email;
    if ($data->mail ==$email && $data->password == $password) {
        header("Location: ./dashboard.php");
    }

});
//echo  md5("reza");
?>


<body>
<div class="container p-3" style="font-family: 'DejaVu Serif',serif">
    <h4 class="text-center mt-5">please enter your personal information to go to your dashboard!</h4>
    <form method="post" class="mt-5">
        <div class="form-control m-2">
            <div class="col p-2 pt-3">
                <label for="email">email address</label>
                <input type="email" class="form-control" name="email" placeholder="example:negin@gmail.com">
            </div>
            <div class="col p-2 pt-3">
                <label for="password">password</label>
                <input type="password" class="form-control" name="password">
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