<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Carcat_Widget extends \Elementor\Widget_Base
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
        return 'rt-carcat';
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
        return __('SV Car Category', 'rtelements');
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


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'name',
            [
                'label' => esc_html__('Name', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'buttontext',
            [
                'label' => esc_html__('Button Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Participant Now', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'buttonlink',
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
            'list_repeater',
            [
                'label' => esc_html__('Car List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ name }}}',
            ]
        );



        $this->end_controls_section();

        // =============================Style==================================//

        $this->start_controls_section(
             'cardstyle',
             [
                'label' => esc_html__('Card', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .cate-body-item',
            ]
        );
        

        $this->add_control(
            'cardstyle_h_color',
            [
                'label' => esc_html__( 'Hover Backgournd', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cate-body-item::before' => 'background: {{VALUE}} !important',
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
                'name'     => 'title_typ',
                'selector' => '{{WRAPPER}} .content .n4-clr a',
        
            ]
        );
        
        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content .n4-clr a' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'title_hcolor',
            [
                'label'     => esc_html__('Hover Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cate-body-item:hover h4 a' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .content .n4-clr a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'title_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .content .n4-clr a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
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
                    '{{WRAPPER}} .car-tybtn span' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .car-tybtn i' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'buttonstyle_bac_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .car-tybtn span' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .kew-arrow.act3-bg' => 'background: {{VALUE}} !important',
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







        <section class="cate-body-type ">


            <!--Cate Body-->
            <div class="container">
                <div class="cate-body-wrap mb-xxl-6 mb-5 flex-wrap">

                    <?php foreach ($settings['list_repeater'] as $item) : ?>

                        <div class="cate-body-item winbg position-relative d-flex align-items-center justify-content-center nw4-border text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1200">
                            <div class="box">
                                <?php if (!empty($item['image']['url'])) :   ?>
                                    <div class="thumb position-relative cus-z1 px-xxl-0 px-2 mb-xxl-8 mb-xl-6 mb-5">
                                        <img src="<?php echo esc_url($item['image']['url']) ?>" alt="img">
                                    </div>
                                <?php endif ?>

                                <div class="content position-relative cus-z1">
                                    <h4 class="n4-clr">
                                        <?php if (!empty($item['name'])) :   ?>
                                            <a href="<?php echo esc_url($item['buttonlink']['url']) ?>">
                                                <?php echo esc_html($item['name']) ?>
                                            </a>
                                        <?php endif ?>
                                    </h4>
                                    <?php if (!empty($item['buttontext'])) :   ?>
                                        <div class="car-tybtn">
                                            <a href="<?php echo esc_url($item['buttonlink']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                                                <span class="kew-text act3-bg n4-clr">
                                                    <?php echo esc_html($item['buttontext']) ?>
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
                            </div>
                        </div>
                    <?php endforeach; ?>





                </div>

            </div>
            <!--Cate Body-->
        </section>






<?php
    }
} ?>