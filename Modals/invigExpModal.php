<div class="modal" tabindex="-1" role="dialog" id="invigExpModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Invigilation Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="control-label col-md-4" for="invig_level">Level</label>
          <div class="col-md-4">
            <select class="form-control" name="invig_level" id="invig_level">
              <option selected value="">Select</option>
              <option value="PhD">PhD.</option>
              <option value="MS or MPhil">MS or MPhil</option>
              <option value="Bachelors">Bachelors</option>
              <option value="Intermediate">Intermediate or Equivilant</option>
              <option value="Matric">Matric or Equivilant</option>
              <option value="Middle">Middle School</option>
              <option value="Primary">Primary School</option>
            </select>
            <label class="control-label" id="invig_levelErr" style="color: red; font-weight: bold;"></label>
          </div>
        </div>
        <!-- Duration of Checking -->
        <div class="form-group row">
          <label class="col-md-4 control-label" for="duration_invigilating">Duration</label>
          <div class="col-md-3">
            <input id="invigilating_date_from" class="form-control input_md" type="number" name="invigilating_date_from" onkeypress="return false" autocomplete="false" maxlength="4" minlength="4">
          </div>
          <div style="vertical-align: middle;">
            <label>To</label>
          </div>
          <div class="col-md-3">
            <input id="invigilating_date_to" class="form-control input_md" type="number" name="invigilating_date_to" onkeypress="return false" autocomplete="false" maxlength="4" minlength="4">
          </div>
        </div>
        <div class="row">
          <label class="control-label col-md-4"></label>
          <label class="control-label" id="invigilating_date_fromErr" style="color: red; font-weight: bold;"></label>
          <label class="control-label col-md-2"></label>
          <label class="control-label" id="invigilating_date_toErr" style="color: red; font-weight: bold; vertical-align: middle;"></label>
        </div>
      </div>
      <div class="modal-footer">
        <a onclick="invig_table();">
          <button type="button" class="btn btn-primary" id="invigExpModalSave">Save changes</button>
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#invigExpModalSave').on('click', function() {
      var iemFor = $('#invigilating_date_from').val();
      var iemTo = $('#invigilating_date_to').val();
      if (iemFor>iemTo) {
        alert("Please enter correct experience range!");
        return false;
      }
      else{
        // alert('Data entered successfully');
      }
    });
  });
</script>