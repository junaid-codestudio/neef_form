<section class="border border-dark rounded">
    <br>
    <div class="form-group row">
        <label class="col-md-4 control-label" for="interest">Subject Of Interest</label>
        <div class="col-md-4">
            <input class="form-control input-md" type="text" name="interest" id="interest">

        </div>
        <label class="control-label" id="interestErr" name="interestErr" style="color: red; font-weight: bold;"></label>
    </div>
    <a onclick="interest_table();">
        <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;">Add</button>
    </a>
    <div class="container">
        <div class="tab tab-1 col-md-4">
            <table id="interest_table" name="interest_table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
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
            <input type="hidden" name="tsi" id="tsi" value="">
        </div>
    </div>
</section>
<script type="text/javascript">
function interest_table() {
    var interest_table = document.getElementById("interest_table");
    var interest = document.getElementById("interest");
        saveData=document.getElementById("tsi");
    if (interest.value == "" || interest.value == null) {
        alert("Please enter subject to add!");
    } else {
        var newRow = interest_table.insertRow(interest_table.length),
            cell1 = newRow.insertCell(0);
        cell1.innerHTML = interest.value;
        saveData.value += "\n" + interest.value;
        interest.value = "";
    }
}
</script>