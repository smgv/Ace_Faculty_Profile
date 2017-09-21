
 <?php  
 include('dbcon.php');
mysqli_set_charset($con,'utf8');
 //$connect = mysqli_connect("localhost", "root", "root", "prof");  
 $query ="SELECT * FROM `faculty_profile` ORDER BY name  ASC";  
 $result = mysqli_query($con, $query);  

//$row=mysqli_fetch_assoc($result);
 ?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Faculty Profile</title>

    <!-- editable -->

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  






  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
 body{

    background: blue; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#3333ff, #4d4dff); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(red, yellow); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(red, yellow); /* For Firefox 3.6 to 15 */
    background: linear-gradient( to right,cyan,#e8f3f8,cyan); /* Standard syntax */

  }
  h3{
    font-family:"Times New Roman", Times, serif;
    color: #ff8000;
    font-size: 50px;
    font-weight: bold;
  }

  body {
    padding: 40px 0px; 
    overflow-x: hidden;  
}


table {
    border-collapse: collapse;
    width: 100%;
    box-shadow: 10px 10px 5px #888888, 10px 10px 5px #888888;
}

th, td {
    text-align: center;
    padding: 15px;
    font-size: 20px;
}

tr {background-color: #f2f2f2;
border-bottom: 0.5px solid black;}

th {
    background-color: blue;
    color: white;
    border-bottom: 2px solid black;
}

div.dataTables_wrapper div.dataTables_filter{
  font-size: 30px;
}
div.dataTables_wrapper div.dataTables_length label{
  font-size: 30px;
}
select.input-sm{
  height: 50px;
}
.input-sm{
  font-size: 20px;
}
.form-control{
  height: 40px;
  width: 80%;
}

</style>

</head>

<body>

 <div class="row"><br>
  <div class="col-sm-12 text-center"> 
 
<img src="img/logo1.png"><h1>Atharva College Of Engineering</h1><br>
<form action="logout.php" method="post">
         
          <button style="background-color: #00004c;color: #fff;height: 10%;width: 10%;font-size: 20px;" type="submit" name="submit">Logout</button>
          </form>
</div>
</div>
    <br><br>





<br>

<div class="col-sm-1"></div>

<div class="col-sm-10">

 <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>User Id</td>  
                                    <td>Name</td>  
                                    <td>Year of Joining</td>  
                                    <td>Department</td> 
                                    <td>Designation</td>
                                     <td>Status</td>    
                                    <td>Performance</td> 
                                    <td>Profile View</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr> <td>'.$row["uid"].'</td> 
                                    <td>'.$row["name"].'</td> 
                                    <td>'.$row["doj"].'</td>  
                                    <td>'.$row["department"].'</td>
                                    <td>'.$row["designation"].'</td> 
				    <td>'.$row["status"].'</td>  
                                   
                                    <td style="word-break:break-all; width:300px;">'.$row["performance"].'</td>  

                                         <td><a href="pdf1.php?id='.$row["name"]."&uid=".$row['uid']."&img=".$row['image']."&doj=".$row['doj']."&dept=".$row['department']."&addr=".rawurlencode($row['address'])."&email=".$row['email']."&cont=".$row['contact']."&ssc=".$row['ssc']."&hsc=".$row['hsc']."&grad=".$row['grad']."&pgrad=".$row['p_grad']."&p1=".$row['p1']."&p2=".$row['p2']."&per=".$row['performance']."&teach=".$row['teach']."&inds=".$row['inds']."&research=".$row['research']."&admin=".$row['admin']."&skills=".$row['skills']."&salary=".$row['salary']."&status=".$row['status']."&achievements=".$row['achievements']."&leave=".$row['leave_record']."&remarks=".$row['remarks']."&result1=".rawurlencode($row['result1'])."&result2=".rawurlencode($row['result2'])."&result3=".rawurlencode($row['result3'])."&result4=".rawurlencode($row['result4'])."&dsg=".$row['designation'].'">'.'Profile</a></td>
     </tr>  
                               ';  
                          }   

                          // "&per=".$row['performance'].
                          ?>  
                     </table>  
                </div>  </div>

                <div class="col-sm-1"></div>
</body>
</html>


 




 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 


