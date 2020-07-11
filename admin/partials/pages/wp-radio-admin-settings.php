<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/pawanwebdeveloper/WPRadio
 * @since      1.0.0
 *
 * @package    Wp_Radio
 * @subpackage Wp_Radio/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap full-width-layout">  		
	<h2><?php echo __('Wordpress Radio Settings','wp-radio'); ?></h2>
	<?php 
		$ch = curl_init();
		// IMPORTANT: the below line is a security risk, read https://paragonie.com/blog/2017/10/certainty-automated-cacert-pem-management-for-php-software
		// in most cases, you should set it to true
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, 'https://hub.api.caster.fm/private/checkToken?token='.get_option('wpradio_public_token'));
		$result = curl_exec($ch);
		curl_close($ch);

		$obj = json_decode($result);
		
		if($obj->message == 'Invalid Token'){
			echo Wp_Radio_Admin::wpradio_admin_notice__error('Invalid Token');
		}else{
			echo Wp_Radio_Admin::wpradio_admin_notice__success('Token is valid');
		}
		
	?>

	<form method="post" action="options.php">
		<?php settings_fields( 'wpradio_options_group' ); ?>
		<h3><?php echo __('Please set your Caster.fm API Tokens','wp-radio'); ?></h3>		
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="wpradio_public_token"><?php echo __('Public token','wp-radio'); ?></label></th>
				<td><input type="text" id="wpradio_public_token" class="wppb-text pi-text" name="wpradio_public_token" value="<?php echo get_option('wpradio_public_token'); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="wpradio_private_token"><?php echo __('Private token','wp-radio'); ?></label></th>
				<td><input type="text" id="wpradio_private_token" class="wppb-text pi-text" name="wpradio_private_token" value="<?php echo get_option('wpradio_private_token'); ?>" /></td>
			</tr>
		</table>
		<?php  submit_button(); ?>
	</form>  
</div>
