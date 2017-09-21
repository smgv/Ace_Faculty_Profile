  <?php

session_start();
if($_SESSION['uid'])
{

echo $_SESSION['uname'];
//session_destroy();









}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create Your Profile</title>
</head>
  <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
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
  @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
body {
    font: 12px 'Open Sans';
}
.form-control, .thumbnail {
    border-radius: 2px;
}
.btn-danger {
    background-color: #B73333;
}

/* File Upload */
.fake-shadow {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload #logo-id {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.img-preview {
    max-width: 100%;
}
button{
  width: 40%;
  height:50px;
  font-size: 20px; 
  border-radius: 15px;
  margin-left: 37%;
background-color: #00004c;
color: #fff;
}
  </style>

<body>
<!--faculty
<a href="logout.php">logout</a>-->
<div class="container">
<div class="row">
  <div class="col-md-4"><br>
  <img style="float: left;" src="img/logo1.png">
  </div>
  <div class="col-md-8">
    <h1 style="float: right;">Atharva College Of Engineering</h1>
  </div>  
</div>
  <div class="row">
    
    <hr />
<div class="col-md-4">
    <form action="logout.php" method="post">

<div class="form-group">
              <input type="hidden" class="form-control" id="name" value=" <?php echo $_SESSION['uid']; ?>" name="name" readonly="readonly" >
            </div>
      <button  id="btn1" name="preview">Logout</button><br><br><br>
  </form>
</div>
<div class="col-md-4">
<form action="view.php" method="post">

<div class="form-group">
              <input type="hidden" class="form-control" id="name" value=" <?php echo $_SESSION['uid']; ?>" name="name" readonly="readonly" >
            </div>
      <button   id="btn1" name="preview">Preview</button><br><br><br>
  </form>
</div>
<div class="col-md-4">
<form action="update.php" method="post">

<div class="form-group">
              <input type="hidden" class="form-control" id="name" value=" <?php echo $_SESSION['uid']; ?>" name="name" readonly="readonly" >
            </div>
      <button id="btn1" name="update">Update</button><br><br><br>
  </form>
</div><br>
      <form role="form" method="post" action="pdf.php" enctype="multipart/form-data">
    <div class="col-md-4 ">
        <div class="form-group">
              <div class="main-img-preview">
                <img class="thumbnail img-preview" src="img/avatar2.png" title="Preview Logo">
              </div>
              <div class="input-group">
                <input style="width: 35%;" id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
               
                  <div class="fileUpload btn btn-danger fake-shadow">
                    <span><i class="glyphicon glyphicon-upload"></i> Upload Photo</span>
                    <input id="logo-id" name="image" type="file" class="attachment_upload" required>
                  </div>
              </div>
              <p class="help-block">* Upload your Photo</p>
            </div>
    </div>
    <div class="col-md-8">
     


              
              <div class="form-group">
              <input type="text" class="form-control" id="uid" value=" <?php echo $_SESSION['uid']; ?>" name="uid" readonly="readonly" >
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="true">
            </div>
            <div class="form-group">           
              <input type="text" class="form-control" id="dsg" placeholder="Designation" name="dsg">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="dept" placeholder="Department" name="dept">
            </div>
              <div class="form-group">
              <input type="text" class="form-control" id="doj" placeholder="Date of Joining Institution(dd/mm/yyyy)" name="doj">
            </div>
             <div class="form-group">
              <textarea style="height: 100px;" type="text" class="form-control" id="address" placeholder="Address" name="address"></textarea>
            </div>
             <div class="form-group">
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
             <div class="form-group">
              <input maxlength="10" size="10" type="tel" class="form-control" id="cno" placeholder="Contact Number" name="cno">
            </div>
          

            <h4>Experience:</h4>
            <div class="row">

                          <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="10th" placeholder="Teaching" name="teach">
            </div>
              
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="12th" placeholder="Industry" name="inds">
            </div>
              </div>
              <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="grad" placeholder="Research" name="research">
            </div>
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="pgrad" placeholder="Admin" name="admin">
            </div>
              </div>
            </div>


            <h4>Qualification:</h4>
            <div class="row">

                          <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="10th" placeholder="Graduation" name="ssc">
            </div>
              
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="12th" placeholder="Post Graduation" name="hsc">
            </div>
              </div>
              <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="grad" placeholder="PHD" name="grad">
            </div>
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="pgrad" placeholder="Others" name="pgrad">
            </div>
              </div>
            </div>
             <div class="form-group">           
              <input type="text" class="form-control" id="pfolio1" placeholder="Department Level Portfolio" name="pfolio1">
            </div>
             <div class="form-group">           
              <input type="text" class="form-control" id="pfolio2" placeholder="College Level Portfolio" name="pfolio2">
            </div>

 <h4>Scale:</h4>  
            <div class="form-group">           
              <input type="text" class="form-control" id="scope" placeholder="Skills you have...." name="skills">
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="scope" placeholder="Salary" name="salary">
            </div>
            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Acheivement of the Year..." name="achievements">
            </div>

<h4>Result:</h4>
            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result1">
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result2">
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result3">
            </div>


            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result4">
            </div>

            
            <div class="form-group" id="radio">
              <label style="font-size:20px;">Status:&nbsp&nbsp</label>
              <input type="radio" name="status" value="working" id="work">&nbsp
              <label style="font-size:20px; color:green;">Working</label>&nbsp&nbsp&nbsp
              <input type="radio" name="status" value="left" id="left">&nbsp
              <label style="font-size:20px; color:red;">Left</label>&nbsp&nbsp&nbsp
            </div>
           
           <div class="form-group">           
              <input type="text" class="form-control" id="leave" placeholder="Leave Record" name="leave">
            </div>

            
             <button style="width: 20%;height:50px;font-size: 20px; border-radius: 15px;margin-left: 37%;" class="w3-white" id="btn" name="submit">Submit</button><br><br><br>

   
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });
});



</script>
</body>
</html>



