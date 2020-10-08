<div class="modal fade" id="updateexampleModalScrollable3" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateexampleModalScrollable3">Бүртгэх хэсэг</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="col-sm-9" >
            <h5 align='center' style="color:red;">Суулгасан програм хангамжууд</h5>
              <hr style="border: 2px dotted black;">
          </div>

          </div>
              <form action="{{action("addController@update3")}}" method="post">
                  @csrf
                    <input type="hidden" name="eid3" id="eid3">
                    <div >
                        <input type="text" id="ecomID2" name="ecomID2" />
                    </div>

                  <div class="row">
                  <div class="form-group col-md-6 text-left">
                        <label>Хүлээн авсан огноо</label>
                        <input type="date" id="eh_date" name="eh_date" autocomplete="off" class="form-control" />
                  </div>
                  <div class="form-group col-md-6 text-left">
                        <label>Шалтгаан</label>
                        <input type="text" id="eh_reason" name="eh_reason" autocomplete="off" class="form-control" />
                  </div>
                </div>
              <div class="row">
              <div class="form-group col-md-6 text-left">
                    <label>Хүлээн авсан хүн</label>
                    <input type="text" id="eh_give" name="eh_give" autocomplete="off" class="form-control" />
              </div>
              <div class="form-group col-md-6 text-left">
                    <label>Хүлээн авсан огноо</label>
                    <input type="date" id="eh_recieve" name="eh_recieve" autocomplete="off" class="form-control" />
              </div>
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
