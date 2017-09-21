<?php
session_start();
include('dbcon.php');
//$con = mysqli_connect('localhost','root','','prof');
$id=$_GET['id'];
$uid=$_GET['uid'];
$dsg=$_GET['dsg'];
$doj=$_GET['doj'];
$img=$_GET['img'];
$p1=$_GET['p1'];
$p2=$_GET['p2'];
$addr=$_GET['addr'];
//$remarks=$_GET['remarks'];
$ssc=$_GET['ssc'];
$hsc=$_GET['hsc'];
$grad =$_GET['grad'];
$pgrad =$_GET['pgrad'];
$dept=$_GET['dept'];
$email=$_GET['email'];
$cont=$_GET['cont'];
//$performance=$_GET['per'];
$teach=$_GET['teach'];
$inds=$_GET['inds'];
$research=$_GET['research'];
$admin=$_GET['admin'];
$skills=$_GET['skills'];
$salary=$_GET['salary'];
$achievements=$_GET['achievements'];
$status=$_GET['status'];
$leave=$_GET['leave'];
$result1=$_GET['result1'];
$result2=$_GET['result2'];
$result3=$_GET['result3'];
$result4=$_GET['result4'];

echo "&nbsp";

$_SESSION['nm'] = $id;

$query2="SELECT * FROM `faculty_profile` WHERE `uid`='$uid' "; 
$run2=mysqli_query($con,$query2);
$row=mysqli_fetch_assoc($run2);


?>






<!DOCTYPE html>
<html>
<head>
	<title>Preview File</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->



<style type="text/css">

table, td, th{
	border: 5px solid black;
	
}

#profile {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#profile td, #profile th {
    border: 1px solid #ddd;
    padding: 8px;
}

h1{
    font-family:"Times New Roman", Times, serif;
    color: #ff8000;
    font-size: 50px;
    font-weight: bold;
  }

#profile td {
  font-size:20px;
}

#profile th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background: linear-gradient( to right,cyan,#e8f3f8,cyan);
    color: white;
}
#profile{
  width:80%;
  height:80%;
  margin-left:10%;
}

input[placeholder]{
  font-size: 20px;
}




/* Desktops and laptops ----------- */
@media only screen
and (min-width : 1224px) {
/* STYLES GO HERE */
#profile{
  width:90%;
  margin-left:5%;
  height: auto;
}

}

	</style>

</head>


<body>

<form style="margin-left: 5%;margin-right: 5%;">
  
    <table id="profile">

        <tr>
          <th  style="border-bottom: 3px solid black;" colspan="2"><center><img src="img/logo1.png"></center></th>
          <th  style="border-bottom: 3px solid black;" colspan="8"><center><h1>Atharva College Of Engineering</h1><center></th>
        </tr>

        <tr>
          <td  colspan="2">Name Of the Faculty</td>
          <td  colspan="5"><?php echo  $id; ?> </td>
          <td  colspan="3" rowspan="4"><center><img  src= "<?php
echo $img;

?>" width="200" height="200"></center></td>
        </tr>

        <tr>
          <td  colspan="2">Department</td>
          <td  colspan="5"><?php  echo $dept;   ?></td>
        </tr>

        <tr>
          <td  colspan="2">Designation</td>
          <td  colspan="2"><?php  echo $dsg;  ?></td>
<td  colspan="1">Salary</td>
<td  colspan="2"><?php  echo $salary;  ?></td>
          
        </tr>


        <tr>
          <td  colspan="2">Date Of Joining Institution</td>
          <td  colspan="5"><?php  echo $doj; ?></td>
        </tr>

        <tr>
          <td colspan="2">Address</td>
          <td colspan="8"><?php echo  $addr; ?></td>
        </tr>

        <tr>
          <td colspan="2">Email Id</td>
          <td colspan="8"><?php echo $email; ?></td>
        </tr>

        <tr>
          <td colspan="2">Contact Number</td>
          <td colspan="8"><?php echo $cont; ?></td>
        </tr>

        <tr>
          <td colspan="2" rowspan="2">Qualification</td>
          <td colspan="2">Under Graduation</td>
          <td colspan="2">Post Graduation</td>
          <td colspan="2">PHD</td>
          <td colspan="2">Others</td>
        </tr>

        <tr>
          <td colspan="2"><?php echo $ssc; ?></td>
          <td colspan="2"><?php echo $hsc; ?></td>
          <td colspan="2"><?php echo $grad; ?></td>
          <td colspan="2"><?php echo $pgrad; ?></td>  
        </tr>

      <tr>
          <td colspan="2" rowspan="2">Total Experience in years</td>
          <td colspan="2">Teaching</td>
          <td colspan="2">Industry</td>
          <td colspan="2">Research</td>
          <td colspan="2">Admin</td>
        </tr>

        <tr>
          <td colspan="2"><?php echo $teach; ?></td>
          <td colspan="2"><?php echo $inds; ?></td>
          <td colspan="2"><?php echo $research; ?></td>
          <td colspan="2"><?php echo $admin; ?></td>
        </tr>

       

        <tr>
          <td colspan="2" rowspan="2">Portfolio</td>
          <td colspan="8"><?php  echo $p1; ?></td>
        </tr>

        <tr>
          <td colspan="8"><?php  echo $p2; ?>
          </td>
        </tr>

 <tr>
          <td colspan="2">Skills</td>
          <td colspan="8"><?php echo $skills; ?></td>
          
        </tr>

       

        <tr>
          <td colspan="2">Achievements of the year</td>
          <td colspan="8"><?php echo $achievements; ?></td>
          
        </tr>

        <tr>
          <td colspan="2">Status</td>
          <td colspan="8"><h4 style="color:green;"><?php echo $status; ?></h4></td>
          
        </tr>
 <tr>
          <td colspan="2" rowspan="4">Results:</td> 
          <td colspan="8"><?php echo $result1; ?></td>
        </tr>

         <tr>
           
          <td colspan="8"><?php echo $result2; ?></td>
        </tr>

        <tr>
           
          <td colspan="8"><?php echo $result3; ?></td>
        </tr>
        <tr>
           
          <td colspan="8"><?php echo $result4; ?></td>
        </tr>

        <tr>
          <td colspan="2"> Special Leave Record </td>
          <td colspan="8"><?php echo $leave; ?></td>
          
        </tr>

        




    </table>





</form>
<center>
<div class="row>">
<div class="col-sm-6 col-md-6 col-xs-6">

<form action="search_hr.php" method="post">
          <button style="background-color: #00004c;color: #fff;height: 5%;width: 10%;font-size: 18px;" type="submit" name="submit">Back</button>
          </form>
          </center>
</body>
</html>


