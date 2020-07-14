<?php
/**
 * Script file
 *
 * @package Wp_Radio
 * @since 1.0.0
 */

?>

<script type="text/javascript">
	news_section('<?php echo NEWS_RSS; ?>');
	tutorial_section('<?php echo TUTORIAL_RSS; ?>');
	<?php 
		if(!empty(get_option('wpradio_private_token'))){ ?>
			subscription_information('https://hub.api.caster.fm/private/accountInfo?token=<?php echo get_option('wpradio_private_token'); ?>');
			server_information('https://hub.api.caster.fm/private/accountInfo?token=<?php echo get_option('wpradio_private_token'); ?>');
	<?php 
		} ?>
</script>


