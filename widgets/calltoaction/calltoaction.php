<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Calltoaction_Widget extends \Elementor\Widget_Base
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
        return 'rt-calltoaction';
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
        return __('SV Call To Action', 'rtelements');
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
            'subtitle_icon',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('SUbtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Call To Action', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get Your Bike', 'plugin-name'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title2',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Lottery', 'plugin-name'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title3',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Ticket Now!', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'textphone',
            [
                'label' => esc_html__('Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('CALL US AT ANYTIME', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'calltext',
            [
                'label' => esc_html__('Call Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Call', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'callicon',
            [
                'label' => esc_html__('Call Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::ICONS,

            ]
        );


        $this->add_control(
            'numberr',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('(629) 555-0129', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'rebornone',
            [
                'label' => esc_html__('Choose Reborn One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );

        $this->add_control(
            'reborntwo',
            [
                'label' => esc_html__('Choose Reborn Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );

        $this->add_control(
            'newsletertitle',
            [
                'label' => esc_html__('Newsletter Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Subscribe To Our Newsletter', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact_content_form_shortcode',
            [
                'label' => esc_html__('Contact Form Shortcode', 'gamestorm-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'placeholder' => esc_html__('Type your Shortcode here', 'gamestorm-core'),
            ]
        );

        $this->end_controls_section();

        // ==================================style==========================================//


        $this->start_controls_section(
             'subttilestyle',
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
             'titilestyle',
             [
                'label' => esc_html__('Title', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'more_optiofns',
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
                'name'     => 'titleone_typ',
                'selector' => '{{WRAPPER}} .title',
        
            ]
        );
        
        $this->add_control(
            'titleone_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        
        $this->add_control(
            'more_optifdons',
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
                ],
            ]
        );

        
        $this->add_control(
            'more_optfdions',
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
                'name'     => 'titlethree_typ',
                'selector' => '{{WRAPPER}} .titlethree',
        
            ]
        );
        
        $this->add_control(
            'titlethree_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .titlethree' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important;',
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
                'selector' => '{{WRAPPER}} span.text-uppercase.fs20.fw_700',
        
            ]
        );
        
        $this->add_control(
            'textstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.text-uppercase.fs20.fw_700' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'textstyle_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} span.text-uppercase.fs20.fw_700' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'textstyle_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} span.text-uppercase.fs20.fw_700' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        
        
        $this->end_controls_section();


        $this->start_controls_section(
             'callstyle',
             [
                'label' => esc_html__('Call', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'callstyle_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .call-anytime span.fs20.fw_700' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .call-anytime .boxs svg path' => 'stroke: {{VALUE}} !important',
                    '{{WRAPPER}} .call-anytime span.boxs.ph-text.d-block.n4-clr.d-block.fw_700' => 'color: {{VALUE}} !important',
                ],
            ]
        );


        
        $this->add_control(
            'callstyleh_color',
            [
                'label' => esc_html__( 'Hover Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .call-anytime .cal-box:hover' => 'background : {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();


        $this->start_controls_section(
             'formstyle',
             [
                'label' => esc_html__('Form', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'ddmore_options',
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
                'name'     => 'spinffner_typ',
                'selector' => '{{WRAPPER}} span.display-two.nw1-clr.mb-xxl-15.mb-xl-10.mb-lg-8.mb-5',
        
            ]
        );
        
        $this->add_control(
            'spinffdner_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.display-two.nw1-clr.mb-xxl-15.mb-xl-10.mb-lg-8.mb-5' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'spidfnner_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} span.display-two.nw1-clr.mb-xxl-15.mb-xl-10.mb-lg-8.mb-5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'spifdnner_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} span.display-two.nw1-clr.mb-xxl-15.mb-xl-10.mb-lg-8.mb-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        $this->add_control(
            'ddmore_ofptions',
            [
                'label' => esc_html__( 'Section', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'spinnfdfer_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .action-form' => 'background: {{VALUE}} !important',
                ],
            ]
        );


        $this->add_control(
            'mfdsfore_options',
            [
                'label' => esc_html__( 'Button', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'spinnfdsffdser_color',
            [
                'label' => esc_html__( 'Button One Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.kewta-btn.kewta-alt.d-inline-flex.align-items-center span' => 'background: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'spinfdsfner_color',
            [
                'label' => esc_html__( 'Button Two Backgound', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} button.wpcf7-form-control.wpcf7-submit.kewta-btn.kewta-alt.d-inline-flex.align-items-center span' => 'background: {{VALUE}} !important',
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

        <section class="call-tosection overflow-visible n4-bg pt-120 position-relative call-custom-space">
            <div class="container">
                <div class="call-to-wrapper1 pt-6">
                    <div class="row g-xl-4 g-4 justify-content-between">
                        <div class="col-xl-5 col-lg-5 col-md-7">
                            <div class="section__title mb-xxl-15 mb-xl-10 mb-lg-8 mb-6">
                                <?php if (!empty($settings['subtitle'])) :   ?>
                                    <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                        <?php if (!empty($settings['subtitle_icon']['url'])) :   ?>
                                            <img src="<?php echo esc_url($settings['subtitle_icon']['url']) ?>" alt="img">
                                        <?php endif ?>
                                        <h5 class="p1-clr fw_700 subtitle">
                                            <?php echo esc_html($settings['subtitle']) ?>
                                        </h5>
                                    </div>
                                <?php endif ?>
                                <span class="display-four d-block n0-clr title">
                                    <?php if (!empty($settings['title1'])) :   ?>
                                        <?php echo esc_html($settings['title1']) ?>
                                    <?php endif ?>
                                    <span class="d-flex align-items-center gap-2">
                                        <?php if (!empty($settings['title2'])) :   ?>
                                            <span class="d-block titletwo" data-aos="zoom-in-right" data-aos-duration="1200">
                                                <?php echo esc_html($settings['title2']) ?>
                                            </span>
                                        <?php endif ?>
                                        <?php if (!empty($settings['title3'])) :   ?>
                                            <span class="act4-clr act4-underline titlethree" data-aos="zoom-in-left" data-aos-duration="1000">
                                                <?php echo esc_html($settings['title3']) ?>
                                            </span>
                                        <?php endif ?>
                                    </span>
                                </span>
                            </div>
                            <div class="time-callwrap position-relative cus-z1">
                                <div class="this-box">
                                    <?php if (!empty($settings['textphone'])) :   ?>
                                        <span class="text-uppercase fs20 fw_700 n0-clr mb-xxl-10 mb-xl-7 mb-lg-6 mb-5" data-aos="fade-down-left" data-aos-duration="1200">
                                            <?php echo esc_html($settings['textphone']) ?>
                                        </span>
                                    <?php endif ?>
                                    <div class="call-anytime">
                                        <?php if (!empty($settings['calltext'])) :   ?>
                                            <a href="tel:<?php echo esc_attr($settings['numberr']) ?>" class="cal-box d-center" data-aos="zoom-in-left" data-aos-duration="1400">
                                                <span class="boxs n0-clr d-flex align-items-center gap-1">
                                                    <span class="fs20 fw_700">
                                                        <?php echo esc_html($settings['calltext']) ?>
                                                    </span>
                                                    <?php \Elementor\Icons_Manager::render_icon($settings['callicon'], ['aria-hidden' => 'true']); ?>
                                                </span>
                                            </a>
                                        <?php endif ?>
                                        <a href="tel:<?php echo esc_attr($settings['numberr']) ?>" class="cal-box d-center" data-aos="zoom-in-right" data-aos-duration="1400">
                                            <span class="boxs ph-text d-block n4-clr d-block fw_700">
                                                <?php echo esc_html($settings['numberr']) ?>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7" data-aos="zoom-in-down" data-aos-duration="1600">
                            <div class="action-form">
                                <?php if (!empty($settings['newsletertitle'])) :   ?>
                                    <span class="display-two nw1-clr mb-xxl-15 mb-xl-10 mb-lg-8 mb-5">
                                        <?php echo esc_html($settings['newsletertitle']) ?>
                                    </span>
                                <?php endif ?>
                                <?php if (!empty($settings['contact_content_form_shortcode'])) :   ?>
                                    <?php echo do_shortcode($settings['contact_content_form_shortcode']) ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!empty($settings['rebornone']['url'])) :   ?>
                <div class="call-sun">
                    <img src="<?php echo esc_url($settings['rebornone']['url']) ?>" alt="call-sun">
                </div>
            <?php endif ?>
            <?php if (!empty($settings['reborntwo']['url'])) :   ?>
                <div class="call-posi-car">
                    <img src="<?php echo esc_url($settings['reborntwo']['url']) ?>" alt="img">
                </div>
            <?php endif ?>
        </section>


<?php
    }
} ?>