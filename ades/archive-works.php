<?php get_header(); ?>

<section class="works-mv">
    <div class="works-mv__inner">
        <p class="works-mv__en-title">works</p>
        <h1 class="works-mv__jp-title">実績一覧</h1>
    </div>
</section>

<section class="sub-works">
    <div class="sub-works__inner inner">

        <!-- パンくずリスト -->
        <ul class="sub-works__breadcrumbs breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="<?php echo home_url('/'); ?>" class="breadcrumbs-link">Top</a>
            </li>
            <li class="breadcrumbs-item breadcrumbs-item--arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg" alt="矢印" width="4"
                    height="8">
            </li>
            <li class="breadcrumbs-item">Works</li>
        </ul>

        <!-- カテゴリータブ -->
        <?php
        $taxonomy = 'works_category';
        $terms = get_terms([
            'taxonomy'   => $taxonomy,
            'hide_empty' => false,
        ]);
        $current_term = get_queried_object();
        ?>
        <ul class="sub-works__tabs">
            <li class="sub-works__tab">
                <a href="<?php echo get_post_type_archive_link('works'); ?>"
                    class="sub-works__tab-link <?php echo (is_post_type_archive('works') ? 'current' : ''); ?>">すべて</a>
            </li>
            <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
            <?php foreach ($terms as $term) : ?>
            <li class="sub-works__tab">
                <a href="<?php echo get_term_link($term); ?>" class="sub-works__tab-link 
                            <?php 
                            if (is_tax($taxonomy) && isset($current_term->term_id) && $current_term->term_id == $term->term_id) {
                                echo 'current'; 
                            } 
                            ?>">
                    <?php echo esc_html($term->name); ?>
                </a>
            </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <!-- Works リスト -->
        <!-- Works リスト -->
        <div class="sub-works__content">
            <ul class="sub-works__card-list">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php
                $client_name   = get_field('client_name');
                $categories    = get_the_terms(get_the_ID(), 'works_category');
                $category_name = $categories ? $categories[0]->name : '未分類';
                $category_slug = $categories ? $categories[0]->slug : 'default';

                // サムネイル画像を取得
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                // サムネイル画像がない場合は、ACFの 'image_1' を取得
                if (!$thumbnail_url) {
                    $image_1 = get_field('image_1'); // ACFのカスタムフィールド
                    $thumbnail_url = $image_1 ? esc_url($image_1['url']) : get_template_directory_uri() . '/assets/images/common/no-image.webp';
                }
                ?>
                <li class="sub-works__card-item js-fade-in">
                    <a href="<?php the_permalink(); ?>" class="sub-works__card-item-link">
                        <div class="sub-works__card-img-wrap <?php echo esc_attr($category_slug); ?>">
                            <img src="<?php echo esc_url($thumbnail_url); ?>" class="sub-works__card-img"
                                alt="<?php the_title_attribute(); ?>" width="338" height="188" loading="lazy">
                        </div>
                        <div class="sub-works__card-body">
                            <p class="sub-works__card-name"><?php echo esc_html($client_name); ?></p>
                            <h2 class="sub-works__card-title"><?php the_title(); ?></h2>
                            <p class="sub-works__card-category"><?php echo esc_html($category_name); ?></p>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
                <?php else : ?>
                <p class="sub-works__no-posts">現在、実績はありません。</p>
                <?php endif; ?>
            </ul>
            <!-- ページネーション -->
            <?php custom_pagination(); ?>
        </div>
    </div>
</section>

<section class="contact">
    <div class="contact__inner inner">
        <div class="contact__content">
            <h2 class="contact__title section-title js-title-animation">contact</h2>
            <a href="/contact/" class="contact__link js-link-btn">
                <span class="contact__link-text">お問い合わせ</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>