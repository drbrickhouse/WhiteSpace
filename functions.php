<?php
//Stylesheets
function whitespace_theme_styles() {
  //Font Awesome
  wp_enqueue_style('font_awesome', get_template_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css');
  //Bootstrap
  wp_enqueue_style('boostrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
  //Base CSS
  wp_enqueue_style('base_css', get_template_directory_uri() . '/css/whitespace_base.css');
  //Main CSS
  wp_enqueue_style('main_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'whitespace_theme_styles');

//Javascript
function whitespace_theme_js() {
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'whitespace_theme_js');

//Enable features
function whitespace_enable_feautres() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );
  add_filter('widget_text','do_shortcode');
  //Allow PHP in widgets that use widget_tex filter
  /*
  function execute_php($html){
       if(strpos($html,"<"."?php")!==false){
            ob_start();
            eval("?".">".$html);
            $html=ob_get_contents();
            ob_end_clean();
       }
       return $html;
  }
  add_filter('widget_text','execute_php',100);
  */
}

add_action('init', 'whitespace_enable_feautres');

//Disable Adding Paragraphs
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//Navigation Menus
function register_theme_menus() {
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu', 'bootpress'),
    'footer-menu' => __('Footer Menu', 'bootpress'),
    ));
}

add_action('init', 'register_theme_menus');

//Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//Shortcodes
function whitespace_shortcode_title(){
    return '<?php the_title(); ?>';
}

function whitespace_shortcode_content(){
    return '<?php the_content(); ?>';
}

function whitespace_shortcode_featured_image(){
    return '<?php the_post_thumbnail(); ?>';
}

function whitespace_shortcode_featured_image_url(){
    return '<?php the_post_thumbnail_url(); ?>';
}

function whitespace_shortcode_permalink(){
    return '<?php the_permalink(); ?>';
}

function whitespace_shortcode_cta_link(){
    return '<?php the_field(link); ?>';
}

function whitespace_shortcode_cta_icon() {
    return '<i class="fa <?php the_field(font_awesome_icon_class); ?>"></i>';
}

add_shortcode( 'the_title', 'whitespace_shortcode_title' );
add_shortcode( 'the_content', 'whitespace_shortcode_content' );
add_shortcode( 'featured_image', 'whitespace_shortcode_featured_image' );
add_shortcode( 'featured_image_url', 'whitespace_shortcode_featured_image_url' );
add_shortcode( 'the_permalink', 'whitespace_shortcode_permalink' );
add_shortcode( 'cta_link', 'whitespace_shortcode_cta_link' );
add_shortcode( 'cta_icon', 'whitespace_shortcode_cta_icon' );

//Custom fields
if(function_exists("register_field_group"))
{
  register_field_group(array (
		'id' => 'acf_templates',
		'title' => 'Templates',
		'fields' => array (
			array (
				'key' => 'field_5975529261dbc',
				'label' => 'Header',
				'name' => 'header',
				'type' => 'select',
				'choices' => array (
					'default' => 'Default',
          'a1-b1' => 'A1-B1',
          'a1-b12' => 'A1-B12',
          'a1-b123' => 'A1-B123',
          'a12-b1' => 'A12-B1',
          'a12-b12' => 'A12-B12',
          'b1' => 'B1',
          'b12' => 'B12',
          'b123' => 'B123',
					'm-a1-b1' => 'M-A1-B1',
					'm-a1-b12' => 'M-A1-B12',
					'm-a1-b123' => 'M-A1-B123',
					'm-a12-b1' => 'M-A12-B1',
					'm-a12-b12' => 'M-A12-B12',
					'm-b1' => 'M-B1',
					'm-b12' => 'M-B12',
					'm-b123' => 'M-B123',
				),
				'default_value' => 'default',
				'allow_null' => 0,
				'multiple' => 0,
      ),
        array (
  				'key' => 'field_597812602b921',
  				'label' => 'Footer',
  				'name' => 'footer',
  				'type' => 'select',
  				'choices' => array (
  					'default' => 'Default',
            'a1-b1' => 'A1-B1',
            'a1-b2' => 'A1-B2',
            'a1-b12' => 'A1-B12',
            'a1-b13' => 'A1-B13',
            'a1-b23' => 'A1-B23',
            'a1-b123' => 'A1-B123',
  				),
  				'default_value' => 'default',
  				'allow_null' => 0,
  				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_ctas',
		'title' => 'CTA\'s',
		'fields' => array (
			array (
				'key' => 'field_58f2f06cb45e7',
				'label' => 'Link',
				'name' => 'link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
      array (
				'key' => 'field_59753a49a55db',
				'label' => 'Font Awesome Icon Class',
				'name' => 'font_awesome_icon_class',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'fa-icon-name',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ctas',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_portfolio',
		'title' => 'Portfolio',
		'fields' => array (
			array (
				'key' => 'field_58f2efb43e07f',
				'label' => 'CMS',
				'name' => 'cms',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

//Widgets
function whitespace_create_widget($name, $id, $description) {
  register_sidebar(array(
    'name' => __($name),
    'id' => $id,
    'description' => __($description),
    'before_widget' => '<div class="row widget'.' '.$id.' '.'"><div class="col-md-12"><div class="widget-inner">',
    'after_widget' => '</div></div></div>',
    'before_title' => '<h2 class="module-heading">',
    'after_title' => '</h2>'
  ));
}

whitespace_create_widget('Top Bar', 'top-bar', 'The topmost section of the website, generally used for a phone number or CTA');
whitespace_create_widget('Masthead', 'masthead', 'An area for widets above the menu');
whitespace_create_widget('Header A1', 'header-a1', '');
whitespace_create_widget('Header A2', 'header-a2', '');
whitespace_create_widget('Header A3', 'header-a3', '');
whitespace_create_widget('Header B1', 'header-b1', '');
whitespace_create_widget('Header B2', 'header-b2', '');
whitespace_create_widget('Header B3', 'header-b3', '');
whitespace_create_widget('Home 1', 'home-1', 'The first major area on the home page, generally used for a hero image or a slider');
whitespace_create_widget('Home 2', 'home-2', 'The second major area on the home page, generally used for CTAs');
whitespace_create_widget('Home 3', 'home-3', 'The third major area on the home page, generally used for a welcome message');
whitespace_create_widget('Home 4', 'home-4', 'The fourth major area on the home page');
whitespace_create_widget('Footer A1', 'footer-a1', '');
whitespace_create_widget('Footer B1', 'footer-b1', '');
whitespace_create_widget('Footer B2', 'footer-b2', '');
whitespace_create_widget('Footer B3', 'footer-b3', '');
whitespace_create_widget('Sidebar A', 'sidebar-a', 'The first of two available sidebars in this theme');
whitespace_create_widget('Sidebar B', 'sidebar-b', 'The second of two available sidebars in this theme');

//Global Variables
?>
