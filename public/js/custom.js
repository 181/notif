
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


var channel = pusher.subscribe('admin');

channel.bind("new_subscription", function (data) { 
	
	if (data.type && data.message) {
		var current_notifications = $('.badge-notify').text() * 1;
		current_notifications += 1;
		$('.badge-notify').text(current_notifications);
		$('.badge-notify').show();
	}
});