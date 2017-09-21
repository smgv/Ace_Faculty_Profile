<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
  UID:<br>
  <input type="text" name="uid" value="">
  <br>
  year:<br>
  <input type="text" name="year" value="">
  <br><br>
  pfolio:<br>
  <input type="text" name="pfolio" value="">
  <br><br>

  <input type="submit" name="submit" value="submit">
</form> 
<!-- <form action="viewpfolio.php" method ="post">
	    <input type="button" name="view" value="view">


</form>
 -->




</body>
</html>
<?php
error_reporting(E_ALL);

 $connect = mysqli_connect("localhost", "root", "root", "prof");  

if(isset($_POST['submit']))
{
$id=$_POST['uid'];
$year=$_POST['year'];
$pfolio=$_POST['pfolio'];


echo "$id";



$query="INSERT INTO `year` (`uid`, `$year`) VALUES ('$id','$pfolio')";

$run=mysqli_query($connect,$query);
 if($run)
 {

 	echo "done";
 } 
 $row=mysqli_num_rows($run);
 echo "$row";
    if ($row === 1) { 
//         /////insert the data if not existed///// 
//         // ...  
// // if(mysqli_num_rows($run)==1)
// // {


 $query2="UPDATE `year` SET `$year`='$pfolio' , WHERE `uid`=$id";
 $run2=mysqli_query($connect,$query2);

 }

}

// // if(isset($_POST['pfolio']))
// // {

// // $id=$_POST['uid'];

// // $query="";






// }






?>