<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Faq_Widget extends \Elementor\Widget_Base
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
        return 'rt-faq';
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
        return __('SV Faq', 'rtelements');
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
            'buttoncontent',
            [
                'label' => esc_html__('Button', 'plugin-name')
            ]
        );


        $this->add_control(
            'button1',
            [
                'label' => esc_html__('Button One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Ticket Purchasing', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button2',
            [
                'label' => esc_html__('Button Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Draw and Winners', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button3',
            [
                'label' => esc_html__('Button Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Car Prizes', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button4',
            [
                'label' => esc_html__('Button Four', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Technical Support', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'contentone',
            [
                'label' => esc_html__('Content One', 'plugin-name')
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title1',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description1',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $this->add_control(
            'list_repeater1',
            [
                'label' => esc_html__('Content List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title1 }}}',
            ]
        );




        $this->end_controls_section();

        $this->start_controls_section(
            'contenttwo',
            [
                'label' => esc_html__('Content Two', 'plugin-name')
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title2',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description2',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $this->add_control(
            'list_repeater2',
            [
                'label' => esc_html__('Content List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title2 }}}',
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'contentthree',
            [
                'label' => esc_html__('Content Three', 'plugin-name')
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title3',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description3',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $this->add_control(
            'list_repeater3',
            [
                'label' => esc_html__('Content List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title3 }}}',
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'contentfour',
            [
                'label' => esc_html__('Content Four', 'plugin-name')
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title4',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description4',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $this->add_control(
            'list_repeater4',
            [
                'label' => esc_html__('Content List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title4 }}}',
            ]
        );



        $this->end_controls_section();

        // ========================Style===========================//

        $this->start_controls_section(
             'buttonstyle',
             [
                'label' => esc_html__('Button', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'spifdfnner_color',
            [
                'label' => esc_html__( ' Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .question-tab .tablinks .nav-links .tablink' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'spiffddnnfer_color',
            [
                'label' => esc_html__( ' Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .question-tab .tablinks .nav-links .tablink' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'spifdnner_color',
            [
                'label' => esc_html__( 'Active Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .question-tab .tablinks .nav-links.active .tablink' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'spiffddnner_color',
            [
                'label' => esc_html__( 'Active Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .question-tab .tablinks .nav-links.active .tablink' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'contentstyle',
             [
                'label' => esc_html__('Content', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'spinfdner_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-single .header-area .accordion-btn' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'spinfdnfer_color',
            [
                'label' => esc_html__( 'Active Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-single.active' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .accordion-single.active button' => 'background: {{VALUE}} !important',
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

        <script>
            // Custom Tabs //
            jQuery(document).ready(function($) {
                $(".tablinks .nav-links").each(function() {
                    var targetTab = $(this).closest(".singletab");
                    targetTab.find(".tablinks .nav-links").each(function() {
                        var navBtn = targetTab.find(".tablinks .nav-links");
                        navBtn.click(function() {
                            navBtn.removeClass("active");
                            $(this).addClass("active");
                            var indexNum = $(this).closest("li").index();
                            var tabcontent = targetTab.find(".tabcontents .tabitem");
                            $(tabcontent).removeClass("active");
                            $(tabcontent).eq(indexNum).addClass("active");
                        });
                    });
                });
                // Custom Tabs //

                // tabLinks add active  //
                $(".tabLinks .nav-links").on("mouseenter", function() {
                    $(this).addClass("active");
                    $(".tabLinks .nav-links").not(this).removeClass("active");
                });
                // tabLinks add active  //

                // custom Accordion //
                $(".accordion-single .header-area").on("click", function() {
                    if ($(this).closest(".accordion-single").hasClass("active")) {
                        $(this).closest(".accordion-single").removeClass("active");
                        $(this).next(".content-area").slideUp();
                    } else {
                        $(".accordion-single").removeClass("active");
                        $(this).closest(".accordion-single").addClass("active");
                        $(".content-area").not($(this).next(".content-area")).slideUp();
                        $(this).next(".content-area").slideToggle();
                    }
                });
            })
        </script>




        <section class="question-section  pb-120">
            <!--Question body-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="question-wrapper1">
                            <div class="singletab">
                                <div class="question-tab mb-xxl-15 mb-xl-10 mb-lg-8 mb-7">
                                    <ul class="tablinks list-unstyled">
                                        <li class="nav-links active">
                                            <button class="tablink">
                                                <?php echo esc_html($settings['button1']) ?>
                                            </button>
                                        </li>
                                        <li class="nav-links">
                                            <button class="tablink">
                                                <?php echo esc_html($settings['button2']) ?>
                                            </button>
                                        </li>
                                        <li class="nav-links">
                                            <button class="tablink">
                                                <?php echo esc_html($settings['button3']) ?>
                                            </button>
                                        </li>
                                        <li class="nav-links">
                                            <button class="tablink">
                                                <?php echo esc_html($settings['button4']) ?>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tabcontents">
                                    <div class="tabitem active">
                                        <div class="accordion-section">

                                            <?php foreach ($settings['list_repeater1'] as $item) : ?>
                                                <div class="accordion-single">
                                                    <h5 class="header-area">
                                                        <?php if (!empty($item['title1'])) :   ?>
                                                            <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                                <span class="fs20 fw_700 n4-clr d-block">
                                                                    <?php echo esc_html($item['title1']) ?>
                                                                </span>
                                                                <span class="faq-icon">
                                                                    <i class="ph-bold ph-caret-down n4-clr"></i>
                                                                </span>
                                                            </button>
                                                        <?php endif ?>

                                                    </h5>
                                                    <div class="content-area">
                                                        <?php if (!empty($item['description1'])) :   ?>
                                                            <div class="content-body ">
                                                                <p>
                                                                    <?php echo esc_html($item['description1']) ?>
                                                                </p>
                                                            </div>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>


                                    <div class="tabitem">
                                        <div class="accordion-section">

                                            <?php foreach ($settings['list_repeater2'] as $item) : ?>
                                                <div class="accordion-single">
                                                    <?php if (!empty($item['title2'])) :   ?>
                                                        <h5 class="header-area">
                                                            <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                                <span class="fs20 fw_700 n4-clr d-block">
                                                                    <?php echo esc_html($item['title2']) ?>
                                                                </span>
                                                                <span class="faq-icon">
                                                                    <i class="ph-bold ph-caret-down n4-clr"></i>
                                                                </span>
                                                            </button>
                                                        </h5>
                                                    <?php endif ?>
                                                    <?php if (!empty($item['description2'])) :   ?>
                                                        <div class="content-area">
                                                            <div class="content-body ">
                                                                <p>
                                                                    <?php echo esc_html($item['description2']) ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    <?php endif ?>

                                                </div>
                                            <?php endforeach; ?>


                                        </div>
                                    </div>


                                    <div class="tabitem">
                                        <div class="accordion-section">
                                            <?php foreach ($settings['list_repeater3'] as $item) : ?>
                                                <div class="accordion-single">
                                                    <?php if (!empty($item['title3'])) :   ?>
                                                        <h5 class="header-area">
                                                            <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                                <span class="fs20 fw_700 n4-clr d-block">
                                                                    <?php echo esc_html($item['title3']) ?>
                                                                </span>
                                                                <span class="faq-icon">
                                                                    <i class="ph-bold ph-caret-down n4-clr"></i>
                                                                </span>
                                                            </button>
                                                        </h5>
                                                    <?php endif ?>
                                                    <?php if (!empty($item['description3'])) :   ?>
                                                        <div class="content-area">
                                                            <div class="content-body ">
                                                                <p>
                                                                    <?php echo esc_html($item['description3']) ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>


                                    <div class="tabitem">
                                        <div class="accordion-section">
                                            <?php foreach ($settings['list_repeater4'] as $item) : ?>
                                                <div class="accordion-single">
                                                    <?php if (!empty($item['title4'])) :   ?>
                                                        <h5 class="header-area">
                                                            <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                                <span class="fs20 fw_700 n4-clr d-block">
                                                                    <?php echo esc_html($item['title4']) ?>
                                                                </span>
                                                                <span class="faq-icon">
                                                                    <i class="ph-bold ph-caret-down n4-clr"></i>
                                                                </span>
                                                            </button>
                                                        </h5>
                                                    <?php endif; ?>
                                                    <?php if (!empty($item['description4'])) :   ?>
                                                        <div class="content-area">
                                                            <div class="content-body ">
                                                                <p>
                                                                    <?php echo esc_html($item['description4']) ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Question body-->
        </section>








<?php
    }
} ?>