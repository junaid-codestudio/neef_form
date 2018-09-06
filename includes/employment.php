 <fieldset class="field4" id="fs_EI">
            <!-- Current Job -->
        <legend>Current Job</legend>
        <!-- employment question -->
        <div class="form-group row">
            <label class="col-md control-label" for="jobquestion">Are you Currently Working?</label>
            <div class="col-md">
                <div class="row">
                    <label class="radio-inline" for="radios-0">
                    <input class="col-md" id="employed" type="radio" name="employmentradios" value="Employed" required="">
                    <label class="col-md" for="employed">Employed?</label>
                </label>
                <label class="radio-inline" for="radios-1">
                    <input class="col-md" id="unemployed" type="radio" name="employmentradios" value="UnEmployed" required="">
                    <label class="col-md" for="unemployed">Unemployed?</label>
                </label>
                <label class="col-md control-label" id="employmentErr" name="employmentErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>
        </div>
        <!-- Job Info -->
        
        <section id="employedinfo">
            <!-- Job Designation -->
            <div class="form-group row">
                <label class="col-md control-label" for="designation">Job Designation</label>
                <div class="col-md">
                    <div class="row">
                        <input class="form-control input-md col-md" type="text" id="designation" name="designation" placeholder="Designation">
                    <label class="col-md control-label" id="designationErr" name="designationErr" style="color: red; font-weight: bold;"></label>
                    </div>
                </div>
                
            </div>
            <!-- Job Description -->
            <div class="form-group row">
                <label class="col-md control-label" for="description">Job Description</label>
                <div class="col-md">
                    <div class="row">
                        <input class="form-control input-md col-md" type="text" id="description" name="description" placeholder="Description">
                    <label class="col-md control-label" id="descriptionErr" name="descriptionErr" style="color: red; font-weight: bold;"></label>
                    </div>    
                </div>
                
            </div>
            <!-- Company Name -->
            <div class="form-group row">
                <label class="col-md control-label" for="companyName">Company Name</label>
                <div class="col-md">
                    <div class="row">
                        <input class="form-control input-md col-md" type="text" id="companyName" name="companyName" placeholder="Company Name">
                    <label class="col-md control-label" id="companyNameErr" name="companyNameErr" style="color: red; font-weight: bold;"></label>
                    </div>
                </div>
                
            </div>
            <!-- Job Address -->
            <?php require_once 'includes/joblocation.php'; ?>
            <br>
            <div class="form-group row">
                <label class="col-md control-label" for="jobaddress">Company's Address</label>
                <div class="col-md">
                    <div class="row">
                        <textarea class="form-control input-md col-md" id="jobaddress" name="jobaddress" placeholder="Address"></textarea>
                        <label class="col-md"  ></label>
                    </div>
                </div>
            </div>
            <!-- job related to teaching -->
            <div class="form-group row">
                <label class="col-md control-label" for="relateteaching">Is It Directly Related to Teaching?</label>
                <div class="col-md">
                    <div class="row">
                        <select class="col-md form-control" id="teachingjob" name="teachingjob">
                        <option value="" selected>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <label class="col-md control-label" id="teachingjobErr" name="teachingjobErr" style="color: red; font-weight: bold;"></label>
                    </div>
                </div>
            </div>
            <!-- job related to marking -->
            <div class="form-group row">
                <label class="col-md control-label" for="relatemarking">Is It Directly Related to Marking?</label>
                <div class="col-md">
                    <div class="row">
                        <select class="col-md form-control" id="markingjob" name="markingjob">
                        <option value="" selected>Select</option>    
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <label class="col-md control-label" id="markingjobErr" name="markingjobErr" style="color: red; font-weight: bold;"></label>
                    </div>
                </div>
            </div>
            <!-- job related to invigilating -->
            <div class="form-group row">
                <label class="col-md control-label" for="relateinvigilating">Is It Directly Related to Invigilating or
                    <br>exam Supervision Marking ?</label>
                    <div class="col-md">
                        <div class="row">
                            <select class="col-md form-control" id="invigilatingjob" name="invigilatingjob">
                            <option value="" selected>Select</option>    
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label class="col-md control-label" id="invigilatingjobErr" name="invigilatingjobErr" style="color: red; font-weight: bold;"></label>
                        </div>
                    </div>
                </div>
                <!-- Is it Gov -->
                <div class="form-group row">
                    <label class="col-md control-label" for="govjob">Is It Government?</label>
                    <div class="col-md">
                        <div class="row">
                            <select class="col-md form-control" id="govjob" name="govjob">
                            <option value="" selected>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label class="col-md control-label" id="govjobErr" name="govjobErr" style="color: red; font-weight: bold;"></label>
                        </div>
                    </div>
                </div>
                <!-- working since -->
                <div class="form-group row">
                    <label class="col-md control-label" for="workingsince">Working Since?</label>
                    <div class="col-md">
                        <div class="row">
                            <input class="col-md form-control input-md" type="text" name="workingsince" id="workingsince">
                            <label class="col-md"></label>
                        </div>

                    </div>
                </div>
                
            </section>
                        
            
            
            
        <hr>
            <br>
            <!-- Invigilation Experiance -->
            <?php require_once 'sections/invigilatingExperience.php'; ?>
            <!-- Teaching Experiance -->
            <?php require_once 'sections/teachingExperience.php'; ?>
            
            <!-- subject of Interest -->
            <?php require_once 'sections/te_subjectofinterest.php'; ?>
            <hr>
            <!-- Marking Experiance -->
            <?php require_once 'sections/markingexperience.php'; ?>
            <!-- marking Interest -->
            <?php require_once 'sections/markinginterestsubject.php'; ?>
            
            <div class="form-group row">
                <label class="control-label col-md"></label>
                <div class="col-md">
                    <div class="row"></div>
                  <br> 
                  <a class="hoverwhite previous btn btn-outline-dark" id="prevEI">Back</a>
                <a class="hoverwhite next btn btn-outline-dark" id="nextEI">Next</a> 
                  <!-- <button type="button" class="previous btn btn-outline-dark">Back</button>
                  <button type="button" class="next btn btn-outline-dark" id="nextEI">Next</button> -->  
                    
                </div>
            </div>
            
            </fieldset>