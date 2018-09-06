<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap-formhelpers.css" />
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/editor.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="includes/formstyle.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.css">
    <script src="assets/js/validation_v1.0.js" type="text/javascript" charset="utf-8" async defer></script>
    <title>NEEF - Online Application Form</title>
</head>

<body style="background: #fce8d5;">
    <section class="border border-dark rounded">
        <legend>Invigilating Experience</legend>
        <!-- checking level -->
        <!-- Table -->
        <!-- <a onclick="invig_table();"> -->
            <!-- </a> -->
            <!-- Table -->
            <div class="container" style="padding-top: 2px;">
                <div class="tab tab-1">
                    <table id="invig_table" class="table table-striped table-hover table-bordered table-responsive-sm text-center">
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
                    <input type="hidden" name="invig_tableData" id="invig_tableData" value="">
                </div>
            </div>
            <button type="button" class="btn btn-outline-dark btn-lg btn-block" style="width: 97%;" data-toggle="modal" data-target="#invigExpModal">Add</button>
            <?php require_once 'Modals/invigExpModal.php'; ?>
        </section>
        <script type="text/javascript">
            var rowID = 1;

            function invig_table() {
                var marking_table = document.getElementById("invig_table"),
                checking_level = document.getElementById("invig_level"),
                checking_date_to = document.getElementById("invigilating_date_to"),
                checking_date_from = document.getElementById("invigilating_date_from");

                if (checking_level.value == "" || checking_level.value == null ||
                    checking_date_to.value == "" || checking_date_to.value == null ||
                    checking_date_from.value == "" || checking_date_from == null) {
                    alert("Please enter values to Add");
            } else {
                var newRow = marking_table.insertRow(marking_table.length),
                cell1 = newRow.insertCell(0),
                cell2 = newRow.insertCell(1),
                cell3 = newRow.insertCell(2),
                cell4 = newRow.insertCell(3);
                newRow.id = rowID;
                cell1.innerHTML = checking_level.value;
                cell2.innerHTML = checking_date_to.value;
                cell3.innerHTML = checking_date_from.value;
                cell4.innerHTML = '<a style="color: red;" onclick="deleteRow(this)"><span class="fa fa-trash-alt"></span></a>';
                checking_level.value = "Select";
                checking_date_from.value = "";
                checking_date_to.value = "";
                rowID++;
                readData();
            }
        }

        function readData() {
        //gets table
        var oTable = document.getElementById('invig_table');
        var saveData = document.getElementById("invig_tableData");
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

    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("invig_table").deleteRow(i);
        readData();
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap-formhelpers.js"></script>
<script src="assets/js/bootstrap-formhelpers-phone.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap-select.js"></script>
</body>

</html>