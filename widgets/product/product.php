<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;


defined('ABSPATH') || die();

class ReacTheme_Elementor_Product_Widget extends \Elementor\Widget_Base
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
        $args       = array(
            'post_type'      => $post_type,
            'posts_per_page' => 6,
            'post_status'      => 'publish',

        );
        $all_post   = new \WP_Query($args);

        while ($all_post->have_posts()) {
            $all_post->the_post();
            $return_val[] = get_the_ID();
        }
        wp_reset_query();
        return $return_val;
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
            'custom_product',
            [
                'label'   => __('Custom Product', 'scooby-core'),
                'type'    => Controls_Manager::SELECT2,
                'options' => $this->get_post_list_by_post_type('product'),
                'default' => $this->get_all_post_key('product'),
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
                                        <?php
                                                        if (!$product->is_in_stock()) { ?>
                                            <span class="draw-badge n4-clr">
                                                <span class="n4-clr position-relative fw_700 fs-eight">
                                                    <?php echo '<span class="fw_700 has-finished">' . __('Product out of stock', 'wc_lottery') . '</span>'; ?>
                                                </span>
                                            </span>
                                        <?php } ?>

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
                        <p><?php esc_html_e('We Are Sorry. No Products', 'bidout'); ?></p>
                    <?php }
                            ?>







                </div>
                <!--win lottery body-->
            </div>
        </section>












<?php
    }
} ?>