<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Testimonial_Widget extends \Elementor\Widget_Base
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
        return 'rt-testimonial';
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
        return __('SV Testimonial', 'rtelements');
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
            'subtitlecontent',
            [
                'label' => esc_html__('Subtitle', 'plugin-name')
            ]
        );

        $this->add_control(
            'imagesubtitle',
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
                'default' => esc_html__('Default subtitle', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'titlecontent',
            [
                'label' => esc_html__('Title', 'plugin-name')
            ]
        );


        $this->add_control(
            'title1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Testimonials', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'title2',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('People', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title3',
            [
                'label' => esc_html__('Title Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('are talking', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'user1',
            [
                'label' => esc_html__('User One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'user2',
            [
                'label' => esc_html__('User Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'user3',
            [
                'label' => esc_html__('User Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'usernumber',
            [
                'label' => esc_html__('User Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('10k+', 'plugin-name'),
                'label_block' => true,
            ]
        );




        $this->end_controls_section();

        $this->start_controls_section(
            'ratingcontent',
            [
                'label' => esc_html__('Rating', 'plugin-name')
            ]
        );


        $this->add_control(
            'ratingtitle',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'ratingicon',
            [
                'label' => esc_html__('Rating Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $this->add_control(
            'review',
            [
                'label' => esc_html__('Review', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'testimonialcontent',
            [
                'label' => esc_html__('Testimonial', 'plugin-name')
            ]
        );

        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'testirating',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $repeater->add_control(
            'testititle',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'testidescription',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $repeater->add_control(
            'testiimage',
            [
                'label' => esc_html__('Choose User Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'testiname',
            [
                'label' => esc_html__('Name', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'testimeta',
            [
                'label' => esc_html__('Meta Data', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $repeater->add_control(
            'testimonial_image',
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
                'label' => esc_html__('Testimonial List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

                'title_field' => '{{{ testiname }}}',
            ]
        );



        $this->end_controls_section();


        // =======================style===========================//

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
             'titlestyle',
             [
                'label' => esc_html__('Title', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'more_fdoptions',
            [
                'label' => esc_html__( 'Title One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spinffner_typ',
                'selector' => '{{WRAPPER}} .title1',
        
            ]
        );
        
        $this->add_control(
            'spinneffr_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title1' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_control(
            'more_fdoptifons',
            [
                'label' => esc_html__( 'Title Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spinne22_typ',
                'selector' => '{{WRAPPER}} .title2',
        
            ]
        );
        
        $this->add_control(
            'spinner22_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title2' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_control(
            'more_fdoptifffons',
            [
                'label' => esc_html__( 'Title Three', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spinneffr_typ',
                'selector' => '{{WRAPPER}} .title3',
        
            ]
        );
        
        $this->add_control(
            'spinnedfr_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title3' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        $this->add_control(
            'mfdore_options',
            [
                'label' => esc_html__( 'User', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'sfdfdpinner_color',
            [
                'label' => esc_html__( 'Background Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.d-grid.customer-ratting.text-center.p-2.p1-bg.align-items-center.justify-content-center' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
             'ratingstyle',
             [
                'label' => esc_html__('Rating', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );


        
        
        $this->add_control(
            'more_optifsdafons',
            [
                'label' => esc_html__( 'Title', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'title_typ',
                'selector' => '{{WRAPPER}} span.n4-clr.fw_700.mb-xxl-6.mb-xl-4.mb-3',
        
            ]
        );
        
        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.n4-clr.fw_700.mb-xxl-6.mb-xl-4.mb-3' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} span.n4-clr.fw_700.mb-xxl-6.mb-xl-4.mb-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'title_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} span.n4-clr.fw_700.mb-xxl-6.mb-xl-4.mb-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );


        $this->add_control(
            'more_optfdfifsdafons',
            [
                'label' => esc_html__( 'Rating', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'ratingstyle_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-ratting ul.ratting li i' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'more_optifsfddafons',
            [
                'label' => esc_html__( 'Review', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'spinngaggfer_color',
            [
                'label' => esc_html__( 'Color One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h4.n2-clr' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'spigfgnner_color',
            [
                'label' => esc_html__( 'Color Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fs-six.fw_600' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'testimonialstyle',
             [
                'label' => esc_html__('Testimonial', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'more_opjjjtions',
            [
                'label' => esc_html__( 'Rating', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'ratingg_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .box ul.ratting.d-flex li i' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->add_control(
            'more_opjjjftions',
            [
                'label' => esc_html__( 'Title', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'raign_tilee_typ',
                'selector' => '{{WRAPPER}} span.fs20.fw_700.n4-clr.d-block.mb-xxl-6.mb-4',
        
            ]
        );
        
        $this->add_control(
            'ratingg_title_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fs20.fw_700.n4-clr.d-block.mb-xxl-6.mb-4' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        $this->add_control(
            'more_opjjjtfions',
            [
                'label' => esc_html__( 'Description', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'srdes_typ',
                'selector' => '{{WRAPPER}} p.fs18.pra',
        
            ]
        );
        
        $this->add_control(
            'rdes_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.fs18.pra' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        $this->add_control(
            'more_opfdjjjtions',
            [
                'label' => esc_html__( 'Name', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'ename_typ',
                'selector' => '{{WRAPPER}} span.fs20.mb-1.fw_700.n4-clr.d-block',
        
            ]
        );
        
        $this->add_control(
            'ename_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fs20.mb-1.fw_700.n4-clr.d-block' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        $this->add_control(
            'more_opjfjjtions',
            [
                'label' => esc_html__( 'Meta', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'meta_typ',
                'selector' => '{{WRAPPER}} span.fw_600.n2-clr',
        
            ]
        );
        
        $this->add_control(
            'meta_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_600.n2-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        $this->add_control(
            'more_ofpjfjjtions',
            [
                'label' => esc_html__( 'Image One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'image_border_color',
            [
                'label' => esc_html__( 'Border Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-item1 .adrew' => 'border-color: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->add_control(
            'more_opjfjjftions',
            [
                'label' => esc_html__( 'Image Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'spfdfasfinner_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-item1 .testi-winthumb' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_control(
            'spfdfasfinfnfer_color',
            [
                'label' => esc_html__( 'Hover Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-item1 .testi-winthumb:hover' => 'background: {{VALUE}} !important',
                ],
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
            'navv_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-pagination-testi .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();


        $this->start_controls_section(
             'seccstyle',
             [
                'label' => esc_html__('Section', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'spinfdsfdsfner_color',
            [
                'label' => esc_html__( 'Background (Left)', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-v1-before::before' => 'background: {{VALUE}} !important',
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
                var swiper = new Swiper(".testimonial-wrap1", {
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
                    pagination: {
                        el: ".swiper-pagination-testi",
                        clickable: true,
                    },
                    breakpoints: {
                        1600: {
                            slidesPerView: 4.1,
                            spaceBetween: 24,
                        },
                        992: {
                            slidesPerView: 3.5,
                            spaceBetween: 14,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 14,
                        },
                        576: {
                            slidesPerView: 2,
                            spaceBetween: 14,
                        },
                        500: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                    },
                });
            })
        </script>



        <section class="testimonial-section testimonial-v1-before pt-120 pb-120">
            <!--Section Header-->
            <div class="container">
                <div class="row g-xl-4 g-3 align-items-center justify-content-between mb-x$this<?php echo get_template_directory_uri() ?>/assets/imagesxl-15 mb-xl-10 mb-8">
                    <div class="col-lg-6 col-md-8 col-sm-9">
                        <div class="section__title">
                            <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                <?php if (!empty($settings['imagesubtitle']['url'])) :   ?>
                                    <img src="<?php echo esc_url($settings['imagesubtitle']['url']) ?>" alt="img">
                                <?php endif ?>
                                <?php if (!empty($settings['subtitle'])) :   ?>
                                    <h5 class="s1-clr fw_700 subtitle">
                                        <?php echo esc_html($settings['subtitle']) ?>
                                    </h5>
                                <?php endif ?>
                            </div>
                            <div class="display-four testimonial-heading d-block n4-clr title1">
                                <?php echo esc_html($settings['title1']) ?> <span class="act4-clr act4-underline title2" data-aos="zoom-in-left" data-aos-duration="1000"><?php echo esc_html($settings['title2']) ?> </span>
                                <div class="d-flex flex-wrap align-items-center g-4">
                                    <ul class="customer-review testi-people-title cmn-style-flex list-unstyled">
                                        <?php if (!empty($settings['user1']['url'])) :   ?>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo esc_url($settings['user1']['url']) ?>" alt="img">
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($settings['user2']['url'])) :   ?>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo esc_url($settings['user2']['url']) ?>" alt="img">
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($settings['user3']['url'])) :   ?>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo esc_url($settings['user3']['url']) ?>" alt="img">
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($settings['usernumber'])) :   ?>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <span class="d-grid customer-ratting text-center p-2 p1-bg align-items-center justify-content-center">
                                                        <span class="d-block fs-eight fw_700 n4-clr">
                                                            <?php echo esc_html($settings['usernumber']) ?>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php endif ?>
                                    </ul>
                                    <?php if (!empty($settings['title3'])) :   ?>
                                        <span class="d-block ar-talking title3" data-aos="zoom-in-right" data-aos-duration="1200">
                                            <?php echo esc_html($settings['title3']) ?>
                                        </span>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="testimonial-ratting" data-aos="zoom-in-down" data-aos-duration="1600">
                            <?php if (!empty($settings['ratingtitle'])) :   ?>
                                <span class="n4-clr fw_700 mb-xxl-6 mb-xl-4 mb-3">
                                    <?php echo wp_kses($settings['ratingtitle'], wp_kses_allowed_html('post'))  ?>
                                </span>
                            <?php endif ?>
                            <?php if (!empty($settings['ratingicon'])) :   ?>
                                <ul class="ratting d-flex align-items-center gap-1 mb-xxl-3 mb-2 list-unstyled">
                                    <?php echo wp_kses($settings['ratingicon'], wp_kses_allowed_html('post'))  ?>
                                </ul>
                            <?php endif ?>

                            <h4 class="n2-clr">

                                <?php echo wp_kses($settings['review'], wp_kses_allowed_html('post'))  ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Section Header-->

            <!--Testimonial wap-->
            <div class="swiper testimonial-wrap1">
                <div class="swiper-wrapper">

                    <?php foreach ($settings['list_repeater'] as $item) : ?>

                        <div class="swiper-slide">
                            <div class="testimonial-item1 pt-xxl-10 pt-xl-8 pt-lg-6 pt-4 nw4-border text-center">
                                <div class="box px-xxl-10 px-xl-8 px-lg-6 px-4">
                                    <?php if (!empty($item['testirating'])) :   ?>
                                        <ul class="ratting d-flex justify-content-center align-items-center gap-1 mb-xxl-4 mb-3 list-unstyled">
                                            <?php echo wp_kses($item['testirating'], wp_kses_allowed_html('post'))  ?>
                                        </ul>
                                    <?php endif ?>
                                    <?php if (!empty($item['testititle'])) :   ?>
                                        <span class="fs20 fw_700 n4-clr d-block mb-xxl-6 mb-4">
                                            <?php echo esc_html($item['testititle']) ?>
                                        </span>
                                    <?php endif ?>
                                    <?php if (!empty($item['testidescription'])) :   ?>
                                        <p class="fs18 pra">
                                            <?php echo esc_html($item['testidescription']) ?>
                                        </p>
                                    <?php endif ?>

                                    <div class="cont mt-xxl-7 mt-xl-6 mt-5 mb-xxl-10 mb-xl-8 mb-lg-6 mb-5">
                                        <?php if (!empty($item['testiimage']['url'])) :   ?>
                                            <div class="adrew">
                                                <img src="<?php echo esc_url($item['testiimage']['url']) ?>" alt="img">
                                            </div>
                                        <?php endif ?>
                                        <?php if (!empty($item['testiname'])) :   ?>
                                            <span class="fs20 mb-1 fw_700 n4-clr d-block">
                                                <?php echo esc_html($item['testiname']) ?>
                                            </span>
                                        <?php endif ?>
                                        <?php if (!empty($item['testimeta'])) :   ?>
                                            <span class="fw_600 n2-clr">
                                                <?php echo esc_html($item['testimeta']) ?>
                                            </span>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <?php if (!empty($item['testimonial_image']['url'])) :   ?>
                                    <div class="testi-winthumb radius100">
                                        <img src="<?php echo esc_url($item['testimonial_image']['url']) ?>" alt="img" class="ttimg">
                                    </div>
                                <?php endif ?>

                            </div>
                        </div>
                    <?php endforeach; ?>







                </div>
                <div class="container">
                    <div class="swiper-pagination-testi text-start mt-xxl-13 mt-xl-8 mt-lg-6 mt-4"></div>
                </div>
            </div>
            <!--Testimonial wap-->
        </section>



<?php
    }
} ?>