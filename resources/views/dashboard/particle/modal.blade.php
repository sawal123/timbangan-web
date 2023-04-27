
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <div class="modal-body">
        <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
            <div class="form-group error">
             <label for="inputName" class="col-sm-3 control-label">Name</label>
               <div class="col-sm-9">
                <input type="text" class="form-control has-error" id="name" name="name" placeholder="Product Name" value="">
               </div>
               </div>
             <div class="form-group">
             <label for="inputDetail" class="col-sm-3 control-label">Details</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="details" name="details" placeholder="details" value="">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-save" id="btn-save" value="add">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        <input type="hidden" id="product_id" name="tour_id" value="0">
      </div>
    </div>
  </div>
</div>