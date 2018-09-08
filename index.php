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
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="includes/formstyle.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-select.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="assets/js/validation_v1.0.js" type="text/javascript" charset="utf-8" async defer></script>
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
				<li id="li_i" class="fifth">Invigilation</li>
				<li id="li_t" class="sixth">Teaching</li>
				<li id="li_m" class="seventh">Marking</li>
				<li id="li_mq" class="eightth">Miscellaneous Questions</li>
				<li id="li_cs" class="last">Confirm and Submit</li>
			</ul>
			<hr>
			<?php require_once 'includes/personalinfo.php' ?>
			<?php require_once 'includes/contactinfo.php' ?>
			<?php require_once 'includes/qualification.php' ?>
			<?php require_once 'includes/employment.php' ?>
			<?php require_once 'includes/invigilation.php' ?>
			<?php require_once 'includes/teaching.php' ?>
			<?php require_once 'includes/marking.php' ?>
			<?php require_once 'includes/questions.php' ?>
			<?php require_once 'includes/confirm.php' ?>
			<?php require_once 'Modals/instructionsModal.php' ?>
			<input type="submit" class="btn btn-outline-dark" id="submit" name="submit" value="Submit">
		</form>
	</div>
	<!-- Name conversion to Uppercase -->
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
	<!-- radio of Proffessional Degree -->
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
	<!-- radio selection querrys -->
	<script>
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
	    	$("#employedinfo").hide();
	    	$("#otherdegree").hide();
	    	$("#proff_degree").hide();

	    });
	</script>
<!-- showing of other professional degree -->
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
<!-- datepicker settings -->
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
		minViewMode: "years",
		yearRange: "-60:+0"
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
<!-- main progress bar -->
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
		$(".field6").hide();
		$(".field7").hide();
		$(".field8").hide();
		$(".field9").hide();
	});
</script>
<!-- media query -->
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
                $("#li_i").hide();
                $("#li_t").hide();
                $("#li_m").hide();
                $("#li_mq").hide();
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
                	$("#li_i").hide();
                	$("#li_t").hide();
                	$("#li_m").hide();
                	$("#li_mq").hide();
                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                });

                $("#nextQ").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();
                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');

                });

                $("#prevQ").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();
                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');

                });

                $("#nextEI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();
                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                });

                $("#prevEI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();
                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                });

                $("#nextII").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();

                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                });

                $("#prevII").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();

                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                });

                $("#nextTI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();

                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '');
                	$("#li_mq").css('margin-top', '-500em');
                });

                $("#prevTI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();

                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                });

                $("#nextMI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();

                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '');
                	$("#li_cs").css('margin-top', '-500em');
                });

                $("#prevMI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();

                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                });

                $("#nextQI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();

                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '');
                });



                $("#prevQI").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();
                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '');
                	$("#li_mq").css('margin-top', '-500em');
                	$("#li_cs").css('margin-top', '-500em');
                });

                $("#prevCS").on('click', function() {
                	$("#li_pi").show();
                	$("#li_ci").show();
                	$("#li_apq").show();
                	$("#li_ae").show();
                	$("#li_cs").show();
                	$("#li_i").show();
                	$("#li_t").show();
                	$("#li_m").show();
                	$("#li_mq").show();
                	$("#progressbar").css('margin-left', '35%');
                	$("#li_pi").css('margin-top', '-500em');
                	$("#li_ci").css('margin-top', '-500em');
                	$("#li_apq").css('margin-top', '-500em');
                	$("#li_ae").css('margin-top', '-500em');
                	$("#li_i").css('margin-top', '-500em');
                	$("#li_t").css('margin-top', '-500em');
                	$("#li_m").css('margin-top', '-500em');
                	$("#li_mq").css('margin-top', '');
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
<!-- only alphabets in Name & fatherName -->
<script language="Javascript" type="text/javascript">
	function onlyAlphabets(e, t) {

		try {

			if (window.event) {

				var charCode = window.event.keyCode;

			} else if (e) {

				var charCode = e.which;

			} else { return true; }

			if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))

				return true;

			else

				return false;

		} catch (err) {

			alert(err.Description);

		}

	}
</script>
<!-- Intro Modal -->
<script type="text/javascript">
	$(window).on('load', function() {
		$("#instructionsModal").modal('show');
	});
</script>
<!-- Disclaimer -->
<script type="text/javascript">
	$(window).on('load', function() {
		$("#submit").hide();
	});

	$("#dis_yes").on('click', function() {
		$("#submit").show();
	});


	$("#dis_no").on('click', function() {
		$("#submit").hide();
	});
</script>
<!-- DOB validation -->
<script type="text/javascript">
	$(function() {
		$("#dob").datepicker({
			minDate: new Date(1947, 0, 1),
			maxDate: new Date(2003, 0, 1),
			changeMonth: true,
			changeYear: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			showButtonPanel: true,
			yearRange: '1947:2003',

			showOn: "both",
			buttonText: "<i class='fa fa-calendar-alt'></i>"
		});
		$("#dob").datepicker("option", "dateFormat", "dd/mm/yy");
		$("#dob").datepicker("option", "showAnim", "slideDown");
	});
</script>
<script type="text/javascript">
$(document).ready(function() {

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
});
</script>
<style type="text/css">
.ui-datepicker-trigger {
	border: none;
	background: none;
}
</style>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap-formhelpers.js"></script>
<script src="assets/js/bootstrap-formhelpers-phone.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap-select.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>