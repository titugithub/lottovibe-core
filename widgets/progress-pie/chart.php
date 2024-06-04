<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;

defined( 'ABSPATH' ) || die();

class Reacthemes_Elementor_chart_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'rts-chart';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'SV Chart', 'rsaddon' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'glyph-icon flaticon-percentage';
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
	public function get_categories() {
        return [ 'pielements_category'];
    }
	/**
	 * Register services widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_chart_settings',
			[
				'label' => esc_html__( 'Chart Settings', 'rt-addon' ),
			]
		);

		$this->add_control(
		    'chart_type',
		    [
		        'label' => esc_html__( 'Select Chart', 'rt-addon' ),
		        'type' => Controls_Manager::SELECT,
		        'options' => [
		            'pie' => esc_html__( 'Pie', 'rt-addon' ),
		            'doughnut' => esc_html__( 'Doughnut', 'rt-addon' ),
		            'bar' => esc_html__( 'Bar', 'rt-addon' ),
		            'line' => esc_html__( 'Line', 'rt-addon' ),
		            'radar' => esc_html__( 'Radar', 'rt-addon' )		           
		        ],
		        'default' => 'pie',            
		    ]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'label',
			[
				'label' => esc_html__( 'Label', 'rt-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Label', 'rt-addon' )
			]
		);

		$repeater->add_control(
			'value',
			[
				'label' => esc_html__( 'Value', 'rt-addon' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 0
			]
		);

		$repeater->add_control(
			'color',
			[
				'label' => esc_html__( 'Color', 'rt-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#4AAB3D'
			]
		);

		$this->add_control(
			'chart_data',
			[
				'label' => esc_html__( 'Chart Data', 'rt-addon' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ label }}}',
				'default' => [
					[
						'label' => esc_html__( 'Label 1', 'rt-addon' ),
						'value' => 30,
						'color' => '#4AAB3D',
					],
					[
						'label' => esc_html__( 'Label 2', 'rt-addon' ),
						'value' => 20,
						'color' => '#FF7029',
					],
					[
						'label' => esc_html__( 'Label 3', 'rt-addon' ),
						'value' => 35,
						'color' => '#6F8CA0',
					]
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
	protected function render() {		
		$settings = $this->get_settings_for_display();		
		$unique = rand(10,6554120);
		$chart_type = $settings['chart_type'];
		$chart_data = $settings['chart_data'];
	?>
		
	<div class="rt-chart-content">
		<canvas id="rtChart_<?php echo $unique; ?>" style="width: 400px; height: 400px;"></canvas>
	</div>

	<script type="text/javascript">
	    jQuery(document).ready(function () {
	    	const chartType = '<?php echo $chart_type; ?>';
	    	const chartData = <?php echo wp_json_encode( $chart_data ); ?>;
	        const xValues = chartData.map( data => data.label );
	        const yValues = chartData.map( data => data.value );
	        const colors = chartData.map( data => data.color );

	        new Chart("rtChart_<?php echo $unique; ?>", {
	          	type: chartType,
	          	data: {
	            	labels: xValues,
	            	datasets: [{
	              		backgroundColor: colors,
	              		data: yValues
	            	}]
	          	},
	          	options: {
	          		responsive : true,
	          		layout:{
	          			padding:0,
	          		},
	            	plugins: {
	              		legend: {
	              			align: 'start',
	                		position: 'bottom',
	                		Width: 50,
	                		Height: 150,
	                		labels: {
	                			color: '#1F1F25',
	                            padding: 25,
    	                        boxWidth:16,
    	                        boxHeight:16,
                                font: {
                                    size: 16,
                                    weight: 600,
                                }
	                        }
	              		}
	            	}
	          	}
	        });
	    });
	</script>     
	<?php
	}
}