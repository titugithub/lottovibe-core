<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class SVTheme_Elementor_Product_Widget extends \Elementor\Widget_Base
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
        return 'rt-product-lottery';
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
        return __('SV Product Lottery', 'rtelements');
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

    public function get_post_list_by_post_type($post_type)
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

    public function get_all_post_key($post_type)
    {
        $return_val = [];
    }




    function get_terms_names($taxonomy_name = '', $output = '', $hide_empty = false)
    {
        $return_val = [];
        $terms      = get_terms(
            array(
                'taxonomy'   => $taxonomy_name,
                'hide_empty' => $hide_empty
            )
        );
        foreach ($terms as $term) {
            if ('id' == $output) {
                $return_val[$term->term_id] = $term->name;
            } else {
                $return_val[$term->slug] = $term->name;
            }
        }

        return $return_val;
    }
    function get_all_terms_names($taxonomy_name = '', $output = '', $hide_empty = false)
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
            'section_content',
            [
                'label' => __('Product Settings.', 'scooby-core'),
            ]
        );


        $this->add_control(
            'product_item',
            [
                'label' => __('Item to display', 'scooby-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => '6',
            ]
        );

        $this->add_control(
            'product_source',
            [
                'label' => __('Style', 'scooby-core'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'category_wise_product' => __('Category Wise Product', 'scooby-core'),
                    'custom_product'        => __('Custom Product', 'scooby-core'),
                ],
                'default' => 'category_wise_product',
            ]
        );



        $this->add_control(
            'custom_product',
            [
                'label'   => __('Custom Product', 'scooby-core'),
                'type'    => Controls_Manager::SELECT2,
                'options' => $this->get_post_list_by_post_type('product'),
                'default' => [],
                'multiple'   => 'true',
                'condition' => [
                    'product_source' => 'custom_product',
                ],
            ]
        );


        $this->add_control(
            'category_wise_product',
            [
                'label'   => __('Category Wise Product', 'scooby-core'),
                'type'    => Controls_Manager::SELECT2,
                'options' => $this->get_terms_names('product_cat', 'id'),
                'default' => [],
                'condition' => [
                    'product_source' => 'category_wise_product',
                ],
                'condition' => [
                    'product_source' => 'category_wise_product',
                ],
                'multiple'   => 'true',
            ]
        );




        $this->add_control(
            'port_order',
            [
                'label' => __('Orders', 'scooby-core'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'DESC' => __('Descending', 'scooby-core'),
                    'ASC' => __('Ascending', 'scooby-core'),
                    'rand' => __('Random', 'scooby-core'),
                ],
                'default' => 'DESC',
            ]
        );




        $this->end_controls_section();



                // ===================Style===========================//

                $this->start_controls_section(
                    'image_style',
                    [
                        'label' => esc_html__('Image Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
        
                $this->add_responsive_control(
                    'imagestyle_height',
                    [
                        'label'       => esc_html__('Height', 'plugin-name'),
                        'type'        => Controls_Manager::SLIDER,
                        'size_units'  => ['px', '%'],  // Allow px and percentage units
                        'description' => esc_html__('Choose height in px or %', 'plugin-name'),
                        'selectors'   => [
                            '{{WRAPPER}} .thumb.cus-z1.position-relative.px-3.mb-xxl-10.mb-xl-8.mb-lg-6.mb-4 img' => 'height: {{SIZE}}{{UNIT}};', // Dynamic unit
                        ],
                        'default'     => [
                            'unit'  => 'px',  // Default unit is px
        
                        ],
                    ]
                );
        
                $this->add_responsive_control(
                    'imagestyle_width',
                    [
                        'label'       => esc_html__('Width', 'plugin-name'),
                        'type'        => Controls_Manager::SLIDER,
                        'size_units'  => ['px', '%'],  // Allow px and percentage units
                        'description' => esc_html__('Choose width in px or %', 'plugin-name'),
                        'selectors'   => [
                            '{{WRAPPER}} .thumb.cus-z1.position-relative.px-3.mb-xxl-10.mb-xl-8.mb-lg-6.mb-4 img' => 'width: {{SIZE}}{{UNIT}};', // Dynamic unit
                        ],
                        'default'     => [
                            'unit'  => 'px',  // Default unit is px
        
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
                            '{{WRAPPER}} .thumb.cus-z1.position-relative.px-3.mb-xxl-10.mb-xl-8.mb-lg-6.mb-4 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                        ]
                    ]
                );
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'progress_bar_style',
                    [
                        'label' => esc_html__('Progress Bar Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
                $this->add_control(
                    'rating_color',
                    [
                        'label' => esc_html__( 'Color', 'plugin-name' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .range-custom .curs-range::before' => 'background: {{VALUE}} !important',
                            '{{WRAPPER}} .range-custom::before' => 'background: {{VALUE}} !important',
                        ],
                    ]
                );
        
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'title_style',
                    [
                        'label' => esc_html__('Title Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
                $this->add_group_control(
                    Group_Control_Typography::get_type(),
                    [
                        'label'    => esc_html__('Typography', 'plugin-name'),
                        'name'     => 'title_typ',
                        'selector' => '{{WRAPPER}} .box a.n4-clr',
                
                    ]
                );
                
                $this->add_control(
                    'title_color',
                    [
                        'label'     => esc_html__('Color', 'plugin-name'),
                        'type'      => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .box a.n4-clr' => 'color: {{VALUE}} !important;',
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
                            '{{WRAPPER}} .box a.n4-clr' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
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
                            '{{WRAPPER}} .box a.n4-clr' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                        ]
                    ]
                );
        
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'rating_style',
                    [
                        'label' => esc_html__('Rating Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
                $this->add_control(
                    'ratingg_color',
                    [
                        'label' => esc_html__( 'Color', 'plugin-name' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .ratting li i' => 'color: {{VALUE}} !important',
                        ],
                    ]
                );
        
        
        
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'meta_style',
                    [
                        'label' => esc_html__('Meta Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
        
                $this->add_group_control(
                    Group_Control_Typography::get_type(),
                    [
                        'label'    => esc_html__('Typography', 'plugin-name'),
                        'name'     => 'meta_typ',
                        'selector' => '{{WRAPPER}} .remaining-info li,.remaining-info li span',
                
                    ]
                );
                
                $this->add_control(
                    'meta_color',
                    [
                        'label'     => esc_html__('Color', 'plugin-name'),
                        'type'      => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .remaining-info li' => 'color: {{VALUE}} !important;',
                            '{{WRAPPER}} .remaining-info li span' => 'color: {{VALUE}} !important;',
                        ],
                    ]
                );
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'price_style',
                    [
                        'label' => esc_html__('Price Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
                $this->add_group_control(
                    Group_Control_Typography::get_type(),
                    [
                        'label'    => esc_html__('Typography', 'plugin-name'),
                        'name'     => 'spinner_typ',
                        'selector' => '{{WRAPPER}} span.woocommerce-Price-amount.amount',
                
                    ]
                );
                
                $this->add_control(
                    'spinner_color',
                    [
                        'label'     => esc_html__('Color', 'plugin-name'),
                        'type'      => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} span.woocommerce-Price-amount.amount' => 'color: {{VALUE}} !important;',
                        ],
                    ]
                );
        
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'tag_title_style',
                    [
                        'label' => esc_html__('Tag Title Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
        
                $this->add_group_control(
                    Group_Control_Typography::get_type(),
                    [
                        'label'    => esc_html__('Typography', 'plugin-name'),
                        'name'     => 'tag_title_typ',
                        'selector' => '{{WRAPPER}} span.fs-six.text-uppercase',
                
                    ]
                );
                
                $this->add_control(
                    'tag_title_color',
                    [
                        'label'     => esc_html__('Color', 'plugin-name'),
                        'type'      => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} span.fs-six.text-uppercase' => 'color: {{VALUE}} !important;',
                        ],
                    ]
                );
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'button_style',
                    [
                        'label' => esc_html__('Button Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
                $this->add_control(
                    'button_style_color',
                    [
                        'label' => esc_html__( 'Color', 'plugin-name' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} a.cmn-40.radius-circle.s1-bg.s1-hover' => 'background: {{VALUE}} !important',
                        ],
                    ]
                );
        
                $this->add_control(
                    'button_style_color_hover',
                    [
                        'label' => esc_html__( 'HoverColor', 'plugin-name' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} a.cmn-40.radius-circle.s1-bg.s1-hover:hover' => 'background: {{VALUE}} !important',
                        ],
                    ]
                );
        
        
        
                $this->end_controls_section();
        
                $this->start_controls_section(
                    'card_style',
                    [
                        'label' => esc_html__('Card Style', 'plugin-name'),
                        'tab'   => Controls_Manager::TAB_STYLE,
                    ]
                );
        
        
                $this->add_control(
                    'card_top_color',
                    [
                        'label' => esc_html__( 'Top Background', 'plugin-name' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .current-lottery-item::after' => 'background: {{VALUE}} !important',
                        ],
                    ]
                );
        
                $this->add_control(
                    'card_total_color',
                    [
                        'label' => esc_html__( 'Total Background', 'plugin-name' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .current-bg' => 'background: {{VALUE}} !important',
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



        $params = array(
            'post_type' => 'product',
            'posts_per_page' => $settings['product_item'],
            'order' => $settings['port_order'],
            'post__in' => $settings['custom_product'],
        );


        if ($settings['product_source'] == 'custom_product') {
            $params = array(
                'post_type' => 'product',
                'posts_per_page' => $settings['product_item'],
                'order' => $settings['port_order'],
                'post__in' => $settings['custom_product'],
            );
        } else {
            $params = array(
                'post_type' => 'product',
                'posts_per_page' => $settings['product_item'],
                'order' => $settings['port_order'],
                'tax_query' => array(
                    array(
                        'taxonomy'          => 'product_cat',
                        'field'             => 'term_id',
                        'terms'             => $settings['category_wise_product'],
                    ),

                ),
            );
        }


        $wc_query = new \WP_Query($params);

        ?>





        <section class="current-lottery  pb-120">
            <div class="container">


                <!--win lottery body-->
                <div class="row g-6">


                    <?php
                            if ($wc_query->have_posts()) {
                                while ($wc_query->have_posts()) :
                                    $wc_query->the_post();
                                    global $product;
                                    ?>

                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
     

                                        <a href="<?php echo site_url(); ?>/?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>">
                                            <span class="cmn-40 n0-bg radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </div>

                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <?php
                                                            $total_tickets = get_post_meta($product->get_id(), '_lty_maximum_tickets', true);
                                                            $sold_tickets = get_post_meta($product->get_id(), 'total_sales', true);

                                                            if ($total_tickets > 0) {
                                                                $percentage_sold = round(($sold_tickets / $total_tickets) * 100);
                                                            } else {
                                                                $percentage_sold = 0;
                                                            }
                                                            ?>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                <?php echo esc_html($percentage_sold); ?>% Sold
                                            </span>
                                        </div>

                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                            <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="<?php the_permalink(); ?>" class="n4-clr">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <?php
                                                                    $rating_count = $product->get_average_rating();
                                                                    $review_count = $product->get_review_count();
                                                                    if ($rating_count > 0) : ?>
                                                        <ul class="ratting d-flex align-items-center gap-1 list-unstyled">
                                                            <?php for ($x = 0; $x < 5; $x++) : ?>
                                                                <?php if ($x < $rating_count) : ?>
                                                                    <li><i class="ph-fill ph-star fs-five act4-clr"></i></li>
                                                                <?php else : ?>
                                                                    <li><i class="ph ph-star fs-five act4-clr"></i></li>
                                                                <?php endif; ?>
                                                            <?php endfor; ?>
                                                        </ul>
                                                    <?php endif; ?>

                                                    <span class="n3-clr fw_600">
                                                        <?php if ($review_count > 0) : ?>
                                                            <?php echo esc_html($review_count) . ' ' . esc_html__('reviews', 'lottovibe'); ?>
                                                        <?php endif; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2 list-unstyled">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <?php
                                                                // Get the current product ID
                                                                $product_id = get_the_ID();

                                                                // Get the start and end dates from meta
                                                                $lty_start_date = get_post_meta($product_id, '_ltystart_date', true);
                                                                $lty_end_date = get_post_meta($product_id, '_lty_end_date', true);

                                                                // If the end date exists
                                                                if ($lty_end_date) {
                                                                    // Get current date in the same format as the meta data
                                                                    $current_date = date('Y-m-d');  // Get the current date in Y-m-d format

                                                                    // Calculate the difference in seconds
                                                                    $date_diff = strtotime($lty_end_date) - strtotime($current_date);

                                                                    // Convert difference into days
                                                                    $remaining_days = round($date_diff / (60 * 60 * 24));

                                                                    // Ensure the number of days has two digits (e.g., 03 Days)
                                                                    if ($remaining_days > 0) {
                                                                        echo sprintf('%02d Days', $remaining_days);  // Add leading zero if necessary
                                                                    } else {
                                                                        echo "The lottery has ended.";
                                                                    }
                                                                } else {
                                                                    echo "Lottery dates not set.";
                                                                }
                                                                ?>


                                            </li>
                                            <li class="vline-remaing"></li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    <?php $lottery_remain = get_post_meta($product->get_id(), '_stock', true); ?>
                                                    <?php echo wc_price($lottery_remain) . ' ' . esc_html__('Remaining', 'lottovibe'); ?>
                                                </span>
                                            </li>

                                        </ul>

                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <?php $lottery_price = get_post_meta($product->get_id(), '_price', true); ?>
                                                <span class="pr"><?php echo wc_price($lottery_price); ?></span>
                                                <span class="fs-six text-uppercase"><?php echo esc_html__('PER ENTRY', 'lottovibe'); ?></span>
                                            </h3>
                                            <a href="<?php the_permalink(); ?>" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                } else { ?>
                        <p><?php esc_html_e('We Are Sorry. No Products', 'lottovibe'); ?></p>
                    <?php }
                            ?>







                </div>
                <!--win lottery body-->
            </div>
        </section>












<?php
    }
} ?>