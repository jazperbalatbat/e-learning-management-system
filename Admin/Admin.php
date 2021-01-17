<?php
require("configuration.php");

if (isset($_POST["admin_subjectsidebar_tbl_submit"])){

$admin_subjectsidebar_tbl_subjectcode = $_POST["subjectcode"];
$admin_subjectsidebar_tbl_subjecttitle = $_POST["subjecttitle"];
$admin_subjectsidebar_tbl_subjectclass = $_POST["subjectclass"];


$sql = ("INSERT INTO admin_subjectsidebar_tbl (admin_subjectsidebar_tbl_subjectcode, admin_subjectsidebar_tbl_subjecttitle, admin_subjectsidebar_tbl_subjectclass)

VALUES ('$admin_subjectsidebar_tbl_subjectcode', '$admin_subjectsidebar_tbl_subjecttitle', '$admin_subjectsidebar_tbl_subjectclass')");
mysqli_query($connection, $sql);
header("location: admin.php");
exit;

}

if(isset($_POST["admin_classsidebar_tbl_submit"])){

$admin_classsidebar_tbl_section = $_POST["classsection"];
$admin_classsidebar_tbl_description = $_POST["classdescription"];

$sql = ("INSERT INTO admin_classsidebar_tbl (admin_classsidebar_tbl_section, admin_classsidebar_tbl_description) 
  VALUES ('$admin_classsidebar_tbl_section','$admin_classsidebar_tbl_description')");
mysqli_query($connection, $sql);
header("location: admin.php");
exit;
}

if(isset($_POST["admin_teacherclasssidebar_tbl_submit"])){

$admin_teacherclasssidebar_tbl_select = $_POST["selectclass"];
$admin_teacherclasssidebar_tbl_add = $_POST["addteacher"];

$sql = ("INSERT INTO admin_teacherclasssidebar_tbl (admin_teacherclasssidebar_tbl_select, admin_teacherclasssidebar_tbl_add) 
  VALUES ('$admin_teacherclasssidebar_tbl_select','$admin_teacherclasssidebar_tbl_add')");
mysqli_query($connection, $sql);
header("location: admin.php");
exit;
}

?>

<!DOCTYPE html>
<html>
<title>ADMIN</title>
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

<body class="w3-theme-l5">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <i id="sjhs" class="w3-bar-item w3-padding-large w3-theme-d4">  ADMIN</i>
  <i id="sjhs" class="w3-bar-item w3-padding-large w3-theme-d4" style="margin-left: 5px;">  SAN JUAN HIGH SCHOOL</i>

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
    <div class="w3-col m3" style="position: relative; left: -25px; top: -30px;">
      <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center" style="width: 294px;">
        <p><img src="logopng.png" style="width: 150px; height: 120px;"></iframe></i></p>
      </div>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round" style="width: 293px;">
        <div class="w3-white">

          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Subjects<i class="glyphicon glyphicon-chevron-down fa-fw" style="margin-left: 137px;"></i></button>
          <div id="Demo1" class="w3-hide w3-container w3-theme-l4"  style="padding-top: 0px;">

         <br>
             <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="AddSubject()">Add Subject</button>
                  <button class="w3-button w3-block w3-theme-l4 w3-left-align" style="margin-bottom: 10px;" onclick="SubjectReport()">Subject Report</button>
          </div>

          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Class<i class="glyphicon glyphicon-chevron-down fa-fw" style="margin-left: 158px;"></i></button>
          <div id="Demo2" class="w3-hide w3-container w3-theme-l4"  style="padding-top: 0px;">

         <br>
             <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="AddClass()">Add Class</button>
                  <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="ClassReport()">Class Reports</button>
                  <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="AddTeacherClass()">Add Teacher Class</button>
                  <button class="w3-button w3-block w3-theme-l4 w3-left-align" style="margin-bottom: 10px;" onclick="TeacherClassReport()">Teacher Class Report</button>
          </div>

          <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Student<i class="glyphicon glyphicon-chevron-down fa-fw" style="margin-left: 144px;"></i></button>
          <div id="Demo4" class="w3-hide w3-container w3-theme-l4"  style="padding-top: 0px;">

         <br>
             <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="AddStudent()">Add Student</button>
                  <button class="w3-button w3-block w3-theme-l4 w3-left-align" style="margin-bottom: 10px;" onclick="StudentReport()">Student Reports</button>
          </div>

          <button onclick="myFunction('Demo5')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Teacher<i class="glyphicon glyphicon-chevron-down fa-fw" style="margin-left: 142px;"></i></button>
          <div id="Demo5" class="w3-hide w3-container w3-theme-l4"  style="padding-top: 0px;">

         <br>
             <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="AddUser()">Add Teacher</button>
                  <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="UserReport()" style="margin-bottom: 10px;" >Teacher Reports</button>
          </div>

        </div>      
      </div>
      <br><br>
    <!-- End Left Column -->
    </div>

    <!-- Middle Column -->
    <div class="w3-col m7"><div>&nbsp;</div>

<!--Subject Sidebar-->
<div id="AddSubject" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; position: relative; left: -30px; top: -33px; display: none; width: 950px;">
    <div class="w3-row-padding ">

    <button onclick="close_AddSubject()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> ADD NEW SUBJECT FORM</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Subject Management</h6>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               <br>
               <form role="form" method="POST" enctype="multipart/form-data" action="admin.php">
                <p style="display: inline-block; margin-right: 50px;">Subject Code</p><input type="text" name="subjectcode" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 102px;">Title</p><input type="text" name="subjecttitle" style="width: 400px;"></input><br><br>

                <p style="display: inline-block; margin-right: 59px;">Select Grade</p>

                <select name="subjectclass" class="form-control" id="sel1" style="width: 402px; display: inline-block; position: relative; left: -12px;">
                  <option>Select Grade Level</option>
                  <option value="Grade Seven">Grade Seven</option>
                  <option value="Grade Eight">Grade Eight</option>
                  <option value="Grade Nine">Grade Nine</option>
                  <option value="Grade Ten">Grade Ten</option>
                  
                </select>


                </div>
                <br>
                <br><button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 85px;"><i class="fa fa-minus"></i> Reset</button>
          <button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 100px; margin-bottom: 20px; margin-right: 5px;" name="admin_subjectsidebar_tbl_submit"><i class="fa fa-plus"></i> Submit</button></form>
              </div>
              </div>

        </div></div>

        <div id="SubjectReport" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="position: relative; left: -30px; top: -33px; display: none;  width: 950px;">
        <br>

          <div class="w3-row-padding " style="margin:3 -16px ">
          <button onclick="close_SubjectReport()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> SUBJECT REPORT</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Subject Listing Page</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Data Updated Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br><!--info button for rose-->
               <div class="form-group" style="font-family: Georgia;">

                <table class="table table-striped">
                  <thead style="">
                  
                    <tr>
                      <th>Sr.No.</th>
                      <th>Subject Title</th>
                      <th>Class</th>
                      <th>Subject Code</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sqlsubject = "SELECT * FROM admin_subjectsidebar_tbl";
                  $sql = mysqli_query($connection, $sqlsubject);
                  while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                    $admin_subjectsidebar_tbl_subjectcode = $fetchsubject["admin_subjectsidebar_tbl_subjectcode"];
                    $admin_subjectsidebar_tbl_subjecttitle = $fetchsubject["admin_subjectsidebar_tbl_subjecttitle"];
                    $admin_subjectsidebar_tbl_subjectclass = $fetchsubject["admin_subjectsidebar_tbl_subjectclass"];
                  ?>
                  

                    <tr>
                      <th>1</th>
                      <th><?php echo $fetchsubject["admin_subjectsidebar_tbl_subjectcode"]; ?></th>
                      <th><?php echo $fetchsubject["admin_subjectsidebar_tbl_subjecttitle"]; ?></th>
                      <th><?php echo $fetchsubject["admin_subjectsidebar_tbl_subjectclass"]; ?></th>
                      <th>
                        <button href="#editsubjectreport1" data-toggle="modal" class="w3-green w3-button" title="edit" name="editsubjectreport1"><i class="fa fa-pencil-square"></i></button>
                        
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;" title="delete"><i class="fa fa-close"></i></button>
                      </th>
                     <?php } ?>
                    </tr>
                  </tbody>
                </table>


                </div>

              </div>
        </div>

        </div>
        </div>


        <!--END Subject Sidebar-->

        <!-- Class Sidebar-->
        <form role="form" method="POST" enctype="multipart/form-data" action="admin.php">
        <div id="AddClass" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; position: relative; left: -30px; top: -33px; display: none;  width: 950px;">
    <div class="w3-row-padding ">

    <button onclick="close_AddClass()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> ADD NEW CLASS FORM</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Class Management</h6>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               
               <br>
                <p style="display: inline-block; margin-right: 20px;">Section</p><br><input type="text" name="classsection" style="width: 630px;"></input><br><br>
                <p style="display: inline-block; margin-right: 52px;">Description</p><br><input type="text" name="classdescription" style="width: 630px;"></input>
                
                </div>
                <br>
                <br><button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 85px;"><i class="fa fa-minus"></i> Reset</button>
          <button name="admin_classsidebar_tbl_submit" class="w3-button w3-block w3-theme w3-right" style="width: 100px; margin-bottom: 20px; margin-right: 5px;"><i class="fa fa-plus"></i> Submit</button>
              </div>
              </div>

        </div></div></form>


        <div id="ClassReport" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="position: relative; left: -30px; top: -33px; display: none;  width: 950px;">
        <br>

          <div class="w3-row-padding " style="margin:3 -16px ">
          <button onclick="close_ClassReport()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> CLASS REPORT</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Class Listing Page</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Data Updated Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br><!--info button for rose-->
               <div class="form-group" style="font-family: Georgia;">

                <table class="table table-striped">
                  <thead style="">
                    <tr>
                      <th>Sr.No.</th>
                      <th>Section</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sqlsubject = "SELECT * FROM admin_classsidebar_tbl";
                  $sql = mysqli_query($connection, $sqlsubject);
                  while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                    $admin_classsidebar_tbl_section = $fetchsubject["admin_classsidebar_tbl_section"];
                    $admin_classsidebar_tbl_description = $fetchsubject["admin_classsidebar_tbl_description"];
                    
                  ?>

                    <tr>
                      <th>1</th>
                      <th><?php echo $fetchsubject["admin_classsidebar_tbl_section"]; ?></th>
                      <th><?php echo $fetchsubject["admin_classsidebar_tbl_description"]; ?></th>
                      <th>
                        <button class="w3-green w3-button" title="edit"><i class="fa fa-pencil-square"></i></button>
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;" title="delete"><i class="fa fa-close"></i></button>
                      </th>
                      <?php } ?>
                    </tr>
                  </tbody>
                </table>
                </div>

              </div>
        </div>

        </div>
        </div>

         <div id="AddTeacherClass" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; position: relative; left: -30px; top: -33px; display: none;  width: 950px;">
         <div class="w3-row-padding ">

         <button onclick="close_AddTeacherClass()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"> 
         </button>
          <div class="w3-col m12">

           <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> ADD TEACHER SECTIONS</h6>
           </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Teacher Class Management</h6>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               <br>
                <form role="form" method="POST" enctype="multipart/form-data" action="admin.php">

                
                <p style="display: inline-block; margin-right: 55px;">Select Class</p>
                <select name="selectclass" class="form-control" id="sel1" style="width: 402px; display: inline-block; margin-left: 30px;">
                <?php
                  $sqlsubject = "SELECT * FROM admin_classsidebar_tbl";
                  $sql = mysqli_query($connection, $sqlsubject);
                  while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                    $admin_classsidebar_tbl_section = $fetchsubject["admin_classsidebar_tbl_section"];
                    $selected = $_POST["selectclass"];
                  ?>

                <option value=""> <?php echo $fetchsubject["admin_classsidebar_tbl_section"]; ?> </option> <?php } ?>

                </select><br><br>

                
                

                <p style="display: inline-block; margin-right: 50px;">Add Teacher Class</p><input type="text" name="addteacher" style="width: 400px;"></input><br><br>

                <br><button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 85px;"><i class="fa fa-minus"></i> Reset</button>
                  <button name="admin_teacherclasssidebar_tbl_submit" class="w3-button w3-block w3-theme w3-right" style="width: 100px; margin-bottom: 20px; margin-right: 5px;"><i class="fa fa-plus"></i> Submit</button></form>
              </div>
            </div>

        </div></div>

        </div>
        <div id="TeacherClassReport" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="position: relative; left: -30px; top: -33px; display: none;  width: 950px;">
        <br>

          <div class="w3-row-padding " style="margin:3 -16px ">
          <button onclick="close_TeacherClassReport()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> TEACHER SECTION REPORT</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Class Listing Page</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Data Updated Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br><!--info button for rose-->
               <div class="form-group" style="font-family: Georgia;">

                <table class="table table-striped">
                  <thead style="">
                    <tr>
                      <th>Sr. No.</th>
                      <th>Class</th>
                      <th>Teacher</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  $sqlsubject = "SELECT * FROM admin_teacherclasssidebar_tbl";
                  $sql = mysqli_query($connection, $sqlsubject);
                  while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                    $admin_teacherclasssidebar_tbl_select = $fetchsubject["admin_teacherclasssidebar_tbl_select"];
                    $admin_teacherclasssidebar_tbl_add = $fetchsubject["admin_teacherclasssidebar_tbl_add"];
                    
                  ?>

                    <tr>
                      <th>1</th>
                      <th><?php echo $fetchsubject["admin_teacherclasssidebar_tbl_select"]; ?></th>
                      <th><?php echo $fetchsubject["admin_teacherclasssidebar_tbl_add"]; ?></th>
                      <th>
                        <button class="w3-green w3-button" title="edit"><i class="fa fa-pencil-square"></i></button>
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;" title="delete"><i class="fa fa-close"></i></button>
                      </th>
                      <?php } ?>
                    </tr>
                  </tbody>
                  </table>
                </div>

              </div>
          </div>

        </div></div>


        <!--END CLASS SIDEBAR-->


        <!--STUDENT SIDEBAR -->
        <div id="AddStudent" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; position: relative; left: -30px; top: -33px; display: none; width: 950px;">
    <div class="w3-row-padding ">

    <button onclick="close_AddStudent()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i>  ADD NEW STUDENT FORM</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Student Management</h6>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               <br>
                <p style="display: inline-block; margin-right: 102px;">Last Name</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 100px;">First Name</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 87px;">Middle Name</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 142px;">LRN</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 112px;">Password</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 58px;">Confirm Password</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 98px;">Grade Level</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <p style="display: inline-block; margin-right: 125px;">Section</p><input type="text" name="" style="width: 400px;"></input><br><br>
                <div class="form-group">
                    <p for="birthDate" class="col-sm-3 control-label" style="font-family: Georgia; position: relative; left: -14px;">Date of Birth</p>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" style="position: relative; left: -60px; width: 400px;">
                    </div>
                </div><br><br>
                <div class="form-group">
                                    <label class="control-label col-sm-3">Gender</label>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="radio" id="femaleRadio" value="Female">Female
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="radio" id="maleRadio" value="Male">Male
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div><br><br>
              


              </div>
                
                <br><button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 85px;"><i class="fa fa-minus"></i> Reset</button>
          <button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 100px; margin-bottom: 20px; margin-right: 5px;"><i class="fa fa-plus"></i> Submit</button>
              </div>
              </div>

        </div></div>

        <div id="StudentReport" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="position: relative; left: -30px; top: -33px; display: none; width: 950px;">
        <br>

          <div class="w3-row-padding " style="margin:3 -16px ">
          <button onclick="close_StudentReport()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> STUDENT REPORT</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Student Listing Page</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Data Updated Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br><!--info button for rose-->
               <div class="form-group" style="font-family: Georgia;">

                <table class="table table-striped">
                  <thead style="">
                    <tr>
                      <th>Sr.No.</th>
                      <th>Name</th>
                      <th>LRN</th>
                      <th>Grade Level & Section</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <th>Balatbat, Jazper Ambrosio</th>
                      <th>123456789112</th>
                      <th>Grade 9 Sampaguita</th>
                      <th> 
                        <button class="w3-green w3-button" title="edit"><i class="fa fa-pencil-square"></i></button>
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;" title="delete"><i class="fa fa-close"></i></button>
                      </th>
                      </tr>
                      <tr>
                      <th>2</th>
                      <th>Ambrosio, Ramer Balatbat</th>
                      <th>123456789113</th>
                      <th>Grade 9 Sampaguita</th>
                      <th> 
                        <button class="w3-green w3-button" title="edit"><i class="fa fa-pencil-square"></i></button>
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;" title="delete"><i class="fa fa-close"></i></button>
                      </th>
                      </tr>
                   
                  </tbody>
                </table>


                </div>

              </div>
        </div>

        </div>
        </div><!--END STUDENT SIDEBAR-->

        <!--USER SIDEBAR-->
        <div id="AddUser" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; position: relative; left: -30px; top: -33px; display: none;  width: 950px;">
         <div class="w3-row-padding ">

         <button onclick="close_AddUser()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"> 
         </button>
          <div class="w3-col m12">

           <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> TEACHER FORM</h6>
           </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Teacher Management</h6>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               <br>
                <p style="display: inline-block; margin-right: 103px;">Last Name</p><input type="text" name="" style="width: 400px;"></input><br><br>
                 <p style="display: inline-block; margin-right: 100px;">First Name</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <p style="display: inline-block; margin-right: 86px;">Middle Name</p><input type="text" name="" style="width: 400px;"></input><br><br>
                 <p style="display: inline-block; margin-right: 55px;">Employee Number</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <p style="display: inline-block; margin-right: 113px;">Password</p><input type="Password" name="" style="width: 400px;"></input><br><br>
                   <p style="display: inline-block; margin-right: 60px;">Confirm Password</p><input type="Password" name="" style="width: 400px;"></input><br><br>
                <br><button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 85px;"><i class="fa fa-minus"></i> Reset</button>
                  <button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 100px; margin-bottom: 20px; margin-right: 5px;"><i class="fa fa-plus"></i> Submit</button>
              </div>
            </div>

        </div></div></div>

        <div id="UserReport" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="position: relative; left: -30px; top: -33px; display: none;  width: 950px;">
        <br>

          <div class="w3-row-padding " style="margin:3 -16px ">
          <button onclick="close_UserReport()" class="fa fa-close btn" style="background-color: white; margin-left: 850px; outline: none; position: relative; top: -5px;"></button>
          <div class="w3-col m12">

          <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> TEACHER REPORT</h6>
          </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Teacher Listing Page</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Data Updated Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br><!--info button for rose-->
               <div class="form-group" style="font-family: Georgia;">

                <table class="table table-striped">
                  <thead style="">
                    <tr>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Employee ID/LRN</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Limpio</th>
                      <th>Lady</th>
                      <th>Centeno</th>
                      <th>012345678912</th>
                      <th>sinsterfghj</th>
                      <th>
                        <button class="w3-green w3-button" title="edit"><i class="fa fa-pencil-square"></i></button>
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;" title="delete"><i class="fa fa-close"></i></button>
                      </th>
                      <tr>
                      <th>Cabacungan</th>
                      <th>Katrina</th>
                      <th>Mangulabnan</th>
                      <th>012345678913</th>
                      <th>bhakoooo</th>
                      <th>
                        <button class="w3-green w3-button" title="edit"><i class="fa fa-pencil-square"></i></button>
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;" title="delete"><i class="fa fa-close"></i></button>
                      </th>
                    </tr>
                    <tr>
                      <th>Centeno</th>
                      <th>Princess Joy</th>
                      <th>Yalung</th>
                      <th>012345678915</th>
                      <th>eil2hehji</th>
                      <th>
                        <button class="w3-green w3-button" title="edit"><i class="fa fa-pencil-square"></i></button>
                        <button class="w3-theme-d3 w3-button" style="position: relative; left: -5px;  " title="delete"><i class="fa fa-close"></i></button>
                      </th>
                    </tr>
                    </tr>
                  </tbody>
                  </table>
                </div>

              </div>
          </div>

        </div>
        </div>

        <!--END USER SIDEBAR-->
        </div>
     <!-- End Middle Column -->   


    <!-- Right Column -->
<div id="right"  class="w3-col m2">
      
      
    <!-- End Right Column -->
</div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->

<!--MODAL FOR TEACHER-->
  <div class="modal fade" id="editsubjectreport1" data-target="#editsubjectreport1" style="margin-top: 100px; margin-left: 100px;" >
            <div class="modal-dialog">
                        <!-- Modal content-->
                <div class="modal-content">
                          <div class="modal-header orange">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="text-align: left;"><img src="logopng.png" alt="Mountain View" style="width:45px;height:35px;"> Edit Subject</h4>
                          </div>
                            <div class="modal-body" style="background-color: white;">
                              
                            <form role="form" method="POST" enctype="multipart/form-data" action="admin.php">
                            <p style="display: inline-block; margin-right: 50px;">Subject Code</p><input type="text" name="subjectcode" style="width: 400px;"></input><br><br>

                            <p style="display: inline-block; margin-right: 102px;">Title</p><input type="text" name="subjecttitle" style="width: 400px; margin-left: 5px;"></input><br><br>
                            
                            <p style="display: inline-block; margin-right: 59px;">Select Class</p><input type="text" name="subjectclass" style="width: 400px;"></input><br><br>

                         
                            </div>
                            <br>
                            <br>
                      <button onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 100px; position: relative; top: -50px; left: -20px;" name="admin_subjectsidebar_tbl_editreport1">Update</button>
                      </form><!--end of form-->

                            </div>
                                  
                </div>
            </div>
        </div><!--END OF MODAL TEACHER-->
 
<script>
function AddSubject() {
    document.getElementById("AddSubject").style.display = "";
    AddSubject.style.display = 'block';
}
function close_AddSubject(){
  document.getElementById("AddSubject").style.display = "";
  var div = document.getElementById('AddSubject');
    div.style.display = 'none';
}
function AddClass() {
    document.getElementById("AddClass").style.display = "";
    AddClass.style.display = 'block';
}
function close_AddClass(){
  document.getElementById("AddSubject").style.display = "";
  var div = document.getElementById('AddSubject');
    div.style.display = 'none';
}
function SubjectReport() {
    document.getElementById("SubjectReport").style.display = "";
    SubjectReport.style.display = 'block';
}
function close_SubjectReport(){
  document.getElementById("SubjectReport").style.display = "";
  var div = document.getElementById('SubjectReport');
    div.style.display = 'none';
}
function ClassReport() {
    document.getElementById("ClassReport").style.display = "";
    ClassReport.style.display = 'block';
}
function close_ClassReport(){
  document.getElementById("ClassReport").style.display = "";
  var div = document.getElementById('ClassReport');
    div.style.display = 'none';
}


function AddStudent() {
    document.getElementById("AddStudent").style.display = "";
    StudentReport.style.display = 'block';
}
function close_AddStudent(){
  document.getElementById("AddStudent").style.display = "";
  var div = document.getElementById('AddStudent');
    div.style.display = 'none';
}
function StudentReport() {
    document.getElementById("StudentReport").style.display = "";
    StudentReport.style.display = 'block';
}
function close_StudentReport(){
  document.getElementById("StudentReport").style.display = "";
  var div = document.getElementById('StudentReport');
    div.style.display = 'none';
}
function AddTeacherClass() {
    document.getElementById("AddTeacherClass").style.display = "";
    AddTeacherClass.style.display = 'block';
}
function close_AddTeacherClass(){
  document.getElementById("AddTeacherClass").style.display = "";
  var div = document.getElementById('AddTeacherClass');
    div.style.display = 'none';
}

function TeacherClassReport() {
    document.getElementById("TeacherClassReport").style.display = "";
    TeacherClassReport.style.display = 'block';
}
function close_TeacherClassReport(){
  document.getElementById("TeacherClassReport").style.display = "";
  var div = document.getElementById('TeacherClassReport');
    div.style.display = 'none';
}
function AddUser() {
    document.getElementById("AddUser").style.display = "";
    AddUser.style.display = 'block';
}
function close_AddUser(){
  document.getElementById("AddUser").style.display = "";
  var div = document.getElementById('AddUser');
    div.style.display = 'none';
}
function UserReport() {
    document.getElementById("UserReport").style.display = "";
    UserReport.style.display = 'block';
}
function close_UserReport(){
  document.getElementById("UserReport").style.display = "";
  var div = document.getElementById('UserReport');
    div.style.display = 'none';
}


function Tulip() {
    document.getElementById("Tulip").style.display = "";
    Subjectview.style.display = 'block';
}

function Rose() {
    document.getElementById("Rose").style.display = "";
    Subjectview.style.display = 'block';
}

function close_Sampaguita(){
    document.getElementById("Sampaguita").style.display = "";
    var div = document.getElementById('Sampaguita');
    div.style.display = 'none';
}
function close_Orchids(){
    document.getElementById("Orchids").style.display = "";
    var div = document.getElementById('Orchids');
    div.style.display = 'none';
}
function close_Tulip(){
    document.getElementById("Tulip").style.display = "";
    var div = document.getElementById('Tulip');
    div.style.display = 'none';
}
function close_Rose(){
    document.getElementById("Rose").style.display = "";
    var div = document.getElementById('Rose');
    div.style.display = 'none';
}
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


</script>


</body>
</html> 
