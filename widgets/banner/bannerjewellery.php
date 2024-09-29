<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Bannerjewellery_Widget extends \Elementor\Widget_Base
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
        return 'rt-bannerjewellery';
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
        return __('SV Banner Jewellery', 'rtelements');
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


        // Content Controls
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'your-plugin'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Title
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Glamour in Every Draw', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Subtitle (with multiple lines)
        $this->add_control(
            'subtitle_line1',
            [
                'label' => __('Subtitle Line 1', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Play for Your', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'subtitle_line2',
            [
                'label' => __('Subtitle Line 2', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Chance Jewelry', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'subtitle_line3',
            [
                'label' => __('Subtitle Line 3', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Wins!', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Description
        $this->add_control(
            'description',
            [
                'label' => __('Description', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Get ready for a winning experience like no other! Join us in the thrill of anticipation and be the next lucky winner.', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Button Text
        $this->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Participate Now', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Button Link
        $this->add_control(
            'button_link',
            [
                'label' => __('Button Link', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Main Banner Image
        $this->add_control(
            'banner_image',
            [
                'label' => __('Banner Image', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        // Small Banner Image
        $this->add_control(
            'small_banner_image',
            [
                'label' => __('Small Banner Image', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // Video Thumbnail Image
        $this->add_control(
            'video_thumb_image',
            [
                'label' => __('Video Thumbnail Image', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // Video Link
        $this->add_control(
            'video_link',
            [
                'label' => __('Video Link', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'your-plugin'),
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=668nUCeBHyY',
                ],
                'dynamic' => ['active' => true],
            ]
        );

        // Start Now Button Text
        $this->add_control(
            'start_now_text',
            [
                'label' => __('Start Now Button Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Get Started Now', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Start Now Button Link
        $this->add_control(
            'start_now_link',
            [
                'label' => __('Start Now Button Link', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'userimage1',
            [
                'label' => esc_html__('User Image One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'userimage2',
            [
                'label' => esc_html__('User Image Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'userimage3',
            [
                'label' => esc_html__('User Image Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'usertext1',
            [
                'label' => esc_html__('User Text One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Treasures', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'usertext2',
            [
                'label' => esc_html__('User Text Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Every Time', 'plugin-name'),
                'label_block' => true,
            ]
        );

        // Scroll Button Text
        $this->add_control(
            'scroll_text',
            [
                'label' => __('Scroll Button Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Scroll', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Scroll Button Link
        $this->add_control(
            'scroll_link',
            [
                'label' => __('Scroll Button Link', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('#down-scroll', 'your-plugin'),
                'default' => [
                    'url' => '#down-scroll',
                ],
                'dynamic' => ['active' => true],
            ]
        );

        $this->end_controls_section();




        // ===========================Style===========================//




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
                'name'     => 'subtitlesftyle_typ',
                'selector' => '{{WRAPPER}} h4.n4-clr.mb-xxl-3.mb-3',
        
            ]
        );
        
        $this->add_control(
            'subtitlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h4.n4-clr.mb-xxl-3.mb-3' => 'color: {{VALUE}} !important;',
                ],
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
        
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'titlestfyle_typ',
                'selector' => '{{WRAPPER}} .display-two.position-relative.cus-z1.fw_900.text-capitalize.n4-clr.mb-xxl-5.mb-4 span',
        
            ]
        );
        
        $this->add_control(
            'titlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .display-two.position-relative.cus-z1.fw_900.text-capitalize.n4-clr.mb-xxl-5.mb-4 span' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        $this->add_control(
            'titlestyle_color2',
            [
                'label'     => esc_html__('Color Two', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_900.act4-clr.d-block.mt-xxl-0.mt-lg-5.mt-1' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        $this->end_controls_section();


        $this->start_controls_section(
             'descriptionstyle',
             [
                'label' => esc_html__('Description', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'descriptfionstyle_typ',
                'selector' => '{{WRAPPER}} p.n3-clr.fs18.fw_500.mb-xxl-10.mb-lg-8.mb-5',
        
            ]
        );
        
        $this->add_control(
            'descriptionstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.n3-clr.fs18.fw_500.mb-xxl-10.mb-lg-8.mb-5' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'descriptionstyle_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} p.n3-clr.fs18.fw_500.mb-xxl-10.mb-lg-8.mb-5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'descriptionstyle_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} p.n3-clr.fs18.fw_500.mb-xxl-10.mb-lg-8.mb-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        
        $this->end_controls_section();


        $this->start_controls_section(
             'buttononestyle',
             [
                'label' => esc_html__('Button One', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'buttononestyle_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .kewta-btn .kew-text' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .kt-two i' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .kt-two i' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'buttononestyle_bac_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .kewta-btn .kew-text' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .kewta-btn.kewta-alt .kew-arrow' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();


        $this->start_controls_section(
             'buttontwostyle',
             [
                'label' => esc_html__('Button Two', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'buttontwostyle_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.d-block.mb-xxl-3.mb-3' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'buttontwostyle_colorback',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.banner-v7-startnow.text-center.py-xxl-8.py-xl-7.py-6.py-lg-5.px-xxl-6.px-xl-4.px-3.d-inline-flex.justify-content-center.align-items-center.radius100.act4-bg' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        
        $this->end_controls_section();

        


        $this->start_controls_section(
             'userstyle',
             [
                'label' => esc_html__('User', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'userssftyle_typ',
                'selector' => '{{WRAPPER}} span.fw_600.text-uppercase span',
        
            ]
        );
        
        $this->add_control(
            'userstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_600.text-uppercase span' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        
        $this->end_controls_section();


        $this->start_controls_section(
             'scrollstyle',
             [
                'label' => esc_html__('Scroll', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'scrollstyle_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.n4-clr.fs18.d-block.fw_600' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .scroll-iconrarea svg path' => 'fill: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->add_control(
            'scrollstyle_colorb',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.scroll-bn1.act3-bg.radius100.d-flex.justify-content-center.align-items-center.justify-content-center' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'imagestyle',
             [
                'label' => esc_html__('Image', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'more_options',
            [
                'label' => esc_html__( 'Image One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'imageone_height',
            [
                'label'       => esc_html__( 'Height', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-v7wraper .banner-v7-thumb img ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imageone_width',
            [
                'label'       => esc_html__( 'Width', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-v7wraper .banner-v7-thumb img ' => 'width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imageone_border_radius',
            [
                'label'      => __('Border Radius', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .banner-v7wraper .banner-v7-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );
        
        $this->add_control(
            'more_options2',
            [
                'label' => esc_html__( 'Image Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_responsive_control(
            'imagetwo_height',
            [
                'label'       => esc_html__( 'Height', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-v7-thumb-small img ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagetwo_width',
            [
                'label'       => esc_html__( 'Width', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-v7-thumb-small img ' => 'width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagetwo_border_radius',
            [
                'label'      => __('Border Radius', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .banner-v7-thumb-small img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );
        
        $this->add_control(
            'more_options3',
            [
                'label' => esc_html__( 'Image Thre', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_responsive_control(
            'imagethree_height',
            [
                'label'       => esc_html__( 'Height', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .thumb-textvid img ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagethree_width',
            [
                'label'       => esc_html__( 'Width', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .thumb-textvid img ' => 'width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagethree_border_radius',
            [
                'label'      => __('Border Radius', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .thumb-textvid img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
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



        <section class="banner-section-v4 banner-section-v7 pt-70-fixed n4-bg position-relative">
            <!--Banner Content -->
            <div class="banner-v7wraper pt-xxl-8 pt-xl-16 pt-lg-4">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-4 col-md-4 order-1 order-lg-0">
                            <div class="banner-v7-thumb position-relative">
                                <?php if (!empty($settings['banner_image']['url'])) :   ?>
                                    <img src="<?php echo esc_url($settings['banner_image']['url']) ?>" alt="img">

                                <?php endif ?>
                                <?php if (!empty($settings['start_now_text'])) :   ?>
                                    <a href="<?php echo esc_url($settings['start_now_link']['url']) ?>" class="banner-v7-startnow text-center py-xxl-8 py-xl-7 py-6 py-lg-5 px-xxl-6 px-xl-4 px-3 d-inline-flex justify-content-center align-items-center radius100 act4-bg">
                                        <span class="box">
                                            <span class="d-block mb-xxl-3 mb-3">
                                                <?php echo esc_html($settings['start_now_text']) ?>
                                            </span>
                                            <span class="cmn-48 m-auto icon radius-circle d-center">
                                                <i class="ph-bold ph-arrow-right n0-clr"></i>
                                            </span>
                                        </span>
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <div class="banner-content-v4 banner-content-v7 pt-xxl-20 pt-12 mt-6">
                                <div class="bn-content-box">
                                    <h4 class="n4-clr mb-xxl-3 mb-3">
                                        <?php if (!empty($settings['title'])) : ?>
                                            <?php echo esc_html($settings['title']); ?>
                                        <?php endif; ?>
                                    </h4>
                                    <div class="display-two position-relative cus-z1 fw_900 text-capitalize n4-clr mb-xxl-5 mb-4">
                                        <div class="d-flex text-capitalize align-items-center n4-clr gap-3 text-uppercase" data-aos="zoom-in-up" data-aos-duration="2200">
                                            <?php if (!empty($settings['subtitle_line1'])) :   ?>
                                                <span class="fw_900"><?php echo esc_html($settings['subtitle_line1']) ?></span>
                                            <?php endif ?>
                                            <div class="thumb-textvid">
                                                <img src="<?php echo esc_url($settings['video_thumb_image']['url']) ?>" alt="img" class="radius100">
                                                <a href="<?php echo esc_url($settings['video_link']['url']) ?>" class="bn-vid popup-video">
                                                    <i class="ti ti-player-play-filled act3-clr fs-four"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?php if (!empty($settings['subtitle_line2'])) :   ?>
                                            <span class="fw_900 text-capitalize d-block"><?php echo esc_html($settings['subtitle_line2']) ?></span>
                                        <?php endif ?>
                                        <?php if (!empty($settings['subtitle_line3'])) :   ?>
                                            <span class="fw_900 act4-clr d-block mt-xxl-0 mt-lg-5 mt-1"><?php echo esc_html($settings['subtitle_line3']) ?></span>
                                        <?php endif ?>
                                    </div>
                                    <div class="row g-xxl-6 g-4">
                                        <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-8 col-sm-9">
                                            <?php if (!empty($settings['description'])) :   ?>
                                                <p class="n3-clr fs18 fw_500 mb-xxl-10 mb-lg-8 mb-5" data-aos="fade-down-right" data-aos-duration="1500">
                                                    <?php echo esc_html($settings['description']) ?>
                                                </p>
                                            <?php endif ?>
                                            <?php if (!empty($settings['button_text'])) :   ?>
                                                <div class="d-flex cus-z1 position-relative">
                                                    <a href="<?php echo esc_url($settings['button_link']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
                                                        <span class="kew-text n4-clr act3-bg">
                                                            <?php echo esc_html($settings['button_text']) ?>
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
                                                </div>
                                            <?php endif ?>

                                            <div class="banner-content-v7customer mt-10 pt-xxl-20 pb-sm-0 pb-3 d-flex align-items-center justify-content-lg-end gap-xxl-5 gap-xl-3 gap-2">
                                                <ul class="customer-review cmn-style-flex list-unstyled">
                                                    <?php if (!empty($settings['userimage1'])) :   ?>
                                                        <li>
                                                            <a href="javascript:void(0)" class="customer-revew-item act3-bg d-flex align-items-center justify-content-center">
                                                                <img src="<?php echo esc_url($settings['userimage1']['url']) ?>" alt="img">
                                                            </a>
                                                        </li>
                                                    <?php endif ?>
                                                    <?php if (!empty($settings['userimage2'])) :   ?>
                                                        <li>
                                                            <a href="javascript:void(0)" class="customer-revew-item act3-bg d-flex align-items-center justify-content-center">
                                                                <img src="<?php echo esc_url($settings['userimage2']['url']) ?>" alt="img">
                                                            </a>
                                                        </li>
                                                    <?php endif ?>
                                                    <?php if (!empty($settings['userimage3'])) :   ?>
                                                        <li>
                                                            <a href="javascript:void(0)" class="customer-revew-item act3-bg d-flex align-items-center justify-content-center">
                                                                <img src="<?php echo esc_url($settings['userimage3']['url']) ?>" alt="img">
                                                            </a>
                                                        </li>
                                                    <?php endif ?>
                                                </ul>
                                                <span class="fw_600 text-uppercase">
                                                    <?php if (!empty($settings['usertext1'])) :   ?>
                                                        <span class="d-block fs20 fw_600">
                                                            <?php echo esc_html($settings['usertext1']) ?>
                                                        </span>
                                                    <?php endif ?>
                                                    <?php if (!empty($settings['usertext2'])) :   ?>
                                                        <span class="d-block fs20 fw_600">
                                                            <?php echo esc_html($settings['usertext2']) ?>
                                                        </span>
                                                    <?php endif ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-4 col-lg-4 col-md-4 col-sm-3">
                                            <?php if (!empty($settings['small_banner_image']['url'])) :   ?>
                                                <div class="banner-v7-thumb-small">
                                                    <img src="<?php echo esc_url($settings['small_banner_image']['url']) ?>" alt="img">
                                                </div>
                                            <?php endif ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Content -->
            <!--Scroll Top -->
            <?php if (!empty($settings['scroll_text'])) :   ?>
                <a href="<?php echo esc_url($settings['scroll_link']['url']); ?>" class="scroll-bn1 act3-bg radius100 d-flex justify-content-center align-items-center justify-content-center">
                    <span class="d-grid gap-xxl-5 gap-xl-4 gap-3 justify-content-center text-center m-auto">
                        <span class="n4-clr fs18 d-block fw_600">
                            <?php echo esc_html($settings['scroll_text']); ?>
                        </span>
                        <span class="scroll-iconrarea">
                            <svg width="16" height="65" viewBox="0 0 16 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.29289 64.7071C7.68341 65.0976 8.31658 65.0976 8.7071 64.7071L15.0711 58.3431C15.4616 57.9526 15.4616 57.3195 15.0711 56.9289C14.6805 56.5384 14.0474 56.5384 13.6569 56.9289L8 62.5858L2.34314 56.9289C1.95262 56.5384 1.31945 56.5384 0.92893 56.9289C0.538405 57.3195 0.538405 57.9526 0.92893 58.3431L7.29289 64.7071ZM7 -4.37121e-08L7 64L9 64L9 4.37121e-08L7 -4.37121e-08Z" fill="black" />
                            </svg>
                        </span>
                    </span>
                </a>
            <?php endif ?>

            <!--Scroll Top -->
        </section>










<?php
    }
} ?>