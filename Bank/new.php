<?php
session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSF Bank</title>
  <link rel="apple-touch-icon" sizes="57x57" href="Images/Favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="Images/Favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="Images/Favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="Images/Favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="Images/Favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="Images/Favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="Images/Favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="Images/Favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="Images/Favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="Images/Favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Images/Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="Images/Favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Images/Favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./index.js"></script>
    <script src="content/js/jquery.min.js"></script>
    <script src="content/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
          $('.dropdown-toggle').dropdown();
      });
    </script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>



<!-----------------------------------------------------------Nav-Bar-------------------------------------------------------------->

  <div class="header-background">
    <div id="nav" class="sticky-nav">
      <nav class="navbar navbar-expand-lg nav-link navbar-nav shadow-sm fixed-top navbar-dark" style="background: linear-gradient(to right, #4b79a1, #283e51)"; >
        <div class="container-fluid"> 
           
            <span class="ml-3 font-weight-bold TSF" style="font-size: xx-large ;" >TSF Bank</span>
           
          <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbar4">
            <ul class="navbar-nav mr-auto pl-lg-4">
              <li class="nav-item px-lg-2"> <a class="nav-link" href="index.html"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>&nbsp Home</a> </li>
      
              <li class="nav-item px-lg-2"> <a class="nav-link" href="./index.html #aboutus"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>&nbsp About Us</a> </li>
      
              <li class="nav-item px-lg-2 "> <a class="nav-link" href="./index.html #ourservices"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-calculator"></i></span>&nbsp Services</a> </li>

              <li class="nav-item px-lg-2 dropdown d-menu drop-menu">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>Resources
                
                <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
                </a>
                <div class="dropdown-menu shadow-sm sm-menu drop" aria-labelledby="dropdown01">
                <a class="dropdown-item drop-item" href="./new.php">New User</a>
                <a class="dropdown-item drop-item" href="./users.php">View Users</a>
                <a class="dropdown-item drop-item" href="./transactions.php">Transaction History</a>
                </div>
              </li>

              <li class="nav-item px-lg-2"> <a class="nav-link" href="./index.html #contactus"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>&nbsp Contact Us</a> </li>
            </ul>

            <form class="form-inline my-2 my-lg-0 search">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn my-2 my-sm-0" type="submit">Search</button>
            </form>
            
          </div>
        </div>
      </nav>
    </div>
    <?php
          if(isset($_SESSION['status'])) ;
          {
            
  ?>
                <div class="alert alert-success alert-dismissible fade show msg" role="alert">
                <?php  echo(@$_SESSION["status"]) ;?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
  <?php
            unset($_SESSION["status"]) ;
          }
  ?>

  </div>


  
        <br>

  <!-----------------------------------------------------------Nav-Bar-------------------------------------------------------------->

<form action="insert.php" method="post">
  <div class="contact">
       
    <div class="card border-primary rounded-0">
      <div class="card-header p-0">
        <div class=" text-white text-center py-2" style="background-color: #4b79a1;">
        
        
        <h3><i class="fa fa-user"></i> Join Us</h3>

        </div>
      </div>
      <div class="card-body p-3">

        <div class="form-group">
          <label> Your name </label>
          <div class="input-group">
            <input value="" type="text" name="Name" required class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name">
          </div>
        </div>

        <div class="form-group">
          <label>Your email</label>
          <div class="input-group mb-2 mb-sm-0">
            <input type="email" value="" name="Email" required class="form-control" id="inlineFormInputGroupUsername" placeholder="Your Email">
          </div>
        </div>

        <div class="form-group">
          <label>Initial Balance</label>
          <div class="input-group mb-2 mb-sm-0">
            <input type="text" value="" name="Balance" required 
            class="form-control" id="inlineFormInputGroupUsername" placeholder="Initial Balance">
          </div>
          
        </div>
        <div class="text-center">
          <input type="submit" name="submit" value="SUBMIT" class="btn btn-block rounded-0 py-2">
        </div>

      </div>

    </div>
    </div>
</form>

    <!-----------------------------------------------------------Footer--------------------------------------------------------------->
  <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">

              <ul class="list-unstyled">

                <li><a href="./index.html #aboutus">About Us</a></li>
                <li><a href="./index.html #ourservices">Our Services</a></li>
                <li><a href="./index.html #contactus">Contact Us</a></li>
                <li><a href="./new.php">New Customer</a></li>
                <li><a href="./users.php">View All Customers</a></li>
                <li><a href="./transactions.php">View Transactions</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">

            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">

            </div>
          </div>
          <div class="col-md-3">
            <h4>Connect With Us</h4>
            <ul class="social-network social-circle">
              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" class="icoYouTube" title="You Tube"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 copy">
            <p class="text-center">&copy; Copyright 2021 - TSF. All rights reserved.</p>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-----------------------------------------------------------Footer-------------------------------------------------------------->


 
</body>
</html>