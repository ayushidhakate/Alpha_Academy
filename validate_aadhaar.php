<?php
$aadhaarNumber = $_POST['aadhaarNumber'];
$errorMsg = '';

if (validateAadhaarNumber($aadhaarNumber)) {
  echo 'valid';
} else {
  $errorMsg = 'Invalid Aadhaar number';
}

function validateAadhaarNumber($aadhaarNumber) {
  // Check if Aadhaar number consists of 12 digits
  $pattern = '/^\d{12}$/';

  return preg_match($pattern, $aadhaarNumber);
}
?>
