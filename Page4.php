<?php 
require_once 'core/init.php';
$errors = [];

if (Input::exists()){
	$db = DB::getInstance();

	for ($i = 1; $i <= 8; $i++){
		$insert = $db->insert('indoor_diagnostic', array(
				'diagnosis' => Input::get("diag_name_$i"),
				'male_new' => Input::get("male_new_$i"),
				'male_old' => Input::get("male_old_$i"),
				'female_new' => Input::get("female_new_$i"),
				'female_old' => Input::get("female_old_$i"),
				'MCH_new' => Input::get("MCH_new_$i"),
				'MCH_old' => Input::get("MCH_old_$i"),
				'FCH_new' => Input::get("FCH_new_$i"),
				'FCH_old' => Input::get("FCH_old_$i"),
				'total_new' => Input::get("total_new_$i"),
				'total_old' => Input::get("total_old_$i_"),
				'monthly_new' => Input::get("monthly_new_$i"),
				'monthly_old' => Input::get("monthly_old_$i"),
				'progressive_new' => Input::get("prog_new_$i"),
				'progressive_old' => Input::get("prog_old_$i"),
				'timestamp' => time()
			));

		if (!$insert){
			$errors[] = "Error! Please check values for ". Input::get("diag_name_$i");
		}
	}

	if (count($errors) == 0){
		//header('Location:Page4.php');
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MIS Report Page 3</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		require_once 'templates/header.php';
		require_once 'templates/navbar.php';
	?>

	<section class="col-xs-12 container-fluid">
	<?php
	if (count($errors) > 0){
		foreach ($errors as $error){
			echo "<p class='text-warning'>$error</p>";
		}
	}
	?>
	<form action="" method="POST" id="mis_report">
		
		<h4>DIAGNOSTIC CATEGORISATION (INDOOR)</h4><br>

		<table class="table table-bordered">
			<thead>
				<td>S.N.</td>
				<td>DIAGNOSIS</td>
				<td></td>
				<td>MALE</td>
				<td>FEMALE</td>
				<td>
					<center>CHILD</center>
					<table class="table table-bordered">
						<thead>
							<td><center>MCH</center></td>
							<td><center>FCH</center></td>
						</thead>
					</table>
				</td>
				<td>TOTAL</td>
				<td>MONTHLY</td>
				<td>PROGRESSIVE</td>
			</thead>
			<tbody>
				<tr>
					<td class="sr-no"><center>1</center></td>
					<td><textarea name="diag_name_1" id="diag_name_1" rows="3" class="form-control" readonly>ORGANIC MENTAL DISORDER</textarea></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_1" id="male_new_1" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_1" id="male_old_1" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_1" id="female_new_1" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_1" id="female_old_1" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_1" id="MCH_new_1" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_1" id="MCH_old_1" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_1" id="FCH_new_1" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_1" id="FCH_old_1" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_1" id="total_new_1" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_1" id="total_old_1" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_1" id="monthly_new_1" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_1" id="monthly_old_1" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_1" id="prog_new_1" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_1" id="prog_old_1" class="form-control"></div>
					</td>
				</tr>

				<tr>
					<td class="sr-no"><center>2</center></td>
					<td><textarea name="diag_name_2" id="diag_name_2" rows="2" class="form-control" readonly>AFFECTIVE PSYCHOSIS</textarea></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_2" id="male_new_2" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_2" id="male_old_2" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_2" id="female_new_2" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_2" id="female_old_2" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_2" id="MCH_new_2" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_2" id="MCH_old_2" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_2" id="FCH_new_2" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_2" id="FCH_old_2" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_2" id="total_new_2" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_2" id="total_old_2" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_2" id="monthly_new_2" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_2" id="monthly_old_2" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_2" id="prog_new_2" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_2" id="prog_old_2" class="form-control"></div>
					</td>
				</tr>

				<tr>
					<td class="sr-no"><center>3</center></td>
					<td><input name="diag_name_3" id="diag_name_3" class="form-control" value="SCHIZOPHRENIA" readonly></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_3" id="male_new_3" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_3" id="male_old_3" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_3" id="female_new_3" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_3" id="female_old_3" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_3" id="MCH_new_3" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_3" id="MCH_old_3" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_3" id="FCH_new_3" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_3" id="FCH_old_3" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_3" id="total_new_3" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_3" id="total_old_3" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_3" id="monthly_new_3" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_3" id="monthly_old_3" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_3" id="prog_new_3" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_3" id="prog_old_3" class="form-control"></div>
					</td>
				</tr>

				<tr>
					<td class="sr-no"><center>4</center></td>
					<td><input name="diag_name_4" id="diag_name_4" class="form-control" value="NEUROSIS" readonly></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_4" id="male_new_4" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_4" id="male_old_4" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_4" id="female_new_4" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_4" id="female_old_4" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_4" id="MCH_new_4" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_4" id="MCH_old_4" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_4" id="FCH_new_4" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_4" id="FCH_old_4" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_4" id="total_new_4" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_4" id="total_old_4" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_4" id="monthly_new_4" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_4" id="monthly_old_4" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_4" id="prog_new_4" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_4" id="prog_old_4" class="form-control"></div>
					</td>
				</tr>

				<tr>
					<td class="sr-no"><center>5</center></td>
					<td><textarea name="diag_name_5" id="diag_name_5" rows="2" class="form-control" readonly>MENTAL RETARDATION</textarea></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_5" id="male_new_5" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_5" id="male_old_5" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_5" id="female_new_5" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_5" id="female_old_5" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_5" id="MCH_new_5" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_5" id="MCH_old_5" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_5" id="FCH_new_5" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_1" id="FCH_old_1" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_5" id="total_new_5" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_5" id="total_old_5" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_5" id="monthly_new_5" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_5" id="monthly_old_5" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_5" id="prog_new_5" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_5" id="prog_old_5" class="form-control"></div>
					</td>
				</tr>

				<tr>
					<td class="sr-no"><center>6</center></td>
					<td><input name="diag_name_6" id="diag_name_6" class="form-control" value="EPILEPSY" readonly></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_6" id="male_new_6" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_6" id="male_old_6" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_6" id="female_new_6" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_6" id="female_old_6" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_6" id="MCH_new_6" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_6" id="MCH_old_6" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_6" id="FCH_new_6" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_6" id="FCH_old_6" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_6" id="total_new_6" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_6" id="total_old_6" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_6" id="monthly_new_6" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_6" id="monthly_old_6" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_6" id="prog_new_6" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_6" id="prog_old_6" class="form-control"></div>
					</td>
				</tr>
				
				<tr>
					<td class="sr-no"><center>7</center></td>
					<td><input name="diag_name_7" id="diag_name_7" class="form-control" value="ADDICTION" readonly></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_7" id="male_new_7" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_7" id="male_old_7" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_7" id="female_new_7" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_7" id="female_old_7" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_7" id="MCH_new_7" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_7" id="MCH_old_7" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_7" id="FCH_new_7" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_7" id="FCH_old_7" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_7" id="total_new_7" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_7" id="total_old_7" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_7" id="monthly_new_7" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_7" id="monthly_old_7" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_7" id="prog_new_7" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_7" id="prog_old_7" class="form-control"></div>
					</td>
				</tr>

				<tr>
					<td class="sr-no"><center>8</center></td>
					<td><input name="diag_name_8" id="diag_name_8" class="form-control" value="OTHERS" readonly></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_8" id="male_new_8" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_8" id="male_old_8" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_8" id="female_new_8" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_8" id="female_old_8" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_8" id="MCH_new_8" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_8" id="MCH_old_8" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_8" id="FCH_new_8" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_8" id="FCH_old_8" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_8" id="total_new_8" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_8" id="total_old_8" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_8" id="monthly_new_8" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_8" id="monthly_old_8" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_8" id="prog_new_8" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_8" id="prog_old_8" class="form-control"></div>
					</td>
				</tr>

				<tr>
					<td class="sr-no"></td>
					<td><input name="total" id="total" class="form-control" value="TOTAL" readonly></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="male_new_TOTAL" id="male_new_TOTAL" class="form-control"></div>
						<div class="diag-old"><input type="number" name="male_old_TOTAL" id="male_old_TOTAL" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="female_new_TOTAL" id="female_new_TOTAL" class="form-control"></div>
						<div class="diag-old"><input type="number" name="female_old_TOTAL" id="female_old_TOTAL" class="form-control"></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><input type="number" name="MCH_new_TOTAL" id="MCH_new_TOTAL" class="form-control"></div>
									<div class="diag-old"><input type="number" name="MCH_old_TOTAL" id="MCH_old_TOTAL" class="form-control"></div>
								</td>
								<td>
									<div class="diag-new"><input type="number" name="FCH_new_TOTAL" id="FCH_new_TOTAL" class="form-control"></div>
									<div class="diag-old"><input type="number" name="FCH_old_TOTAL" id="FCH_old_TOTAL" class="form-control"></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="total_new_TOTAL" id="total_new_TOTAL" class="form-control"></div>
						<div class="diag-old"><input type="number" name="total_old_TOTAL" id="total_old_TOTAL" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="monthly_new_TOTAL" id="monthly_new_TOTAL" class="form-control"></div>
						<div class="diag-old"><input type="number" name="monthly_old_TOTAL" id="monthly_old_TOTAL" class="form-control"></div>
					</td>
					<td>
						<div class="diag-new"><input type="number" name="prog_new_TOTAL" id="prog_new_TOTAL" class="form-control"></div>
						<div class="diag-old"><input type="number" name="prog_old_TOTAL" id="prog_old_TOTAL" class="form-control"></div>
					</td>
				</tr>

			</tbody>
		</table>
	</form>
	<input type="submit" name="submit" id="submit" class="btn btn-primary" value="SAVE" form="mis_report">
	</section>

</body>
</html>


