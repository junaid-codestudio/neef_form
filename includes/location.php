<div class="from-group row">
    <label class="col-md control-label" for="address">Postal Address</label>
    <div class="col-md">
        <div class="row">Province:<label class="col-md control-label"></label></div>
        <div class="row">
            <select id="province" class="col-md form-control" name="province">
            <option value="Select">Select</option>
            <?php 
                              $sql = "SELECT province as prov FROM tbl_location group by province";
                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                      // echo "Province: " . $row["province"]. "<br>";
                              ?>
            <option value="<?= $row["prov"] ?>">
                <?= $row["prov"]?>
            </option>
            <?php 
                                  }
                              } else { ?>
            <?php 
                                  echo "0 results";
                              }
                              $conn->close(); 
                              ?>
        </select>
        <label class="col-md control-label" id="provinceErr" name="provinceErr" style="color: red; font-weight: bold;"></label>
        </div>
        
        <!-- Division -->
        <div class="row">Division:<label class="col-md control-label"></label></div>
        <div class="row">
            
          <select id="division" class="form-control col-md" name="division"></select>
          <label class="col-md control-label" id="divisionErr" name="divisionErr" style="color: red; font-weight: bold;"></label>
        
        </div>

       
        <!-- District -->
        <div class="row">District:<label class="col-md control-label"></label></div>
        <div class="row">
            <select id="district" class="col-md form-control" name="district"></select>
        <label class="col-md control-label" id="districtErr" name="districtErr" style="color: red; font-weight: bold;"></label>
        </div>

        
        <!-- Tehsil -->
        <div class="row">Tehsil:<label class="col-md control-label"></label></div>
        <div class="row">
            <select id="tehsil" class="col-md form-control" name="tehsil"></select>
        <label class="col-md control-label" id="tehsilErr" name="tehsilErr" style="color: red; font-weight: bold;"></label>
        </div>
    </div>
    
</div>
<script>
function populateDivision() {

    var jp = document.getElementById("province");
    var uri = jp.options[jp.selectedIndex].text;
    $.getJSON('./includes/locations/division.php', { province: uri }, function(data) {

        var select = $('#division');
        var options = select.prop('options');
        $('option', select).remove();

        $.each(data, function(index, array) {
            options[options.length] = new Option(array['Division']);
        });
        options[options.length] = new Option('Select', 'Select', true, true);

    });

}

populateDivision();
$('#province').change(function() {
    populateDivision();
});
</script>
<script>
function populateDistrict() {

    var jp = document.getElementById("province");
    var uri = jp.options[jp.selectedIndex].text;

    $.getJSON('./includes/locations/district.php', { province: uri, division: $('#division').val() }, function(data) {

        var select = $('#district');
        var options = select.prop('options');
        $('option', select).remove();

        $.each(data, function(index, array) {
            options[options.length] = new Option(array['District']);
        });
        options[options.length] = new Option('Select', 'Select', true, true);

    });

}

populateDistrict();
$('#division').change(function() {
    populateDistrict();
    // $('#district').append('<option value="foo" selected="selected">Foo</option>');
});
</script>
<script>
function populateTehsil() {

    var jp = document.getElementById("province");
    var uri = jp.options[jp.selectedIndex].text;

    $.getJSON('./includes/locations/tehsil.php', { province: uri, division: $('#division').val(), district: $('#district').val() }, function(data) {

        var select = $('#tehsil');
        var options = select.prop('options');
        $('option', select).remove();

        $.each(data, function(index, array) {
            options[options.length] = new Option(array['Tehsil']);
        });
        options[options.length] = new Option('Select', 'Select', true, true);

    });

}

populateTehsil();
$('#district').change(function() {
    populateTehsil();
});
</script>