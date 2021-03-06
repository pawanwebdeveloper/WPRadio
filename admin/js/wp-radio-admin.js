(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );


/*
* News Section 
*/
function news_section(RSS_URL) {
	jQuery.ajax({  
        type: 'GET',  
        url: "https://api.rss2json.com/v1/api.json?rss_url=" + RSS_URL, //For converting default format to JSON format  
        dataType: 'jsonp', //for making cross domain call  
        success: function(data) {  
            let html = '';  
            jQuery.each(data.items, function (i, e) {
        		html += '<div class="item" wfd-id="426"><div class="content" wfd-id="427"><a href="'+e.link+'" target="_blank" rel="noopener">'+e.title+'</a><div class="description" wfd-id="428">'+e.pubDate+'</div></div></div>';
                return i<4;
     		});
     		jQuery('#pi_news_feed').html(html);  
        }  
	});  
};

/*
* Tutorials Section 
*/ 	
function tutorial_section(TUTORIAL_RSS) {
	jQuery.ajax({  
        type: 'GET',  
        url: "https://api.rss2json.com/v1/api.json?rss_url=" + TUTORIAL_RSS, //For converting default format to JSON format  
        dataType: 'jsonp', //for making cross domain call  
        success: function(data) {  
            let html = '';  
            jQuery.each(data.items, function (i, e) {
        		html += '<div class="item" wfd-id="426"><div class="content" wfd-id="427"><a href="'+e.link+'" target="_blank" rel="noopener">'+e.title+'</a></div></div>';
                return i<4;
     		});
     		jQuery('#pi_tutorials_feed').html(html);  
        }  
	}); 
};

/*
* Subscription Information
*/ 	
function subscription_information(API_URL) {	
	jQuery.ajax({  
        type: 'GET',  
        url: API_URL,  
        dataType: 'json',   
        success: function(data) {
        	console.log(data.subscription.plan_name);  
            let html3 = '';  
    		html3 += '<tr><td data-label="plan">Plan</td><td data-label="plan">'+data.subscription.plan_name+'</td></tr>';
			if(data.subscription.addons_count > 0){			  
				html3 += 
				'<tr><td data-label="plan">Addons</td><td data-label="plan"><table class="ui celled table"><thead><tr><th>Addon name</th><th>Quantity</th></tr></thead>';
					$.each(data.subscription.addons, function (i, e) {
					html3 +='<tr><td>'+e.addon_name+'</td><td>'+ e.quantity+'</td></tr>';	
					});				
				html3 += 
				'</table></td></tr>';
			  
			}	
			html3 +='<tr><td data-label="plan">Broadcast Channels</td><td data-label="plan">'+data.channels.length+' / '+data.subscription.max_channels+'</td></tr><tr><td data-label="plan">Listener Slots</td><td data-label="plan">'+data.subscription.listeners_slots+'</td></tr><tr><td data-label="plan">Maximum Quality/Bitrate</td><td data-label="plan">'+data.subscription.bitrate+'</td></tr><tr><td data-label="plan">Podcasts recorder</td><td data-label="plan">';
					if(data.subscription.podcasts_recorder != null){
						html3 +='Enabled';
					}else{
						html3 +='Disabled';
					}
			html3 +='</td></tr>';
			if(data.subscription.podcasts_recorder != null){
				html3 += 
				'<tr><td data-label="plan">Podcast Duration</td><td data-label="plan">'+data.subscription.podcasts_recorder.duration+'</td></tr><tr><td data-label="plan">Number of Podcasts</td><td data-label="plan">'+data.subscription.podcasts_recorder.amount+'</td></tr>';
			};                
     		jQuery('#pi_subscription_info').html(html3);  
        }  
	}); 
};


/*
* Server Information
*/ 	
function server_information(API_URL) {	
	jQuery.ajax({  
        type: 'GET',  
        url: API_URL,  
        dataType: 'json',   
        success: function(data) {
        	console.log(data.subscription.plan_name);  
            let html4 = '';  
    		html4 += '<tr><td data-label="plan">Streaming Server Host</td><td data-label="plan">'+data.streaming_server.domain+'</td></tr>';
    		html4 += '<tr><td data-label="plan">Streaming Server Port</td><td data-label="plan">'+data.streaming_server_port+'</td></tr>';
    		html4 += '<tr><td data-label="plan">Server Status</td><td data-label="plan">Offline</td></tr>';
    		html4 += '<tr><td data-label="plan"><button class="ui toggle button" wfd-id="236">On</button></td></tr>';    		    					              
     		jQuery('#pi_server_info').html(html4);  
        }  
	}); 
};