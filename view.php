
<?php
include('dbcon.php');
session_start();
//$con = mysqli_connect('localhost','root','root','prof');
if(isset($_POST['preview']))
{  $uid=$_SESSION['uid'];



$query2="SELECT * FROM `faculty_profile` WHERE `uid`='$uid'"; 
$run2=mysqli_query($con,$query2);
$row=mysqli_fetch_assoc($run2);
}

?>













<!DOCTYPE html>
<html>
<head>
  <title>Preview File</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/blue.css" />
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
<!--[if IE 5]>
<link href="css/ie5.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script>
function myFunction() {
    window.print();
}
</script>


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
    padding: 10px;

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

  </style>

</head>


<body>

<form>
  
    <table id="profile">

        <tr>
          <th  style="border-bottom: 2px solid black;" colspan="2"><center><img src="img/logo1.png"></center></th>
          <th  style="border-bottom: 2px solid black;" colspan="8"><center><h1>Atharva College Of Engineering</h1><center></th>
        </tr>

        <tr>
          <td  colspan="2">Name Of the Faculty</td>
          <td  colspan="5"><?php  echo $row['name'];  ?> </td>
          <td  colspan="3" rowspan="4"><center><img  src= "<?php
echo $row['image'];

?>" width="200" height="200"></center></td>
        </tr>

        <tr>
          <td  colspan="2">Department</td>
          <td  colspan="5"><?php  echo $row['department'];   ?></td>
        </tr>

        <tr>
          <td  colspan="2">Designation</td>
          <td  colspan="2"><?php  echo $row['designation'];  ?></td>
<td  colspan="1">Salary</td>
<td  colspan="2"><?php  echo $row['salary'];  ?></td>
          
        </tr>


        <tr>
          <td  colspan="2">Date Of Joining Institustion</td>
          <td  colspan="5"><?php  echo $row['doj']; ?></td>
        </tr>

        <tr>
          <td colspan="2">Address</td>
          <td colspan="8"><?php echo  $row['address']; ?></td>
        </tr>

        <tr>
          <td colspan="2">Email Id</td>
          <td colspan="8"><?php echo $row['email']; ?></td>
        </tr>

        <tr>
          <td colspan="2">Contact Number</td>
          <td colspan="8"><?php echo $row['contact']; ?></td>
        </tr>

        <tr>
          <td colspan="2" rowspan="2">Qualification</td>
          <td colspan="2">Under Graduation</td>
          <td colspan="2">Post Graduation</td>
          <td colspan="2">PHD</td>
          <td colspan="2">Others</td>
        </tr>

        <tr>
          <td colspan="2"><?php echo $row['ssc']; ?></td>
          <td colspan="2"><?php echo $row['hsc']; ?></td>
          <td colspan="2"><?php echo $row['grad']; ?></td>
          <td colspan="2"><?php echo $row['p_grad']; ?></td>
        
        </tr>

        <tr>
          <td colspan="2" rowspan="2">Total Experience in</td>
          <td colspan="2">Teaching</td>
          <td colspan="2">Industry</td>
          <td colspan="2">Research</td>
          <td colspan="2">Admin</td>
          
        </tr>

        <tr>
          <td colspan="2"><?php echo $row['teach']; ?></td>
          <td colspan="2"><?php echo $row['inds']; ?></td>
          <td colspan="2"><?php echo $row['research']; ?></td>
          <td colspan="2"><?php echo $row['admin']; ?></td>
        
        </tr>

        
        <tr>
          <td colspan="2" rowspan="2">Portfolio</td>
          <td colspan="8"><?php  echo $row['p1']; ?>
          </td>
        </tr>

        <tr>
          <td colspan="8"><?php echo $row['p2']; ?>
          </td>
        </tr>

         <tr>
          <td colspan="2">Skills</td>
          <td colspan="8"><?php echo $row['skills']; ?></td>
          
        </tr>

       

        <tr>
          <td colspan="2">Achievements of the year</td>
          <td colspan="8"><?php echo $row['achievements']; ?></td>
          
        </tr>

        <tr>
          <td colspan="2">Status</td>
          <td colspan="8"><?php echo $row['status']; ?></td>
          
        </tr>

<tr>
          <td colspan="2" rowspan="4">Results:</td> 
          <td colspan="8"><?php echo $row['result1']; ?></td>
        </tr>

         <tr>
           
          <td colspan="8"><?php echo  $row['result2']; ?></td>
        </tr>

        <tr>
           
          <td colspan="8"><?php echo  $row['result3']; ?></td>
        </tr>
        <tr>
           
          <td colspan="8"><?php echo  $row['result4']; ?></td>
        </tr>


        <tr>
          <td colspan="2"> Special Leave Record</td>
          <td colspan="8"><?php echo $row['leave_record']; ?></td>
          
        </tr>



    </table>


<br><br><br>

</form>
<center>
<form method="post">
 
      
      <div class="col-sm-4"> <button style="background-color: #00004c;color: #fff;height: 15%;width: 50%;font-size: 16px; padding: 2px;" type="submit" name="logout">logout...</button></div>
      </form>


 </center>





</body>
</html>
<?php


if(isset($_POST['logout']))

{
session_start();

session_destroy();

header('location:index.php');
}
?>

