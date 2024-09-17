<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Testimonial2_Widget extends \Elementor\Widget_Base
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
        return 'rt-testimonial2';
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
        return __('SV Testimonial Two', 'rtelements');
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
            'testimonail_content',
            [
                'label' => esc_html__('Testimonial', 'plugin-name')
            ]
        );



        $this->add_control(
            'text1',
            [
                'label' => esc_html__('Text One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'text2',
            [
                'label' => esc_html__('Text Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'image1',
            [
                'label' => esc_html__('Choose Image One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'image2',
            [
                'label' => esc_html__('Choose Image Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'image3',
            [
                'label' => esc_html__('Choose Image Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'iconshow',
            [
                'label' => esc_html__('Show Icon?', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'plugin-name'),
                'label_off' => esc_html__('Hide', 'plugin-name'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_title',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('List Title', 'plugin-name'),
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
            'name',
            [
                'label' => esc_html__('Name', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'meta',
            [
                'label' => esc_html__('Meta', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'list_repeater',
            [
                'label' => esc_html__('Testimonial List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                
            ]
        );



        $this->end_controls_section();

        // ============================Style=============================//

        $this->start_controls_section(
             'contentstyle',
             [
                'label' => esc_html__('Style', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'ciccle_color',
            [
                'label' => esc_html__( 'Circle Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .happy-cbox.d-flex.align-items-center.justify-content-center.radius-circle.s1-bg' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quotes.d-center.n0-bg.radius-circle i' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Title Typography', 'plugin-name'),
                'name'     => 'titler_typ',
                'selector' => '{{WRAPPER}} h3.n4-clr.mb-xxl-4.mb-xl-3.mb-2',
        
            ]
        );
        
        $this->add_control(
            'titler_color',
            [
                'label'     => esc_html__('Title Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h3.n4-clr.mb-xxl-4.mb-xl-3.mb-2' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Description Typography', 'plugin-name'),
                'name'     => 'des_typ',
                'selector' => '{{WRAPPER}} p.fs18.n3-clr',
        
            ]
        );
        
        $this->add_control(
            'des_color',
            [
                'label'     => esc_html__('Description Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.fs18.n3-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );



        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Name Typography', 'plugin-name'),
                'name'     => 'name_typ',
                'selector' => '{{WRAPPER}} span.fs20.mb-1.fw_700.d-block',
        
            ]
        );
        
        $this->add_control(
            'name_color',
            [
                'label'     => esc_html__('Name Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fs20.mb-1.fw_700.d-block' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Meta Typography', 'plugin-name'),
                'name'     => 'meta_typ',
                'selector' => '{{WRAPPER}} span.fw_600.n2-clr.d-block',
        
            ]
        );
        
        $this->add_control(
            'meta_color',
            [
                'label'     => esc_html__('Meta Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_600.n2-clr.d-block' => 'color: {{VALUE}} !important;',
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
            jQuery(document).ready(function($) {
                var swiper = new Swiper(".testimonial-uniquewrap", {
                    loop: true,
                    slidesPerView: 1,
                    slidesToShow: 1,
                    spaceBetween: 24,
                    speed: 2000,
                    autoplay: false,
                    pagination: {
                        el: ".swiper-paginations",
                        type: "fraction",
                    },
                    navigation: {
                        nextEl: ".swiper-button-nextteam",
                        prevEl: ".swiper-button-prevteam",
                    },
                    breakpoints: {
                        1600: {
                            slidesPerView: 1,
                            spaceBetween: 24,
                        },
                        992: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                        768: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                        576: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                        500: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                        0: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                    }
                });
            })

            let windowHeight = $(window).height();
            $('.odometer').children().each(function() {
                if ($(this).isInViewport({
                        "tolerance": windowHeight,
                        "toleranceForLast": windowHeight,
                        "debug": false
                    })) {
                    var section = $(this).closest(".counters");
                    section.find(".odometer").each(function() {
                        $(this).html($(this).attr("data-odometer-final"));
                    });
                }
            });
        </script>



        <section class="testimonial-section overflow-visible">


            <!--Testimonial wap-->
            <div class="container">
                <div class="row g-5 justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="testimonial-v5-thumb">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="thumb2">
                                    <?php if (!empty($settings['image2']['url'])) :   ?>
                                        <img src="<?php echo esc_url($settings['image2']['url']) ?>" alt="img" class="radius-circle">
                                    <?php endif ?>
                                </div>
                                <div class="thumb1 position-relative">
                                    <?php if (!empty($settings['image1']['url'])) :   ?>
                                        <img src="<?php echo esc_url($settings['image1']['url']) ?>" alt="img" class="radius-circle">
                                    <?php endif ?>
                                    <?php if ($settings['iconshow'] == 'yes') : ?>
                                        <div class="quotes d-center n0-bg radius-circle">
                                            <i class="ph-bold ph-quotes"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-grid happy-thumb3 justify-content-center">
                                <div class="happy-cbox d-flex align-items-center justify-content-center radius-circle s1-bg">
                                    <div class="box">
                                        <?php if (!empty($settings['text1'])) :   ?>
                                            <h2 class="counters mb-1 n0-clr d-flex align-items-center">
                                                <?php echo wp_kses($settings['text1'], wp_kses_allowed_html('post'))  ?>
                                            </h2>
                                        <?php endif ?>
                                        <?php if (!empty($settings['text2'])) :   ?>
                                            <span class="nw1-clr fs18 d-block">
                                                <?php echo esc_html($settings['text2']) ?>
                                            </span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="thumb3">
                                    <?php if (!empty($settings['image3']['url'])) :   ?>
                                        <img src="<?php echo esc_url($settings['image3']['url']) ?>" alt="img" class="radius-circle">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-lg-0 pt-sm-5 pt-0">
                        <div class="swiper testimonial-uniquewrap">
                            <div class="swiper-wrapper">

                                <?php foreach ($settings['list_repeater'] as $item) : ?>
                                    <div class="swiper-slide">
                                        <div class="testi-unique-item">
                                            <div class="box mb-xxl-10 mb-8">
                                                <?php if (!empty($item['list_title'])) :   ?>
                                                    <h3 class="n4-clr mb-xxl-4 mb-xl-3 mb-2">
                                                        <?php echo esc_html($item['list_title']) ?>
                                                    </h3>
                                                <?php endif ?>
                                                <?php if (!empty($item['description'])) :   ?>
                                                    <p class="fs18 n3-clr">
                                                        <?php echo esc_html($item['description']) ?>
                                                    </p>
                                                <?php endif ?>
                                            </div>
                                            <div class="designation">
                                                <?php if (!empty($item['name'])) :   ?>
                                                    <span class="fs20 mb-1 fw_700 d-block">
                                                        <?php echo esc_html($item['name']) ?>
                                                    </span>
                                                <?php endif ?>
                                                <?php if (!empty($item['meta'])) :   ?>
                                                    <span class="fw_600 n2-clr d-block">
                                                        <?php echo esc_html($item['meta']) ?>
                                                </span>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                            </div>
                        </div>
                        <div class="mt-xxl-15 mt-xl-8 mt-6 d-flex align-items-center justify-content-between gap-4">
                            <div class="swiper-paginations n4-clr"></div>
                            <div class="d-flex align-items-center gap-xxl-6 gap-xl-5 gap-3">
                                <div class="slider-btn d-inline-flex gap-xxl-5 gap-3">
                                    <button type="button" class="swiper-button-nextteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                                        <i class="ph-light ph-caret-left act4-clr"></i>
                                    </button>
                                    <button type="button" class="swiper-button-prevteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                                        <i class="ph-light ph-caret-right act4-clr"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial wap-->
        </section>



<?php
    }
} ?>