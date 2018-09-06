<?php 

// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);

require_once 'includes/creds.php';

if(!isset($_SESSION)){
	session_start();
}

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
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

    <!-- <script src="assets/js/validation_v1.0.js" type="text/javascript" charset="utf-8" async defer></script> -->
    <title>NEEF - Online Application Form</title>
</head>

<body style="background: #fce8d5;">
    <?php require_once 'includes/menu.php'; ?>
    <?php 
	if(isset($_SESSION['saveStatus'])){
		$saveStatus = $_SESSION['saveStatus'];
		if($saveStatus=="success"){
			?>
    <div class="alert alert-success" style="z-index: 1000000; font-size: xx-large; text-align: center;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Your data has been saved successfully!
    </div>
    <?php }
		else if($saveStatus=="failure"){ ?>
    <div class="alert alert-danger" style="z-index: 1000000; font-size: xx-large; text-align: center;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Sorry for the inconvenience!</strong> Some error occured. Please try again!
    </div>
    <?php }
		session_destroy();
		session_start();
	} else{

	} ?>
    <div class="container center" style="color: black;" align="center">
        <form class="form-horizontal col-md-12 registration-form" style="margin-top: 5em; margin-bottom: 5em" role="form" action="includes/form.php" method="post" enctype="multipart/form-data" multipart="">
            <!-- Form Name -->
            <legend id="legend_1" style="text-align: center;">Online Application Form</legend>
            <!-- Personal info -->
            <ul id="progressbar">
                <li id="li_pi" style="text-align: center;" class="active first">Personal Info</li>
                <li id="li_ci" class="second">Contact Info</li>
                <li id="li_apq" class="third">Academic and professional Qualification</li>
                <li id="li_ae" class="fourth">About Employment</li>
                <li id="li_cs" class="last">Confirm and Submit</li>
            </ul>
            <hr>
            <?php require_once 'includes/personalinfo.php' ?>
            <?php require_once 'includes/contactinfo.php' ?>
            <?php require_once 'includes/qualification.php' ?>
            <?php require_once 'includes/employment.php' ?>
            <?php require_once 'includes/questions.php' ?>
            <input type="submit" class="btn btn-outline-dark" id="submit" name="submit" value="Submit">
        </form>
    </div>
    <script type="text/javascript">
	    function myFunction() {
	        var firstName = document.getElementById("firstName");
	        firstName.value = firstName.value.toUpperCase();

	        var middleName = document.getElementById("middleName");
	        middleName.value = middleName.value.toUpperCase();

	        var lastName = document.getElementById("lastName");
	        lastName.value = lastName.value.toUpperCase();

	        var f_hfirstName = document.getElementById("f_hfirstName");
	        f_hfirstName.value = f_hfirstName.value.toUpperCase();

	        var f_hmiddleName = document.getElementById("f_hmiddleName");
	        f_hmiddleName.value = f_hmiddleName.value.toUpperCase();

	        var f_hlastName = document.getElementById("f_hlastName");
	        f_hlastName.value = f_hlastName.value.toUpperCase();
	    }
    </script>
    <script type="text/javascript">
	    $(document).ready(function() {
	        $("#yes").click(function() {
	            $("#proff_degree").show();

	        });

	        $("#no").click(function() {

	            $("#proff_degree").hide();

	        });
	    });
    </script>
    <script>
	    //radio selection querrys
	    $(document).ready(function() {
	        $("#pakistan").click(function() {
	            $("#pakiUni").show();
	            $("#abroadUni").hide();
	        });

	        $("#abroad").click(function() {
	            $("#abroadUni").show();
	            $("#pakiUni").hide();

	        });
	    });

	    $(document).ready(function() {
	        $("#employed").click(function() {
	            $("#employedinfo").show();
	        });
	    });

	    $(document).ready(function() {
	        $("#unemployed").click(function() {
	            $("#employedinfo").hide();
	        });
	    });

	    // onload hide querrys
	    $(window).on('load', function() {
	        $("#abroadUni").hide();
	        $("#pakiUni").hide();
	    });
	    $(window).on('load', function() {
	        $("#otherdegree").hide();
	    });

	    $(window).on('load', function() {
	        $("#employedinfo").hide();
	    });
    </script>
    <script type="text/javascript">
	    function otherdeg() {
	        var deg = document.getElementById("teachingdegree");
	        var othdeg = document.getElementById("otherdegree");

	        if (deg.value == "Other") {
	            othdeg.style.display = "block";
	        } else {
	            othdeg.style.display = "none";
	        }
	    }
    </script>
    <script type="text/javascript">
	    $("#passing").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years",
	        displayNone: 'true'
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#passingyear").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years"
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#workingsince").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years"
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#date_to").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years"
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#date_from").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years"
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#checking_date_to").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years"
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#checking_date_from").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years",
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#invigilating_date_from").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years"
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });

	    $("#invigilating_date_to").datepicker({
	        format: "yyyy",
	        viewMode: "years",
	        minViewMode: "years"
	    }).on('change', function() {
	        $('.datepicker').hide();
	    });
    </script>
    <!-- Media Query -->
    <script type="text/javascript">
	    $(document).ready(function() {

	        $('.next').click(function() {
	            $('.current').removeClass('current').hide().next().show().addClass('current');
	            $('#progressbar li.active').next().addClass('active');
	        });

	        $('.previous').click(function() {
	            $('.current').removeClass('current').hide().prev().show().addClass('current');
	            $('#progressbar li.active').removeClass('active').prev().addClass('active');
	        });
	        
	        $("#picUploader").change(function(event) {
	            readURL(this);
	        });
	    });

	    function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function(e) {
	                $('#image-preview').attr('src', e.target.result);
	            }

	            reader.readAsDataURL(input.files[0]);
	        }
	    }

	    $(window).on('load', function() {
	        $(".field2").hide();
	        $(".field3").hide();
	        $(".field4").hide();
	        $(".field5").hide();
	    });
    </script>
    <script type="text/javascript">
	    $(document).ready(function() {

	        function mediaSize() {
	            if (window.matchMedia('(max-width: 550px)').matches) {
	                // Changes when we reach the min-width  

	                $("#li_pi").show();
	                $("#li_ci").hide();
	                $("#li_apq").hide();
	                $("#li_ae").hide();
	                $("#li_cs").hide();
	                $("#progressbar").css('margin-left', '35%');

	                $("#nextPI").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    // $("#li_apq").hide();
	                    // $("#li_ae").hide();
	                    // $("#li_cs").hide();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '-500em');
	                    $("#li_ci").css('margin-top', '');
	                    $("#li_apq").css('margin-top', '-500em');
	                    $("#li_ae").css('margin-top', '-500em');
	                    $("#li_cs").css('margin-top', '-500em');
	                });


	                $("#nextCI").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    $("#li_apq").show();
	                    // $("#li_ae").hide();
	                    // $("#li_cs").hide();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '-500em');
	                    $("#li_ci").css('margin-top', '-500em');
	                    $("#li_apq").css('margin-top', '');
	                    $("#li_ae").css('margin-top', '-500em');
	                    $("#li_cs").css('margin-top', '-500em');
	                });
	                $("#backCI").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    $("#li_apq").show();
	                    $("#li_ae").show();
	                    $("#li_cs").show();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '');
	                    $("#li_ci").css('margin-top', '-500em');
	                    $("#li_apq").css('margin-top', '-500em');
	                    $("#li_ae").css('margin-top', '-500em');
	                    $("#li_cs").css('margin-top', '-500em');
	                });

	                $("#nextQI").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    $("#li_apq").show();
	                    $("#li_ae").show();
	                    // $("#li_cs").hide();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '-500em');
	                    $("#li_ci").css('margin-top', '-500em');
	                    $("#li_apq").css('margin-top', '-500em');
	                    $("#li_cs").css('margin-top', '-500em');
	                    $("#li_ae").css('margin-top', '');
	                });

	                $("#prevQ").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    $("#li_apq").show();
	                    $("#li_ae").show();
	                    $("#li_cs").show();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '-500em');
	                    $("#li_ci").css('margin-top', '');
	                    $("#li_apq").css('margin-top', '-500em');
	                    $("#li_ae").css('margin-top', '-500em');
	                    $("#li_cs").css('margin-top', '-500em');

	                });

	                $("#nextEI").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    $("#li_apq").show();
	                    $("#li_ae").show();
	                    $("#li_cs").show();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '-500em');
	                    $("#li_ci").css('margin-top', '-500em');
	                    $("#li_apq").css('margin-top', '-500em');
	                    $("#li_ae").css('margin-top', '-500em');
	                    $("#li_cs").css('margin-top', '');
	                });

	                $("#prevEI").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    $("#li_apq").show();
	                    $("#li_ae").show();
	                    $("#li_cs").show();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '-500em');
	                    $("#li_ci").css('margin-top', '-500em');
	                    $("#li_apq").css('margin-top', '');
	                    $("#li_ae").css('margin-top', '-500em');
	                    $("#li_cs").css('margin-top', '-500em');
	                });

	                $("#prevQI").on('click', function() {
	                    $("#li_pi").show();
	                    $("#li_ci").show();
	                    $("#li_apq").show();
	                    $("#li_ae").show();
	                    $("#li_cs").show();
	                    $("#progressbar").css('margin-left', '35%');
	                    $("#li_pi").css('margin-top', '-500em');
	                    $("#li_ci").css('margin-top', '-500em');
	                    $("#li_apq").css('margin-top', '-500em');
	                    $("#li_ae").css('margin-top', '');
	                    $("#li_cs").css('margin-top', '-500em');

	                });

	            } else {
	                /* Reset for CSS changes – Still need a better way to do this! */

	            }
	        };


	        mediaSize();

	        window.addEventListener('resize', mediaSize, false);

	    });
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