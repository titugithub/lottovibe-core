<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Sponsor_Widget extends \Elementor\Widget_Base
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
        return 'rt-sponsor';
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
        return __('SV Sponsor', 'rtelements');
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







        <div class="sponsor-section1  overflow-hidden">



            <!--Sponsor boydss-->
            <div class="container">


                <div class="sponsor-borderwrap">

                    <div class="swiper sponsor-wrap">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="sponsor-items">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/s1.png" alt="sponsors-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-items">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/s2.png" alt="sponsors-img">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-items">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/s3.png" alt="sponsors-img">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sponsor-items">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/s4.png" alt="sponsors-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sponsor boyds-->
        </div>











<?php
    }
} ?>