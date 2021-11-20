<?php
include ('template/master.php');
?>

<form method="post" class="mt-5">
        <div class="form-control m-2">
            <div class="col p-2 pt-3">
                <label for="title">title</label>
                <input type="text" class="form-control" name="title">
            </div>



            <div class="col p-2 pt-3">
                <label for="phone">mobile number</label>
                <textarea  class="form-control" name="phone" rows="5"></textarea>
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
