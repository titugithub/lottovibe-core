<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Barcode_Widget extends \Elementor\Widget_Base
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
        return 'rt-barcode';
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
        return __('SV Barcode', 'rtelements');
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
            'barcodebottmtext',
            [
                'label' => esc_html__('Barcode Bottom Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
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
            'lilnk1',
            [
                'label' => esc_html__('Link One', 'plugin-name'),
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
            'lilnk2',
            [
                'label' => esc_html__('Link Two', 'plugin-name'),
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
            'imageleft',
            [
                'label' => esc_html__('Choose Left Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
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




        <div class="smart-phone   overflow-hidden">
            <div class="container">
                <div class="row g-6 justify-content-between align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-10">
         
                      
                        <?php if (!empty($settings['barcodebottmtext'])) :   ?>
                            <div class="d-flex algin-items-center gap-2 mb-xxl-6 mb-xl-5 mb-4" data-aos="zoom-in-up" data-aos-duration="1300">
                                <span class="fs20 fw_700 nw1-clr">
                                    <?php echo esc_html($settings['barcodebottmtext']) ?>
                                </span>
                                <i class="ph-bold ph-arrow-up-right fs-five n0-clr"></i>
                            </div>
                        <?php endif ?>
                        <?php if (!empty($settings['subtitle'])) :   ?>
                            <span class="display-three fw_800 nw1-clr mb-xxl-5 mb-3" data-aos="zoom-in-down" data-aos-duration="1400">
                                <?php echo esc_html($settings['subtitle']) ?>
                            </span>
                        <?php endif ?>

                        <p class="fs-four fw_600 mb-xxl-10 mb-xl-7 mb-lg-5 mb-5 n0-clr">
                            <?php if (!empty($settings['title1'])) :   ?>
                                <?php echo esc_html($settings['title1']) ?>
                            <?php endif ?>
                            <?php if (!empty($settings['title2'])) :   ?>
                                <span class="d-block fs-four fw_600 n0-clr">
                                    <?php echo esc_html($settings['title2']) ?>
                                </span>
                            <?php endif ?>
                        </p>
                        <div class="d-flex algin-items-center gap-xxl-6 gap-xl-4 gap-2 flex-wrap" data-aos="zoom-in-up" data-aos-duration="1600">
                            <?php if (!empty($settings['image1']['url'])) :   ?>
                                <a href="<?php echo esc_url($settings['lilnk1']['url']) ?>">
                                    <img src="<?php echo esc_url($settings['image1']['url']) ?>" alt="img">
                                </a>
                            <?php endif ?>
                            <?php if (!empty($settings['image2']['url'])) :   ?>
                                <a href="<?php echo esc_url($settings['lilnk2']['url']) ?>">
                                    <img src="<?php echo esc_url($settings['image2']['url']) ?>" alt="img">
                                </a>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12">
                        <div class="smar-phonewrap">
                            <?php if (!empty($settings['imageleft']['url'])) :   ?>
                                <div class="phone-thumb" data-aos="zoom-in-down" data-aos-duration="1200">
                                    <img src="<?php echo esc_url($settings['imageleft']['url']) ?>" alt="img">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
    }

    protected function _content_template() {
        ?>
        <#
        var qrText = settings.qr_text;
        #>
        <div class="qr-code-container" data-text="{{ qrText }}"></div>
      









<?php
    }
} ?>