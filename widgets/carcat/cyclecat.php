<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Cyclecat_Widget extends \Elementor\Widget_Base
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
        return 'rt-cyclecat';
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
        return __('SV Cycle Category', 'rtelements');
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


        // Repeater
        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
            'list_image',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

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
                'label' => esc_html__('Add Item', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

                'title_field' => '{{{ list_title }}}',
            ]
        );



        $this->end_controls_section();

        // =======================Style============================//

        $this->start_controls_section(
             'style',
             [
                'label' => esc_html__('Style', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );


        $this->add_control(
            'titlel_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content-wrap .single-cont .cont' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'titlel_cfdolor',
            [
                'label' => esc_html__( 'Hover Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .categori-bikev3-item:hover .content-wrap .cont' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'titlebac_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content-wrap' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->add_control(
            'titlebach_color',
            [
                'label' => esc_html__( 'Hover Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .categori-bikev3-item:hover .content-wrap' => 'background: {{VALUE}} !important',
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


        <section class="category-v5-banner">
            <div class="container">
                <div class="row g-xxl-6 g-5">
                    <?php foreach ($settings['list_repeater'] as $item) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-duration="1200">
                            <div class="categori-bikev3-item bicycle-cate-item">
                                <div class="bithumb">
                                    <?php if (!empty($item['list_image']['url'])) :   ?>
                                        <img src="<?php echo esc_html($item['list_image']['url']) ?>" alt="img">
                                    <?php endif ?>
                                </div>
                                <div class="content-wrap">
                                    <a href="<?php echo esc_html($item['list_link']['url']) ?>" class="doble-cont">
                                        <?php if (!empty($item['list_title'])) :   ?>
                                            <span class="cont">
                                                <?php echo esc_html($item['list_title']) ?>
                                            </span>
                                        <?php endif ?>
                                        <span class="cmn-arrows n0-bg">
                                            <i class="ph-bold ph-arrow-up-right"></i>
                                        </span>
                                    </a>
                                    <a href="<?php echo esc_html($item['list_link']['url']) ?>" class="single-cont">
                                        <?php if (!empty($item['list_title'])) :   ?>
                                            <span class="cont">
                                                <?php echo esc_html($item['list_title']) ?>
                                            </span>
                                        <?php endif ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>


<?php
    }
} ?>