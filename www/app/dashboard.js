App = (function(App) {
	
	var DashBoard = {};
	DashBoard.loadIndex = loadIndex;


	////
	function loadIndex() {
		$("#locationform-location").on("change", _getIndex);
	}

	function _getIndex(event) {
		var locId = $(this).val();
		$.ajax({
			// url: '/?c=dashboard&a=indices',
			url: '/?c=dashboard&a=indices',

			method: "POST",
			data: {
				loc: locId
			}	
		})
		.done(_populateIndex)
		.fail(_error);
	}

	function _populateIndex(resp) {
		var indices = JSON.parse(resp);
		$('#locationform-index').empty();
		indices.forEach(function(obj) {
			$('#locationform-index').append('<option value="' + obj.id +'">' + obj.index + '</option>');
		});
	}

	function _error() {
		console.log("error");
	}




	App.DashBoard = DashBoard;
	return App;

})(window.App || {});