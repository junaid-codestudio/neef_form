<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Restrict date range</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: new Date(1947, 0, 1),
            maxDate: new Date(2003, 0, 1),
            changeMonth: true,
            changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true,
      showButtonPanel: true,
      yearRange: '1947:2003'
        });

        $("#datepicker").datepicker("option", "showAnim", "slideDown");
    });
    </script>
</head>

<body>
    <p>Date:
        <input type="text" id="datepicker">
        <br>
        <br>
        <br>
        

    </p>
<select name="country" id="country">
</select>

<script type="text/javascript">
    let dropdown = $('#country');

    dropdown.empty();

    dropdown.append('<option selected="true" disabled>Choose Country</option>');
    dropdown.prop('selectedIndex', 0);

    const url = 'countrys.json';

    // Populate dropdown with list of provinces
    $.getJSON(url, function(data) {
        $.each(data, function(key, entry) {
            dropdown.append($('<option></option>').attr('value', entry).text(entry));
        })
    });
</script>
</body>

</html>