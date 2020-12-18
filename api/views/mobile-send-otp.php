<!DOCTYPE html>
<html>
<head>
	<title>Mobile OTP</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
	<div class="container">
		<dir class="error"></dir>
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>
			<div class="form-row">
				<input type="number" id="mobile" class="form-input" placeholder="Enter the 10 digit mobile">
			</div>
			<input type="button" class="btnSubmit" value="Send OTP" onClick="sendOTP();">
		</form>
		
	</div>
	<script type="text/javascript" src="../public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../public/js/verification.js"></script>
</body>
</html>