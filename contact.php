<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Bike Masters</title>
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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EjUyMzg2MiBTRSBLZW50IEthbmdsZXkgUmQsIE1hcGxlIFZhbGxleSwgV0EgOTgwMzgsIFVTQQ&key=AIzaSyCLwNyUQdbAqBfFcgVnIgEZsYs2bWblfoY"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    23862 SE Kent-Kangley Rd<br>Maple Valley, WA 98038<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: <a href="tel:1-425-584-7508">(425) 584-7508&nbsp;</a></p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:info@bikemasters.net">info@bikemasters.net</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 10:00 AM to 7:00 PM<br><span class="tab"></span>Tuesday: 10:00 AM to 5:00 PM<br><span class="tab"></span>Saturday: 10:00 AM to 6:00 PM<br><span class="tab"></span>Sunday: 12:00 PM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/BikeMastersandBoards/"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/bikemastersmv/"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button name="SUBMIT"type="submit" class="btn btn-primary" onclick="this.disabled='disabled'">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->        

<!-- FOOTER -->
<footer class="footer-distributed">
  <div class="footer-left">
    <h3><span>Bike Masters</span></h3>
    <p class="footer-links">
      <a href="index.html">Home</a>
      -
      <a href="about.html">About</a>
      -
      <a href="services.html">Shop Services</a>
      -
      <a href="contact.html">Contact</a>
    </p>
    <p class="footer-company-name">Bike Masters Inc. &copy; 2015</p>
  </div>

  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>23862 SE Kent-Kangley RD</span> Maple Valley, Wa</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p><a href="tel:1-425-584-7508">425-584-7508</a></p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:info@bikemasters.net">info@bikemasters.net</a></p>
    </div>
  </div>

  <div class="footer-right">
    <p class="footer-company-about">
      <span>Hours</span>
      Monday - Friday: 10:00 AM to 7:00 PM<br>
      Tuesday: 10:00AM to 5:00 PM<br>
      Saturday: 10:00 AM to 6:00 PM<br>
      Sunday: 12:00 PM to 5:00 PM
    </p>
    <div class="footer-icons">
      <a href="https://www.facebook.com/BikeMastersandBoards/"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/bikemastersmv/"><i class="fa fa-twitter"></i></a>
    </div>
  </div>
</footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
