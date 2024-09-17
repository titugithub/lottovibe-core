<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;



defined('ABSPATH') || die();

class SVTheme_Elementor_Workstep_Widget extends \Elementor\Widget_Base
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
        return 'rt-workstep';
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
        return __('SV Workstep', 'rtelements');
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
            'content',
            [
                'label' => esc_html__('Content', 'plugin-name')
            ]
        );




        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $repeater->add_control(
            'buttontext',
            [
                'label' => esc_html__('Button Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'buttonlink',
            [
                'label' => esc_html__('Button Link', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'plugin-name'),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'list_repeater',
            [
                'label' => esc_html__('Process List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ subtitle }}}',
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
            jQuery(document).ready(function($) {
                var swiper = new Swiper(".bikeworking-wrap", {
                    loop: false,
                    slidesPerView: 1,
                    slidesToShow: 1,
                    spaceBetween: 50,
                    direction: "vertical",
                    autoHeight: true,
                    mousewheel: true,
                    speed: 1000,
                    pagination: {
                        el: ".swiper-pagination-workguide",
                        clickable: true,
                    },
                    autoplay: {
                        delay: 3000,
                    },
                });
            });
        </script>







        <section class="bike-worksection n0-bg">
            <div class="container">

                <div class="bikeworking-wrap swiper position-relative">
                    <div class="swiper-wrapper">


                        <?php foreach ($settings['list_repeater'] as $item) : ?>
                            <div class="swiper-slide">
                                <div class="work-sliderwing position-relative">
                                    <div class="row g-6 align-items-center justify-content-between">
                                        <div class="col-lg-5">
                                            <div class="work-wingi-contentv3 position-relative cus-z1">
                                                <div class="d-flex mb-xxl-5 mb-xl-4 mb-4 align-items-center gap-xxl-4 gap-4">
                                                    <?php if (!empty($item['subtitle'])) :   ?>
                                                        <span class="text-uppercase fs20 fw_700 nw1-clr">
                                                            <?php echo esc_html($item['subtitle']) ?>
                                                        </span>
                                                    <?php endif ?>
                                                    <svg width="315" height="2" viewBox="0 0 315 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="2" width="2" height="315" transform="rotate(-90 0 2)" fill="url(#paint0_linear_5647_6935)" />
                                                        <defs>
                                                            <linearGradient id="paint0_linear_5647_6935" x1="1" y1="2" x2="1" y2="317" gradientUnits="userSpaceOnUse">
                                                                <stop offset="0" stop-color="#FF650E" />
                                                                <stop offset="1" stop-color="#FF650E" stop-opacity="0" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="d-flex align-items-center gap-xxl-5 gap-3 mb-xxl-5 mb-4">
                                                    <div class="step-gift act4-bg d-center">
                                                        <?php if (!empty($item['icon'])) :   ?>
                                                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                                                        <?php endif ?>
                                                    </div>
                                                    <?php if (!empty($item['title'])) :   ?>
                                                        <h2 class="nw1-clr">
                                                            <?php echo esc_html($item['title']) ?>
                                                        </h2>
                                                    <?php endif ?>
                                                </div>
                                                <?php if (!empty($item['description'])) :   ?>
                                                    <p class="fs18 fw_600 nw1-clr mb-xxl-5 mb-5">
                                                        <?php echo wp_kses($item['description'], wp_kses_allowed_html('post'))  ?>
                                                    </p>
                                                <?php endif ?>
                                                <?php if (!empty($item['buttontext'])) :   ?>
                                                    <a href="<?php echo esc_url($item['buttonlink']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                                                        <span class="kew-text act3-bg n4-clr">
                                                            <?php echo esc_html($item['buttontext']) ?>
                                                        </span>
                                                        <div class="kew-arrow act3-bg">
                                                            <div class="kt-one">
                                                                <i class="ti ti-arrow-right n4-clr"></i>
                                                            </div>
                                                            <div class="kt-two">
                                                                <i class="ti ti-arrow-right n4-clr"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="work-thumb-widing">
                                                <?php if (!empty($item['image']['url'])) :   ?>
                                                    <div class="work-thumbv3">
                                                        <img src="<?php echo esc_url($item['image']['url']) ?>" alt="img">
                                                    </div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>







                    </div>
                    <div class="swiper-pagination-workguide"></div>
                </div>
            </div>
        </section>






<?php
    }
} ?>