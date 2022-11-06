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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<?php
include ("connect/config.php");
if (isset($_POST['username']))
{

    $username = ($_POST['username']);
    $password = ($_POST['password']);

    $sql = "  SELECT * FROM tblregister WHERE username = '$username' AND password = '$password'  ";
    $query = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($query);
    
    if ($rows == 1)
    {
$msg ="";
        while ($row = mysqli_fetch_assoc($query))
        {

            $db_username = $row['username'];
            $db_password = $row['password'];

            if ($username !== $db_username || $password !== $db_password)
            {

                echo "Invalid username and Password";

            }
            else
            {
                    $_SESSION['username'] = $db_username; 
                  
                     header("Location: index.php");
                 
            
                
               
            }

        }
        }
    }
        
?>
    <!--  HERE is my form To submit to the database -->
    <div class="container" style="margin-top: 200px; margin-left:40% ">
        <div class="row">
            <div class="col-md-4 offset-md-8">
                <h1 class='text-center'>Login  Here</h1>

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