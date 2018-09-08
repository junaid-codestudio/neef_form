<section class="border border-dark rounded">
    <legend>Marking Subject of Interest</legend>
    <br>
    <br>
    <!-- employment question -->
    <div class="form-group row">
        <label class="col-md control-label" for="msiRadios">Do you have marking subject of interest?</label>
        <div class="col-md">
            <div class="row">
                <label class="radio-inline" for="msiYes">
                    <input class="col-md" id="msiYes" type="radio" name="msiRadios" value="Yes">
                    <label class="col-md" for="msiYes">Yes</label>
                </label>
                <label class="radio-inline" for="msiNo">
                    <input class="col-md" id="msiNo" type="radio" name="msiRadios" value="No" checked>
                    <label class="col-md" for="msiNo">No</label>
                </label>
            </div>
        </div>
    </div>
    <!-- <a onclick="interest_table();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a> -->
    <section id="msiSection">
        <button type="button" class="btn-circle" data-toggle="modal" data-target="#markinginterestsubjectModal"><span class="fa fa-plus"></span>Add</button>
        <!-- <a onclick="interest_marking();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a> -->
        <div class="container">
            <div class="tab tab-1 col-md-4">
                <table id="interest_marking" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
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
                <input type="hidden" name="msi" id="msi" value="">
            </div>
        </div>
        <?php require_once 'Modals/markinginterestsubjectModal.php'; ?>
    </section>
</section>
<script type="text/javascript">
var rowID = 1;

function marktable() {

    var interest_marking = document.getElementById("interest_marking"),
        interest_merking_subject = document.getElementById("interest_merking_subject");
    // saveData=document.getElementById("msi");
    if (interest_merking_subject.value == "" || interest_merking_subject.value == null) {
        alert("Enter Subject to Add");
    } else {
        var newRow = interest_marking.insertRow(interest_marking.length),
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1);

        cell1.innerHTML = interest_merking_subject.value;
        cell2.innerHTML = '<a style="color: red;" onclick="deleteRowMarkingInterest(this)"><span class="fa fa-trash-alt"></span></a>';
        // saveData.value += "\n" + interest_merking_subject.value;
        interest_merking_subject.value = "";
        rowID++;
        readDataMarkingInterest();
        $('#markinginterestsubjectModal').modal("hide");
    }
}

function readDataMarkingInterest() {
    //gets table
    var oTable = document.getElementById('interest_marking');
    var saveData = document.getElementById("msi");
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
        /* get your cell info here */
        var cellVal = oCells.item(0).innerHTML;
        saveData.value += cellVal + "|";
        saveData.value += "\n";
    }
    // alert(saveData.value);
}

function deleteRowMarkingInterest(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("interest_marking").deleteRow(i);
    readDataMarkingInterest();
}
</script>
<script type="text/javascript">
$(window).on('load', function() {
    $('#msiSection').hide();
});
$(document).ready(function() {
    $('input:radio[name="msiRadios"]').change(
        function() {
            if ($(this).val() == 'Yes') {
                $('#msiSection').show();
            } else {
                $('#msiSection').hide();
            }
        });
});
</script>