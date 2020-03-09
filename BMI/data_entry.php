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
                            <font color=red>Required Field *</font>
							</strong><br /><br />
                            <?php
                                $weightErr = $heightErr = "";

                                if(isset($_POST['submit'])){
                                    if(empty($_POST['weight'])){
                                        $weightErr = "Weight is required";
                                    }
                                    if(empty($_POST['height'])){
                                        $heightErr = "Height is required";
                                    }
                                }
                                ?>
							<form  action="#" method="POST">
                                <table>
                                    <!--Row 1(WEIGHT) - 3 Columns-->
                                    <tr>
                                        <td>Weight:</td>
                                        <td><input type="number" name="weight" placeholder="Enter your weight"></td>
                                        <td>
                                            <select name="unitWeight">
                                            <option value="kg">kg</option>
                                            <option value="lb">lb</option>
                                            </select>
                                            <font color=red>*</font>
                                        </td>
                                        <td>
                                            <font color=red><?php echo $weightErr ?></font>
                                        </td>
                                    </tr>
                                    <!--Row 2(HEIGHT) - 3 Columns-->
                                    <tr>
                                        <td>Height:</td>
                                        <td><input type="number" name="height" placeholder="Enter your height"></td>
                                        <td>
                                            <select name="unitHeight">
                                                <option value="cm">cm</option>
                                                <option value="in">in</option>
                                            </select>
                                            <font color=red>*</font>
                                        </td>
                                        <td>
                                            <font color=red><?php echo $heightErr ?></font>
                                        </td>
                                    </tr>
                                    <!--Row 3(BUTTON) - 3 Columns-->
                                    <tr>
                                        <td>
                                        </td>
                                        <td><input type="submit" name="submit" value="Calculate BMI" style="width:100%"></td>
                                        <td>
                                        </td>
                                    </tr>
                                </table>
                        </form>
                        <?php
                            include("data_function.php");
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                //Variable Initialisation
                                $weight = $_POST['weight'];
                                $weightType = $_POST['unitWeight'];
                                $height = $_POST['height'];
                                $heightType = $_POST['unitHeight'];
                                //Variable Validation & Execution
                                if(!empty($weight) && !empty($height)){
                                    switch($weightType){
                                        case "kg":
                                            //We assume cm is Default
                                            if($heightType == "in"){
                                                $height = convert_inTocm($height);
                                            }
                                            echo "BMI"." ".round(calc_bmi($weight,$height),2);
                                        break;
                                        case "lb":
                                            //We assume cm is Default
                                            $weight = round(convert_lbTokg($weight));
                                            if($heightType == "in"){
                                                $height = convert_inTocm($height);
                                            }
                                            echo "BMI"." ".round(calc_bmi($weight,$height),2);
                                        break;
                                        default:
                                            echo "an error occured."."</br>";
                                            echo "Please try again";
                                    }
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