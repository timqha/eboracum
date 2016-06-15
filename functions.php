<?php
//Вывод первой картинки с поста
function first_post_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  if(empty($first_img)){
   $first_img = "/wp-content/themes/ebracum/img/noimages.jpg";
// укажите путь к изображению, которое будет выводится по умолчанию. 
  }
 else return '<img src="'.$first_img.'">';
}

register_nav_menus(array( 'top' => 'top menu', 
			'bottom' => 'Нижнее меню' ));

function sh_collapse($atts, $content = null) {
// переменные которые приходят
extract(shortcode_atts(array(
"title" => 'Title', // значение заголовка по умолчанию
"id" => 1
), $atts));
// выводим hrml с переменными полученными из шорткода
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


/*КОПКИ РЕДАКТОРА*/
// Добавляем кнопки в текстовый html-редактор
add_action( 'admin_print_footer_scripts', 'add_sheensay_quicktags' );
function add_sheensay_quicktags() {
        //Проверка, определен ли в wordpress скрипт quicktags
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

/*Single tesxt output
*/
add_filter('the_content','htm_image_content_filter',11);

function htm_image_content_filter($content){
	$content = preg_replace("/<img[^>]+\>/i", "", $content);
return $content;
}
?>