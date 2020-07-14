<?php
/**
 * Intro partial
 *
 * @package Wp_Radio
 * @since 1.0.0
 */

?>
<div class="ui container">

	<h1 class="ui header"><?php  echo __('Wordpress Radio Plugin','wp-radio'); ?><sup><?php echo $this->version; ?></sup></h1>

	<div class="ui grid pi_margin_top_main">

		<!-- News Grid -->
	  	<div class="five wide column" wfd-id="162">
	  		<div class="ui card" wfd-id="316">
				<div class="content" wfd-id="329">
			    	<div class="header" wfd-id="330"><?php echo __('News','wp-radio'); ?></div>
				</div>
				<div class="content" wfd-id="318">
					<div class="ui relaxed divided list" id="pi_news_feed"  wfd-id="419"></div>			  		
			  	</div>
			</div>
	  	</div>
	  	
	  	<!-- Tutorial Grid -->
	  	<div class="five wide column" wfd-id="162">
	  		<div class="ui card" wfd-id="316">
		  		<div class="content" wfd-id="329">
		    		<div class="header" wfd-id="330"><?php echo __('Tutorials','wp-radio'); ?></div>
		  		</div>
		  	<div class="content" wfd-id="318">
		  		<div class="ui relaxed divided list" id="pi_tutorials_feed"  wfd-id="419"></div>		    	
		  	</div>
			</div>
	  	</div>

	  	<!-- Tutorial Grid -->
	  	<div class="four wide column" wfd-id="162">
	  	<div class="ui card" wfd-id="316">
		  <div class="content" wfd-id="329">
		    <div class="header" wfd-id="330"><?php echo __('Support','wp-radio'); ?></div>
		  </div>
		  <div class="content" wfd-id="318">		   
		    <div class="ui small feed" wfd-id="319">
		      <div class="event" wfd-id="326">
		        <div class="content" wfd-id="327">
		          <div class="summary" wfd-id="328">
		             <?php echo __('Have some questions or need a helping hand? The LearnDash support team is standing by, ready to assist you!','wp-radio'); ?>
		          </div>
		        </div>
		      </div>		      
		    </div>
		  </div>
		  <div class="extra content" wfd-id="317">
		    <a href="<?php echo HELP_LINK; ?>" target="_blank"><button class="ui button" wfd-id="452"><?php echo __('Contact Support','wp-radio'); ?></button></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="ui grid pi_margin_top_main">
		<div class="seven wide column" wfd-id="162">
	  		<div class="ui card" wfd-id="316" style="width:100%">
				<div class="content" wfd-id="329">
			    	<div class="header" wfd-id="330"><?php echo __('Subscription Information','wp-radio'); ?></div>
				</div>
				<div class="content" wfd-id="318">
					<div class="ui relaxed divided list"   wfd-id="419"></div>
					<?php 
						if(!empty(get_option('wpradio_private_token'))){ //We will show the data if token is set ?>
							<table class="ui celled table">
								  <thead>
								    <tr><th><?php echo __('Title','wp-radio'); ?></th>
								    <th><?php echo __('Info','wp-radio'); ?></th>
								  </tr></thead>
								  <tbody id="pi_subscription_info"></tbody>
							</table>	
					<?php 
						} else {			
							echo sprintf( __( 'Tokens are not set, You can set your Caster.fm API Tokens by clicking <a href="%s">here</a>.', 'wp-radio' ), 'admin.php?page=wp-radio-settings');
						} 
					?>		  		
			  	</div>
			</div>
	  	</div>


	  	<div class="seven wide column" wfd-id="162">
	  		<div class="ui card" wfd-id="316" style="width:100%">
				<div class="content" wfd-id="329">
			    	<div class="header" wfd-id="330"><?php echo __('Server Information','wp-radio'); ?></div>
				</div>
				<div class="content" wfd-id="318">
					<div class="ui relaxed divided list"   wfd-id="419"></div>
					<?php 
						if(!empty(get_option('wpradio_private_token'))){ //We will show the data if token is set ?>
							<table class="ui celled table">
								  <thead>
								    <tr><th><?php echo __('Title','wp-radio'); ?></th>
								    <th><?php echo __('Info','wp-radio'); ?></th>
								  </tr></thead>
								  <tbody id="pi_server_info"></tbody>
							</table>	
					<?php 
						} else {			
							echo sprintf( __( 'Tokens are not set, You can set your Caster.fm API Tokens by clicking <a href="%s">here</a>.', 'wp-radio' ), 'admin.php?page=wp-radio-settings');
						} 
					?>		  		
			  	</div>
			</div>
	  	</div>
	</div>
</div>
