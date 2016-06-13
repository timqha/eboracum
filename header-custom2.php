<div style="height: 72px"></div>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

                    <a class="navbar-brand" href="#page-top">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="eduction-1">
                    </a>
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
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>