<section class="border border-dark rounded">
    <legend>Invigilating Experience</legend>
    <!-- checking level -->
    <div class="form-group row">
        <label class="control-label col-md-4" for="invig_level">Level</label>
        <div class="col-md-4">
            
                <select class="form-control" name="invig_level" id="invig_level">
                <option selected>Select</option>
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
                        <input id="invigilating_date_from" class="form-control input_md" type="text" name="invigilating_date_to" onkeypress="return false">

                </div>
                <div style="vertical-align: middle;">
                    <label>To</label>
                </div>
                <div class="col-md-3">
                        <input id="invigilating_date_to" class="form-control input_md" type="text" name="invigilating_date_from" onkeypress="return false">
                </div>
            </div>
            <div class="row">
                <label class="control-label col-md-4"></label>
                <label class="control-label" id="invigilating_date_fromErr" style="color: red; font-weight: bold;"></label>
                <label class="control-label col-md-2"></label>
                <label class="control-label" id="invigilating_date_toErr" style="color: red; font-weight: bold; vertical-align: middle;"></label>
            </div>
    <!-- Table -->
    <a onclick="invig_table();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a>
    <!-- Table -->
    <div class="container" style="padding-top: 2px;">
        <div class="tab tab-1">
            <table id="invig_table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
                <thead style="background: #fe8514; color: white;">
                    <tr>
                        <td>Level of Marking</td>
                        <td>From </td>
                        <td>To</td>
                    </tr>
                </thead>
                <tbody>
                    <tr style="display: none;">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" name="invig_tableData" id="invig_tableData" value="">
        </div>
    </div>
</section>
<script type="text/javascript">
function invig_table() {
    var marking_table = document.getElementById("invig_table"),
        checking_level = document.getElementById("invig_level"),
        checking_date_to = document.getElementById("invigilating_date_to"),
        checking_date_from = document.getElementById("invigilating_date_from");
        saveData = document.getElementById("invig_tableData");

    if (checking_level.value == "" || checking_level.value == null ||
        checking_date_to.value == "" || checking_date_to.value == null ||
        checking_date_from.value == "" || checking_date_from == null) {
        alert("Please enter values to Add");
    } else {
        var newRow = marking_table.insertRow(marking_table.length),
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1),
            cell3 = newRow.insertCell(2);
        cell1.innerHTML = checking_level.value;
        cell2.innerHTML = checking_date_to.value;
        cell3.innerHTML = checking_date_from.value;
        saveData.value += "\n" + checking_level.value+"|"+checking_date_from.value+"|"+checking_date_to.value;
        checking_level.value="Select";
        checking_date_from.value="";
        checking_date_to.value="";
    }
}
</script>