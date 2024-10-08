<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Color;
use Elementor\Utils;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Text_Stroke;
use Elementor\Global_Colors;


defined('ABSPATH') || die();

class SVTheme_Elementor_Counter_Widget extends \Elementor\Widget_Base
{

	/**
	 * Get widget name.
	 *
	 * Retrieve counter widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'rt-counter';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve counter widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return esc_html__('SV Counter', 'rtelements');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve counter widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'glyph-icon flaticon-count';
	}

	/**
	 * Retrieve the list of scripts the counter widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.3.0
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_categories()
	{
		return ['pielements_category'];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords()
	{
		return ['counter'];
	}

	/**
	 * Register counter widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls()
	{
		$this->start_controls_section(
			'section_counter',
			[
				'label' => esc_html__('Counter', 'rtelements'),
			]
		);

		$this->add_control(
			'style',
			[
				'label'   => esc_html__('Select Counter Style', 'rtelements'),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__('Style 1', 'rtelements'),
					'style2' => esc_html__('Style 2', 'rtelements'),
					'style3' => esc_html__('Style 3', 'rtelements'),
					'style4' => esc_html__('Style 4', 'rtelements'),
				],
			]
		);

		$this->add_control(
			'number',
			[
				'label' => esc_html__('Counter Number', 'rtelements'),
				'type' => Controls_Manager::NUMBER,
				'default' => 100,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'parameter',
			[
				'label' => esc_html__( 'Parameter', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'K', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'suffix',
			[
				'label' => esc_html__('Number Prefix', 'rtelements'),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => esc_html__('Prefix', 'rtelements'),
				'separator' => 'before',
			]

		);

		$this->add_control(
			'prefix',
			[
				'label' => esc_html__('Number Suffix', 'rtelements'),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => 'Suffix',
				'separator' => 'before',
			]
		);



		$this->add_control(
			'title',
			[
				'label' => esc_html__('Counter Title', 'rtelements'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__('Happy Clients', 'rtelements'),
				'placeholder' => esc_html__('Clients', 'rtelements'),
				'separator' => 'before',
			]

		);

		$this->add_control(
			'text',
			[
				'label' => esc_html__('Counter Text', 'rtelements'),
				'type' => Controls_Manager::TEXTAREA,
				'label_block' => true,
				'default' => esc_html__('On the other hand we denounce', 'rtelements'),
				'separator' => 'before',
				'condition' => ['style' => ['style2', 'style3']],
			]

		);

		$this->add_control(
			'icon_type',
			[
				'label'   => esc_html__('Select Icon Type', 'rtelements'),
				'type'    => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon' => esc_html__('Icon', 'rtelements'),
					'image' => esc_html__('Image', 'rtelements'),

				],
				'condition' => [
					'style' => ['style1', 'style2', 'style3']
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'selected_icon',
			[
				'label' => esc_html__('Select Icon', 'rtelements'),
				'type' => Controls_Manager::ICON,
				'options' => rsaddon_pro_get_icons(),
				'default' => 'fa fa-smile-o',
				'separator' => 'before',

				'condition' => [
					'style' => 'style1',
					'style' => 'style3',
				],

			]
		);

		$this->add_control(
			'icon',
			[
				'label' => esc_html__('Icon', 'rsaddon'),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				]

			]
		);


		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html__('Alignment', 'rtelements'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__('Left', 'rtelements'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', 'rtelements'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__('Right', 'rtelements'),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__('Justify', 'rtelements'),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .counter-top-area' => 'text-align: {{VALUE}}'
				],
				'separator' => 'before',
				'condition' => [
					'style' => ['style1', 'style2', 'style3'],
				],
			]
		);

		$this->add_responsive_control(
			'align2',
			[
				'label' => esc_html__('Alignment', 'rtelements'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__('Left', 'rtelements'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', 'rtelements'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__('Right', 'rtelements'),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__('Justify', 'rtelements'),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .rs-counter-list' => 'justify-content: {{VALUE}}'
				],
				'separator' => 'before',
				'condition' => [
					'style' => 'style5',
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_number',
			[
				'label' => esc_html__('Number', 'rtelements'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'number_color',
			[
				'label' => esc_html__('Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .count-number span' => 'color: {{VALUE}};',
					'{{WRAPPER}} .single-counter-up-start-solari .main-content .title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'number_hover_color',
			[
				'label' => esc_html__('Hover Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-top-area:hover .count-number span' => 'color: {{VALUE}};',
					'{{WRAPPER}} .single-counter-up-start-solari .main-content .title:hover' => 'color: {{VALUE}};',
				],
			]
		);

		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'elelements_typography',
				'selector' => '{{WRAPPER}} .single-counter-up-start-solari .main-content .title',
			]
		);

		$this->add_control(
			'show_background',
			[
				'label'        => esc_html__('Show Text Background', 'pielements'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => esc_html__('Show', 'pielements'),
				'label_off'    => esc_html__('Hide', 'pielements'),
				'return_value' => 'yes',
				'default'      => 'no',
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'text_bg_color',
				'label' => esc_html__('Text Background Color', 'elementor'),
				'types' => ['gradient'],
				'exclude' => ['classic', 'image'],
				'selector' => '{{WRAPPER}} .counter-top-area.yes .rs-counter-list .count-text .rs-counter',
				'condition' => [
					'show_background' => 'yes',
				],
				'fields_options' => [
					'background' => [
						'default' => 'gradient',
					],
				],

			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Typography', 'rtelements'),
				'name' => 'typography_number',
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .count-number span',
				'condition' => [
					'style' => ['style1', 'style2'],
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Typography', 'rtelements'),
				'name' => 'style3_number_typography',
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .counter-top-area.style3 .rts-counter-list .count-text .count-number .rs-counter',
				'condition' => [
					'style' => 'style3',
				],
			]
		);

		$this->add_control(
			'number_top_spacing',
			[
				'label' => esc_html__('Padding', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .count-number span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Sufix Typography', 'rtelements'),
				'name' => 'typography_suffix',
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .count-number span.suffix',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Prefix Typography', 'rtelements'),
				'name' => 'typography_prefix',
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .count-number span.prefix',
			]
		);

		$this->add_group_control(
			Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'number_stroke',
				'selector' => '{{WRAPPER}} .count-text .rs-counter, .count-number span.prefix, .count-number span.suffix',
			]
		);
		$this->add_control(
			'number_hover_stroke_color',
			[
				'label' => esc_html__('Hover Stroke Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-top-area:hover .rs-counter' => 'stroke: {{VALUE}};',
					'{{WRAPPER}} .counter-top-area:hover .rs-counter, .counter-top-area:hover span.prefix, .counter-top-area:hover span.suffix' => '-webkit-text-stroke-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__('Title', 'rtelements'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__('Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Elementor\Core\Schemes\Color::get_type(),
					'value' => Elementor\Core\Schemes\Color::COLOR_2,
				],
				'selectors' => [
					'{{WRAPPER}} .count-text .title' => 'color: {{VALUE}};',
					'{{WRAPPER}} .single-counter-up-start-solari .main-content p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'title_hover_color',
			[
				'label' => esc_html__('Hover Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-top-area:hover .count-text .title' => 'color: {{VALUE}};',
					'{{WRAPPER}} .single-counter-up-start-solari .main-content p:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_title',
				'selector' => '{{WRAPPER}} .count-text .title,.single-counter-up-start-solari .main-content p',
			]
		);

		$this->add_control(
			'counter_title',
			[
				'label' => esc_html__('Padding', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-top-area .rts-counter-list .count-text .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .single-counter-up-start-solari .main-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_title_content',
			[
				'label' => esc_html__('Content', 'rtelements'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);



		$this->add_responsive_control(
			'counter_title_content',
			[
				'label' => esc_html__('Padding', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-top-area.style2 .rts-counter-list .count-text .text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

				],
			]
		);

		$this->add_responsive_control(
			'counter_title_content_margin',
			[
				'label' => esc_html__('Margin', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-top-area.style2 .rts-counter-list .count-text .text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'section_text',
			[
				'label' => esc_html__('Text', 'rtelements'),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'style' => 'style3',
				]
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__('Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Elementor\Core\Schemes\Color::get_type(),
					'value' => Elementor\Core\Schemes\Color::COLOR_2,
				],
				'selectors' => [
					'{{WRAPPER}} .count-text .text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'text_hover_color',
			[
				'label' => esc_html__('Hover Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-top-area:hover .count-text .text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_text',
				'selector' => '{{WRAPPER}} .count-text .text',
			]
		);

		$this->add_control(
			'counter_text',
			[
				'label' => esc_html__('Padding', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-top-area .rs-counter-list .count-text .text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_icon',
			[
				'label' => esc_html__('Icon/Image', 'rtelements'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'icon_align',
			[
				'label' => esc_html__('Alignment', 'rtelements'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__('Left', 'rtelements'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', 'rtelements'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__('Right', 'rtelements'),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__('Justify', 'rtelements'),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .counter-icon' => 'text-align: {{VALUE}}'
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Typography', 'rtelements'),
				'name' => 'typography_icon',
				'selector' => '{{WRAPPER}} .counter-icon i',
				'condition' => [
					'icon_type' => 'icon'
				]
			]
		);

		$this->add_responsive_control(
			'icon_width',
			[
				'label' => esc_html__('Icon/Image Part Width', 'rtelements'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 400,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .counter-icon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'icon_height',
			[
				'label' => esc_html__('Icon/Image Part Height', 'rtelements'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 400,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .counter-icon' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'icon_line_height',
			[
				'label' => esc_html__('Icon/Image Part Line Height', 'rtelements'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 400,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .counter-icon, {{WRAPPER}} .counter-icon i' => 'line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);


		$this->add_responsive_control(
			'image_width',
			[
				'label' => esc_html__('Image Width', 'rtelements'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 400,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .counter-icon img' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'icon_type' => 'image'
				],
			]
		);

		$this->add_responsive_control(
			'image_height',
			[
				'label' => esc_html__('Image Height', 'rtelements'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 400,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .counter-icon img' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'icon_type' => 'image'
				],
			]
		);

		$this->add_responsive_control(
			'icon_padding',
			[
				'label' => esc_html__('Icon Part Padding', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'icon_margin',
			[
				'label' => esc_html__('Icon Part Margin', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->start_controls_tabs('back_part_btn_tabs');

		$this->start_controls_tab(
			'icon_tabs_normal',
			[
				'label' => esc_html__('Normal', 'rtelements'),
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'icon_part_border',
				'selector' => '{{WRAPPER}} .counter-icon',
			]
		);

		$this->add_control(
			'icon_part_border_radius',
			[
				'label' => esc_html__('Border Radius', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'icon_part_box_shadow',
				'selector' => '{{WRAPPER}} .counter-icon',
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__('Icon Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-icon i' => 'color: {{VALUE}};',
					'{{WRAPPER}} .counter-icon svg path' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'icon_part_bg',
				'label' => esc_html__('Background', 'rtelements'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .counter-icon',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'icon_tabs_hover',
			[
				'label' => esc_html__('Hover', 'rtelements'),
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'icon_part_hover_border',
				'selector' => '{{WRAPPER}} .counter-top-area:hover .counter-icon',
			]
		);

		$this->add_control(
			'icon_part_hover_border_radius',
			[
				'label' => esc_html__('Border Radius', 'rtelements'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .counter-top-area:hover .counter-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'icon_part_hover_box_shadow',
				'selector' => '{{WRAPPER}} .counter-top-area:hover .counter-icon',
			]
		);

		$this->add_control(
			'icon_hover_color',
			[
				'label' => esc_html__('Icon Hover Color', 'rtelements'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-top-area:hover .counter-icon i' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'icon_part_hover_bg',
				'label' => esc_html__('Background', 'rtelements'),
				'types' => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .counter-icon',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tab();
		$this->end_controls_section();
	}

	/**
	 * Render counter widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	/**
	 * Render counter widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		$this->add_inline_editing_attributes('suffix', 'basic');
		$this->add_render_attribute('suffix', 'class', 'suffix');

		$this->add_inline_editing_attributes('number', 'basic');
		$this->add_render_attribute('number', 'class', 'rs-counter');

		$this->add_inline_editing_attributes('prefix', 'basic');
		$this->add_render_attribute('prefix', 'class', 'prefix');

		$this->add_inline_editing_attributes('title', 'basic');
		$this->add_render_attribute('title', 'class', 'title');



		?>


		<script>


			jQuery(document).ready(function($) {
				$('.counter').each(function() {
					var $this = $(this);
					var target = parseInt($this.attr('data-target'));
					var duration = 2000; // Animation duration in milliseconds
					var step = Math.ceil(target / (duration / 10)); // Calculate the step increment

					$({
						countNum: 0
					}).animate({
						countNum: target
					}, {
						duration: duration,
						step: function() {
							$this.text(Math.floor(this.countNum));
						},
						complete: function() {
							$this.text(target); // Ensure final value is accurate
						}
					});
				});
			});
		</script>


		<?php if ($settings['style'] == 'style1' or $settings['style'] == 'style2' or $settings['style'] == 'style3') : ?>
			<div class="counter-top-area <?php echo esc_attr($settings['show_background']); ?> <?php echo esc_attr($settings['style']); ?>">
				<div class="rts-counter-list">
					<div class="rts-counter-list-inner">
						<?php if (!empty($settings['selected_icon']) || !empty($settings['selected_image']['url'])) { ?>
							<div class="counter-icon">
								<?php if (!empty($settings['selected_icon'])) : ?>
									<i class="fa <?php echo esc_html($settings['selected_icon']); ?>"></i>
								<?php endif; ?>
								<?php if (!empty($settings['icon'])) : ?>
									<?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
								<?php endif; ?>
							</div>
						<?php } ?>

						<div class="count-text">
							<div class="count-number">
								<?php if ($settings['suffix']) : ?><span <?php echo wp_kses_post($this->print_render_attribute_string('suffix')); ?>><?php echo esc_html($settings['suffix']); ?></span><?php endif; ?>
								<span data-letters="500" <?php echo wp_kses_post($this->print_render_attribute_string('number')); ?>> <?php echo esc_html($settings['number']); ?></span>
								<?php if ($settings['prefix']) : ?><span <?php echo wp_kses_post($this->print_render_attribute_string('prefix')); ?>><?php echo esc_html($settings['prefix']); ?></span><?php endif; ?>
							</div>

							<?php if (!empty($settings['title'])) : ?>
								<span <?php echo wp_kses_post($this->print_render_attribute_string('title')); ?>> <?php echo esc_html($settings['title']); ?></span>
							<?php endif; ?>

							<?php if (!empty($settings['text']) && $settings['style'] == 'style2') : ?>
								<div class="text"> <?php echo esc_html($settings['text']); ?></div>
							<?php endif; ?>

						</div>
					</div>

					<?php if (!empty($settings['text']) && $settings['style'] == 'style3') : ?>
						<div class="text"> <?php echo esc_html($settings['text']); ?></div>
					<?php endif; ?>


				</div>
			</div>
		<?php endif; ?>




		<?php if ($settings['style'] == 'style4') : ?>

			<div class="single-counter-up-start-solari">
				<?php if (!empty($settings['number'])) :   ?>
					<div class="bg-text"><?php echo esc_html($settings['number']) ?></span><?php echo !empty($settings['parameter']) ? esc_html($settings['parameter']) : ''; ?></div>
				<?php endif ?>
				<div class="main-content">
					<?php if (!empty($settings['number'])) :   ?>
						<!-- <h2 class="title"><span class="counter"><?php echo esc_html($settings['number']) ?></span></h2> -->
						<h2 class="title">
							<span class="counter" data-target="<?php echo esc_attr($settings['number']); ?>"><?php echo esc_html($settings['number']) ?></span><?php echo !empty($settings['parameter']) ? esc_html($settings['parameter']) : ''; ?>

						</h2>

					<?php endif ?>
					<?php if (!empty($settings['title'])) :   ?>
						<p><?php echo esc_html($settings['title']) ?></p>
					<?php endif ?>
				</div>
			</div>

		<?php endif; ?>






<?php
	}
}
