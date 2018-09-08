        <fieldset class="field1 current" id="fs_PI">
          <legend>Personal Info</legend>
        <br>
        <!-- Picture Uploader -->
        <div class="form-group row">
            <label class="col-md control-label" for="picture">Picture</label>
            <div class="col-md">
                <div class="row">
                    <!-- <img src="assets/img/noImage.jpg" alt="No Image Uploaded" id="picture" height="100"> -->
                <!-- <input id="picUploader" name="picUploader" class="input-file" type="file" accept="image/*"> -->
                <br>
                        <label for="picUploader" class="col-md control-label label-md">

                            <img id="image-preview" src="assets/img/picuploader.jpg" alt="your image" height="200"/>
                        </label>
                        
                        <input id="picUploader" name="picUploader" type="file" accept="image/*" style="display: none;" placeholder="Upload Picture"/>
                    <!-- <label class="custom-file-label col-md-6" for="picUploader" style="top: 5px;" id="picPath">Choose file</label> -->
                    <label class="control-label col-md err" id="picUploaderErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>
        </div>
        <br>
        <!-- Name -->
            
        <div class="from-group row">
            <label class="col-md control-label label-md" for="personalname">Name<span>(In Block Letters)</span></label>
            <div class="col-md" id="personalname">
                
                <div class="row">
                <input id="firstName" type="text" name="firstName" placeholder="First" class="form-control input-md col-md" required onkeyup="myFunction()" onkeypress="return onlyAlphabets(event,this);" autocomplete autofocus>
                <label class="col-md control-label" id="firstNameErr" name="firstNameErr" style="color: red; font-weight: bold;"></label>
            </div>
            <div class="row">
                    <input id="middleName" type="text" name="middleName" placeholder="Middle" class="form-control input-md col-md" onkeyup="myFunction()" onkeypress="return onlyAlphabets(event,this);"><label class=" control-label col-md" id="middleNameErr" name="middleNameErr"  style="
                    color: red;font-weight: bold;" ></label>
                    
            </div>

                <div class="row">
                    <input id="lastName" type="text" name="lastName" placeholder="Last" class="form-control input-md col-md" required onkeyup="myFunction()" onkeypress="return onlyAlphabets(event,this);">
                <label class="col-md control-label" id="lastNameErr" name="lastNameErr" style="
                color: red; font-weight: bold;"></label>
                </div>
            </div>
            
            

        </div>
        <br>
        <!-- Title -->
        <div class="from-group row">
            <label class="col-md control-label" for="title">Title</label>
           
                
            <div class="col-md">
                <div class="row">
                <select id="title" class="form-control col-md" name="title" required>
                    <option value="" selected>Select</option>
                    <option>Mr.</option>
                    <option>Mrs.</option>
                    <option>Ms.</option>
                    <option>Dr.</option>
                    <option>Engr.</option>
                </select>
                <label class="col-md control-label" id="titleErr" name="titleErr" style="color: red;
                 font-weight: bold;"></label>
            </div>
            </div>
            
            
        </div>
        <br>
        <!-- Gender -->
        <div class="from-group row">
            <label class="col-md control-label" for="gender">Gender</label>
            <div class="col-md">
                <div class="row">
                    <select id="gender" class="form-control col-md" name="gender" required>
                    <option value="" selected>Select</option>    
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <label class="col-md control-label" id="genderErr" name="genderErr" style="color: red; font-weight: bold;"></label>
                    
                </div>
            </div>
            
        </div>
        <br>
        <!-- Fther/Husband Name -->
        <div class="from-group row">
            <label class="col-md control-label" for="f_hname">Father's/Husband's Name</label>
            <div class="col-md" id="f_hname">
                <div class="row">
                    <input id="f_hfirstName" type="text" name="f_hfirstName" placeholder="First" class="form-control input-md col-md" required onkeyup="myFunction()" onkeypress="return onlyAlphabets(event,this);">
                    <label class="col-md control-label" id="f_hfirstNameErr" name="f_hfirstNameErr" style="color: red; font-weight: bold;"></label>
                </div>

                <div class="row">
                    <input id="f_hmiddleName" type="text" name="f_hmiddleName" placeholder="Middle" class="form-control input-md col-md" onkeyup="myFunction()" onkeypress="return onlyAlphabets(event,this);">
                    <label class="col-md control-label" id="f_hmiddleNameErr" name="f_hmiddleNameErr" style="color: red; font-weight: bold;"></label>
                </div>

                <div class="row">
                    <input id="f_hlastName" type="text" name="f_hlastName" placeholder="Last" class="form-control input-md col-md" required onkeyup="myFunction()" onkeypress="return onlyAlphabets(event,this);">
                    <label class="col-md control-label" id="f_hlastNameErr" name="f_hlastNameErr" style="color: red; font-weight: bold;"></label>
                </div>
                
                
                
            </div>
            
            
            

        </div>
        <br>
        <!-- CNIC -->
        <div class="form-group row">
            <label class="col-md control-label" for="cnic">CNIC</label>
            <div class="col-md">
                <div class="row">
                    <input id="cnic" name="cnic" type="text" placeholder="CNIC" class="form-control input-md col-md bfh-phone" data-format="ddddd-ddddddd-d" value="ddddd-ddddddd-d" required>
                <label class="col-md control-label" id="cnicErr" name="cnicErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>
            
        </div>
        <br>
        <!-- Date Of Birth -->
        <div class="form-group row">
            <label class="col-md control-label" for="dob">Date Of Birth</label>
            <div class="col-md">
                <div class="row">
                    <input id="dob" name="dob" type="text" class="form-control col-md input-md" required onkeypress="return false" style="" placeholder="Select Date of Birth">
                <label class="col-md control-label" id="dobErr" name="dobErr" style="color: red; font-weight: bold;"></label>
                
                  
                </div>
                
                
            </div>            
        </div>

        <!-- Nationality -->
        <div class="from-group row">
            <label class="col-md control-label" for="nationality">Nationality</label>
           
                
            <div class="col-md">
                <div class="row">
                <select id="nationality" class="form-control col-md input-md" name="nationality" required>
                    <option value="" selected>Select</option>    
                    <option>Pakistani</option>
                    <option>Foreign</option>
                </select>
                <label class="col-md control-label" style="color: red;
                 font-weight: bold;"></label>
            </div>
            </div>
            
            
        </div>
        <br>

        <!-- Religion -->
        <div class="from-group row">
            <label class="col-md control-label" for="religion">Religion</label>
           
                
            <div class="col-md">
                <div class="row">
                <select id="religion" class="form-control col-md input-md" name="religion" required>
                    <option value="" selected>Select</option>    
                    <option>Muslim</option>
                    <option>Non-Muslim</option>
                    
                </select>
                <label class="col-md control-label" style="color: red;
                 font-weight: bold;"></label>
            </div>

                <br>
                <!-- <a class="previous btn btn-outline-dark" type="button">Back</a> -->
                <a class="hoverwhite next btn btn-outline-dark" id="nextPI">Next</a>
                        
                <!-- <button class="next btn btn-outline-dark" id="nextPI" type="button" name="nextPI">Next</button> -->

            </div>
            
            
        </div>
        <br>
            



    </fieldset>