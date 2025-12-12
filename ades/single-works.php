<?php get_header(); ?>

<section class="single-works-mv">
    <div class="single-works-mv__bg">
        <?php 
        if (has_post_thumbnail()) :
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        elseif (get_field('image_1')) :
            $image_1 = get_field('image_1');
            $thumbnail_url = esc_url($image_1['url']);
            $alt_text = esc_attr($image_1['alt']);
        else :
            $thumbnail_url = get_template_directory_uri() . '/assets/images/common/no-image.webp';
            $alt_text = '画像なし';
        endif;
        ?>
        <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo esc_attr($alt_text); ?>" width="1440" height="420">
    </div>

    <div class="single-works-mv__content">
        <p class="single-works-mv__en-title">works</p>
        <h1 class="single-works-mv__jp-title"><?php the_title(); ?></h1>
        <p class="single-works-mv__sub-title"><?php the_field('sub_title'); ?></p>
        <?php 
        $terms = get_the_terms(get_the_ID(), 'works_category'); 
        $category_name = (!empty($terms) && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '未分類'; 
        ?>
        <p class="single-works-mv__category"><?php echo $category_name; ?></p>
    </div>
</section>

<section class="single-works">
    <div class="single-works__inner inner">
        <ul class="single-works__breadcrumbs breadcrumbs">
            <li class="breadcrumbs-item"><a href="/" class="breadcrumbs-link">Top</a></li>
            <li class="breadcrumbs-item breadcrumbs-item--arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg" alt="矢印" width="4" height="8">
            </li>
            <li class="breadcrumbs-item"><a href="<?php echo esc_url(home_url('/works')); ?>" class="breadcrumbs-link">Works</a></li>
            <li class="breadcrumbs-item breadcrumbs-item--arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg" alt="矢印" width="4" height="8">
            </li>
            <li class="breadcrumbs-item breadcrumbs-item--single"><?php the_title(); ?></li>
        </ul>

        <div class="single-works__content">
            <div class="single-works__wrap">
                <div class="single-works__info js-fade-in">
                    <dl class="single-works__info-list">
                        <div class="single-works__info-item">
                            <dt class="single-works__info-title">Client</dt>
                            <dd class="single-works__info-detail"><?php the_field('client_name'); ?></dd>
                        </div>
                        <div class="single-works__info-item">
                            <dt class="single-works__info-title">Launch Date</dt>
                            <dd class="single-works__info-detail"><?php the_field('launch_date'); ?></dd>
                        </div>
                        <div class="single-works__info-item">
                            <dt class="single-works__info-title">Project Team</dt>
                            <dd class="single-works__info-detail single-works__info-detail--team-wrap">
                                <?php 
                                $project_team = get_field('project_team');
                                if ($project_team) {
                                    for ($i = 1; $i <= 4; $i++) {
                                        $member = $project_team["member_$i"];
                                        if (!empty($member)) {
                                            echo '<span class="single-works__info-detail--team">' . esc_html($member) . '</span>';
                                        }
                                    }
                                }
                                ?>
                            </dd>
                        </div>
                    </dl>
                    <div class="single-works__info-summary">
                        <p class="single-works__info-text">制作期間：<?php the_field('production_period'); ?></p>
                        <p class="single-works__info-text">受注形態：<?php the_field('contract_type'); ?></p>
                        <p class="single-works__info-text">制作規模：<?php the_field('scale'); ?></p>
                    </div>
                </div>

                <div class="single-works__text-wrap js-fade-in">
                    <?php the_field('description'); ?>
                </div>
            </div>

            <div class="single-works__gallery-wrap">
                <div class="single-works__gallery">
                    <?php 
                    $image_1 = get_field('image_1');
                    $image_2 = get_field('image_2');
                    $image_3 = get_field('image_3');
                    ?>
                    <?php if ($image_1) : ?>
                        <div class="single-works__gallery-item single-works__gallery-item--01 js-fade-in">
                            <img src="<?php echo esc_url($image_1['url']); ?>" class="single-works__gallery-img single-works__gallery-img--01" alt="<?php echo esc_attr($image_1['alt']); ?>" width="1082" height="750" loading="lazy">
                        </div>
                    <?php endif; ?>
                    <?php if ($image_2) : ?>
                        <div class="single-works__gallery-item single-works__gallery-item--02 js-fade-in">
                            <img src="<?php echo esc_url($image_2['url']); ?>" class="single-works__gallery-img single-works__gallery-img--02" alt="<?php echo esc_attr($image_2['alt']); ?>" width="531" height="368" loading="lazy">
                        </div>
                    <?php endif; ?>
                    <?php if ($image_3) : ?>
                        <div class="single-works__gallery-item single-works__gallery-item--03 js-fade-in">
                            <img src="<?php echo esc_url($image_3['url']); ?>" class="single-works__gallery-img single-works__gallery-img--03" alt="<?php echo esc_attr($image_3['alt']); ?>" width="531" height="368" loading="lazy">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="single-works__btn">
    <span class="js-fade-in"><a href="<?php echo esc_url(home_url('/works')); ?>" class="single-works__btn-link">Works Index</a></span>
</div>

<div class="single-works__bg"></div>

<section class="contact contact--single-works">
    <div class="contact__inner inner">
        <div class="contact__content">
            <h2 class="contact__title section-title js-title-animation">contact</h2>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__link js-link-btn"><span class="contact__link-text">お問い合わせ</span></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
