<div class="modal" tabindex="-1" role="dialog" id="markingExpModal">
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
        <label class="control-label col-md-4" for="checking_level">Level</label>
        <div class="col-md-4">
            
                <select class="form-control" name="checking_level" id="checking_level">
                <option selected value="">Select</option>
                <option value="PhD">PhD.</option>
                <option value="MS or MPhil">MS or MPhil</option>
                <option value="Bachelors">Bachelors</option>
                <option value="Intermediate">Intermediate or Equivilant</option>
                <option value="Matric">Matric or Equivilant</option>
                <option value="Middle">Middle School</option>
                <option value="Primary">Primary School</option>
            </select>
            <label class="control-label" id="checking_levelErr" style="color: red; font-weight: bold;"></label>
            
        </div>
    </div>
            <!-- Duration of Checking -->
            <div class="form-group row">
                <label class="col-md-4 control-label" for="duration_checking">Duration</label>
                <div class="col-md-3">
                        <input id="checking_date_from" class="form-control input_md" type="number" name="checking_date_from" onkeypress="return false" maxlength="4" minlength="4">

                </div>
                <div style="vertical-align: middle;">
                    <label>To</label>
                </div>
                <div class="col-md-3">
                        <input id="checking_date_to" class="form-control input_md" type="number" name="checking_date_to" onkeypress="return false" maxlength="4" minlength="4">
                </div>
            </div>
            <div class="row">
                <label class="control-label col-md-4"></label>
                <label class="control-label" id="checking_date_fromErr" style="color: red; font-weight: bold;"></label>
                <label class="control-label col-md-2"></label>
                <label class="control-label" id="checking_date_toErr" style="color: red; font-weight: bold; vertical-align: middle;"></label>
            </div>
      </div>
      <div class="modal-footer">
        <a onclick="marking_table();">
          <button type="button" class="btn btn-primary" id="markingExpModalSave">Save changes</button>
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#markingExpModalSave').on('click', function() {
      var memFor = $('#checking_date_from').val();
      var memTo = $('#checking_date_to').val();
      if (memFor>memTo) {
        alert("Please enter correct experience range!");
        return false;
      }
      else{
        // alert('Data entered successfully');
      }
    });
  });
</script>