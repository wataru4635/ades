<?php
// ================================================
// WordPress テーマの基本設定
// ================================================
function my_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'my_theme_setup');

// ================================================
// スクリプトとスタイルのエンキュー（共通 + 特定ページ）
// ================================================
function enqueue_custom_scripts() {
    $theme_path = get_theme_file_path();
    $asset_uri  = get_theme_file_uri('/assets');

    // ファイルのバージョンを取得
    $get_ver = function($file_path) {
        return file_exists($file_path) ? filemtime($file_path) : wp_get_theme()->get('Version');
    };

    // フロントページ専用
    if (is_front_page()) {
        // Swiper CSS
        $swiper_css = '/css/swiper-bundle.min.css';
        wp_enqueue_style(
            'swiper-css',
            "{$asset_uri}{$swiper_css}",
            [],
            $get_ver("{$theme_path}/assets{$swiper_css}")
        );

        // Swiper JS
        $swiper_js = '/js/swiper-bundle.min.js';
        wp_enqueue_script(
            'swiper-js',
            "{$asset_uri}{$swiper_js}",
            [],
            $get_ver("{$theme_path}/assets{$swiper_js}"),
            true
        );

        // Lottie JS
        $lottie_js = '/js/lottie.min.js';
        wp_enqueue_script(
            'lottie-js',
            "{$asset_uri}{$lottie_js}",
            [],
            $get_ver("{$theme_path}/assets{$lottie_js}"),
            true
        );

        // トップページ専用スクリプト
        $top_js = '/js/top.js';
        wp_enqueue_script(
            'top-script',
            "{$asset_uri}{$top_js}",
            [],
            $get_ver("{$theme_path}/assets{$top_js}"),
            true
        );
    }

    // CSS（共通）
    $style_file = '/css/style.css';
    wp_enqueue_style(
        'custom-style',
        "{$asset_uri}{$style_file}",
        [],
        $get_ver("{$theme_path}/assets{$style_file}")
    );

    // JS（共通）
    $script_file = '/js/script.js';
    wp_enqueue_script(
        'common-script',
        "{$asset_uri}{$script_file}",
        [],
        $get_ver("{$theme_path}/assets{$script_file}"),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
  

// ================================================
// ヘッダーへのプリロード
// ================================================
function enqueue_preload_headers() {
  ?>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Sans+JP:wght@100..900&display=swap"
    rel="preload" as="style" fetchpriority="high">
<link
    href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Sans+JP:wght@100..900&display=swap"
    rel="stylesheet" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<?php
}
add_action('wp_head', 'enqueue_preload_headers');


// ================================================
// コメントの無効化
// ================================================
function comment_status_none( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'post' ) {
        return false;
    }
    if( $post->post_type == 'page' ) {
        return false;
    }
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return false;
}

add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function remove_menus() {
    remove_menu_page( 'edit-comments.php' );
  }
  add_action( 'admin_menu', 'remove_menus', 999 );

// ================================================
// 実績一覧（works）
// ================================================
add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function create_post_type_works() {
    register_post_type(
        'works',
        array(
            'labels' => array(
                'name'          => '実績一覧',
                'singular_name' => '実績',
                'add_new'       => '実績を追加',
                'add_new_item'  => '実績を追加',
                'edit_item'     => '実績を編集',
                'new_item'      => '新しい実績',
                'view_item'     => '実績を表示',
                'search_items'  => '実績を検索',
                'not_found'     => '実績はありません',
                'not_found_in_trash' => 'ゴミ箱に実績一覧はありません',
            ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array('slug' => 'works'),
            'supports'     => array('title', 'thumbnail', 'editor'),
            'show_in_rest' => true,
            'taxonomies'   => array('works_category'),
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-portfolio',
        )
    );
}

function create_works_taxonomy() {
    register_taxonomy(
        'works_category',
        'works',
        array(
            'labels' => array(
                'name'              => '実績カテゴリー',
                'singular_name'     => '実績カテゴリー',
                'search_items'      => 'カテゴリーを検索',
                'all_items'         => 'すべてのカテゴリー',
                'parent_item'       => '親カテゴリー',
                'parent_item_colon' => '親カテゴリー:',
                'edit_item'         => 'カテゴリーを編集',
                'update_item'       => 'カテゴリーを更新',
                'add_new_item'      => '新規カテゴリーを追加',
                'new_item_name'     => '新しいカテゴリー名',
                'menu_name'         => '実績カテゴリー',
            ),
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'works-category'),
            'show_in_rest'      => true,
        )
    );
}

add_action('init', 'create_post_type_works');
add_action('init', 'create_works_taxonomy');


// ================================================
// 実績一覧のページネーション
// ================================================
function custom_pagination($query = null) {
    global $wp_query;
    $query = $query ? $query : $wp_query;

    $big = 999999999;
    $current = max(1, get_query_var('paged'));
    $total_pages = $query->max_num_pages;

    if ($total_pages <= 1) return;

    echo '<div class="sub-works__pagination pagination">';

    if ($current > 2) {
        echo '<a href="' . esc_url(get_pagenum_link(1)) . '" class="page">1</a>';
        if ($current > 3) {
            echo '<span class="dots">...</span>';
        }
    }

    for ($i = max(1, $current - 1); $i <= min($total_pages, $current + 2); $i++) {
        if ($i == $current) {
            echo '<span class="page current">' . $i . '</span>';
        } else {
            echo '<a href="' . esc_url(get_pagenum_link($i)) . '" class="page">' . $i . '</a>';
        }
    }

    if ($current + 2 < $total_pages) {
        echo '<span class="dots">...</span>';
        echo '<a href="' . esc_url(get_pagenum_link($total_pages)) . '" class="page">' . $total_pages . '</a>';
    }

    echo '</div>';
}



// ================================================
// 【管理画面】エディタースタイルの追加
// ================================================

function custom_editor_styles() {
    add_editor_style('assets/css/editor-style.css');
}
add_action('admin_init', 'custom_editor_styles');

// ================================================
// 【管理画面】ACF Options Page の設定
// ================================================
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
  }

// ================================================
// 【管理画面】「works」投稿タイプからWYSIWYGエディタを削除
// ================================================

function remove_wysiwyg() {
    remove_post_type_support( 'works', 'editor' );
  }
  add_action( 'init' , 'remove_wysiwyg' );

// ================================================
// お問い合わせフォームの自動フォーマット設定の無効化
// ================================================
function wpcf7_autop_return_false() {
    return false;
  }
  
  add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
  add_filter( 'wpcf7_validate_configuration', '__return_false' );
  
// ================================================
// 投稿者アーカイブ無効化
// ================================================

add_filter('author_rewrite_rules', '__return_empty_array');
add_action('template_redirect', function () {
	if (is_author() || get_query_var('author_name') || get_query_var('author')) {
		global $wp_query;
		$wp_query->set_404();
		status_header(404);
		nocache_headers();
		include get_404_template();
		exit;
	}
});

// ================================================
// ユーザーのサイトマップを無効化
// ================================================
add_filter('wp_sitemaps_add_provider', function ($provider, $name) {
  return $name === 'users' ? false : $provider;
}, 10, 2);