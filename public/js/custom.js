
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


var pusher = new Pusher('72c71489a8698580e447');

var channel = pusher.subscribe('admin');

channel.bind("NewNotification", function (data) { 
	alert(data);
	if (data.type && data.message) {
		var current_notifications = $('.badge-notify').text() * 1;
		current_notifications += 1;
		$('.badge-notify').text(current_notifications);
		$('.badge-notify').show();
	}
});