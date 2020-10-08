<div class="modal fade" id="updateexampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateexampleModalScrollableTitle2">Суулгасан програм хангамжууд засах хэсэг</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="col-sm-9" >
            <h5 align='center' style="color:red;">Суулгасан програм хангамжууд </h5>
              <hr style="border: 2px dotted black;">
          </div>
          </div>

            <form  action="{{action("addController@update2")}}" method="post">
              @csrf
            <input type="hidden" name="eid2" id="eid2">
                <div class="row">
                        <div class="form-group col-md-6 text-left">
                              <label>Суулгасан огноо</label>
                              <input type="date" id="ei_date" name="ei_date"  class="form-control" />
                        </div>
                <div class="form-group col-md-6 text-left">
                        <label>Программын нэр</label>
                        <input type="text" id="ei_programms" name="ei_programms" class="form-control" />
                </div>
                        <input type="hidden" id="ecomID" name="ecomID"  class="form-control" />
                </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
  </div>
</div>
