<?php function true_register_wp_sidebars() {

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