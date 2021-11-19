<?php
$server="localhost";
$username="root";
$password="";
$db="IIITADMIN";

$conn=mysqli_connect($server,$username,$password,$db);
if($conn){
    ?>
    <script>
        alert("Connection Successful");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Connection not Successful");
    </script>
<?php
}
?>