<?php

/**
 * Icon List
 *
 */

use Elementor\Repeater;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;

defined('ABSPATH') || die();

class RTS_Features_List_Widget extends \Elementor\Widget_Base
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
        return 'rtfeatureslist';
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
        return esc_html__('SV Features List', 'rsaddon');
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
        return 'glyph-icon flaticon-price';
    }


    public function get_categories()
    {
        return ['rsaddon_category'];
    }

    public function get_keywords()
    {
        return ['list', 'title', 'features', 'heading', 'plan'];
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
                'label' => esc_html__('Subtitle Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('How it works', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => esc_html__('Title One', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__(' Your Ultimate', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => esc_html__('Title Two', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__(' Guide to', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title3',
            [
                'label' => esc_html__('Title Three', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Winning!', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'iconrightimage',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'videocontent',
            [
                'label' => esc_html__('Video', 'plugin-name')
            ]
        );


        $this->add_control(
            'videoimage',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'videolink',
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


        $this->end_controls_section();


        $this->start_controls_section(
            'featurecontent',
            [
                'label' => esc_html__('Featues', 'plugin-name')
            ]
        );

        // Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_number',
            [
                'label' => esc_html__('Number', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('1', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_subtext',
            [
                'label' => esc_html__('Sub Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'plugin-name'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_icon',
            [
                'label' => esc_html__('Icon', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::ICONS,

            ]
        );

        $repeater->add_control(
            'listimage',
            [
                'label' => esc_html__('Choose Image', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );

        $repeater->add_control(
            'list_title',
            [
                'label' => esc_html__('Text', 'plugin-name'),
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
                'label' => esc_html__('Feature List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ list_title }}}',
            ]
        );



        $this->end_controls_section();


        // ===================================Style==============================//


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
                'name'     => 'subtitle_typ',
                'selector' => '{{WRAPPER}} h5.s1-clr.fw_700',
        
            ]
        );
        
        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h5.s1-clr.fw_700' => 'color: {{VALUE}} !important;',
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
                    '{{WRAPPER}} h5.s1-clr.fw_700' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
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
                    '{{WRAPPER}} h5.s1-clr.fw_700' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
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
                'name'     => 'titlestyle_typ',
                'selector' => '{{WRAPPER}} span.display-four.d-block.n4-clr',
        
            ]
        );
        
        $this->add_control(
            'titlestyle_color',
            [
                'label'     => esc_html__('Color One', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.display-four.d-block.n4-clr' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_control(
            'titlestyle_colo2r',
            [
                'label'     => esc_html__('Color Two', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.act4-clr.act4-underline' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'videostyle',
             [
                'label' => esc_html__('Video', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'videostyle_color',
            [
                'label' => esc_html__( 'Icon Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} i.ti.ti-player-play-filled.act3-clr.fs-five' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'videostyle_baccolor',
            [
                'label' => esc_html__( 'Icon Background Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .howit-video .bn-vid' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
             'featurestyle',
             [
                'label' => esc_html__('Feature', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'more_options1',
            [
                'label' => esc_html__( 'Text', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'text_typ',
                'selector' => '{{WRAPPER}} h4.n4-clr.mb-xxl-4.mb-3.fw_700',
        
            ]
        );
        
        $this->add_control(
            'text_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h4.n4-clr.mb-xxl-4.mb-3.fw_700' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'text_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} h4.n4-clr.mb-xxl-4.mb-3.fw_700' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'text_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} h4.n4-clr.mb-xxl-4.mb-3.fw_700' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
            ]
        );
        
        $this->add_control(
            'more_options2',
            [
                'label' => esc_html__( 'Content', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
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
                    '{{WRAPPER}} p.fs18.n3-clr span' => 'color: {{VALUE}} !important;',
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



    }



    protected function render()
    {
        $settings = $this->get_settings_for_display(); ?>






        <section class="howit-work-sectionv5 position-relative  pt-120 pb-120">
            <!--Section Header-->
            <div class="container mb-xxl-11 mb-lg-10 mb-4">
                <div class="row g-xl-4 pt-5 pt-lg-0 g-4 justify-content-md-between align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-7">
                        <div class="section__title text-md-start text-center">
                            <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap justify-content-md-start justify-content-center align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                <?php if (!empty($settings['iconimage']['url'])) :   ?>
                                    <img src="<?php echo esc_url($settings['iconimage']['url']) ?>" alt="img">
                                <?php endif ?>
                                <?php if (!empty($settings['subtitle'])) :   ?>
                                    <h5 class="s1-clr fw_700">
                                        <?php echo esc_html($settings['subtitle']) ?>
                                    </h5>
                                <?php endif ?>
                            </div>
                            <span class="display-four d-block n4-clr">
                                <?php if (!empty($settings['title1'])) :   ?>
                                    <?php echo esc_html($settings['title1']) ?>
                                <?php endif ?>
                                <span class="d-flex align-items-center justify-content-md-start justify-content-center gap-2">
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
                        <?php if (!empty($settings['iconrightimage']['url'])) :   ?>
                            <img src="<?php echo esc_url($settings['iconrightimage']['url']) ?>" alt="img" class="m-howarrow">
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
            <div class="container pt-15">
                <div class="row g-lg-6 g-sm-10 g-15 justify-content-center">


                    <?php foreach ($settings['list_repeater'] as $item) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="work-item1 work-stepv5 text-center position-relative">
                                <div class="tbox pb-3">
                                    <?php if (!empty($item['list_subtext'])) :   ?>
                                        <span class="text-uppercase n4-clr fw_700 fs-seven d-block mb-xxl-6 mb-xl-4 mb-3">
                                            <?php echo wp_kses($item['list_subtext'], wp_kses_allowed_html('post'))  ?>
                                        </span>
                                    <?php endif ?>
                                    <?php \Elementor\Icons_Manager::render_icon($item['list_icon'], ['aria-hidden' => 'true']); ?>
                                    <span class="number-shadow">
                                        <?php if (!empty($item['list_number'])) :   ?>
                                            <?php echo esc_html($item['list_number']) ?>
                                        <?php endif ?>
                                    </span>
                                </div>
                                <div class="box pt-xxl-20 pt-10">
                                    <?php if (!empty($item['list_title'])) :   ?>
                                        <h4 class="n4-clr mb-xxl-4 mb-3 fw_700">
                                            <?php echo esc_html($item['list_title']) ?>
                                        </h4>
                                    <?php endif ?>
                                    <?php if (!empty($item['list_description'])) :   ?>
                                        <p class="fs18 n3-clr description">
                                            <?php echo wp_kses($item['list_description'], wp_kses_allowed_html('post'))  ?>
                                        </p>
                                    <?php endif ?>
                                </div>
                                <?php if (!empty($item['listimage']['url'])) :   ?>
                                    <img src="<?php echo esc_html($item['listimage']['url']) ?>" alt="img" class="step-donglobal">
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
}
