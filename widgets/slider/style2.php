

<div class="swiper-slide">

    <div class="feedback-about-swiper-wrapper">
        <div class="single-feedback-about">
            <div class="head">
                <a href="#" class="thumbnail">
                    <?php if (!empty($image)) :   ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr('image') ?>">
                    <?php endif ?>
                </a>
                <div class="info">
                    <?php if (!empty($item['name'])) :   ?>
                        <h5 class="title"><?php echo esc_html($item['name']) ?></h5>

                    <?php endif ?>
                    <?php if (!empty($item['sub-name'])) :   ?>
                        <span><?php echo esc_html($item['sub-name']) ?></span>

                    <?php endif ?>
                </div>
            </div>
            <div class="body">
                <p>
                    <?php if (!empty($description)) :   ?>
                        <?php echo wp_kses($description, wp_kses_allowed_html('post'))  ?>
                    <?php endif ?>
                </p>
            </div>
        </div>
    </div>


</div>