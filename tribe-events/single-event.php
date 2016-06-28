<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();
?>

<div class="container">
    <div id="tribe-events-content" class="tribe-events-single">

	

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	

	<!-- Event header -->
	
	<!-- #tribe-events-header -->

	<?php while ( have_posts() ) :  the_post(); ?>
	<!-- START -->
	
	
	
	<!-- SHOP -->
<div class="basket">
    <img src="<?php echo bloginfo('template_url'); ?>/img/basket.png" alt="bucket">
    <div><a href="#">9</a></div>
</div>
<div class="row">
    <section class="container content-text">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="barocks">
                    <div class="barocks-img"><img src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                                  alt="art"></div>
                    <div class="barocks-title">SHOP
                    </div>
                </div>
            </div>
        </div>
        <div class="row shop-1-bgc">
            <div class="col-md-5">
                <div class="row">
                   <div class="imgwin">
                       <?php echo get_the_post_thumbnail($event_id);?>
                   </div>
                </div>
            </div>
            <div class="col-md-7 ">
                <div class="title"><?php echo  get_the_title($event_id);?></div>
                <div class="text">
                <?php the_content();?>
              <?php if(!tribe_event_in_category("Music")){
                        if(!tribe_event_in_category("Support",$event_id)){
                    echo "<h4>Details</h4><br>Date:<i> ".tribe_get_start_date($event_id, false, 'm.d' )."</i><br>";?>
                <?php echo "Time: <i>".tribe_get_start_date($event_id, false, 'H.i ' ).tribe_get_end_date($event_id, false, '- H.i' )."<br></i>Place: <i>".tribe_get_address($event_id)." ".tribe_get_city($event_id)."</i>";
                        }?>
                </div>
                <div class="col-xs-offset-9 col-xs-3">
                    <button data-toggle="modal" data-target="#myModal" class="button-my-blue">
                        book online
                    </button>
                </div>
                
                 <?php }
                   else {
                    ?>
                    </div>
                     <div class="col-xs-7">
                    <img class="imgw" src="<?php echo bloginfo('template_url'); ?>/img/our-new-CD.png"
                         alt="art">
                </div>
                     <div class="col-xs-offset-2 col-xs-3">
                    <button data-toggle="modal" data-target="#myModal" class="button-my-blue">
                        buy online
                    </button>
                </div>
                    <?php }?>
            </div>
        </div>
</section>
</div>
<section class=" content-text ticket-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav navbar-tabs-custom">
                    <li class="active"><a data-toggle="tab" class="title" href="#tickets">TICKETS</a></li>
                    <li><a data-toggle="tab" class="title" href="#music">MUSIC</a></li>
                    <li><a data-toggle="tab" class="title" href="#support_us">support us</a></li>
                    <li><a data-toggle="tab" class="title" href="#other">other</a></li>
                </ul>
                <div class="row">
                    <div class="col-lg-12 tb-events-scroll tab-content">
                        <table id="tickets" class="tab-pane fade in active table-events">
                           <?php EventsCat("Tickets");?>
                        </table>

                        <table id="music" class="tab-pane fade table-events">
                           <?php EventsCat("Music");?>
                        </table>

                        <table id="support_us" class="tab-pane fade table-events">
                           <?php EventsCat("Support");?>
                        </table>

                        <table id="other" class="tab-pane fade table-events">
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog my-modal-dialog-size">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close my-modal-close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-xs-12">
                        
                        <div class="col-xs-6">
                            <div class="modal-title">
                                <?php echo get_the_title($event_id);?>
                            </div>
<?php if(!tribe_event_in_category("Support",$event_id)){?>
                            <div class="modal-date"> 
                               
                               <?php echo tribe_get_start_date($event_id, false, 'l, d F Y' )?><br>
                                <?php echo tribe_get_start_date($event_id, false, 'H.i ' ).tribe_get_end_date($event_id, false, '- H.i' );?>
                            </div>

                            <div class="modal-place"><?php echo sp_get_venue($event_id).",  ".tribe_get_address($event_id).", ".tribe_get_city($event_id);?><!-- Holy Trinity Church, Micklegate,<br>
                                York, YO10 5CY -->
                            </div>
<?php }?>
                            <div class="row ticket">
                               <?php echo do_shortcode("[ticket event='".$event_id."']");?>
<!--                                <div class="col-xs-1"><input class="number-ticket-modal" type="text" placeholder="0">-->
<!--                                </div>-->
<!--                                <div class="col-xs-10"><span>adult ticket - £12</span></div>-->
                            </div>

<!--                            <div class="row ticket">-->
<!--                                <div class="col-xs-1"><input class="number-ticket-modal" type="text" placeholder="0">-->
<!--                                </div>-->
<!--                                <div class="col-xs-10"><span>concession/nus ticket - £8</span></div>-->
<!--                                -->
<!--                            </div>-->
<!---->
<!--                            <button class="button-my-blue">-->
<!--                                add to cart-->
<!--                            </button>-->
                        </div>
                        <div class="col-xs-6">
                             <div class="imgwin">
                       <?php echo get_the_post_thumbnail($event_id);?>
                   </div>
                            <div class="description"> <?php the_content($event_id);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
    <!-- END -->
		
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>



</div>
</div><!-- #tribe-events-content -->
