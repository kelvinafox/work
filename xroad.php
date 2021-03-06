<!doctype html>
<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>X-Road Bikes | Bike Masters</title>
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

        <script src="js/content/xroad_content.js"></script>

	</head>
	<body>

<!-- Navbar wrapper
================================================== -->
    <?php include("includes/navbar.php"); ?>

<!-- Bike Content
================================================== -->
    <div class="container">

        <!-- Giant Brand -->
        <div class="container">
            <h2 class="page-header">Giant X-Road Bikes</h2>
        </div>
        <div id="catalogue" class="container-fluid">
            <!-- Call JavaScript File to Load Giant Content -->
            <script src="js/thumb-scripts/giant.js"></script>
        </div>

        <!-- Liv Brand -->
        <div class="container">
            <h2 class="page-header">Liv X-Road Bikes</h2>
        </div>
        <div id="catalogue-liv" class="container-fluid">
            <!-- Call JavaScript File to Load Giant Content -->
            <script src="js/thumb-scripts/liv.js"></script>
        </div>
    </div>

    <hr>

<!-- FOOTER -->
<?php include("includes/footer.html"); ?>


<!-- MUST STAY ON THE BOTTOM -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

        <!-- Modal Scripts -->
        <script>
        
        /* Giant */
        for (i = 0; i < num_items_giant; i++) {
            setupButton("btn-giant" + i, "modal-giant" + i);
        }
        
        /* Liv */
        for (i = 0; i < num_items_liv; i++) {
            setupButton("btn-liv" + i, "modal-liv" + i);
        }
        
        function setupButton(button, modal){
            $(document).ready(function(){
                $("#" + button).click(function(){
                    $("#" + modal).modal();
                });
            });
        }
        </script>
        <script>
			/* Script waits for an object within the body to be clicked with the class of 'btn'.
			 * Once that requirement has been met it gets the value of the button as well as the
			 * id of the button. and then depending on the id of the button, it sends the content
			 * page what button number and whether it was giant or liv.
			 */
            $("body").on('click', '.btn', function(){
            var buttonVal = $(this).val();
			var ID = this.id;
			var buttonID = ID.replace(/[0-9]/g, ''); //Takes the button ID and removes the number at the end for easier string comparison.
			if (buttonID == "btn-giant") {
			   $("#giant-dialog" + buttonVal).load('xroad_content.php', {num : buttonVal, id : buttonID})
            }
			if (buttonID == "btn-liv"){
			   $("#liv-dialog" + buttonVal).load('xroad_content.php', {num : buttonVal, id : buttonID})
            }
        })
        </script>

	</body>
</html>