<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Bannergame_Widget extends \Elementor\Widget_Base
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
        return 'rt-bannergame';
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
        return __('SV Banner Game', 'rtelements');
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
                'rows' => 10,
                'dynamic' => ['active' => true],
            ]
        );



        // Subtitle (with multiple lines)
        $this->add_control(
            'subtitle_line1',
            [
                'label' => __('Subtitle Line 1', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Winning with', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'subtitle_line2',
            [
                'label' => __('Subtitle Line 2', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __(' Game Key', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        $this->add_control(
            'subtitle_line3',
            [
                'label' => __('Subtitle Line 3', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __(' Competitions ', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );



        // Button Text
        $this->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Participant Now', 'your-plugin'),
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


        $this->add_control(
            'reborn1',
            [
                'label' => esc_html__('Reborn One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );

        $this->add_control(
            'reborn2',
            [
                'label' => esc_html__('Reborn Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );


        // Start Now Button Text
        $this->add_control(
            'how_its_work_text',
            [
                'label' => __('How Its Works Button Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('How Its Works', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );

        // Start Now Button Link
        $this->add_control(
            'how_its_work_link',
            [
                'label' => __('How Its Works Button Link', 'your-plugin'),
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
                'label' => esc_html__('User Text One ', 'plugin-name'),
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
                'default' => esc_html__('Treasures', 'plugin-name'),
                'label_block' => true,
            ]
        );



        // Scroll Button Text
        $this->add_control(
            'circle_text',
            [
                'label' => __('Circle Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Scroll', 'your-plugin'),
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


        $this->add_control(
            'artwork',
            [
                'label' => esc_html__('Artwork Contents', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $this->add_control(
            'Owner',
            [
                'label' => esc_html__('Owner Contents', 'plugin-name'),
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
                'name'     => 'subtitlestyle_typ',
                'selector' => '{{WRAPPER}} a.fs-four.act3-clr',

            ]
        );

        $this->add_control(
            'subtitlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.fs-four.act3-clr' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} i.ti.ti-arrow-right.fs-four.act3-clr' => 'color: {{VALUE}} !important;',
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
                'selector' => '{{WRAPPER}} .title span',
                'selector' => '{{WRAPPER}} .title',

            ]
        );

        $this->add_control(
            'titlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title span' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .title ' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'titlestyle_color2',
            [
                'label'     => esc_html__('Color Two', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_900.act4-clr.d-block.position-relative' => 'color: {{VALUE}} !important;',
                   
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
                'selector' => '{{WRAPPER}} .description',

            ]
        );

        $this->add_control(
            'descriptionstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .description' => 'color: {{VALUE}} !important;',
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
                    '{{WRAPPER}} .description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
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
                    '{{WRAPPER}} .description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
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
                'selector' => '{{WRAPPER}} a.how-cont.act3-texthover.nw1-clr.fw_700.aos-init.aos-animate',
            ]
        );

        $this->add_control(
            'buttontwostyle_color',
            [
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.how-cont.act3-texthover.nw1-clr.fw_700.aos-init.aos-animate' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'buttontwostyle_colorh',
            [
                'label' => esc_html__('HoverColor', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.how-cont.act3-texthover.nw1-clr.fw_700.aos-init.aos-animate:hover' => 'color: {{VALUE}} !important',
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
                'name'     => 'userstyle_typ',
                'selector' => '{{WRAPPER}} span.active-userv17.fs18.fw_500.text-capitalize.position-relative',

            ]
        );

        $this->add_control(
            'userstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.active-userv17.fs18.fw_500.text-capitalize.position-relative' => 'color: {{VALUE}} !important;',
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
                'label' => esc_html__('Image ', 'plugin-name'),
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
                    '{{WRAPPER}} .trophyv17-thumb img ' => 'height: {{VALUE}}px;',
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
                    '{{WRAPPER}} .trophyv17-thumb img ' => 'width: {{VALUE}}px;',
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
                    '{{WRAPPER}} .trophyv17-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );

     



        $this->end_controls_section();


 

        $this->start_controls_section(
            'counterstyle',
            [
                'label' => esc_html__('Counter', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'more_optiofdfns',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'numbet_typ',
                'selector' => '{{WRAPPER}} .odometer-inside span',

            ]
        );

        $this->add_control(
            'numbet_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .odometer-inside span' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} span.plus__icon.display-four.nw1-clr.fw_800' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'more_optiofdfffns',
            [
                'label' => esc_html__('Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'counter_text_typ',
                'selector' => '{{WRAPPER}} p.nw2-clr',

            ]
        );

        $this->add_control(
            'counter_text_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.nw2-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'circlestyle',
            [
                'label' => esc_html__('Circle', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );




        $this->add_control(
            'circlestyle_color',
            [
                'label' => esc_html__( 'Icon Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-v16-wrap-customright .banner-textanimation .icon-explore .icon' => 'background: {{VALUE}} !important',
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





        <div class="banner-section-v17 pt-70-fixed  position-relative overflow-hidden">
            <!--Banner Content -->
            <div class="banner-v17wraper pt-xxl-3">
                <div class="container">
                    <div class="row align-items-lg-center justify-content-lg-center">
                        <div class="col-xl-9 col-lg-10 col-md-12">
                            <div class="banner-content-v17 pt-xxl-20 pt-12 mt-xl-6 mt-md-6 mt-0 position-relative">
                                <ul class="entry-win d-flex align-items-center justify-content-center gap-md-3 gap-0 mb-xxl-5 mb-xl-3 mb-3 list-unstyled">
                                    <?php if (!empty($settings['title'])) :   ?>
                                        <?php echo wp_kses($settings['title'], wp_kses_allowed_html('post'))  ?>
                                    <?php endif ?>

                                </ul>
                                <div class="bn-content-box pb-sm-0 pb-3">
                                    <div class="display-three text-center position-relative cus-z1 fw_900 text-capitalize n0-clr mb-xxl-9 mb-xl-8 mb-6 title">
                                        <span class="d-flex flex-wrap text-capitalize align-items-center justify-content-center n4-clr gap-lg-3 gap-0 text-uppercase" data-aos="zoom-in-up" data-aos-duration="2200">
                                            <?php if (!empty($settings['subtitle_line1'])) :   ?>
                                                <?php echo esc_html($settings['subtitle_line1']) ?>
                                            <?php endif ?>
                                            <span class="fw_900 act4-clr d-block position-relative">
                                                <?php if (!empty($settings['subtitle_line2'])) :   ?>
                                                    <?php echo esc_html($settings['subtitle_line2']) ?>
                                                <?php endif ?>
                                                <span class="game-line">
                                                    <svg width="331" height="10" viewBox="0 0 331 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.536602 3.97754C52.5414 1.06265 191.313 -1.97255 330.36 9.20575" stroke="#FF650E" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="fw_900 text-capitalize">
                                            <?php if (!empty($settings['subtitle_line3'])) :   ?>
                                                <?php echo esc_html($settings['subtitle_line3']) ?>
                                            <?php endif ?>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-wrap text-center flex-md-nowrap align-items-center justify-content-center gap-xl-8 gap-3 cus-z1 position-relative w-100 mb-xxl-15 mb-xl-10 mb-lg-9 mb-md-10 mb-sm-8 mb-6">
                                        <?php if (!empty($settings['button_text'])) :   ?>
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
                                        <?php endif ?>
                                        <?php if (!empty($settings['how_its_work_text'])) :   ?>
                                            <a href="<?php echo esc_url($settings['how_its_work_link']['url']) ?>" class="how-cont act3-texthover nw1-clr fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                                <?php echo esc_html($settings['how_its_work_text']) ?>
                                            </a>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <?php if (!empty($settings['reborn2']['url'])) :   ?>
                                    <img src="<?php echo esc_url($settings['reborn2']['url']) ?>" alt="img" class="banner-arrowv17">
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <div class="bannerv17-trophy-wrap position-relative">
                        <div class="banner-content-v1customer">
                            <ul class="customer-reviewv17 act3-border radius100 py-xxl-2 py-2 px-2 mb-xxl-6 mb-lg-4 mb-3 list-unstyled">
                                <?php if (!empty($settings['userimage1']['url'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item act3-bg d-flex align-items-center justify-content-center">
                                            <img src="<?php echo esc_url($settings['userimage1']['url']) ?>" alt="img">
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings['userimage2']['url'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item act3-bg d-flex align-items-center justify-content-center">
                                            <img src="<?php echo esc_url($settings['userimage2']['url']) ?>" alt="img">
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings['userimage3']['url'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item act3-bg d-flex align-items-center justify-content-center">
                                            <img src="<?php echo esc_url($settings['userimage3']['url']) ?>" alt="img">
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings['usertext1'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <span class="d-grid customer-ratting text-center p-2 p1-bg align-items-center justify-content-center">
                                                <span class="d-block fs20 fw_700 n4-clr">
                                                    <?php echo esc_html($settings['usertext1']) ?>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                            <span class="active-userv17 fs18 fw_500 text-capitalize position-relative">
                                <?php if (!empty($settings['usertext2'])) :   ?>
                                    <?php echo esc_html($settings['usertext2']) ?>
                                <?php endif ?>
                            </span>
                        </div>
                        <div class="trophyv17-thumb" data-aos="zoom-in-up" data-aos-duration="2200">
                            <?php if (!empty($settings['banner_image']['url'])) :   ?>
                                <img src="<?php echo esc_url($settings['banner_image']['url']) ?>" alt="img">
                            <?php endif ?>
                        </div>
                        <div class="bn1-odometer pt-0 d-grid align-items-center gap-xxl-10 gap-sm-8 gap-4">
                            <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">

                                <?php if (!empty($settings['customer'])) :   ?>
                                    <?php echo wp_kses($settings['customer'], wp_kses_allowed_html('post'))  ?>
                                <?php endif ?>
                            </div>
                            <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                <?php if (!empty($settings['artwork'])) :   ?>
                                    <?php echo wp_kses($settings['artwork'], wp_kses_allowed_html('post'))  ?>
                                <?php endif ?>
                            </div>
                            <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                <?php if (!empty($settings['Owner'])) :   ?>
                                    <?php echo wp_kses($settings['Owner'], wp_kses_allowed_html('post'))  ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-v15-wrap-left banner-v16-wrap-customright" data-aos="zoom-in-up" data-aos-duration="1600">
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
                </div>
            </div>
            <!--Banner Content -->

            <!--mouse animation -->
            <div class="mouse-animation">
                <div class="m-aniline">
                    <svg width="2" height="239" viewBox="0 0 2 239" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="-4.37114e-08" x2="1.00001" y2="239" stroke="url(#paint0_linear_8113_8275)" stroke-width="2" />
                        <defs>
                            <linearGradient id="paint0_linear_8113_8275" x1="1.43051e-05" y1="239" x2="-3.02045e-05" y2="-2.84524" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#FF650E" stop-opacity="0" />
                                <stop offset="0.989583" stop-color="#FF650E" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="m-ani">
                    <svg width="34" height="48" viewBox="0 0 34 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 47.625C21.4755 47.625 25.7677 45.8471 28.9324 42.6824C32.0971 39.5177 33.875 35.2255 33.875 30.75V17.25C33.875 12.7745 32.0971 8.48225 28.9324 5.31757C25.7677 2.1529 21.4755 0.375 17 0.375C12.5245 0.375 8.23225 2.1529 5.06757 5.31757C1.9029 8.48225 0.125 12.7745 0.125 17.25V30.75C0.125 35.2255 1.9029 39.5177 5.06757 42.6824C8.23225 45.8471 12.5245 47.625 17 47.625ZM3.5 17.25C3.5 13.6696 4.92232 10.2358 7.45406 7.70406C9.9858 5.17232 13.4196 3.75 17 3.75C20.5804 3.75 24.0142 5.17232 26.5459 7.70406C29.0777 10.2358 30.5 13.6696 30.5 17.25V30.75C30.5 34.3304 29.0777 37.7642 26.5459 40.2959C24.0142 42.8277 20.5804 44.25 17 44.25C13.4196 44.25 9.9858 42.8277 7.45406 40.2959C4.92232 37.7642 3.5 34.3304 3.5 30.75V17.25Z" fill="#FF650E" />
                        <path d="M17 23.25C17.4476 23.25 17.8768 23.0722 18.1932 22.7557C18.5097 22.4393 18.6875 22.0101 18.6875 21.5625V14.8125C18.6875 14.3649 18.5097 13.9357 18.1932 13.6193C17.8768 13.3028 17.4476 13.125 17 13.125C16.5524 13.125 16.1232 13.3028 15.8068 13.6193C15.4903 13.9357 15.3125 14.3649 15.3125 14.8125V21.5625C15.3125 22.0101 15.4903 22.4393 15.8068 22.7557C16.1232 23.0722 16.5524 23.25 17 23.25Z" fill="#FF650E" />
                    </svg>
                </div>
            </div>
            <!--mouse animation -->

            <!--Other Shape -->
            <?php if (!empty($settings['reborn1']['url'])) :   ?>
                <img src="<?php echo esc_url($settings['reborn1']['url']) ?>" alt="img" class="call-sunv17">
            <?php endif ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/bannerv17-left-shape.png" alt="img" class="bannerv17-shape">
            <!--Other Shape -->
        </div>








<?php
    }
} ?>