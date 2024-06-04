<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Border;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined( 'ABSPATH' ) || die();

class ReacTheme_Elementor_Blog_Grid_Widget extends \Elementor\Widget_Base {

    public function get_style_depends() {

		wp_register_style( 'rtelements-blog-grid', plugins_url( 'blog-css/blog-grid.css', __FILE__ ) );
		
		return [
			'rtelements-blog-grid'
		];

	}
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
	public function get_name() {
		return 'react-blog';
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
	public function get_title() {
		return esc_html__( 'SV Blog Grid', 'rtelements' );
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
	public function get_icon() {
		return 'glyph-icon flaticon-blogging';
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
	public function get_categories() {
        return [ 'pielements_category' ];
    }


	/**
	 * Register rsgallery widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {		

		$post_categories = get_terms( 'category' );

        $post_options = [];
        foreach ( $post_categories as $category ) {
            $post_options[ $category->slug ] = $category->name;
        }


		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content Settings', 'rtelements' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'blog_grid_style',
			[
				'label'   => esc_html__( 'Select Style', 'rtelements' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [					
                    'style1' => esc_html__( 'Style 1', 'rtelements'),
                    'style2' => esc_html__( 'Style 2', 'rtelements'),
                    'style3' => esc_html__( 'Style 3', 'rtelements'),
				],
			]
		);
      

		$this->add_control(
			'category',
			[
				'label'   => esc_html__( 'Category', 'rtelements' ),				
				'type'        => Controls_Manager::SELECT2,
                'options'     => $post_options,
                'default'     => [],
				'multiple' => true,	
				'separator' => 'before',		
			]

		);
	
		$this->add_control(
			'blog_columns',
			[
				'label'   => esc_html__( 'Desktops > 1199px', 'rtelements' ),
				'type'    => Controls_Manager::SELECT,
                'default' => 3,			
				'options' => [
                    '1' => esc_html__('1 Column', 'rtelements'),
                    '2' => esc_html__('2 Column', 'rtelements'),
                    '3' => esc_html__('3 Column', 'rtelements'),
                    '4' => esc_html__('4 Column', 'rtelements'),
                    '5' => esc_html__('5 Column', 'rtelements'),
                    '6' => esc_html__('6 Column', 'rtelements'),				
				],
				'separator' => 'before',							
			]
		);
        $this->add_control(
            'col_md',
            [
                'label'   => esc_html__('Laptop > 991px', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 2,
                'options' => [
                    '1' => esc_html__('1 Column', 'rtelements'),
                    '2' => esc_html__('2 Column', 'rtelements'),
                    '3' => esc_html__('3 Column', 'rtelements'),
                    '4' => esc_html__('4 Column', 'rtelements'),
                    '5' => esc_html__('5 Column', 'rtelements'),
                    '6' => esc_html__('6 Column', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

        $this->add_control(
            'col_sm',
            [
                'label'   => esc_html__('Tablets > 767px', 'rtelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 1,
                'options' => [
                    '1' => esc_html__('1 Column', 'rtelements'),
                    '2' => esc_html__('2 Column', 'rtelements'),
                    '3' => esc_html__('3 Column', 'rtelements'),
                    '4' => esc_html__('4 Column', 'rtelements'),
                    '5' => esc_html__('5 Column', 'rtelements'),
                    '6' => esc_html__('6 Column', 'rtelements'),
                ],
                'separator' => 'before',

            ]

        );

		$this->add_control(
			'per_page',
			[
				'label' => esc_html__( 'Blog Show Per Page', 'rtelements' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '6', 'rtelements' ),
				'separator' => 'before',
			]
		);

        $this->add_control(
            'title_word_count',
            [
                'label' => esc_html__( 'Title Word Count', 'rtelements' ),
                'type' => Controls_Manager::NUMBER,
                'condition' => [
                    'blog_grid_style' => 'style2'
                ]               
            ]
        );

        $this->add_control(
            'post_offset',
            [
                'label' => esc_html__( 'Offset', 'rtelements' ),
                'type' => Controls_Manager::TEXT,                
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'blog_image',
            [
                'label' => esc_html__( 'Image Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'yes',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'blog_content_show_hide',
            [
                'label' => esc_html__( 'Description Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'yes',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );

        

        $this->add_control(
            'blog_word_show',
            [
                'label' => esc_html__( 'Show Content Limit', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( '20', 'rtelements' ),
                'separator' => 'before',
                'condition' => [
                    'blog_content_show_hide' => 'yes',
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'large',
                'separator' => 'before',
                'exclude' => [
                    'custom'
                ],
                'separator' => 'before',
            ]
        ); 

        $this->add_control(
			'image_gray',
			[
				'label' => esc_html__( 'Enable Image Grayscale', 'rtelements' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'rtelements' ),
				'label_off' => esc_html__( 'Hide', 'rtelements' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'meta_section',
            [
                'label' => esc_html__( 'Meta Settings', 'rtelements' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
		$this->add_control(
            'blog_avatar_show_hide',
            [
                'label' => esc_html__( 'Author Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'yes',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );

		$this->add_control(
            'blog_cat_show_hide',
            [
                'label' => esc_html__( 'Category Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'yes',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );

		$this->add_control(
            'blog_date_show_hide',
            [
                'label' => esc_html__( 'Date Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'yes',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );

		$this->add_control(
            'blog_read_show_hide',
            [
                'label' => esc_html__( 'Reading Time Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'yes',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'button_section',
            [
                'label' => esc_html__( 'Button Settings', 'rtelements' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
            'blog_readmore_show_hide',
            [
                'label' => esc_html__( 'Read More Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'yes',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );


		$this->add_control(
            'blog_pagination_show_hide',
            [
                'label' => esc_html__( 'Pagination Show / Hide', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'no',
                'options' => [
                    'yes' => esc_html__( 'Yes', 'rtelements' ),
                    'no' => esc_html__( 'No', 'rtelements' ),
                ],                
                'separator' => 'before',
            ]
        );


		$this->add_control(
			'blog_btn_text',
			[
                'label'       => esc_html__( 'Blog Button Text', 'rtelements' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Read More',
                'placeholder' => esc_html__( 'Blog Button Text', 'rtelements' ),
                'separator'   => 'before',
                'condition'   => [
                    'blog_readmore_show_hide' => 'yes',
                ]
			]
		);


		$this->add_control(
			'blog_btn_icon',
			[
                'label'     => esc_html__( 'Icon', 'rtelements' ),
                'type'      => Controls_Manager::ICON,
                'options'   => rsaddon_pro_get_icons(),				
                'default'   => 'fa fa-angle-right',
                'separator' => 'before',
                'condition' => [
                    'blog_readmore_show_hide' => 'yes',
                ]			
			]
		);
				
		$this->end_controls_section();

        // ===============================Style==================================//

		$this->start_controls_section(
			'section_slider_style',
			[
				'label' => esc_html__( 'Blog Item Style', 'rtelements' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);


        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => esc_html__( 'Box Shadow', 'plugin-domain' ),
                'selector' => '{{WRAPPER}} .blog-item',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'plugin-domain' ),
                'types' => [ 'classic', 'gradient', 'rtelements' ],
                'selector' => '{{WRAPPER}} .blog-item,.single-blog-solaric-lg, {{WRAPPER}} .single-blog-solaric-sm',
                
            ]
        );

        $this->add_control(
            'blog_border_color',
            [
                'label' => esc_html__( 'Item Border Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .inner-content-solari-blog .head' => 'border-bottom:1px solid {{VALUE}};',
                ],                
            ]
        );

        $this->add_control(
            'blog_border_radius',
            [
                'label' => esc_html__( 'Item Border radius', 'rtelements' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
					'{{WRAPPER}} .reactheme-blog-grid1.blog-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .single-blog-solaric-lg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .single-blog-solaric-sm' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .blog-style-four' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],              
            ]
        );

      

        $this->add_responsive_control(
            'blog_bottom_spacing',
            [
                'label' => esc_html__( 'Item Bottom Spacing', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid .blog-item' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .single-blog-solaric-lg-mb' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .blog-style-four' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .single-blog-solaric-sm' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'section_grid_style',
            [
                'label' => esc_html__( 'Blog Meta Style', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'blog_meta_color',
            [
                'label' => esc_html__( 'Meta Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single span' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog-style-four .inner-content-blog .head .date .info' => 'color: {{VALUE}};',

                ],                
            ]
        );

        $this->add_control(
            'blog_meta_icon_color',
            [
                'label' => esc_html__( 'Meta Icon Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content .blog-meta i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .reactheme-blog-grid1 .blog-content .btn-btm .post-categories li::before' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .inner-content-solari-blog .head .single i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog-style-four .inner-content-blog .head .date i' => 'color: {{VALUE}};',
                ],                
            ]
        );

        $this->add_control(
            'blog_meta_icon_bg',
            [
                'label' => esc_html__( 'Meta Area Bg', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid.blog--style3 .blog-content .blog-meta' => 'background: {{VALUE}};',
                   
                ],    
                'condition' => [
                    'blog_grid_style' => 'style3',
                ]               
            ]
        );

        $this->add_responsive_control(
            
            'blog_meta_spacing',
            [
                'label' => esc_html__( 'Margin', 'rtelements' ),
                'type'  => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid1 ul' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .inner-content-solari-blog .head' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .blog-style-four .inner-content-blog .head' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_slider_category',
            [
                'label' => esc_html__( 'Category Style', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'blog_cat_color',
            [
                'label' => esc_html__( 'Category Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid .blog-item .blog-content .cat_list ul li a' => 'color: {{VALUE}};',                 
                    '{{WRAPPER}} .blogs-style3 .reactheme-articles .blog-heading .cat_list ul li a, .cat_list ul li a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'blog_cat_show_hide' => 'yes',
                ]                
            ]
        );

        $this->add_control(
            'blog_cat_hover_color',
            [
                'label' => esc_html__( 'Category Hover Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid .blog-item .blog-content .cat_list ul li a:hover' => 'color: {{VALUE}};',                  
                    '{{WRAPPER}} .blogs-style3 .reactheme-articles .blog-heading .cat_list ul li a:hover, .cat_list ul li a:hover' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'blog_cat_show_hide' => 'yes',
                ]                
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'cat_list_background',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .reactheme-blog-grid .blog-item .cat_list ul li a',
                'condition' => [
                    'blog_cat_show_hide' => 'yes',
                ]
			]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'cat_typography',
                'label' => esc_html__( 'Category Typography', 'rtelements' ),
                'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => 
                    '{{WRAPPER}} .cat_list ul li a',
            ]
        );

        $this->add_responsive_control(
            'category_content_padding',
            [
                'label' => esc_html__( 'Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 30,
                ],  
                'selectors' => [
                    '{{WRAPPER}} .cat_list ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    
                ],
            ]
        );
        $this->add_responsive_control(
            'cats_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .cat_list ul li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
       

        $this->end_controls_section();

        $this->start_controls_section(
            'section_slider_title',
            [
                'label' => esc_html__( 'Title & Description Style', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Title Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content .title a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .inner-content-solari-blog .body a .title' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog-style-four .inner-content-blog a .title' => 'color: {{VALUE}};',
                ],                
            ]
        );

        $this->add_control(
            'title_color_hover',
            [
                'label' => esc_html__( 'Title Hover Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content .title a:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .inner-content-solari-blog .body a .title:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog-style-four .inner-content-blog a .title:hover' => 'color: {{VALUE}};',
                ],                
            ]
            
        );

        $this->add_control(
            'titlee_border_color',
            [
                'label' => esc_html__( 'Title Border Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-style-four .inner-content-blog a .title' => 'background-image:linear-gradient(to right, {{VALUE}} 0%, {{VALUE}} 100%)',
                ],
                'condition' => [
                    'blog_grid_style' => 'style3'
                ]
            ]
        );

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Title Typography', 'rtelements' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => 
                    '{{WRAPPER}} .blog-item .blog-content .title a,.inner-content-solari-blog .body a .title,.blog-style-four .inner-content-blog a .title',
			]
		);

        $this->add_responsive_control(
            'title_content_padding',
            [
                'label' => esc_html__( 'Margin', 'rtelements' ),
                'type'  => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 30,
                ],  
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .inner-content-solari-blog .body a .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .blog-style-four .inner-content-blog a .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_content_pad',
            [
                'label' => esc_html__( 'Padding', 'rtelements' ),
                'type'  => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 30,
                ],  
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .inner-content-solari-blog .body a .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .blog-style-four .inner-content-blog a .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
		    Group_Control_Border::get_type(),
		    [
		        'name' => 'title_border',
		        'selector' => '{{WRAPPER}} .blog-item .blog-content .title,.inner-content-solari-blog .body a .title'               
		    ]
		);



        $this->add_control(
            'des_color',
            [
                'label' => esc_html__( 'Description Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid1 .blog-content p.txt ' => 'color: {{VALUE}};',
                ],                
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'des_typography',
                'label' => esc_html__( 'Description Typography', 'rtelements' ),
                'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => 
                    '{{WRAPPER}} .reactheme-blog-grid1 .blog-content p.txt ',
            ]
        );

        $this->add_responsive_control(
            'des_content_padding',
            [
                'label' => esc_html__( 'Margin', 'rtelements' ),
                'type'  => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 30,
                ],  
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid1 .blog-content p.txt ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


		$this->end_controls_section();

        $this->start_controls_section(
            'section_img_sec',
            [
                'label' => esc_html__( 'Image Style', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'blog_grid_style' => 'style2'
                ] 
            ]
        );

        $this->add_control(
			'image_position',
			[
				'label'   => esc_html__( 'Image Position', 'rtelements' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [					
                    'left' => esc_html__( 'Left', 'rtelements'),
					'top' => esc_html__( 'Top', 'rtelements'),					
				],
			]
		);

        $this->add_control(
			'blog_img_size',
			[
				'label' => esc_html__( 'Size', 'rtelements' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
                'condition' => [
                    'blog_grid_style' => 'style2'
                ],
				'selectors' => [
					'{{WRAPPER}} .reactheme-blog-grid .blog-item .image-part a img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        $this->add_responsive_control(
            'blog_img_padding',
            [
                'label'=> esc_html__( 'Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],  
                'condition' => [
                    'blog_grid_style' => 'style2'
                ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid .blog-item .image-part a img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'blog_img_margin',
            [
                'label'=> esc_html__( 'Marign', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ], 
                'condition' => [
                    'blog_grid_style' => 'style2'
                ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid .blog-item .image-part a img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
                
        $this->add_responsive_control(
            'blog_img_border_radius',
            [
                'label'=> esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ], 
                'condition' => [
                    'blog_grid_style' => 'style2'
                ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-blog-grid .blog-item .image-part, {{WRAPPER}} .single-blog-solaric-sm .thumbnail, {{WRAPPER}} .single-blog-solaric-lg .thumbnail, {{WRAPPER}} .single-blog-solaric-lg .thumbnail img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'section_content_sec',
            [
                'label' => esc_html__( 'Content Style', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'content_color',
            [
                'label' => esc_html__( 'Content Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content p, {{WRAPPER}} .article-content p, {{WRAPPER}} .blogs-style3 .reactheme-articles.reactheme-articles .article-grid .article-content p' => 'color: {{VALUE}};',
                ],                
            ]
        );

        $this->add_control(
            'content__bg_color',
            [
                'label' => esc_html__( 'Content Area Bg', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content' => 'background:{{VALUE}};',
                    '{{WRAPPER}} .single-blog-solaric-lg' => 'background:{{VALUE}};',
                    '{{WRAPPER}} .single-blog-solaric-sm' => 'background:{{VALUE}};',
                ],                
            ]
        );

        $this->add_responsive_control(
            'blog_contents_padding',
            [
                'label'=> esc_html__( 'Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 30,
                ],  
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .single-blog-solaric-lg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .single-blog-solaric-sm' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );  

        $this->add_responsive_control(
            'blog_contents_margin',
            [
                'label'=> esc_html__( 'Margin', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 30,
                ],  
                'selectors' => [
                    '{{WRAPPER}} .blog-item .blog-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        ); 

        $this->end_controls_section();

		//Read More Style
		$this->start_controls_section(
		    '_section_style_button',
		    [
		        'label' => esc_html__( 'Read More Style', 'rtelements' ),
		        'tab' => Controls_Manager::TAB_STYLE,
		    ]
		);

		$this->add_responsive_control(
		    'blog_btn_link_padding',
		    [
		        'label' => esc_html__( 'Padding', 'rtelements' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .inner-content-solari-blog .body a.rts-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		    ]
		);

		$this->add_group_control(
		    Group_Control_Typography::get_type(),
		    [
		        'name' => 'btn_typography',
		        'selector' => '{{WRAPPER}} .blog-item .blog-content .btn-part a,.inner-content-solari-blog .body a.rts-btn',
		        'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_4,
		    ]
		);

		$this->add_control(
		    'blog_btn_border_radius',
		    [
		        'label' => esc_html__( 'Border Radius', 'rtelements' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .blog-item .blog-content .btn-part a, {{WRAPPER}} .rts-btn::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		            '{{WRAPPER}} .inner-content-solari-blog .body a.rts-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		    ]
		);

		$this->add_group_control(
		    Group_Control_Box_Shadow::get_type(),
		    [
		        'name' => 'blog_btn_box_shadow',
		        'selector' => '{{WRAPPER}} .blog-item .blog-content .btn-part a,.inner-content-solari-blog .body a.rts-btn',
		    ]
		);


		$this->add_control(
		    'hr',
		    [
		        'type' => Controls_Manager::DIVIDER,
		        'style' => 'thick',
		    ]
		);

		$this->start_controls_tabs( '_tabs_button' );

		$this->start_controls_tab(
		    '_blog_btn_normal',
		    [
		        'label' => esc_html__( 'Normal', 'rtelements' ),
		    ]
		);

		$this->add_control(
		    'link_color',
		    [
		        'label' => esc_html__( 'Text Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '',
		        'selectors' => [
		            '{{WRAPPER}} .blog-item .blog-content .btn-part a' => 'color: {{VALUE}};',
		            '{{WRAPPER}} .inner-content-solari-blog .body a.rts-btn' => 'color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'blog_btn_bg_color',
		    [
		        'label' => esc_html__( 'Background Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .blog-item .blog-content .btn-part a' => 'background-color: {{VALUE}};',
		            '{{WRAPPER}} .rts-btn.btn-primary::before' => 'background-color: {{VALUE}};',
		            '{{WRAPPER}} .single-blog-solaric-sm .inner-content-solari-blog .body a.rts-btn' => 'background-color: {{VALUE}} !important;',
		        ],
		    ]
		);

		$this->add_control(
		    'blog_btn_icon_translate',
		    [
		        'label' => esc_html__( 'Icon Translate X', 'rtelements' ),
		        'type' => Controls_Manager::SLIDER,
		        'range' => [
		            'px' => [
		                'min' => -100,
		                'max' => 100,
		            ],
		        ],
		        'selectors' => [
		            '{{WRAPPER}} .blog-item .blog-content .btn-part a i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
		            '{{WRAPPER}} .blog-item .blog-content .btn-part a i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
                    '{{WRAPPER}} .blog-item .blog-content .btn-part a i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
		        ],
		    ]
		);

        $this->add_group_control(
		    Group_Control_Border::get_type(),
		    [
		        'name' => 'btn_border',
		        'selector' => '{{WRAPPER}} .blog-item .blog-content .btn-part a,.inner-content-solari-blog .body a.rts-btn'               
		    ]
		);
        

		$this->end_controls_tab();


		$this->start_controls_tab(
		    '_blog_btn_button_hover',
		    [
		        'label' => esc_html__( 'Hover', 'rtelements' ),
		    ]
		);

		$this->add_control(
		    'blog_btn_hover_color',
		    [
		        'label' => esc_html__( 'Text Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .blog-item .blog-content:hover .btn-part a,
                    {{WRAPPER}} .blog-item .btn-part a:hover, 
                    {{WRAPPER}} .inner-content-solari-blog .body a.rts-btn:hover, 
                    {{WRAPPER}} .blog-item .btn-part a:hover, 
                    {{WRAPPER}} .blog-item .blog-content:focus .btn-part' => 'color: {{VALUE}}',
                   
		        ],
		    ]
		);

		$this->add_control(
		    'blog_btn_hover_bg_color',
		    [
		        'label' => esc_html__( 'Background Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .blog-item .blog-content:hover .btn-part a' => 'background-color: {{VALUE}};',
		            '{{WRAPPER}} .rts-btn.btn-primary' => 'background-color: {{VALUE}};',
		            '{{WRAPPER}} .single-blog-solaric-sm .inner-content-solari-blog .body a.rts-btn:hover' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'blog_btn_hover_icon_translate',
		    [
		        'label' => esc_html__( 'Icon Translate X', 'rtelements' ),
		        'type' => Controls_Manager::SLIDER,
		        'default' => [
		            'size' => 10
		        ],
		        'range' => [
		            'px' => [
		                'min' => -100,
		                'max' => 100,
		            ],
		        ],
		        'selectors' => [
		            '{{WRAPPER}} .blog-item:hover .blog-content .btn-part a i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
		            '{{WRAPPER}} .blog-item:hover .blog-content .btn-part a i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
                    '{{WRAPPER}} .blog-item:hover .blog-content .btn-part a i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
                    '{{WRAPPER}} .blog-item:hover .blog-content .btn-part a i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
		        ],
		    ]
		);
        $this->add_group_control(
		    Group_Control_Border::get_type(),
		    [
		        'name' => 'btn_border_hover',
		        'selector' => '{{WRAPPER}} .blog-item .blog-content .btn-part a:hover,.inner-content-solari-blog .body a.rts-btn:hover'               
		    ]
		);

		$this->end_controls_tab();
		$this->end_controls_section();


		



		// Start Blog Pagination Style
		$this->start_controls_section(
		    '_blog_pagination_style',
		    [
		        'label' => esc_html__( 'Pagination Style', 'rtelements' ),
		        'tab' => Controls_Manager::TAB_STYLE,
		        'condition' => [
                    'blog_pagination_show_hide' => 'yes',
                ]
		    ]
		);

		$this->add_control(
		    'blog_pagi_color',
		    [
		        'label' => esc_html__( 'Text Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '',
		        'selectors' => [
		            '{{WRAPPER}} .reactheme-blog-grid .reactheme-pagination-area .nav-links a' => 'color: {{VALUE}};',
		        ],
		        'condition' => [
                    'blog_pagination_show_hide' => 'yes',
                ]
		    ]
		);

		$this->add_control(
		    'blog_pagi_hover_color',
		    [
		        'label' => esc_html__( 'Text Hover Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '',
		        'selectors' => [
		            '{{WRAPPER}} .reactheme-blog-grid .reactheme-pagination-area .nav-links a:hover' => 'color: {{VALUE}};',
		            '{{WRAPPER}} .reactheme-blog-grid .reactheme-pagination-area .nav-links span.current' => 'color: {{VALUE}};',
		        ],
		        'condition' => [
                    'blog_pagination_show_hide' => 'yes',
                ]
		    ]
		);

		$this->add_control(
		    'blog_pagi_divider_color',
		    [
		        'label' => esc_html__( 'Divider Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '',
		        'selectors' => [
		            '{{WRAPPER}} .reactheme-blog-grid .reactheme-pagination-area .nav-links a' => 'border-color: {{VALUE}};',
		            '{{WRAPPER}} .reactheme-blog-grid .reactheme-pagination-area .nav-links span.current' => 'border-color: {{VALUE}};',
		        ],
		        'condition' => [
                    'blog_pagination_show_hide' => 'yes',
                ]
		    ]
		);

		$this->add_control(
		    'blog_pagiesc_html__bg_color',
		    [
		        'label' => esc_html__( 'Background Color', 'rtelements' ),
		        'type' => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .reactheme-blog-grid .reactheme-pagination-area .nav-links' => 'background-color: {{VALUE}};',
		        ],
		        'condition' => [
                    'blog_pagination_show_hide' => 'yes',
                ]
		    ]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_pagi_shadow',
				'label' => esc_html__( 'Box Shadow', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .reactheme-blog-grid .reactheme-pagination-area .nav-links',
				'condition' => [
                    'blog_pagination_show_hide' => 'yes',
                ]
			]
		);

		$this->end_controls_section();

		// End Blog Pagination Style
	}

	/**
	 * Render rsgallery widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
        $bstyle = $settings['blog_grid_style'];
        if( $bstyle ){
            $styleClass = ' blog--'.$bstyle;
        }
        if($bstyle=='style2'){
            $styleClass .= ' rts-solari-blog-area-start reveal';
        }
        if($bstyle=='style3'){
            $styleClass .= 'blog-area-style-four';
        }

        $col_lg          = 12 / $settings['blog_columns'] ;
        $col_md          = 12 / $settings['col_md'];
        $col_sm          = 12 / $settings['col_sm'];

        $col = 'col-lg-'.$col_lg.' col-md-'.$col_md.' col-sm-'.$col_sm.' col-12';    
        ?>

		<div class="reactheme-blog-grid2x reactheme-blog-grid<?php echo esc_attr( $styleClass);?>">            

            <div class="row blog-gird-item">
                
			 	<?php
			        $cat = $settings['category'];     
			        if(($settings['blog_pagination_show_hide'] == 'yes')){
						global  $paged;
				        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						if(empty($cat)){
				        	$best_wp = new wp_Query(array(
			        			'post_type'      => 'post',
								'posts_per_page' => $settings['per_page'],										
                                'offset'		 => $settings['post_offset'],
                                'paged'          => $paged		
							));	  
				        }   
				        else{
				        	$best_wp = new wp_Query(array(
			        			'post_type'      => 'post',
								'posts_per_page' =>  $settings['per_page'],										
                                'offset'         => $settings['post_offset'],
                                'paged'          => $paged,
								'tax_query'      => array(
							        array(
										'taxonomy' => 'category',
										'field'    => 'slug', 
										'terms'    => $cat 
							        ),
							    )
							));	  
				        }
				    }

				    else{
					    if(empty($cat)){
				        	$best_wp = new wp_Query(array(
			        			'post_type'      => 'post',
								'posts_per_page' => $settings['per_page'],	
                                'offset'        => $settings['post_offset']	,		
							));	  
				        }   
				        else{
				        	$best_wp = new wp_Query(array(
			        			'post_type'      => 'post',
								'posts_per_page' => $settings['per_page'],
                                'offset'         => $settings['post_offset'],
								'tax_query'      => array(
							        array(
										'taxonomy' => 'category',
										'field'    => 'slug', 
										'terms'    => $cat 
							        ),
							    )
							));	  
				        }
				    }
			        $x=1;
					while($best_wp->have_posts()): $best_wp->the_post(); 
                     $termsArray = get_the_terms( $best_wp->ID, "category" );  //Get the terms for this particular item
                     $termsString = ""; //initialize the string that will contain the terms
                     foreach ( $termsArray as $term ) { // for each term 
                        $termsString .= 'filter_'.$term->slug.' '; //create a string that has all the slugs 
                     }

					$full_date      = get_the_date();
					$blog_date      = get_the_date();	
					$post_admin     = get_the_author();

					if(!empty($settings['blog_word_show'])){
						$limit = $settings['blog_word_show'];
					}
					else{
						$limit = 20;
					}
                        if($settings['blog_grid_style'] == 'style1') {
                            include plugin_dir_path(__FILE__)."/style1.php";
                        } 
                        elseif($settings['blog_grid_style'] == 'style2') {  
                            include plugin_dir_path(__FILE__)."/style2.php";
                        } 
                        elseif($settings['blog_grid_style'] == 'style3') { 
                            include plugin_dir_path(__FILE__)."/style3.php";
                        }
                        else {
                            include plugin_dir_path(__FILE__)."/style1.php";
                        } 
                        
                        ?>                            
                  
					<?php
                    $x++;
					endwhile;
                    
					wp_reset_query();  ?>                 
                         
                </div>   
                               
            	    
                <?php 

                    $blog_item_data = array(
                    'per_page'  => $settings['per_page']
                );
            wp_localize_script( 'vloglab-main', 'blog_load_data', $blog_item_data );

			$paginate = paginate_links( array(
			    'total' => $best_wp->max_num_pages
			));

			if(!empty($paginate ) && ($settings['blog_pagination_show_hide'] == 'yes')){ ?>
				<div class="reactheme-pagination-area"><div class="nav-links"><?php echo wp_kses_post($paginate); ?></div></div>
			<?php } ?>              
		</div>
	   <?php

	}
}?>