<?php  session_start()  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Latest compiled and minified CSS -->
    <!-- //HERE here is my Boostrap Link -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

    <?php

    include('db.php');

    ?>

    <!--  HERE is my form To submit to the database -->
    <div class="container" style="margin-top: 200px; margin-left:40% ">
        <div class="row">
            <div class="col-md-4 offset-md-8">
                <h1 class='text-center'>Register Here</h1>

                <form method="POST" action="">
                    <h6>

                    </h6>
                    <div class="form-group">
                        <label>Username</label>

                        <input type="text" name="username" class="form-control">
                    </div>
 
                    <div class="form-group">
                        <label>Password</label>

                        <input type="password" name="password" class="form-control">
                    </div>

                    <input type="submit" name="submit" class="btn btn-info" value="Register">
                </form>
            </div>
        </div>
    </div>

    <!--Beginning  HERE is my form To submit to the database -->

</body>

</html>