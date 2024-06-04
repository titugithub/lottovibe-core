<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Blog_Widget extends \Elementor\Widget_Base
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
        return 'rt-blog';
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
        return __('SV Blog', 'rtelements');
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
            'lottovibe_blog_section_genaral',
            [
                'label' => esc_html__('General', 'lottovibe-core')
            ]
        );




        $this->add_control(
            'lottovibe_blog_posts_per_page',
            [
                'label'       => esc_html__('Posts Per Page', 'lottovibe-core'),
                'type'        => Controls_Manager::NUMBER,
                'default'     => 2,
                'label_block' => false,
            ]
        );
        $this->add_control(
            'lottovibe_blog_template_orderby',
            [
                'label'   => esc_html__('Order By', 'lottovibe-core'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'ID',
                'options' => [
                    'ID'         => esc_html__('Post Id', 'lottovibe-core'),
                    'author'     => esc_html__('Post Author', 'lottovibe-core'),
                    'title'      => esc_html__('Title', 'lottovibe-core'),
                    'post_date'  => esc_html__('Date', 'lottovibe-core'),
                    'rand'       => esc_html__('Random', 'lottovibe-core'),
                    'menu_order' => esc_html__('Menu Order', 'lottovibe-core'),
                ],
            ]
        );
        $this->add_control(
            'lottovibe_blog_template_order',
            [
                'label'   => esc_html__('Order', 'lottovibe-core'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'asc'  => esc_html__('Ascending', 'lottovibe-core'),
                    'desc' => esc_html__('Descending', 'lottovibe-core')
                ],
                'default' => 'desc',
            ]
        );




        $this->end_controls_section();


        // =============================Style==============================//

        $this->start_controls_section(
             'datestyle',
             [
                'label' => esc_html__('Date', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_control(
            'spinnfsaaer_color',
            [
                'label' => esc_html__( 'Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-items1 .thumb .dats span' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'spifdfnner_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-items1 .thumb .dats' => 'background: {{VALUE}} !important',
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
                'name'     => 'title_typ',
                'selector' => '{{WRAPPER}} .title',
        
            ]
        );
        
        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_control(
            'titleh_color',
            [
                'label'     => esc_html__('Hover Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-v1-hover.active h3 a, .blog-v1-hover:hover h3 a' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__( 'Margin', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'title_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ]
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

        $this->start_controls_section(
             'buttonstyle',
             [
                'label' => esc_html__('Button', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        

        
        $this->add_control(
            'spinnfafer_color',
            [
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.kew-text.n4-bg.n0-clr' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .kew-arrow.n4-bg' => 'background: {{VALUE}} !important',
                ],
            ]
        );
        
        $this->add_control(
            'spighghnner_color',
            [
                'label' => esc_html__( 'Hover Background', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-v1-hover:hover .kewta-btn .kew-text' => 'background: {{VALUE}} !important',
                    '{{WRAPPER}} .blog-v1-hover:hover .kewta-btn .kew-arrow ' => 'background: {{VALUE}} !important',
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
        $query = new \WP_Query(
            array(
                'post_type'      => 'post',
                'posts_per_page' => $settings['lottovibe_blog_posts_per_page'],
                'orderby'        => $settings['lottovibe_blog_template_orderby'],
                'order'          => $settings['lottovibe_blog_template_order'],
                'offset'         => 0,
                'post_status'    => 'publish'
            )
        );
        ?>





        <section class="blog-section1 ">


            <!--blog body Header-->
            <div class="container">
                <div class="row g-6">

                    <?php
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>

                            <div class="col-lg-6 col-md-6" data-aos="zoom-in-down" data-aos-duration="1400">
                                <div class="blog-items1 blog-v1-hover">
                                    <div class="boxs">
                                        <div class="thumb mb-xxl-6 mb-4">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail() ?>
                                            <?php endif; ?>
                                            <div class="dats d-center">
                                                <span class="bos">
                                                    <span class="d-block nw1-clr fw_700">
                                                        <?php echo get_the_date('d'); ?>/
                                                        <!-- Day -->
                                                    </span>
                                                    <span class="d-block nw1-clr fw_700">
                                                        <?php echo get_the_date('M'); ?>
                                                        <!-- Month -->
                                                    </span>

                                                </span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3 class="mb-xxl-4 mb-3">
                                                <a href="<?php the_permalink() ?>" class="n4-clr title">
                                                    <?php the_title() ?>
                                                </a>
                                            </h3>

                                            <?php
                                                            $excerpt = get_the_excerpt();
                                                            if (!empty($excerpt)) :
                                                                ?>
                                                <p class="description fs18 pra bbd pb-xxl-5 pb-xl-4 pb-3 mb-xxl-6 mb-xl-4 mb-3"><?php echo $excerpt; ?></p>
                                            <?php endif; ?>
                                            <a href="<?php the_permalink() ?>" class="kewta-btn d-inline-flex align-items-center">
                                                <span class="kew-text n4-bg n0-clr">
                                                    <?php echo esc_html__('Read More', 'lottovibe') ?>
                                                </span>
                                                <div class="kew-arrow n4-bg">
                                                    <div class="kt-one">
                                                        <i class="ti ti-arrow-right n0-clr"></i>
                                                    </div>
                                                    <div class="kt-two">
                                                        <i class="ti ti-arrow-right n0-clr"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                    <?php
                                }
                            }
                            wp_reset_postdata();
                            ?>
                </div>
            </div>
            <!--blog body Header-->
        </section>








<?php
    }
} ?>