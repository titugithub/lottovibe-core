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
				'label' => esc_html__( 'Choose Image One', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'image2',
			[
				'label' => esc_html__( 'Choose Image Two', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'icontext',
			[
				'label' => esc_html__( 'Icon Text', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,

			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Next Draw', 'plugin-name' ),
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
				<div class="draw-nextwrap-v4wrap draw-nextwrap-v5wrap d-flex
            justify-content-center align-items-xl-center align-items-center">
					<div class="draw-netwrap-inner">
						<div class="thumb" data-aos="zoom-in-right" data-aos-duration="1600">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/banner/next-draw-catev5.png" alt="img">
						</div>
						<div class="right-side-nextdraw">
							<div class="watch-live-wrap position-relative">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/global/how1-arrow.png" alt="img" class="next-arrow">
								<div class="watch-thumb cmn-width">
									<img src="<?php echo get_template_directory_uri()?>/assets/images/banner/draw-watch.png" alt="img" class="radius-circle">
								</div>
								<a href="#" class="draw-watch cmn-width d-flex align-items-center justify-content-center">
									<span>
										<span class="icon-lonk">
											<svg width="67" height="16" viewBox="0 0 67 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M66.7071 8.70711C67.0976 8.31659 67.0976 7.68342 66.7071 7.2929L60.3431 0.928937C59.9526 0.538413 59.3195 0.538413 58.9289 0.928937C58.5384 1.31946 58.5384 1.95263 58.9289 2.34315L64.5858 8.00001L58.9289 13.6569C58.5384 14.0474 58.5384 14.6805 58.9289 15.0711C59.3195 15.4616 59.9526 15.4616 60.3431 15.0711L66.7071 8.70711ZM-8.74228e-08 9L66 9.00001L66 7.00001L8.74228e-08 7L-8.74228e-08 9Z" fill="white" />
											</svg>
										</span>
										<span class="watch-text">
											<svg width="68" height="149" viewBox="0 0 68 149" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M7.90368 19.8414L9.01768 6.44135L10.7599 7.21924L9.79341 17.7283L17.0549 10.0299L18.3534 10.6097L17.3922 21.2393L24.6813 13.435L26.3413 14.1762L17.075 23.9364L15.6451 23.2979L16.5273 12.8893L9.33362 20.4799L7.90368 19.8414Z" fill="white" />
												<path d="M22.6539 27.83C22.1644 27.4626 21.7998 27.0389 21.56 26.5588C21.3201 26.0787 21.2075 25.5891 21.2221 25.0899C21.2463 24.5979 21.4132 24.1456 21.723 23.7329C22.112 23.2146 22.5477 22.904 23.0301 22.8009C23.5221 22.7051 24.1209 22.8169 24.8264 23.1364C25.5415 23.463 26.4173 24.0154 27.4538 24.7933L27.9433 25.1607L28.2242 24.7864C28.6348 24.2394 28.815 23.7594 28.7647 23.3466C28.7145 22.9338 28.4254 22.5293 27.8975 22.1331C27.4945 21.8305 27.0445 21.5904 26.5478 21.4126C26.0583 21.2252 25.5051 21.1026 24.8883 21.0448L25.2092 19.6877C25.7684 19.7023 26.3792 19.8381 27.0415 20.0952C27.7038 20.3522 28.2845 20.668 28.7835 21.0426C29.7433 21.7629 30.2806 22.5263 30.3955 23.3328C30.5176 24.1296 30.2149 25.0127 29.4874 25.9821L26.235 30.3153L24.8674 29.2888L25.7426 28.1227C25.2673 28.3961 24.7609 28.5112 24.2233 28.4678C23.6857 28.4244 23.1626 28.2118 22.6539 27.83ZM23.7198 27.0096C24.2381 27.3986 24.8068 27.5404 25.4261 27.435C26.0453 27.3296 26.5638 26.9986 26.9816 26.442L27.2733 26.0533L26.7983 25.6967C26.0977 25.1708 25.5206 24.7902 25.0671 24.5549C24.6232 24.3267 24.2536 24.2294 23.9584 24.2629C23.68 24.294 23.4363 24.4487 23.2274 24.727C22.9537 25.0917 22.8551 25.4829 22.9318 25.9005C23.0157 26.3085 23.2783 26.6782 23.7198 27.0096Z" fill="white" />
												<path d="M31.1319 35.1575C30.3521 34.376 29.9711 33.595 29.9889 32.8144C30.0067 32.0337 30.3936 31.2662 31.1496 30.5118L34.1565 27.5112L32.9486 26.3008L33.9425 25.309L35.1503 26.5195L37.0233 24.6504L38.3075 25.9373L36.4345 27.8063L38.3544 29.7303L37.3606 30.722L35.4407 28.7981L32.5356 31.697C32.0855 32.1462 31.8389 32.5787 31.7961 32.9945C31.7617 33.4187 31.9606 33.8474 32.3929 34.2806C32.5285 34.4165 32.6727 34.5355 32.8253 34.6374C32.9864 34.731 33.1518 34.8202 33.3214 34.9053L32.5565 36.0754C32.3529 36.0243 32.1154 35.9052 31.8441 35.7183C31.5727 35.5483 31.3354 35.3614 31.1319 35.1575Z" fill="white" />
												<path d="M35.5868 40.3624C35.0427 39.6454 34.7194 38.9116 34.6169 38.1609C34.5311 37.4126 34.6518 36.6883 34.9791 35.9881C35.316 35.2806 35.8573 34.644 36.6029 34.0782C37.7118 33.2368 38.8259 32.8886 39.9451 33.0335C41.0644 33.1785 42.0302 33.7863 42.8426 34.857C43.1762 35.2967 43.4298 35.7897 43.6032 36.336C43.7767 36.8822 43.8347 37.3955 43.7774 37.8758L42.4111 38.1895C42.4566 37.7332 42.4134 37.299 42.2815 36.887C42.1664 36.4772 42 36.1289 41.7824 35.8421C41.2674 35.1634 40.6534 34.8008 39.9403 34.7544C39.2441 34.7103 38.504 34.9856 37.7201 35.5804C36.9362 36.1752 36.4574 36.8247 36.2838 37.5288C36.1269 38.2353 36.306 38.9279 36.821 39.6067C37.0386 39.8935 37.3244 40.1511 37.6785 40.3795C38.0494 40.6102 38.4606 40.7651 38.9123 40.8442L38.228 42.0865C37.7596 42.0051 37.282 41.8025 36.7954 41.4788C36.316 41.1647 35.9132 40.7926 35.5868 40.3624Z" fill="white" />
												<path d="M39.0489 44.6679L50.3458 38.8871L51.1739 40.5056L46.4789 42.9081C47.0643 42.9455 47.5839 43.1312 48.0378 43.4651C48.5079 43.8042 48.8878 44.2568 49.1775 44.823C50.1232 46.6711 49.5492 48.1308 47.4554 49.2023L42.6322 51.6704L41.804 50.052L46.5311 47.633C47.2041 47.2887 47.6272 46.9037 47.8003 46.4781C47.9789 46.0632 47.9261 45.578 47.6418 45.0225C47.3083 44.3708 46.8322 43.954 46.2133 43.7719C45.6106 43.5951 44.9727 43.6788 44.2997 44.0232L39.8771 46.2863L39.0489 44.6679Z" fill="white" />
												<path d="M45.7796 59.7954L58.1707 57.0575L58.5746 58.8854L47.7478 61.2777L49.1031 67.4117L47.5388 67.7574L45.7796 59.7954Z" fill="white" />
												<path d="M58.4303 68.5628L60.3123 68.3886L60.5081 70.5035L58.6261 70.6778L58.4303 68.5628ZM47.6733 69.7214L56.4199 68.9116L56.5875 70.7219L47.8409 71.5317L47.6733 69.7214Z" fill="white" />
												<path d="M48.1042 76.9144L57.0142 73.4417L56.9461 75.4026L50.179 77.851L56.7573 80.8353L56.6929 82.6882L48.0473 78.5514L48.1042 76.9144Z" fill="white" />
												<path d="M46.7631 88.3274C47.0562 86.9176 47.6805 85.8891 48.6361 85.242C49.6036 84.5974 50.7746 84.4179 52.1492 84.7036C53.0304 84.8867 53.7692 85.2241 54.3656 85.7157C54.9714 86.2216 55.3963 86.8308 55.6404 87.5434C55.8845 88.2559 55.9211 89.0234 55.7502 89.8459C55.5036 91.0325 54.9276 91.8872 54.0223 92.4099C53.1288 92.9351 52.0182 93.0597 50.6905 92.7838L50.0913 92.6593L51.4026 86.3501C49.5899 86.1082 48.5004 86.8684 48.1341 88.6307C48.0316 89.1242 48.0078 89.6218 48.0629 90.1235C48.1155 90.6369 48.2741 91.1418 48.5387 91.638L47.1952 91.9103C46.9233 91.4493 46.7509 90.8926 46.6782 90.2402C46.6054 89.5877 46.6337 88.9501 46.7631 88.3274ZM54.4843 89.6563C54.6381 88.9161 54.5311 88.2811 54.1632 87.7511C53.7954 87.2212 53.2394 86.8299 52.4952 86.5772L51.4953 91.3884C52.3016 91.5192 52.9623 91.4359 53.4776 91.1385C54.0047 90.8436 54.3402 90.3495 54.4843 89.6563Z" fill="white" />
												<path d="M44.138 99.0138L55.3736 104.913L53.2901 108.881C52.3195 110.73 51.0886 111.9 49.5974 112.391C48.1006 112.892 46.4492 112.669 44.643 111.721C42.8368 110.773 41.7099 109.537 41.2623 108.015C40.8198 106.508 41.0839 104.831 42.0545 102.982L44.138 99.0138ZM44.6543 101.399L43.4912 103.614C42.0353 106.387 42.7205 108.516 45.5466 110C48.3622 111.478 50.4979 110.83 51.9538 108.057L53.1168 105.842L44.6543 101.399Z" fill="white" />
												<path d="M37.063 111.492L44.0018 116.878L42.9202 118.271L41.6831 117.311C42.2282 118.312 42.1066 119.417 41.3184 120.628L40.9826 121.12L39.6826 120.27L40.2705 119.336C41.1259 117.98 40.9659 116.846 39.7905 115.933L35.9372 112.942L37.063 111.492Z" fill="white" />
												<path d="M30.318 119.159C30.9621 118.547 31.6471 118.153 32.3732 117.977C33.0993 117.801 33.8242 117.832 34.5479 118.072C35.2712 118.328 35.9551 118.796 36.5995 119.475C37.2439 120.154 37.6713 120.856 37.8815 121.583C38.0914 122.327 38.0894 123.057 37.8755 123.773C37.6616 124.489 37.2327 125.153 36.5887 125.764C35.962 126.359 35.2857 126.745 34.5596 126.921C33.8335 127.097 33.1045 127.061 32.3725 126.813C31.6487 126.574 30.9646 126.114 30.3202 125.436C29.6758 124.757 29.2487 124.045 29.0389 123.301C28.8373 122.566 28.8435 121.841 29.0573 121.125C29.2712 120.409 29.6914 119.753 30.318 119.159ZM31.2846 120.177C30.7451 120.689 30.4958 121.298 30.5368 122.003C30.5779 122.709 30.9496 123.432 31.6518 124.172C32.3541 124.911 33.0523 125.316 33.7465 125.385C34.449 125.462 35.0701 125.245 35.6097 124.733C36.158 124.212 36.4116 123.599 36.3705 122.894C36.3377 122.197 35.9702 121.479 35.2679 120.739C34.5657 119.999 33.8633 119.59 33.1608 119.513C32.4583 119.435 31.8329 119.656 31.2846 120.177Z" fill="white" />
												<path d="M23.0198 125.785L30.3821 131.63L28.7723 132.585L23.3454 128.061L24.6549 135.029L23.4475 135.746L17.9713 131.209L19.3301 138.189L17.7977 139.099L16.1935 129.836L17.6176 128.991L22.8207 133.208L21.5957 126.63L23.0198 125.785Z" fill="white" />
											</svg>
										</span>
									</span>
								</a>
							</div>
							<div class="draw-countdraw text-center position-relative">
								<h2 class="fw_800 n4-clr mb-xxl-8 mb-5">
									Next Draw
								</h2>
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
				var deadline = new Date('<?php echo esc_js($settings['countdown_date']); ?>');
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
			}
			return '00';
		}
	}
