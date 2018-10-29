<?php

//Фильтр от спама
add_filter('pre_comment_on_post', 'verify_spam');
function verify_spam($commentdata) {
      $spam_test_field = trim($_POST['comment']);
  if(!empty($spam_test_field)) wp_die('Спаму нет!');
      $comment_content = trim($_POST['real-comment']);
      $_POST['comment'] = $comment_content;
  return $commentdata;
}


# Breadcrumb
function the_breadcrumb() {
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home').'">';
		echo 'Главная';
		echo "</a> <span>/</span></li><li> ";
		if (is_category() || is_single()) {
			single_cat_title();
			if (is_single()) {
			the_category(', ');
				echo " <span>/</span></li><li> ";
				the_title();
				echo "</li>";
		 }	
		} elseif (is_page()) {
			echo "<li>";
			echo the_title();
			echo "</li>";
		}
		  elseif (is_tag()) {
			echo 'Записи с меткой "'; 
			single_tag_title();
			echo '"'; }
		elseif (is_day()) {echo "Архив за"; the_time('  jS F Y');}
		elseif (is_month()) {echo "Архив "; the_time(' F  Y');}
		elseif (is_year()) {echo "Архив за "; the_time(' Y');}
		elseif (is_author()) {echo "Архив автора";}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "Архив блога";}
		elseif (is_search()) {echo "Результаты поиска";}
			elseif (is_404()) {	echo '404 - Страница не найдена';}
	}
}



function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}



//Произвольное меню
if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menu'=>__('Custom menu'),
		)
	);
}

function custom_menu(){
	echo '<ul>';
	   wp_list_pages('title_li=&');
	echo '</ul>';
}


// Регистрируем сайдбары
if ( function_exists('register_sidebar') ) {
	
    register_sidebar(array(
		'name' => 'Правый сайдбар',
		'before_widget' => '<div class="widget-header">',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3></div><div class="text">',
        'after_widget' => '</div>'
	));

}


// Регистрируем сайдбары
if ( function_exists('register_sidebar') ) {
	
    register_sidebar(array(
		'name' => 'Категории для блога',
		'before_widget' => '<div class="widget-header2">',
        'before_title' => '<h3 class="widget-title2">',
        'after_title' => '</h3><div class="text">',
        'after_widget' => '</div></div>'
	));

}

add_theme_support( 'post-thumbnails' );

?>