<!DOCTYPE html>
<html>

<head>

<title>Payroll Calculator</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Employee Payroll Calculator</h1>
<p>Enter employee information</p>
<form action="payroll.php" method="post" id="payroll_form">
	<label for="first">First Name:	</label><br>
	<input type="text" name="first" id="first" placeholder="First"><br><br>
	<label for="last">Last Name:	</label><br>
	<input type="text" name="last" id="last" placeholder="Last"><br><br>
	<label for="start_date">Pay Period Start Date:	</label><br>
	<input type="date" name="start_date" id="start_date"><br><br>
	<label for="end_date">Pay Period End Date:	</label><br>
	<input type="date" name="end_date" id="end_date"><br><br>
	<label for="hours">Hours Worked:	</label><br>
	<input type="text" name="hours" id="hours" placeholder="Hours Worked"><br><br>
	<label for="wage">Hourly Wage:	</label><br>
	<input type="text" name="wage" id="wage" placeholder="Hourly Wage"><br><br>
	<input type="submit" id="submit" value="submit">
</form>

</body>

</html>
