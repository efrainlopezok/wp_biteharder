<?php

class SPM_Child_Pages extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'description' => __( 'List children of currently displayed page in your sidebar.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'spm_child_pages', __('Child Pages'), $widget_ops );
	}

	public function widget( $args, $instance ) {
		global $post;
		
		$instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$instance['depth'] = isset( $instance['depth'] ) ? $instance['depth'] : false;

		echo $args['before_widget'];

		if ( !empty($instance['title']) )
			echo $args['before_title'] . $instance['title'] . $args['after_title'];

		?>
		<ul class="menu">
			<?php wp_list_pages( array('child_of' => $post->ID, 'depth' => $instance['depth'], 'title_li' => false) ); ?>
		</ul>
		<?php

		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( ! empty( $new_instance['title'] ) ) {
			$instance['title'] = sanitize_text_field( $new_instance['title'] );
		}
		$instance['depth'] = (int) $new_instance['depth'];
		
		return $instance;
	}

	public function form( $instance ) {
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$depth = (int) $instance['depth'];

		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ) ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id( 'depth' ); ?>"><?php _e( 'Depth:' ) ?></label>
		<input type="number" step="1" min="-1" class="tiny-text" id="<?php echo $this->get_field_id( 'depth' ); ?>" name="<?php echo $this->get_field_name( 'depth' ); ?>" value="<?php echo esc_attr( $depth ); ?>"/>
		<span class="description"><?php _e( '(0 for all pages)' ); ?></span></p>
		<?php
	}
}
register_widget('SPM_Child_Pages');