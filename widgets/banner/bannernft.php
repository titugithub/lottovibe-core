<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Bannernft_Widget extends \Elementor\Widget_Base
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
        return 'rt-bannernft';
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
        return __('SV Banner NFT', 'rtelements');
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

        $this->add_control(
            'bannertext',
            [
                'label' => esc_html__('Banner Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__(' Embark on a journey into the realm of NFT glory and digital triumphs!', 'plugin-name'),
                'label_block' => true,
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
                'label' => __('Circle Text', 'your-plugin'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Scroll', 'your-plugin'),
                'dynamic' => ['active' => true],
            ]
        );


        // Scroll Button Text
        $this->add_control(
            'scroll_textt',
            [
                'label' => __('Circle Text', 'your-plugin'),
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
                'selector' => '{{WRAPPER}} h4.n4-clr.mb-xxl-4.mb-3.subtitle',

            ]
        );

        $this->add_control(
            'subtitlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .subtitle' => 'color: {{VALUE}} !important;',
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

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'userstyle_typ',
                'selector' => '{{WRAPPER}} span.d-flex.align-items-center.gap-2.d-block.fw_700.text-uppercase.mt-xxl-3.mt-2',

            ]
        );

        $this->add_control(
            'userstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.d-flex.align-items-center.gap-2.d-block.fw_700.text-uppercase.mt-xxl-3.mt-2' => 'color: {{VALUE}} !important;',
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
                    '{{WRAPPER}} span.n4-clr.fs18.d-block.fw_600' => 'color: {{VALUE}} !important',
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
                    '{{WRAPPER}} .thumb.mb-xxl-15.mb-xl-9.mb-lg-6.mb-4 img ' => 'height: {{VALUE}}px;',
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
                    '{{WRAPPER}} .thumb.mb-xxl-15.mb-xl-9.mb-lg-6.mb-4 img ' => 'width: {{VALUE}}px;',
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
                    '{{WRAPPER}} .thumb.mb-xxl-15.mb-xl-9.mb-lg-6.mb-4 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .thumb img ' => 'height: {{VALUE}}px;',
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
                    '{{WRAPPER}} .thumb img ' => 'width: {{VALUE}}px;',
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
                    '{{WRAPPER}} .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );




        $this->end_controls_section();


        $this->start_controls_section(
            'bannertextstyle',
            [
                'label' => esc_html__('Banner Text', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'bannertextstyle_typ',
                'selector' => '{{WRAPPER}} p.mb-xxl-10.mb-9.mb-lg-6.mb-4.fs20.n3-clr',
        
            ]
        );
        
        $this->add_control(
            'bannertextstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.mb-xxl-10.mb-9.mb-lg-6.mb-4.fs20.n3-clr' => 'color: {{VALUE}} !important;',
                ],
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
                'label' => esc_html__( 'Number', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'numbet_typ',
                'selector' => '{{WRAPPER}} span.display-four.n4-clr.fw_800.odometer.odometer-auto-theme,span.plus__icon.display-four.n4-clr.fw_800',
        
            ]
        );
        
        $this->add_control(
            'numbet_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.display-four.n4-clr.fw_800.odometer.odometer-auto-theme' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} span.plus__icon.display-four.n4-clr.fw_800' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'more_optiofdfns',
            [
                'label' => esc_html__( 'Text', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'counter_text_typ',
                'selector' => '{{WRAPPER}} p.n4-clr',
        
            ]
        );
        
        $this->add_control(
            'counter_text_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.n4-clr' => 'color: {{VALUE}} !important;',
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
        
        
  
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .banner-textanimation::before',
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




        <section class="banner-section-v9 banner-section-v13 pt-70-fixed position-relative">
            <!--Banner Content -->
            <div class="banner-v13wraper pb-20 pt-xxl-6">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-6 col-lg-6 col-md-8">
                            <div class="banner-content-v13 pt-xxl-20 pt-12 mt-xl-6 mt-lg-6 mt-5 position-relative">
                                <div class="bn-content-box">
                                    <?php if (!empty($settings['title'])) :   ?>
                                        <h4 class=" n4-clr mb-xxl-4 mb-3 subtitle">
                                            <?php echo esc_html($settings['title']) ?>
                                        </h4>
                                    <?php endif ?>
                                    <div class="display-two position-relative cus-z1 fw_900 text-capitalize n4-clr mb-xxl-4 mb-3 title">
                                        <span class="d-flex align-items-center gap-xxl-4 gap-3 fw_900 text-capitalize ">
                                            <?php if (!empty($settings['subtitle_line1'])) :   ?>
                                                <?php echo esc_html($settings['subtitle_line1']) ?>
                                            <?php endif ?>
                                            <span class="nft-text position-relative text-uppercase act4-clr">
                                                <?php if (!empty($settings['subtitle_line2'])) :   ?>
                                                    <?php echo esc_html($settings['subtitle_line2']) ?>
                                                <?php endif ?>
                                                <span class="nft-border">
                                                    <svg width="141" height="6" viewBox="0 0 141 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 5C22.8731 2.55684 81.2954 -1.30336 140 2.80115" stroke="#FF650E" />
                                                    </svg>
                                                </span>
                                                <span class="flash-focus">
                                                    <svg width="110" height="84" viewBox="0 0 110 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.8164 1.26562L20.5612 45.1542" stroke="#FF650E" stroke-width="2" stroke-linecap="round" />
                                                        <path d="M33.7734 29.8076L33.0918 48.769" stroke="#FF650E" stroke-width="2" stroke-linecap="round" />
                                                        <path d="M60.1542 22.0535L40.3501 53.6177M61.7669 52.0143L45.975 59.9903M100.399 60.0482L50.4313 68.0613" stroke="#FF650E" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <?php if (!empty($settings['subtitle_line3'])) :   ?>
                                            <span class="fw_900 text-capitalize d-block">
                                                <?php echo esc_html($settings['subtitle_line3']) ?>
                                            </span>
                                        <?php endif ?>
                                        <?php if (!empty($settings['subtitle_line4'])) :   ?>
                                            <span class="d-flex nw1-clr fw_900 text-capitalize align-items-center gap-3" data-aos="zoom-in-left" data-aos-duration="2400">
                                                <?php echo esc_html($settings['subtitle_line4']) ?>
                                            </span>
                                        <?php endif ?>
                                    </div>
                                    <?php if (!empty($settings['description'])) :   ?>
                                        <p class="n3-clr fs20 max-520 mb-xxl-10 mb-lg-8 mb-5 description" data-aos="fade-down-right" data-aos-duration="1500">
                                            <?php echo esc_html($settings['description']) ?>
                                        </p>
                                    <?php endif ?>

                                    <div class="d-flex flex-wrap cus-z1 position-relative flex-md-nowrap mb-xxl-20 mb-xl-10 mb-2 pb-6 align-items-center gap-xl-8 gap-3 flex-wrap w-100">
                                        <?php if (!empty($settings['button_text'])) :   ?>
                                            <a href="<?php echo esc_url($settings['button_link']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
                                                <?php if (!empty($settings['button_text'])) :   ?>
                                                    <span class="kew-text n4-clr act3-bg">
                                                        <?php echo esc_html($settings['button_text']) ?>
                                                    </span>
                                                <?php endif ?>
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
                                            <a href="<?php echo esc_url($settings['start_now_link']['url']) ?>" class="how-cont act3-texthover n4-clr fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                                <?php echo esc_html($settings['start_now_text']) ?>
                                            </a>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="bn1-odometer pt-0 d-flex align-items-center gap-xxl-10 gap-sm-8 gap-4">
                                    <?php if (!empty($settings['customer'])) :   ?>
                                        <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                            <?php echo wp_kses($settings['customer'], wp_kses_allowed_html('post'))  ?>
                                        </div>
                                    <?php endif ?>
                                    <?php if (!empty($settings['artwork'])) :   ?>
                                        <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                            <?php echo wp_kses($settings['artwork'], wp_kses_allowed_html('post'))  ?>
                                        </div>
                                    <?php endif ?>
                                    <?php if (!empty($settings['Owner'])) :   ?>
                                        <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                            <?php echo wp_kses($settings['Owner'], wp_kses_allowed_html('post'))  ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/arrow-v11.png" alt="img" class="arrow-exv9">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4">
                            <div class="banner-v13-thumbwrap">
                                <div class="banner-innerv13-one">
                                    <div class="thumb mb-xxl-15 mb-xl-9 mb-lg-6 mb-4">
                                        <?php if (!empty($settings['banner_image']['url'])) :   ?>
                                            <img src="<?php echo esc_url($settings['banner_image']['url']) ?>" alt="img">
                                        <?php endif ?>
                                    </div>
                                    <div class="banner-content-v1customer justify-content-center d-grid pt-0">
                                        <ul class="customer-review d-inline-flex cmn-style-flex list-unstyled">
                                            <?php if (!empty($settings['userimage1']['url'])) :   ?>
                                                <li>
                                                    <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                        <img src="<?php echo esc_url($settings['userimage1']['url']) ?>" alt="img">
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings['userimage2']['url'])) :   ?>

                                                <li>
                                                    <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                        <img src="<?php echo esc_url($settings['userimage2']['url']) ?>" alt="img">
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings['userimage3']['url'])) :   ?>
                                                <li>
                                                    <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                        <img src="<?php echo esc_url($settings['userimage3']['url']) ?>" alt="img">
                                                    </a>
                                                </li>
                                            <?php endif ?>

                                            <?php if (!empty($settings['usertext1'])) :   ?>
                                                <li>
                                                    <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                        <span class="d-grid fs-eight fw_600 n4-clr customer-ratting text-center p-2 p1-bg align-items-center justify-content-center">
                                                            <?php echo esc_html($settings['usertext1']) ?>
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                        </ul>
                                        <span class="d-flex align-items-center gap-2 d-block fw_700 text-uppercase mt-xxl-3 mt-2">
                                            <?php echo wp_kses($settings['usertext2'], wp_kses_allowed_html('post'))  ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="banner-innerv13-two">
                                    <?php if (!empty($settings['bannertext'])) :   ?>
                                        <p class="mb-xxl-10 mb-9 mb-lg-6 mb-4 fs20 n3-clr">
                                            <?php echo esc_html($settings['bannertext']) ?>
                                        </p>
                                    <?php endif ?>
                                    <?php if (!empty($settings['small_banner_image']['url'])) :   ?>
                                        <div class="thumb">
                                            <img src="<?php echo esc_url($settings['small_banner_image']['url']) ?>" alt="img">
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Content -->

            <!--Text Animation -->
            <div class="banner-textanimation">
                <div class="textcircle2">
                    <div class="text2">
                        <?php if (!empty($settings['scroll_text'])) :   ?>
                            <p>
                                <?php echo wp_kses($settings['scroll_text'], wp_kses_allowed_html('post'))  ?>
                            </p>
                        <?php endif ?>
                    </div>
                </div>
                <a href="#0" class="icon-explore">
                    <span class="icon">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </span>
                </a>
            </div>
            <!--Text Animation -->

            <!--Scroll Top -->
            <?php if (!empty($settings['scroll_textt'])) :   ?>
                <a href="<?php echo esc_url($settings['scroll_link']['url']) ?>" class="scroll-bn1 act3-bg radius100 d-flex justify-content-center align-items-center justify-content-center">
                    <span class="d-grid gap-xxl-5 gap-xl-4 gap-3 justify-content-center text-center m-auto">
                        <?php if (!empty($settings['scroll_textt'])) :   ?>
                            <span class="n4-clr fs18 d-block fw_600">
                                <?php echo esc_html($settings['scroll_textt']) ?>
                            </span>
                        <?php endif ?>

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