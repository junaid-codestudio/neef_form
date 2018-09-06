<fieldset class="field2" id="fs_CI">
        <!-- Contact Information -->
        <legend>Contact Details</legend>
        <br>
        <!-- Email -->
        <div class="from-group row">
            <label class="col-md control-label" for="email">E-Mail</label>
            <div class="col-md">
                <div class="row">
                    <input id="email" type="text" name="email" placeholder="E-Mail" class="form-control input-md col-md">
                <label class="col-md control-label" id="emailErr" name="emailErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>
            
        </div>
        <br>
        <!-- Mobile Number -->
        <div class="form-group row">
            <label class="col-md control-label" for="mobno">Mobile Number</label>
            <div class="col-md">
                <div class="row">
                    <input id="mobno" name="mobno" type="text" placeholder="Mobile Number" class="form-control input-md col-md input-medium bfh-phone" data-format="+92 (ddd) ddd-dddd" value="">
                <label class="col-md control-label" id="mobnoErr" name="mobnoErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>
            
        </div>
        <br>
        <!-- Lind line -->
        <div class="form-group row">
            <label class="col-md control-label" for="mobno">LandLine Number</label>
            <div class="col-md">
                <div class="row">
                    <input id="ptcl" name="ptcl" type="text" placeholder="LandLine Number" class="form-control input-md col-md input-medium bfh-phone" data-format="+92 (dd) ddd-dddd" value="">
                <label class="col-md control-label" id="ptclErr" name="ptclErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>

        </div>
        <br>
        <!-- Emargency Number -->
        <div class="form-group row">
            <label class="col-md control-label" for="mobno">Emergancy Mobile Number</label>
            <div class="col-md">
                <div class="row">
                    <input id="emrgncyNo" name="emrgncyNo" type="text" placeholder="Emergancy Number" class="form-control col-md input-md input-medium bfh-phone" data-format="+92 (ddd) ddd-dddd" value="" >
                <label class="col-md control-label" id="emrgncyNoErr" name="emrgncyNoErr" style="color: red; font-weight: bold;"></label>
                </div>
            </div>
            
        </div>
        <br>
        <!-- Postal Address -->
        <?php require_once 'includes/location.php'; ?>
        <br>
        <!-- Street Address -->
        <div class="from-group row">
            <label class="col-md control-label" for="staddress">Street Address</label>
            <div class="col-md">
                <div class="row">
                    <input id="staddress" type="text" name="staddress" placeholder="Street Address" class="form-control input-md col-md" >
                <label class="col-md control-label" id="staddressErr" name="staddressErr" style="color: red; font-weight: bold;"></label>
                </div>
                <br>
                <a class="hoverwhite previous btn btn-outline-dark" id="backCI">Back</a>
                <a class="hoverwhite next btn btn-outline-dark" id="nextCI">Next</a>
                <!-- <button class="previous btn btn-outline-dark" type="button">Back</button>
                <button type="button" class="next btn btn-outline-dark" id="nextCI" name="nextCI">Next</button> -->
                
            </div>
            
        </div>
        </fieldset>