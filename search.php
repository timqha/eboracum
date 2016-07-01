<?php get_header()?>
<?php get_header("custom2"); ?>
<div class="container">
    <div class="content">
		<h1><?php echo 'Search result: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
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
            <?php endwhile; ?>
        <?php
        else :
            echo "<div class='row'> <div class='container'>No results for this </div></div>";
        endif;
        ?>	
</div>
</div>
<?php get_footer()?>