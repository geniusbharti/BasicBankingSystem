<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>The Sparks Bank</title>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- FONT AWESOME LINK -->
  <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.min.css">
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- CSS STYLE SHEET -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <!-- NAVBAR -->

  <header>

    <img src="images/logo_small.png" class="logo" alt="logo">

    <nav class="navbar">
      <ul>
        <a class="home" href="index.php"><li>Home</li></a>
        <a href="customers.php"><li>Customers</li></a>
        <a href="transactionHistory.php"><li>Transactions</li></a>
        <a href="#services"><li>Facilities</li></a>
        <a href="#contact"><li>Contact Us</li></a>
      </ul>
    </nav>

  </header>

  <!-- NAVBAR END-->


  <!-- HOME SECTION -->

  <div id="home-section">
    <div class="row">
      <div class="col-lg-6 headline">
        <h2> Easy. Fast. Safe. </h2>
        <h1>Welcome to Sparks Bank</h1>
        <div class="buttons">
          <a href="newCustomerForm.php"><button class="homebutton btn">Create Account</button></a>
          <a href="transactionHistory.php"><button class="homebutton btn">Transaction History</button></a>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid" src="images/homeImage.png" alt="Image">
      </div>

    </div>
  </div>

  <!-- HOME SECTION END-->

  <!-- FACILITIES SECTION -->
  <div id="services">
    <h1 class="sub-headings">Facilities</h1>
    <div class="row">
      <div class="card mycard" style="width: 18rem; margin: 20px;"">
      <img class=" card-img-top" src="images/viewCustomers.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Our Customers</h5>
          <p class="card-text">Click here to see the list of our trusted customers.</p>
          <a href="customers.php" class="homebutton btn">View Customers</a>
        </div>
      </div>

      <div class="card mycard" style="width: 18rem; margin: 20px;">
        <img class="card-img-top" src="images/mtransfer.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Transfer Money</h5>
          <p class="card-text">Now money transfer becomes easy, fast and safe.</p>
          <a href="moneyTransfer.php" class="homebutton btn">Transfer Money</a>
        </div>
      </div>
    </div>
  </div>

  <!-- FACILITIES SECTION END-->


  <!-- FOOTER -->

  <footer>
    <h1 id="contact" class="sub-headings">Contact Us<img src="images/logo_small.png" class="logo" alt="logo"></h1>
    <div class="footer-content">
      <div class="left box">
        <h2>About Us</h2>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="social">
            <h2>Social</h2>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i><a>
          </div>
        </div>
      </div>

      <div class="right box">
        <h2>Address</h2>
        <div class="content">
          <div class="location">
            <span><i class="fas fa-map-marker-alt"></i></span>
            <span>Main road, Near mall</span>
          </div>
          <div class="phone">
            <span><i class="fas fa-phone"></i></span>
            <span>+91-123456789</span>
          </div>
          <div class="email">
            <span><i class="fas fa-envelope"></i></span>
            <span>bank@example.com</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <p class="copyright">Copyright <i class="far fa-copyright"></i> 2021 Sparks Bank.</p>

  <!-- FOOTER END-->

</body>
<!-- BOOTSTRAP SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>