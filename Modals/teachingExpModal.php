<div class="modal" tabindex="-1" role="dialog" id="teachingExpModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Teaching Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
        <label class="col-md-4 control-label" for="level">Level Taught</label>
        <div class="col-md-4">
            <select class="form-control" name="level" id="level">
                <option value="Select">Select</option>
                <option value="PhD">PhD.</option>
                <option value="MS or MPhil">MS or MPhil</option>
                <option value="Bachelors">Bachelors</option>
                <option value="Intermediate">Intermediate or Equivilant</option>
                <option value="Matric">Matric or Equivilant</option>
                <option value="Middle">Middle School</option>
                <option value="Primary">Primary School</option>
            </select>
            <label class="control-label" id="levelErr" style="color: red; font-weight: bold;"></label>
        </div>
    </div>
    <!-- Duration of teaching -->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="duration">Duration</label>
        <div class="col-md-3">
            <input id="date_from" class="form-control input-sm" type="number" name="date_from" onkeypress="return false" maxlength="4" minlength="4">
        </div>
        
        <div style="vertical-align: middle;">
            <label>To</label>
        </div>
        <div class="col-md-3">
            <input id="date_to" class="form-control input_sm" type="number" name="date_to" onkeypress="return false" maxlength="4" minlength="4">
        </div>
        
    </div>
    <div class="row">
        <label class="control-label col-md-4"></label>
        <label class="control-label" id="date_fromErr" style="color: red; font-weight: bold;"></label>
        <label class="control-label col-md-2"></label>
        <label class="control-label" id="date_toErr" style="color: red; font-weight: bold; vertical-align: middle;"></label>
    </div>
      </div>
      <div class="modal-footer">
        <a onclick="addTableRow();">
          <button type="button" class="btn btn-primary" id="teachingExpModalSave">Save changes</button>
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#teachingExpModalSave').on('click', function() {
      var temFor = $('#date_from').val();
      var temTo = $('#date_to').val();
      if (temFor>temTo) {
        alert("Please enter correct experience range!");
        return false;
      }
      else{
        // alert('Data entered successfully');
      }
    });
  });
</script>