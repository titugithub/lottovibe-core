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

class SVTheme_Elementor_Work_Widget extends \Elementor\Widget_Base
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
		return 'sv-work';
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
		return esc_html__('SV Work Process', 'rtelements');
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
			'work_content',
			[
				'label' => esc_html__('Content', 'plugin-name')
			]
		);
		$this->add_control(
			'work_content_style',
			[
				'label' => esc_html__( 'Work Process Style', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'textdomain' ),
					'style2' => esc_html__( 'Style 2', 'textdomain' ),
				],
			]
		);

		$this->add_control(
			'work_content_image',
			[
				'label' => esc_html__('Choose Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' =>[
					'work_content_style' => 'style1',
				]
			]
		);

		$this->add_control(
			'work_content_number',
			[
				'label' => esc_html__('Number', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('01', 'plugin-name'),
				'placeholder' => esc_html__('Type your number here', 'plugin-name'),
				'label_block' => true,
			]
		);


		$this->add_control(
			'work_content_title',
			[
				'label' => esc_html__('Title', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Default title', 'plugin-name'),
				'placeholder' => esc_html__('Type your title here', 'plugin-name'),
				'label_block' => true,
			]
		);


		$this->end_controls_section();

		// ==========================Style====================================//

		$this->start_controls_section(
			 'work_style_image',
			 [
				'label' => esc_html__('Image', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
				'condition' =>[
					'work_content_style' => 'style1',
				]
			 ]
		);
		
		$this->add_responsive_control(
			'work_style_image_height',
			[
				'label'       => esc_html__( 'Height', 'plugin-name' ),
				'type'        => Controls_Manager::TEXT,
				'description' => 'Unit in px',
				'selectors'   => [
					'{{WRAPPER}} .single-solari-steps-start .thumbnail img ' => 'height: {{VALUE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'work_style_image_width',
			[
				'label'       => esc_html__( 'Width', 'plugin-name' ),
				'type'        => Controls_Manager::TEXT,
				'description' => 'Unit in px',
				'selectors'   => [
					'{{WRAPPER}} .single-solari-steps-start .thumbnail img ' => 'width: {{VALUE}}px;',
				],
			]
		);
		$this->add_responsive_control(
			'work_style_image_border_radius',
			[
				'label'      => __('Border Radius', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .single-solari-steps-start .thumbnail img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				]
			]
		);
		
		
		
		$this->end_controls_section();


		$this->start_controls_section(
			 'work_style_number',
			 [
				'label' => esc_html__('Number', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'work_style_number_typ',
				'selector' => '{{WRAPPER}} .single-solari-steps-start .thumbnail .steps span, {{WRAPPER}} .rt-experience span',
		
			]
		);
		
		$this->add_control(
			'work_style_number_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-solari-steps-start .thumbnail .steps span' => '-webkit-text-stroke-color: {{VALUE}};',
					'{{WRAPPER}} .rt-experience span' => '-webkit-text-stroke-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'work_style_number_color_bac',
			[
				'label'     => esc_html__('Background Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-solari-steps-start .thumbnail .steps span' => 'background: {{VALUE}};',
				],
				'condition' =>[
					'work_content_style' => 'style1',
				]
			]
		);
		$this->add_responsive_control(
			'work_style_number_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .single-solari-steps-start .thumbnail .steps span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .rt-experience span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'work_style_number_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .single-solari-steps-start .thumbnail .steps span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .rt-experience span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);
		
		
		$this->end_controls_section();


		$this->start_controls_section(
			 'work_style_title',
			 [
				'label' => esc_html__('Title', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'work_style_title_typ',
				'selector' => '{{WRAPPER}} .content h5, {{WRAPPER}} .rt-experience h5',
		
			]
		);
		
		$this->add_control(
			'work_style_title_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content h5' => 'color: {{VALUE}};',
					'{{WRAPPER}} .rt-experience h5' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'work_style_title_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .content h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .rt-experience h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'work_style_title_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .content h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .rt-experience h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

		$work_style = $settings['work_content_style'];


		// Fill $html var with data
		if ($work_style =='style1'):
		?>
		<div class="single-solari-steps-start">
			<div class="thumbnail">
				<?php if (!empty($settings['work_content_image']['url'])) :   ?>
					<img src="<?php echo esc_url($settings['work_content_image']['url']) ?>" alt="steps">
				<?php endif ?>
				<div class="steps">
					<?php if (!empty($settings['work_content_number'])) :   ?>
						<span><?php echo esc_html($settings['work_content_number']) ?></span>
					<?php endif ?>
				</div>
			</div>
			<div class="content">
				<?php if (!empty($settings['work_content_title'])) :   ?>
					<h5 class="title"><?php echo esc_html($settings['work_content_title']) ?></h5>
				<?php endif ?>
			</div>
		</div>

		<?php elseif($work_style == 'style2'):?>
			<div class="experience-area rt-experience">
				<?php if (!empty($settings['work_content_number'])) :   ?>
					<span class="expe-year"><?php echo esc_html($settings['work_content_number']) ?></span>
				<?php endif ?>
				<?php if (!empty($settings['work_content_title'])) :   ?>
				  <h5><?php echo wp_kses_post($settings['work_content_title']) ?> </h5>
				<?php endif ?>
			</div>
		<?php endif;?>


<?php
	}
} ?>