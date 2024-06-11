<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Footersection_Widget extends \Elementor\Widget_Base
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
        return 'rt-footersection';
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
        return __('SV Footer', 'rtelements');
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
            'subtitlecontent',
            [
                'label' => esc_html__('Subtitle', 'plugin-name')
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
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'titlecontent',
            [
                'label' => esc_html__('Title', 'plugin-name')
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
            'title4',
            [
                'label' => esc_html__('Title Four', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'mailcontent',
            [
                'label' => esc_html__('Mail', 'plugin-name')
            ]
        );

        $this->add_control(
            'textonemail',
            [
                'label' => esc_html__('Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'mailtext',
            [
                'label' => esc_html__('Mail', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'buttontextmail',
            [
                'label' => esc_html__('Button Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'buttonlmaillink',
            [
                'label' => esc_html__('Button Link', 'plugin-name'),
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
            'buttoncontent',
            [
                'label' => esc_html__('Button', 'plugin-name')
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
            'buttonlink',
            [
                'label' => esc_html__('Button Link', 'plugin-name'),
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
            'imagecontent',
            [
                'label' => esc_html__('Image', 'plugin-name')
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'menucontent',
            [
                'label' => esc_html__('Menu', 'plugin-name')
            ]
        );

        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'textt',
            [
                'label' => esc_html__('Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'textlink',
            [
                'label' => esc_html__('Text Link', 'plugin-name'),
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
                'label' => esc_html__('Menu List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ textt }}}',
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'socialcontent',
            [
                'label' => esc_html__('Social', 'plugin-name')
            ]
        );

        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'social_icon',
            [
                'label' => esc_html__('Social Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_control(
            'sociallink',
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
            'list_repeater2',
            [
                'label' => esc_html__('Social List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ sociallink }}}',
            ]
        );





        $this->end_controls_section();

        $this->start_controls_section(
            'privacycontent',
            [
                'label' => esc_html__('Privacy Policy', 'plugin-name')
            ]
        );

        $this->add_control(
            'privacytext1',
            [
                'label' => esc_html__('Text One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'privacylink1',
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
            'privacytext2',
            [
                'label' => esc_html__('Text Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'privacylink2',
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


        $this->end_controls_section();

        $this->start_controls_section(
            'copyrightcontent',
            [
                'label' => esc_html__('Copyright', 'plugin-name')
            ]
        );

        $this->add_control(
            'copydes',
            [
                'label' => esc_html__('Copyright Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
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




        <footer class="footer-section1 n5-bg position-relative overflow-hidden">
            <div class="footer-top pt-120 pb-120">
                <div class="container">
                    <div class="row g-6 align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-content1 position-relative cus-z1">
                                <div class="d-flex align-items-center gap-xxl-3 gap-2 mb-xxl-24 mb-4">
                                    <?php if (!empty($settings['subtitle_icon']['url'])) :   ?>
                                        <img src="<?php echo esc_url($settings['subtitle_icon']['url']) ?>" alt="img">
                                    <?php endif ?>
                                    <?php if (!empty($settings['subtitle'])) :   ?>
                                        <span class="nw1-clr fw_700 fs20">
                                            <?php echo esc_html($settings['subtitle']) ?>
                                        </span>
                                    <?php endif ?>
                                </div>
                                <div class="section__title mb-xxl-15 mb-xl-10 mb-8">
                                    <span class="display-one d-block n0-clr">
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
                                        <?php if (!empty($settings['title4'])) :   ?>
                                            <?php echo esc_html($settings['title4']) ?>
                                        <?php endif ?>
                                    </span>
                                </div>
                                <div class="say-helow pb-xxl-5 pb-5 d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                    <div class="mails">
                                        <?php if (!empty($settings['textonemail'])) :   ?>
                                            <span class="nw4-clr d-block mb-xxl-2 mb-0">
                                                <?php echo esc_html($settings['textonemail']) ?>
                                            </span>
                                        <?php endif ?>
                                        <?php if (!empty($settings['mailtext'])) :   ?>
                                            <a href="#0" class="fs20 fw_600 nw1-clr">
                                                <?php echo esc_html($settings['mailtext']) ?>
                                            </a>
                                        <?php endif ?>
                                    </div>
                                    <?php if (!empty($settings['buttonlmaillink']['url'])) :   ?>
                                        <a href="<?php echo esc_url($settings['buttonlmaillink']['url']) ?>" class="kewta-btn d-inline-flex align-items-center">
                                            <span class="kew-text p1-bg n4-clr">
                                                <?php echo esc_html($settings['buttontextmail']) ?>
                                                <i class="ph-bold ph-arrow-up-right n4-clr"></i>
                                            </span>
                                        </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="footer-thumbv1-wrap">
                                <div class="footer-browse-btn">
                                    <a href="<?php echo esc_url($settings['buttonlink']['url']) ?>" class="cmn__collection radius-circle act4-bg d-center position-relative">
                                        <span class="cmn-cont-box text-center position-relative">
                                            <span class="icon mb-1">
                                                <i class="ph-bold ph-arrow-up-right n0-clr fs-three"></i>
                                            </span>
                                            <span class="d-block n0-clr fw_700">
                                                <?php echo esc_html($settings['buttontext']) ?>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="animation-boxfooter">
                                    <div class="video-bg">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <?php if (!empty($settings['image']['url'])) :   ?>
                                    <div class="footer-thumb1" data-aos="fade-down-left" data-aos-duration="1500">
                                        <img src="<?php echo esc_url($settings['image']['url']) ?>" alt="img">
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-botttom cmn-bb pb-xxl-8 pb-xl-6 pb-4 position-relative cus-z1">
                <div class="container">
                    <div class="d-flex flex-wrap gap-4 align-items-center justify-content-md-between justify-content-center">
                        <ul class="linkfooter flex-wrap justify-content-center list-unstyled">
                            <?php foreach ($settings['list_repeater'] as $item) : ?>
                                <li>
                                    <?php if (!empty($item['textt'])) :   ?>
                                        <a href="<?php echo esc_url($item['textlink']['url']) ?>">
                                            <?php echo esc_html($item['textt']) ?>
                                        </a>
                                    <?php endif ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="social d-flex align-items-center gap-3 list-unstyled">
                            <?php foreach ($settings['list_repeater2'] as $item) : ?>
                                <li>
                                    <a href="<?php echo esc_url($item['sociallink']['url']) ?>">
                                        <?php \Elementor\Icons_Manager::render_icon($item['social_icon'], ['aria-hidden' => 'true']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="privacy-policy-footer pb-xxl-8 pb-xl-6 pb-4 pt-xxl-8 pt-xl-6 pt-4 position-relative cus-z1">
                <div class="container">
                    <div class="d-flex flex-wrap gap-3 align-items-center justify-content-md-between justify-content-center">
                        <ul class="pri-link d-flex align-items-center gap-xxl-6 gap-sm-6 gap-3 list-unstyled">
                            <li>
                                <a href="<?php echo esc_url($settings['privacylink1']['url']) ?>">
                                    <?php echo esc_html($settings['privacytext1']) ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url($settings['privacylink2']['url']) ?>">
                                    <?php echo esc_html($settings['privacytext2']) ?>
                                </a>
                            </li>
                        </ul>
                        <p class="footer-copyright flex-wrap justify-content-center">
                            <?php echo wp_kses($settings['copydes'], wp_kses_allowed_html('post'))  ?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>




<?php
    }
} ?>