$(document).ready(function() {

	$('form').submit(function(event) {
		console.log("submitting ..");
		event.preventDefault();
	});

});