<?php
require("configuration.php");

if (isset($_POST["student_register"])){

$student_slastname = $_POST["slastname"];
$student_sfirstname = $_POST["sfirstname"];
$student_smiddlename = $_POST["smiddlename"];
$student_slrn = $_POST["slrn"];
$student_spassword = $_POST["spassword"];
$student_sgradelevel = $_POST["sgradelevel"];
$student_ssection = $_POST["ssection"];
$student_sdateofbirth = $_POST["sdateofbirth"];
$student_sgender = $_POST["sgender"];
$student_accesscode = $_POST["saccesscode"];


$sql = ("INSERT INTO student_tbl (student_slastname, student_sfirstname, student_smiddlename, student_slrn, student_spassword, student_sgradelevel, student_ssection, student_sdateofbirth, student_sgender, student_accesscode)
VALUES ('$student_slastname', '$student_sfirstname', '$student_smiddlename', '$student_slrn', '$student_spassword', $student_sgradelevel, '$student_ssection',
'$student_sdateofbirth',
'$student_sgender', $student_accesscode)");


mysqli_query($connection, $sql);
header("location: homepage.php");
exit;

}

if (isset($_POST["teacher_register"])){

$teacher_lastname = $_POST["lastname"];
$teacher_firstname = $_POST["firstname"];
$teacher_middlename = $_POST["middlename"];
$teacher_employeenumber = $_POST["employeenumber"];
$teacher_password = $_POST["password"];
$teacher_dateofbirth = $_POST["dateofbirth"];
$teacher_gender = $_POST["gender"];
$teacher_accesscode = $_POST["accesscode"];

$sql = ("INSERT INTO teacher_tbl (teacher_lastname,
teacher_firstname,
teacher_middlename,
teacher_employeenumber,
teacher_password,
teacher_dateofbirth,
teacher_gender,
teacher_accesscode)
VALUES ('$teacher_lastname',
'$teacher_firstname',
'$teacher_middlename',
'$teacher_employeenumber',
'$teacher_password',
'$teacher_dateofbirth',
'$teacher_gender',
'$teacher_accesscode'); ");

mysqli_query($connection, $sql) or die(mysqli_error($connection));


foreach($_POST as $key => $value) {
    if (strpos($key, "chk_subj_") === 0 && $value == "on") {

        $subject_code = str_replace("chk_subj_", "", "$key");

        $sql = ("INSERT INTO teacher_subj_tbl (teacher_employeenumber, subject_code) VALUES ('$teacher_employeenumber','$subject_code'); ");

        mysqli_query($connection, $sql) or die(mysqli_error($connection));
    }

}

//echo $sql;

header("location: homepage.php");
exit;
}

?>

<!DOCTYPE html>
<html>
<title>HOMEPAGE</title>
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


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
#sjhs{
  text-shadow: 2px 2px #774747;
}
.carousel-indicators li {
  visibility: hidden;
}
</style>

<body class="w3-theme-l5">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" style="padding-top: 10px;">

 <div class="w3-top w3-theme-d4" style="height: 125px; width: 163px; padding:0% 0 2% 0; border-bottom: 5px solid red;"><img src="logopng.png" style="height: 110px; width: 153px; margin: 7px 0px 0px 0px;"> </div>

  <p id="sjhs" class="w3-bar-item w3-theme-d4" style="padding-left: 180px; padding-right: 30px; border-bottom: 5px solid red; font-size: 20px;"><cite>SAN JUAN HIGH SCHOOL</cite></p>

  <div class="w3-dropdown-hover w3-hide-small w3-right" style="margin-right: 10px;">
    <button id="account" class="w3-button w3-padding-large" title="Register" style="width: 130px;"><i style="text-shadow: 2px 2px #774747;">Register</i><span class="w3-badge w3-right w3-small"></span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:100px">
      <a href="#consumergood" data-toggle="modal" class="w3-bar-item w3-button" style="font-size: 15px;">Student</a>
      <a href="#consumergoods" data-toggle="modal" class="w3-bar-item w3-button" style="font-size: 15px;">Teacher</a>
    </div>
  </div>
  
 </div>

</div>

<!--MODAL FOR TEACHER-->
  <div class="modal fade" id="consumergoods" data-target="#consumergoods" >
            <div class="modal-dialog">
                        <!-- Modal content-->
                <div class="modal-content">
                          <div class="modal-header orange">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="text-align: left;"><img src="logopng.png" alt="Mountain View" style="width:45px;height:35px;"> Registration Form (Teacher)</h4>
                          </div>
                            <div class="modal-body" style="background-color: white;">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="homepage.php">
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="lastname" placeholder="Last Name" class="form-control" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="firstname" placeholder="First Name" class="form-control" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Middle Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="middlename" placeholder="Middle Name" class="form-control" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Employee Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="employeenumber" placeholder="Employee Number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="dateofbirth" class="form-control" placeholder="mm-dd-yyyy">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Gender</label>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="gender" placeholder="male/female" class="form-control" style="width: 420px; position: relative; left: -20px;">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Access Code</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="accesscode" placeholder="Access Code" class="form-control" autofocus>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                
                                <div class="form-group">
                                  <?php
                                    $sqlsubject = "SELECT * FROM grade_subj_tbl";
                                    $sql = mysqli_query($connection, $sqlsubject);
                                    while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                                      $grade = $fetchsubject["grade"];
                                      $subject_title = $fetchsubject["subject_title"];
                                      
                                    ?>

                                    <input type="checkbox" name="<?php echo "chk_subj_".$fetchsubject["subject_code"]; ?>" style="width: 50px; transform: scale(1.5); margin-left: 20px;"><label style="font-size: 15px;"><?php echo $fetchsubject["grade"]; ?></label>
                                    <label  style="font-size: 15px;"><?php echo $fetchsubject["subject_title"]; ?></label><br>
                                    <?php } ?>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                         <a href="#subjects" data-toggle="modal" class="btn btn-danger btn-block" name="subject_register">Subjects</a>
                                        <button type="submit" class="btn btn-danger btn-block" id="teacher_register" name="teacher_register">Register</button>
                                    </div>
                                </div>
                            </form> <!-- /form -->
                            </div>
                                  <div class="modal-footer">
                                  </div>
                </div>
            </div>
        </div><!--END OF MODAL TEACHER-->

                <!--REGISTRATION OF SUBJECTS MODAL-->
        <div class="modal fade" id="subjects" data-target="#subjects">
          <div class="modal-dialog">
          <!-- Modal content-->
              <div class="modal-content">
              <div class="modal-header orange">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="text-align: left;"><img src="logopng.png" alt="Mountain View" style="width:45px;height:35px;"> Subjects</h4>
              </div>
                <div class="modal-body" style="background-color: white;">
                <form class="form-horizontal" action="" role="form" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <?php
                  $sqlsubject = "SELECT * FROM grade_subj_tbl";
                  $sql = mysqli_query($connection, $sqlsubject);
                  while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                    $grade = $fetchsubject["grade"];
                    $subject_title = $fetchsubject["subject_title"];
                    
                  ?>

                  <input type="checkbox" name="<?php echo "chk_subj_".$fetchsubject["subject_code"]; ?>" style="width: 50px; transform: scale(1.5); margin-left: 20px;"><label style="font-size: 15px;"><?php echo $fetchsubject["grade"]; ?></label>
                  <label  style="font-size: 15px;"><?php echo $fetchsubject["subject_title"]; ?></label><br>
                  <?php } ?>
                </div>
                </div>
                <!-- /.form-group -->
                </form> <!-- /form -->
             
            <div class="modal-footer"><button id="subject_submit" type="submit" name="subject_submit" class="btn btn-danger btn-block"  onclick="Subjects();" >Submit</button>
            </div>
            </div>
          </div>
        </div>
<!--END OFREGISTRATION OF SUBJECTS MODAL-->



        <!--REGISTRATION OF STUDENT MODAL-->
        <div class="modal fade" id="consumergood" data-target="#consumergood">
          <div class="modal-dialog">
          <!-- Modal content-->
              <div class="modal-content">
              <div class="modal-header orange">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="text-align: left;"><img src="logopng.png" alt="Mountain View" style="width:45px;height:35px;"> Registration Form (Student)</h4>
              </div>
                <div class="modal-body" style="background-color: white;">
                <form class="form-horizontal" action="" role="form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                <input type="text" name="slastname" placeholder="Last Name" class="form-control" autofocus>
                </div>
                </div>

                <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                <input type="text" name="sfirstname" placeholder="First Name" class="form-control" autofocus>
                </div>
                </div>

                <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Middle Name</label>
                <div class="col-sm-9">
                <input type="text" name="smiddlename" placeholder="Middle Name" class="form-control" autofocus>
                </div>
                </div>

                <div class="form-group">
                <label for="email" class="col-sm-3 control-label">LRN</label>
                <div class="col-sm-9">
                <input type="text" name="slrn" placeholder="LRN" class="form-control">
                </div>
                </div>

                <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                <input type="password" name="spassword" placeholder="Password" class="form-control">
                </div>
                </div>

                <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Grade Level</label>
                <div class="col-sm-9">
                <input type="text" name="sgradelevel" placeholder="Grade Level" class="form-control">
                </div>
                </div>

                <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Section</label>
                <div class="col-sm-9">
                <input type="text" name="ssection" placeholder="Section" class="form-control">
                </div>
                </div>

                <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                <div class="col-sm-9">
                <input type="text" name="sdateofbirth" class="form-control" placeholder="mm-dd-yyyy">
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                <div class="row">
                <div class="col-sm-4">
                <label class="radio-inline">
                <input type="text" name="sgender" placeholder="male/female" class="form-control" style="width: 420px; position: relative; left: -20px;">
                </label>
                </div>
                </div>
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-3">Access Code</label>
                <div class="col-sm-6">
                <div class="row">
                <div class="col-sm-4">
                <label class="radio-inline">
                <input type="password" name="saccesscode" class="form-control" style="width: 420px; position: relative; left: -20px;">
                </label>
                </div>
                </div>
                </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                <button id="student_register" type="submit" name="student_register" class="btn btn-danger btn-block">Register</button>
                </div>
                </div>
                </form> <!-- /form -->
                </div>
            <div class="modal-footer">
            </div>
            </div>
          </div>
        </div>
<!--END OFREGISTRATION OF STUDENT MODAL-->



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px;">    


    <!-- Middle Column -->
<div id="Subjects" class="w3-col m7" style="margin-top: 40px; padding-left: 170px;">
    
          <!-- SUBJECTS SHOW -->
          <div id="Subjectview" class="w3-container w3-card-2 w3-white w3-round w3-margin" style=" height: 420px; width: 580px;"><br>

          <div class="w3-col m12" style="width: 550px;">
          <div class="w3-bar w3-theme-d4 w3-left-align" style="padding: 10px 10px 10px 10px;" >
          </div>
          </div>

            <div class="contentleft">
        <!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW-->
            <div id="myCarousel" class="carouselslide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" style="width: 550px;">
                <div class="item active">
                  <img src="school.jpg" alt="San Juan High School">
                </div>

                <div class="item">
                  <img src="classroom.jpeg" alt="Classrooms">
                </div>

                <div class="item">
                  <img src="library.jpg" alt="Library">
                </div>

                <div class="item">
                  <img src="laboratory.jpg" alt="Laboratory">
                </div>

                <div class="item">
                  <img src="computer.jpg" alt="Computer Laboratory">
                </div>

                <div class="item">
                  <img src="court.jpg" alt="Covered Court">
                </div>

                <div class="item">
                  <img src="garden.jpg" alt="Garden">
                </div>
              </div>
                <!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW--><!-- SLIDE SHOW-->
             </div>
          </div>
          <div class="w3-col m12" style="width: 550px;">
          <div class="w3-bar w3-theme-d4 w3-left-align" style="padding: 10px 10px 10px 10px;" >
          </div>
          </div>

          </div>   
</div>
     <!-- End Middle Column -->  

<!--Right Column -->
<div id="right"  class="w3-col m2" style="margin-top: 40px;">
      
      <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center" style="width: 400px; height: 419px; margin-top: 22px; margin-left: 90px;">
        <p><img src="logopng.png" style="width: 150px; height: 120px; margin-bottom: 70px;"></iframe></i></p>
                <div>
                <label for="firstName" class="col-sm-3 control-label">User ID</label>
                <div class="col-sm-9" style="margin-bottom: 5px;">
                    <input type="text" id="User ID" placeholder="User ID" class="form-control" style="width: 200px;">
                </div>
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9" style="margin-bottom: 5px;">
                    <input type="password" id="password" placeholder="Password" class="form-control" style="width: 200px;">
                </div>
                <div class="col-sm-9 col-sm-offset-3" style="margin-bottom: 5px;">
                    <a href="student/student.php" type="submit" class="btn btn-block w3-theme-d5" style="width: 200px;">Log - In</a>
                </div></div>

      </div>

      

      
    <!-- End Right Column -->
</div>



 


  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<div  class=" w3-theme-d5 w3-bottom">

<footer class="w3-container w3-theme-d3 w3-padding-16" style="margin-bottom: 10px;">
  <h5>&nbsp;</h5>
</footer>

<footer class="w3-container w3-theme-d5 w3-bottom">
  <p>&nbsp;</p>
</footer>
 </div>

<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}
/*
function Subjects() {
document.getElementById("teacher_register").disabled = false;
}*/
</script>


</body>
</html> 
