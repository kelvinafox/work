<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Bike Masters</title>
    <link rel="icon" type="image/png" href="pictures/icon.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

</head>

<body>

<!-- Navbar wrapper
================================================== -->
<?php include ("includes/navbar.php"); ?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="pictures/index/carousel/logo.jpg" class="img-responsive">
    </div>
    <div class="item">
      <img src="pictures/index/carousel/brava.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Road Bikes</h1>
          <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
          <p><a class="btn btn-large btn-primary" href="https://kelvinfox.com/work/road.html">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="pictures/index/carousel/gloves.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="pictures/index/carousel/family.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="pictures/index/carousel/roam.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-3 text-center">
      <img class="img-circle" src="pictures/index/models/road.jpg">
      <h2>On-Road Bikes</h2>
      <p>Race, aero, endurance, comfort, long-distance, or around the block.</p>
      <p><a class="btn btn-default" href="road.html">View details</a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle" src="pictures/index/models/xroad.jpg">
      <h2>X-Road/Hybrid Bikes</h2>
      <p>Best of both worlds, for those who want to do it all with one bike.</p>
      <p><a class="btn btn-default" href="xroad.html">View details</a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle" src="pictures/index/models/mtb.jpg">
      <h2>Off-Road Bikes</h2>
      <p>Hardtail, full suspension, cross-country, enduro, or puttering down the trail.</p>
      <p><a class="btn btn-default" href="mtb.html">View details</a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle" src="pictures/index/models/kids.jpg">
      <h2>Kids Bikes</h2>
      <p>Single-speed with coaster brakes, geared with hand brakes, training wheels to fearless trail blaster.</p>
      <p><a class="btn btn-default" href="kids.html">View details</a></p>
    </div>
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="pictures/index/featurettes/hours.jpg">
    <h2 class="featurette-heading">Hours. <span class="text-muted">Swing on By!</span></h2>
    <p class="lead">Mon-Fri: 10-7<br>Tues: 10-5<br>Sat: 10-6<br>Sun: 10-5</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="pictures/index/featurettes/service.jpg">
    <h2 class="featurette-heading">Shop Services. <span class="text-muted">Bike Repair.</span></h2>
    <p class="lead">We offer a full-feature bicycle repair shop. Whether it's a flat tire or your electronic shifters aren't working quite right, we've got it handled.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
    <h2 class="featurette-heading">One More. <span class="text-muted">Subtitle.</span></h2>
    <p class="lead">This is where the text goes if you want to use this.</p>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

<!-- FOOTER -->
<?php include("includes/footer.html"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>