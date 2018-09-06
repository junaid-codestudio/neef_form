<?php 

include 'creds.php';

// Create connection
$connU = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$connU) {
    $err = mysqli_connect_error();
    echo "
    <script type=\"text/javascript\">
    alert('$err');
    </script>
    ";
    die("Connection failed: " . $err);
} else{

    // echo "
    // <script type=\"text/javascript\">
    // alert('mysqli_connect_error()');
    // </script>
    // ";
} ?>

<fieldset class="field3" id="fs_Edu0">
    <legend>Highest Academic Qualification</legend>
    <br>
    <!-- Degree Level -->
    <div class="from-group row">
        <label class="col-md control-label" for="degreelevel">Degree Level</label>
        <div class="col-md">
            <div class="row">
                <select id="degreelevel" class="form-control col-md" name="degreelevel" required>
                    <option selected="">Select</option>
                    <option value="PhD">PhD</option>
                    <option value="MS or MPhil">MS or MPhil</option>
                    <option value="Masters">Masters</option>
                    <option value="Bachelors 2 years">Bachelors 2 years</option>
                    <option value="Bachelors 3 years">Bachelors 3 years</option>
                    <option value="Bachelors 4 years">Bachelors 4 years</option>
                    <option value="PhD">PhD</option>
                </select>
                <label class="col-md control-label" id="degreelevelErr" name="degreelevelErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <!-- Specialization -->
    <div class="from-group row">
        <label class="col-md control-label" for="majors">Specialization</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md" id="majors" type="text" name="majors" placeholder="Majors" required>
                <label class="col-md control-label" id="majorsErr" name="majorsErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <!-- Year of Passing -->
    <div class="from-group row">
        <label class="col-md control-label" for="passing">Year of Passing</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md data-format" id="passing" type="text" name="passing" placeholder="Year of Passing" required="" onkeypress="return false">
                <label class="col-md control-label" id="passingErr" name="passingErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <br>
    <!-- Degree from pak or abroad -->
    <div class="form-group row">
        <label class="col-md control-label" for="Universities">Degree done from Pakistan or Abraod</label>
        <div class="col-md" id="Universities">
            <div class="row">
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="radios" id="pakistan" value="Pakistan">
                    <label class="col-md" for="pakistan">Pakistan</label>
                </label>
                <label class="radio-inline" for="radios-1">
                    <input type="radio" name="radios" id="abroad" value="Abroad">
                    <label class="col-md" for="abroad">Abroad</label>
                </label>
                <label class="control-label col-md" id="uniErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <br>
    <!-- Pakistani Universities -->
    <section id="pakiUni">
        <div class="form-group row">
            <label class="col-md control-label" for="pakistanUni">Uninersities</label>
            <div class="col-md">
                <div class="row">
                    <select class="form-control col-md selectpicker" name="pakistanUni" id="pakistanUni" data-live-search="true">
                        <option value="N/A" selected="">Select</option>
                        <?php 
                        $sqlu = "SELECT * FROM `tbl_universities`";
                        // echo "
                        // <script type=\"text/javascript\">
                        // alert('$resultu');
                        // </script>
                        // ";
                        $resultu = $connU->query($sqlu);
                        if ($resultu->num_rows > 0) {
                                  // output data of each row
                          while($rowu = $resultu->fetch_assoc()) {
                              echo "Province: " . $rowu["University"]. "<br>";
                              ?>
                              <option value="<?= $rowu["University"] ?>">
                                <?= $rowu["University"]?>
                            </option>
                            <?php 
                        }
                    } else { ?>
                        <?php 
                        echo "0 results";
                    }
                    $connU->close(); 
                    ?>
                </select>
                <label class="col-md control-label" id="pakistanUniErr" name="pakistanUniErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
</section>
<!-- Abroad Universities -->
<section id="abroadUni">
    <div class="form-group row">
        <label class="col-md control-label" for="country">Country</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md" name="country" placeholder="Country"></input>
                <label class="col-md control-label" id="countryErr" name="countryErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md control-label" for="city">City</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md" name="city" placeholder="City"></input>
                <label class="col-md control-label" id="cityErr" name="cityErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md control-label" for="university">University</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md" name="university" placeholder="universiry"></input>
                <label class="col-md control-label" id="universityErr" name="universityErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
</section>
<!-- Max Nmbrs -->
<div class="form-group row">
    <label class="col-md control-label" for="maxno">Total Marks/ Maximum CGPA</label>
    <div class="col-md">
        <div class="row">
            <input type="text" name="maxno" id="maxno" class="col-md form-control input-md" placeholder="Total Marks/ Max. CGPA" required>
            <label class="col-md control-label" id="maxnoErr" name="maxnoErr" style="color: red; font-weight: bold;"></label>
        </div>
    </div>
</div>
<br>
<!-- Marks Obtain -->
<div class="form-group row">
    <label class="col-md control-label" for="marksObtain">Obtained Marks/ Maximum CGPA</label>
    <div class="col-md">
        <div class="row">
            <input type="text" name="marksObtain" id="obtno" class="col-md form-control input-md" placeholder="Marks Obtained/Obtained CGPA" required>
            <label class="col-md control-label" id="obtnoErr" name="obtnoErr" style="color: red; font-weight: bold;"></label>
        </div>
    </div>
</div>
<br>
<!-- Degree uploader -->
<div class="form-group row">
    <label class="col-md control-label" for="degreeUploader">Degree Upload</label>
    <div class="col-md">
        <div class="row">
            <input id="degreeUploader" name="degreeUploader" class="col-md input-file" type="file" accept="image/*">
            <label class="col-md control-label" id="degreeUploaderErr" name="degreeUploaderErr" style="color: red; font-weight: bold;"></label>
        </div>
    </div>
</div>
<!-- Professional Qualification -->
<legend>Professional Qualification</legend>
<br>
<!-- Degree from pak or abroad -->
<div class="form-group row">
    <label class="col-md control-label" for="proff_q">Do you have Profrssional Qualification</label>
    <div class="col-md" id="proff_q">
        <div class="row">
            <label class="radio-inline" for="Yes">
                <input type="radio" name="proff_q" id="yes" value="Yes">
                <label class="col-md">Yes</label>
            </label>
            <label class="radio-inline" for="no">
                <input type="radio" name="proff_q" id="no" value="No">
                <label class="col-md">No</label>
            </label>
            <label class="control-label col-md" id="proffErr" style="color: red; font-weight: bold;"></label>
        </div>
    </div>
</div>
<br>
<!-- title of Qualification -->
<section id="proff_degree">
    <div class="form-group row">
        <label class=" col-md control-label" for="teachingdegree">Title Of Degree</label>
        <div class="col-md">
            <div class="row">
                <select class="form-control col-md" name="teachingdegree" id="teachingdegree" onchange="otherdeg();">
                    <option selected value="">Select</option>
                    <option value="M.Ed">M.Ed</option>
                    <option value="B.Ed">B.Ed</option>
                    <option value="CT">CT</option>
                    <option value="Other">Other</option>
                </select>
                <label class="col-md control-label" id="teachingdegreeErr" name="teachingdegreeErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <!-- other -->
    <section id="otherdegree">
        <div class="form-group row">
            <label class="col-md control-label" for="otherdegreeI">Degree Name</label>
            <div class="col-md">
                <div class="row">
                    <input class="form-control input-md col-md" type="text" name="otherdegree" id="otherdegreeI">
                    <label class="col-md control-label" id="otherdegreeErr" name="otherdegreeErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>
        </div>
    </section>
    <!-- year of award -->
    <div class="form-group row">
        <label class="col-md control-label" for="passingyear">Year of Passing</label>
        <div class="col-md">
            <div class="row">
                <input class="form-control input-md col-md" id="passingyear" type="text" name="passingyear" onkeypress="return false">
                <label class="col-md control-label" id="passingyearErr" name="passingyearErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
    <!-- awarding Body -->
    <div class="form-group row">
        <label class="col-md control-label" for="awardingbody">Board/University</label>
        <div class="col-md">
            <div class="row">
                <input class="col-md form-control input-md" id="awardingbody" type="text" name="awardingbody">
                <label class="col-md control-label" id="awardingbodyErr" name="awardingbodyErr" style="color: red; font-weight: bold;"></label>
            </div>
        </div>
    </div>
</section>
<div class="form-group row">
    <label class="col-md control-label" for="awardingbody"></label>
    <div class="col-md">
        <div class="row">
        </div>
        <br>
        <!-- <button type="button" class="previous btn btn-outline-dark">Back</button> -->
        <a class="hoverwhite previous btn btn-outline-dark" id="prevQ">Back</a>
        <a class="hoverwhite next btn btn-outline-dark" id="nextQI">Next</a>
        <!-- <button type="button" class="next btn btn-outline-dark" id="nextQI">Next -->
        </button>
    </div>
</div>
</fieldset>