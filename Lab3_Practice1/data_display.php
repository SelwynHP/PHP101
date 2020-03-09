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
						<b>
							<?php 
								echo "-----------After processing-----------"."<br/>";
								echo "Employee ID: ".$_POST['empId']."<br/>";
								echo "Employee name: ".$_POST['firstName']." ".$_POST['lastName']."<br/>";
								echo "Salary: ".$_POST['salary']."<br/>";
							?>
						</b>
						<br/> <a href="data_entry.php">Data Entry</a> <br/>

					</div>
				</div>
				<?php include "includes/footer.php"?>
			</div>
		</div>
	</body>
</html>