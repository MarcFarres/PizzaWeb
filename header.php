<?php $selected_styles = 'menu-item-home current-menu-item current_page_item'; ?>

<div id="header" class="header-wrapper">
            <div class="logo">
                <a href="index.html" title="PIZZA NYAM">
                  <!-- img class="logoImage" src="images/logo.png" alt="PIZZA NYAM" / -->
                  <!-- img class="logoImageRetina" src="images/logo-retina.png" alt="PIZZA NYAM" / -->
                </a>
                <div class="clear"></div>
            </div>
            <div class="menu-wrapper">
                <div class="main-menu">
                    <div class="menu-main-nav-menu-container">
                        <ul id="menu-main-nav-menu" class="sf-menu">
                            <li class="menu-item <?php echo ($selected == 'home' ? $selected_styles : ''); ?>">
                              <a href="index.php">Inici</a>
                            </li>
                            <li class="menu-item <?php echo ($selected == 'menu' ? $selected_styles : ''); ?>">
                              <a href="menu.php">Menú</a>
                            </li>
                            <li class="menu-item <?php echo ($selected == 'pizzes' ? $selected_styles : ''); ?>">
                              <a href="pizzas.php">Pizzes</a>
                            </li>
                            <li class="menu-item <?php echo ($selected == 'about' ? $selected_styles : ''); ?>">  <a href="about.php">Sobre Nosaltres   </a>
                            </li>
                            <li class="menu-item"><a href="contacte.php">Contacte</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-icons-inside">
                    <div class="menu-icon menu-icon-mobile"><span class="menu-icon-create"></span></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer">
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
                <div class="footer-content"> @ 2018 Pizza Naym. Creat per Inscat</div> </div>
        </div>

        <div class="mobile-menu-wrapper">
            <div class="menu-main-nav-menu-container">
                <ul id="menu-main-nav-menu-1" class="mobile-menu">
                    <li class="menu-item menu-item-home current-menu-items current_page_item"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="menu.html">Menu</a></li>
                    <li class="menu-item"><a href="pizzas.html">Pizzas</a></li>
                    <li class="menu-item"><a href="about.html">Qui som</a></li>
                    <li class="menu-item"><a href="contact.html">Contact</a></li>
                    
                </ul>
            </div>
        </div>