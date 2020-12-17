<?php
	
	/**
	 * Code to generate a 6 character alphanumerical digit.
	 *
	 */
 
  $otp_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(3))); // A smart code to generate OTP PIN. 


