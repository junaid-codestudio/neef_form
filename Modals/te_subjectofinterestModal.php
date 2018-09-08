<div class="modal" tabindex="-1" role="dialog" id="te_subjectofinterestModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Teaching Subject Of Interest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-4 control-label" for="interest">Subject Of Interest</label>
            <div class="col-md-4">
            <input class="form-control input-md" type="text" name="interest" id="interest">

            </div>
            <label class="control-label" id="interestErr" name="interestErr" style="color: red; font-weight: bold;"></label>
          </div>
      </div>
      <div class="modal-footer">
        <a onclick="interest_table();">
          <button type="button" class="btn btn-primary" id="tsiModalSave">Save changes</button>
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tsiModalSave').on('click', function() {
    });
  });
</script>