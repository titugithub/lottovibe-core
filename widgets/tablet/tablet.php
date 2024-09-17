<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Tablet_Widget extends \Elementor\Widget_Base
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
        return 'rt-winning-tablet';
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
        return __('SV Prize Tablet', 'rtelements');
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
    { }

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



        <div class="tablet-section tablet-custom-v1 n4-bg pt-120 overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section__title text-center tablet-section-title pb-120 position-relative">
                            <div class="kewta-btn d-inline-flex mb-xxl-8 mb-6 align-items-center">
                                <span class="kew-text act3-border p1-clr">
                                    Don't Miss Out
                                </span>
                                <div class="kew-arrow act3-bg">
                                    <div class="kt-one">
                                        <i class="ti ti-arrow-right n4-clr"></i>
                                    </div>
                                    <div class="kt-two">
                                        <i class="ti ti-arrow-right n4-clr"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="display-two d-block n0-clr" data-aos="zoom-in-down" data-aos-duration="1200">
                                Play for Life-Changing Winning Prizes
                            </span>
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/global/life-arrow.png" alt="img" class="tablet-arrow">
                        </div>
                    </div>
                </div>

            </div>
            <div class="overflow-hidden">
                <div class="tags-container relative"></div>
            </div>
        </div>










<?php
    }
} ?>