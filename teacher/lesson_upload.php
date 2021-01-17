<?php


$target_dir = "lesson_uploads/";
$target_file = $target_dir . basename($_FILES["lesson_upload"]["name"]);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

move_uploaded_file($_FILES["lesson_upload"]["tmp_name"], $target_file);


?>

<!DOCTYPE html>
<html>
<head>
	<title>File Uploaded</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
#sjhs{
  text-shadow: 2px 2px #774747;
}
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}	
	
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" id="sjhs" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right" ></i>  SAN JUAN HIGH SCHOOL</a>

  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button id="account" class="w3-button w3-padding-large" title="Notifications" style="width: 130px;  text-shadow: 2px 2px #774747;"><i class="fa fa-user"></i><span class="w3-badge w3-right w3-small"></span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:100px">
      <a href="C:\Users\jazper\Desktop\softwen/homepage.php" class="w3-bar-item w3-button" style="font-size: 15px;">Log-out</a>
      <a href="#" class="w3-bar-item w3-button" style="font-size: 15px;">help</a>
    </div>
  </div>


 </div>

</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white" style="margin-bottom: 173px;">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="avatar.jpg" class="w3-circle" style="height:106px;width:106px"></p>
         <hr>
         <p><i class="fa fa-pencil-square fa-fw w3-margin-right w3-text-theme"></i> Name</p>
         <p><i class="fa fa-list-alt fa-fw w3-margin-right w3-text-theme"></i> Subjects Teaching</p>
         <p><i class="fa fa-group fa-fw w3-margin-right w3-text-theme"></i> Class Advicy</p>
        </div>
      </div>
      <br>
      

      
    
    <!-- End Left Column -->
    </div>

    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            &nbsp;<p class="fa fa-map" style="font-size: 25px; margin: 5px 5px 5px 5px; text-shadow: 2px 2px #774747;"> Dashboard</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Middle Column -->
    <div class="w3-col m7">
    <div>&nbsp;</div><br>
                  <div class="w3-container w3-card-2 w3-white w3-round" style="margin-left: 20px; width: 730px; height: 150px;"><br>
                  	<label style="font-size: 20px;"><?php echo "The file is successfully uploaded: " . $_FILES["lesson_upload"]["name"] . "!"; ?></label>
                  	<a href="teacher.php" class="btn w3-right w3-button w3-theme-l1" style="font-family: Georgia; margin-top: 80px; width: 100px; height: 33px; font-size: 15px;"> DONE </a>
              		</div>
</div>


    <!-- Right Column -->
<div id="right"  class="w3-col m2">
      
      <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
        <p><img src="logopng.png" style="width: 150px; height: 120px;"></iframe></i></p>
      </div><br>

     
      
    <!-- End Right Column -->
</div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<div  class=" w3-theme-d5">

<footer class="w3-container w3-theme-d3 w3-padding-16" >
  <h5>&nbsp;</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>&nbsp;</p>
</footer>
 </div>

</body>
</html>