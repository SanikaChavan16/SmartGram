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
            width: 98vw;
            height: 95vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fm {
            border: 0.1px solid lightgray;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container fm">
            <form action="" method="post">
                <label for="username"> Full Name </label>
                <div class="form-group">
                    <input type="text" name="full_name" id="full_name" class="form-control"  autocomple="off" required>
                </div>
                <label for="username"> Username </label>
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" autocomple="off" required>
                </div>
                <label for="username"> Password </label>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" autocomple="off" required>
                </div>
                <label for="username"> Re-enter Password </label>
                <div class="form-group">
                    <input type="password" name="repassword" id="confirm_password" class="form-control" autocomple="off"
                        required>
                </div>
                <span id="error" style="color:red"></span>
                <input type="submit" class="btn btn-primary form-control" name="register" value="Login" onclick="return validation()">
                <a href="login.php" class="text-center"> Already Have Account ? </a>

            </form>
        </div>
    </div>
    <script>
        let submit_status = false;
        function validation()
        {
            // return submit_status;
            let password = document.getElementById("password").value;
            let confirm_password = document.getElementById("confirm_password").value;

            if(password!=confirm_password)
            {
                error.innerHTML = " Password and confirm password doen't match ";
                return submit_status;
            }
            // submit_status = true;
        }
    </script>
</body>

</html>

<?php
include 'connection.php';
if(isset($_POST['register']))
{
    $fullname = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['repassword'];

    $select = "SELECT * FROM users WHERE usernmae='$username'";
    $fire_select = mysqli_query($conn , $select);
    if(mysqli_num_rows($fire_select) >= 1)
    {
        ?>
<script>
    let error = document.getElementById("error");
    error.innerHTML = "User Already Exist";
</script>
<?php 
    } else {
        $insert = "INSERT INTO users (usernmae, fullname, password) VALUES ('$username' , '$fullname' , '$password')";
    $fire  = mysqli_query($conn , $insert);
    
    if($fire)
    {
        ?>
<script>
    alert(" Registerd , Now please login");
    window.setTimeout(function () {

        // Move to a new location or you can do something else
        window.location.href = "login.php";

    }, 2000);
</script>
<?php 
    }
    }

    

}


?>