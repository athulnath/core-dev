App = (function(App) {
	
	var DashBoard = {};
	DashBoard.bindEvents = bindEvents;


	////
	function bindEvents() {
		$("#locationform-location").on("change", _getIndex);
		$("#location-form").on("submit", _getShares);
		$("#createshare-form").on("submit", _createShares);
	}

	function _getIndex(event) {
		var locId = $(this).val();
		$.ajax({
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
		$('#locationform-loader').removeClass("loading");
	}

	function _getShares(event) {
		$('#locationform-loader').addClass("loading");
		var index_id = $("#locationform-index").val();
		$.ajax({
			url: '/?c=dashboard&a=shares',
			method: "POST",
			data: {
				index_id: index_id
			}	
		})
		.done(_populateShares)
		.fail(_error);

		event.preventDefault();
	}

	function _populateShares(res) {
		try	{
			var shares = JSON.parse(res);
		} catch(e) {
			$('#locationform-loader').removeClass("loading");	
		}
		var html = '';
		$('#shares-tbl').find('tr:gt(0)').empty();
		shares.forEach(function(obj) {
			html += '<tr> \
			<td>'+ obj.order + '</td>\
			<td>' + obj.name+ '</td> \
			<td>' + obj.symbol + '</td> \
			<td>' + obj.price_initiated +'</td> \
			<td>' + obj.recommendation + '</td> \
			<td><a href="/share/view?id=25" title="View" aria-label="View" data-pjax="0"> \
				<span class="glyphicon glyphicon-eye-open"></span></a> \
				<a href="/share/update?id=25" title="Update" aria-label="Update" data-pjax="0"> \
				<span class="glyphicon glyphicon-pencil"></span></a> \
				<a href="/share/delete?id=25" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a>\
			</td>\
			</tr>';
		});
		$('#shares-tbl tr:last').after(html);
		$('#locationform-loader').removeClass("loading");

	}

	function _createShares(event) {
		$('#shareform-loader').addClass("loading");
		var index_id = $("#locationform-index").val();
		var name = $("#createshare-name").val();
		var symbol = $("#createshare-symbol").val();
		var price_initiated = $("#createshare-price_initiated").val();
		var recommendation = $("#createshare-recommendation").val();
		var order = $("#createshare-order").val();

		$.ajax({
			url: '/?c=dashboard&a=createshares',
			method: "POST",
			data: {
				index_id: index_id,
				name: name,
				symbol: symbol,
				price_initiated: price_initiated,
				recommendation: parseInt(recommendation) + 1,
				order: order
			}	
		})
		.done(_createShareSuccess)
		.fail(_error);

		event.preventDefault();
	}

	function _createShareSuccess() {
		console.log("ok");	
	}

	App.DashBoard = DashBoard;
	return App;

})(window.App || {});