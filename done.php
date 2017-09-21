<?php
session_start();
include('dbcon.php');



      $name= $_SESSION['nm'];
if(isset($_POST['submit']))
{
$performance=$_POST['perform'];
 $remarks=$_POST['remarks'];
$_SESSION['utest']=$name;
 $query1="UPDATE `faculty_profile` SET `performance`= '$performance',`remarks`= '$remarks' WHERE name ='$name'";


  $run1=mysqli_query($con,$query1);

header("location:admin_submit.php");
}





?>

<!-- <html>
    <body style="margin-top: 10%;background: linear-gradient( to right,cyan,#e8f3f8,cyan); "><center>
    <p style="font-size: 50px;color: #00004c;font-weight: bold;">Submitted Succesfully! </p>
    <script>
        var timer = setTimeout(function() {
            window.location='search.php'
        }, 500);
    </script>
    </center>
</body>
</html> -->