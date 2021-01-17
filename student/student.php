
<!DOCTYPE html>
<html>
<title>STUDENT</title>
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
  <a href="#" id="sjhs" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right" ></i>  SAN JUAN HIGH SCHOOL</a>

  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button id="account" class="w3-button w3-padding-large" title="Notifications" style="width: 130px;  text-shadow: 2px 2px #774747;"><i class="fa fa-user"></i><span class="w3-badge w3-right w3-small"></span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:100px">
      <a href="C:\Users\jazper\Desktop\softwen/homepage.php" class="w3-bar-item w3-button" style="font-size: 15px;">Log-out</a>
      <a href="#" class="w3-bar-item w3-button" style="font-size: 15px;">help</a>
    </div>
  </div>
  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" title="Notifications" style="width: 130px;"><i class="fa fa-bell" style="text-shadow: 2px 2px #774747;"></i><span class="w3-badge w3-right w3-small w3-white">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button" style="font-size: 13px;">Assignment Reminder: Biology <i class=" fa fa-close" style="margin-left: 40px;"></i></a>
      <a href="#" class="w3-bar-item w3-button" style="font-size: 13px;">Quiz in Filipino <i class=" fa fa-close" style="margin-left: 130px;"></i></a>
      <a href="#" class="w3-bar-item w3-button" style="font-size: 13px;">You are now a certified San Juanista! <i class=" fa fa-close" style="margin-left: 2px;"></i></a>
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
         <p><i class="fa fa-list-alt fa-fw w3-margin-right w3-text-theme"></i> Year & Section</p>
         <p><i class="fa fa-gratipay fa-fw w3-margin-right w3-text-theme"></i> Joined January 16, 1923</p>
         <p><i class="fa fa-group fa-fw w3-margin-right w3-text-theme"></i> Class Adviser</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-white">
          <button onclick="Subjects()" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-signal fa-fw w3-margin-right"></i> Subjects</button>

          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Calendar</button>
          <div id="Demo2" class="w3-hide w3-container">
            <div class=" col-md-4 col-sm-12 well pull-right-lg" style="border:0px solid">
              <div class="col-md-12" style="padding:0px;">
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

          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Users (temporary)</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
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
    
<div id="Subjects" class="w3-col m7" style="display: none;">
    
      <div class="w3-row-padding">

        <div class="w3-col m12">
          <div class="w3-bar w3-theme-l1 w3-left-align w3-large">
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left w3-hover-white w3-medium" title="Subjects Enrolled"> Subjects Enrolled</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left w3-hover-white w3-medium" title="Previous">Previous</a>
            <a href="#" style="border-radius: 0 !important;" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white w3-medium btn" title="Previous" data-toggle="modal" data-target="#enroll">Enroll</a>

          </div>
          <div id="enroll" class="modal fade" role="dialog" style="padding-top: 200px;">
            <div class="modal-dialog" style=" padding-left: 220px;">

              <!-- Modal content-->
              <div class="modal-content" style="-webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; height: 100px; width: 290px; height: 70px;">
                <div class="modal-body">
                  <input type="input" name="" style="display: inline-block; height: 33px; margin-right: 5px;">
                  <a href="" class="btn btn-danger" style="border-radius: 0; display: inline-block; height: 38px;"> Enroll</a></div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- SUBJECTS SHOW -->
      <div id="Subjectview" class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
      <button onclick="close_Subjects()" class="fa fa-close btn" style="background-color: white; margin-left: 670px; margin-bottom: 0px; outline: none;"></button>
      <div class="w3-card-2 w3-round w3-white w3-center" style="height: 200px; width: 300px; display: inline-block; margin: 0px 80px 22px 10px;">
        <div class="w3-container">
          <p>MATH</p>
          <p><strong>Mr. Dela Cruz</strong></p>
          <p>Enrolled July 28, 1923</p>
              <button id="Scores1" class="w3-button w3-block w3-red w3-section" title="Accept" style="display: inline-block; width: 130px;" data-toggle="modal" data-target="#TypeQuiz"><i class="fa fa-bar-chart"> Quiz</i></button>

              <button id="Lessons" class="w3-button w3-block w3-red w3-section" title="Decline" style="display: inline-block; width: 130px;"><i class="fa fa-dropbox"> Lessons</i></button>
          </div>
      </div>

      <div class="w3-card-2 w3-round w3-white w3-center" style="height: 200px; width: 300px; display: inline-block;">
        <div class="w3-container">
          <p>BIOLOGY</p>
          <p><strong>Ms. Dela Pena</strong></p>
          <p>Enrolled July 26, 1923</p>
              <button class="w3-button w3-block w3-red w3-section" title="Accept" style="display: inline-block; width: 130px;"><i class="fa fa-bar-chart"> Quiz</i></button>
              <button class="w3-button w3-block w3-red w3-section" title="Decline" style="display: inline-block; width: 130px;"><i class="fa fa-dropbox"> Lessons</i></button>
          </div>
      </div><BR>

      </div>
      <!-- SUBJECTS SHOW -->
      

</div>

<div id="TypeQuiz" class="modal fade" role="dialog" style="padding-top: 200px;">
            <div class="modal-dialog" style=" padding-left: 220px;">

              <!-- Modal content-->
              <div class="modal-content" style="-webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; width: 270px; height: 200px;">
                <div class="modal-body">
                <h3 class="w3-center">List of Quizzes:</h3>
                  <a onclick="FilipinoQuizTake()" class="btn btn-danger" style="border-radius: 0; height: 38px; width: 230px;" data-dismiss="modal"> Quiz 1</a>
              </div>

            </div>
          </div>
        </div>

<div id="Quiz" class="w3-col m7" style="display: none;">
    
      <!-- SUBJECTS SHOW -->
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
      <div class="w3-row-padding">
      <button onclick="close_Quiz()" class="fa fa-close btn" style="background-color: white; margin-left: 670px; margin-bottom: 0px; outline: none;"></button>
        <div class="w3-col m12">

          
        </div>
      </div>
      <div id="TakeQuiz" style="display: block;">
      <div class="w3-bar w3-theme-l1 w3-left-align w3-large"  style="width: 670px; margin-left: 17px;">
                  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left w3-hover-white w3-medium" title="Subjects Enrolled">Filipino</a>
                  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left w3-hover-white w3-medium" title="Previous"></a>
                </div>
      <div class="w3-card-2 w3-round w3-white" style="height: 210px; width: 670px; display: inline-block; margin-bottom: 20px; margin-left: 17px;">
        <div class="w3-container"><br>
          <p style="font-size: 20px;"><strong>Quiz: </strong></p>
          <p><strong>Mr. Dela Cruz</strong></p>
          <p>Due Date: March 7, 1934</p>
          <p>8:00pm</p>
              <button onclick="TakeQuiz()" class="w3-button w3-block w3-red w3-section" title="View Instructions" style="display: inline-block; width: 130px;">
              <span class="fa fa-pencil-square-o"></span> Take Quiz</button>

          </div>
      </div>
      </div>
                  <div id="StartQuiz" style="display: block;">
      <div class="w3-bar w3-theme-l1 w3-left-align w3-large" style="width: 670px; margin-left: 17px;">
                  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left w3-hover-white w3-medium" title="Subjects Enrolled">Filipino</a>
                  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-left w3-hover-white w3-medium" title="Previous"></a>
                </div>
      <div class="w3-card-2 w3-round w3-white" style="height: 210px; width: 670px; display: inline-block; margin-bottom: 20px; margin-left: 17px;">
        <div class="w3-container"><br>
          <p style="font-size: 20px;"><strong>Quiz: </strong></p>
          <p><strong>First Question</strong></p>
          <p>Sino ang Pambansang Bayani?</p>
          <input type="radio">Jose Rizal&nbsp;&nbsp;&nbsp;&nbsp;</input><input type="radio">Andres Bonifacio&nbsp;&nbsp;&nbsp;&nbsp;</input><input type="radio" name="">Apolonario Mabini</input><br>
              <button id="" class="btn w3-button w3-block w3-red w3-section disabled" title="invalid" style="display: inline-block; width: 130px;">
              <span class="glyphicon glyphicon-chevron-left"></span> Previous</button>
              <button id="" class="w3-button w3-block w3-red w3-section" title="Next Question" style="display: inline-block; width: 130px;">
              Next <span class="glyphicon glyphicon-chevron-right"></span></button>

          </div>
      </div>
      </div>

      </div>
      <!-- SUBJECTS SHOW -->
      

</div>


     <!-- End Middle Column -->   


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
function Subjects() {
    document.getElementById("Subjects").style.display = "";
    Subjectview.style.display = 'block';
}

function ScoresMath(){
    document.getElementById("ScoresMath").style.display = "";
    var div = document.getElementById('ScoresMath');
    div.style.display = 'block';
}
function close_ScoresMath(){
    document.getElementById("ScoresMath").style.display = "";
    var div = document.getElementById('ScoresMath');
    div.style.display = 'none';
}
function close_Subjects(){
    document.getElementById("Subjects").style.display = "";
    var div = document.getElementById('Subjects');
    div.style.display = 'none';
}


function close_Quiz(){
    document.getElementById("Quiz").style.display = "";
    var div = document.getElementById('Quiz');
    div.style.display = 'none';
}
function TakeQuiz(){
    document.getElementById("TakeQuiz").style.display = "";
    var div = document.getElementById('TakeQuiz');
    div.style.display = 'none';
    document.getElementById("StartQuiz").style.display = "";
    StartQuiz.style.display = 'block';
}


function FilipinoQuizTake(){
  Quiz.style.display = 'block';
  StartQuiz.style.display = 'none';
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
