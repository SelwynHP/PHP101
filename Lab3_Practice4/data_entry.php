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
							<form  action="<?php echo parse_data($_SERVER['PHP_SELF'])?>" method="POST">
								<select type="id" name="number">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
								<?php $num = 1;
								if($_SERVER["REQUEST_METHOD"] == "POST"){
									$num = $_POST['number'];
								}
								?>
								<input type="submit" name="submit" value="Get Multiplication Table">
								<table class="datatable">
									<tr>
										<td>
											Operation
										</td>
										<td>
											Result
										</td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 1 =</td>
										<td><?php echo multiply($num,1)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 2 =</td>
										<td><?php echo multiply($num,2)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 3 =</td>
										<td><?php echo multiply($num,3)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 4 =</td>
										<td><?php echo multiply($num,4)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 5 =</td>
										<td><?php echo multiply($num,5)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 6 =</td>
										<td><?php echo multiply($num,6)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 7 =</td>
										<td><?php echo multiply($num,7)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 8 =</td>
										<td><?php echo multiply($num,8)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 9 =</td>
										<td><?php echo multiply($num,9)?></td>
									</tr>
									<tr>
										<td><?php echo $num ?> X 10 =</td>
										<td><?php echo multiply($num,10)?></td>
									</tr>
							</table>
						</form>
						<br />
					</div>
				</div>
				<?php include "includes/footer.php"?>
			</div>
		</div>
	</body>
</html>