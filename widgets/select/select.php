<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Select_Widget extends \Elementor\Widget_Base
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
        return 'rt-select';
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
        return __('SV Select', 'rtelements');
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

    public function get_style_depends()
    {

        wp_register_style('rtelements-style-portfolio-slider', plugins_url('portfolio-slider-css/portfolio-slider.css', __FILE__));

        return [
            'rtelements-style-portfolio-slider'
        ];
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

        $this->add_control(
            'icon',
            [
                'label' => esc_html__('Choose Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );


        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'titleone',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'titletwo',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'name',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('List Title', 'plugin-name'),
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
                'label' => esc_html__('Car List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

                'title_field' => '{{{ name }}}',
            ]
        );


        $this->add_control(
            'buttontext',
            [
                'label' => esc_html__('Button Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('View Collection', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
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



        $this->end_controls_section();


        // ===========================Style========================//


        $this->start_controls_section(
             'subtitlestyle',
             [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'subtitle_typ',
                'selector' => '{{WRAPPER}} .subtitle',
        
            ]
        );
        
        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .subtitle' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'subtitle_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'titleonestyle',
             [
                'label' => esc_html__('Title One', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'titleone_typ',
                'selector' => '{{WRAPPER}} .titleone',
        
            ]
        );
        
        $this->add_control(
            'titleone_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .titleone' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'titleone_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .titleone' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'titleone_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .titleone' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'titletwostyle',
             [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'titletwo_typ',
                'selector' => '{{WRAPPER}} .titletwo',
        
            ]
        );
        
        $this->add_control(
            'titletwo_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .titletwo' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'titletwo_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .titletwo' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'titletwo_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .titletwo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'navstyle',
             [
                'label' => esc_html__('Navigation', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'spinnfder_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} button.cmn-s1-slide.cmn-60.act4-border.p1-clr.radius-circle' => 'border-color: {{VALUE}} !important',
                    '{{WRAPPER}} button.cmn-s1-slide.cmn-60.act4-border.p1-clr.radius-circle i' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'spinnerfdf_color',
            [
                'label' => esc_html__( 'Hover Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cmn-s1-slide:hover' => 'background: {{VALUE}} !important; border-color: {{VALUE}} !important',
                ],
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'namestyle',
             [
                'label' => esc_html__('Name', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'name_typ',
                'selector' => '{{WRAPPER}} .name',
        
            ]
        );
        
        $this->add_control(
            'name_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .name' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'name_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'name_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'buttonstyle',
             [
                'label' => esc_html__('Button', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'spinytaner_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.cmn__collection.radius-circle.p1-bg.d-center.position-relative' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'spinytadfsdner_color',
            [
                'label' => esc_html__( 'Hover Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cmn__collection::after' => 'background: {{VALUE}} !important',
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
                var swiper = new Swiper(".luxury-selectionwrap1", {
                    loop: true,
                    slidesPerView: 1,
                    slidesToShow: 1,
                    spaceBetween: 0,
                    speed: 1500,
                    navigation: {
                        nextEl: ".luxury-prevteam",
                        prevEl: ".luxury-nextteam",
                    },
                    breakpoints: {
                        1400: {
                            slidesPerView: 1,
                        },
                        992: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 1,
                        },
                        576: {
                            slidesPerView: 1,
                        },
                        500: {
                            slidesPerView: 1,
                        },
                    },
                });
            })
        </script>






        <section class="luxury-selection-v1 position-relative overflow-visible">
            <!--Section Header-->
            <div class="container">
                <div class="row g-xl-4 g-3 justify-content-center mb-xxl-15 mb-xl-10 mb-8">
                    <div class="col-lg-6">
                        <div class="section__title text-center">
                            <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex justify-content-center flex-wrap align-items-center gap-3" data-aos="zoom-in-down">
                                <?php if (!empty($settings['icon']['url'])) :   ?>
                                    <img src="<?php echo esc_url($settings['icon']['url']) ?>" alt="img">
                                <?php endif ?>
                                <?php if (!empty($settings['subtitle'])) :   ?>
                                    <h5 class="s1-clr fw_700 subtitle">
                                        <?php echo esc_html($settings['subtitle']) ?>
                                    </h5>
                                <?php endif ?>
                            </div>
                            <span class="display-four d-block n4-clr titleone" data-aos="zoom-in-down" data-aos-duration="1400">
                                <?php if (!empty($settings['titleone'])) :   ?>
                                    <?php echo esc_html($settings['titleone']) ?>
                                <?php endif ?>
                                <?php if (!empty($settings['titletwo'])) :   ?>
                                    <span class="act4-clr act4-underline titletwo" data-aos="zoom-in-up" data-aos-duration="1400">
                                        <?php echo esc_html($settings['titletwo']) ?>
                                    </span>
                                <?php endif ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Section Header-->

            <!--Luxury Car Selection-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="luxury-selectionwrap1 swiper mySwiper">
                            <div class="swiper-wrapper">

                                <?php foreach ($settings['list_repeater'] as $item) : ?>
                                    <div class="swiper-slide">
                                        <div class="luxury-car-item1">
                                            <?php if (!empty($item['image']['url'])) :   ?>
                                                <div class="thumb">
                                                    <img src="<?php echo esc_url($item['image']['url']) ?>" alt="img">
                                                </div>
                                            <?php endif ?>
                                            <?php if (!empty($item['name'])) :   ?>
                                                <div class="name cont mt-xxl-15 mt-lg-8 mt-md-7 mt-4 display-three act4-clr text-uppercase text-center">
                                                    <?php echo esc_html($item['name']) ?>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>



                            </div>
                        </div>
                        <div class="d-flex luxury-cusbtn justify-content-center mt-xxl-7 mt-5">
                            <a href="<?php echo esc_url($settings['buttonlink']['url']) ?>" class="cmn__collection radius-circle p1-bg d-center position-relative">
                                <span class="cmn-cont-box text-center position-relative">
                                    <span class="icon mb-1">
                                        <i class="ph-bold ph-arrow-up-right fs-three"></i>
                                    </span>
                                    <?php if (!empty($settings['buttontext'])) :   ?>
                                        <span class="d-block n4-clr fw_700">
                                            <?php echo esc_html($settings['buttontext']) ?>
                                        </span>
                                    <?php endif ?>

                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="click-slideluxry-button">
                <div class="container">
                    <div class="slider-btn d-inline-flex justify-content-between w-100 gap-xxl-5 gap-3" data-aos="zoom-in-down" data-aos-duration="1400">
                        <button type="button" class="luxury-prevteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                            <i class="ph-light ph-caret-left act4-clr"></i>
                        </button>
                        <button type="button" class="luxury-nextteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                            <i class="ph-light ph-caret-right act4-clr"></i>
                        </button>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/global-shape/suxry-shape.png" alt="img" class="luxury-shape">
            <!--Luxury Car Selection-->
        </section>






<?php
    }
} ?>