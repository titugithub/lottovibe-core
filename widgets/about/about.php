<?php

/**
 * Marquee widget class
 *
 */

use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Repeater;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class Rsaddon_Elementor_About_Widget extends \Elementor\Widget_Base
{
    //register css
    public function get_style_depends()
    {
        wp_register_style('rtelements-marquee-css', plugins_url('marquee-css/marquee.css', __FILE__));
        return [
            'rtelements-marquee-css'
        ];
    }

    /**
     * Get widget name.
     *    
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */

    public function get_name()
    {
        return 'rt-about';
    }

    /**
     * Get widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */

    public function get_title()
    {
        return esc_html__('SV About', 'rtelements');
    }

    /**
     * Get widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-gallery-grid';
    }


    public function get_categories()
    {
        return ['pielements_category'];
    }

    public function get_keywords()
    {
        return ['logo', 'clients', 'brand', 'parnter', 'image'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'headingcontent',
            [
                'label' => esc_html__('Heading', 'plugin-name')
            ]
        );


        $this->add_control(
            'iconimage',
            [
                'label' => esc_html__('Choose Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Bicycle Bliss Awaits', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Countdown to Two-', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Wheel', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title3',
            [
                'label' => esc_html__('Title Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Triumph!', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('The anticipation is building, and the thrill is about to hit its peak! We are excited to announce the kickoff of our exclusive Bike Lottery, ', 'plugin-name'),
            ]
        );

        $this->add_control(
            'buttontext',
            [
                'label' => esc_html__('Button Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Explore Our Offer', 'plugin-name'),
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
            'content',
            [
                'label' => esc_html__('Content', 'plugin-name')
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__('Background', 'plugin-name'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .bliss-bodywrap::before',
            ]
        );


        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_icon',
            [
                'label' => esc_html__('Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
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
            'list_description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'plugin-name'),
            ]
        );

        $this->add_control(
            'list_repeater',
            [
                'label' => esc_html__('Repeater List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ list_title }}}',
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
            'reborncontent',
            [
                'label' => esc_html__('Reborn', 'plugin-name')
            ]
        );

        $this->add_control(
            'reborn_show',
            [
                'label' => esc_html__('Show Reborn?', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'plugin-name'),
                'label_off' => esc_html__('Hide', 'plugin-name'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $this->end_controls_section();

        // ====================================Style========================================//

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
                'name'     => 'sdubtitle_typ',
                'selector' => '{{WRAPPER}} .subtitle',
        
            ]
        );
        
        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .subtitle' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'subtitle_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'titlestyleee',
             [
                'label' => esc_html__('Title', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'titlesddtyle_typ',
                'selector' => '{{WRAPPER}} span.display-four.d-block.n0-clr',
        
            ]
        );
        
        $this->add_control(
            'titlestyle_color',
            [
                'label'     => esc_html__('Color One', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.display-four.d-block.n0-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_control(
            'titlestyle_color2',
            [
                'label'     => esc_html__('Color One', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.act4-clr.act4-underline' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important;',
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
                'name'     => 'descripddtionstyle_typ',
                'selector' => '{{WRAPPER}} p.fs20.nw1-clr.mb-xxl-8.mb-xxl-6.mb-5',
            ]
        );
        
        $this->add_control(
            'descriptionstyle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p.fs20.nw1-clr.mb-xxl-8.mb-xxl-6.mb-5' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'descriptionstyle_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} p.fs20.nw1-clr.mb-xxl-8.mb-xxl-6.mb-5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'descriptionstyle_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} p.fs20.nw1-clr.mb-xxl-8.mb-xxl-6.mb-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
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
            'buttonstylecolor',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.kew-text.p1-bg.n4-clr' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} i.ti.ti-arrow-right.n4-clr' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'buttonstylebaccolor',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.kew-text.p1-bg.n4-clr' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .kew-arrow.p1-bg' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();



        $this->start_controls_section(
            'iconstyle',
            [
                'label' => esc_html__('Icon', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'iconstyle_color',
            [
                'label' => esc_html__('Background', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon.mb-xxl-6.mb-xl-5' => 'background: {{VALUE}} !important',
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
                'name'     => 'titleddstyle_typ',
                'selector' => '{{WRAPPER}} h3.counters.fw_700.mb-2.gap-2.d-flex.align-items-center.n500-color',

            ]
        );

        $this->add_control(
            'titlestyle_codlor1',
            [
                'label'     => esc_html__('Color One', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h3.counters.fw_700.mb-2.gap-2.d-flex.align-items-center.n500-color' => 'color: {{VALUE}} !important;',
                ],
            ]
        );


        $this->add_control(
            'titlestyle_colofr2',
            [
                'label'     => esc_html__('Color Two', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.act4-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );



        $this->end_controls_section();

        $this->start_controls_section(
            'desstyle',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'descripddtion_typ',
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
                'label' => esc_html__('Margin', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
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
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>


        <section class="bike-blisssection position-relative  pt-120 ">
            <!--Section Header-->
            <div class="container">
                <div class="row g-xl-4 pt-5 pt-lg-0 g-4 justify-content-between align-items-center mb-xxl-15 mb-xl-11 mb-11">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                        <div class="section__title">
                            <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                <?php if (!empty($settings['iconimage']['url'])) :   ?>
                                    <img src="<?php echo esc_url($settings['iconimage']['url']); ?>" alt="img">
                                <?php endif ?>
                                <?php if (!empty($settings['subtitle'])) :   ?>
                                    <h5 class="p1-clr fw_700 subtitle">
                                        <?php echo esc_html($settings['subtitle']) ?>
                                    </h5>
                                <?php endif ?>
                            </div>
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
                    <div class="col-xxl-5 col-xl-7 col-lg-7 col-md-6 col-sm-9">
                        <?php if (!empty($settings['description'])) :   ?>
                            <p class="fs20 nw1-clr mb-xxl-8 mb-xxl-6 mb-5">
                                <?php echo esc_html($settings['description']) ?>
                            </p>
                        <?php endif ?>
                        <?php if (!empty($settings['buttontext'])) :   ?>
                            <a href="<?php echo esc_url($settings['buttonlink']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                                <span class="kew-text p1-bg n4-clr" data-aos="zoom-in-left" data-aos-duration="900">
                                    <?php echo esc_html($settings['buttontext']) ?>
                                </span>
                                <div class="kew-arrow p1-bg" data-aos="zoom-in-left" data-aos-duration="1600">
                                    <div class="kt-one">
                                        <i class="ti ti-arrow-right n4-clr"></i>
                                    </div>
                                    <div class="kt-two">
                                        <i class="ti ti-arrow-right n4-clr"></i>
                                    </div>
                                </div>
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <div class="bliss-bodywrap">
                <div class="container">
                    <div class="row g-6 align-items-center">
                        <div class="col-lg-6">
                            <div class="bliss-counterwrap">
                                <?php foreach ($settings['list_repeater'] as $item) : ?>
                                    <div class="bliss-item" data-aos="zoom-in-left" data-aos-duration="1000">
                                        <div class="icon mb-xxl-6 mb-xl-5 mb-4 cmn-60 radius-circle d-center act4-bg">
                                            <?php \Elementor\Icons_Manager::render_icon($item['list_icon'], ['aria-hidden' => 'true']); ?>
                                        </div>
                                        <h3 class="counters fw_700 mb-2 gap-2 d-flex align-items-center  n500-color">
                                            <?php if (!empty($item['list_title'])) :   ?>
                                                <?php echo wp_kses($item['list_title'], wp_kses_allowed_html('post'))  ?>
                                            <?php endif ?>
                                        </h3>
                                        <?php if (!empty($item['list_description'])) :   ?>
                                            <p class="n2-clr fs18 description">
                                                <?php echo esc_html($item['list_description']) ?>
                                            </p>
                                        <?php endif ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bliss-thumbmain position-relative" data-aos="zoom-in-down" data-aos-duration="2000">
                                <?php if (!empty($settings['image']['url'])) :   ?>
                                    <div class="bliss-thumb">
                                        <img src="<?php echo esc_url($settings['image']['url']) ?>" alt="img">
                                    </div>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php if (!empty($settings['reborn_show'] == 'yes')) :   ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/global/wheel-trophy.png" alt="img" class="whell-trophy">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/win.png" alt="img" class="win-trophy">
            <?php endif ?>

        </section>






<?php
    }
}
