<?php get_search_form();?>
<div class="aside">
    <div class="aside-title">
        Lastest Reviews
    </div>
    <ul class="nav aside-nav">
        <?php $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => 'Reviews',
	'orderby'          => 'date',
	'order'            => 'DESC',
);
$posts_array = get_posts( $args );
        foreach($posts_array as $last){
            echo '<li><a href="' . get_permalink($last->ID) . '">' .   $last->post_title.'</a> </li> ';
        }
?>
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
