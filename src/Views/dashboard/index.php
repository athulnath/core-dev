<div class="row">
	<div class="col-xs-12">
		<div class="location-form">

		<form id="location-form" action="/location" method="post">
			<div class="form-group field-locationform-location required">
				<label class="control-label" for="locationform-location">Location</label>
				<select id="locationform-location" class="form-control" name="LocationForm[location]">
					<option value="">Select...</option>
					<option value="1">USA</option>
					<option value="3">UK</option>	
				</select>
				<div class="help-block"></div>
			</div>
			<div class="form-group field-locationform-location required">
				<label class="control-label" for="locationform-location">Index</label>
				<select id="locationform-location" class="form-control" name="LocationForm[location]">
					<option value="">Select...</option>
					<option value="1">sdfdf</option>
					<option value="3">asdfsdf</option>	
				</select>
				<div class="help-block"></div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Go</button>	    
			</div>
		</form>
			</div>
	</div>
	</div>

	<div class="row">
	<div class="col-xs-12">
		<div class="share-index">
	    
	    <p>
	        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Create Share</button>
	        <button class="btn btn-success" data-toggle="modal" data-target="#myModal-upload">Upload</button>
	        <a class="btn btn-danger" href="#" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete all the data in the current view?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span> Clear all</a>

	    </p>

	    <p></p>

	    <div id="w1" class="grid-view">
			<table class="table table-striped table-bordered">
				<thead>
					<tr><th><a href="/share/index?sort=order" data-sort="order">Insert to row number</a></th><th><a href="/share/index?sort=share_name" data-sort="share_name">Share Name</a></th><th><a href="/share/index?sort=symbol" data-sort="symbol">Symbol</a></th><th><a href="/share/index?sort=price_initiated" data-sort="price_initiated">Price Initiated</a></th><th><a href="/share/index?sort=recommendation" data-sort="recommendation">recommendation</a></th><th class="action-column">&nbsp;</th></tr><tr id="w1-filters" class="filters"><td><input type="text" class="form-control" name="ShareSearch[order]"></td><td><input type="text" class="form-control" name="ShareSearch[share_name]"></td><td><input type="text" class="form-control" name="ShareSearch[symbol]"></td><td><input type="text" class="form-control" name="ShareSearch[price_initiated]"></td><td><input type="text" class="form-control" name="ShareSearch[recommendation]"></td><td>&nbsp;</td></tr>
				</thead>
				<tbody>
					<tr data-key="25"><td>1</td><td>aaa</td><td>AAA</td><td>23</td><td>SELL</td><td><a href="/share/view?id=25" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/share/update?id=25" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/share/delete?id=25" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>

					<tr data-key="26"><td>2</td><td>newvalu</td><td>NEW</td><td>324</td><td>EXIT</td><td><a href="/share/view?id=26" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/share/update?id=26" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/share/delete?id=26" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
					
					<tr data-key="27"><td>3</td><td>asdf</td><td>ASDF</td><td>23423</td><td>SELL</td><td><a href="/share/view?id=27" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="/share/update?id=27" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> <a href="/share/delete?id=27" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a></td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>


<!-- models -->

<!-- Create Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Share</h4>
      </div>
      <div class="modal-body">
          <div class="share-create">
			<div class="share-form">

				<form id="w0" action="/share/create" method="post">
					<input type="hidden" name="_csrf" value="OTZDek5qeFh6ZXc.NiAxFgByCBUnJCErQ0UPEQQIPyFhRQ0NCyECEA==">
					    <div class="form-group field-share-share_name">
					<label class="control-label" for="share-share_name">Share Name</label>
					<input type="text" id="share-share_name" class="form-control" name="Share[share_name]" maxlength="100">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-symbol">
					<label class="control-label" for="share-symbol">Symbol</label>
					<input type="text" id="share-symbol" class="form-control" name="Share[symbol]" maxlength="32">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-price_initiated">
					<label class="control-label" for="share-price_initiated">Price Initiated</label>
					<input type="text" id="share-price_initiated" class="form-control" name="Share[price_initiated]">

					<div class="help-block"></div>
					</div>
					<div class="form-group field-share-recommendation">
					<label class="control-label" for="share-recommendation">Recommendation</label>
					<select id="share-recommendation" class="form-control" name="Share[recommendation]">
					<option value="">Select...</option>
					<option value="0">BUY</option>
					<option value="1">SELL</option>
					<option value="2">EXIT</option>
					</select>

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-order">
					<label class="control-label" for="share-order">Insert to row number</label>
					<input type="text" id="share-order" class="form-control" name="Share[order]">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-location_id">

					<input type="hidden" id="share-location_id" class="form-control" name="Share[location_id]" value="1">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-index">

					<input type="hidden" id="share-index" class="form-control" name="Share[index]" value="5">

					<div class="help-block"></div>
					</div>    

				    <div class="form-group">
				        <button type="submit" class="btn btn-success">Create</button>    
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				    </div>

				</form>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- upload Modal -->
<div id="myModal-upload" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload file</h4>
      </div>
      <div class="modal-body">
      	<form id="w0" action="/share" method="post" enctype="multipart/form-data">
	        <div class="form-group field-exceluploadform-excelfile">
				<label class="control-label" for="exceluploadform-excelfile">Data</label>
				<input type="hidden" name="ExcelUploadForm[excelFile]" value=""><input type="file" id="exceluploadform-excelfile" name="ExcelUploadForm[excelFile]">

				<div class="help-block"></div>
			</div>
	        <button class="btn btn-success">Upload</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

	    </form>
      </div>
    </div>
  </div>
</div>