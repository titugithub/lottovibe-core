<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Blog3_Widget extends \Elementor\Widget_Base
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
        return 'rt-blog3';
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
        return __('SV Blog Three', 'rtelements');
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

    function get_post_list_by_post_type($post_type)
    {
        $return_val = [];
        $args       = array(
            'post_type'      => $post_type,
            'posts_per_page' => -1,
            'post_status'      => 'publish',
        );
        $all_post   = new \WP_Query($args);

        while ($all_post->have_posts()) {
            $all_post->the_post();
            $return_val[get_the_ID()] = get_the_title();
        }
        wp_reset_query();
        return $return_val;
    }

    function get_all_post_key($post_type)
    {
        $return_val = [];
       
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
            'post_select',
            [
                'label' => __('Select Projects', 'turio-core'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple'    => true,
                'options' => $this->get_post_list_by_post_type('post'),
                'default'     => [],
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

        $this->add_control(
            'pagination_show',
            [
                'label' => esc_html__('Show Pagination', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'plugin-name'),
                'label_off' => esc_html__('Hide', 'plugin-name'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );




        $this->end_controls_section();


        // =============================Style==============================//

        $this->start_controls_section(
             'imagestyle',
             [
                'label' => esc_html__('Image', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
             ]
        );
        
        
        $this->add_responsive_control(
            'imagestyle_height',
            [
                'label'       => esc_html__( 'Height', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .blog-items15 .thumb ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagestyle_width',
            [
                'label'       => esc_html__( 'Width', 'plugin-name' ),
                'type'        => Controls_Manager::TEXT,
                'description' => 'Unit in px',
                'selectors'   => [
                    '{{WRAPPER}} .blog-items15 .thumb ' => 'width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'imagestyle_border_radius',
            [
                'label'      => __('Border Radius', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .blog-items15 .thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ]
            ]
        );
        
        
        $this->end_controls_section();

        $this->start_controls_section(
            'datestyle',
            [
                'label' => esc_html__('Date', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Typography', 'plugin-name'),
                'name'     => 'date_typ',
                'selector' => '{{WRAPPER}} .date',

            ]
        );

        $this->add_control(
            'date_color',
            [
                'label'     => esc_html__('Color', 'plugin-name'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .date' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'date_margin',
            [
                'label' => esc_html__('Margin', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'date_padding',
            [
                'label'      => __('Padding', 'plugin-name'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    '{{WRAPPER}} .title:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
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

        $this->start_controls_section(
            'buttonstyle',
            [
                'label' => esc_html__('Button', 'plugin-name'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );




        $this->add_control(
            'buttontext_color',
            [
                'label' => esc_html__( 'Text Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.n4-clr.fs20.fw_700.act4-texthover' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'buttonthover_color',
            [
                'label' => esc_html__( 'Text Hover Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.n4-clr.fs20.fw_700.act4-texthover:hover' => 'color: {{VALUE}} !important',
                ],
            ]
        );


        $this->add_control(
            'iconhover_color',
            [
                'label' => esc_html__( 'Icon Hover Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-items15 .read15:hover' => 'background: {{VALUE}} !important',
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
                'post_status'    => 'publish',
                'post__in'       => $settings['post_select'],
            )
        );
        ?>







        <section class="blog-section1">


            <!--blog body Header-->
            <div class="container">
                <div class="row g-6 justify-content-center">

                    <?php
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>




                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1400">
                                <div class="blog-items15">
                                    <div class="boxs">
                                        <div class="thumb mb-xxl-6 mb-4 w-100">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url() ?>" alt="blog-img" class="w-100 image">
                                            <?php endif; ?>
                                        </div>
                                        <div class="content">
                                            <span class="fw_600 n3-clr d-block mb-xxl-4 mb-3">
                                                <span class="fw_600 n3-clr d-block mb-xxl-4 mb-3 date">
                                                    <?php echo esc_html(get_the_date()); ?>
                                                </span>
                                            </span>
                                            <h3 class="mb-xxl-5 mb-3 ">
                                                <a href="<?php the_permalink() ?>" class="n4-clr act4-texthover title">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                            <div class="border-top"></div>
                                            <div class="d-flex align-items-center gap-xxl-6 gap-4 mt-xxl-5 mt-4">
                                                <a href="<?php the_permalink() ?>" class="n4-clr fs20 fw_700 act4-texthover">
                                                    <?php echo esc_html__('Read More', 'lottovibe-core') ?>
                                                </a>
                                                <a href="<?php the_permalink() ?>" class="read15 d-center">
                                                    <i class="ph-bold ph-arrow-up-right fs-five"></i>
                                                </a>
                                            </div>
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