




<div class="swiper-slide">
    <!-- inglle cuystoners fededback -->
    <div class="rts-single-feedback-solar-energy">
        <div class="client-image">
            <?php if (!empty($image)) :   ?>
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr('image') ?>">
            <?php endif ?>
        </div>
        <div class="content">
            <p class="para">
                <?php if (!empty($description)) :   ?>
                    <?php echo wp_kses($description, wp_kses_allowed_html('post'))  ?>
                <?php endif ?>
            </p>
            <div class="cottom-review-area">
                <div class="stars">
                    <?php
                    if (!empty($item['rating'])) {
                        $rating = intval($item['rating']);
                        for ($i = 1; $i <= 5; $i++) {
                            $star_class = ($i <= $rating) ? 'fas fa-star' : '';
                            echo '<i class="' . $star_class . '"></i>';
                        }
                    }
                    ?>
                </div>
                <?php if (!empty($item['rating_title'])) :   ?>
                    <p><?php echo esc_html($item['rating_title']) ?></p>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- inglle cuystoners fededback end -->
</div>