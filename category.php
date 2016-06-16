<?php get_header(); ?>
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

                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
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

                                    <?php
                                    if (comments_open() || get_comments_number()) : {
                                        echo('<div class="badge-post">');
                                        echo(get_comments_number());
                                        echo('</div>');
                                    }
                                    endif; ?>

                                </div>
                                <div class="col-md-8">

                                    <div class="post-content">
                                        <?php echo first_post_image() ?>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                }/* конец while */ ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="post-old"><a href="#">older posts ></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">

                <div class="col-lg-12">
                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>