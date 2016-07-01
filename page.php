<?php
get_header();
get_header("custom2");
?>


 
    <section class="container content-text single">
        <div class="col-lg-12">
            <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                 <?php
          
$content = split_content();
 
?>
                <div class="row">
            <?php echo $content[1];?>
                   
                <?php } }/* конец while */ ?>
        </div>
    </section>


    <?php get_footer(); ?>