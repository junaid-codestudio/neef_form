<section class="border border-dark rounded">
    <legend>Teaching Subject of Interest</legend>
    <br>
    <br>
    <!-- employment question -->
    <div class="form-group row">
        <label class="col-md control-label" for="tsiRadios">Do you have teaching subject of interest?</label>
        <div class="col-md">
            <div class="row">
                <label class="radio-inline" for="tsiYes">
                    <input class="col-md" id="tsiYes" type="radio" name="tsiRadios" value="Yes">
                    <label class="col-md" for="tsiYes">Yes</label>
                </label>
                <label class="radio-inline" for="tsiNo">
                    <input class="col-md" id="tsiNo" type="radio" name="tsiRadios" value="No" checked>
                    <label class="col-md" for="tsiNo">No</label>
                </label>
            </div>
        </div>
    </div>
    <!-- <a onclick="interest_table();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a> -->
    <section id="tsiSection">
        <button type="button" class="btn-circle" data-toggle="modal" data-target="#te_subjectofinterestModal"><span class="fa fa-plus"></span>Add</button>
        <div class="container">
            <div class="tab tab-1 col-md-4">
                <table id="interest_table" name="interest_table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
                    <thead style="background: #fe8514; color: white;">
                        <tr>
                            <td>Subject of Interest</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="display: none;">
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="tsi" id="tsi" value="">
            </div>
        </div>
        <?php require_once 'Modals/te_subjectofinterestModal.php'; ?>
    </section>
</section>
<script type="text/javascript">
var rowID = 1;

function interest_table() {
    var interest_table = document.getElementById("interest_table");
    var interest = document.getElementById("interest");
    // saveData=document.getElementById("tsi");
    if (interest.value == "" || interest.value == null) {
        alert("Please enter subject to add!");
    } else {
        var newRow = interest_table.insertRow(interest_table.length),
            cell1 = newRow.insertCell(0);
        cell2 = newRow.insertCell(1);

        cell1.innerHTML = interest.value;
        cell2.innerHTML = '<a style="color: red;" onclick="deleteRowtsi(this)"><span class="fa fa-trash-alt"></span></a>';
        // saveData.value += "\n" + interest.value;
        interest.value = "";
        rowID++;
        readDatatsi();
        $('#te_subjectofinterestModal').modal("hide");

    }
}

function readDatatsi() {
    //gets table
    var oTable = document.getElementById('interest_table');
    var saveData = document.getElementById("tsi");
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
        // for (var j = 0; j < 1; j++) {
        /* get your cell info here */
        var cellVal = oCells.item(0).innerHTML;
        saveData.value += cellVal + "|";
        // }
        saveData.value += "\n";
    }
    // alert(saveData.value);
}

function deleteRowtsi(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("interest_table").deleteRow(i);
    readDataTeaching();
}
</script>
<script type="text/javascript">
$(window).on('load', function() {
    $('#tsiSection').hide();
});
$(document).ready(function() {
    $('input:radio[name="tsiRadios"]').change(
        function() {
            if ($(this).val() == 'Yes') {
                $('#tsiSection').show();
            } else {
                $('#tsiSection').hide();
            }
        });
});
</script>