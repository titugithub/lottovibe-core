<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Bannerbike_Widget extends \Elementor\Widget_Base
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
        return 'rt-bannerbike';
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
        return __('SV Banner Bike', 'rtelements');
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
                'label' => esc_html__('Subtitle & Title', 'plugin-name')
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
            'subtitleimage',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

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
            'maintitle',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );




        $this->end_controls_section();


        $this->start_controls_section(
            'buttoncontent',
            [
                'label' => esc_html__('Button', 'plugin-name')
            ]
        );

        $this->add_control(
            'buttononetext',
            [
                'label' => esc_html__('Button One Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'buttonone_link',
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
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'buttontwo_link',
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
            'imagecountercontent',
            [
                'label' => esc_html__('Images & Counter', 'plugin-name')
            ]
        );



        $this->add_control(
            'counterimage',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'numberone',
            [
                'label' => esc_html__('Number One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'titleone',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'numbertwo',
            [
                'label' => esc_html__('Number Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'titletwo',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();





        $this->start_controls_section(
            'strokecustomercontent',
            [
                'label' => esc_html__('Stroke Text & Customer Review', 'plugin-name')
            ]
        );

        $this->add_control(
            'StrokeText',
            [
                'label' => esc_html__('Stroke Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'Textone',
            [
                'label' => esc_html__('Text One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'texttwoo',
            [
                'label' => esc_html__('Text Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'textthreee',
            [
                'label' => esc_html__('Text Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'textfour',
            [
                'label' => esc_html__('Text Four', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'review',
            [
                'label' => esc_html__('Customer Review', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
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
            'ratingnumbet',
            [
                'label' => esc_html__('Rating Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'customernumber',
            [
                'label' => esc_html__('Customer Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'customertext',
            [
                'label' => esc_html__('Customer Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'imageslide',
            [
                'label' => esc_html__('Image Slide', 'plugin-name')
            ]
        );



        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'imageslider',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'list_repeater',
            [
                'label' => esc_html__('Bike Image List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

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





        <div class="banner-section-v3 pt-70-fixed n4-bg position-relative overflow-hidden">
            <!--Banner Content -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="banner-content-v2 banner-content-v3 pt-xxl-20 pt-12 mt-6">
                            <div class="bn-content-box">
                                <div class="display-two position-relative cus-z1 text-capitalize n0-clr mb-xxl-5 mb-3">
                                    <span class="d-flex text-capitalize align-items-center mb-3 n0-clr gap-3 justify-content-center text-uppercase" data-aos="zoom-in-up" data-aos-duration="2200">
                                        <?php if (!empty($settings['textone'])) :   ?>
                                            <span class="fw_800 text-capitalize d-block"><?php echo esc_html($settings['textone']) ?></span>
                                        <?php endif ?>
                                        <?php if (!empty($settings['subtitleimage']['url'])) :   ?>
                                            <img src="<?php echo esc_url($settings['subtitleimage']['url']) ?>" alt="img" class="bn-v2textcar1">
                                        <?php endif ?>
                                        <?php if (!empty($settings['textone'])) :   ?>
                                            <span class="fw_800 act4-clr d-block act4-underline"><?php echo esc_html($settings['texttwo']) ?></span>
                                        <?php endif ?>
                                    </span>
                                    <span class="d-flex nw1-clr text-capitalize justify-content-center align-items-center gap-3" data-aos="zoom-in-left" data-aos-duration="2400">
                                        <?php if (!empty($settings['textthree'])) :   ?>
                                            <?php echo esc_html($settings['textthree']) ?>
                                        <?php endif ?>
                                    </span>
                                </div>
                                <?php if (!empty($settings['maintitle'])) :   ?>
                                    <p class="nw1-clr fs20 max-520 m-auto mb-xxl-10 mb-lg-8 mb-5 text-center" data-aos="fade-down-right" data-aos-duration="1500">
                                        <?php echo esc_html($settings['maintitle']) ?>
                                    </p>
                                <?php endif ?>

                                <div class="d-flex flex-wrap cus-z1 position-relative flex-md-nowrap mb-xxl-12 mb-xl-10 mb-8 align-items-center justify-content-center gap-xl-8 gap-3 flex-wrap w-100">
                                    <?php if (!empty($settings['buttononetext'])) :   ?>
                                        <a href="<?php echo esc_url($settings['buttonone_link']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">

                                            <span class="kew-text n4-clr act3-bg">
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
                                        <a href="<?php echo esc_url($settings['buttontwo_link']['url']) ?>" class="how-cont nw1-clr fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                            <?php echo esc_html($settings['buttontwotext']) ?>
                                        </a>
                                    <?php endif ?>

                                </div>
                                <div class="bnv3-countedwrap d-flex align-items-center justify-content-between">
                                    <div class="employed-countv3">
                                        <div class="employed-itemv3 mb-xxl-6 mb-4">
                                            <span class="display-five n0-clr">
                                                175<span class="act4-clr">0</span><span class="act4-clr">+</span>
                                            </span>
                                            <span class="nw1-clr fs18 fw_600 mt-1">
                                                Verified Users
                                            </span>
                                        </div>
                                        <div class="employed-itemv3 mb-xxl-6 mb-4">
                                            <span class="display-five n0-clr">
                                                15<span class="act4-clr">k</span>
                                            </span>
                                            <span class="nw1-clr fs18 fw_600 mt-1">
                                                Years on the market
                                            </span>
                                        </div>
                                    </div>
                                    <div class="win-bn3-thumb">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/win.png" alt="win">
                                    </div>
                                    <div class="banner-content-v1customer">
                                        <ul class="customer-review cmn-style-flex act3-border radius100 py-xxl-2 py-2 px-2">
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/customer1.png" alt="img">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/customer2.png" alt="img">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/customer3.png" alt="img">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/customer4.png" alt="img">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                                    <span class="d-grid customer-ratting text-center p-2 p1-bg align-items-center justify-content-center">
                                                        <i class="ti ti-star-filled n4-clr"></i>
                                                        <span class="d-block fs-eight fw_700 n4-clr">
                                                            4.7
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="nw2-clr fs-eight fw_700 text-uppercase mt-xxl-4 mt-3">
                                            <span class="act3-clr fs-five">70k</span> CUSTOMER REVIEW
                                        </span>
                                    </div>
                                </div>
                                <div class="banner-bike-animation position-relative">
                                    <div class="banner-bike-onewrap act3-bg">
                                        <div class="banner-oneslider">
                                            <div class="banner-bikeslide-wrap swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="bn-carslide-item">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/bannerv3-slide-bike1.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="bn-carslide-item">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/bannerv3-slide-bike2.png.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="bn-carslide-item">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/bannerv3-slide-bike3.png" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-bg2">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Content -->

            <!--Text Animation -->
            <div class="banner-textanimation">
                <div class="textcircle">
                    <div class="text">
                        <p>
                            <span>Explore</span> <span>More</span> <span>Explore</span> <span>More</span>
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