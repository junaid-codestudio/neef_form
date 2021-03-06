<section>
    <legend>Invigilating Experience</legend>
    <!-- checking level -->
    <!-- Table -->
    <!-- <a onclick="invig_table();"> -->
    <!-- </a> -->
    <!-- Table -->
    <br>
    <br>
    <!-- employment question -->
    <div class="form-group row">
        <label class="col-md control-label" for="invigExpRadios">Do you have invigilation experience?</label>
        <div class="col-md">
            <div class="row">
                <label class="radio-inline" for="invigExpYes">
                    <input class="col-md" id="invigExpYes" type="radio" name="invigExpRadios" value="Yes">
                    <label class="col-md" for="invigExpYes">Yes</label>
                </label>
                <label class="radio-inline" for="invigExpNo">
                    <input class="col-md" id="invigExpNo" type="radio" name="invigExpRadios" value="No" checked>
                    <label class="col-md" for="invigExpNo">No</label>
                </label>
            </div>
        </div>
    </div>

    <section id="invigExpSection">
        <button type="button" class="btn-circle" data-toggle="modal" data-target="#invigExpModal"><span class="fa fa-plus"></span>Add</button>
        <div class="container" style="padding-top: 2px;">
            <div class="tab tab-1">
                <table id="invig_table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
                    <thead style="background: #fe8514; color: white;">
                        <tr>
                            <td>Level of Invigilation</td>
                            <td>From</td>
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
                <input type="hidden" name="invig_tableData" id="invig_tableData" value="">
            </div>
        </div>
        <?php require_once 'Modals/invigExpModal.php'; ?>
    </section>
</section>
<script type="text/javascript">
var rowID = 0;

function invig_table() {
    var marking_table = document.getElementById("invig_table"),
        checking_level = document.getElementById("invig_level"),
        checking_date_to = document.getElementById("invigilating_date_to"),
        checking_date_from = document.getElementById("invigilating_date_from");

    if (checking_level.value == "" || checking_level.value == null ||
        checking_date_to.value == "" || checking_date_from.value == null ||
        checking_date_from.value == "" || checking_date_to == null) {
        alert("Please enter values to Add");
    return false;
    } else {
        var newRow = marking_table.insertRow(marking_table.length),
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1),
            cell3 = newRow.insertCell(2),
            cell4 = newRow.insertCell(3);
        // newRow.id = rowID;
        cell1.innerHTML = checking_level.value;
        cell2.innerHTML = checking_date_from.value;
        cell3.innerHTML = checking_date_to.value;
        cell4.innerHTML = '<a style="color: red;" onclick="deleteRowInvig(this)"><span class="fa fa-trash-alt"></span></a>';
        checking_level.value = "Select";
        checking_date_from.value = "";
        checking_date_to.value = "";
        rowID++;
        readDataInvig();
        $('#invigExpModal').modal("hide");
    }
}

function readDataInvig() {
    //gets table
    var oTable = document.getElementById('invig_table');
    var saveData = document.getElementById("invig_tableData");
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

function deleteRowInvig(r) {

    var i = r.parentNode.parentNode.rowIndex;
    // alert(i);
    // return false;
    document.getElementById("invig_table").deleteRow(i);
    readDataInvig();
}
</script>
<script type="text/javascript">
$(window).on('load', function() {
    $('#invigExpSection').hide();
});
$(document).ready(function() {
    $('input:radio[name="invigExpRadios"]').change(
        function() {
            if ($(this).val() == 'Yes') {
                $('#invigExpSection').show();
            } else {
                $('#invigExpSection').hide();
            }
        });
});
</script>