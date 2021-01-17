<?php
require("configuration.php");



if (isset($_POST["quizmc_submit"])){

$quiznumber = $_POST["quiznumber"];
$subjectcode = $_POST["subjectcode"];
$quizinstructions = $_POST["quizinstructions"];
$teacher_employeenumber = '123456789012';

$sql = ("INSERT INTO quiz_list_tbl (quiz_number, subject_code, quiz_description, teacher_employeenumber)

VALUES ('$quiznumber', '$subjectcode', '$quizinstructions', $teacher_employeenumber)");
mysqli_query($connection, $sql);
header("location: teacher.php");

}

?>

<!DOCTYPE html>
<html>
<title>TEACHER</title>
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
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: inline-block; 
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
      display: none;
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: inline-block;   
}
li.nostyle {
    list-style-type: none;
}
</style>

<body class="w3-theme-l5">
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
      <div class="w3-card-2 w3-round w3-white">
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
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-white">

          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Sections</button>
          <div id="Demo3" class="w3-hide w3-container w3-theme-l4"  style="padding-top: 0px;">

         <br>
             <button class="w3-button w3-block w3-theme-l4 w3-left-align" onclick="Sampaguita()">Sampaguita</button>
          </div>

          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align" style="margin-bottom: 81px;"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Calendar</button>
          <div id="Demo2" class="w3-hide w3-container w3-theme-l4">
            <div class=" col-md-4 col-sm-12 well pull-right-lg w3-theme-l4" style="border:0px solid">
              <div class="col-md-12 w3-theme-l4" style="padding:0px;">
                <br>
                  <table class="table table-bordered table-style table-responsive w3-theme-d1">
                    <tr>
                      <th colspan="2"><span class="glyphicon glyphicon-chevron-left"></span></th>
                      <th colspan="3"> Jan - 2017<!--?php echo $html_title; ?--></th>
                      <th colspan="2"><span class="glyphicon glyphicon-chevron-right"></span></th>
                    </tr>
                    <tr>
                      <th>S</th>
                      <th>M</th>
                      <th>T</th>
                      <th>W</th>
                      <th>T</th>
                      <th>F</th>
                      <th>S</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>9</td>
                      <td>10</td>
                      <td>11</td>
                      <td class="today">12</td>
                      <td>13</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>
                      <td>19</td>
                      <td>20</td>
                      <td>21</td>
                    </tr>
                     <tr>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                    </tr>
                      <tr>
                      <td>29</td>
                      <td>30</td>
                      <td>31</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
              </div>
            </div>
          </div>

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
    <div>&nbsp;</div>

    <div id="Sampaguita" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="display: none;">
    <button onclick="close_Sampaguita()" class="fa fa-close btn" style="background-color: white; margin-left: 670px; margin-top: 5px; outline: none;"></button>
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br><!--info button for sampaguita-->

          <form id="form_lesson_upload" action="lesson_upload.php" method="post" enctype="multipart/form-data">
          <span class="btn btn-file w3-button w3-block w3-red w3-right" style="display: inline-block; height: 36px; width: 90px; border-radius: 0 !important; position: relative; left: -140px;"><i class="fa fa-plus"></i>
              Lesson <input type="file" id="lesson_upload" name="lesson_upload" onchange="lessonUpload();" title="Add Lesson"></span>
              
          </form>
          <button data-toggle="modal" data-target="#TypeQuiz" onclick="myFunction('')" class="w3-button w3-block w3-theme w3-right" style="width: 75px; position: relative; left: -150px;" title="Add Quiz"><i class="fa fa-plus"></i> Quiz</button>
          <button class="w3-button w3-block w3-theme w3-right" style="width: 100px; position: relative; right: -135px; display: none;" id="which_subject" name="which_subject"><i class="fa fa-plus"></i> Subjects</button>
          <button class="w3-button w3-block w3-theme w3-right" style="width: 85px; position: relative; left: -160px;">Scores</button>

              <h4><strong style="font-size: 20px;">Grade 9 Gold</strong></h4>
              <hr class="w3-clear">
             
             <?php
                  $x = 1;

                  $sqlsubject = "SELECT * FROM student_tbl";
                  $sql = mysqli_query($connection, $sqlsubject);
                  while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                    $student_slastname = $fetchsubject["student_slastname"];
                    $student_sfirstname = $fetchsubject["student_sfirstname"];
                    $student_ssection = $fetchsubject["student_ssection"];
                  ?>

             <label class="w3-left" style="font-size: 17px;"><?php
             if ($student_ssection === 'Gold') {
              
              echo "$x. " . $fetchsubject["student_slastname"] . " " . $fetchsubject["student_sfirstname"] . "<br>"; $x++; } } ?>
             </label>
              
            <br>

    </div>
    </div>

    <div id="TypeQuiz" class="modal fade" role="dialog" style="padding-top: 200px;">
            <div class="modal-dialog" style=" padding-left: 220px;">

              <!-- Modal content-->
              <div class="modal-content" style="-webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; width: 270px; height: 200px;">
                <div class="modal-body">
                <h3 class="w3-center">Type of Quiz:</h3>
                  <a href="#quizmc" data-toggle="modal" class="btn btn-danger" style="border-radius: 0; height: 38px; width: 230px;" data-dismiss="modal"> Multiple Choice</a>
                  <a href="#quiziden" data-toggle="modal" class="btn btn-danger" style="border-radius: 0; height: 38px; width: 230px;" data-dismiss="modal"> Identification</a>
                  <a href="#quiztf" data-toggle="modal" class="btn btn-danger" style="border-radius: 0; height: 38px; width: 230px;" data-dismiss="modal"> True or False</a>
              </div>

            </div>
          </div>
        </div>

        <div id="AddQuizMC" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; display: none;">
         <div class="w3-row-padding ">

         <button onclick="close_AddQuizMC()" class="fa fa-close btn" style="background-color: white; margin-left: 650px; outline: none; position: relative; top: -5px;"> 
         </button>
          <div class="w3-col m12">

           <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> ADD MULTIPLE CHOICE QUIZ FORM</h6>
           </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Please be reminded that if you already clicked next, question can't be edited.</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Quiz Created Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               <br>
                <p style="display: inline-block; margin-right: 50px;">Question</p><input type="text" name="" style="width: 400px;"></input><br><br>
                 <p style="display: inline-block; margin-right: 50px;">Choice A</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <p style="display: inline-block; margin-right: 50px;">Choice B</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <p style="display: inline-block; margin-right: 50px;">Choice C</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <p style="display: inline-block; margin-right: 50px;">Choice D</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  
                  <p style="display: inline-block; margin-right: 60px;">Answer</p><select style="width: 400px; height: 30px;">
                  <option>asd</option>  
                  </select>
                  <br><br>
                  <a class="w3-button w3-block w3-theme w3-right" style="width: 120px; margin-bottom: 20px; margin-right: 5px;">Next</a>
              </div>
            </div>

          </div>
        </div>
     </div>
     <!--MODAL FOR QUIZMC-->
  <div class="modal fade" id="quizmc" data-target="#quizmc" >
            <div class="modal-dialog">
                        <!-- Modal content-->
                <div class="modal-content">
                          <div class="modal-header orange">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="text-align: left;"><img src="logopng.png" alt="Mountain View" style="width:45px;height:35px;"> Multiple Choice</h4>
                          </div>
                            <div class="modal-body" style="background-color: white;">

                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="teacher.php">
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Quiz Number </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="quiznumber" placeholder="Quiz Number" class="form-control" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Subject Code </label>
                                    <div class="col-sm-9">

                                    <select name="subjectcode" placeholder="Subject Code" class="form-control">
                                        <?php

                                        $sqlsubject = "SELECT * FROM teacher_subj_tbl";
                                        $sql = mysqli_query($connection, $sqlsubject);
                                        while ($fetchsubject = mysqli_fetch_assoc($sql)) {
                                          $subject_code = $fetchsubject["subject_code"];
                                          $teacher_employeenumber = $fetchsubject["teacher_employeenumber"];
                                        ?>
                                   <?php
                                   if ($teacher_employeenumber === '123456789012') { ?>
                                   <option value="<?php echo $fetchsubject["subject_code"]; ?>" class="w3-left" style="font-size: 17px;">
                                   <?php
                                    echo $fetchsubject["subject_code"];
                                     } } ?>
                                   </option>
                                   </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Quiz Instructions </label>
                                    <div class="col-sm-9">
                                        <textarea name="quizinstructions" placeholder="Quiz Instructions" class="form-control" autofocus style="resize: none;"></textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="submit" class="btn btn-danger btn-block" id="quizmc_submit" name="quizmc_submit"  onclick="AddQuizMC()">Submit</button>

                                        <!--<button type="submit" class="btn btn-danger btn-block" id="quizmc_submit" name="quizmc_submit"  onclick="AddQuizMC()" data-dismiss="modal">Submit</button>-->
                                    </div>
                                </div>

                            </form> <!-- /form -->
                            </div>
                                  <div class="modal-footer">
                                  </div>
                </div>
            </div>
        </div><!--END OF MODAL QUIZMC-->

   <div id="AddQuizIdentification" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; display: none;">
         <div class="w3-row-padding ">

         <button onclick="close_AddQuizIdentification()" class="fa fa-close btn" style="background-color: white; margin-left: 650px; outline: none; position: relative; top: -5px;"> 
         </button>
          <div class="w3-col m12">

           <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> ADD IDENTIFICATION QUIZ FORM</h6>
           </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Quiz Management</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Quiz Created Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               <br>
                <p style="display: inline-block; margin-right: 50px;">Question</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <p style="display: inline-block; margin-right: 60px;">Answer</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <a class="w3-button w3-block w3-theme w3-right" style="width: 120px; margin-bottom: 20px; margin-right: 5px;"> Next</a>
              </div>
            </div>

        </div></div></div>
        <!--MODAL FOR QUIZIDEN -->
  <div class="modal fade" id="quiziden" data-target="#quiziden" >
            <div class="modal-dialog">
                        <!-- Modal content-->
                <div class="modal-content">
                          <div class="modal-header orange">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="text-align: left;"><img src="logopng.png" alt="Mountain View" style="width:45px;height:35px;"> Identification</h4>
                          </div>
                            <div class="modal-body" style="background-color: white;">

                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="teacher.php">
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Quiz Number </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="quiznumber" placeholder="Quiz Number" class="form-control" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Subject Code </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="subjectcode" placeholder="Subject Code" class="form-control" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Quiz Instructions </label>
                                    <div class="col-sm-9">
                                        <textarea name="quizinstructions" placeholder="Quiz Instructions" class="form-control" autofocus style="resize: none;"></textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                


                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="" class="btn btn-danger btn-block" id="quizmc_submit" name="quizmc_submit" onclick="AddQuizIdentification()" data-dismiss="modal">Submit</button>
                                    </div>
                                </div>
                            </form> <!-- /form -->
                            </div>
                                  <div class="modal-footer">
                                  </div>
                </div>
            </div>
        </div><!--END OF MODAL QUIZIDEN-->
 

        <div id="AddQuizTF" class="w3-container w3-card-2 w3-white w3-round w3-margin" style="padding-top: 20px; display: none;">
         <div class="w3-row-padding ">

         <button onclick="close_AddQuizTF()" class="fa fa-close btn" style="background-color: white; margin-left: 650px; outline: none; position: relative; top: -5px;"> 
         </button>
          <div class="w3-col m12">

           <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
            <h6><i class="fa fa-file-text-o" style="margin-left: 10px;"></i> ADD TRUE OR FALSE QUIZ FORM</h6>
           </div>
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <h6 style="margin-left: 20px;">Quiz Management</h6>
          </div>
          <div class="w3-bar w3-theme-l3 w3-left-align w3-large" style="display: none;">
            <p style="margin-left: 20px; font-size: 12px; padding-top: 10px;">Quiz Created Successfully</p>
          </div>

              <div class="w3-container w3-card-2 w3-white w3-round" style="margin-bottom: 20px;"><br>
               <div class="form-group" style="font-family: Georgia;">
               <br>
                <p style="display: inline-block; margin-right: 50px;">Question</p><input type="text" name="" style="width: 400px;"></input><br><br>
                  <p style="display: inline-block; margin-right: 60px;">Answer</p><select style="width: 400px; height: 30px;">
                  <option>asd</option>  
                  </select><br><br>
                  <a class="w3-button w3-block w3-theme w3-right" style="width: 120px; margin-bottom: 20px; margin-right: 5px;"> Next</a>

              </div>
            </div>

        </div></div></div>
        <!--MODAL FOR QUIZTF -->
  <div class="modal fade" id="quiztf" data-target="#quiztf" >
            <div class="modal-dialog">
                        <!-- Modal content-->
                <div class="modal-content">
                          <div class="modal-header orange">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="text-align: left;"><img src="logopng.png" alt="Mountain View" style="width:45px;height:35px;"> True or False</h4>
                          </div>
                            <div class="modal-body" style="background-color: white;">

                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="teacher.php">
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Quiz Number </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="quiznumber" placeholder="Quiz Number" class="form-control" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Subject Code </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="subjectcode" placeholder="Subject Code" class="form-control" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Quiz Instructions </label>
                                    <div class="col-sm-9">
                                        <textarea name="quizinstructions" placeholder="Quiz Instructions" class="form-control" autofocus style="resize: none;"></textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                


                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="" class="btn btn-danger btn-block" id="quizmc_submit" name="quizmc_submit"  onclick="AddQuizTF()" data-dismiss="modal">Submit</button>
                                    </div>
                                </div>
                            </form> <!-- /form -->
                            </div>
                                  <div class="modal-footer">
                                  </div>
                </div>
            </div>
        </div><!--END OF MODAL QUIZTF-->


</div> <!-- End Middle Column -->   


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
 
<script>
function Sampaguita() {
    document.getElementById("Sampaguita").style.display = "";
    Subjectview.style.display = 'block';
}

function close_Sampaguita(){
    document.getElementById("Sampaguita").style.display = "";
    var div = document.getElementById('Sampaguita');
    div.style.display = 'none';
}

function AddQuizMC(){
document.getElementById("AddQuizMC").style.display = "";
AddQuizMC.style.display = 'block';

}

function close_AddQuizMC(){
  document.getElementById("AddQuizMC").style.display = "";
  var div = document.getElementById('AddQuizMC');
    div.style.display = 'none';
}

function AddQuizIdentification() {
document.getElementById("AddQuizIdentification").style.display = "";
AddQuizIdentification.style.display = 'block';
}

function close_AddQuizIdentification(){
  document.getElementById("AddQuizIdentification").style.display = "";
  var div = document.getElementById('AddQuizIdentification');
    div.style.display = 'none';
}

function AddQuizTF() {
document.getElementById("AddQuizTF").style.display = "";
AddQuizTF.style.display = 'block';
}

function close_AddQuizTF(){
  document.getElementById("AddQuizTF").style.display = "";
  var div = document.getElementById('AddQuizTF');
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

function lessonUpload() {
  document.getElementById("form_lesson_upload").submit();
  document.getElementById("which_subject").style.display = "";
  var div = document.getElementById('which_subject');
    div.style.display = 'block';
}


</script>


</body>
</html> 
