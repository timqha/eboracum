<?php
get_header();
get_header("custom2");
?>
 
    <section class="container content-text single">
        <div class="col-lg-12">
            <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
                 <?php
           $content = get_the_content('',FALSE,''); // arguments remove 'more' text
$content = my_multi_col_v2($content);
/*
	$args = array(
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
		'post_type'      => 'attachment',
		'post_parent'    => $post->ID,
		'post_mime_type' => 'image',
		'post_status'    => null,
	);
	$attachments = get_posts($args);
	if ($attachments) {
		foreach ($attachments as $attachment) {
			echo wp_get_attachment_link($attachment->ID, array(500,251), false, false);
		}
	}
    */
?>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="nav navbar-tabs-custom">
                            <li class="active"><a class="title" data-toggle="tab" href="#project">project</a></li>
                            <li><a class="title" data-toggle="tab" href="#about">about tudway</a></li>
                            <li><a class="title" data-toggle="tab" href="#CD">CD</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="project" class="tab-pane fade in active">
                                <div class="barocks">
                                    <div class="barocks-img"><img src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png" alt="art"></div>
                                    <div class="barocks-title">
                                        <?php the_title(); ?>
                                    </div>
                                    
                                </div>
                               <?php echo ($content[1]) ;?>
                            </div>
                            <div id="about" class="tab-pane fade">
                                <div class="barocks">
                                    <div class="barocks-img"><img src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png" alt="art"></div>
                                    <div class="barocks-title">ABOUT THOMAS TUDWAY
                                    </div>
                                </div>
                                <p>
                                    <?php echo ($content[2]) ;?>
                                </p>

                           
                            </div>
                            <div id="CD" class="tab-pane fade">
                                <div class="barocks">
                                    <div class="barocks-img"><img src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png" alt="art"></div>
                                    <div class="barocks-title">CD THOMAS TUDWAY
                                    </div>
                                </div>
                             <?php echo ($content[3]) ;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-7 gallery">
                        <div class="row">
                            <?php echo ($content[0]) ;?>
                        </div>
                    </div>
                </div>
                <?php } }/* конец while */ ?>
        </div>
    </section>
    <?
get_footer();?>