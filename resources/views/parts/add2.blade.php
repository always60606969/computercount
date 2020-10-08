<div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle2">Бүртгэх хэсэг</h5>
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
              <form action="{{action("addController@store2")}}" method="post">
                  @csrf
                    <input type="hidden" name="id" id="id">
                    <div >
                        <input type="text" id="comID2" name="comID2" />
                    </div>
                  <div class="row">
                  <div class="form-group col-md-6 text-left">
                        <label>Суулгасан огноо</label>
                        <input type="date" id="i_date" name="i_date" autocomplete="off" class="form-control" />
                  </div>
                  <div class="form-group col-md-6 text-left">
                        <label>Программын нэр</label>
                        <input type="text" id="i_programms" name="i_programms" autocomplete="off" class="form-control" />
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
