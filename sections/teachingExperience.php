<section class="border border-dark rounded">
    <legend>Teaching Experiance</legend>
    <!-- Level of Teaching -->
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
            <input id="date_to" class="form-control input-sm" type="text" name="date_from" onkeypress="return false">
        </div>
        
        <div style="vertical-align: middle;">
            <label>To</label>
        </div>
        <div class="col-md-3">
            <input id="date_from" class="form-control input_sm" type="text" name="date_to" onkeypress="return false">
        </div>
        
    </div>
    <div class="row">
        <label class="control-label col-md-4"></label>
        <label class="control-label" id="date_fromErr" style="color: red; font-weight: bold;"></label>
        <label class="control-label col-md-2"></label>
        <label class="control-label" id="date_toErr" style="color: red; font-weight: bold; vertical-align: middle;"></label>
    </div>

    <!-- Table -->
    <a onclick="addTableRow();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a>
    <!-- Table -->
    <div class="container" style="padding-top: 2px;">
        <div class="tab tab-1">
            <table id="table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
                <thead style="background: #fe8514; color: white;">
                    <tr>
                        <td>Taught to Level</td>
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
            <input type="hidden" name="tableData" id="tableData" value="">
        </div>
    </div>
</section>
<script type="text/javascript">
function addTableRow() {
    var table = document.getElementById("table"),
        level = document.getElementById("level"),
        date_to = document.getElementById("date_to"),
        date_from = document.getElementById("date_from");
        saveData = document.getElementById("tableData");

    if (level.value == "" || level.value == null ||
        date_to.value == "" || date_to.value == null ||
        date_from.value == "" || date_from.value == null) {
        alert("Please Enter Values to Enter");
    } else {
        var newRow = table.insertRow(table.length),
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1),
            cell3 = newRow.insertCell(2);
        cell1.innerHTML = level.value;
        cell2.innerHTML = date_to.value;
        cell3.innerHTML = date_from.value;
        saveData.value += "\n" + level.value+"|"+date_from.value+"|"+date_to.value;
        level.value="Select";
        date_to.value="";
        date_from.value="";
        // alert(saveData.value);
    }

}
</script>
