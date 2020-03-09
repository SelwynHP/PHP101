<html>
	<?php include "includes/header.php"?>
	<body>
		<div id="page" align="center">
			<div id="content" style="width:800px">
				<?php include "includes/logo.php" ?>
				<?php include "includes/headerDiv.php" ?>
				<?php include "includes/menu.php"?>
				<div id="contenttext">
					<?php include "includes/title.php"?>
					<div class="bodytext" style="padding:12px;" align="justify">
						<strong><br /><br />
							<font color=#CC0000>* Required Fields</font>
						</strong><br /><br />
						<form  action="#" method="POST">
							<table class="datatable">
								<tr>
									<td>Employee ID:</td>
									<td><input type="number" name="empId"></td>
								</tr>
								<tr>
									<td>First Name:</td>
									<td><input type="text" name="firstName"></td>
								</tr>
								<tr>
									<td>Last Name:</td>
									<td><input type="text" name="lastName"></td>
								</tr>
								<tr>
									<td>Gross Salary:</td>
									<td><input type="number" name="salary"></td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<input type="submit" name="submit" value="Submit">
									</td>
								</tr>
							</table>
						</form>
						<br />
						<?php
							if(!empty($_POST['empId'])){
								$empId = $_POST['empId'];
								$firstName = $_POST['firstName'];
								$lastName = $_POST['lastName'];
								$salary = $_POST['salary'];
								if((isset($empId))&&(isset($firstName))&&(isset($lastName))&&(isset($salary))){
									echo "Employee ID: ".$empId."<br/>";
									echo "Employee Name: ".$firstName." ".$lastName."<br/>";
									echo "Gross Salary: ".$salary."<br/>";
								}
							}
						?>
					</div>
				</div>
				<?php include "includes/footer.php"?>
			</div>
		</div>
	</body>
</html>