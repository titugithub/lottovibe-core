<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Bannercloth_Widget extends \Elementor\Widget_Base
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
        return 'rt-bannercloth';
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
        return __('SV Banner Cloth', 'rtelements');
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
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Glamour in Every Draw', 'your-plugin'),
                'dynamic' => ['active' => true],
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

        $this->add_control(
            'iconlink',
            [
                'label' => esc_html__('Icon Link', 'plugin-name'),
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

        // Subtitle (with multiple lines)
        $this->add_control(
            'subtitle_line1',
            [
                'label' => __('Subtitle Line 1', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __(' Play for', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'subtitle_line2',
            [
                'label' => __('Subtitle Line 2', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __(' NFT', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'subtitle_line3',
            [
                'label' => __('Subtitle Line 3', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Glory and Digital ', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'subtitle_line4',
            [
                'label' => __('Subtitle Line 4', 'your-plugin'),
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
                'default' => __('Discover NFTs by category  track the latest drops and follow the collections you love Enjoy it', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Button Text
        $this->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('How It’s Works', 'your-plugin'),
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



        // Start Now Button Text
        $this->add_control(
            'start_now_text',
            [
                'label' => __('How Its Works Button Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('How Its Works', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Start Now Button Link
        $this->add_control(
            'start_now_link',
            [
                'label' => __('How Its Works Button Link', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );



        // Scroll Button Text
        $this->add_control(
            'circle_text',
            [
                'label' => __('Circle Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Circle', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );


        // Scroll Button Text
        $this->add_control(
            'scroll_textt',
            [
                'label' => __('Scroll Text', 'your-plugin'),
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



        $this->add_control(
            'customer',
            [
                'label' => esc_html__('Customers Contents', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
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
                'name'     => 'subtitflestyle_typ',
                'selector' => '{{WRAPPER}} a.fs-four.act4-clr',

            ]
        );

        $this->add_control(
            'subtitlestyle_color',
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
                'selector' => '{{WRAPPER}} .display-three.position-relative.cus-z1.fw_800.text-capitalize.n4-clr.mb-xxl-5.mb-3 span',

            ]
        );

        $this->add_control(
            'titlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .display-three.position-relative.cus-z1.fw_800.text-capitalize.n4-clr.mb-xxl-5.mb-3 span' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} span.fw_800.real-underline.act4-clr.d-block.position-relative ' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'titlestyle_color2',
            [
                'label'     => esc_html__('Color Two', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_800.real-underline.act4-clr.d-block.position-relative ' => 'color: {{VALUE}} !important;',
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
                'name'     => 'descriptionstyle_typ',
                'selector' => '{{WRAPPER}} p.n3-clr.fs18.max-520.mb-xxl-10.mb-lg-8.mb-5.aos-init.aos-animate',

            ]
        );

        $this->add_control(
            'descriptionstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.n3-clr.fs18.max-520.mb-xxl-10.mb-lg-8.mb-5.aos-init.aos-animate' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'descriptionstyle_margin',
            [
                'label' => esc_html__('Margin', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} p.n3-clr.fs18.max-520.mb-xxl-10.mb-lg-8.mb-5.aos-init.aos-animate' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
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
                    '{{WRAPPER}} p.n3-clr.fs18.max-520.mb-xxl-10.mb-lg-8.mb-5.aos-init.aos-animate' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
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
                'label' => esc_html__('Color', 'plugin-name'),
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
                'label' => esc_html__('Background', 'plugin-name'),
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


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btrnn_typography',
                'selector' => '{{WRAPPER}} .a.how-cont.act3-texthover.n4-clr.fw_700.aos-init.aos-animate',
            ]
        );

        $this->add_control(
            'buttontwostyle_color',
            [
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.how-cont.act3-texthover.n4-clr.fw_700.aos-init.aos-animate' => 'color: {{VALUE}} !important',
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



        $this->add_control(
            'userstyle_colo1r',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cont.d-flex.align-items-center span' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'userstyle_color2',
            [
                'label'     => esc_html__('Color Two', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.mt-xxl-2.mt-1.n3-clr.fs18' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} p.n3-clr.n3-fixed' => 'color: {{VALUE}} !important;',
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
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.n4-clr.scroll-text.d-block.fw_600' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .scroll-iconrarea svg path' => 'fill: {{VALUE}} !important',
                ],
            ]
        );


        $this->add_control(
            'scrollstyle_colorb',
            [
                'label' => esc_html__('Background', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.scroll-circle.m-auto.act3-bg.radius100.d-flex.justify-content-center.align-items-center.justify-content-center' => 'background: {{VALUE}} !important',
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
                'label' => esc_html__('Image One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'imageone_height',
            [
                'label'       => esc_html__('Height', 'plugin-name'),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-v15-wrap-left .thumb img' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imageone_width',
            [
                'label'       => esc_html__('Width', 'plugin-name'),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .banner-v15-wrap-left .thumb img' => 'width: {{VALUE}}px;',
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
                    '{{WRAPPER}} .banner-v15-wrap-left .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );

        $this->add_control(
            'more_options2',
            [
                'label' => esc_html__('Image Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_responsive_control(
            'imagetwo_height',
            [
                'label'       => esc_html__('Height', 'plugin-name'),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .thumb.mb-xxl-9.mb-xl-6.mb-4 img' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagetwo_width',
            [
                'label'       => esc_html__('Width', 'plugin-name'),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .thumb.mb-xxl-9.mb-xl-6.mb-4 img' => 'width: {{VALUE}}px;',
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
                    '{{WRAPPER}} .thumb.mb-xxl-9.mb-xl-6.mb-4 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'circlee',
            [
                'label' => esc_html__('Circle', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );



       $this->add_control(
           'circlestyle_color',
           [
               'label' => esc_html__( 'Icon Background', 'plugin-name' ),
               'type' => \Elementor\Controls_Manager::COLOR,
               'selectors' => [
                   '{{WRAPPER}} .banner-v15-wrap-left .banner-textanimation .icon-explore .icon' => 'background: {{VALUE}} !important',
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
            const texts = document.querySelectorAll(".text, .text2");
            texts.forEach(text => {
                if (text) {
                    text.innerHTML = text.innerText
                        .split("")
                        .map(
                            (char, i) => `<span style="display:inline-block; transform:rotate(${i * 14}deg)">${char}</span>`
                        )
                        .join("");
                } else {
                    console.log("print");
                }
            });
        </script>

        


        <div class="banner-section-v15 pt-70-fixed position-relative overflow-hidden">
            <!--Banner Content -->
            <div class="banner-v15wraper mt-lg-7 pb-15 pt-xxl-6">
                <div class="container">
                    <div class="row align-items-lg-center justify-content-lg-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="banner-v15-wrap-left position-relative d-grid justify-content-center" data-aos="zoom-in-up" data-aos-duration="1600">
                                <!--Text Animation -->
                                <div class="banner-textanimation">
                                    <div class="textcircle2">
                                        <div class="text2">
                                            <p>
                                                <?php if (!empty($settings['circle_text'])) :   ?>
                                                    <?php echo wp_kses($settings['circle_text'], wp_kses_allowed_html('post'))  ?>
                                                <?php endif ?>
                                            </p>
                                        </div>
                                    </div>
                                    <a href="#0" class="icon-explore">
                                        <span class="icon">
                                            <i class="ph-bold ph-arrow-up-right n4-clr"></i>
                                        </span>
                                    </a>
                                </div>
                                <!--Text Animation -->
                                <?php if (!empty($settings['banner_image']['url'])) :   ?>
                                    <div class="thumb">
                                        <img src="<?php echo $settings['banner_image']['url'] ?>" alt="img">
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-8">
                            <div class="banner-content-v15 pt-xxl-20 pt-12 mt-xl-6 mt-md-6 mt-0 position-relative">
                                <div class="d-flex mb-sm-4 mb-4 align-items-center gap-xxl-8 gap-lg-6 gap-4 flex-wrap">
                                    <ul class="entry-win d-flex align-items-center gap-3 list-unstyled">
                                        <?php if (!empty($settings['title'])) :   ?>
                                            <?php echo wp_kses($settings['title'], wp_kses_allowed_html('post'))  ?>
                                        <?php endif ?>
                                    </ul>
                                    <?php if (!empty($settings['iconshow'] == 'yes')) :   ?>
                                        <a href="<?php echo $settings['iconlink']['url'] ?>" class="custom-bigarrow">
                                            <span class="icon">
                                                <svg width="137" height="16" viewBox="0 0 137 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M136.707 8.70712C137.098 8.31659 137.098 7.68343 136.707 7.29291L130.343 0.928944C129.953 0.538419 129.319 0.538419 128.929 0.928943C128.538 1.31947 128.538 1.95263 128.929 2.34316L134.586 8.00001L128.929 13.6569C128.538 14.0474 128.538 14.6806 128.929 15.0711C129.319 15.4616 129.953 15.4616 130.343 15.0711L136.707 8.70712ZM-8.74228e-08 9L136 9.00001L136 7.00001L8.74228e-08 7L-8.74228e-08 9Z" fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    <?php endif ?>
                                </div>
                                <div class="bn-content-box">
                                    <div class="display-three position-relative cus-z1 fw_800 text-capitalize n4-clr mb-xxl-5 mb-3">
                                        <span class="fw_800 text-capitalize d-flex align-items-center flex-wrap gap-xxl-4 gap-sm-0">
                                            <?php if (!empty($settings['subtitle_line1'])) :   ?>
                                                <?php echo esc_html($settings['subtitle_line1']) ?>
                                            <?php endif ?>
                                            <span>
                                                <?php if (!empty($settings['subtitle_line2'])) :   ?>
                                                    <?php echo esc_html($settings['subtitle_line2']) ?>
                                                <?php endif ?>
                                            </span>
                                        </span>
                                        <span class="d-flex text-capitalize align-items-center n4-clr gap-3 text-uppercase" data-aos="zoom-in-up" data-aos-duration="2200">
                                            <span>
                                                <?php if (!empty($settings['subtitle_line3'])) :   ?>
                                                    <?php echo esc_html($settings['subtitle_line3']) ?>
                                                <?php endif ?>
                                            </span>
                                            <span class="fw_800 real-underline act4-clr d-block position-relative">
                                                <?php if (!empty($settings['subtitle_line4'])) :   ?>
                                                    <?php echo esc_html($settings['subtitle_line4']) ?>
                                                <?php endif ?>
                                            </span>
                                        </span>
                                    </div>
                                    <?php if (!empty($settings['description'])) :   ?>
                                        <p class="n3-clr fs18 max-520 mb-xxl-10 mb-lg-8 mb-5" data-aos="fade-down-right" data-aos-duration="1500">
                                            <?php echo esc_html($settings['description']) ?>
                                        </p>
                                    <?php endif ?>

                                    <div class="d-flex flex-wrap cus-z1 position-relative flex-md-nowrap align-items-center gap-xl-8 gap-3 flex-wrap w-100">
                                        <?php if (!empty($settings['button_text'])) :   ?>
                                            <a href="<?php echo $settings['button_link']['url'] ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
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
                                        <?php endif ?>
                                        <?php if (!empty($settings['start_now_text'])) :   ?>
                                            <a href="<?php echo $settings['start_now_link']['url'] ?>" class="how-cont act3-texthover n4-clr fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                                <?php echo esc_html($settings['start_now_text']) ?>
                                            </a>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <!--Scroll Top -->
                                <?php if (!empty($settings['scroll_textt'])) :   ?>
                                    <div class="d-flex d-none d-lg-block justify-content-xxl-end justify-content-center">
                                        <div class="scroll-custom-v15  pe-20 pt-120 mt-20">
                                            <a href="<?php echo $settings['scroll_link']['url'] ?>" class="scroll-circle m-auto act3-bg radius100 d-flex justify-content-center align-items-center justify-content-center">
                                                <span class="d-grid gap-xxl-3 gap-xl-3 gap-sm-2 gap-2 justify-content-center text-center m-auto">
                                                    <span class="n4-clr scroll-text d-block fw_600">
                                                        <?php echo esc_html($settings['scroll_textt']) ?>
                                                    </span>
                                                    <span class="scroll-iconrarea">
                                                        <svg width="16" height="27" viewBox="0 0 16 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.29289 26.7071C7.68342 27.0976 8.31658 27.0976 8.70711 26.7071L15.0711 20.3431C15.4616 19.9526 15.4616 19.3195 15.0711 18.9289C14.6805 18.5384 14.0474 18.5384 13.6569 18.9289L8 24.5858L2.34315 18.9289C1.95262 18.5384 1.31946 18.5384 0.928933 18.9289C0.538409 19.3195 0.538409 19.9526 0.928933 20.3431L7.29289 26.7071ZM7 4.37114e-08L7 26L9 26L9 -4.37114e-08L7 4.37114e-08Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <!--Scroll Top -->
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-2">
                            <div class="banner-v15-wrap-right position-relative" data-aos="zoom-in" data-aos-duration="2000">
                                <?php if (!empty($settings['small_banner_image']['url'])) :   ?>
                                    <div class="thumb mb-xxl-9 mb-xl-6 mb-4">
                                        <img src="<?php echo esc_url($settings['small_banner_image']['url']) ?>" alt="img">
                                    </div>
                                <?php endif ?>
                                <div class="bn1-odometer pt-0 m-auto text-center">
                                    <?php if (!empty($settings['customer'])) :   ?>
                                        <?php echo wp_kses($settings['customer'], wp_kses_allowed_html('post'))  ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (!empty($settings['scroll_textt'])) :   ?>
                    <div class="d-flex scroll-custom-v15 d-lg-none d-block justify-content-xxl-center justify-content-center mt-md-2 mt-11">
                        <a href="<?php echo $settings['scroll_link']['url'] ?>" class="scroll-circle act3-bg radius100 d-flex justify-content-center align-items-center justify-content-center">
                            <span class="d-grid gap-xxl-3 gap-xl-3 gap-sm-2 gap-2 justify-content-center text-center m-auto">
                                <span class="n4-clr scroll-text d-block fw_600">
                                    <?php echo esc_html($settings['scroll_textt']) ?>
                                </span>
                                <span class="scroll-iconrarea">
                                    <svg width="16" height="27" viewBox="0 0 16 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.29289 26.7071C7.68342 27.0976 8.31658 27.0976 8.70711 26.7071L15.0711 20.3431C15.4616 19.9526 15.4616 19.3195 15.0711 18.9289C14.6805 18.5384 14.0474 18.5384 13.6569 18.9289L8 24.5858L2.34315 18.9289C1.95262 18.5384 1.31946 18.5384 0.928933 18.9289C0.538409 19.3195 0.538409 19.9526 0.928933 20.3431L7.29289 26.7071ZM7 4.37114e-08L7 26L9 26L9 -4.37114e-08L7 4.37114e-08Z" fill="black" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>

                <?php endif ?>

            </div>
            <!--Banner Content -->
        </div>








<?php
    }
} ?>