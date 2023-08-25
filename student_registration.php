<?php
include('header.php');
?>

<div class="superContainer">
    <!-- form starts -->
    <div class="container form mt-5 mb-5 pt-4 pb-4">
        <h2 class="vision text-center">Reserve Your Seat</h2>
        <form action="thank_you.php" method="post" class="student-form" id="registration_form">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6 text-right mr-2">
                    <input type="text" name="name" placeholder="Enter your Full Name" value="" required>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6 text-right ml-2">
                    <input type="email" name="email" placeholder="Enter your Email" value="" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6 text-right mr-2">
                    <input type="tel" name="mobile" maxlength="10" placeholder="Enter your Mobile No" value="" required>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6 text-right ml-2">
                    <!-- <input type="text" id="aadhaarNumber" name="adharno" maxlength="14" placeholder="Enter your Adhar Card" value="" required> -->
                    <input type="text" id="aadhaarNumber" name="adharno" maxlength="12" placeholder="Enter your Aadhaar Number">
                    <div id="aadhaarError" style="color: red;"></div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6 text-right mr-3">
                    <select required name="education" style="background: #fff">
                        <option class="text-primary" value="">--Select the Education--</option>
                        <option value="12th">12th</option>
                        <option value="graduate">Graduate</option>
                        <option value="underGraduate">Post-Graduate</option>
                    </select>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6 text-right -3">
                    <select required name="occupation" style="background: #fff">
                        <option class="text-primary" value="">--Select the Occupation--</option>
                        <option value="student">Student</option>
                        <option value="employed">Employed</option>
                        <option value="unemplyed">Unemployed</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="district" placeholder="District" value="">
                </div>
                <div class="col-md-4">
                    <input type="text" name="subdivision" placeholder="Sub Division" value="">
                </div>
                <div class="col-md-4">
                    <input type="text" name="city" placeholder="City" value="">
                </div>

            </div>
            <div class="text-center">
                <button class="subBtn mt-5 mb-4" name="submit" type="submit" value="Insert">submit</button>
            </div>
        </form>
    </div>
    <!-- form ends -->
</div>

<script>
  $(document).ready(function() {
    $('#registration_form').submit(function(e) {
      e.preventDefault();
      
      var aadhaarNumber = $('#aadhaarNumber').val();
      //alert( aadhaarNumber);

      $.ajax({
        url: 'validate_aadhaar.php',
        type: 'POST',
        data: { aadhaarNumber: aadhaarNumber },
        success: function(response) {
          if (response === 'valid') {
            // Valid Aadhaar number, submit the form
            $('#registration_form').unbind('submit').submit();
          } else {
            // Invalid Aadhaar number, display error message
            $('#aadhaarError').text('Invalid Aadhaar number');
          }
        }
      });
    });
  });
</script>
    

<?php
include('footer.php')
?>