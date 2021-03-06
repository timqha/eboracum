<style>
    .pushy-submenu > a::after {
        background: url("<?php echo bloginfo('template_url'); ?>/img/arrow.svg") no-repeat;
    }
</style>


<nav class="pushy pushy-left">
    <ul class="nav">
        <!-- Submenu -->
        <li class="pushy-submenu">
            <a>ABOUT</a>
            <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1', 'menu_class' => 'nav' )); ?>
        </li>
        <li class="pushy-submenu">
            <a>EVENTS</a>
            <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2', 'menu_class' => 'nav' )); ?>
        </li>
        <li class="pushy-submenu">
            <a>NEWS</a>
            <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-3', 'menu_class' => 'nav' )); ?>
        </li>
        <li class="pushy-submenu">
            <a>SHOP</a>
            <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-4', 'menu_class' => 'nav' )); ?>
        </li>
        <li class="pushy-submenu">
            <a>CONTACT</a>
            <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-5', 'menu_class' => 'nav' )); ?>
        </li>
    </ul>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container"  class="burger">
    <!-- Menu Button -->
<!--    <div class="menu-btn">&#9776; Menu</div>-->
    <div class="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-custom-full navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
         <?php 
            wp_nav_menu( array(
'menu' => 'main_nav',
'menu_class'      => 'nav navbar-nav', 
                'container'=> '',
) );
            ?>
          <!--   <ul class="nav navbar-nav">
                 Hidden li included to remove active class from about link when scrolled up past about section 
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#home">home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">about</a>
                </li>
                <li>
                    <a class="page-scroll" href="#events">events</a>
                </li>
                <li>
                    <a class="page-scroll" href="#news">news</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">contact</a>
                </li>
                <li>
                    <a class="page-scroll" target="_blank" href="http://twitter.com/eboracumbaroque"><i
                            class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a class="page-scroll" target="_blank" href="http://facebook.com/EboracumBaroque"><i
                            class="fa fa-facebook"></i></a>
                </li>
            </ul> -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/header-base.jpg);">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="logo-head-1"><img class="logo-head"
                                                  src="<?php echo bloginfo('template_url'); ?>/img/logo-head.png"
                                                  alt="art"></div>
                    <div><img class="logo-head-2" src="<?php echo bloginfo('template_url'); ?>/img/stylich.png"
                              alt="art"></div>
                    <div class="intro-text">the guardian</div>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
