<?php if (isset($_GET["id"])){
        $id = $_GET["id"];
}     else {
        $id = "";
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bike Masters</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if ($id === "about"){ print 'class="active"';}?>>
                        <a href='about.php?id=about'>About</a>
                    </li>
                    <li <?php if ($id === "service"){ print 'class="active"';}?>>
                        <a href='services.php?id=service'>Shop Services</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bikes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li <?php if ($id === "on"){ print "class='active'";}?>>
                                <a href='road.php?id=on'>On-Road</a>
                            </li>
                            <li <?php if ($id === "x"){ print 'class="active"';}?>>
                                <a href='xroad.php?id=x'>X-Road</a>
                            </li>
                            <li <?php if ($id === "off"){ print 'class="active"';}?>>
                                <a href='mtb.php?id=off'>Off-Road</a>
                            </li>
                            <li <?php if ($id === "kid"){ print 'class="active"';}?>>
                                <a href='kids.php?id=kid'>Kids</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if ($id === "closeouts"){ print 'class="active"';}?>>
                        <a href='closeouts.php?id=closeouts'>Closeouts Bikes</a>
                    </li>
                    <li <?php if ($id === "contact"){ print 'class="active"';}?>>
                        <a href='contact.php?id=contact'>Contact</a>
                    </li>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav navbar-nav">
                          <a href="tel:1-425-584-7508"><span class="glyphicon glyphicon glyphicon-earphone"></span>425-584-7508&nbsp;</a>
                        </li>
                    </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>