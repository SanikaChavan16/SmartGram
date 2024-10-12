<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            width:98vw;
            height:95vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .fm{
            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container fm">
        <form action="" method="POST">
            <label for="username"> Username </label>
            <div class="form-group">
                <input type="text" name="username" id="" class="form-control">
            </div>
            <label for="username"> Password </label>
            <div class="form-group">
                <input type="password" name="password" id="" class="form-control" >
            </div>
            <span id="login_failed" style="color:red"></span>
            <input type="submit"  class="btn btn-primary form-control"  value="login" name="login">
            <a href="register.php"> Don't have an account ? , Login here !</a>
        </form>
        </div>
    </div>
</body>
</html>
<?php 
    include 'connection.php';
    session_start();
    if(isset($_POST['login']))
    {
     
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select = "SELECT usernmae , password from users WHERE usernmae='$username' and password='$password'";
        $fire = mysqli_query($conn , $select);   
  
        if(mysqli_num_rows($fire) >= 1)
        {   
            $_SESSION['username'] = $username;
            header("location:index.php");
        } else {
            ?>
                <script>
                    let error = document.getElementById("login_failed");
                    error.innerHTML = " Failed to login ";
                </script>
            <?php 
        }
    }

?>