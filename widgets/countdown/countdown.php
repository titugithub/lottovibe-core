<?php

/**
 * Elementor RS Countdown Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */


use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Background;

defined('ABSPATH') || die();

class Rsaddon_Elementor_Pro_Countdown_Widget extends \Elementor\Widget_Base
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
		return 'rs-timecounter';
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
		return esc_html__('SV Countdown', 'rsaddon');
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
		return 'glyph-icon flaticon-progress';
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
		return ['rsaddon_category'];
	}
	/**
	 * Register services widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls()
	{


		$this->start_controls_section(
			'content_section',
			[
				'label' => __('Content', 'elementor-custom'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image1',
			[
				'label' => esc_html__('Choose Image One', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'image2',
			[
				'label' => esc_html__('Choose Image Two', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'arrowimage',
			[
				'label' => esc_html__('Arrow Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,

			]
		);

		$this->add_control(
			'icontext',
			[
				'label' => esc_html__('Icon Text', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::ICONS,

			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__('Title', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Next Draw', 'plugin-name'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'countdown_date',
			[
				'label' => __('Countdown Date', 'elementor-custom'),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default' => date('Y-m-d H:i', strtotime('+10 days')),
				'picker_options' => [
					'enableTime' => true,
					'dateFormat' => 'Y-m-d H:i',
				],
			]
		);

		$this->end_controls_section();



		// ============================Style=======================================//


		$this->start_controls_section(
			 'style',
			 [
				'label' => esc_html__('Style', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);

		
		$this->add_control(
			'more_options',
			[
				'label' => esc_html__( 'Watch Live Draw', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'livedraw_color',
			[
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .draw-watch' => 'background: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'more_ofdptions',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
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

		$this->add_control(
			'more_ofdptionsnum',
			[
				'label' => esc_html__( 'Number', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'numbet_typ',
				'selector' => '{{WRAPPER}} span.text-hed.days',
		
			]
		);
		
		$this->add_control(
			'numbet_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.text-hed.days' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'numbet_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} span.text-hed.days' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		
		$this->add_responsive_control(
			'numbet_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} span.text-hed.days' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
			]
		);

		$this->add_control(
			'more_ofdptionsnumf',
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
				'selector' => '{{WRAPPER}} .draw-timerwrap .draw-timer-item .smalltext',
		
			]
		);
		
		$this->add_control(
			'text_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .draw-timerwrap .draw-timer-item .smalltext' => 'color: {{VALUE}} !important;',
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
					'{{WRAPPER}} .draw-timerwrap .draw-timer-item .smalltext' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
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
					'{{WRAPPER}} .draw-timerwrap .draw-timer-item .smalltext' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
			]
		);

		
		
		
		$this->end_controls_section();







	}

	/**
	 * Render progress widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render()
	{
		$settings = $this->get_settings_for_display();
		$deadline = strtotime($settings['countdown_date']); // Convert date to timestamp
		$is_edit_mode = \Elementor\Plugin::$instance->editor->is_edit_mode();
	
		?>
	
		<section class="next-draw-sectionv5">
			<div class="container">
				<div class="draw-nextwrap-v4wrap draw-nextwrap-v5wrap d-flex justify-content-center align-items-xl-center align-items-center">
					<div class="draw-netwrap-inner">
						<div class="thumb" data-aos="zoom-in-right" data-aos-duration="1600">
							<?php if (!empty($settings['image1']['url'])) : ?>
								<img src="<?php echo esc_url($settings['image1']['url']); ?>" alt="img">
							<?php endif; ?>
						</div>
						<div class="right-side-nextdraw">
							<div class="watch-live-wrap position-relative">
								<?php if (!empty($settings['arrowimage']['url'])) : ?>
									<img src="<?php echo esc_url($settings['arrowimage']['url']); ?>" alt="img" class="next-arrow">
								<?php endif; ?>
								<?php if (!empty($settings['image2']['url'])) : ?>
									<div class="watch-thumb cmn-width">
										<img src="<?php echo esc_url($settings['image2']['url']); ?>" alt="img" class="radius-circle">
									</div>
								<?php endif; ?>
	
								<a href="#" class="draw-watch cmn-width d-flex align-items-center justify-content-center">
									<span>
										<span class="icon-lonk">
											<svg width="67" height="16" viewBox="0 0 67 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M66.7071 8.70711C67.0976 8.31659 67.0976 7.68342 66.7071 7.2929L60.3431 0.928937C59.9526 0.538413 59.3195 0.538413 58.9289 0.928937C58.5384 1.31946 58.5384 1.95263 58.9289 2.34315L64.5858 8.00001L58.9289 13.6569C58.5384 14.0474 58.5384 14.6805 58.9289 15.0711C59.3195 15.4616 59.9526 15.4616 60.3431 15.0711L66.7071 8.70711ZM-8.74228e-08 9L66 9.00001L66 7.00001L8.74228e-08 7L-8.74228e-08 9Z" fill="white" />
											</svg>
										</span>
										<span class="watch-text">
											<?php \Elementor\Icons_Manager::render_icon($settings['icontext'], ['aria-hidden' => 'true']); ?>
										</span>
									</span>
								</a>
							</div>
							<div class="draw-countdraw text-center position-relative">
								<?php if (!empty($settings['title'])) : ?>
									<h2 class="fw_800 n4-clr mb-xxl-8 mb-5 title">
										<?php echo esc_html($settings['title']); ?>
									</h2>
								<?php endif; ?>
	
								<div class="draw-timerwrap justify-content-center" id="clockdiv">
									<div class="draw-timer-item">
										<span class="text-hed days"><?php echo $is_edit_mode ? '00' : $this->calculate_remaining_time($deadline, 'days'); ?></span>
										<div class="smalltext">Days</div>
									</div>
									<div class="lborder-dot">:</div>
									<div class="draw-timer-item">
										<span class="text-hed hours"><?php echo $is_edit_mode ? '00' : $this->calculate_remaining_time($deadline, 'hours'); ?></span>
										<div class="smalltext">Hours</div>
									</div>
									<div class="lborder-dot">:</div>
									<div class="draw-timer-item">
										<span class="text-hed minutes"><?php echo $is_edit_mode ? '00' : $this->calculate_remaining_time($deadline, 'minutes'); ?></span>
										<div class="smalltext">Minutes</div>
									</div>
									<div class="lborder-dot">:</div>
									<div class="draw-timer-item">
										<span class="text-hed seconds"><?php echo $is_edit_mode ? '00' : $this->calculate_remaining_time($deadline, 'seconds'); ?></span>
										<div class="smalltext">Seconds</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var deadlineStr = '<?php echo esc_js($settings['countdown_date']); ?>';
				var deadline = new Date(deadlineStr);
	
				// Debug: Check parsed deadline
				console.log('Parsed Deadline:', deadline);
	
				var clockdiv = document.getElementById("clockdiv");
				if (clockdiv) {
					initializeClock(clockdiv, deadline);
				}
			});
	
			function getTimeRemaining(endtime) {
				var t = Date.parse(endtime) - Date.parse(new Date());
				var seconds = Math.floor((t / 1000) % 60);
				var minutes = Math.floor((t / 1000 / 60) % 60);
				var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
				var days = Math.floor(t / (1000 * 60 * 60 * 24));
				return {
					'total': t,
					'days': days,
					'hours': hours,
					'minutes': minutes,
					'seconds': seconds
				};
			}
	
			function initializeClock(clock, endtime) {
				var daysSpan = clock.querySelector('.days');
				var hoursSpan = clock.querySelector('.hours');
				var minutesSpan = clock.querySelector('.minutes');
				var secondsSpan = clock.querySelector('.seconds');
	
				function updateClock() {
					var t = getTimeRemaining(endtime);
					daysSpan.innerHTML = t.days;
					hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
					minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
					secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
	
					if (t.total <= 0) {
						clearInterval(timeinterval);
					}
				}
	
				updateClock();
				var timeinterval = setInterval(updateClock, 1000);
			}
		</script>
	
		<?php
	}
	
	private function calculate_remaining_time($deadline, $unit)
	{
		$now = time();
		$time_remaining = $deadline - $now;
	
		if ($time_remaining < 0) {
			return '00';
		}
	
		switch ($unit) {
			case 'days':
				return floor($time_remaining / (60 * 60 * 24));
			case 'hours':
				return floor(($time_remaining % (60 * 60 * 24)) / (60 * 60));
			case 'minutes':
				return floor(($time_remaining % (60 * 60)) / 60);
			case 'seconds':
				return floor($time_remaining % 60);
			default:
				return '00';
		}
	}
	}
	