<?php 

if ( ! function_exists('get_notification_class')) {
    function get_notification_class($notifications)
    {
    	if ( isset($notifications) AND $notifications) {
    		return '';
    	}

    	return 'no-notifications';
    }
}