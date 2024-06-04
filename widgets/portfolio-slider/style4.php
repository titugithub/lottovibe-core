<?php
$cat   = $settings['portfolio_category'];

if (empty($cat)) {
    $best_wp = new wp_Query(array(
        'post_type'      => 'rt-portfolios',
        'posts_per_page' => $settings['per_page'],
    ));
} else {
    $best_wp = new wp_Query(array(
        'post_type'      => 'rt-portfolios',
        'posts_per_page' => $settings['per_page'],
        'tax_query'      => array(
            array(
                'taxonomy' => 'rt-portfolio-category',
                'field'    => 'slug', //can be set to ID
                'terms'    => $cat //if field is ID you can reference by cat/term number
            ),
        )
    ));
}
$details_btn_text = !empty($settings['details_btn_text']) ? $settings['details_btn_text'] : 'Case Details';
while ($best_wp->have_posts()) : $best_wp->the_post();
    $cats_show = get_the_term_list($best_wp->ID, 'rt-portfolio-category', ' ', '<span class="separator">,</span> ');
    ?>


    <div class="swiper-slide">
        <div class="single-product-main-four">
            <div class="left-image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail($settings['thumbnail_size']); ?>
                <?php endif; ?>
            </div>
            <div class="right-product pl_md--15 pl_sm--15">
                <div class="solari-title-area-four">
                    <div class="topp">
                        <?php if (!empty($settings['iconnn'])) :   ?>
                            <img src="<?php echo esc_html($settings['iconnn']['url']) ?>">
                        <?php endif ?>
                        <span class="pre-title "><?php echo $cats_show; ?></span>
                    </div>
                    <h2 class="title "><?php the_title() ?></h2>
                </div>
                <p class="disc">
                    <?php
                        the_excerpt()
                        ?>
                </p>
                <?php if (!empty($settings['button_text'])) :   ?>
                    <a href="<?php the_permalink() ?>" class="rts-btn btn-primary"><?php echo esc_html($settings['button_text']) ?></a>
                <?php endif ?>
            </div>
        </div>
    </div>

 

<?php
endwhile;
wp_reset_query();
?>

