<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Bannerelectronic_Widget extends \Elementor\Widget_Base
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
        return 'rt-bannerelectrocic';
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
        return __('SV Banner Electronic', 'rtelements');
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


        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Electronic Jackpot', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('World', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Of Electronic', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title3',
            [
                'label' => esc_html__('Title Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Triumphs!', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Get ready for a winning experience like no other! Join us in the thrill of anticipation and be the next lucky winner.', 'plugin-name'),
            ]
        );


        $this->add_control(
            'buttontext',
            [
                'label' => esc_html__('Button Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Participant Now', 'plugin-name'),
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

        $this->add_control(
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
            'numbertext',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('9.5', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'rating',
            [
                'label' => esc_html__('Rating', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,

            ]
        );

        $this->add_control(
            'ratingtext',
            [
                'label' => esc_html__('Rating Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__(' 207K Reviews', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'number1',
            [
                'label' => esc_html__('Number One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
            ]
        );

        $this->add_control(
            'text1',
            [
                'label' => esc_html__('Text One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Verified Users', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'number2',
            [
                'label' => esc_html__('Number Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__(' 15', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'text2',
            [
                'label' => esc_html__('Text Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Years on the market', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'reborn1',
            [
                'label' => esc_html__('Show Reborn One?', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'plugin-name'),
                'label_off' => esc_html__('Hide', 'plugin-name'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $this->add_control(
            'reborn2',
            [
                'label' => esc_html__('Show Reborn Two?', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'plugin-name'),
                'label_off' => esc_html__('Hide', 'plugin-name'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $this->end_controls_section();


        // =============================Style============================//


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

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'titlestyle_typ',
                'selector' => '{{WRAPPER}} .title span',
        
            ]
        );
        
        $this->add_control(
            'titlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title span' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'titlestyle_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .title span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'titlestyle_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .title span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'desstyle',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'description_typ',
                'selector' => '{{WRAPPER}} .description',
        
            ]
        );
        
        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .description' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'description_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
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
            'buttonstyle_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .kewta-btn .kew-text' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .kt-one i' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .kt-two i' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'buttonstyle_color_backgfround',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .kewta-btn .kew-text' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .kewta-btn .kew-arrow' => 'background: {{VALUE}} !important',
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


        $this->add_responsive_control(
            'imagestyle_height',
            [
                'label'       => esc_html__( 'Height', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-thumbv9 img ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagestyle_width',
            [
                'label'       => esc_html__( 'Width', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-thumbv9 img ' => 'width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagestyle_border_radius',
            [
                'label'      => __('Border Radius', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .banner-thumbv9 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'reviewstyle',
            [
                'label' => esc_html__('Review', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'review_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ratting  li i' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'review_color_text',
            [
                'label' => esc_html__( 'Text Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.n4-clr.fw_600.fs20.d-block' => 'color: {{VALUE}} !important',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'numberstyle',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


 
        
        $this->add_control(
            'numberstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.odometer-value' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} span.odometer-formatting-mark' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} span.display-three.fw_800.n4-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'textstyle',
            [
                'label' => esc_html__('Text', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'textstyle_typ',
                'selector' => '{{WRAPPER}} .banner-v9-countreview .bn1-odometer p',
        
            ]
        );
        
        $this->add_control(
            'textstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-v9-countreview .bn1-odometer p' => 'color: {{VALUE}} !important;',
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

        <section class="banner-section-v9 <?php echo ( !empty($settings['reborn2'] == "yes") ) ? 'electronic-shape' : ''; ?> pt-70-fixed  position-relative ">
            <!--Banner Content -->
            <div class="banner-v4wraper pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="banner-content-v9 pt-xxl-20 pt-12 mt-xl-6 mt-lg-6 mt-5 position-relative">
                                <div class="bn-content-box">
                                    <?php if (!empty($settings['subtitle'])) :   ?>
                                        <h4 class=" n4-clr mb-xxl-3 mb-2 subtitle">
                                            <?php echo esc_html($settings['subtitle']) ?>
                                        </h4>
                                    <?php endif ?>
                                    <div class="display-two position-relative cus-z1 fw_900 text-capitalize n4-clr mb-xxl-4 mb-3 title">
                                        <span class="fw_900 text-capitalize d-flex align-items-center gap-xxl-4 gap-3">
                                            <?php if (!empty($settings['title1'])) :   ?>
                                                <?php echo esc_html($settings['title1']) ?>
                                            <?php endif ?>
                                            <span class="act4-clr fw_800 start-icontext">
                                                <svg width="50" height="50" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M33.3333 0H26.6667V21.9526L11.1438 6.42978L6.42977 11.1438L21.9526 26.6667H0V33.3333H21.9526L6.42978 48.8562L11.1438 53.5702L26.6667 38.0474V60H33.3333V38.0474L48.8562 53.5702L53.5702 48.8562L38.0474 33.3333H60V26.6667H38.0474L53.5702 11.1438L48.8562 6.42977L33.3333 21.9526V0Z" fill="#FF650E" />
                                                </svg>
                                            </span>
                                        </span>
                                        <?php if (!empty($settings['title2'])) :   ?>
                                            <span class="fw_900 text-capitalize d-block"><?php echo esc_html($settings['title2']) ?>c</span>
                                        <?php endif ?>
                                        <span class="d-flex nw1-clr fw_900 text-capitalize align-items-center gap-3" data-aos="zoom-in-left" data-aos-duration="2400">
                                            <?php if (!empty($settings['title3'])) :   ?>
                                                <?php echo esc_html($settings['title3']) ?>
                                            <?php endif ?>
                                        </span>
                                    </div>
                                    <?php if (!empty($settings['description'])) :   ?>
                                        <p class="n3-clr fs20 max-520 mb-xxl-10 mb-lg-8 mb-5 description" data-aos="fade-down-right" data-aos-duration="1500">
                                            <?php echo esc_html($settings['description']) ?>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings['buttontext'])) :   ?>
                                        <div class="cus-z1 position-relative w-100">
                                            <a href="<?php echo esc_url($settings['buttonlink']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
                                                <span class="kew-text n4-clr act3-bg">
                                                    <?php echo esc_html($settings['buttontext']) ?>
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
                                </div>
                                <?php if (!empty($settings['reborn1'] == 'yes')) :   ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/arrow-ex.png" alt="img" class="arrow-exv9">
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-3">
                            <?php if (!empty($settings['image']['url'])) :   ?>
                                <div class="banner-thumbv9">
                                    <img src="<?php echo esc_url($settings['image']['url']) ?>" alt="img">
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="banner-v9-countreview">
                                <div class="review-v8 pt-xxl-20 mt-lg-10 mt-6 d-flex align-items-center">
                                    <div class="d-flex align-items-center gap-xxl-10 gap-xl-6 gap-lg-3 gap-3">
                                        <svg width="66" height="16" viewBox="0 0 66 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M65.7071 8.7071C66.0976 8.31658 66.0976 7.68341 65.7071 7.29289L59.3431 0.928927C58.9526 0.538403 58.3195 0.538403 57.9289 0.928927C57.5384 1.31945 57.5384 1.95262 57.9289 2.34314L63.5858 7.99999L57.9289 13.6568C57.5384 14.0474 57.5384 14.6805 57.9289 15.0711C58.3195 15.4616 58.9526 15.4616 59.3431 15.0711L65.7071 8.7071ZM8.74228e-08 9L65 8.99999L65 6.99999L-8.74228e-08 7L8.74228e-08 9Z" fill="black" />
                                        </svg>
                                        <?php if (!empty($settings['numbertext'])) :   ?>
                                            <span class="display-three fw_800 n4-clr">
                                                <?php echo esc_html($settings['numbertext']) ?>
                                            </span>
                                        <?php endif ?>
                                    </div>
                                    <div class="review-star">
                                        <ul class="ratting d-flex align-items-center gap-1 mb-xxl-1 mb-1 list-unstyled">
                                            <?php if (!empty($settings['rating'])) :   ?>
                                                <?php echo wp_kses($settings['rating'], wp_kses_allowed_html('post'))  ?>
                                            <?php endif ?>
                                        </ul>
                                        <?php if (!empty($settings['ratingtext'])) :   ?>
                                            <span class="n4-clr fw_600 fs20 d-block">
                                                <?php echo esc_html($settings['ratingtext']) ?>
                                            </span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="bn1-odometer d-flex align-items-center">
                                    <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                        <div class="cont d-flex align-items-center">
                                            <?php if (!empty($settings['number1'])) :   ?>
                                                <?php echo wp_kses($settings['number1'], wp_kses_allowed_html('post'))  ?>
                                            <?php endif ?>
                                        </div>
                                        <?php if (!empty($settings['text1'])) :   ?>
                                            <p class="n4-clr"><?php echo esc_html($settings['text1']) ?></p>
                                        <?php endif ?>
                                    </div>
                                    <div class="odometer__items" data-aos="zoom-in-up" data-aos-duration="1000">
                                        <div class="cont d-flex align-items-center">
                                            <span class="odometer display-four n4-clr fw_800">
                                                <?php if (!empty($settings['number2'])) :   ?>
                                                    <?php echo esc_html($settings['number2']) ?>
                                                <?php endif ?>
                                            </span>
                                        </div>
                                        <?php if (!empty($settings['text2'])) :   ?>
                                            <p><?php echo esc_html($settings['text2']) ?></p>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Content -->
        </section>






<?php
    }
} ?>