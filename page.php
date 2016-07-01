<?php
get_header();
get_header("custom2");
?>
   <section class="container content-text single">
    <div class="col-lg-12">
 <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
        <div class="row">
           <?php 
                               The_content();
                                ?>

            </div>
        </div>
            <?php } }/* конец while */ ?>
    </div>
</section>
<?
get_footer();?>