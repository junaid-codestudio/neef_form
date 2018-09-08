<section class="border border-dark rounded">
    <legend>Marking Experience</legend>
    <!-- checking level -->
    
    <!-- Table -->
    <!-- <a onclick="marking_table();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a> -->
    <br>
    <br>
    <!-- employment question -->
    <div class="form-group row">
        <label class="col-md control-label" for="markingExpRadios">Do you have marking experience?</label>
        <div class="col-md">
            <div class="row">
                <label class="radio-inline" for="markingExpYes">
                    <input class="col-md" id="markingExpYes" type="radio" name="markingExpRadios" value="Yes">
                    <label class="col-md" for="markingExpYes">Yes</label>
                </label>
                <label class="radio-inline" for="markingExpNo">
                    <input class="col-md" id="markingExpNo" type="radio" name="markingExpRadios" value="No" checked>
                    <label class="col-md" for="markingExpNo">No</label>
                </label>
            </div>
        </div>
    </div>

    <section id="markingExpSection">
        <button type="button" class="btn-circle" data-toggle="modal" data-target="#markingExpModal"><span class="fa fa-plus"></span>Add</button>
    <!-- Table -->
    <div class="container" style="padding-top: 2px;">
        <div class="tab tab-1">
            <table id="marking_table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
                <thead style="background: #fe8514; color: white;">
                    <tr>
                        <td>Level of Marking</td>
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
            <input type="hidden" name="markingtableData" id="markingtableData" value="">
        </div>
    </div>
            <?php require_once 'Modals/markingExpModal.php'; ?>
        </section>
</section>
<script type="text/javascript">
    var rowID = 1;

function marking_table() {
    var marking_table = document.getElementById("marking_table"),
        checking_level = document.getElementById("checking_level"),
        checking_date_to = document.getElementById("checking_date_to"),
        checking_date_from = document.getElementById("checking_date_from");
        // saveData = document.getElementById("markingtableData");

    if (checking_level.value == "" || checking_level.value == null ||
        checking_date_to.value == "" || checking_date_to.value == null ||
        checking_date_from.value == "" || checking_date_from == null) {
        alert("Please enter values to Add");
    } else {
        var newRow = marking_table.insertRow(marking_table.length),
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1),
            cell3 = newRow.insertCell(2)
            cell4 = newRow.insertCell(3);

        cell1.innerHTML = checking_level.value;
        cell2.innerHTML = checking_date_from.value;
        cell3.innerHTML = checking_date_to.value;
        cell4.innerHTML = '<a style="color: red;" onclick="deleteRowMarking(this)"><span class="fa fa-trash-alt"></span></a>';
        // saveData.value += "\n" + checking_level.value+"|"+checking_date_from.value+"|"+checking_date_to.value;
        checking_level.value="Select";
        checking_date_from.value="";
        checking_date_to.value="";
        rowID++;
        readDataMarking();
        $('#markingExpModal').modal("hide");
    }
}

function readDataMarking() {
        //gets table
        var oTable = document.getElementById('marking_table');
        var saveData = document.getElementById("markingtableData");
        saveData.value="";

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
            saveData.value+="\n";
        }
        // alert(saveData.value);
    }

    function deleteRowMarking(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("marking_table").deleteRow(i);
        readDataMarking();
    }
</script>
<script type="text/javascript">
$(window).on('load', function() {
    $('#markingExpSection').hide();
});
$(document).ready(function() {
    $('input:radio[name="markingExpRadios"]').change(
        function() {
            if ($(this).val() == 'Yes') {
                $('#markingExpSection').show();
            } else {
                $('#markingExpSection').hide();
            }
        });
});
</script>