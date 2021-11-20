<?php
require_once "func/function.php";
include('template/master.php');

//if ($_SESSION['user'])
//    header("Location: ./dashboard.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = text_input($_POST['name']);
    if (EnglishOnly($name))
        $nameErr[] = "Only letters and white space allowed for name";

    $family = text_input($_POST['family']);
    if (EnglishOnly($family))
        $nameErr[] = "Only letters and white space allowed for fname";

    $age = text_input($_POST['age']);
    $password = text_input($_POST['password']);
    $email = text_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    $birthday = text_input($_POST['birthday']);
    $_SESSION['user'] = json_encode(["name" => $name, "fname" => $family, "birth" => $birthday, "mail" => $email, "age" => $age, 'password' => $password]);

    $users = json_decode(file_get_contents("user"));
    $users[] = ["name" => $name, "fname" => $family, "birth" => $birthday, "mail" => $email, "age" => $age, 'password' => $password];
    file_put_contents("user", json_encode($users));

    header("Location: ./dashboard.php");
    die();
}
?>
<div class="container p-3" style="font-family: 'DejaVu Serif'">
    <h4 class="text-center mt-5">please enter your personal informations to know you better!</h4>
    <form method="post" class="mt-5">
        <div class="form-control m-2">
            <div class="col p-2 pt-3">
                <label for="name">name</label>
                <input type="text" class="form-control" name="name" placeholder="example:Negin">
            </div>

            <div class="col p-2 pt-3">
                <label for="family">family</label>
                <input type="text" class="form-control" name="family" placeholder="example:Dorali">
            </div>

            <div class="col p-2 pt-3">
                <label for="password">password</label>
                <input type="password" class="form-control" name="password" placeholder="example:negin@gmail.com">
            </div>

            <div class="col p-2 pt-3">
                <label for="age">age</label>
                <input type="number" name="age" class="form-control" placeholder="example:23">
            </div>

            <div class="col p-2 pt-3">
                <label for="BirthDate">birthday</label>
                <input type="date" class="form-control" name="birthday">
            </div>

            <div class="col p-2 pt-3">
                <label for="phone">mobile number</label>
                <input type="number" class="form-control" name="phone" placeholder="example:09916175068">
            </div>

            <div class="col p-2 pt-3">
                <label for="email">email address</label>
                <input type="email" class="form-control" name="email" placeholder="example:negin@gmail.com">
            </div>
            <button name="save" class="btn btn-success text-white btn-block px-4 m-2 mt-4">
                submit
            </button>
        </div>

    </form>
</div>


