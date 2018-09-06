<?php 

include 'creds.php';

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn1) {
    die("Connection failed: " . mysqli_connect_error());
} ?>
<div class="from-group row">
    <label class="col-md control-label" for="jobaddress">Postal Address</label>
    <div class="col-md">
        <div class="row">Province:<label class="col-md control-label"></label></div>
        <div class="row">
            <select id="jobprovince" class="form-control col-md" name="jobprovince">
            <option value="Select">Select</option>
            <?php 
    $sql1 = "SELECT province as job_province FROM tbl_location group by province";
    $result1 = $conn1->query($sql1);

    if ($result1->num_rows > 0) {
                                  // output data of each row
      while($row1 = $result1->fetch_assoc()) {
                                      // echo "Province: " . $row["province"]. "<br>";
        ?>
            <option value=<?= $row1["job_province"]?>>
                <?= $row1["job_province"]?>
            </option>
            <?php 
      }
    } else { ?>
            <option value="N/A">N/A</option>
            <?php 
      echo "0 results";
    }
    $conn1->close(); ?>
        </select>
        <label class="col-md control-label" for="jobprovinceErr" id="jobprovinceErr" name="jobprovinceErr" style="color: red; font-weight: bold;"></label>
        </div>
        <!-- Division -->
        <div class="row">Division:<label class="col-md control-label"></label></div>
        <div class="row">
            <select id="jobdivision" class="form-control col-md" name="jobdivision"></select>
            <label class="col-md control-label" for="jobdivisionErr" id="jobdivisionErr" name="jobdivisionErr" style="color: red; font-weight: bold;"></label>
        </div>
        <!-- District -->
        <div class="row">District:<label class="col-md control-label"></label></div>
        <div class="row">
            <select id="jobdistrict" class="form-control col-md" name="jobdistrict"></select>
            <label class="col-md control-label" for="jobdistrictErr" id="jobdistrictErr" name="jobdistrictErr" style="color: red; font-weight: bold;"></label>
        </div>
        <!-- Tehsil -->
        <div class="row">Tehsil:<label class="col-md control-label"></label></div>
        <div class="row">
            <select id="jobtehsil" class="form-control col-md" name="jobtehsil"></select>
            <label class="col-md control-label" for="jobtehsilErr" id="jobtehsilErr" name="jobtehsilErr" style="color: red; font-weight: bold;"></label>
        </div>
    </div>
</div>
<script>
function populatejobDivision() {

    var jp = document.getElementById("jobprovince");
    var uri = jp.options[jp.selectedIndex].text;
    $.getJSON('./includes/jobLocations/division.php', {jobprovince: uri }, function(data) {

        var select = $('#jobdivision');
        var options = select.prop('options');
        $('option', select).remove();

        $.each(data, function(index, array) {
            options[options.length] = new Option(array['JobDivision']);
        });
        options[options.length] = new Option('Select', 'Select', true, true);

    });

}

populatejobDivision();
$('#jobprovince').change(function() {
    populatejobDivision();
});
</script>
<script>
function populatejobDistrict() {

    var jp = document.getElementById("jobprovince");
    var uri = jp.options[jp.selectedIndex].text;
    $.getJSON('./includes/jobLocations/district.php', {jobprovince: uri, jobdivision: $('#jobdivision').val() }, function(data) {

        var select = $('#jobdistrict');
        var options = select.prop('options');
        $('option', select).remove();

        $.each(data, function(index, array) {
            options[options.length] = new Option(array['JobDistrict']);
        });
        options[options.length] = new Option('Select', 'Select', true, true);

    });

}

populatejobDistrict();
$('#jobdivision').change(function() {
    populatejobDistrict();
    // $('#district').append('<option value="foo" selected="selected">Foo</option>');
});
</script>
<script>
function populatejobTehsil() {

    var jp = document.getElementById("jobprovince");
    var uri = jp.options[jp.selectedIndex].text;
    $.getJSON('./includes/jobLocations/tehsil.php', {jobprovince: uri, jobdivision: $('#jobdivision').val(), jobdistrict: $('#jobdistrict').val() }, function(data) {
        // console.log("data: " + data);
        var select = $('#jobtehsil');
        var options = select.prop('options');
        $('option', select).remove();

        $.each(data, function(index, array) {
            options[options.length] = new Option(array['JT']);
        });
        options[options.length] = new Option('Select', 'Select', true, true);

    });

}

populatejobTehsil();
$('#jobdistrict').change(function() {
    populatejobTehsil();
});
</script>