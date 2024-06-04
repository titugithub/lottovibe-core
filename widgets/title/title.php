<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class Reactheme_Elementor_Title_Widget extends \Elementor\Widget_Base
{

	/*
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'react-ttile';
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
		return esc_html__('SV Title', 'rtelements');
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
		return 'glyph-icon flaticon-letter';
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
			'content',
			[
				'label' => esc_html__('Content', 'plugin-name')
			]
		);

		$this->add_responsive_control(
			'content_align',
			[
				'label' 		=> esc_html__('Alignment', 'plugin-name'),
				'type' 			=> \Elementor\Controls_Manager::CHOOSE,
				'options' 		=> [
					'left' 		=> [
						'title' => esc_html__('Left', 'plugin-name'),
						'icon' 	=> 'eicon-text-align-left',
					],
					'center' 	=> [
						'title' => esc_html__('Center', 'plugin-name'),
						'icon' 	=> 'eicon-text-align-center',
					],
					'right' 	=> [
						'title' => esc_html__('Right', 'plugin-name'),
						'icon' 	=> 'eicon-text-align-right',
					],
				],
				'default' 		=> 'left',
				'selectors' 	=> [
					'{{WRAPPER}} .about-content-core ' => 'text-align: {{VALUE}};',




				],
			]
		);






		$this->add_control(
			'title',
			[
				'label' => esc_html__('Title', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Default title', 'plugin-name'),
				'label_block' => true,
			]
		);





		$this->end_controls_section();


		// ==================================Style==================================//



		$this->start_controls_section(
			'title_style',
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

		$settings = $this->get_settings_for_display();

		?>



		<div class="about-content-core">
			<div class="section__title mb-xxl-8 mb-6">
				<?php if (!empty($settings['title'])) :   ?>
					<span class="title display-four d-block n4-clr mb-xxl-4 mb-xl-3 mb-2" data-aos="zoom-in-right" data-aos-duration="1200">
						<?php echo wp_kses($settings['title'], wp_kses_allowed_html('post'))  ?>
					</span>
				<?php endif ?>

			</div>
		</div>









<?php
	}
} ?>