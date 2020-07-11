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
<!-- You MUST include jQuery before Fomantic -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
<div class="wrap about-wrap full-width-layout">
	<?php Wp_Radio_Admin::render_intro_partial(); ?>
</div>
