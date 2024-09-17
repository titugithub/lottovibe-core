<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Banner_Widget extends \Elementor\Widget_Base
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
        return 'rt-banner';
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
        return __('SV Banner', 'rtelements');
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
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'plugin-name')
            ]
        );


        $this->add_control(
            'textone',
            [
                'label' => esc_html__('Text One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Entry', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'texttwo',
            [
                'label' => esc_html__('Text Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Draw', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'textthree',
            [
                'label' => esc_html__('Text Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Win', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'subtitlelink',
            [
                'label' => esc_html__('Link', 'plugin-name'),
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

        $this->start_controls_section(
            'title',
            [
                'label' => esc_html__('Title', 'plugin-name')
            ]
        );

        $this->add_control(
            'titleone',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Could you be our ', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'titletwo',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('next', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'titlethree',
            [
                'label' => esc_html__('Title Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Winner?', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'descriptionn',
            [
                'label' => esc_html__('Description', 'plugin-name')
            ]
        );


        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Nows your chance to win a car! Check out the prestige cars you can win in our car prize draws. Will you be our next lucky winner? ', 'plugin-name'),
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'button',
            [
                'label' => esc_html__('Button', 'plugin-name')
            ]
        );

        $this->add_control(
            'buttononetext',
            [
                'label' => esc_html__('Button One Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Participant Now', 'plugin-name'),
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
                'default' => esc_html__('Participant Now', 'plugin-name'),
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


        $this->end_controls_section();

        $this->start_controls_section(
            'video',
            [
                'label' => esc_html__('Video', 'plugin-name')
            ]
        );

        $this->add_control(
            'videoimage',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
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


        $this->end_controls_section();

        $this->start_controls_section(
            'feature',
            [
                'label' => esc_html__('Feature', 'plugin-name')
            ]
        );

        $this->add_control(
            'more_options',
            [
                'label' => esc_html__('First', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'numberone',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'paraone',
            [
                'label' => esc_html__('Parameter', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'usertitle',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'more_optifons',
            [
                'label' => esc_html__('Second', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );



        $this->add_control(
            'numbertwo',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );



        $this->add_control(
            'markettitle',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'user',
            [
                'label' => esc_html__('User', 'plugin-name')
            ]
        );

        $this->add_control(
            'image1',
            [
                'label' => esc_html__('Choose Image One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'image2',
            [
                'label' => esc_html__('Choose Image Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'image3',
            [
                'label' => esc_html__('Choose Image Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->add_control(
            'image4',
            [
                'label' => esc_html__('Choose Image Four', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'ratingnumber',
            [
                'label' => esc_html__('Rating Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('4.7', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'usertitleone',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'usertitletwo',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'iconlink',
            [
                'label' => esc_html__('Link', 'plugin-name'),
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
            'offerimage',
            [
                'label' => esc_html__('Choose Image (Bottom)', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'image',
            [
                'label' => esc_html__('Image', 'plugin-name')
            ]
        );

        $this->add_control(
            'carone',
            [
                'label' => esc_html__('Car One Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'cartwo',
            [
                'label' => esc_html__('Car Two Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'carthree',
            [
                'label' => esc_html__('Car Three Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'scroll',
            [
                'label' => esc_html__('Scroll', 'plugin-name')
            ]
        );

        $this->add_control(
            'scroll_show',
            [
                'label' => esc_html__('Show Scroll?', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'plugin-name'),
                'label_off' => esc_html__('Hide', 'plugin-name'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $this->end_controls_section();


        // ============================Style=================================//

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
                'selector' => '{{WRAPPER}} .fs-four.p1-clr',

            ]
        );

        $this->add_control(
            'subtitlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .fs-four.p1-clr' => 'color: {{VALUE}} !important;',
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


        $this->add_control(
            'more_optiaaons',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spinnessr_typ',
                'selector' => '{{WRAPPER}} .custom-display.n0-clr.mb-6.aos-init.aos-animate',

            ]
        );

        $this->add_control(
            'spinffner_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .custom-display.n0-clr.mb-6.aos-init.aos-animate' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'more_optionffs',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spinnfdfer_typ',
                'selector' => '{{WRAPPER}} .wins.nw1-clr.d-flex.align-items-center.gap-6.aos-init.aos-animate',

            ]
        );

        $this->add_control(
            'spfdinner_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wins.nw1-clr.d-flex.align-items-center.gap-6.aos-init.aos-animate' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'more_optiffons',
            [
                'label' => esc_html__('Title Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spinfdner_typ',
                'selector' => '{{WRAPPER}} .wins.p1-clr',

            ]
        );

        $this->add_control(
            'spinnfder_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wins.p1-clr' => 'color: {{VALUE}} !important;',
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
                'label' => esc_html__('Margin', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
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
            'more_ofdptions',
            [
                'label' => esc_html__('Button One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'button_one_color',
            [
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .kewta-btn .kew-text' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .kew-arrow.act3-bg i' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'button_one_bac_color',
            [
                'label' => esc_html__('Background', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .kewta-btn .kew-text' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}}  .kew-arrow.act3-bg' => 'background: {{VALUE}} !important',
                ],
            ]
        );



        $this->add_control(
            'more_ofdpahhtions',
            [
                'label' => esc_html__('Button Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'button_two_color',
            [
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-cont.nw1-clr.fw_700' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'button_two_hover_color',
            [
                'label' => esc_html__('Hover Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-cont.nw1-clr.fw_700:hover' => 'color: {{VALUE}} !important',
                ],
            ]
        );





        $this->end_controls_section();

        $this->start_controls_section(
            'featurestyle',
            [
                'label' => esc_html__('Feature', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'more_optfdafions',
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
                'name'     => 'sfdsfgpinner_typ',
                'selector' => '{{WRAPPER}} .display-four.nw1-clr.fw_800.odometer.odometer-auto-theme,.plus__icon.display-four.nw1-clr.fw_800',

            ]
        );

        $this->add_control(
            'spiggaagnner_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .display-four.nw1-clr.fw_800.odometer.odometer-auto-theme' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .plus__icon.display-four.nw1-clr.fw_800' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'more_optfddsafions',
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
                'name'     => 'spisfggggnner_typ',
                'selector' => '{{WRAPPER}} .odometer__items p',

            ]
        );

        $this->add_control(
            'spinghggner_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .odometer__items p' => 'color: {{VALUE}} !important;',
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
            'scroll_bac_color',
            [
                'label' => esc_html__('Background', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .scroll-bn1' => 'background: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'spinfdsffner_color',
            [
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .scroll-bn1 span' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .scroll-bn1 span svg path' => 'fill: {{VALUE}} !important',
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
            'more_ofafptions',
            [
                'label' => esc_html__('Rating', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'rating_color',
            [
                'label' => esc_html__('Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .d-grid.customer-ratting.text-center.p-2.p1-bg.align-items-center.justify-content-center i' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .d-grid.customer-ratting.text-center.p-2.p1-bg.align-items-center.justify-content-center span' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'rating_bac_color',
            [
                'label' => esc_html__('Background', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .d-grid.customer-ratting.text-center.p-2.p1-bg.align-items-center.justify-content-center' => 'background: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'mdfafdsore_options',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'spfdsfaginner_typ',
                'selector' => '{{WRAPPER}} .nw2-clr.fs-eight.fw_700.d-block.text-uppercase.mt-xxl-4.mt-3',

            ]
        );

        $this->add_control(
            'spingaddfner_color',
            [
                'label'     => esc_html__('Color One', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nw2-clr.fs-eight.fw_700.d-block.text-uppercase.mt-xxl-4.mt-3 .act3-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'spingaddffner_color',
            [
                'label'     => esc_html__('Color Two', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nw2-clr.fs-eight.fw_700.d-block.text-uppercase.mt-xxl-4.mt-3' => 'color: {{VALUE}} !important;',
                ],
            ]
        );



        $this->end_controls_section();


        $this->start_controls_section(
            'carstyle',
            [
                'label' => esc_html__('Car Image', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'car_bac_color',
            [
                'label' => esc_html__('Icon Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-btn button' => 'border:1px solid {{VALUE}} !important',
                    '{{WRAPPER}} .slider-btn button i' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'car_bac_lhov_color',
            [
                'label' => esc_html__('Icon Hover Color', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .swiper-button-prevteam:hover, .swiper-button-nextteam:hover' => 'background: {{VALUE}} !important',


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







        <div class="banner-section-v1 pt-70-fixed  position-relative overflow-hidden">
            <!--Banner Content -->
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <div class="banner-content-v1">
                            <div class="d-flex mb-sm-3 mb-5 align-items-center gap-xxl-8 gap-lg-6 gap-4 flex-wrap">
                                <ul class="m-0 entry-win d-flex align-items-center gap-3 list-unstyled">
                                    <?php if (!empty($settings['textone'])) :   ?>
                                        <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1000">
                                            <a href="javascript:void(0)" class="fs-four p1-clr">
                                                <?php echo esc_html($settings['textone']) ?>
                                            </a>
                                        </li>
                                        <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1200">
                                            <i class="ti ti-arrow-right fs-four p1-clr"></i>
                                        </li>
                                    <?php endif ?>
                                    <?php if (!empty($settings['texttwo'])) :   ?>
                                        <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1400">
                                            <a href="javascript:void(0)" class="fs-four p1-clr">
                                                <?php echo esc_html($settings['texttwo']) ?>
                                            </a>
                                        </li>
                                        <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1600">
                                            <i class="ti ti-arrow-right fs-four p1-clr"></i>
                                        </li>
                                    <?php endif ?>
                                    <?php if (!empty($settings['textthree'])) :   ?>
                                        <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="2000">
                                            <a href="javascript:void(0)" class="fs-four p1-clr">
                                                <?php echo esc_html($settings['textthree']) ?>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                </ul>
                                <a href="<?php echo esc_url($settings['subtitlelink']['url']) ?>" class="custom-bigarrow">
                                    <span class="icon">
                                        <svg width="137" height="16" viewBox="0 0 137 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M136.707 8.70712C137.098 8.31659 137.098 7.68343 136.707 7.29291L130.343 0.928944C129.953 0.538419 129.319 0.538419 128.929 0.928943C128.538 1.31947 128.538 1.95263 128.929 2.34316L134.586 8.00001L128.929 13.6569C128.538 14.0474 128.538 14.6806 128.929 15.0711C129.319 15.4616 129.953 15.4616 130.343 15.0711L136.707 8.70712ZM-8.74228e-08 9L136 9.00001L136 7.00001L8.74228e-08 7L-8.74228e-08 9Z" fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="custom-display n0-clr mb-6" data-aos="zoom-in-up" data-aos-duration="1000">
                                <?php if (!empty($settings['titleone'])) :   ?>
                                    <?php echo esc_html($settings['titleone']) ?>
                                <?php endif ?>
                                <div class="d-xxl-flex d-grid align-items-center justify-content-between winner-span gap-xxl-5 gap-4 flex-xxl-nowrap flex-wrap">
                                    <span class="wins nw1-clr d-flex align-items-center gap-6" data-aos="zoom-in-down" data-aos-duration="2000">
                                        <?php if (!empty($settings['titletwo'])) :   ?>
                                            <?php echo esc_html($settings['titletwo']) ?>
                                        <?php endif ?>
                                        <span class="wins p1-clr">
                                            <?php if (!empty($settings['titlethree'])) :   ?>
                                                <?php echo esc_html($settings['titlethree']) ?>
                                            <?php endif ?>
                                            <svg viewBox="0 0 355 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.92099 12.8063C56.8373 3.14121 205.75 -10.0362 354.071 14.5747" stroke="#AEFE3A" />
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="thumb">
                                        <img src="<?php echo esc_url($settings['videoimage']['url']) ?>" alt="img" class="radius100">
                                        <a href="<?php echo esc_url($settings['videolink']['url']) ?>" class="bn-vid popup-video">
                                            <i class="ti ti-player-play-filled p1-clr fs-six"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($settings['description'])) :   ?>
                                <p class="nw2-clr bn-pra mb-xxl-10 mb-sm-8 mb-6 description" data-aos="zoom-out-up" data-aos-duration="1000">
                                    <?php echo esc_html($settings['description']) ?>
                                </p>
                            <?php endif ?>

                            <div class="d-flex align-items-center gap-xl-8 gap-3 flex-wrap">
                                <?php if (!empty($settings['buttononetext'])) :   ?>
                                    <a href="<?php echo esc_url($settings['buttononelink']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
                                        <span class="kew-text s1-bg n4-clr act3-bg">
                                            <?php echo esc_html($settings['buttononetext']) ?>
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
                                <?php if (!empty($settings['buttontwotext'])) :   ?>
                                    <a href="<?php echo esc_url($settings['buttontwolink']['url']) ?>" class="how-cont nw1-clr fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                        <?php echo esc_html($settings['buttontwotext']) ?>
                                    </a>
                                <?php endif ?>
                            </div>
                            <div class="bn1-odometer d-flex align-items-center gap-xxl-11 gap-xl-8 gap-lg-6 gap-5">
                                <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                    <?php if (!empty($settings['numberone'])) :   ?>
                                        <div class="cont d-flex align-items-center">
                                            <span class="odometer display-four nw1-clr fw_800">
                                                <?php echo esc_html($settings['numberone']) ?>
                                            </span>
                                            <span class="plus__icon display-four nw1-clr fw_800">
                                                <?php echo esc_html($settings['paraone']) ?>
                                            </span>
                                        </div>
                                    <?php endif ?>
                                    <?php if (!empty($settings['usertitle'])) :   ?>
                                        <p><?php echo esc_html($settings['usertitle']) ?></p>
                                    <?php endif ?>
                                </div>
                                <div class="odometer__items" data-aos="zoom-in-up" data-aos-duration="1000">
                                    <?php if (!empty($settings['numbertwo'])) :   ?>
                                        <div class="cont d-flex align-items-center">
                                            <span class="odometer display-four nw1-clr fw_800">
                                                <?php echo esc_html($settings['numbertwo']) ?>
                                            </span>
                                        </div>
                                    <?php endif ?>
                                    <?php if (!empty($settings['markettitle'])) :   ?>
                                        <p><?php echo esc_html($settings['markettitle']) ?></p>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="banner-content-v1customer">
                            <ul class="list-unstyled customer-review cmn-style-flex d-inline-flex act3-border radius100 py-xxl-2 py-2 px-2">
                                <?php if (!empty($settings['image1']['url'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <img src="<?php echo esc_url($settings['image1']['url']) ?>" alt="img">
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings['image2']['url'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <img src="<?php echo esc_url($settings['image2']['url']) ?>" alt="img">
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings['image3']['url'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <img src="<?php echo esc_url($settings['image3']['url']) ?>" alt="img">
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings['image4']['url'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <img src="<?php echo esc_url($settings['image4']['url']) ?>" alt="img">
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings['ratingnumber'])) :   ?>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <span class="d-grid customer-ratting text-center p-2 p1-bg align-items-center justify-content-center">
                                                <i class="ti ti-star-filled n4-clr"></i>
                                                <span class="d-block fs-eight fw_700 n4-clr">
                                                    <?php echo esc_html($settings['ratingnumber']) ?>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                            <span class="nw2-clr fs-eight fw_700 d-block text-uppercase mt-xxl-4 mt-3">
                                <span class="act3-clr fs-five"><?php echo esc_html($settings['usertitleone']) ?></span> <?php echo esc_html($settings['usertitletwo']) ?>

                            </span>
                            <a href="<?php echo esc_url($settings['iconlink']['url']) ?>" class="d-flex arrow-rotate justify-content-end me-5 mt-6">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/kewta-arrow.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Content -->
            <?php if (!empty($settings['offerimage']['url'])) :   ?>
                <img src="<?php echo esc_url($settings['offerimage']['url']) ?>" alt="img" class="shape-win">
            <?php endif ?>
            <div class="banner-oneslider">
                <div class="banner-carslide-wrap swiper">
                    <div class="swiper-wrapper">
                        <?php if (!empty($settings['carone']['url'])) :   ?>
                            <div class="swiper-slide">
                                <div class="bn-carslide-item">
                                    <img src="<?php echo esc_url($settings['carone']['url']) ?>" alt="img">
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if (!empty($settings['cartwo']['url'])) :   ?>
                            <div class="swiper-slide">
                                <div class="bn-carslide-item">
                                    <img src="<?php echo esc_url($settings['cartwo']['url']) ?>" alt="img">
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if (!empty($settings['carthree']['url'])) :   ?>
                            <div class="swiper-slide">
                                <div class="bn-carslide-item">
                                    <img src="<?php echo esc_url($settings['carthree']['url']) ?>" alt="img">
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <!--Slide Click Button -->
            <div class="slider-btn d-grid gap-xxl-5 gap-3">
                <button type="button" class="swiper-button-prevteam cmn-60 p1-border p1-clr radius-circle">
                    <i class="ph-light ph-caret-right"></i>
                </button>
                <button type="button" class="swiper-button-nextteam cmn-60 p1-border p1-clr radius-circle">
                    <i class="ph-light ph-caret-left"></i>
                </button>
            </div>
            <!--Slide Click Button -->

            <!--Scroll Top -->
            <?php if (!empty($settings['scroll_show']) == 'yes') :   ?>
                <a href="#down-scroll" class="scroll-bn1 act3-bg radius100 d-flex justify-content-center align-items-center justify-content-center">
                    <span class="d-grid gap-xxl-5 gap-xl-4 gap-3 justify-content-center text-center m-auto">
                        <span class="n4-clr fs18 d-block fw_600">
                            <?php echo esc_html__(' Scroll', 'lottovibe') ?>
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






<?php
    }
} ?>