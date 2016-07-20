var Login = (function() {

	return {
		login: login
	};

	////
	function login() {

		$('#login-form').submit(function(event) {	
			$.ajax({
				url: "process.php",
				method: "POST",
				data: {sample: "sataadfasdfadsfas"}
			})
			.done(_loginSuccess);

			event.preventDefault();
		});
	}

	function _loginSuccess(response) {
		console.log("adsfasdfasd");
		console.log(response);
		alert(response);
	}

	function _loginFailed() {

	}

})();