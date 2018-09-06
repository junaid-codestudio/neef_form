<?php require_once 'includes/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title> - jsFiddle demo</title>
<!-- <script type='text/javascript' src='http://code.jquery.com/jquery-1.8.2.js'></script> -->
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type='text/css'>
</style>
</head>
<body>
  <a><button type="button" class="btn btn-outline-dark">Testing The Button</button></a>
<div id="DrpDwn">
Province:<select id="province">
<option value="select">Select</option>
                             <?php 
                              $sql = "SELECT province FROM tbl_location group by province";
                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                      // echo "Province: " . $row["province"]. "<br>";
                              ?>

                              <option value="<?= $row["province"]?>"><?= $row["province"]?></option>

                              <?php 
                                  }
                              } else { ?>
                              <option value="N/A">N/A</option>
                              <?php 
                                  echo "0 results";
                              }
                              $conn->close(); ?>
                              	
                              </select>
Division:<select id="division"></select>
District:<select id="district"></select>
Tehsil:<select id="tehsil"></select>
</div>
<script>

function populateDivision() {

	$.getJSON('includes/locations/division.php', {province: $('#province').val()}, function (data) {

		var select = $('#division');
		var options = select.prop('options');
		$('option', select).remove();

		$.each(data, function (index, array) {
			options[options.length] = new Option(array['Division']);
		});
      options[options.length] = new Option('Select', 'Select', true, true);

	});

}

populateDivision();
$('#province').change(function () {
	populateDivision();
});

</script>
<script>

function populateDistrict() {

  $.getJSON('includes/locations/district.php', {province: $('#province').val(), division: $('#division').val()}, function (data) {

    var select = $('#district');
    var options = select.prop('options');
    $('option', select).remove();

    $.each(data, function (index, array) {
      options[options.length] = new Option(array['District']);
    });
      options[options.length] = new Option('Select', 'Select', true, true);

  });

}

populateDistrict();
$('#division').change(function () {
  populateDistrict();
// $('#district').append('<option value="foo" selected="selected">Foo</option>');
});

</script>
<script>

function populateTehsil() {

  $.getJSON('includes/locations/tehsil.php', {province: $('#province').val(), division: $('#division').val(), district: $('#district').val()}, function (data) {

    var select = $('#tehsil');
    var options = select.prop('options');
    $('option', select).remove();

    $.each(data, function (index, array) {
      options[options.length] = new Option(array['Tehsil']);
    });
      options[options.length] = new Option('Select', 'Select', true, true);

  });

}

populateTehsil();
$('#district').change(function () {
  populateTehsil();
});

</script>
</body>
</html>