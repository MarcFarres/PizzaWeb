<!DOCTYPE html>
<html lang="en-US">


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
          $selected = 'home';
          include('header.php');
        ?>
        <div class="container-wrapper">
            <div class="page-bg" style=" background-image: url(upload/bg-pizza.jpg); "></div>
            <div id="container" class="template-contact-container">
                <!-- start container -->
                <div class="page-title-wrapper">
                    <div class="page-title-outher">
                        <div class="page-title-inner">
                            <span class="page-title-icon flaticon-pizza-slice"></span>
                            <h1 class="page-title">Contacte</h1>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="page-wrapper">
                    <div class="contact-maps">
                        <div id="map_canvas" class="mapStyleClass"></div>
                    </div>
                    <div class="contact-info-wrapper">
                        <div class="contact-details">
                            <div class="contact-detail contact-detail1">
                                <div class="contact-detail-title">Adreça</div>
                                <div class="contact-detail-content">
                                    <p>Passeig de l'Industria nº 41<br /> Berga - Barcelona/p>
                                </div>
                            </div>
                            <div class="contact-detail contact-detail2">
                                <div class="contact-detail-title">Truca o escriu</div>
                                <div class="contact-detail-content">
                                    <p><strong>Telefon / </strong>93 821 03 64<br />
                                        <strong>Email / </strong>pizza.nyam@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-detail contact-detail3">
                                <div class="contact-detail-title">Els nostres Horaris</div>
                                <div class="contact-detail-content">
                                    <p><strong>Diumenge a Divendres / </strong>12am – 11pm<br />
                                        <strong>Dissabtes / </strong>12am – 1am<br />
                                        <strong>Dilluns</strong> (Tancat)</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form-wrapper">
                            <div role="form" class="wpcf7" id="wpcf7-f49-p15-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>

                                <form id="contact-form" action="#">
                                    <div class="albertos-contact-form">
                                        <div class="contact-detail-title">Contacte Amb nosaltres</div>
                                        <div class="app-name"><span class="wpcf7-form-control-wrap name-input">
                                            <input name="name" id="name" type="text" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" /></span></div>
                                        <div class="app-phone"><span class="wpcf7-form-control-wrap email-input">
                                            <input name="mail" id="mail" type="text"  value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span></div>
                                        <p><span class="wpcf7-form-control-wrap appointment-message">
                                            <textarea name="comment" id="comment"  cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span> </p>
                                        <div class="clear"></div>
                                        <div class="contact-submit"><input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit"  id="submit_contact" /><div id="msg" class="message"></div></div>
                                    </div>
                                </form>
                            </div>
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


        <div class="footer2">
            <div class="footer-socials">
                <ul class="socials-sh">
                    <li>
                        <a class="fa sh-socials-url fa-twitter" href="#" title="Twitter" target="_blank"></a>
                    </li>
                    <li>
                        <a class="fa sh-socials-url fa-facebook" href="#" title="Facebook" target="_blank"></a>
                    </li>
                    <li>
                        <a class="fa sh-socials-url fa-linkedin" href="#" title="LinkedIn" target="_blank"></a>
                    </li>
                    <li>
                        <a class="fa sh-socials-url fa-google-plus" href="#" title="Google Plus" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <div class="footer-content">
                @ 2018 Inscat 
        </div>
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
    <script type='text/javascript' src='js/contact-form.js'></script>
    <script type='text/javascript' src='js/custom-inline-js.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>


</body>
</html>