<div class="col-lg-4 testi-single">
    <!-- single testimonials start -->
    <div class="rts-single-testimonials-one">
        <div class="logo">
            <img src="<?php echo esc_url($item['logo_client']['url']) ?>" alt="">
        </div>
        <p class="disc">
            <?php if (!empty($description)) :   ?>
                <?php echo wp_kses($description, wp_kses_allowed_html('post'))  ?>
            <?php endif ?>
        </p>
        <div class="awener-area">
            <a href="#" class="author">
                <?php if (!empty($image)) :   ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr('image') ?>">
                <?php endif ?>
            </a>
            <div class="main">
                <a href="<?php the_permalink()?>">
                    <?php if (!empty($item['name'])) :   ?>
                        <h6 class="title"><?php echo esc_html($item['name']) ?></h6>
                    <?php endif ?>
                </a>
                <?php if (!empty($item['sub-name'])) :   ?>
                    <span><?php echo esc_html($item['sub-name']) ?></span>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- single testimonials end -->
</div>

