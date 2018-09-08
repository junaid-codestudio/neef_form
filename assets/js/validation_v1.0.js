$(document).ready(function() {


   v();

    function v() {
        $("#firstName").bind('input propertychange', function() {
            var str = $("#firstName").val();

            if (str == "") {

                $("#firstName").css("border-color", "red");
                $('#firstNameErr').text('Please Enter First Name ');
            } else {
                $("#firstName").css("border-color", "");
                $("#firstNameErr").text('');
            }
        });
        // $("#middleName").bind('input propertychange', function() {
        //     var str = $("#middleName").val();
        //     if (str == "") {
        //         $("#middleName").css("border-color", "red");
        //         $('#middleNameErr').text('Please Enter Middle Name ');
        //     } else {
        //         $("#middleName").css("border-color", "");
        //         $("#middleNameErr").text('');
        //     }
        // });
        $("#lastName").bind('input propertychange', function() {
            var str = $("#lastName").val();
            if (str == "") {
                $("#lastName").css("border-color", "red");
                $('#lastNameErr').text('Please Enter Last Name ');
            } else {
                $("#lastName").css("border-color", "");
                $("#lastNameErr").text('');
            }
        });

        // title
        $("#title").bind('input propertychange', function() {
            var str = $("#title").val();
            if (str == "Mr." || str == "Mrs." || str == "Dr." || str == "Engr." || str == "Ms.") {
                $("#title").css("border-color", "");
                $("#titleErr").text('');
            } else {
                $("#title").css("border-color", "red");
                $('#titleErr').text('Please Enter Your Title ');
            }

        });

        // Father/Husband Name
        $("#f_hfirstName").bind('input propertychange', function() {
            var str = $("#f_hfirstName").val();
            if (str == "") {
                $("#f_hfirstName").css("border-color", "red");
                $('#f_hfirstNameErr').text('Please Enter Father/Husband First Name ');
            } else {
                $("#f_hfirstName").css("border-color", "");
                $("#f_hfirstNameErr").text('');

            }
        });
        // $("#f_hmiddleName").bind('input propertychange', function() {
        //     var str = $("#f_hmiddleName").val();
        //     if (str == "") {
        //         $("#f_hmiddleName").css("border-color", "red");
        //         $('#f_hmiddleNameErr').text('Please Enter Father/Husband Middle Name ');
        //     } else {
        //         $("#f_hmiddleName").css("border-color", "");
        //         $("#f_hmiddleNameErr").text('');
        //     }
        // });
        $("#f_hlastName").bind('input propertychange', function() {
            var str = $("#f_hlastName").val();
            if (str == "") {
                $("#f_hlastName").css("border-color", "red");
                $('#f_hlastNameErr').text('Please Enter Father/Husband Last Name ');
            } else {
                $("#f_hlastName").css("border-color", "");
                $("#f_hlastNameErr").text('');
            }
        });

        // CNIC
        $("#cnic").bind('input propertychange', function() {

            var str = $("#cnic").val();

            if (str == "") {
                $("#cnic").css("border-color", "red");
                $('#cnicErr').text('Please Enter ID Card Number ');
            }
            if (str.length < 15) {
                $("#cnic").css("border-color", "red");
                $('#cnicErr').text('Please Enter Correct ID Card Number ');
            } else {
                $("#cnic").css("border-color", "");
                $("#cnicErr").text('');
            }
        });

        
        // Email
        $("#email").bind('input propertychange', function() {
            var str = $("#email").val();
            if (str == "") {
                $("#email").css("border-color", "red");
                $('#emailErr').text('Please Enter Email Address ');
            } else if (str.indexOf("@") >= 0 && str.lastIndexOf(".") > str.indexOf("@")) {
                $("#email").css("border-color", "");
                $("#emailErr").text('');
            } else {
                $("#email").css("border-color", "red");
                $('#emailErr').text('Please Enter Email in Correct Format ');
            }
        });

        // Mobile no
        $("#mobno").bind('input propertychange', function() {
            var str = $("#mobno").val();
            if (str == "+92" || str == "" || str.length < 18) {
                $("#mobno").css("border-color", "red");
                $('#mobnoErr').text('Please Enter Correct Mobile Number ');
            } else {
                $("#mobno").css("border-color", "");
                $("#mobnoErr").text('');
            }
        });

        // Emergancy No
        $("#emrgncyNo").bind('input propertychange', function() {
            var str = $("#emrgncyNo").val();

            if (str == "+92" || str == "" || str.length < 18) {
                $("#emrgncyNo").css("border-color", "red");
                $('#emrgncyNoErr').text('Please Enter Number ');
            } else {
                $("#emrgncyNo").css("border-color", "");
                $("#emrgncyNoErr").text('');
            }
        });

        // postal address

        // province
        $("#province").bind('input propertychange', function() {
            var str = $("#province").val();
            if (str == "Select") {
                $("#province").css("border-color", "red");
                $('#provinceErr').text('Please Select Province ');
            } else {
                $("#province").css("border-color", "");
                $("#provinceErr").text('');
            }
        });
        // Division
        $("#division").bind('input propertychange', function() {
            var str = $("#division").val();
            if (str == "Select") {
                $("#division").css("border-color", "red");
                $('#divisionErr').text('Please Select Division ');
            } else {
                $("#division").css("border-color", "");
                $("#divisionErr").text('');
            }
        });
        // Distric
        $("#district").bind('input propertychange', function() {
            var str = $("#district").val();
            if (str == "Select") {
                $("#district").css("border-color", "red");
                $('#districtErr').text('Please Select District ');
            } else {
                $("#district").css("border-color", "");
                $("#districtErr").text('');
            }
        });
        // Tehsil
        $("#tehsil").bind('input propertychange', function() {
            var str = $("#tehsil").val();
            if (str == "Select") {
                $("#tehsil").css("border-color", "red");
                $('#tehsilErr').text('Please Select Tehsil ');
            } else {
                $("#tehsil").css("border-color", "");
                $("#tehsilErr").text('');
            }
        });
        // Degree Level
        $("#degreelevel").bind('input propertychange', function() {
            var str = $("#degreelevel").val();
            if (str == "Select") {
                $("#degreelevel").css("border-color", "red");
                $('#degreelevelErr').text('Please Enter Correct Degree ');
            } else {
                $("#degreelevel").css("border-color", "");
            }
        });

        // specialization
        $("#majors").bind('input propertychange', function() {
            var str = $("#majors").val();
            if (str == "") {
                $("#majors").css("border-color", "red");
                $('#majorsErr').text('Please Enter Correct Subject');
            } else {
                $("#majors").css("border-color", "");
                $('#majorsErr').text('');
            }
        });

        // Passing year
        $("#passing").change(function() {

            var date = new Date($("#dob").val());
            var year = date.getFullYear();

            var str = $("#passing").val();

            if (str == "") {
                $("#passing").css("border-color", "red");
                $('#passingErr').text('Please Enter Correct Date');
            }
            if (str <= year) {
                $("#passing").css("border-color", "red");
                $('#passingErr').text('Please Enter Correct Date');
            } else {
                $("#passing").css("border-color", "");
                $('#passingErr').text('');
            }
        });
        // Education Question
        $("#pakistan").on('click', function() {
            $("#uniErr").text('');
        });
        $("#abroad").on('click', function() {
            $("#uniErr").text('');
        });

        // Pakistan Uni
        $("#pakistanUni").bind('input propertychange', function() {
            var str = $("#pakistanUni").val();
            if (str == "Select") {
                $("#pakistanUni").css("border-color", "red");
                $('#pakiUniErr').text('Please Enter University Name');
            } else {
                $("#pakistanUni").css("border-color", "");
            }
        });

        // Abroad Uni
        $("#country").bind('input propertychange', function() {
            var str = $("#country").val();
            if (str == "") {
                $("#country").css("border-color", "red");
                $('#countryErr').text('Please Enter Country Name');
            } else {
                $("#country").css("border-color", "");
                $('#countryErr').text('');
            }
        });

        // Abroad city
        $("#city").bind('input propertychange', function() {
            var str = $("#city").val();
            if (str == "") {
                $("#city").css("border-color", "red");
                $('#cityErr').text('Please Enter City Name');
            } else {
                $("#city").css("border-color", "");
                $('#cityErr').text('');
            }
        });

        // University
        $("#university").bind('input propertychange', function() {
            var str = $("#university").val();
            if (str == "") {
                $("#university").css("border-color", "red");
                $('#universityErr').text('Please Enter University Name');
            } else {
                $("#university").css("border-color", "");
                $('#universityErr').text('');
            }
        });

        // Totat Marks
        $("#maxno").bind('input propertychange', function() {
            var str = $("#maxno").val();
            if (str == "") {
                $("#maxno").css("border-color", "red");
                $('#maxnoErr').text('Please Enter Maximum Marks/Total CGPA');
            } else {
                $("#maxno").css("border-color", "");
                $('#maxnoErr').text('');
            }
        });

        // Marks Obtained
        $("#obtno").bind('input propertychange', function() {
            var str = $("#obtno").val();
            var maxno = $("#maxno").val();
            if (str == "") {
                $("#obtno").css("border-color", "red");
                $('#obtnoErr').text('Please Enter Marks Obtained');
            } else if (maxno - str < 0) {
                $("#obtno").css("border-color", "red");
                $('#obtnoErr').text('Please Enter Correct Marks');
            } else {
                $("#obtno").css("border-color", "");
                $('#obtnoErr').text('');
            }
        });
        // degree Uploader
        $("#degreeUploader").bind('input propertychange', function() {
            var str = $("#degreeUploader").val();
            if (str == "") {
                $("#degreeUploader").css("border-color", "red");
                $('#degreeUploaderErr').text('Please Upload Degree');
            } else {
                $("#degreeUploader").css("border-color", "");
                $('#degreeUploaderErr').text('');
            }
        });

        // proff Question
        $("#yes").on('click', function() {
            $("#proffErr").text('');
        });
        $("#no").on('click', function() {
            $("#proffErr").text('');
        });
        // Teaching Degree
        $("#teachingdegree").bind('input propertychange', function() {
            var str = $("#teachingdegree").val();
            if (str == "Select") {
                $("#teachingdegree").css("border-color", "red");
                $('#teachingdegreeErr').text('Please Select Degree');
            } else {
                $("#teachingdegree").css("border-color", "");
                $('#teachingdegreeErr').text('');
            }
        });
        // other
        $("#otherdegreeI").bind('input propertychange', function() {
            var str = $("#otherdegreeI").val();
            if (str == "") {
                $("#otherdegreeI").css("border-color", "red");
                $('#otherdegreeErr').text('Please Enter Degree Name');
            } else {
                $("#otherdegreeI").css("border-color", "");
                $('#otherdegreeErr').text('');
            }
        });
        // passing year
        $("#passingyear").bind('input propertychange', function() {
            var str = $("#passingyear").val();
            if (str == "") {
                $("#passingyear").css("border-color", "red");
                $('#passingyearErr').text('Please Upload Degree');
            } else {
                $("#passingyear").css("border-color", "");
                $('#passingyearErr').text('');
            }
        });
        // awarding body 
        $("#awardingbody").bind('input propertychange', function() {
            var str = $("#awardingbody").val();
            if (str == "") {
                $("#awardingbody").css("border-color", "red");
                $('#awardingbodyErr').text('Please Enter Awarding Body');
            } else {
                $("#awardingbody").css("border-color", "");
                $('#awardingbodyErr').text('');
            }
        });
        // employment Question
        $("#employed").on('click', function() {
            $("#employmentErr").text('');
        });
        $("#unemployed").on('click', function() {
            $("#employmentErr").text('');
        });
        // job title
        $("#designation").bind('input propertychange', function() {
            var str = $("#designation").val();
            if (str == "") {
                $("#designation").css("border-color", "red");
                $('#designationErr').text('Please Enter Job Designation');
            } else {
                $("#designation").css("border-color", "");
                $('#designationErr').text('');
            }
        });

        // description
        $("#description").bind('input propertychange', function() {
            var str = $("#description").val();
            if (str == "") {
                $("#description").css("border-color", "red");
                $('#descriptionErr').text('Please Enter Job Description');
            } else {
                $("#description").css("border-color", "");
                $('#descriptionErr').text('');
            }
        });

        // Campany Name
        $("#companyName").bind('input propertychange', function() {
            var str = $("#companyName").val();
            if (str == "") {
                $("#companyName").css("border-color", "red");
                $('#companyNameErr').text('Please Enter Company Name');
            } else {
                $("#companyName").css("border-color", "");
                $('#companyNameErr').text('');
            }
        });
        // Job Address
        // $("#jobaddress").bind('input propertychange', function() {
        //     var str = $("#jobaddress").val();
        //     if (str == "") {
        //         $("#jobaddress").css("border-color", "red");
        //     } else {
        //         $("#jobaddress").css("border-color", "");
        //     }
        // });
        // jobProvince
        $("#jobprovince").bind('input propertychange', function() {
            var str = $("#jobprovince").val();
            if (str == "Select") {
                $("#jobprovince").css("border-color", "red");
                $('#jobprovinceErr').text('Please Enter Province');
            } else {
                $("#jobprovince").css("border-color", "");
                $('#jobprovinceErr').text('');
            }
        });
        // JobDivision
        $("#jobdivision").bind('input propertychange', function() {
            var str = $("#jobdivision").val();
            if (str == "Select") {
                $("#jobdivision").css("border-color", "red");
                $('#jobdivisionErr').text('Please Enter Division');
            } else {
                $("#jobdivision").css("border-color", "");
                $('#jobdivisionErr').text('');
            }
        });
        // JobDistrict
        $("#jobdistrict").bind('input propertychange', function() {
            var str = $("#jobdistrict").val();
            if (str == "Select") {
                $("#jobdistrict").css("border-color", "red");
                $('#jobdistrictErr').text('Please Enter District');
            } else {
                $("#jobdistrict").css("border-color", "");
                $('#jobdistrictErr').text('');
            }
        });
        // JobTehsil
        $("#jobtehsil").bind('input propertychange', function() {
            var str = $("#jobtehsil").val();
            if (str == "Select") {
                $("#jobtehsil").css("border-color", "red");
                $('#jobtehsilErr').text('Please Enter Tehsil');
            } else {
                $("#jobtehsil").css("border-color", "");
                $('#jobtehsilErr').text('');
            }
        });
        // invigilating Experiance
        $("#invig_level").bind('input propertychange', function() {
            var str = $("#invig_level").val();
            if (str == "Select") {
                $("#invig_level").css("border-color", "red");
                $('#invig_levelErr').text('Please Enter Level of Invigilating');
            } else {
                $("#invig_level").css("border-color", "");
                $('#invig_levelErr').text('');
            }
        });
        // invigilating experiance date from
        $("#date_from").change(function() {

            var date = new Date($("#dob").val());
            var year = date.getFullYear();

            var str = $("#date_from").val();

            if (str == "") {
                $("#date_from").css("border-color", "red");
                $('#date_fromErr').text('Please Enter Correct Date');
            } else if (str <= year) {
                $("#date_from").css("border-color", "red");
                $('#date_fromErr').text('Please Enter Correct Date');
            } else {
                $("#date_from").css("border-color", "");
                $('#date_fromErr').text('');
            }
        });
        // teaching experiance date to
        $("#date_to").change(function() {

            var date = new Date($("#date_from").val());
            var year = date.getFullYear();

            var str = $("#date_to").val();

            if (str == "") {
                $("#date_to").css("border-color", "red");
                $('#date_toErr').text('Please Enter Correct Date');
            } else if (str <= year) {
                $("#date_to").css("border-color", "red")
                $('#date_toErr').text('Please Enter Correct Date');
            } else {
                $("#date_to").css("border-color", "");
                $('#date_toErr').text('');
            }
        });

        //Teaching Subject of Interest
        $("#interest").bind('input propertychange', function() {
            var str = $("#interest").val();
            if (str == "") {
                $("#interest").css("border-color", "red");
                $('#interestErr').text('Please Enter Interested Subject of Teaching');
            } else {
                $("#interest").css("border-color", "");
                $('#interestErr').text('');
            }
        });
        // teaching level
        $("#level").bind('input propertychange', function() {
            var str = $("#level").val();
            if (str == "") {
                $("#level").css("border-color", "red");
                $('#levelErr').text('Please Enter Level of Teaching');
            } else {
                $("#level").css("border-color", "");
                $('#levelErr').text('');
            }
        });

        // teaching experiance date from
        $("#date_from").change(function() {

            var date = new Date($("#dob").val());
            var year = date.getFullYear();

            var str = $("#date_from").val();

            if (str == "") {
                $("#date_from").css("border-color", "red");
                $('#date_fromErr').text('Please Enter Correct Date');
            } else if (str <= year) {
                $("#date_from").css("border-color", "red");
                $('#date_fromErr').text('Please Enter Correct Date');
            } else {
                $("#date_from").css("border-color", "");
                $('#date_fromErr').text('');
            }
        });
        // teaching experiance date to
        $("#date_to").change(function() {

            var date = new Date($("#date_from").val());
            var year = date.getFullYear();

            var str = $("#date_to").val();

            if (str == "") {
                $("#date_to").css("border-color", "red");
                $('#date_toErr').text('Please Enter Correct Date');
            } else if (str <= year) {
                $("#date_to").css("border-color", "red")
                $('#date_toErr').text('Please Enter Correct Date');
            } else {
                $("#date_to").css("border-color", "");
                $('#date_toErr').text('');
            }
        });
        // Marking Level
        $("#checking_level").bind('input propertychange', function() {
            var str = $("#checking_level").val();
            if (str == "Select") {
                $("#checking_level").css("border-color", "red");
                $('#checking_levelErr').text('Please Enter Level of Marking');
            } else {
                $("#checking_level").css("border-color", "");
                $('#checking_levelErr').text('');
            }
        });
        // marking experiance date from
        $("#checking_date_from").change(function() {

            var date = new Date($("#dob").val());
            var year = date.getFullYear();

            var str = $("#checking_date_from").val();

            if (str == "") {
                $("#checking_date_from").css("border-color", "red");
                $('#checkingdate_fromErr').text('Please Enter Correct Date');
            }
            if (str <= year) {
                $("#checking_date_from").css("border-color", "red");
                $('#checkingdate_fromErr').text('Please Enter Correct Date');
            } else {
                $("#checking_date_from").css("border-color", "");
                $('#checkingdate_fromErr').text('');
            }
        });
        // marking experiance date_to
        $("#checking_date_to").change(function() {

            var date = new Date($("#checking_date_from").val());
            var year = date.getFullYear();

            var str = $("#checking_date_to").val();

            if (str == "") {
                $("#checking_date_to").css("border-color", "red");
                $('#checking_date_toErr').text('Please Enter Correct Date');
            }
            if (str <= year) {
                $("#checking_date_to").css("border-color", "red");
                $('#checking_date_toErr').text('Please Enter Correct Date');
            } else {
                $("#checking_date_to").css("border-color", "");
                $('#checking_date_toErr').text('');
            }
        });
        // subject marking interest
        $("#interest_merking_subject").change(function() {

            var str = $("#interest_merking_subject").val();

            if (str == "") {
                $("#interest_merking_subject").css("border-color", "red");
                $('#interest_merking_subjectErr').text('Please Enter Subject');
            } else {
                $("#interest_merking_subject").css("border-color", "");
                $('#interest_merking_subjectErr').text('');
            }
        });


        $("#comp_know").bind('input propertychange', function() {
            var str = $("#comp_know").val();
            if (str == "Select") {
                $("#comp_know").css("border-color", "red");
                $('#comp_knowErr').text('Please Select Yes/No');
            } else {
                $("#comp_know").css("border-color", "");
                $('#comp_knowErr').text('');
            }
        });
        // Internet Access
        $("#net_access").bind('input propertychange', function() {
            var str = $("#net_access").val();
            if (str == "Select") {
                $("#net_access").css("border-color", "red");
                $('#net_accessErr').text('Please Select Yes/No');
            } else {
                $("#net_access").css("border-color", "");
                $('#net_accessErr').text('');
            }
        });

        $("#home_comp").bind('input propertychange', function() {
            var str_home_comp = $("#home_comp").val();
            if (str_home_comp == "Select") {
                $("#home_comp").css("border-color", "red");
                $('#home_compErr').text('Please Select Yes/No');
            } else {
                $("#home_comp").css("border-color", "");
                $('#home_compErr').text('');
            }
        });
    }

    // nextPI
    $("#fs_PI").on('click', "#nextPI", function() {
        // alert('working??');
        // Picture Uploader
        var check = 0;
        var str_picuploader = $("#picUploader").val();
        if (str_picuploader == "") {
            $("#picUploader").css("border-color", "red");
            $('#picUploaderErr').text('Please Upload your Picture ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#picUploader").focus();
            return false;

        } else {
            $("#picUploader").css("border-color", "");
            $('#picUploaderErr').text('');
            check = 1;
        }

        var strfn = $("#firstName").val();

        if (strfn == "") {

            $("#firstName").css("border-color", "red");
            $('#firstNameErr').text('Please Enter First Name ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#firstName").focus();
            return false;
        } else {
            $("#firstName").css("border-color", "");
            $("#firstNameErr").text('');
        }


        var strln = $("#lastName").val();
        if (strln == "") {
            $("#lastName").css("border-color", "red");
            $('#lastNameErr').text('Please Enter Last Name ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#lastName").focus();
            return false;
        } else {
            $("#lastName").css("border-color", "");
            $("#lastNameErr").text('');
            check = 1;
        }


        // title

        var str_title = $("#title").val();
        if (str_title == "Mr." || str_title == "Mrs." || str_title == "Dr." || str_title == "Engr." || str_title == "Ms.") {
            $("#title").css("border-color", "");
            $("#titleErr").text('');
            check = 1;
        } else {
            $("#title").css("border-color", "red");
            $('#titleErr').text('Please Enter Your Title ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#title").focus();
            return false;
        }



        // Father/Husband Name

        var strffn = $("#f_hfirstName").val();
        if (strffn == "") {
            $("#f_hfirstName").css("border-color", "red");
            $('#f_hfirstNameErr').text('Please Enter Father/Husband First Name ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#f_hfirstName").focus();
            return false;
        } else {
            $("#f_hfirstName").css("border-color", "");
            $("#f_hfirstNameErr").text('');
            check = 1;

        }



        var strfln = $("#f_hlastName").val();
        if (strfln == "") {
            $("#f_hlastName").css("border-color", "red");
            $('#f_hlastNameErr').text('Please Enter Father/Husband Last Name ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#f_hlastName").focus();
            return false;
        } else {
            $("#f_hlastName").css("border-color", "");
            $("#f_hlastNameErr").text('');
            check = 1;
        }


        // CNIC


        var str_cnic = $("#cnic").val();
        if (str_cnic == "") {
            $("#cnic").css("border-color", "red");
            $('#cnicErr').text('Please Enter ID Card Number ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#cnic").focus();
            return false;
        }
        else if (str_cnic.length > 15 || str_cnic.length < 15 || (/[a-z]/.test(str_cnic.toLowerCase()))) {
            $("#cnic").css("border-color", "red");
            $('#cnicErr').text('Please Enter Correct ID Card Number ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#cnic").focus();
            return false;
        } else {
            $("#cnic").css("border-color", "");
            $("#cnicErr").text('');
            check = 1;
        }


        // DOB


        var str_dob = $("#dob").val();

        if (str_dob == "") {
            $("#dob").css("border-color", "red");
            $('#dobErr').text('Please Enter Date Of Birth ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#dob").focus();
            return false;
        } else {
            $("#dob").css("border-color", "");
            $("#dobErr").text('');
            check = 1;
        }

            $("#email").focus();
            // $('#li_ci').show();
            // $('#li_pi').css('margin-top', '-500em');



    });
    // nextCI
    $("#fs_CI").on('click', "#nextCI", function() {
        // alert('working??');    

        var check = 0;
        var str_mail = $("#email").val();

        if (str_mail == "") {
            $("#email").css("border-color", "red");
            $('#emailErr').text('Please Enter Email Address ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#email").focus();
            return false;

        } else if (str_mail.indexOf("@") >= 0 && str_mail.lastIndexOf(".") > str_mail.indexOf("@")) {
            $("#email").css("border-color", "");
            $("#emailErr").text('');
            check = 1;
        } else

        {
            $("#email").css("border-color", "red");
            $('#emailErr').text('Please Enter Email in Correct Format ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#email").focus();
            return false;
        }


        // Mobile no

        var str_ptcl = $("#ptcl").val();
        if (/[a-z]/.test(str_ptcl.toLowerCase())) {
            $("#ptcl").css("border-color", "red");
            $('#ptclErr').text('Please Enter Correct PTCl Number');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#ptcl").focus();
            return false;

        } else {
            $("#ptcl").css("border-color", "");
            $("#ptclErr").text('');
        }

        // Mobile no

        var str_mobno = $("#mobno").val();
        if (str_mobno == "+92" || str_mobno == "" || str_mobno.length < 18) {
            $("#mobno").css("border-color", "red");
            $('#mobnoErr').text('Please Enter Correct Mobile Number ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#mobno").focus();
            return false;

        } else {
            $("#mobno").css("border-color", "");
            $("#mobnoErr").text('');
        }


        // Emergancy No

        var str_emrgncy = $("#emrgncyNo").val();

        if (str_emrgncy == "+92" || str_emrgncy == "" || str_emrgncy.length < 18 || (/[a-z]/.test(str_emrgncy.toLowerCase()))) {
            $("#emrgncyNo").css("border-color", "red");
            $('#emrgncyNoErr').text('Please Enter Correct Number ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#emrgncyNo").focus();
            return false;
        } else {
            $("#emrgncyNo").css("border-color", "");
            $("#emrgncyNoErr").text('');
            check = 1;
        }


        // postal address

        // province

        var str_province = $("#province").val();
        if (str_province == "Select") {
            $("#province").css("border-color", "red");
            $('#provinceErr').text('Please Select Province ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#province").focus();
            return false;
        } else {
            $("#province").css("border-color", "");
            $("#provinceErr").text('');
        }

        // Division

        var str_division = $("#division").val();
        if (str_division == "Select") {
            $("#division").css("border-color", "red");
            $('#divisionErr').text('Please Select Division ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#division").focus();
            return false;
        } else {
            $("#division").css("border-color", "");
            $("#divisionErr").text('');
            check = 1;
        }

        // District

        var str_district = $("#district").val();
        if (str_district == "Select") {
            $("#district").css("border-color", "red");
            $('#districtErr').text('Please Select District ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#district").focus();
            return false;
        } else {
            $("#district").css("border-color", "");
            $("#districtErr").text('');
        }

        // Tehsil

        var str_tehsil = $("#tehsil").val();
        if (str_tehsil == "Select") {
            $("#tehsil").css("border-color", "red");
            $('#tehsilErr').text('Please Select Tehsil ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#tehsil").focus();
            return false;
        } else {
            $("#tehsil").css("border-color", "");
            $("#tehsilErr").text('');
            check = 1;
        }


            // $('.current').removeClass('current').hide().next().show().addClass('current');
            // $('#progressbar li.active').next().addClass('active');
            $("#degreelevel").focus();

    });
    // nextQ
    $("#fs_Edu0").on('click', "#nextQI", function() {
        // Degree Level
        var str_degreelevel = $("#degreelevel").val();
        if (str_degreelevel == "Select") {
            $("#degreelevel").css("border-color", "red");
            $("#degreelevelErr").text('Please Enter Correct Degree ');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#degreelevel").focus();
            return false;
        } else {
            $("#degreelevel").css("border-color", "");
            $("#degreelevelErr").text('');
        }
        // specialization
        var str_majors = $("#majors").val();
        if (str_majors == "") {
            $("#majors").css("border-color", "red");
            $("#majorsErr").text('Please Enter Correct Subject');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#majors").focus();
            return false;
        } else {
            $("#majors").css("border-color", "");
        }
        // Passing year
        var date_passing = new Date($("#dob").val());
        var year_passing = date_passing.getFullYear();
        // var year_passing = '2015';
        var str_passing = $("#passing").val();

        if (str_passing == "" || str_passing == null) {
            $("#passing").css("border-color", "red");
            $("#passingErr").text('Please Enter Correct Date');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#passing").focus();
            return false;
        } else if (str_passing <= year_passing) {
            $("#passing").css("border-color", "red");
            $("#passingErr").text('Please Enter Correct Date');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#passing").focus();
            return false;
        } else {
            $("#passing").css("border-color", "");
            $("#passingErr").text('');
        }

        // degree Question
        if ($('input[name=radios]:checked').length <= 0) {
            $("#uniErr").text('Please Check Radio Button');

        }

        var radio_pak = $('input[name=radios]:checked').val();

        if (radio_pak == 'Pakistan') {
            // Pakistan Uni
            var str_pakistanUni = $("#pakistanUni").val();
            if (str_pakistanUni == "Select") {
                $("#pakistanUni").css("border-color", "red");
                $("#pakiUniErr").text('Please Enter University Name');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#pakistanUni").focus();
                return false;
            } else {
                $("#pakistanUni").css("border-color", "");
            }
        } else {

            // Abroad Country
            var str_country = $("#country").val();
            if (str_country == "") {
                $("#country").css("border-color", "red");
                $('#countryErr').text('Please Enter Country Name');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#country").focus();
                return false;
            } else {
                $("#country").css("border-color", "");
                $('#countryErr').text('');
            }

            // Abroad city
            var str_city = $("#city").val();
            if (str_city == "") {
                $("#city").css("border-color", "red");
                $('#cityErr').text('Please Enter City Name');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#city").focus();
                return false;
            } else {
                $("#city").css("border-color", "");
                $('#cityErr').text('');
            }

            // University
            var str_uni = $("#university").val();
            if (str_uni == "") {
                $("#university").css("border-color", "red");
                $('#universityErr').text('Please Enter University Name');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#university").focus();
                return false;
            } else {
                $("#university").css("border-color", "");
                $('#universityErr').text('');
            }
        }

        // Total Marks
        var str_maxno = $("#maxno").val();
        if (str_maxno == "" || /[a-z]/.test(str_maxno.toLowerCase())) {
            $("#maxno").css("border-color", "red");
            $('#maxnoErr').text('Please Enter Maximum Marks/Total CGPA');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#maxno").focus();
            return false;
        } else {
            $("#maxno").css("border-color", "");
            $('#maxnoErr').text('');
        }

        // Marks Obtained
        var str_obtno = $("#obtno").val();
        var maxno = $("#maxno").val();
        if (str_obtno == "" || /[a-z]/.test(str_obtno.toLowerCase())) {
            $("#obtno").css("border-color", "red");
            $('#obtnoErr').text('Please Enter Marks Obtained');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#obtno").focus();
            return false;
        } else if (str_obtno > maxno) {
            $("#obtno").css("border-color", "red");
            $('#obtnoErr').text('Please Enter Correct Marks');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#obtno").focus();
            return false;
        } else {
            $("#obtno").css("border-color", "");
            $('#obtnoErr').text('');
        }

        // degree Uploader
        var str_degreeUploader = $("#degreeUploader").val();
        if (str_degreeUploader == "") {
            $("#degreeUploader").css("border-color", "red");
            $('#degreeUploaderErr').text('Please Upload Degree');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#degreeUploader").focus();
            return false;
        } else {
            $("#degreeUploader").css("border-color", "");
            $('#degreeUploaderErr').text('');
        }

        // proff Question
        if ($('input[name=proff_q]:checked').length <= 0) {
            $("#proffErr").text('Please Check Radio Button');

        }

        var radio_proff = $('input[name=proff_q]:checked').val();
        if (radio_pak == "Yes") {
            // Teaching Degree
            var str_teachingdegree = $("#teachingdegree").val();
            if (str_teachingdegree == "Select") {
                $("#teachingdegree").css("border-color", "red");
                $('#teachingdegreeErr').text('Please Select Degree');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#teachingdegree").focus();
                return false;
            } else if (str_teachingdegree == "Other") {
                // other
                var str_otherdegree = $("#otherdegreeI").val();
                if (str_otherdegree == "") {
                    $("#otherdegreeI").css("border-color", "red");
                    $('#otherdegreeErr').text('Please Enter Degree Name');

                    $('.current').removeClass('current').hide().prev().show().addClass('current');
                    $('#progressbar li.active').removeClass('active').prev().addClass('active');
                    $("#otherdegreeI").focus();
                    return false;
                } else {
                    $("#otherdegreeI").css("border-color", "");
                    $('#otherdegreeErr').text('');
                }

            } else {
                $("#teachingdegree").css("border-color", "");
                $('#teachingdegreeErr').text('');
            }

            // passing year
            var str_passingyear = $("#passingyear").val();
            if (str_passingyear == "") {
                $("#passingyear").css("border-color", "red");
                $('#passingyearErr').text('Please Upload Degree');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#passingyear").focus();
                return false;
            } else {
                $("#passingyear").css("border-color", "");
                $('#passingyearErr').text('');
            }

            // awarding body 
            var str_awardingbody = $("#awardingbody").val();
            if (str_awardingbody == "") {
                $("#awardingbody").css("border-color", "red");
                $('#awardingbodyErrs').text('Please Enter Awarding Body');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#awardingbody").focus();
                return false;
            } else {
                $("#awardingbody").css("border-color", "");
                $('#awardingbodyErr').text('');
            }
        }

    });
    // nextEI
    $("#fs_EI").on('click', "#nextEI", function() {
        // job title
        var check = 0;
        // Employment Question 
        if ($('input[name=employmentradios]:checked').length <= 0) {

            $("#employmentErr").text('Please Check Radio Button');
        } else {
            $("#employmentErr").text('');
            check = 1;
        }

        var radio_emp = $('input[name=employmentradios]:checked').val();

        if (radio_emp == 'Employed?') {

            var str_designation = $("#designation").val();
            if (str_designation == "") {
                $("#designation").css("border-color", "red");
                $('#designationErr').text('Please Enter Job Designation');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#designation").focus();
                return false;
            } else {
                $("#designation").css("border-color", "");
                $('#designationErr').text('');
                check = 1;
            }


            // description

            var str_description = $("#description").val();
            if (str_description == "") {
                $("#description").css("border-color", "red");
                $('#descriptionErr').text('Please Enter Job Description');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#description").focus();
                return false;
            } else {
                $("#description").css("border-color", "");
                $('#descriptionErr').text('');
            }


            // Campany Name

            var str_companyName = $("#companyName").val();
            if (str_companyName == "") {
                $("#companyName").css("border-color", "red");
                $('#companyNameErr').text('Please Enter Company Name');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#companyName").focus();
                return false;
            } else {
                $("#companyName").css("border-color", "");
                $('#companyNameErr').text('');
            }

            var str_jobprovince = $("#jobprovince").val();
            if (str_jobprovince == "Select") {
                $("#jobprovince").css("border-color", "red");
                $('#jobprovinceErr').text('Please Enter Province');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#jobprovince").focus();
                return false;
            } else {
                $("#jobprovince").css("border-color", "");
                $('#jobprovinceErr').text('');
            }

            // JobDivision

            var str_jobdivision = $("#jobdivision").val();
            if (str_jobdivision == "Select") {
                $("#jobdivision").css("border-color", "red");
                $('#jobdivisionErr').text('Please Enter Division');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#jobdivision").focus();
                return false;
            } else {
                $("#jobdivision").css("border-color", "");
                $('#jobdivisionErr').text('');
            }

            // JobDistrict

            var str_jobdistrict = $("#jobdistrict").val();
            if (str_jobdistrict == "Select") {
                $("#jobdistrict").css("border-color", "red");
                $('#jobdistrictErr').text('Please Enter District');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#jobdistrict").focus();
                return false;
            } else {
                $("#jobdistrict").css("border-color", "");
                $('#jobdistrictErr').text('');
            }

            // JobTehsil

            var str_jobtehsil = $("#jobtehsil").val();
            if (str_jobtehsil == "Select") {
                $("#jobtehsil").css("border-color", "red");
                $('#jobtehsilErr').text('Please Enter Tehsil');

                $('.current').removeClass('current').hide().prev().show().addClass('current');
                $('#progressbar li.active').removeClass('active').prev().addClass('active');
                $("#jobtehsil").focus();
                return false;
            } else {
                $("#jobtehsil").css("border-color", "");
                $('#jobtehsilErr').text('');
            }
        }

        // level of invigilating

        // var str_level = $("#invig_tableData").val();
        // if (str_level == "") {
        //     $("#invig_level").css("border-color", "red");
        //     $('#invig_levelErr').text('Please Enter Level of Invigilating');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#invig_level").focus();
        //     return false;
        // } else {
        //     $("#invig_level").css("border-color", "");
        //     $('#invig_levelErr').text('');
        // }

        // // invigilating date from


        // var invigilating_dob = new Date($("#dob").val());
        // var year_invigilating = invigilating_dob.getFullYear();

        // var str_invigilating_date_from = $("#invigilating_date_from").val();

        // if (str_invigilating_date_from == "") {
        //     $("#invigilating_date_from").css("border-color", "red");
        //     $('#invigilating_date_fromErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#invigilating_date_from").focus();
        //     return false;
        // } else if (str_invigilating_date_from <= year_invigilating) {
        //     $("#invigilating_date_from").css("border-color", "red");
        //     $('#invigilating_date_fromErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#invigilating_date_from").focus();
        //     return false;
        // } else {
        //     $("#invigilating_date_from").css("border-color", "");
        //     $('#invigilating_date_fromErr').text('');
        // }

        // // invigilating experiance date_to


        // var invigilating_date = new Date($("#invigilating_date_from").val());
        // var invigilating_year = invigilating_date.getFullYear();

        // var str_invigilating_date_to = $("#invigilating_date_to").val();

        // if (str_invigilating_date_to == "") {
        //     $("#invigilating_date_to").css("border-color", "red");
        //     $('#invigilating_date_toErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#invigilating_date_to").focus();
        //     return false;
        // } else if (str_invigilating_date_to <= invigilating_year) {
        //     $("#invigilating_date_to").css("border-color", "red");
        //     $('#invigilating_date_toErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#invigilating_date_to").focus();
        //     return false;
        // } else {
        //     $("#invigilating_date_to").css("border-color", "");
        //     $('#invigilating_date_toErr').text('');
        // }

        // // Level of Teaching
        // var str_teaching_level = $("#level").val();
        // if (str_teaching_level == "Select") {
        //     $("#level").css("border-color", "red");
        //     $('#levelErr').text('Please Enter Level of Teaching');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#level").focus();
        //     return false;
        // } else {
        //     $("#level").css("border-color", "");
        //     $('#levelErr').text('');
        // }


        // //Teaching Subject of Interest

        // var str_interest = $("#interest").val();
        // if (str_interest == "") {
        //     $("#interest").css("border-color", "red");
        //     $('#interestErr').text('Please Enter Interested Subject of Teaching');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#interest").focus();
        //     return false;
        // } else {
        //     $("#interest").css("border-color", "");
        //     $('#interestErr').text('');
        // }

        // // teaching experiance date from


        // var date_dob = new Date($("#dob").val());
        // var year_DOB = date_dob.getFullYear();

        // var str_date_from = $("#date_from").val();

        // if (str_date_from == "") {
        //     $("#date_from").css("border-color", "red");
        //     $('#date_fromErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#date_from").focus();
        //     return false;
        // } else if (str_date_from <= year_DOB) {
        //     $("#date_from").css("border-color", "red");
        //     $('#date_fromErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#date_from").focus();
        //     return false;
        // } else {
        //     $("#date_from").css("border-color", "");
        //     $('#date_fromErr').text('');
        // }

        // // teaching experiance date to


        // var datefrom = new Date($("#date_from").val());
        // var year_from = datefrom.getFullYear();

        // var str_date_to = $("#date_to").val();

        // if (str_date_to == "") {
        //     $("#date_to").css("border-color", "red");
        //     $('#date_toErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#date_to").focus();
        //     return false;
        // } else if (str_date_to <= year_from) {
        //     $("#date_to").css("border-color", "red");
        //     $('#date_toErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#date_to").focus();
        //     return false;
        // } else {
        //     $("#date_to").css("border-color", "");
        //     $('#date_toErr').text('');
        // }

        // // marking level
        // var str_checking_level = $("#checking_level").val();
        // if (str_checking_level == "Select") {
        //     $("#checking_level").css("border-color", "red");
        //     $('#checking_levelErr').text('Please Enter Level of Marking');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#checking_level").focus();
        //     return false;
        // } else {
        //     $("#checking_level").css("border-color", "");
        //     $('#checking_levelErr').text('');
        // }

        // // marking experiance date from


        // var checking_dob = new Date($("#dob").val());
        // var year_dob = checking_dob.getFullYear();

        // var str_checking_date_from = $("#checking_date_from").val();

        // if (str_checking_date_from == "") {
        //     $("#checking_date_from").css("border-color", "red");
        //     $('#checking_date_fromErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#checking_date_from").focus();
        //     return false;
        // } else if (str_checking_date_from <= year_dob) {
        //     $("#checking_date_from").css("border-color", "red");
        //     $('#checking_date_fromErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#checking_date_from").focus();
        //     return false;
        // } else {
        //     $("#checking_date_from").css("border-color", "");
        //     $('#checking_date_fromErr').text('');
        // }

        // // marking experiance date_to


        // var checking_date = new Date($("#checking_date_from").val());
        // var checking_year = checking_date.getFullYear();

        // var str_checking_date_to = $("#checking_date_to").val();

        // if (str_checking_date_to == "") {
        //     $("#checking_date_to").css("border-color", "red");
        //     $('#checking_date_toErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#checking_date_to").focus();
        //     return false;
        // } else if (str_checking_date_to <= checking_year) {
        //     $("#checking_date_to").css("border-color", "red");
        //     $('#checking_date_toErr').text('Please Enter Correct Date');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#checking_date_to").focus();
        //     return false;
        // } else {
        //     $("#checking_date_to").css("border-color", "");
        //     $('#checking_date_toErr').text('');
        // }

        // // marking subject interest
        // var str_marking_subject_interest = $("#interest_merking_subject").val();

        // if (str_marking_subject_interest == "") {
        //     $("#interest_merking_subject").css("border-color", "red");
        //     $('#interest_merking_subjectErr').text('Please Enter Subject');

        //     $('.current').removeClass('current').hide().prev().show().addClass('current');
        //     $('#progressbar li.active').removeClass('active').prev().addClass('active');
        //     $("#interest_merking_subject").focus();
        //     return false;
        // } else {
        //     $("#interest_merking_subject").css("border-color", "");
        //     $('#interest_merking_subjectErr').text('');
        // }

        // alert("working");
        // $("#submit").show();

    });

    // questions
    $("#fs_q").on('click', "#nextQ", function() {
        // alert('working??');
        //comp_know
        var check = 0;
        var str_comp_know = $("#comp_know").val();
        if (str_comp_know == "") {
            $("#comp_know").css("border-color", "red");
            $('#comp_knowErr').text('Please select one option');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#comp_know").focus();
            return false;

        } else {
            $("#comp_know").css("border-color", "");
            $('#comp_knowErr').text('');
            check = 1;
        }

        // net_access
        var strnet_access = $("#net_access").val();

        if (strnet_access == "") {

            $("#net_access").css("border-color", "red");
            $('#net_accessErr').text('Please select one option');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#net_access").focus();
            return false;
        } else {
            $("#net_access").css("border-color", "");
            $("#net_accessErr").text('');
        }


        // home_comp

        var str_home_comp = $("#home_comp").val();
        if (str_home_comp == "") {
            $("#home_comp").css("border-color", "red");
            $('#home_compErr').text('Please select one option');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#home_comp").focus();
            return false;
            check = 1;
        } else {
            $("#home_comp").css("border-color", "");
            $("#home_compErr").text('');
        }



        // jobTitle

        var strjobTitle = $("#jobTitle").val();
        if (strjobTitle == "") {
            $("#jobTitle").css("border-color", "red");
            $('#jobTitleErr').text('Please select job title');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#jobTitle").focus();
            return false;
        } else {
            $("#jobTitle").css("border-color", "");
            $("#jobTitleErr").text('');
            check = 1;

        }

        // sindhi_reading
        var str_sindhi_reading = $("#sindhi_reading").val();
        if (str_sindhi_reading == "") {
            $("#sindhi_reading").css("border-color", "red");
            $('#sindhi_readingErr').text('Please select one option');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#sindhi_reading").focus();
            return false;
        } else {
            $("#sindhi_reading").css("border-color", "");
            $("#sindhi_readingErr").text('');
            check = 1;
        }

        // sindhi_writing
        var str_sindhi_writing = $("#sindhi_writing").val();
        if (str_sindhi_writing == "") {
            $("#sindhi_writing").css("border-color", "red");
            $('#sindhi_writingErr').text('Please select one option');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#sindhi_writing").focus();
            return false;
        } else {
            $("#sindhi_writing").css("border-color", "");
            $("#sindhi_writingErr").text('');
            check = 1;
        }

        // sindhi_speaking
        var str_sindhi_speaking = $("#sindhi_speaking").val();
        if (str_sindhi_speaking == "") {
            $("#sindhi_speaking").css("border-color", "red");
            $('#sindhi_speakingErr').text('Please select one option');

            $('.current').removeClass('current').hide().prev().show().addClass('current');
            $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#sindhi_speaking").focus();
            return false;
        } else {
            $("#sindhi_speaking").css("border-color", "");
            $("#sindhi_speakingErr").text('');
            check = 1;
        }

    });

    // computer Knowledge
    $("#submit").on('click', function() {
        // alert('working??');
        var str_compKnow = $("#comp_know").val();
        if (str_compKnow == "Select") {
            $("#comp_know").css("border-color", "red");
            $('#comp_knowErr').text('Please Select Yes/No');

            // $('.current').removeClass('current').hide().prev().show().addClass('current');
            // $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#comp_know").focus();
            return false;
        } else {
            $("#comp_know").css("border-color", "");
            $('#comp_knowErr').text('');
        }

        // Internet Access

        var str_netaccess = $("#net_access").val();
        if (str_netaccess == "Select") {
            $("#net_access").css("border-color", "red");
            $('#net_accessErr').text('Please Select Yes/No');

            // $('.current').removeClass('current').hide().prev().show().addClass('current');
            // $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#net_access").focus();
            return false;
        } else {
            $("#net_access").css("border-color", "");
            $('#net_accessErr').text('');
        }

        // comp_access
        var str_home_comp = $("#home_comp").val();
        if (str_home_comp == "Select") {
            $("#home_comp").css("border-color", "red");
            $('#home_compErr').text('Please Select Yes/No');

            // $('.current').removeClass('current').hide().prev().show().addClass('current');
            // $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#home_comp").focus();
            return false;
        } else {
            $("#home_comp").css("border-color", "");
            $('#home_compErr').text('');
        }

        // comp_access
        var jobTitle = $("#jobTitle").val();
        if (jobTitle == "Select") {
            $("#jobTitle").css("border-color", "red");
            $('#jobTitleErr').text('Please Select Job Title');

            // $('.current').removeClass('current').hide().prev().show().addClass('current');
            // $('#progressbar li.active').removeClass('active').prev().addClass('active');
            $("#jobTitle").focus();
            return false;
        } else {
            $("#jobTitle").css("border-color", "");
            $('#jobTitleErr').text('');
        }
    });
});