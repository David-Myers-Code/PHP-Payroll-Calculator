<?php
	//get variables from form field
	$first_name=$_POST["first"];
	$last_name =$_POST["last"];
	$start_date =$_POST["start_date"];
	$end_date =$_POST["end_date"];
	$hours=$_POST["hours"];
	$wage=$_POST["wage"];
	
	//create variable for paycheck total and calculate hours * wage
	$paycheck_total = $hours * $wage;
	
	//format to two decimal places
	$paycheck_total = number_format($paycheck_total , 2);
	$wage = number_format($wage , 2);
	//create text variables for the items to be written to the file
	
	$fname = "First Name:	";
	$lname = "Last Name:	";
	$sdate = "Payroll Start Date:	";
	$edate = "Payroll End Date:	";
	$hworked = "Hours Worked:	";
	$hwage = "Hourly Wage:	";	
	$ptotal = "Paycheck Total:	";
	//create payroll file
	$payroll = fopen("payroll.txt", "w") or die("Unable to open file!");
	
	//write variables to file
	fwrite($payroll, $fname . "\r\n");
	fwrite($payroll, $first_name . "\r\n\r\n"  );
	fwrite($payroll, $lname . "\r\n");
	fwrite($payroll, $last_name . "\r\n\r\n");
	fwrite($payroll, $sdate . "\r\n");
	fwrite($payroll, $start_date . "\r\n\r\n");
	fwrite($payroll, $edate . "\r\n");
	fwrite($payroll, $end_date . "\r\n\r\n");
	fwrite($payroll, $hworked . "\r\n");
	fwrite($payroll, $hours . "\r\n\r\n");
	fwrite($payroll, $hwage . "\r\n");
	fwrite($payroll, "$" . $wage . "\r\n\r\n");
	fwrite($payroll, $ptotal . "\r\n");
	fwrite($payroll, "$" . $paycheck_total . "\r\n\r\n");
	?>
	
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>Download Page</title>

</head>
<body>
<h3>Click link below to download payroll file:	</h3><br>
<a href="payroll.txt"download><button id="download">Download File</button></a>


</body>
</html>

