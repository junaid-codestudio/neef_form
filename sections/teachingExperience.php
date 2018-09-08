<section class="border border-dark rounded">
    <legend>Teaching Experience</legend>
    <br>
    <br>
    <!-- employment question -->
    <div class="form-group row">
        <label class="col-md control-label" for="teachingExpRadios">Do you have teaching experience?</label>
        <div class="col-md">
            <div class="row">
                <label class="radio-inline" for="teachingExpYes">
                    <input class="col-md" id="teachingExpYes" type="radio" name="teachingExpRadios" value="Yes">
                    <label class="col-md" for="teachingExpYes">Yes</label>
                </label>
                <label class="radio-inline" for="teachingExpNo">
                    <input class="col-md" id="teachingExpNo" type="radio" name="teachingExpRadios" value="No" checked>
                    <label class="col-md" for="teachingExpNo">No</label>
                </label>
            </div>
        </div>
    </div>
    <!-- Table -->
    <!-- <a onclick="addTableRow();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a> -->
    <!-- Table -->
    <section id="teachingExpSection">
        <button type="button" class="btn-circle" data-toggle="modal" data-target="#teachingExpModal"><span class="fa fa-plus"></span>Add</button>
        <div class="container" style="padding-top: 2px;">
            <div class="tab tab-1">
                <table id="table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
                    <thead style="background: #fe8514; color: white;">
                        <tr>
                            <td>Taught to Level</td>
                            <td>From </td>
                            <td>To</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="display: none;">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="tableData" id="tableData" value="">
            </div>
        </div>
        <?php require_once 'Modals/teachingExpModal.php'; ?>
    </section>
</section>
<script type="text/javascript">
var rowID = 1;

function addTableRow() {
    var table = document.getElementById("table"),
        level = document.getElementById("level"),
        date_to = document.getElementById("date_to"),
        date_from = document.getElementById("date_from");
    // saveData = document.getElementById("tableData");

    if (level.value == "" || level.value == null ||
        date_to.value == "" || date_from.value == null ||
        date_from.value == "" || date_to.value == null) {
        alert("Please Enter Values to Enter");
    } else {
        var newRow = table.insertRow(table.length),
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1),
            cell3 = newRow.insertCell(2),
            cell4 = newRow.insertCell(3);
        // newRow.id = rowID;
        cell1.innerHTML = level.value;
        cell2.innerHTML = date_to.value;
        cell3.innerHTML = date_from.value;
        cell4.innerHTML = '<a style="color: red;" onclick="deleteRowTeaching(this)"><span class="fa fa-trash-alt"></span></a>';
        // saveData.value += "\n" + level.value+"|"+date_from.value+"|"+date_to.value;
        level.value = "Select";
        date_to.value = "";
        date_from.value = "";
        rowID++;
        readDataTeaching();
        $('#teachingExpModal').modal("hide");
        // alert(saveData.value);
    }

}

function readDataTeaching() {
    //gets table
    var oTable = document.getElementById('table');
    var saveData = document.getElementById("tableData");
    saveData.value = "";

    //gets rows of table
    var rowLength = oTable.rows.length;

    //loops through rows    
    for (i = 2; i < rowLength; i++) {

        //gets cells of current row
        var oCells = oTable.rows.item(i).cells;

        //gets amount of cells of current row
        var cellLength = oCells.length;

        //loops through each cell in current row
        for (var j = 0; j < 3; j++) {
            /* get your cell info here */
            var cellVal = oCells.item(j).innerHTML;
            saveData.value += cellVal + "|";
        }
        saveData.value += "\n";
    }
    // alert(saveData.value);
}

function deleteRowTeaching(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("table").deleteRow(i);
    readDataTeaching();
}
</script>
<script type="text/javascript">
$(window).on('load', function() {
    $('#teachingExpSection').hide();
});
$(document).ready(function() {
    $('input:radio[name="teachingExpRadios"]').change(
        function() {
            if ($(this).val() == 'Yes') {
                $('#teachingExpSection').show();
            } else {
                $('#teachingExpSection').hide();
            }
        });
});
</script>