<!DOCTYPE html>
<html>
<head>
    <title> Messages | Heavenly Health </title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="<?php echo base_url() ?>">HEAVENLY<span>HEALTH</span></a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url('index.php/home/about') ?>" class="nav-link">About</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/news') ?>" class="nav-link">News</a></li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/home/doctors') ?>" class="nav-link">Doctors</a></li>
            <li class="nav-item active"><a href="<?php echo base_url('index.php/home/contacts') ?>" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	 </nav>

	 <img src="<?php echo base_url(); ?>assets/images/bg_6.jpg" class="img-fluid" alt="Responsive image">

   <section class="site-section">
      <div class="container">
          <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
              <h1> Message </h1>
              <span class="subheading">VIEW MESSAGE SENT TO YOU</span>
          </div>
      </div>
      
      <?php foreach ($message as $row): ?> 
      <form method="POST" action="" class="p-5 mt-0 bg-white" style="margin-top: -150px;">
          <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
              <label class="text-black" for="fname">First Name</label>
              <input type="text" id="fname" name="fname" class="form-control" value="<?= $row->fname ?>" disabled>
            </div>
            <div class="col-md-6">
              <label class="text-black" for="lname">Last Name</label>
              <input type="text" id="lname" name="lname" class="form-control" value="<?= $row->lname ?>" disabled>
            </div>
          </div>

          <div class="row form-group"> 
            <div class="col-md-12">
                <label class="text-black" for="email">Email</label> 
                <input type="email" id="email" name="email" class="form-control" value="<?= $row->email ?>" disabled>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label> 
                <input type="subject" id="subject" name="subject" class="form-control" value="<?= $row->subject ?>" disabled>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
                <label class="text-black" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" disabled><?= $row->message ?></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
                <input type="submit" value="Reply" class="btn btn-pill btn-primary btn-md text-white">
            </div>
          </div>
        </form>
        <?php endforeach ?>

        </div>
      </section>

    <footer class="footer">
  <div class="container-fluid px-lg-5">
    <div class="row">
      <div class="col-md-9 py-5">
        <div class="row">
          <div class="col-md-4 mb-md-0 mb-4">
            <h2 class="footer-heading">About us</h2>
            <p>A Project with a theme of "Health".</p>
            <ul class="ftco-footer-social p-0">
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
          </div>
          <div class="col-md-8">
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-10">
                <div class="row">
                  <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Treatment</h2>
                        <ul class="list-unstyled">
                          <li><a href="#" class="py-1 d-block">COVID-19</a></li>
                          <li><a href="#" class="py-1 d-block">Mental Illness</a></li>
                          <li><a href="#" class="py-1 d-block">Trauma</a></li>
                          <li><a href="#" class="py-1 d-block">Disabilities</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Information</h2>
                        <ul class="list-unstyled">
                          <li><a href="#" class="py-1 d-block">Pandemic</a></li>
                          <li><a href="#" class="py-1 d-block">Healthy Life</a></li>
                          <li><a href="#" class="py-1 d-block">Recommended Diet</a></li>
                          <li><a href="#" class="py-1 d-block">Hospitals</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Resources</h2>
                        <ul class="list-unstyled">
                          <li><a href="#" class="py-1 d-block">Terms & Conditions</a></li>
                          <li><a href="#" class="py-1 d-block">Privacy</a></li>
                          <li><a href="#" class="py-1 d-block">Security</a></li>
                          <li><a href="#" class="py-1 d-block">Report</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-md-5">
              <div class="col-md-12">
                <p class="copyright"> Copyright &copy;2020 All rights reserved </p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
            <h2 class="footer-heading">Admin Login</h2>
            <form method="POST" action="<?php echo base_url('index.php/home/login') ?>" class="form-consultation">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control submit px-3">Login</button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </footer>
</body>
</html>