<div class="modal" tabindex="-1" role="dialog" id="markinginterestsubjectModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Marking Subject Of Interest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group row">
        <label class="col-md control-label" for="interest_marking">Interested Marking Subject</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md" type="text" name="interest_merking_subject" id="interest_merking_subject">
                <label class="control-label col-md" id="interest_merking_subjectErr" name="interest_marking_subjectErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <a onclick="marktable();">
          <button type="button" class="btn btn-primary" id="msiModalSave">Save changes</button>
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#msiModalSave').on('click', function() {
    });
  });
</script>