<?php
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
}

function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function first_post_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  if(empty($first_img)){
   $first_img = "/wp-content/themes/ebracum/img/noimages.jpg";
  }
 else return '<img src="'.$first_img.'">';
}

register_nav_menus(array(
    'top' => 'top menu',
    'footer-menu-1' => __('Footer Menu 1'),
    'footer-menu-2' => __('Footer Menu 2'),
    'footer-menu-3' => __('Footer Menu 3'),
    'footer-menu-4' => __('Footer Menu 4'),
    'footer-menu-5' => __('Footer Menu 5'),
    'bottom' => 'Нижнее меню'));

function sh_collapse($atts, $content = null) {
extract(shortcode_atts(array(
"title" => 'Title', 
"id" => 1
), $atts));
return '<a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseExample'.$id.'" aria-expanded="false" aria-controls="collapseExample'.$id.'">
' . $title . '
</a>
<div class="collapse" id="collapseExample'.$id.'">
<div class="well">
' . $content . '
</div>
</div>';
}
add_shortcode('collapse', 'sh_collapse');


add_action( 'admin_print_footer_scripts', 'add_sheensay_quicktags' );
function add_sheensay_quicktags() {
    if (wp_script_is('quicktags')) :
?>
    <script type="text/javascript">
        if (QTags) {
            // QTags.addButton( id, display, arg1, arg2, access_key, title, priority, instance );
            QTags.addButton('sheens_p', 'p', '<p>', '</p>', 'p', 'Параграф', 1);
            QTags.addButton('sheens_h2', 'h2', '<h2>', '</h2>', 'h2', 'Заголовок 2 уровня', 2);
            QTags.addButton('sheens_h3', 'h3', '<h3>', '</h3>', 'h3', 'Заголовок 3 уровня', 2);
            QTags.addButton('sheens_h4', 'h4', '<h4>', '</h4>', 'h4', 'Заголовок 4 уровня', 2);
            QTags.addButton('sheens_collapse', 'Collapse', '<p>[collapse title="Заголовок кнопки" id="1"]', 'Тут скрытый текст....[/collapse]</p>', '', 'Collapse', 3);
        }
    </script>
    <?php endif;
}

//Single Text outpu
function strip_images($content){
   return preg_replace('/<img[^>]+./','',$content);
}


function my_multi_col_v2($content){
	// run through a couple of essential tasks to prepare the content
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
 
	// the first "more" is converted to a span with ID
	$columns = preg_split('/(<span id="more-\d+"><\/span>)|(<!--more-->)<\/p>/', $content);
	$col_count = count($columns);
 
	if($col_count > 1) {
		for($i=0; $i<$col_count; $i++) {
			// check to see if there is a final </p>, if not add it
			if(!preg_match('/<\/p>\s?$/', $columns[$i]) )  {
				$columns[$i] .= '</p>';
			}
			// check to see if there is an appending </p>, if there is, remove
			$columns[$i] = preg_replace('/^\s?<\/p>/', '', $columns[$i]);
			
            $test[$i] = $columns[$i];
           
		}
		
        return $test;
	}
	else {
		// this page does not have dynamic columns
		$content = wpautop($content);
        $content = str_replace('<p></p>', '', $content);
        return $content;
	}
	// remove any left over empty <p> tags
	$content = str_replace('<p></p>', '', $content);
}


function register_my_widgets(){
	    register_sidebar(array(
        'name' => __('Twitter widget'),
        'id' => 'postin-widget-area',
        'description' => __('Widget in a posts'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));
}
add_action( 'widgets_init', 'register_my_widgets' );


function show_image_post(){
	global $post;
	preg_match_all("/<img[^>]+\>/i", $post->post_content, $img_mas);
	foreach ($img_mas[0] as $img)
	echo $img;
}


function split_content() {
 
    global $more;
    $more = true;
    $content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
    for($c = 0, $csize = count($content); $c < $csize; $c++) {
        $content[$c] = apply_filters('the_content', $content[$c]);
    }
    return $content;
 
}

//function that load Past Events in index
function EventsPost($year,$ms, $me){
$posts = get_posts( array('post_type' => 'tribe_events') );
//If Month start and mont end query typed
    echo "<table  class='table-events'>";
        foreach($posts as $post){
             $EventMonth = tribe_get_start_date( $post->ID, false, 'm' );
                 if((tribe_get_start_date( $post->ID, false, 'Y' )==$year) && ( $EventMonth >= $ms) && ($EventMonth <=$me)){
                          
                          $output = "<td>".get_the_post_thumbnail( $post->ID)."</td>".
                              "<td class='tac'>".
                                "<div class='big-number'>".tribe_get_start_date( $post->ID, false, 'd' )."</div>".
                                "<div class='month'>".tribe_get_start_date( $post->ID, false, 'F' )."</div>
                            </td>". "
                            <td class='line'>".
                              "<div class='table-title'>".$post->post_title."</div>
                              <div>".sp_get_venue($post->ID)."<br>".tribe_get_start_date( $post->ID, false, 'H.i ' ).tribe_get_end_date( $post->ID, false, '- H.i' )."</div>
                              </td>".
                              "<td class='text-event'>".tribe_events_get_the_excerpt($post->ID)."</td>".
                              "<td>
                                <div>
                                        <a href=".$post->guid.">
                                 book online
                                </a>
                                </div>
                            </td>";
                          
                     
               echo "<tr>".$output."</tr>";
          
                 }
        }
    if(!$output){
        echo "There is no content here";
    }
    echo "</table>";
}

function EventsPosts($year){
    $posts = get_posts( array('post_type' => 'tribe_events') );
      foreach($posts as $post){
                 if(tribe_get_start_date( $post->ID, false, 'Y' )==$year){
                     $output = "<li class='past-events-ln'><div>".tribe_get_start_date( $post->ID, false, 'd.m' )."<a href=".$post->guid.">".$post->post_title."<i> ".sp_get_venue($post->ID)."</i>"."</a></div></li>";
               echo "<ul class='nav'>".$output."</ul>";
                     
              }         
                  }
                  if(!$output){
       echo "There is no content for this";
   }
}

function EventsCat($cat){
    $posts = get_posts( array('post_type' => 'tribe_events',
                             'posts_per_page'=>'100'));
    echo "<table class='table-events'>";
    foreach($posts as $post){
                 if((tribe_event_in_category($cat,$post->ID)) && (tribe_get_end_date( $post->ID, false, 'Ymd' ) > date('Ymd'))){
                     
                         $output = "<td>".get_the_post_thumbnail( $post->ID)."</td>"."<td class='tac'>"."<div class='big-number'>".tribe_get_start_date( $post->ID, false, 'd' )."</div>"."<div class='month'>".tribe_get_start_date( $post->ID, false, 'F' )."</div></td>". "<td class='line'>"."<div class='table-title'>".$post->post_title."</div><div>".sp_get_venue($post->ID)."<br>".tribe_get_start_date( $post->ID, false, 'H.i ' ).tribe_get_end_date( $post->ID, false, '- H.i' )."</div></td>"."<td class='text-event'>".tribe_events_get_the_excerpt($post->ID)."</td>"."<td>
                                <div>
                                        <a href=".$post->guid.">
                                 book online
                                </a>
                                </div>
                            </td>";
               echo "<tr>".$output."</tr>";
                     
                     
              }
                  }
    echo "</table>";
}
function EventsCatMusic(){
    $posts = get_posts( array('post_type' => 'tribe_events',
                             'posts_per_page'=>'100'));
    echo "<table class='table-events'>";
    foreach($posts as $post){
                 if((tribe_event_in_category("Music",$post->ID)) && (tribe_get_end_date( $post->ID, false, 'Ymd' ) > date('Ymd'))){
                         $output = "<td>".get_the_post_thumbnail( $post->ID)."</td>"."<td class='tac'>"."<div class='big-number'>".tribe_get_start_date( $post->ID, false, 'd' )."</div>"."<div class='month'>".tribe_get_start_date( $post->ID, false, 'F' )."</div></td>". "<td class='line'>"."<div class='table-title'>".$post->post_title."</div><div>".sp_get_venue($post->ID)."<br>".tribe_get_start_date( $post->ID, false, 'H.i ' ).tribe_get_end_date( $post->ID, false, '- H.i' )."</div></td>"."<td class='text-event'>".tribe_events_get_the_excerpt($post->ID)."</td>"."<td>
                                <div>
                                        <a href=".$post->guid.">
                                 book online
                                </a>
                                </div>
                            </td>";
               echo "<tr>".$output."</tr>";
              }
       
                  }
    echo "</table>";
}

function EventsCatSup(){
    $posts = get_posts( array('post_type' => 'tribe_events',
                             'posts_per_page'=>'100') );
    echo "<table class='table-events'>";
    foreach($posts as $post){
                 if((tribe_event_in_category("Support",$post->ID))){
                          $output = "<td>".get_the_post_thumbnail( $post->ID)."</td>"."<td class='tac'>"."</td>". "<td class='line'>"."<div class='table-title'>".$post->post_title."</div><div>".sp_get_venue($post->ID)."</td>"."<td class='text-event'>".tribe_events_get_the_excerpt($post->ID)."</td>"."<td>
                                <div>
                                        <a href=".$post->guid.">
                                 book online
                                </a>
                                </div>
                            </td>";
               echo "<tr>".$output."</tr>";
                     
              }
       
                  }
    echo "</table>";
    
}
 
function TableEventsIndex(){
    $date = date('m');
    $posts = get_posts( array('post_type' => 'tribe_events') );
        if(($date>="1") && ($date<"4")){
    $ms="01";
    $me="04";
    }
       if(($date>="4") && ($date<"8")){
    $ms="04";
    $me="09";
    }
          if(($date>="8") && ($date<"12")){
    $ms="8";
    $me="13";
    }
    echo "<table class='table-striped table-content'>";
     foreach($posts as $post){
          $EventMonth = tribe_get_start_date( $post->ID, false, 'm' );
         if(( $EventMonth >= $ms) && ($EventMonth < $me) && (tribe_get_start_date( $post->ID, false, 'Y' )==date('Y'))){
           $output = "<td class='tac'>"."<div class='big-number'>".tribe_get_start_date( $post->ID, false, 'd' )."</div>"."<div class='month'>".tribe_get_start_date( $post->ID, false, 'F' )."</div></td>". "<td class='line'>"."<div class='table-title'>".$post->post_title."</div><div>".sp_get_venue($post->ID)."<br>".tribe_get_start_date( $post->ID, false, 'H.i ' ).tribe_get_end_date( $post->ID, false, '- H.i' )."</div></td>"."<td class='text-event'>".tribe_events_get_the_excerpt($post->ID)."</td>"."<td>
                            </td>";
                          
                     
               echo "<tr>".$output."</tr>";
       
            
        }}
    echo "</table>";
}
   
?>