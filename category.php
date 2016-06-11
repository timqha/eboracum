<?php get_header()?>
<?php get_header("custom1"); ?>
   <section class="container content-text">
    <div class="col-lg-12">
        <!--        <div class="row">-->
        <div class="col-lg-12">
            <div class="barocks title-post-base"><img src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                                      alt="art">
                OUR NEWS!
            </div>
        </div>
        <!--        </div>-->
        <div class="col-md-9">
            <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                <div class="row">
                    <div class="col-lg-12 post-blog">
                        <div class="col-md-4">
                            <div class="title-post font-roman">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div class="date-post">
                                <?php the_date(); ?>
                            </div>

                            <?
                            if ( comments_open() || get_comments_number() ) :
                            {
                                comments_template();
                                echo('<div class="badge-post">');
                                echo (get_comments_number());
                                echo(' </div>');
                            }
                            endif;?>

                        </div>
                        <div class="col-md-8">

                            <div class="post-content">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } }/* конец while */ ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-old"><a href="#">older posts ></a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
           
            <div class="col-lg-12">
                <input class="post-search" type="search" placeholder="* SEARCH">
                <?php get_sidebar();?>
                <div class="aside">
                    <div class="aside-title">
                        recent posts
                    </div>
                    <ul class="nav aside-nav">
                        <li><a href="#">New CD ‘Music for Wimpole Hall’ is now available</a></li>
                        <li><a href="#">Another great conert with Terry Deary</a></li>
                        <li><a href="#">New concert dates are confirmed with NT York</a></li>
                        <li><a href="#">This is yet another headline</a></li>
                        <li><a href="#">So is this, we have really exciting news</a></li>
                    </ul>
                </div>

                <div class="aside">
                    <div class="aside-title">
                        archives
                    </div>
                    <ul class="nav aside-nav">
                        <li><a href="#">April 2016</a></li>
                        <li><a href="#">February 2016</a></li>
                        <li><a href="#">December 2015</a></li>
                        <li><a href="#">October 2015</a></li>
                        <li><a href="#">August 2015</a></li>
                    </ul>
                </div>

                <div class="aside">
                    <div class="aside-title">
                        categories
                    </div>
                    <ul class="nav aside-nav">
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Concerts</a></li>
                        <li><a href="#">General</a></li>
                        <li><a href="#">BaRocks</a></li>
                        <li><a href="#">Thomas Tudway Project</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>