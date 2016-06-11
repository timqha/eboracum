<?php if ( is_active_sidebar( 'true_foot' ) ) :
	dynamic_sidebar( 'true_foot' );
else :
	// код по умолчанию на случай, если сайдбар пустой
endif;?>

    <div class="aside">
        <div class="aside-title">
            Categories
        </div>
        <ul class="nav aside-nav">
            <?php wp_list_categories("title_li=");?>
        </ul>
    </div>
    <div class="aside">
        <div class="aside-title">
            Archives
        </div>
        <ul class="nav aside-nav">
            <?php wp_get_archives("title_li=");?>
        </ul>
    </div>
     <div class="aside">
        <div class="aside-title">
            Recent Posts
        </div>
        <ul class="nav aside-nav">
            <?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
?>
        </ul>
    </div>