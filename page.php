<?php
get_header();
get_header("custom2");
?>
   <section class="container content-text">
    <div class="col-lg-12">

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
                            <div class="barocks-img"><img
                                    src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                    alt="art"></div>
                            <div class="barocks-title">THOMAS TUDWAY
                                PROJECT
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
                    <div class="col-md-6"><img src="<?php echo bloginfo('template_url'); ?>/img/THOMAS-TUDWAY-1.jpg"
                                               alt="eduction-1"></div>
                    <div class="col-md-6"><img src="<?php echo bloginfo('template_url'); ?>/img/THOMAS-TUDWAY-2.jpg"
                                               alt="eduction-2"></div>
                    <div class="col-md-6"><img src="<?php echo bloginfo('template_url'); ?>/img/THOMAS-TUDWAY-3.jpg"
                                               alt="eduction-3"></div>
                    <div class="col-md-6"><img src="<?php echo bloginfo('template_url'); ?>/img/THOMAS-TUDWAY-4.jpg"
                                               alt="eduction-4"></div>
                </div>
            </div>
        </div>
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
    </div>
</section>
<?
get_footer();?>