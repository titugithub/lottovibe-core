<?php

/**
 * Logo widget class
 *
 */

use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Repeater;
use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\register_controls;

defined('ABSPATH') || die();
class Reactheme_Elementor_Slider_Widget  extends \Elementor\Widget_Base
{

    /**
     * Get widget name.
     *   
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */

    public function get_name()
    {
        return 'rt-slider';
    }

    /**
     * Get widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */

    public function get_title()
    {
        return esc_html__('SV Slider', 'rtelements');
    }

    public function get_style_depends()
    {

        wp_register_style('rtelements-style-slider', plugins_url('slider-css/slider.css', __FILE__));

        return [
            'rtelements-style-slider'
        ];
    }

    /**
     * Get widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-gallery-grid';
    }
    public function get_categories()
    {
        return ['pielements_category'];
    }
    public function get_keywords()
    {
        return ['slider'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            '_section_logo',
            [
                'label' => esc_html__('Slider Item', 'rtelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Image', 'rtelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_responsive_control(
            'img_margin',
            [
                'label' => esc_html__('Image Right Margin', 'rtelements'),
                'type' => Controls_Manager::TEXT,

            ]
        );


        $repeater->add_control(
            'sub-name',
            [
                'label' => esc_html__('Sub Title', 'rtelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Designation', 'rtelements'),
                'label_block' => true,
                'placeholder' => esc_html__('designation', 'rtelements'),
                'separator'   => 'before',
            ]
        );



        $repeater->add_control(
            'name',
            [
                'label' => esc_html__('Title', 'rtelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Testimonial Name', 'rtelements'),
                'label_block' => true,
                'placeholder' => esc_html__('Name', 'rtelements'),
                'separator'   => 'before',
            ]
        );

        $repeater->add_control(
            'btn_text',
            [
                'label' => esc_html__('Button Text', 'rtelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('', 'rtelements'),
                'label_block' => true,
                'placeholder' => esc_html__('Name', 'rtelements'),
                'separator'   => 'before',
            ]
        );

        $repeater->add_control(
            'rating',
            [
                'label' => esc_html__('Rating', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5,
                'step' => 1,
                'default' => 5,
            ]
        );

        $repeater->add_control(
            'rating_title',
            [
                'label' => esc_html__('Rating TItle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('4.9 Out of 5 Star', 'plugin-name'),
                'placeholder' => esc_html__('Type your title here', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label' => esc_html__('Link', 'rtelements'),
                'type' => Controls_Manager::URL,
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'rtelements'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => esc_html__('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'rtelements'),
                'label_block' => true,
                'placeholder' => esc_html__('Description', 'rtelements'),
                'separator'   => 'before',
            ]
        );

        $repeater->add_control(
            'rt_slider_style',
            [
                'label'   => esc_html__('Select Rating', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'style1',
                'options' => [
                    '1' => esc_html__('1', 'rtelements'),
                    '1.5' => esc_html__('1.5', 'rtelements'),
                    '2' => esc_html__('2', 'rtelements'),
                    '2.5' => esc_html__('2.5', 'rtelements'),
                    '3' => esc_html__('3', 'rtelements'),
                    '3.5' => esc_html__('3.5', 'rtelements'),
                    '4' => esc_html__('4', 'rtelements'),
                    '4.5' => esc_html__('4.5', 'rtelements'),
                    '5' => esc_html__('5', 'rtelements'),
                ],
            ]
        );

        $repeater->add_control(
            'logo_client',
            [
                'label' => esc_html__('User Company Logo', 'rtelements'),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'logo_list',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ name }}}',
                'default' => [
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                ]
            ]
        );

        $this->add_control(
            'trasted_clients_text',
            [
                'label' => esc_html__('Trasted Clients', 'rtelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Trusted From Over 1,500 Clients', 'rtelements'),
                'condition' => ['rt_slider_style' => 'style2',],
            ]
        );

        $this->add_control(
            'sub-name-image-icon',
            [
                'label' => esc_html__('Quote Icon', 'rtelements'),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_services_slider_s',
            [
                'label' => esc_html__('Slider Style', 'rtelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'rt_slider_style',
            [
                'label'   => esc_html__('Select Style', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'style2',
                'options' => [
                    'style1' => esc_html__('Style 1', 'rtelements'),
                    'style2' => esc_html__('Style 2', 'rtelements'),
                    'style3' => esc_html__('Style 3', 'rtelements'),
                ],
            ]
        );

        $this->add_control(
            'add_overlay_mobile',
            [
                'label'   => esc_html__('Add Overlay on Mobile', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'true',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',
                'condition' => ['rt_slider_style' => 'style4',],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_slider',
            [
                'label' => esc_html__('Slider Settings', 'rtelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'col_xl',
            [
                'label'   => esc_html__('Wide Screen > 1399px', 'rsaddon'),
                'type'    => Controls_Manager::SELECT,
                'default' => 3,
                'options' => [
                    '1' => esc_html__('1 Column', 'rsaddon'),
                    '2' => esc_html__('2 Column', 'rsaddon'),
                    '3' => esc_html__('3 Column', 'rsaddon'),
                    '4' => esc_html__('4 Column', 'rsaddon'),
                    '4.5' => esc_html__('4.5 Column', 'rsaddon'),
                    '5' => esc_html__('5 Column', 'rsaddon'),
                    '6' => esc_html__('6 Column', 'rsaddon'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'col_lg',
            [
                'label'   => esc_html__('Desktops > 1199px', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 3,
                'options' => [
                    '1' => esc_html__('1 Column', 'rtelements'),
                    '2' => esc_html__('2 Column', 'rtelements'),
                    '3' => esc_html__('3 Column', 'rtelements'),
                    '4' => esc_html__('4 Column', 'rtelements'),
                    '5' => esc_html__('5 Column', 'rtelements'),
                    '6' => esc_html__('6 Column', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'col_md',
            [
                'label'   => esc_html__('Desktops > 991px', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 3,
                'options' => [
                    '1' => esc_html__('1 Column', 'rtelements'),
                    '2' => esc_html__('2 Column', 'rtelements'),
                    '3' => esc_html__('3 Column', 'rtelements'),
                    '4' => esc_html__('4 Column', 'rtelements'),
                    '5' => esc_html__('5 Column', 'rtelements'),
                    '6' => esc_html__('6 Column', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'col_sm',
            [
                'label'   => esc_html__('Tablets > 767px', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 2,
                'options' => [
                    '1' => esc_html__('1 Column', 'rtelements'),
                    '2' => esc_html__('2 Column', 'rtelements'),
                    '3' => esc_html__('3 Column', 'rtelements'),
                    '4' => esc_html__('4 Column', 'rtelements'),
                    '5' => esc_html__('5 Column', 'rtelements'),
                    '6' => esc_html__('6 Column', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'col_xs',
            [
                'label'   => esc_html__('Tablets < 768px', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 1,
                'options' => [
                    '1' => esc_html__('1 Column', 'rtelements'),
                    '2' => esc_html__('2 Column', 'rtelements'),
                    '3' => esc_html__('3 Column', 'rtelements'),
                    '4' => esc_html__('4 Column', 'rtelements'),
                    '5' => esc_html__('5 Column', 'rtelements'),
                    '6' => esc_html__('6 Column', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'slides_ToScroll',
            [
                'label'   => esc_html__('Slide To Scroll', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 2,
                'options' => [
                    '1' => esc_html__('1 Item', 'rtelements'),
                    '2' => esc_html__('2 Item', 'rtelements'),
                    '3' => esc_html__('3 Item', 'rtelements'),
                    '4' => esc_html__('4 Item', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );
        $this->add_control(
            'rt_pslider_effect',
            [
                'label' => esc_html__('Slider Effect', 'rsaddon'),
                'type' => Controls_Manager::SELECT,
                'default' => 'default',
                'options' => [
                    'default' => esc_html__('Default', 'rsaddon'),
                    'fade' => esc_html__('Fade', 'rsaddon'),
                    'flip' => esc_html__('Flip', 'rsaddon'),
                    'cube' => esc_html__('Cube', 'rsaddon'),
                    'coverflow' => esc_html__('Coverflow', 'rsaddon'),
                    'creative' => esc_html__('Creative', 'rsaddon'),
                    'cards' => esc_html__('Cards', 'rsaddon'),
                ],
            ]
        );

        $this->add_control(
            'slider_dots',
            [
                'label'   => esc_html__('Navigation Dots', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );
        $this->add_control(
            'slider_dots_color',
            [
                'label' => esc_html__('Navigation Dots Color', 'rsaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet' => 'background-color: {{VALUE}} !important;',
                ],
                'condition' => ['slider_dots' => 'true',],
            ]
        );
        $this->add_control(
            'slider_dots_color_active',
            [
                'label' => esc_html__('Active Navigation Dots Color', 'rsaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}} !important;',
                ],
                'condition' => ['slider_dots' => 'true',],
            ]
        );

        $this->add_responsive_control(
            'slider_nav',
            [
                'label'   => esc_html__('Navigation Nav', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'pcat_nav_text_bg',
            [
                'label' => esc_html__('Nav BG Color', 'rsaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt-slider-navigation i' => 'background-color: {{VALUE}} !important;',
                ],
                'condition' => ['slider_nav' => 'true',],
            ]
        );
        $this->add_control(
            'pcat_nav_text_bg_hover',
            [
                'label' => esc_html__('Nav BG Hover Color', 'rsaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt-slider-navigation i:hover' => 'background-color: {{VALUE}} !important;',
                ],
                'condition' => ['slider_nav' => 'true',],
            ]
        );
        $this->add_control(
            'pcat_nav_text_bg_icon',
            [
                'label' => esc_html__('Nav BG Icon Color', 'rsaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt-slider-navigation i:before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => ['slider_nav' => 'true',],
            ]
        );
        $this->add_control(
            'pcat_nav_text_bg_hover_icon',
            [
                'label' => esc_html__('Nav BG Icon Hover Color', 'rsaddon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt-slider-navigation i:hover::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => ['slider_nav' => 'true',],
            ]
        );

        $this->add_control(
            'slider_autoplay',
            [
                'label'   => esc_html__('Autoplay', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'slider_autoplay_speed',
            [
                'label'   => esc_html__('Autoplay Slide Speed', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 3000,
                'options' => [
                    '1000' => esc_html__('1 Seconds', 'rtelements'),
                    '2000' => esc_html__('2 Seconds', 'rtelements'),
                    '3000' => esc_html__('3 Seconds', 'rtelements'),
                    '4000' => esc_html__('4 Seconds', 'rtelements'),
                    '5000' => esc_html__('5 Seconds', 'rtelements'),
                ],
                'separator' => 'before',
                'condition' => [
                    'slider_autoplay' => 'true',
                ],
            ]
        );

        $this->add_control(
            'slider_interval',
            [
                'label'   => esc_html__('Autoplay Interval', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 3000,
                'options' => [
                    '5000' => esc_html__('5 Seconds', 'rtelements'),
                    '4000' => esc_html__('4 Seconds', 'rtelements'),
                    '3000' => esc_html__('3 Seconds', 'rtelements'),
                    '2000' => esc_html__('2 Seconds', 'rtelements'),
                    '1000' => esc_html__('1 Seconds', 'rtelements'),
                ],
                'separator' => 'before',
                'condition' => [
                    'slider_autoplay' => 'true',
                ],
            ]
        );

        $this->add_control(
            'slider_stop_on_interaction',
            [
                'label'   => esc_html__('Stop On Interaction', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',
                'condition' => [
                    'slider_autoplay' => 'true',
                ],
            ]

        );

        $this->add_control(
            'slider_stop_on_hover',
            [
                'label'   => esc_html__('Stop on Hover', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',
                'condition' => [
                    'slider_autoplay' => 'true',
                ],
            ]

        );

        $this->add_control(
            'slider_loop',
            [
                'label'   => esc_html__('Loop', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'slider_centerMode',
            [
                'label'   => esc_html__('Center Mode', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__('Enable', 'rtelements'),
                    'false' => esc_html__('Disable', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'item_gap_custom',
            [
                'label' => esc_html__('Item Gap', 'rtelements'),
                'type' => Controls_Manager::SLIDER,
                'show_label' => true,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 15,
                ],

                'selectors' => [
                    '{{WRAPPER}} .rs-addon-slider .grid-item' => 'padding:0 {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            '_section_style_grid',
            [
                'label' => esc_html__('Slider Style', 'rtelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .content--box .slider-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rts-single-testimonials-one .awener-area .main .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_color_hover',
            [
                'label' => esc_html__('Title Color Hover', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-title:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .content--box .slider-title:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rts-single-testimonials-one .awener-area .main .title:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .content--box .slider-title,.rts-single-testimonials-one .awener-area .main .title',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Sub Title Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-subtitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .content--box .slider-subtitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rts-single-testimonials-one .awener-area .main span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'subtitle_cofflor',
            [
                'label' => esc_html__('Sub Title Color Hover', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-subtitle:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .content--box .slider-subtitle:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rts-single-testimonials-one .awener-area .main span:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .content--box .slider-subtitle,.slider-inner-wrapper .rt--slider.slider-style1 .slider-subtitle,.rts-single-testimonials-one .awener-area .main span',
            ]
        );

        $this->add_control(
            'ragting_title_color',
            [
                'label' => esc_html__('Rating Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider.slider-style2 .single--item .review-body .star-rating .star' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'des__styles',
            [
                'label' => esc_html__('Description Styles', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'des__color',
            [
                'label' => esc_html__('Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .description .desc p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content p.para' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .rts-single-testimonials-one p.disc' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des__typography',
                'selector' => '{{WRAPPER}} .rt--slider .single--item .review-body .desc,.rts-single-feedback-solar-energy .content p.para,.rts-single-testimonials-one p.disc',
            ]
        );

        $this->add_responsive_control(
            'des__padding',
            [
                'label' => esc_html__('Padding', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .slider-inner-wrapper .rt--slider.slider-style1 .single--item .review-body .desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content p.para' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_responsive_control(
            'des__margin',
            [
                'label' => esc_html__('Margin', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .slider-inner-wrapper .rt--slider.slider-style1 .single--item .review-body .desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content p.para' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_control(
            'modfasfre_options',
            [
                'label' => esc_html__('Avater', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'image_border',
            [
                'label' => esc_html__('Image Border Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .client-image img' => 'border:2px solid {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_style_options',
            [
                'label' => esc_html__('Button Styles', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'btn_color',
            [
                'label' => esc_html__('Button Text Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label' => esc_html__('Button Background', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => esc_html__('Button Hover Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_color',
            [
                'label' => esc_html__('Button Hover Background', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn:hover' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'slider_btn_typography',
                'selector' => '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn',
            ]
        );

        $this->add_responsive_control(
            'slider_btn_margin',
            [
                'label' => esc_html__('Margin', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_responsive_control(
            'slider_btn_padding',
            [
                'label' => esc_html__('Padding', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_control(
            'slider_btn_border_radius',
            [
                'label' => esc_html__('Border Radius', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rt--slider .single--item .content--box .slider-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_control(
            'slider_content_styles',
            [
                'label' => esc_html__('Slider Item Styles', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_control(
            'slider_item_bg_color',
            [
                'label' => esc_html__('Background Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area' => 'background: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'slider_item_padding',
            [
                'label' => esc_html__('Padding', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slide_item_margin',
            [
                'label' => esc_html__('Margin', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_control(
            'slider_style5_desc',
            [
                'label' => esc_html__('Description Styles', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .slider-description',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_control(
            'slider_style5_desc_color',
            [
                'label' => esc_html__('Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .slider-description' => 'color: {{VALUE}}',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'slider_style5_desc_margin',
                'selector' => '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .slider-description p',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_style5_desc_padding',
            [
                'label' => esc_html__('Padding', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .slider-description p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_style5_desc_margin',
            [
                'label' => esc_html__('Margin', 'rtelements'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rt--slider.slider-style5 .slider-content-area .slider-description p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_control(
            'slider_quote_style',
            [
                'label' => esc_html__('Quote Styles', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_control(
            'slider_left_quote_style',
            [
                'label' => esc_html__('Left Quote', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_left_quote_width',
            [
                'label' => esc_html__('Size', 'rtelements'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 80,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 80,
                ],
                'selectors' => [
                    '{{WRAPPER}} .left-quote img' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_left_quote_horizontal',
            [
                'label' => esc_html__('Horizontal', 'rtelements'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .left-quote' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_left_quote_vertical',
            [
                'label' => esc_html__('Verticale', 'rtelements'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .left-quote' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_right_quote_style',
            [
                'label' => esc_html__('Right Quote', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_right_quote_width',
            [
                'label' => esc_html__('Size', 'rtelements'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 80,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 80,
                ],
                'selectors' => [
                    '{{WRAPPER}} .right-quote img' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_right_quote_horizontal',
            [
                'label' => esc_html__('Horizontal', 'rtelements'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .right-quote' => 'right: {{SIZE}}{{UNIT}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'slider_right_quote_vertical',
            [
                'label' => esc_html__('Verticale', 'rtelements'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .right-quote' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_control(
            'slider_text_alignment',
            [
                'label' => esc_html__('Content Alignment', 'rtelements'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'tes-des-align',
            [
                'label' => esc_html__('Description Alignment', 'rtelements'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'rtelements'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'rtelements'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'rtelements'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .slider-description' => 'text-align: {{VALUE}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_responsive_control(
            'tes-name-desig-align',
            [
                'label' => esc_html__('Name & Designation', 'rtelements'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'rtelements'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'rtelements'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'rtelements'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .slider-style5 .slider-content-area .bottom--area' => 'justify-content: {{VALUE}};',
                ],
                'condition' => ['rt_slider_style' => 'style5',],
            ]
        );

        $this->add_control(
            'more_optifdfdons',
            [
                'label' => esc_html__('Rating', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'iconn_color',
            [
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content .cottom-review-area .stars i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'iconn_margin',
            [
                'label' => esc_html__('Margin', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content .cottom-review-area .stars i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'more_optiofdsfans',
            [
                'label' => esc_html__('Rating Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spinnfafaer_typ',
                'selector' => '{{WRAPPER}} .rts-single-feedback-solar-energy .content .cottom-review-area p',

            ]
        );

        $this->add_control(
            'spsdafasdfasdfinner_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content .cottom-review-area p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'spinndsfafaer_margin',
            [
                'label' => esc_html__('Margin', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content .cottom-review-area p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'spinnfafer_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .rts-single-feedback-solar-energy .content .cottom-review-area p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            '_section_style_grid2',
            [
                'label' => esc_html__('Trusted Text Style', 'rtelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'trusted_title_color',
            [
                'label' => esc_html__('Title Color', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-inner-wrapper .trasted-client span' => 'color: {{VALUE}}'

                ],
            ]
        );
        $this->add_control(
            'trusted_title_bg',
            [
                'label' => esc_html__('Title Bg', 'rtelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-inner-wrapper .trasted-client span' => 'background: {{VALUE}}'

                ],
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
     ?>

     
<?php
    }
}
