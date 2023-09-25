<?php

function spm_add_meta_boxes() {
	
	// Custom Meta Boxes for page options
	add_meta_box('page-options', 'Options', 'spm_page_options_html', 'page', 'normal');
	
	// Custom Meta Boxes for Announcement options
	add_meta_box('announcement-options', 'Options', 'spm_announcement_options_html', 'announcement', 'normal');
	
}
add_action('add_meta_boxes', 'spm_add_meta_boxes');


/* ------- PAGE OPTIONS ------- */
function spm_page_options_html($post) {
	
	$pre_title = get_post_meta($post->ID, '_pre_title', true);
	$alternate_title = get_post_meta($post->ID, '_alternate_title', true);
	$sidebar_video = get_post_meta($post->ID, '_sidebar_video', true);
	$sidebar_video_title = get_post_meta($post->ID, '_sidebar_video_title', true);
	
	wp_nonce_field('page-options', 'page-nonce');
	
?>
<table class="form-table">
	<tr>
		<th scope="row">
			<label for="page-pre_title"><?php _e('Pre-Title', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="page-pre_title" name="page-pre_title" value="<?php echo esc_attr($pre_title); ?>" class="large-text" /><br />
			<span class="description"><?php _e('Enter text to appear above the title (optional).', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="page-alternate_title"><?php _e('Alternate Title', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="page-alternate_title" name="page-alternate_title" value="<?php echo esc_attr($alternate_title); ?>" class="large-text" /><br />
			<span class="description"><?php _e('Enter a title here to be displayed on the page instead of the original title above.', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="page-sidebar_video"><?php _e('Sidebar Video', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="page-sidebar_video" name="page-sidebar_video" value="<?php echo esc_attr($sidebar_video); ?>" class="large-text" /><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="page-sidebar_video"><?php _e('Sidebar Video Title', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="page-sidebar_video_title" name="page-sidebar_video_title" value="<?php echo esc_attr($sidebar_video_title); ?>" class="large-text" /><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
</table>
<?php
}


function spm_page_options_save_post($post_id) {
	
	if (
		$_POST['post_type'] != 'page' ||							// Check if saving a page
		defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||				// Don't run if autosaving
		!isset( $_POST['page-nonce'] ) ||							// Check if our nonce is set
		!wp_verify_nonce( $_POST['page-nonce'], 'page-options' ) ||	// Verify that the nonce is valid
		!current_user_can('edit_post', $post_id)					// Check the user's permissions
	)
		return $post_id;
	
	// Update the meta fields in the database
	update_post_meta( $post_id, '_pre_title', $_POST['page-pre_title'] );
	update_post_meta( $post_id, '_alternate_title', $_POST['page-alternate_title'] );
	update_post_meta( $post_id, '_sidebar_video', $_POST['page-sidebar_video'] );
	update_post_meta( $post_id, '_sidebar_video_title', $_POST['page-sidebar_video_title'] );
	
}
add_action('save_post', 'spm_page_options_save_post');
/* ------- END PAGE OPTIONS ------- */


/* ------- ANNOUNCEMENT OPTIONS ------- */
function spm_announcement_options_html($post) {
	
	$button_text = get_post_meta($post->ID, '_button_text', true);
	$button_url = get_post_meta($post->ID, '_button_url', true);
	
	wp_nonce_field('announcement-options', 'announcement-nonce');
	
?>
<table class="form-table">
	<tr>
		<th scope="row">
			<label for="announcement-button_text"><?php _e('Button Text', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="announcement-button_text" name="announcement-button_text" value="<?php echo esc_attr($button_text); ?>" class="large-text" /><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
	<tr>
		<th scope="row">
			<label for="announcement-button_url"><?php _e('Button URL', SPM_TEXT_DOMAIN); ?></label>
		</th>
		<td>
			<input type="text" id="announcement-button_url" name="announcement-button_url" value="<?php echo esc_attr($button_url); ?>" class="large-text" /><br />
			<span class="description"><?php _e('', SPM_TEXT_DOMAIN); ?></span>
		</td>
	</tr>
</table>
<?php
}


function spm_announcement_options_save_post($post_id) {
	
	if (
		$_POST['post_type'] != 'announcement' ||									// Check if saving an Announcement
		defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||								// Don't run if autosaving
		!isset( $_POST['announcement-nonce'] ) ||									// Check if our nonce is set
		!wp_verify_nonce( $_POST['announcement-nonce'], 'announcement-options' ) ||	// Verify that the nonce is valid
		!current_user_can('edit_post', $post_id)									// Check the user's permissions
	)
		return $post_id;
	
	// Update the meta fields in the database
	update_post_meta( $post_id, '_button_text', $_POST['announcement-button_text'] );
	update_post_meta( $post_id, '_button_url', $_POST['announcement-button_url'] );
	
}
add_action('save_post', 'spm_announcement_options_save_post');
/* ------- END ANNOUNCEMENT OPTIONS ------- */