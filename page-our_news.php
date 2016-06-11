<?php get_header()?>
<?php get_header("custom2"); ?>
   <section class="container content-text">
    <div class="col-lg-12">
        <!--        <div class="row">-->
        <div class="col-lg-12">
            <div class="barocks">
                <div class="barocks-img"><img
                        src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                        alt="art"></div>
                <div class="barocks-title">OUR NEWS!
                </div>
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
                        <div class="badge-post">
                           <?
                            	if ( comments_open() || get_comments_number() ) :
				comments_template();
                                else: echo ("0");
			endif;?>
                        </div>
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
                <div class="col-lg-12 post-blog">
                    <div class="col-md-4">
                        <div class="title-post font-roman">
                            New CD ‘Music for Wimpole Hall’ is now available
                        </div>
                        <div class="date-post">
                            17 November 2016
                        </div>
                        <div class="badge-post">
                            2
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/blog-post-1.jpg" alt="blog-post">
                        <div class="post-content">Fusce finibus vel dolor eget sollicitudin. In rutrum egestas tortor
                            sit amet gravida. Pellentesque volutpat urna at pellentesque sagittis. Praesent vel tortor
                            eget metus luctus dignissim. Donec tincidunt mauris quis viverra porta. Cras sed condimentum
                            neque, vel euismod ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Sed eleifend, odio id blandit vestibulum, odio lectus viverra enim,
                            id dignissim enim libero ac velit. Sed et elementum diam.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 post-blog">
                    <div class="col-md-4">
                        <div class="title-post font-roman">
                            Another great concert with Terry Deary
                        </div>
                        <div class="date-post">
                            23 April 2016
                        </div>
                        <div class="badge-post">
                            8
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/blog-post-2.jpg" alt="blog-post">
                        <div class="post-content">Fusce finibus vel dolor eget sollicitudin. In rutrum egestas tortor
                            sit amet gravida. Pellentesque volutpat urna at pellentesque sagittis. Praesent vel tortor
                            eget metus luctus dignissim. Donec tincidunt mauris quis viverra porta. Cras sed condimentum
                            neque, vel euismod ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Sed eleifend, odio id blandit vestibulum, odio lectus viverra enim,
                            id dignissim enim libero ac velit. Sed et elementum diam.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-old"><a href="#">older posts ></a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="col-lg-12">
                <input class="post-search" type="search" placeholder="* SEARCH">
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