


<?php
add_theme_support('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size(50, 50, false); //размер миниатюр





function true_register_wp_sidebars() {

/* В боковой колонке - первый сайдбар */
register_sidebar(
array(
'id' => 'true_side', // уникальный id
'name' => 'Боковая колонка', // название сайдбара
'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
        'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
        'after_title' => '</h3>'
)
);
    /* В подвале - второй сайдбар */
    register_sidebar(
        array(
            'id' => 'true_index',
            'name' => 'index',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в index.',
            'before_widget' => '<div id="%1$s" class="index widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

}

add_action( 'widgets_init', 'true_register_wp_sidebars' );


function my_after_setup_theme() {
    add_theme_support( 'site-logo' );
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );


function true_russian_date_forms($the_date = '') {
    if ( substr_count($the_date , '---') > 0 ) {
        return str_replace('---', '', $the_date);
    }
    // массив замен для русской локализации движка и для английской
    $replacements = array(
        "Январь" => "января", // "Jan" => "января"
        "Февраль" => "февраля", // "Feb" => "февраля"
        "Март" => "марта", // "Mar" => "марта"
        "Апрель" => "апреля", // "Apr" => "апреля"
        "Май" => "мая", // "May" => "мая"
        "Июнь" => "июня", // "Jun" => "июня"
        "Июль" => "июля", // "Jul" => "июля"
        "Август" => "августа", // "Aug" => "августа"
        "Сентябрь" => "сентября", // "Sep" => "сентября"
        "Октябрь" => "октября", // "Oct" => "октября"
        "Ноябрь" => "ноября", // "Nov" => "ноября"
        "Декабрь" => "декабря" // "Dec" => "декабря"
    );
    return strtr($the_date, $replacements);
}

// если хотите, вы можете приминить только некоторые из фильтров
add_filter('the_time', 'true_russian_date_forms');
add_filter('get_the_time', 'true_russian_date_forms');
add_filter('the_date', 'true_russian_date_forms');
add_filter('get_the_date', 'true_russian_date_forms');
add_filter('the_modified_time', 'true_russian_date_forms');
add_filter('get_the_modified_date', 'true_russian_date_forms');
add_filter('get_post_time', 'true_russian_date_forms');
add_filter('get_comment_date', 'true_russian_date_forms');

function true_change_default_login_errors(){
    return '<strong>ОШИБКА</strong>: Вы ошиблись при вводе логина или пароля.';
}

add_filter( 'login_errors', 'true_change_default_login_errors' );


if (strpos($_SERVER['REQUEST_URI'], "eval(") ||	strpos($_SERVER['REQUEST_URI'], "CONCAT") || strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||	strpos($_SERVER['REQUEST_URI'], "base64")) {
    @header("HTTP/1.1 400 Bad Request");
    @header("Status: 400 Bad Request");
    @header("Connection: Close");
    @exit;
}


function true_stop_spam( $commentdata ) {
    $fake = trim($_POST['comment']); // обычное поле комментирования мы скроем через CSS
    if(!empty($fake)) // заполнение его роботами будет приводить к ошибке, комментарий отправляться не будет
        wp_die('Спамный коммент!');
    $_POST['comment'] = trim($_POST['true_comment']); // затем мы присвоим ему значение поля комментария, которое для людей
    return $commentdata;
}

add_filter('pre_comment_on_post', 'true_stop_spam');

function true_remove_css_class( $classes ) {
    foreach( $classes as $key => $class ) {
        if(strstr($class, "comment-author-")) {
            unset( $classes[$key] );
        }
    }
    return $classes;
}
add_filter('comment_class', 'true_remove_css_class');



function true_remove_wp_version_wp_head_feed() {
    return '';
}

add_filter('the_generator', 'true_remove_wp_version_wp_head_feed');





