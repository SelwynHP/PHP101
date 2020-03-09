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
						<?php
							$salary = $salaryErr = "";
							if($_SERVER["REQUEST_METHOD"] == "POST"){
								$salary = $_POST['salary'];
								if(empty($salary)){
									$salaryErr = "Income is required";
								}
								else{
									include('data_display.php');
									$tax = calc_net($salary);
									$net = $salary - $tax;
								}
							}
						?>

						<strong><br /><br />
							<font color=#CC0000>* Required Fields</font>
							</strong><br /><br />
							<form  action="#" method="POST">
								<table class="datatable">
									<tr>
										<td>Enter Annual Income($):</td>
										<td>
										<input type="number" name="salary">
										<font color=#CC0000>*<?php echo " ".$salaryErr ?></font>
										</td>
									</tr>
									<tr>
										<td colspan="2"><input type="submit" name="submit" value="Calculate Income Tax"></td>
									</tr>
							</table>
						</form>
						<br />
						<?php
							if($_SERVER["REQUEST_METHOD"] == "POST"){
								if(!empty($salary)){
									echo "Gross income: ".$salary."<br/>";
									echo "Tax Amount: ".$tax."<br/>";
									echo "Net income: ".$net."<br/>";
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