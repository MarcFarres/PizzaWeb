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
    <title>Pizza Nyam, Menú</title>

   <?php include('styles.php'); ?>

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Merriweather%3A%2C400%7CPatua+One%3A400&amp;ver=1.0.0' type='text/css' media='all' />
    <link href="http://fonts.googleapis.com/css?family=Patua+One:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">


</head>

<body class="home page-template page-template-template-home page-template-template-home-php page page-id-7">
    <div class="animsition global-wrapper">
        
        <?php 
          $selected = 'menu';
          include('header.php');
        ?>

        <div class="container-wrapper">
            <div class="page-bg" style=" background-image: url(images/bg-pizza.jpg); "></div>
            <div id="container">
                <!-- start container -->
                <div class="page-title-wrapper">
                    <div class="page-title-outher">
                        <div class="page-title-inner">
                            <span class="page-title-icon flaticon-pizza-slice"></span>
                            <h1 class="page-title">El nostre menú</h1>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="page-wrapper" id="menu-container">
                    <div class="offer-menu-wrapper">
                        <ul id="filters" class="single-offer-category-filter option-set" data-option-key="filter">
                <?php $counter = 1; ?>
                <?php foreach ($menu as $cat=>$product) { ?>
                            <li class="filter-cat">
                                <a class="<?php if($counter==1){echo 'selected';} ?>" 
                                   href="#filter" 
                                   data-option-value=".cat<?php echo $counter; ?>"><?php echo $cat; ?>    
                                </a>
                            </li>
                            <?php $counter++; ?>
                <?php } // Fi de menú de categories ---------------------- ?>
                        </ul>
                        <div class="offer-menu-items">
                            
<?php $counter = 1; ?>
<?php foreach ($menu as $cat=>$products) { ?>
                            <div class="single-offer-category-item isotope-item cat<?php echo $counter; ?>">
                            <?php $counter++; ?>
<?php foreach ($products as $product) { ?>

                            
                                <div class="single-offer-item">
                                    <div class="single-offer-details">
                                        <div class="single-offer-title"><?php echo $product['titol'] ?></div>
                                        <div class="single-offer-content">
                                            <p><?php echo $product['ingredients'] ?></p>
                                        </div>
                                    </div>
                                    <div class="single-offer-price"><?php echo $product['preu'] ?></div>
                                    <div class="clear"></div>
                                </div>
                            

<?php } // fi de les categories -------------------------------- ?>
                            </div>
<?php } // fi dels productes -------------------------------- ?>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- end offer-menu-wrapper -->
                </div>
                <!-- end page wrapper -->
            </div>
            <!-- end container -->
            <div class="clear"></div>
        </div>
        <!-- end container-wrapper -->

         <?php include('footer.php'); ?>
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