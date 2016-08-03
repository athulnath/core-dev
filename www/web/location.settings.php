<?php require_once 'header.php'; ?>

            <div class="site-location">
                <h1>Add Location</h1>

    
                <form id="w0" action="/share/create" method="post">
                    <input type="hidden" name="_csrf" value="OTZDek5qeFh6ZXc.NiAxFgByCBUnJCErQ0UPEQQIPyFhRQ0NCyECEA==">
                        <div class="form-group field-share-share_name">
                    <label class="control-label" for="share-share_name">Location</label>
                    <input type="text" id="share-share_name" class="form-control" name="Share[share_name]" maxlength="100">  
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>    
                    </div>

                </form>
        </div>

    <?php require_once 'footer.php'; ?>
    