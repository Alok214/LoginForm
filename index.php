<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <div class="con">
        <form action="index.php" method="get">
            <div class="fomcon">
                <h1>Register</h1>
                <p class="p">Fill up the form with correct values</p>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" required>

                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" required>

                <label for="email">Email Address</label>
                <input type="email" name="email" required>

                <label for="mob">Mobile</label>
                <input type="text" name="mob" required>

                <label for="pas">Password</label>
                <input type="password" name="pas" required> 

                <input type="submit" value="Sign Up" name="sub" class="sub">
            </div>
        </form>
    </div>
</body>
</html>

        <?php

        include 'sql.php';

if(isset($_GET['sub'])){
    $fname=$_GET['firstname'];
    $lname=$_GET['lastname'];
    $email=$_GET['email'];
    $mobile=$_GET['mob'];
    $passwod=$_GET['pas'];

    $insertquery="INSERT INTO user(fname,lname,email,mobile,passwod) values('$fname','$lname','$email','$mobile','$password')";
$res = mysqli_query($conn, $insertquery);
if($res){
    ?>
    <!-- <script>
        alert("Data Entered Successfully.");
    </script> -->
    <?php
}
else{
    ?>
    <script>
        alert("Data Not Entered.");
    </script>
    <?php
}
}

?>