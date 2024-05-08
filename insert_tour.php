<?php

// Include the credentials
require_once('./credentials.php');

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// SQL-Abfrage 
$sql_control = "SELECT * FROM tour";
$result_stats = $conn->query($sql_control);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>reeagle - insert</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">reeagle</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">insert-tour</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">This app supports people who suffer from control compulsion.</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"></p>
            </div>
           
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
  <section class="section">
      <div class="container">


  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <h1><b>Insert Tour</b> </h1>
      <p>Insert new Tour</p>
      <br/>
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Place</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Point 1</label>
    <input class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Point 2</label>
    <input class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Point 3</label>
    <input class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Point 4</label>
    <input class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Insert</button>
</form>
</div>
</div>

    </div>
    <div class="col-md-4">
    </div>
  </div>

</div>

</section>
   

   


    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Our Native App</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-play-store"></i><span>Google play</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About reeagle</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
            dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
          <p class="social">
            <a href="#"><span class="bi bi-twitter"></span></a>
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-instagram"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/"></a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    var currentPoint = 1; // Start with point1
    var countdown = 10;
    
    function nextPoint() {
        var tourname = document.getElementById('tourname');
        var point2 = document.getElementById('point2').value;
        var point3 = document.getElementById('point3').value;
        var point4 = document.getElementById('point4').value;
        var endMessage = document.getElementById('endMessage');
        var nextButton = document.querySelector('.btn');
        
        if (currentPoint == 1) {
            tourname.innerText = point2;
            currentPoint = 2;
        } else if (currentPoint == 2) {
            tourname.innerText = point3;
            currentPoint = 3;
        } else if (currentPoint == 3) {
            tourname.innerText = point4;
            currentPoint = 4;
        } else {
            endMessage.style.display = 'block';
            endMessage.style.fontSize = '36px';
            nextButton.innerText = 'Finish';
            // Start countdown
            var timerInterval = setInterval(function() {
                countdown--;
                if (countdown <= 0) {
                    clearInterval(timerInterval);
                    window.location.href = 'Index.php';
                } else {
                    nextButton.innerText = 'Finish (' + countdown + ')';
                }
            }, 1000);
        }
    }
</script>
  
</body>

</html>