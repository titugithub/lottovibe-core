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

class SVTheme_Elementor_Subtitle_Widget extends \Elementor\Widget_Base
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
		return 'react-subttile';
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
		return esc_html__('SV Subtitle', 'rtelements');
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
				'label' 		=> esc_html__( 'Alignment', 'plugin-name' ),
				'type' 			=> \Elementor\Controls_Manager::CHOOSE,
				'options' 		=> [
					'start' 		=> [
						'title' => esc_html__( 'Left', 'plugin-name' ),
						'icon' 	=> 'eicon-text-align-left',
					],
					'center' 	=> [
						'title' => esc_html__( 'Center', 'plugin-name' ),
						'icon' 	=> 'eicon-text-align-center',
					],
					'end' 	=> [
						'title' => esc_html__( 'Right', 'plugin-name' ),
						'icon' 	=> 'eicon-text-align-right',
					],
				],
				'default' 		=> 'start',
				'selectors' 	=> [
					'{{WRAPPER}} .subtitle-head ' => 'justify-content: {{VALUE}};',
					
					
		
						
				],
			]
		);



		$this->add_control(
			'icon',
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
				'default' => esc_html__('Default subtitle', 'plugin-name'),
				'label_block' => true,
			]
		);





		$this->end_controls_section();


		// ==================================Style==================================//


		$this->start_controls_section(
			'subtitle_style',
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
				'label' => esc_html__('Margin', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
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
			<div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down">
				<?php if (!empty($settings['icon']['url'])) :   ?>
					<img src="<?php echo esc_url($settings['icon']['url']) ?>" alt="<?php echo esc_attr("image") ?>">
				<?php endif ?>
				<?php if (!empty($settings['subtitle'])) :   ?>
					<h5 class="subtitle s1-clr fw_700">
						<?php echo wp_kses($settings['subtitle'], wp_kses_allowed_html('post'))  ?>
					</h5>
				<?php endif ?>
			</div>
		</div>









<?php
	}
} ?>