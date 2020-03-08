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
							</strong><br /><br />
							<?php include('data_display.php')?>
							<?php
								if(isset($_POST['submit'])){
									$cars = array_man_init();
									$lenght = count($cars);
									/*for($i = 0; $i < $lenght; $i++){
										echo implode(", " ,$cars[$i]);
										echo "<br/>";
									}*/

									$main = array_auto_init();
									$mainCount = count($main);
									for($i = 0; $i < $mainCount; $i++){
										echo implode(" ",$main[$i]);
										echo "<br/>";
									}
								}
							?>
							<form  action="#" method="POST">
								<input type="submit" name="submit" value="Submit">
							</form>
						<br />
					</div>
				</div>
				<?php include "includes/footer.php"?>
			</div>
		</div>
	</body>
</html>