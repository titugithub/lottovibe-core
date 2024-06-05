<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Sponsor_Widget extends \Elementor\Widget_Base
{
    /**
     * Get widget name.
     *
     * Retrieve rsgallery widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'rt-sponsor';
    }

    /**
     * Get widget title.
     *
     * Retrieve rsgallery widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return __('SV Sponsor', 'rtelements');
    }

    /**
     * Get widget icon.
     *
     * Retrieve rsgallery widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'glyph-icon flaticon-slider-3';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the rsgallery widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['pielements_category'];
    }


    /**
     * Register rsgallery widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls()
    {

        $this->start_controls_section(
            'lottovibe_gallery_slide_content',
            [
                'label' => esc_html__('Gallery', 'lottovibe-core')
            ]
        );



        $this->add_control(
            'lottovibe_gallery_slide_image',
            [
                'label' => esc_html__('Choose Image', 'lottovibe-core'),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );




        $this->end_controls_section();
    }

    /**
     * Render rsgallery widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {

        $settings    = $this->get_settings_for_display();
        ?>



        <script>
            var swiper = new Swiper(".sponsor-wrap", {
                loop: true,
                slidesPerView: 1,
                slidesToShow: 1,
                spaceBetween: 24,
                speed: 4500,
                autoplay: true,
                centeredSlides: true,
                autoplay: {
                    delay: 100,
                },
                breakpoints: {
                    1600: {
                        slidesPerView: 4,
                        spaceBetween: 24,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 14,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 14,
                    },
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 14,
                    },
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 14,
                    },
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 14,
                    },
                },
            });
        </script>



        <div class="sponsor-section1  overflow-hidden">



            <!--Sponsor boydss-->
            <div class="container">


                <div class="sponsor-borderwrap">

                    <div class="swiper sponsor-wrap">
                        <div class="swiper-wrapper">

                            <?php foreach ($settings['lottovibe_gallery_slide_image'] as $item) : ?>
                                <?php if (!empty($item['url'])) :   ?>
                                    <div class="swiper-slide">
                                        <div class="sponsor-items">
                                            <img src="<?php echo esc_url($item['url']) ?>" alt="sponsors-img">
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!--Sponsor boyds-->
        </div>











<?php
    }
} ?>