<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Bikecat_Widget extends \Elementor\Widget_Base
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
        return 'rt-bikecat';
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
        return __('SV Bike Category', 'rtelements');
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
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title3',
            [
                'label' => esc_html__('Title Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );


        $this->add_control(
            'buttontext',
            [
                'label' => esc_html__('Button Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'button_link',
            [
                'label' => esc_html__('ButtonLink', 'plugin-name'),
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


        // Repeater
        $repeater = new \Elementor\Repeater();



        $repeater->add_control(
            'list_image',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'list_title',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('List Title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_link',
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
                'label' => esc_html__('Bike List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

                'title_field' => '{{{ list_title }}}',
            ]
        );



        $this->end_controls_section();


        // ====================================Style===================================//


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
                'selector' => '{{WRAPPER}} h5.p1-clr.fw_700',
        
            ]
        );
        
        $this->add_control(
            'subtitlestyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h5.p1-clr.fw_700' => 'color: {{VALUE}} !important;',
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
            'titlestylecolor1',
            [
                'label' => esc_html__( 'Color One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.fs-two.fw_800.d-block.n0-clr.mb-xxl-5.mb-3' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} span.d-block.fw_800.n0-clr.fs-two' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'titlestylecolor2',
            [
                'label' => esc_html__( 'Color Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.act4-clr.fw_800.fs-two.act4-underline' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important',
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
            'button_color',
            [
                'label' => esc_html__( 'Background Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.cmn__collection.radius-circle.p1-bg.d-center.position-relative' => 'background: {{VALUE}} !important',
                ],
            ]
        );


        $this->add_control(
            'buttonhover_color',
            [
                'label' => esc_html__( 'Hover Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cmn__collection::after' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'cardstyle',
             [
                'label' => esc_html__('Card', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'caredd_color',
            [
                'label' => esc_html__( 'Background Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cate-gorgiousbox' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'productstyle',
             [
                'label' => esc_html__('Product', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'productstyle_typ',
                'selector' => '{{WRAPPER}} .titleproduct',
        
            ]
        );

        
        $this->add_control(
            'productstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.single-cont .cont' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        $this->add_control(
            'productstyler_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content-wrap' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        

        $this->add_control(
            'productstyle_color_hover',
            [
                'label' => esc_html__( 'Hover Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content-wrap:hover' => 'background: {{VALUE}} !important',
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




        <section class="category-v3-banner pt-120 pb-100">
            <div class="container">
                <div class="row g-xxl-6 g-4">
                    <div class="col-lg-3">
                        <div class="cate-gorgiousbox">
                            <div class="section__title mb-xxl-15 mb-xl-10 mb-8">
                                <?php if (!empty($settings['subtitle'])) :   ?>
                                    <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/global-picon.png" alt="img">
                                        <h5 class="p1-clr fw_700">
                                            <?php echo esc_html($settings['subtitle']) ?>
                                        </h5>
                                    </div>
                                <?php endif ?>

                                <span class="fs-two fw_800 d-block n0-clr mb-xxl-5 mb-3">
                                    <?php if (!empty($settings['title1'])) :   ?>
                                        <?php echo esc_html($settings['title1']) ?>
                                    <?php endif ?>
                                    <span class="d-flex fs-two align-items-center gap-2">
                                        <?php if (!empty($settings['title2'])) :   ?>
                                            <span class="d-block fw_800 n0-clr fs-two" data-aos="zoom-in-right" data-aos-duration="1200">
                                                <?php echo esc_html($settings['title2']) ?>
                                            </span>
                                        <?php endif ?>
                                        <?php if (!empty($settings['title3'])) :   ?>
                                            <span class="act4-clr fw_800 fs-two act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">
                                                <?php echo esc_html($settings['title3']) ?>
                                            </span>
                                        <?php endif ?>

                                    </span>
                                </span>
                                <?php if (!empty($settings['description'])) :   ?>
                                    <p class="nw1-clr description">
                                        <?php echo esc_html($settings['description']) ?>
                                    </p>
                                <?php endif ?>

                            </div>
                            <div class="browse-more" data-aos="zoom-in" data-aos-duration="2000">
                                <a href="<?php echo esc_url($settings['button_link']['url']) ?>" class="cmn__collection radius-circle p1-bg d-center position-relative">
                                    <span class="cmn-cont-box text-center position-relative">
                                        <span class="icon mb-1">
                                            <i class="ph-bold ph-arrow-up-right n4-clr fs-three"></i>
                                        </span>
                                        <?php if (!empty($settings['buttontext'])) :   ?>
                                            <span class="d-block n4-clr fw_700">
                                                <?php echo esc_html($settings['buttontext']) ?>
                                            </span>
                                        <?php endif ?>
                                    </span>
                                </a>
                            </div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/global-shape/gorsious-shape.png" alt="img" class="gorgiour-shape">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-xxl-6 g-4">
                            <?php foreach ($settings['list_repeater'] as $item) : ?>
                                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                    <div class="categori-bikev3-item">
                                        <?php if (!empty($item['list_image']['url'])) :   ?>
                                            <div class="thumb">
                                                <img src="<?php echo esc_url($item['list_image']['url']) ?>" alt="img">
                                            </div>
                                        <?php endif ?>

                                        <div class="content-wrap">
                                            <a href="<?php echo esc_url($item['list_link']['url']) ?>" class="doble-cont">
                                                <span class="cont titleproduct">
                                                    <?php echo esc_html($item['list_title']) ?>
                                                </span>
                                                <span class="cmn-arrows n0-bg">
                                                    <i class="ph-bold ph-arrow-up-right"></i>
                                                </span>
                                            </a>
                                            <a href="<?php echo esc_url($item['list_link']['url']) ?>" class="single-cont">
                                                <span class="cont titleproduct">
                                                    <?php echo esc_html($item['list_title']) ?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>












<?php
    }
} ?>