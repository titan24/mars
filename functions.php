<?php
/**
 * azbuka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package azbuka
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function azbuka_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on azbuka, use a find and replace
		* to change 'azbuka' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'azbuka', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'azbuka' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'azbuka_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'azbuka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function azbuka_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'azbuka_content_width', 640 );
}
add_action( 'after_setup_theme', 'azbuka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function azbuka_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'azbuka' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'azbuka' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'azbuka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function azbuka_scripts() {
	wp_enqueue_style( 'azbuka-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'azbuka-style', 'rtl', 'replace' );

	wp_enqueue_script( 'azbuka-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


    // wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), _S_VERSION);

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/app/js/mobile-menu.js', array(), _S_VERSION, true);
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/app/css/style.css', array(), _S_VERSION);







	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'azbuka_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// �������� ��������� ����������� ��� �������
if (!function_exists('write_log')) {
    function write_log($log) {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }
}

/// Обработчик AJAX для отзывов
function handle_review_submission() {
    // Проверяем запрос
    if (!isset($_POST['review_name']) || !isset($_POST['review_email']) || !isset($_POST['review_text']) || !isset($_POST['review_rating'])) {
        error_log('Неполные данные формы');
        error_log('POST данные: ' . print_r($_POST, true));
        wp_send_json([
            'success' => false,
            'message' => 'Неповні дані форми'
        ]);
        wp_die();
    }

    // Получаем данные из формы
    $name = sanitize_text_field($_POST['review_name']);
    $email = sanitize_email($_POST['review_email']);
    $text = sanitize_textarea_field($_POST['review_text']);
    $rating = (int)$_POST['review_rating']; // Явно приводим к int
    $page_id = (int)$_POST['page_id'];
    
    error_log("Данные отзыва: Имя={$name}, Email={$email}, Рейтинг={$rating}, ID страницы={$page_id}");
    
    // Проверка рейтинга
    if ($rating < 1 || $rating > 5) {
        error_log("Некорректный рейтинг: {$rating}");
        wp_send_json([
            'success' => false,
            'message' => 'Рейтинг повинен бути від 1 до 5'
        ]);
        wp_die();
    }

    // Получаем текущие отзывы
    $reviews = get_field('reviews_list', $page_id);
    if (!is_array($reviews)) {
        $reviews = [];
    }
    
    // Создаем новый отзыв
    $new_review = [
        'review_author_name' => $name,
        'review_email' => $email,
        'review_text' => $text,
        'review_rating' => $rating, // Целое число от 1 до 5
        'review_date' => current_time('d.m.Y'),
        'review_avatar' => ''
    ];
    
    error_log('Новый отзыв: ' . print_r($new_review, true));
    
    // Добавляем отзыв в массив
    $reviews[] = $new_review;
    
    // Обновляем поле с отзывами
    $update_result = update_field('reviews_list', $reviews, $page_id);
    error_log('Результат обновления: ' . ($update_result ? 'успешно' : 'ошибка'));
    
    // Отправляем ответ
    wp_send_json([
        'success' => true,
        'message' => 'Дякуємо за ваш відгук!',
        'review' => $new_review,
        'update_result' => $update_result
    ]);
    wp_die();
}

// Добавьте временно в functions.php для проверки
function debug_acf_data() {
    if (current_user_can('administrator')) {
        $page_id = 8; // Замените на ID вашей страницы
        $field_key = 'reviews_list'; // Имя ACF поля
        
        // Получаем данные ACF
        $acf_data = get_field($field_key, $page_id);
        
        // Получаем мета-данные напрямую
        $meta_key = 'reviews_list'; // Ключ мета-поля
        $meta_data = get_post_meta($page_id, $meta_key, true);
        
        // Выводим для сравнения
        echo '<pre style="background: #f5f5f5; padding: 15px; margin: 15px; border: 1px solid #ddd;">';
        echo "ACF data:\n";
        print_r($acf_data);
        echo "\n\nMeta data:\n";
        print_r($meta_data);
        echo '</pre>';
    }
}
add_action('wp_footer', 'debug_acf_data');

// ����������� AJAX-������������ (�� ������� ��� �����)
add_action('wp_ajax_submit_review', 'handle_review_submission'); // ��� �������������� �������������
add_action('wp_ajax_nopriv_submit_review', 'handle_review_submission'); // ��� ���������������� �������������

