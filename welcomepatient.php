<?php
// Initialize the session
session_start();
require_once "config.php";
// time and date
$today = date("F j, Y ");
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$sql = "SELECT DISTINCT specialties.sname
FROM doctor
JOIN specialties ON doctor.specialties = specialties.id;";
$result = $mysqli->query($sql);

?>

 
 <!DOCTYPE html>
<html lang="en">

<head>
<link rel = "icon" href = 
"assets/img/icon.png" 
        type = "image/x-icon">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Makiling Clinic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/patient.css" rel="stylesheet">
  <!-- TIMER FUNCTION -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
      updateTime(); 
      setInterval(updateTime, 1000); 
    });

    function updateTime() {
      $.ajax({
        url: 'get_time.php', 
        type: 'GET',
        success: function(data) {
          $('#time').text(data); 
        }
      });
    }
  </script>
</head>
<body>

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="headercont">


      <h1>Makiling Clinic</h1>
  </div>
      <nav id="navbar" class="navbar">
        <ul>  
          <li><a href="welcomepatient.php">Home</a></li>
          <li><a href="booking.php">Appointment booking</a></li>
          <li><a href="apphistory.php">Appointment History</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a data-bs-toggle="modal" data-bs-target="#userdetail">View Account details</a></li> 

              <li><a href="resetpass.php">Reset Password</a></li>    
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </nav>



</header>
    <div class="row d-flex justify-content-center align-items-center h-50">

      <div class="col col-xl-10">

        <div class="mt-5 mb-3">
              <h4><b>Today's Date and Time:</b>
              <div class="d-flex"> <?php echo $today?>&nbsp;||&nbsp;<div id="time"></h4>
            </div>

         
        </div>
      </div>
    </div>
 
    <div class="row d-flex justify-content-center align-items-center h-50">

      <div class="col col-xl-10">

              <h2 class ="mb-3">Hi, <B><?php  echo htmlspecialchars($_SESSION["pname"]); ?></b>. Welcome to our clinic appointment website.</h2>
              
      </div>
    </div>

  <div class ="mb-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; background-color: white;">
        <div class="card-body p-4 p-lg-12">
        <h3>Your Upcoming Appointment</h3>
          <hr class="app"></hr>
         
<?php
$pId = $_SESSION['id'];
$pending = "Pending";
$accepted = "accepted";
$sql3 = "SELECT appointments.appointment_ID, doctor.docname, specialties.sname, patient_detail.pId, patient_detail.pname,
appointments.appDate, appointments.appTime, docsched.time_schedule, appointments.App_status
FROM appointments
INNER JOIN doctor ON appointments.docid = doctor.docid
INNER JOIN specialties ON doctor.specialties = specialties.id
INNER JOIN patient_detail ON appointments.pId = patient_detail.pId
INNER JOIN docsched ON appointments.appTime = docsched.appTime
WHERE patient_detail.pId = $pId AND (App_status = '$pending' OR App_status = '$accepted') ORDER BY appointments.appDate ASC";
$result3 = $mysqli->query($sql3);

if ($result3->num_rows > 0) {
  while ($row = $result3->fetch_assoc()) {
    echo    ' <div class="infocontainer">';
    echo "<h2>".date("F j, Y", strtotime($row['appDate']))."</h2>";
    echo "<h3>".$row['time_schedule']."</h3>";
    echo '                    <div class="row mt-3">
    <div class="col">
    <h5>Doctor Name: </h5>
    <h4>'.$row["docname"].'</h4>
    </div>
    <div class="col">
    <h5>Appointment ID:</h5>
    <h4>'.$row["appointment_ID"].'</h4>
    </div>
  </div> 
  <div class="row">
  <div class="col">
  <h5>Department: </h5>
  <h4>'.$row["sname"].'</h4> 

  </div>
  <div class="col">
  <h5>Status:</h5>
  <h4>'.$row["App_status"].'</h4> 
  </div> </div> </div>';

  }
} else {
  echo "<center><h2>You don't have any Appointment</h2></center>";
}

?>

</div>
          <!-- <div class="card-body p-4 p-lg-12">
                <h3> Your Upcoming Appointment</h3> -->
                <!-- <hr class="app"></hr> -->
                <!-- <div class=infocontainer> -->
                    <!-- <h2>July 15 2023</h2> -->
                    <!-- <h3>8:00PM-10:00PM</h3> -->
                    <!-- <div class="row mt-3">
    <div class="col">
    <h5>Doctor Name: </h5>
    <h4>Apple Green</h4> -->
<!-- 
    </div>
    <div class="col">
    <h5>Appointmend ID:</h5>
    <h4>1</h4>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <h5>Department: </h5>
    <h4>Child Health</h4> 

    </div>
    <div class="col">
    <h5>Status:</h5>
    <h4>Pending</h4> 
    </div>-->
  </div>
                  </div>
         
        </div>
      </div>
    </div>
  </div>

  <div class="mb-5">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-xl-10">
      <div class="card" style="border-radius: 1rem; background-color: #fcfcfc">
        <div class="card-body p-4 p-lg- text-black">
          <h3>Our Doctors</h3>
          <hr class="app">
          <form action="" method="post" id="drsearch">
          <select name="specialty" class="form-control-lg mb-2">
            <option disabled selected>Select department</option>
            <?php
            while ($row = $result->fetch_assoc()) {
              $sname = $row['sname'];
              echo "<option value='$sname'>$sname</option>";
            }
            ?>
          </select>
          <div class="col-5 mb-3">
                    <input type="submit" name="filter" class="btn btn-dark btn-lg" value="Search">
                  </div>
          </form>
          <div class="row gy-3">
          <?php

          if (isset($_POST['specialty'])) {
            $selectedSpecialty = $_POST['specialty'];
            $sql2 = "SELECT doctor.docid, doctor.docemail, doctor.docname, doctor.doctel, specialties.sname
            FROM doctor
            JOIN specialties ON doctor.specialties = specialties.id
            WHERE sname = '".$selectedSpecialty."'";
            $result2 = $mysqli->query($sql2);
            for ($x = 0; $x < $result2->num_rows; $x++) {
              $row = $result2->fetch_assoc();
              $docname = $row["docname"];
              $docemail = $row["docemail"];
              $doctel = $row["doctel"];
              $sname = $row["sname"];
              echo '<div class="col-3">
                      <div class="doctext">
                          <img src="assets/img/docimg.jpg" class="img-fluid">
                          <h3>'.$docname.'</h3>
                          <h5>Specialty</h5><h4>'.$sname.'</h4>
                          <h5>Email</h5>  <h4>'.$docemail.'</h4>
                          <h5>Contact</h5><h4>'.$doctel.'</h4>
                        </div>
                      </div>';
            }
          }
          ?>


              <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-app">
  <div class="portfolio-wrap">
    <a href="assets/img/portfolio/app-1.jpg"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
    <div class="portfolio-info">
      <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
      <p>Lorem ipsum, dolor sit amet consectetur</p>
    </div>
  </div>
</div> -->

              <!-- content -->
            </div>
            <!-- row -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
  <!-- Modals -->
  <!-- Modal patient detail-->
  <div class="modaltext">
<div class="modal fade" id="userdetail" tabindex="-1" aria-labelledby="userdetail" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="userdetail">Account Details</h1>
      </div>
      <div class="modal-body">
      <h5>Name</H5><h3 ><?php echo htmlspecialchars($_SESSION["pname"]); ?></h3>
      <h5 class ="mt-3">Email</H5><h3 ><?php echo htmlspecialchars($_SESSION["email"]); ?></h3>
      <h5 class ="mt-3">Cellphone Number</H5><h3 ><?php echo htmlspecialchars($_SESSION["pcellphone"]); ?></h3>
      <h5 class ="mt-3">Gender</H5><h3 ><?php echo htmlspecialchars($_SESSION["pGender"]); ?></h3>
      <h5 class ="mt-3">Birthday</H5><h3 ><?php echo htmlspecialchars($_SESSION["pBirthday"]); ?></h3>
      <h5 class ="mt-3">Address</H5><h3 ><?php echo htmlspecialchars($_SESSION["pAddress"]); ?></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </div>
</body>
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
<script src="assets/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>