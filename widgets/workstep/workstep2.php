<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;



defined('ABSPATH') || die();

class ReacTheme_Elementor_Workstep2_Widget extends \Elementor\Widget_Base
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
        return 'rt-workstep2';
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
        return __('SV Workstep Two', 'rtelements');
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
            'title',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('How it Works', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'contentall',
            [
                'label' => esc_html__('Content Area', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,

            ]
        );

        $this->add_control(
            'videoimage',
            [
                'label' => esc_html__('Video Thumb Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'videolink',
            [
                'label' => esc_html__('Video Link', 'plugin-name'),
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
            'rebornimage',
            [
                'label' => esc_html__('Reborn Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'imagetwo',
            [
                'label' => esc_html__('Image Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'imagethree',
            [
                'label' => esc_html__('Image Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'imagelink',
            [
                'label' => esc_html__('Image Link', 'plugin-name'),
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
            'scrolltext',
            [
                'label' => esc_html__('Scrool Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Scroll', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'scroollink',
            [
                'label' => esc_html__('Scroll Link', 'plugin-name'),
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


        // ==============================Style================================//

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
                'name'     => 'subtitlestyle_typ',
                'selector' => '{{WRAPPER}} span.fs20.fw_700.n4-clr.d-block.mb-xl-4.mb-lg-3.mb-2',
        
            ]
        );
        
        $this->add_control(
            'subtitlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fs20.fw_700.n4-clr.d-block.mb-xl-4.mb-lg-3.mb-2' => 'color: {{VALUE}} !important;',
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
                'name'     => 'titlestyle_typ',
                'selector' => '{{WRAPPER}} a.fs-four.act4-clr',
        
            ]
        );
        
        $this->add_control(
            'titlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.fs-four.act4-clr' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} i.ti.ti-arrow-right.fs-four.act4-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'videothumb',
             [
                'label' => esc_html__('Video Thumb', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_responsive_control(
            'videothumb_height',
            [
                'label'       => esc_html__( 'Height', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .howit-video.position-relative img ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'videothumb_width',
            [
                'label'       => esc_html__( 'Width', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .howit-video.position-relative img ' => 'width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'videothumb_border_radius',
            [
                'label'      => __('Border Radius', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .howit-video.position-relative img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
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
            'scrollstyle_color_background',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nexdraw-wrapperv9 .scroll-bn1' => 'background: {{VALUE}} !important',
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

        <section class="banner-section-v9   position-relative">
            <!-- Next Draw wrap -->
            <div class="nexdraw-wrapperv9 py-xxl-15 py-xl-12 py-11 position-relative">
                <div class="container">
                    <div class="nextdraw-innerwrapv9 gap-4">
                        <?php if (!empty($settings['videoimage']['url'])) :   ?>
                            <div class="howit-video position-relative">
                                <img src="<?php echo esc_url($settings['videoimage']['url']) ?>" alt="img">
                                <a href="<?php echo esc_url($settings['videolink']['url']) ?>" class="bn-vid popup-video">
                                    <i class="ti ti-player-play-filled p1-clr fs-five"></i>
                                </a>
                            </div>
                        <?php endif ?>
                        <div class="howit-nexdrawv9 text-center position-relative">
                            <span class="fs20 fw_700 n4-clr d-block mb-xl-4 mb-lg-3 mb-2">
                                <?php if (!empty($settings['title'])) :   ?>
                                    <?php echo esc_html($settings['title']) ?>
                                <?php endif ?>
                            </span>
                            <ul class="entry-win d-flex justify-content-center align-items-center gap-3 list-unstyled">
                                <?php if (!empty($settings['contentall'])) :   ?>
                                    <?php echo wp_kses($settings['contentall'], wp_kses_allowed_html('post'))  ?>
                                <?php endif ?>
                            </ul>
                            <?php if (!empty($settings['rebornimage']['url'])) :   ?>
                                <img src="<?php echo esc_url($settings['rebornimage']['url']) ?>" alt="img" class="next-arrowv9">
                            <?php endif ?>
                        </div>
                        <div class="watch-live-wrap">
                            <?php if (!empty($settings['imagetwo']['url'])) :   ?>
                                <div class="watch-thumb cmn-width">
                                    <img src="<?php echo esc_url($settings['imagetwo']['url']) ?>" alt="img" class="radius-circle">
                                </div>
                            <?php endif ?>
                            <?php if (!empty($settings['imagethree']['url'])) :   ?>
                                <a href="<?php echo esc_url($settings['imagelink']['url']) ?>" class="draw-watch cmn-width d-flex align-items-center justify-content-center position-relative">
                                    <img src="<?php echo esc_url($settings['imagethree']['url']) ?>" alt="img" class="radius-circle">
                                    <span class="ex-text fs20 fw_700 nw1-clr">
                                        Explore
                                    </span>
                                </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <!--Scroll Top -->
                <?php if (!empty($settings['scrolltext'])) :   ?>
                    <a href="<?php echo esc_url($settings['scroollink']['url']) ?>" class="scroll-bn1 act3-bg radius100 d-flex justify-content-center align-items-center justify-content-center">
                        <span class="d-grid gap-xxl-5 gap-xl-4 gap-3 justify-content-center text-center m-auto">
                            <span class="n4-clr fs18 d-block fw_600">
                                <?php echo esc_html($settings['scrolltext']) ?>
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
            </div>
            <!--Next Draw wrap -->

        </section>










<?php
    }
} ?>