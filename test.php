<?php
session_start();
include('dbcon.php');
$name=$_SESSION['utest'];





 $query="SELECT * FROM `faculty_profile` WHERE name ='$name'";


  $run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);

 
echo "&nbsp";



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
          <td  colspan="5"><?php echo  $row['name']; ?> </td>
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
          <td  colspan="5"><?php  echo $row['designation'];  ?></td>
          
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
          <td colspan="2">Salary</td>
          <td colspan="8"><?php echo $row['salary']; ?></td>
          
        </tr>

        <tr>
          <td colspan="2">Achievements of the year</td>
          <td colspan="8"><?php echo $row['achievements']; ?></td>
          
        </tr>

        <tr>
          <td colspan="2">Status</td>
          <td colspan="8"><h4 style="color:green;"><?php echo $row['status']; ?></h4></td>
          
        </tr>

        <tr>
          <td colspan="2">Leave Record</td>
          <td colspan="8"><?php echo $row['leave_record']; ?></td>
          
        </tr>


        <tr>
          <td colspan="2">Remarks</td>
          <td colspan="8"><?php echo $row['remarks']; ?></td>
          
        </tr>

        <tr>
          <td colspan="2">Performance</td>
          <td colspan="8"><?php echo $row['performance']; ?></td>
          
        </tr>


    </table>





</form>
<center>
<div class="row>">
<div class="col-sm-6 col-md-6 col-xs-6">

<form action="search.php" method="post">
          <button style="background-color: #00004c;color: #fff;height: 5%;width: 10%;font-size: 18px;" type="submit" name="submit">Back</button>
          </form>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-6">

<form action="done.php" method="post">
<h2>Remarks</h2>

          <input style="width: 30%; height: 5%;"border: 2px solid #00004c; type="text" name="remarks" value="<?php echo $row['remarks'];   ?>" placeholder="&nbsp&nbsp Remarks...."><br><br>
         
          


<h2>Performance</h2>

          <input style="width: 30%; height: 5%;"border: 2px solid #00004c; type="text" name="perform" value="<?php echo $row['performance'];   ?>" placeholder="&nbsp&nbsp Performance....."><br><br>
          <button style="background-color: #00004c;color: #fff;height: 5%;width: 10%;font-size: 18px;" type="submit" name="submit">Submit</button>
          </form>
          </div>
          </div>
          </center>
</body>
</html>


