<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Step_Widget extends \Elementor\Widget_Base
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
        return 'rt-step';
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
        return __('SV Step', 'rtelements');
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
            'topcontent',
            [
                'label' => esc_html__('Top Section', 'plugin-name')
            ]
        );

        $this->add_control(
            'subtitleicon',
            [
                'label' => esc_html__('Choose Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );


        $this->add_control(
            'subtitile',
            [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default Subtitle', 'plugin-name'),
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
            'iconheadeing',
            [
                'label' => esc_html__('Choose Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );



        $this->add_control(
            'more_opfdtions',
            [
                'label' => esc_html__('Video', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'videoimage',
            [
                'label' => esc_html__('Choose Video Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

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
            'bottomcontent',
            [
                'label' => esc_html__('Bottom Section', 'plugin-name')
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'stepsubtitle',
            [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('STEP_01', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'steptitle1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Choose', 'plugin-name'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'steptitle2',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Prize', 'plugin-name'),
                'label_block' => true,
            ]
        );



        $repeater->add_control(
            'stepdescription',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $repeater->add_control(
            'stepnumber',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('01', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'list_repeater',
            [
                'label' => esc_html__('Step List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

                'title_field' => '{{{ stepsubtitle }}}',
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




        <section class="howit-work-section position-relative pt-120 pb-120">
            <!--Section Header-->
            <div class="container">
                <div class="row g-xl-4 pt-5 pt-lg-0 g-4 justify-content-between align-items-center mb-xxl-15 mb-xl-11 mb-11">
                    <div class="col-xl-5 col-lg-6 col-md-7">
                        <div class="section__title">
                            <?php if (!empty($settings['subtitile'])) :   ?>
                                <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                    <?php if (!empty($settings['subtitleicon']['url'])) :   ?>
                                        <img src="<?php echo esc_url($settings['subtitleicon']['url']) ?>" alt="img">
                                    <?php endif ?>
                                    <h5 class="p1-clr fw_700">
                                        <?php echo esc_html($settings['subtitile']) ?>
                                    </h5>
                                </div>
                            <?php endif ?>

                            <span class="display-four d-block n0-clr">
                                <?php if (!empty($settings['title1'])) :   ?>
                                    <?php echo esc_html($settings['title1']) ?>
                                <?php endif ?>
                                <span class="d-flex align-items-center gap-2">
                                    <?php if (!empty($settings['title2'])) :   ?>
                                        <span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
                                            <?php echo esc_html($settings['title2']) ?>
                                        </span>
                                    <?php endif ?>
                                    <?php if (!empty($settings['title3'])) :   ?>
                                        <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">
                                            <?php echo esc_html($settings['title3']) ?>
                                        </span>
                                    <?php endif ?>

                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-1 d-lg-block d-none">
                        <?php if (!empty($settings['iconheadeing']['url'])) :   ?>
                            <img src="<?php echo esc_url($settings['iconheadeing']['url']) ?>" alt="img" class="m-howarrow">
                        <?php endif ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                        <div class="howit-video position-relative">
                            <?php if (!empty($settings['videoimage']['url'])) :   ?>
                                <img src="<?php echo esc_url($settings['videoimage']['url']) ?>" alt="img">
                            <?php endif ?>
                            <a href="<?php echo esc_url($settings['videolink']['url']) ?>" class="bn-vid popup-video">
                                <i class="ti ti-player-play-filled act3-clr fs-five"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Section Header-->

            <!--Work Body-->
            <div class="container">
                <div class="row g-6">
                    <?php foreach ($settings['list_repeater'] as $item) : ?>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="work-item1 position-relative">
                                <?php if (!empty($item['stepsubtitle'])) :   ?>
                                    <span class="text-uppercase p1-clr fw_700 fs20 d-block mb-xxl-5 mb-3">
                                        <?php echo esc_html($item['stepsubtitle']) ?>
                                    </span>
                                <?php endif ?>

                                <h2 class="n0-clr mb-xxl-11 mb-xl-8 mb-lg-6 mb-5">
                                    <?php if (!empty($item['steptitle1'])) :   ?>
                                        <span class="d-block">
                                            <?php echo esc_html($item['steptitle1']) ?>
                                        </span>
                                    <?php endif ?>
                                    <?php if (!empty($item['steptitle2'])) :   ?>
                                        <span>
                                            <?php echo esc_html($item['steptitle2']) ?>
                                        </span>
                                    <?php endif ?>
                                </h2>
                                <?php if (!empty($item['stepdescription'])) :   ?>
                                    <p class="fs18 nw4-clr">
                                        <?php echo wp_kses($item['stepdescription'], wp_kses_allowed_html('post'))  ?>
                                    </p>
                                <?php endif ?>
                                <?php if (!empty($item['stepnumber'])) :   ?>
                                    <span class="number-shadow">
                                        <?php echo esc_html($item['stepnumber']) ?>
                                    </span>
                                <?php endif ?>

                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <!--Work Body-->
        </section>









<?php
    }
} ?>