
<?php
ob_start();
session_start();

/*if($_SESSION['uid'])
{

  header('location:profile.php');
}
*/
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Faculty Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
  .modal-header, h4, .close {
      background-color: #00004c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  body{

    background: blue; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#3333ff, #4d4dff); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(red, yellow); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(red, yellow); /* For Firefox 3.6 to 15 */
    background: linear-gradient( to right,cyan,#e8f3f8,cyan); /* Standard syntax */

  }
  h1{
    font-family:"Times New Roman", Times, serif;
    color: #ff8000;
    font-size: 50px;
    font-weight: bold;
  }
  .w3-card-4:hover{
  box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 black;
  }

/* Desktops and laptops ----------- */
@media only screen
and (min-width : 1224px) {
/* STYLES GO HERE */
body{
  margin: 0;
  
}
#one1{
  margin-right: 10%;
  margin-top: 0;
}


#one{
margin-left:2px;
}


.w3-container{
  width:auto;
  height: auto;
}

h3 {
  font-size:20px;
  font-family:"Times New Roman", Times, serif;
}

}


@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px)  { 

#one1{
 margin-top: 0;
  margin-bottom: 5%;
  margin-left:9%;
}

h1{
  font-size:30px;
}
 .modal-content{
  margin-left:9%;
}

h4{
  font-size:50%;
}

}


@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px)  { 

#one1{
 
margin-right:10%;
}

.w3-button{
 font-size: 10px;
 align-content: center;
 width:40%;
}

.w3-card-4 .w3-dark-grey{
  width: 100%;
}

.w3-container {
    width: 100%;
    height: 150%;
    padding: 5px;
}

.w3-center img {
    width: 100px;
}


h1 {
  font-size:30px;
}

h3 {
  font-size:15px;
}

.w3-center img{
  width:400px;
}
}
  
  </style>

  </head>
  <body>
 <div class="row"><br>
  <div class="col-sm-12 text-center"> 
 
<img src="img/logo1.png"><h1>Atharva College Of Engineering</h1>
</div>
</div>
    <br><br><br><br><br><br>

  <div class="row" >
   
<div class="col-sm-2"></div>
    <div class="col-sm-3">
      <div class="w3-container" id="one1">
  <div class="w3-card-4 w3-dark-grey" style="width:90%;border-radius: 15px;">
 <div class="w3-container w3-center">
      <h3 style="font-family: Georgia, serif;">ADMIN</h3>
      <img src="img/avatar3.png" alt="Avatar" style="width:80%;border-radius: 15px;">
           <div class="w3-section">
        <button style="width: 40%;border-radius: 15px;" class="w3-button w3-green" id="myBtn">Login</button>   
      </div>
    </div>
  </div>
</div>
    </div>


      <div class="col-sm-3">
      <div class="w3-container" id="one1">
 

  <div class="w3-card-4 w3-dark-grey" style="width:90%;border-radius: 15px;">

    <div class="w3-container w3-center">
      <h3 style="font-family: Georgia, serif;">FACULTY</h3>
      <img src="img/avatar2.png" alt="Avatar" style="width:80%;border-radius: 15px;">
     

      <div class="w3-section">
        <button style="width: 40%;border-radius: 15px;" class="w3-button w3-green" id="myBtn1">Login</button>
        
      </div>
    </div>

  </div>
</div>
    </div>
     <div class="col-sm-3">
      <div class="w3-container" id="one1">
 

  <div class="w3-card-4 w3-dark-grey" style="width:90%;border-radius: 15px;">

    <div class="w3-container w3-center">
      <h3 style="font-family: Georgia, serif;">HR</h3>
      <img src="img/avatar4.png" alt="Avatar" style="width:80%;border-radius: 15px;">
     

      <div class="w3-section">
        <button style="width: 40%;border-radius: 15px;" class="w3-button w3-green" id="myBtn2">Login</button>
        
      </div>
    </div>

  </div>
</div>
    </div>
    
    </div>
    </div>

     <!-- Modal1 -->
  <div  class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="height: 80%;width: 80%;" class="modal-content" id="modal">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="text"> Admin Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         

<!------- Validation ------>

         <form role="form" action="" method="post">

            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" name="username">
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" name="password">
            </div>
           
              <button type="submit" class="btn btn-success btn-block" value="submit" name="submit1">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn  btn-default pull-left" data-dismiss="modal">Cancel</button>
          
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>


    <!-- Modal2 -->
  <div  class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="height: 80%;width: 80%;" class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4> Faculty Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">

                   <form role="form"  action="" method="post">

            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" name="username">
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" name="password">
            </div>
           
              <button type="submit" class="btn btn-success btn-block" value="submit" name="submit2">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn  btn-default pull-left" data-dismiss="modal">Cancel</button>
          
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>


    <!-- Modal -->
  <div  class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="height: 80%;width: 80%;" class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4> HR Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
                 
                  <form role="form" action="" method="post">

            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" name="username">
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password" name="password">
            </div>
           
              <button type="submit" class="btn btn-success btn-block" value="submit" name="submit3">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn  btn-default pull-left" data-dismiss="modal">Cancel</button>
          
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div><br>

<!-- <marquee style="color:black; background-color: yellow; padding: 2px;"><h3> In maintenance Mode Please Don't try to operate It. Thank You For your Convinience!!!!.</h3></marquee> -->
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal1").modal();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#myModal2").modal();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myBtn2").click(function(){
        $("#myModal3").modal();
    });
});
</script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

   <!-- 

<?php
/*
include('dbcon.php');

if(isset($_POST['submit']))
{

  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * FROM `admin` WHERE `username` ='$username' AND `password`='$password'";
  $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);

if($row<1)
{ ?>
<script>
alert('doesnot match'); 
window.open('index.php','_self');
</script>
<?php
}

else{

  $data=mysqli_fetch_assoc($run);

  $id=$data['id'];
  $name=$data['username'];

  $_SESSION['uid']=$id;
  $_SESSION['uname']=$name;

  echo  $_SESSION['uid'];
    echo  $_SESSION['uname'];
 //header('location:profile.php');



}







}

*/?>

Modal -->

   

<?php

include('dbcon.php');

if(isset($_POST['submit1']))
{

  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * FROM `admin` WHERE `username` ='$username' AND `password`='$password'";
  $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);

if($row<1)
{ ?>
<script>
alert('doesnot match'); 
window.open('index.php','_self');
</script>
<?php
}

else{

  $data=mysqli_fetch_assoc($run);

  // $id=$data['id'];
  // $name=$data['username'];

  // $_SESSION['uid']=$id;
  // $_SESSION['uname']=$name;

  // echo  $_SESSION['uid'];
  //   echo  $_SESSION['uname'];
 header('location:search.php');
 }
}




if(isset($_POST['submit2']))
{

  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * FROM `faculty` WHERE `uid` ='$username' AND `password`='$password'";
  $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);

if($row<1)
{ ?>
<script>
alert('doesnot match'); 
window.open('index.php','_self');
</script>
<?php
}

else{

  $data=mysqli_fetch_assoc($run);

  $uid=$data['uid'];
  $name=$data['username'];

  $_SESSION['uid']=$uid;
  $_SESSION['uname']=$name;

  echo  $_SESSION['uid'];
    echo  $_SESSION['uname'];
 header('location:profile2.php');
 }
}


if(isset($_POST['submit3']))
{

  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * FROM `hr` WHERE `username` ='$username' AND `password`='$password'";
  $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);

if($row<1)
{ ?>
<script>
alert('doesnot match'); 
window.open('index.php','_self');
</script>
<?php
}

else{

  $data=mysqli_fetch_assoc($run);

  // $uid=$data['uid'];
  $name=$data['username'];

  $_SESSION['uid']=$uid;
  $_SESSION['uname']=$name;

  // echo  $_SESSION['uid'];
  //   echo  $_SESSION['uname'];
 header('location:search_hr.php');
 }
}



?>

