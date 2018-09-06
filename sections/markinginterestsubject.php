<section class="border border-dark rounded">
    <br>
    <div class="form-group row">
        <label class="col-md control-label" for="interest_marking">Interested Marking Subject</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md" type="text" name="interest_merking_subject" id="interest_merking_subject">
                <label class="control-label col-md" id="interest_merking_subjectErr" name="interest_marking_subjectErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <a onclick="interest_marking();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a>
    <div class="container">
        <div class="tab tab-1 col-md-4">
            <table id="interest_marking" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
                <thead style="background: #fe8514; color: white;">
                    <tr>
                        <td>Subject of Interest</td>
                    </tr>
                </thead>
                <tbody>
                    <tr style="display: none;">
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" name="msi" id="msi" value="">
        </div>
    </div>
</section>
<script type="text/javascript">
function interest_marking() {
    var interest_marking = document.getElementById("interest_marking"),
        interest_merking_subject = document.getElementById("interest_merking_subject");
        saveData=document.getElementById("msi");
    if (interest_merking_subject.value == "" || interest_merking_subject.value == null) {
        alert("Enter Subject to Add");
    } else {
        var newRow = interest_marking.insertRow(interest_marking.length),
            cell1 = newRow.insertCell(0);
        cell1.innerHTML = interest_merking_subject.value;
        saveData.value += "\n" + interest_merking_subject.value;
        interest_merking_subject.value = "";
    }
}
</script>