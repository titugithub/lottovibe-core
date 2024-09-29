<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Bannercycle_Widget extends \Elementor\Widget_Base
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
        return 'rt-bannercycle';
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
        return __('SV Banner Cycle', 'rtelements');
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
            'title1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Your Ticket', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'titleimage',
            [
                'label' => esc_html__('Choose Title Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Two', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'title3',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__(' Wheel Euphoria!', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Join the excitement. Get your ticket now, ride toward winning your dream bike!', 'plugin-name'),
            ]
        );

        $this->add_control(
            'buttononetext',
            [
                'label' => esc_html__('Button One Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Participate Now', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'buttononelink',
            [
                'label' => esc_html__('Button One Link', 'plugin-name'),
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
            'buttontwotext',
            [
                'label' => esc_html__('Button Two Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('How It’s Works', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'buttontwolink',
            [
                'label' => esc_html__('Button Two Link', 'plugin-name'),
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
            'buttonimage',
            [
                'label' => esc_html__('Choose Button Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );

        $this->add_control(
            'circiletextone',
            [
                'label' => esc_html__('Circle Text One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Explore', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'circiletexttwo',
            [
                'label' => esc_html__('Circle Text Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('More', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'circiletextthree',
            [
                'label' => esc_html__('Circle Text Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Explore', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'circiletextfour',
            [
                'label' => esc_html__('Circle Text Four', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Explore', 'plugin-name'),
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


        $this->end_controls_section();

        // =============================Style==================================//

        $this->start_controls_section(
             'titlestyle',
             [
                'label' => esc_html__('Title', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'more_options1',
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
                'name'     => 'titlefone_typ',
                'selector' => '{{WRAPPER}} span.fw_900.text-capitalize.d-block',
        
            ]
        );
        
        $this->add_control(
            'titleone_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_900.text-capitalize.d-block' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_control(
            'more_options2',
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
                'name'     => 'titletwdo_typ',
                'selector' => '{{WRAPPER}} span.fw_900.act3-clr.d-block.act3-underline',
        
            ]
        );
        
        $this->add_control(
            'titletwo_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fw_900.act3-clr.d-block.act3-underline' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .act3-underline::before' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_control(
            'more_option3s',
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
                'name'     => 'titlefthree_typ',
                'selector' => '{{WRAPPER}} span.d-flex.fw_900.nw1-clr.text-capitalize.align-items-center.gap-3',
        
            ]
        );
        
        $this->add_control(
            'titlethree_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.d-flex.fw_900.nw1-clr.text-capitalize.align-items-center.gap-3' => 'color: {{VALUE}} !important;',
                ],
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
                'name'     => 'descriptfion_typ',
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
            'buttonone',
            [
                'label' => esc_html__( 'Button One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'buttonone_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.kew-text.n4-clr.act3-bg' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} i.ti.ti-arrow-right.n4-clr' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'buttononebac_color',
            [
                'label' => esc_html__( 'Background Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.kew-text.n4-clr.act3-bg' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .kew-arrow.act3-bg' => 'background: {{VALUE}} !important',
                ],
            ]
        );



        
        $this->add_control(
            'buttontwo',
            [
                'label' => esc_html__( 'Button Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'buttontwo_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.how-cont.nw1-clr.act3-hover.fw_700' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'buttontwoh_color',
            [
                'label' => esc_html__( 'HoverColor', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.how-cont.nw1-clr.act3-hover.fw_700:hover' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'circlestyle',
             [
                'label' => esc_html__('Circle Text', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .banner-textanimation',
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




        <div class="banner-section-v5 pt-70-fixed  position-relative overflow-hidden">
            <!--Banner Content -->
            <div class="container">
                <div class="row justify-content-center justify-content-between">
                    <div class="col-lg-7">
                        <div class="banner-content-v2 banner-content-v3 pt-xxl-20 pt-12 mt-6">
                            <div class="bn-content-box">
                                <div class="display-two position-relative cus-z1 text-capitalize n0-clr mb-xxl-5 mb-3">
                                    <span class="d-flex text-capitalize align-items-center mb-3 n0-clr gap-3 text-uppercase" data-aos="zoom-in-up" data-aos-duration="2200">
                                        <?php if (!empty($settings['title1'])) :   ?>
                                            <span class="fw_900 text-capitalize d-block"><?php echo esc_html($settings['title1']) ?></span>
                                        <?php endif ?>
                                        <?php if (!empty($settings['titleimage']['url'])) :   ?>
                                            <img src="<?php echo esc_url($settings['titleimage']['url']) ?>" alt="img" class="bn-v2textcar1">
                                        <?php endif ?>
                                        <?php if (!empty($settings['title2'])) :   ?>
                                            <span class="fw_900 act3-clr d-block act3-underline"><?php echo esc_html($settings['title2']) ?></span>
                                        <?php endif ?>
                                    </span>
                                    <span class="d-flex fw_900 nw1-clr text-capitalize align-items-center gap-3" data-aos="zoom-in-left" data-aos-duration="2400">
                                        <?php if (!empty($settings['title3'])) :   ?>
                                            <?php echo esc_html($settings['title3']) ?>
                                        <?php endif ?>
                                    </span>
                                </div>
                                <?php if (!empty($settings['description'])) :   ?>
                                    <p class="nw1-clr fs20 max-520 mb-xxl-10 mb-lg-8 mb-5 description" data-aos="fade-down-right" data-aos-duration="1500">
                                        <?php echo esc_html($settings['description']) ?>
                                    </p>
                                <?php endif ?>

                                <div class="d-flex flex-wrap cus-z1 position-relative flex-md-nowrap mb-xxl-12 mb-xl-10 mb-8 align-items-center gap-xl-8 gap-3 flex-wrap w-100">
                                    <a href="<?php echo esc_url($settings['buttononelink']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
                                        <?php if (!empty($settings['buttononetext'])) :   ?>
                                            <span class="kew-text n4-clr act3-bg">
                                                <?php echo esc_html($settings['buttononetext']) ?>
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
                                    <a href="<?php echo esc_url($settings['buttontwolink']['url']) ?>" class="how-cont nw1-clr act3-hover fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                        <?php echo esc_html($settings['buttontwotext']) ?>
                                    </a>
                                    <?php if (!empty($settings['buttonimage']['url'])) :   ?>
                                        <img src="<?php echo esc_url($settings['buttonimage']['url']) ?>" alt="img" class="arrow-v5">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <?php if (!empty($settings['image']['url'])) :   ?>
                            <div class="banner-v5bicycle-thumb" data-aos="zoom-in-left" data-aos-duration="1800">
                                <img src="<?php echo esc_url($settings['image']['url']) ?>" alt="img">
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <!--Banner Content -->

            <!--Text Animation -->
            <div class="banner-textanimation">
                <div class="textcircle">
                    <div class="text">
                        <p>
                            <span>
                                <?php if (!empty($settings['circiletextone'])) :   ?>
                                    <?php echo esc_html($settings['circiletextone']) ?>
                                <?php endif ?>
                            </span> <span>
                                <?php if (!empty($settings['circiletexttwo'])) :   ?>
                                    <?php echo esc_html($settings['circiletexttwo']) ?>
                                <?php endif ?>
                            </span> <span>
                                <?php if (!empty($settings['circiletextthree'])) :   ?>
                                    <?php echo esc_html($settings['circiletextthree']) ?>
                                <?php endif ?>
                            </span> <span>
                                <?php if (!empty($settings['circiletextfour'])) :   ?>
                                    <?php echo esc_html($settings['circiletextfour']) ?>
                                <?php endif ?>
                            </span>
                        </p>
                    </div>
                </div>
                <a href="#0" class="icon-explore">
                    <span class="icon">
                        <i class="ph-bold ph-arrow-up-right"></i>
                    </span>
                </a>
            </div>
            <!--Text Animation -->

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
        </div>


<?php
    }
} ?>