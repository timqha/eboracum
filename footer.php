<!-- Custom Theme JavaScript -->
<section id="footer" class="footer">
    <div class="container">
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">-->
<!--                    <ul class="nav">-->
<!--                        <li class="caption">about</li>-->
<!--                        <li>Videos</li>-->
<!--                        <li>recordings</li>-->
<!--                        <li>education</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">-->
<!--                    <ul class="nav">-->
<!--                        <li class="caption">events</li>-->
<!--                        <li>upcoming</li>-->
<!--                        <li>past</li>-->
<!--                        <li>GALLERY</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">-->
<!--                    <ul class="nav">-->
<!--                        <li class="caption">news</li>-->
<!--                        <li>BLOG</li>-->
<!--                        <li>Reviews</li>-->
<!--                        <li>thomas tudway<br>-->
<!--                            Project-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">-->
<!--                    <ul class="nav">-->
<!--                        <li class="caption">shop</li>-->
<!--                        <li>support us</li>-->
<!--                        <li>buy tickets</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">-->
<!--                    <ul class="nav">-->
<!--                        <li class="caption">contact</li>-->
<!--                        <li>join newsletter</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="caption">about</div>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1', 'menu_class' => 'nav' )); ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="caption">events</div>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2', 'menu_class' => 'nav' )); ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="caption">news</div>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-3', 'menu_class' => 'nav' )); ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="caption">shop</div>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-4', 'menu_class' => 'nav' )); ?>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="caption">contact</div>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-5', 'menu_class' => 'nav' )); ?>
                </div>
            </div>
        </div>
            <div class="col-lg-12">
                <span class="font-roman size-footer color-footer">
                    &copy; Eboracum Baroque, Registered Address Here.
                </span>
            </div>
    </div>
    <a class="top-bottom" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
</section>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/pushy.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/single.js"></script>
<?php wp_footer();?>
</body>
</html>