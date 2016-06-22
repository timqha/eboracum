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
            <div class="col-md-4">
                <ul class="nav navbar-tabs-custom">
                    <li class="active"><a class="title" data-toggle="tab" href="#project">project</a></li>
                    <li><a class="title" data-toggle="tab" href="#about">about tudway</a></li>
                    <li><a class="title" data-toggle="tab" href="#CD">CD</a></li>
                </ul>
                <div class="tab-content">
                    <div id="project" class="tab-pane fade in active">
                        <div class="barocks">
                            <div class="barocks-img"></div>
                            <div class="barocks-title">
                            <a href="<?php the_permalink();?>">
                                 <?php the_title(); ?>
                            </a>
                           
                            </div>
                        </div>
                       
                    </div>
                    <div id="about" class="tab-pane fade">
                        <div class="barocks">
                            <div class="barocks-img"><img
                                    src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                    alt="art"></div>
                            <div class="barocks-title">ABOUT THOMAS TUDWAY
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit dui dolor, eget
                            fermentum ante
                            ultricies ac. Quisque imperdiet eros quis ex tempor, eget rutrum lorem mattis. Proin
                            sollicitudin
                            suscipit vulputate. Nam faucibus porttitor tempus. Praesent rutrum vehicula enim eget
                            facilisis.
                            Curabitur tempor metus ut dui tempus, non elementum nunc finibus. Sed vitae hendrerit magna.
                        </p>

                        <p>Fusce finibus vel dolor eget sollicitudin. In rutrum egestas tortor sit amet gravida.
                            Pellentesque
                            volutpat urna at pellentesque sagittis. Praesent vel tortor eget metus luctus dignissim.
                            Donec
                            tincidunt mauris quis viverra porta. Cras sed condimentum neque, vel euismod ligula.
                            Vestibulum ante
                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eleifend, odio
                            id
                            blandit vestibulum, odio lectus viverra enim, id dignissim enim libero ac velit. Sed et
                            elementum
                            diam.</p>
                    </div>
                    <div id="CD" class="tab-pane fade">
                        <div class="barocks">
                            <div class="barocks-img"><img
                                    src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                    alt="art"></div>
                            <div class="barocks-title">CD THOMAS TUDWAY
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit dui dolor, eget
                            fermentum ante
                            ultricies ac. Quisque imperdiet eros quis ex tempor, eget rutrum lorem mattis. Proin
                            sollicitudin
                            suscipit vulputate. Nam faucibus porttitor tempus. Praesent rutrum vehicula enim eget
                            facilisis.
                            Curabitur tempor metus ut dui tempus, non elementum nunc finibus. Sed vitae hendrerit magna.
                        </p>

                        <p>Fusce finibus vel dolor eget sollicitudin. In rutrum egestas tortor sit amet gravida.
                            Pellentesque
                            volutpat urna at pellentesque sagittis. Praesent vel tortor eget metus luctus dignissim.
                            Donec
                            tincidunt mauris quis viverra porta. Cras sed condimentum neque, vel euismod ligula.
                            Vestibulum ante
                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eleifend, odio
                            id
                            blandit vestibulum, odio lectus viverra enim, id dignissim enim libero ac velit. Sed et
                            elementum
                            diam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-1 col-md-7 gallery">
                <div class="row">
                      <?php
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
?>
                </div>
            </div>
        </div>
            <?php } }/* конец while */ ?>
    </div>
</section>
<?
get_footer();?>