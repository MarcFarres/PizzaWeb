<!DOCTYPE html>
<html lang="en-US">

<?php include('includes/pizzes.php'); ?>

<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-ico" />
    <title>PIZZA NYAM</title>

    <link rel='stylesheet' href='rs-slider/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animsition.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/simple-line-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/pe-icon-7-stroke.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/flaticon.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/owl.carousel.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jquery.easy-pie-chart.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/owl.transitions.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/media.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/custom_script.css' type='text/css' media='all' />

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Merriweather%3A%2C400%7CPatua+One%3A400&amp;ver=1.0.0' type='text/css' media='all' />
    <link href="http://fonts.googleapis.com/css?family=Patua+One:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">


</head>

<body class="home page-template page-template-template-home page-template-template-home-php page page-id-7">
    <div class="animsition global-wrapper">

        <?php 
          $selected = 'pizzes';
          include('header.php');
        ?>

        <div class="container-wrapper">
            <div class="page-bg" style=" background-image: url(upload/bg-pizza.jpg); "></div>
            <div id="fullwidth-container">
                <!-- start container -->
                <div class="page-title-wrapper">
                    <div class="page-title-outher">
                        <div class="page-title-inner">
                            <span class="page-title-icon flaticon-pizza-slice"></span>
                            <h1 class="page-title">Pizzas</h1>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="page-wrapper">
                    <div class="offer-menu2-wrapper">
                        <div class="offer-menu2-items">

<?php foreach ($pizzes as $pizza_cat) { ?>
    <?php foreach ($pizza_cat as $pizza) { ?>
                            <div class="offer-menu2-item-single">

                                <img class="offer-menu2-frame" src="images/frame.png" />
                                <div class="offer-menu2-shadow"></div>
                                <div class="offer-menu2-thumb">
                                    <img class="offer-menu2-inner-frame" src="images/inner-shadow.png" />
                                </div>
                                <div class="offer-menu2-thumb-image">
                                <img src="upload/hawaii-313x220.jpg" width="313" height="220" alt="hawaii" /></div>
                                <div class="clear"></div>
                                <span class="offer-menu2-icon flaticon-pizza-slice"></span>

                                <div class="offer-menu2-details">
                                    <div class="single-offer-menu2-title"><?php echo $pizza['titol'] ?></div>
                                    <div class="single-offer-menu2-content">
                                        <p><?php echo $pizza['ingredients'] ?></p>
                                    </div>
                                    <div class="single-offer-menu2-price"><?php echo $pizza['preu'] ?></div>
                                </div>
                            </div>
<?php 
    }
  } 
?>
                        
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- end page wrapper -->
            </div>
            <!-- end container -->
            <div class="clear"></div>
        </div>
        <!-- end container-wrapper -->
        
<?php include('footer.php') ?>
        
    </div>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='rs-slider/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='rs-slider/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyD3rVzWhxb6EGiqAD9HSrKb22gTo2HTqoA&amp;ver=1.0'></script>

    <script type='text/javascript' src='js/modernizr.custom.js'></script>
    <script type='text/javascript' src='js/jquery.animsition.min.js'></script>
    <script type='text/javascript' src='js/superfish.js'></script>
    <script type='text/javascript' src='js/waypoints.min.js'></script>
    <script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type='text/javascript' src='js/custom-inline-js.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>


</body>
</html>