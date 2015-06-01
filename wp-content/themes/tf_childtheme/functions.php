<?php
function dev_common_widget()
{
 register_sidebar(array(
        'name' => esc_attr__( 'Dev Widgets', 'devp'),
        'id' => 'coming-soon',
        'description' => esc_attr__( 'Widget area on the coming soon page', 'devp'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3><span>',
        'after_title' => '</span></h3>'
    ));

	

}
add_action('widgets_init','dev_common_widget');


function dev_footer_widget()
{
 register_sidebar(array(
        'name' => esc_attr__( 'Footer Widgets', 'devfooter'),
        'id' => 'devfooter',
        'description' => esc_attr__( 'Footer widget area', 'devfooter'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3><span>',
        'after_title' => '</span></h3>'
    ));

	

}
add_action('widgets_init','dev_footer_widget');


add_action( 'wp_head', 'my_actionhook_example');
function my_actionhook_example() 
{
echo '<meta name="description" content="Hello world. This meta description was created using my action hookll example." />' . "\n";
}

add_filter( 'wp_title', 'mytest_add_sitename_to_title', 10, 1 );
function mytest_add_sitename_to_title( $title) 
{
		/* Retrieve site name. */
		$name = get_bloginfo( 'name' );

		/* Append site name to $title. */
		$title .= 'test';

		/* Return the title. */
		return $title;
}




add_theme_support( 'post-thumbnails' ); 