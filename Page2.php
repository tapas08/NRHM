<?php
require_once 'core/init.php';
$errors = [];
if (Input::exists()){
	$db = DB::getInstance();

	$timestamp = time();

	// Insert to Other patients table for Other Patients
	for ($i = 1; $i < 4; $i++):
		$other_patients = $db->insert('other_patients', array(
				'cases' => Input::get("cases_$i"),
				'male' => Input::get("Male_$i"),
				'female' => Input::get("Female_$i"),
				'MCH' => Input::get("MCH_$i"),
				'FCH' => Input::get("FCH_$i"),
				'total' => Input::get("Total_$i"),
				'during_month' => Input::get("Duration_$i"),
				'progressive' => Input::get("Prog_$i"),
				'timestamp' => $timestamp,
				'month' => date('F Y')
			));
		$errors[] = "Error! Please check the entry for "+Input::get("cases_$i");
	endfor;

	// Insert to readmission patients table for Readmission Patients
	for ($i = 1; $i <= 3; $i++):
		$readmission_patients = $db->insert('readmission_patients', array(
				'cases' => Input::get("readmsn_cases_$i"),
				'male' => Input::get("readmsn_Male_$i"),
				'female' => Input::get("readmsn_Female_$i"),
				'MCH' => Input::get("readmsn_MCH_$i"),
				'FCH' => Input::get("readmsn_FCH_$i"),
				'total' => Input::get("readmsn_cases_Total_$i"),
				'during_month' => Input::get("readmsn_cases_Duration_$i"),
				'progressive' => Input::get("readmsn_cases_Prog_$i"),
				'timestamp' => $timestamp,
				'month' => date('F Y')
			));
			$errors[] = "Error! Please check the entry for "+Input::get("readmsn_case_$i");
	endfor;

	// Insert to LOA patients table for LOA Patients

	$LOA_Patients = $db->insert('LOA_Patients', array(
			'cases' => Input::get("LOA_case_$i"),
			'male' => Input::get("LOA_male_$i"),
			'female' => Input::get("LOA_female_$i"),
			'MCH' => Input::get("LOA_MCH_$i"),
			'FCH' => Input::get("LOA_FCH_$i"),
			'total' => Input::get("LOA_total_$i"),
			'during_month' => Input::get("LOA_month_$i"),
			'progressive' => Input::get("LOA_progressive_$i"),
			'timestamp' => $timestamp,
			'month' => date('F Y')
		));
	$errors[] = "Error! Please check the entry for "+Input::get("LOA_case_$i");

	// Insert to discharge patients table for Discharged Patients
	for ($i = 1; $i <= 3; $i++):
		$readmission_patients = $db->insert('discharge_patients', array(
				'cases' => Input::get("discharge_cases_$i"),
				'male' => Input::get("discharge_Male_$i"),
				'female' => Input::get("discharge_Female_$i"),
				'MCH' => Input::get("discharge_MCH_$i"),
				'FCH' => Input::get("discharge_FCH_$i"),
				'total' => Input::get("discharge_cases_Total_$i"),
				'during_month' => Input::get("discharge_cases_Duration_$i"),
				'progressive' => Input::get("discharge_cases_Prog_$i"),
				'timestamp' => $timestamp,
				'month' => date('F Y')
			));
			$errors[] = "Error! Please check the entry for "+Input::get("discharge_case_$i");
	endfor;

	if (count($errors) == 0){
		header('Location:Page3.php');
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MIS Report</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
	<?php require_once 'templates/header.php'; ?>
	<?php require_once 'templates/navbar.php'; ?>

	<section class="container-fluid col-md-12">
	<?php
		if (count($errors) > 0){
			foreach ($errors as $error){
				echo "<p class='text-warning'>$error</p>";
			}
		}
	?>
	<form action="" method="POST">
		
		<h4>MIS DISTRICT GENERAL HOSPITAL, WARDHA <?php echo strtoupper(date('M')),"-",date('y'); ?></h4><br>

		<!-- Table for outdoor patients -->
		<center><h6><b>INDOOR PATIENTS (Other Agencies)</b></h6></center>
		<table class="table table-bordered">
			<thead>
				<td></td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<table class="table table-bordered">
					<thead>
						<center>Child</center>
					</thead>
					<tbody>
						<td><center>MCH</center></td>
						<td><center>FCH</center></td>
					</tbody>
					</table>
				</td>
				<td>Total</td>
				<td>During Months</td>
				<td>Progressive</td>
			</thead>
			<tbody>
				<!-- New Cases -->
				<tr>
					<td><input type="text" name="cases_1" id="cases_1" class="form-control" value="Police(Criminal)" readonly></td>
					<td><input type="number" name="Male_1" id="Male_1" class="form-control"></td>
					<td><input type="number" name="Female_1" id="Female_1" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="MCH_1" id="MCH_1" class="form-control"></td>
								<td><input type="number" name="FCH_1" id="FCH_1" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="Total_1" id="Total_1" class="form-control"></td>
					<td><input type="number" name="Duration_1" id="Duration_1" class="form-control"></td>
					<td><input type="number" name="cases_Prog_1" id="cases_Prog_1" class="form-control"></td>
				</tr>

				<!-- Old Cases -->
				<tr>
					<td><input type="text" name="cases_2" id="cases_2" class="form-control" value="Begger" readonly></td>
					<td><input type="number" name="Male_2" id="Male_2" class="form-control"></td>
					<td><input type="number" name="Female_2" id="Female_2" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="MCH_2" id="MCH_2" class="form-control"></td>
								<td><input type="number" name="FCH_2" id="FCH_2" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="cases_Total_2" id="cases_Total_2" class="form-control"></td>
					<td><input type="number" name="cases_Duration_2" id="cases_Duration_2" class="form-control"></td>
					<td><input type="number" name="cases_Prog_2" id="cases_Prog_2" class="form-control"></td>
				</tr>

				<tr>
					<td><input type="text" name="cases_3" id="cases_3" class="form-control" value="Mahila Ashram" readonly></td>
					<td><input type="number" name="Male_3" id="Male_3" class="form-control"></td>
					<td><input type="number" name="Female_3" id="Female_3" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="MCH_3" id="MCH_3" class="form-control"></td>
								<td><input type="number" name="FCH_3" id="FCH_3" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="cases_Total_3" id="cases_Total_3" class="form-control"></td>
					<td><input type="number" name="cases_Duration_3" id="cases_Duration_3" class="form-control"></td>
					<td><input type="number" name="cases_Prog_3" id="cases_Prog_3" class="form-control"></td>
				</tr>

				<tr>
					<td><input type="text" name="cases_4" id="cases_4" class="form-control" value="Remand Home" readonly></td>
					<td><input type="number" name="Male_4" id="Male_4" class="form-control"></td>
					<td><input type="number" name="Female_4" id="Female_4" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="MCH_4" id="MCH_4" class="form-control"></td>
								<td><input type="number" name="FCH_4" id="FCH_4" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="cases_Total_4" id="cases_Total_4" class="form-control"></td>
					<td><input type="number" name="cases_Duration_4" id="cases_Duration_4" class="form-control"></td>
					<td><input type="number" name="cases_Prog_4" id="cases_Prog_4" class="form-control"></td>
				</tr>
			</tbody>
		</table>

		<!-- Readmission Patients -->
		<table class="table table-bordered table-condensed">
			<thead>
				<td>READMISSION</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<table class="table table-bordered">
					<thead>
						<center>Child</center>
					</thead>
					<tbody>
						<td><center>MCH</center></td>
						<td><center>FCH</center></td>
					</tbody>
					</table>
				</td>
				<td>Total</td>
				<td>During Months</td>
				<td>Progressive</td>
			</thead>
			<tbody>
	
				<tr>
					<td><input type="text" name="readmsn_cases_1" id="readmsn_cases_1" class="form-control"></td>
					<td><input type="number" name="readmsn_Male_1" id="readmsn_Male_1" class="form-control"></td>
					<td><input type="number" name="readmsn_Female_1" id="readmsn_Female_1" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="readmsn_MCH_1" id="readmsn_MCH_1" class="form-control"></td>
								<td><input type="number" name="readmsn_FCH_1" id="readmsn_FCH_1" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="readmsn_cases_Total_1" id="readmsn_cases_Total_1" class="form-control"></td>
					<td><input type="number" name="readmsn_cases_Duration_1" id="readmsn_cases_Duration_1" class="form-control"></td>
					<td><input type="number" name="readmsn_cases_Prog_1" id="readmsn_cases_Prog_1" class="form-control"></td>
				</tr>

				<tr>
					<td><input type="text" name="readmsn_cases_2" id="readmsn_cases_2" class="form-control"></td>
					<td><input type="number" name="readmsn_Male_2" id="readmsn_Male_2" class="form-control"></td>
					<td><input type="number" name="readmsn_Female_2" id="readmsn_Female_2" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="readmsn_MCH_2" id="readmsn_MCH_2" class="form-control"></td>
								<td><input type="number" name="readmsn_FCH_2" id="readmsn_FCH_2" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="readmsn_cases_Total_2" id="readmsn_cases_Total_2" class="form-control"></td>
					<td><input type="number" name="readmsn_cases_Duration_2" id="readmsn_cases_Duration_2" class="form-control"></td>
					<td><input type="number" name="readmsn_cases_Prog_2" id="readmsn_cases_Prog_2" class="form-control"></td>
				</tr>

				<tr>
					<td><input type="text" name="readmsn_cases_3" id="readmsn_cases_3" class="form-control"></td>
					<td><input type="number" name="readmsn_Male_3" id="readmsn_Male_3" class="form-control"></td>
					<td><input type="number" name="readmsn_Female_3" id="readmsn_Female_3" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="readmsn_MCH_3" id="readmsn_MCH_3" class="form-control"></td>
								<td><input type="number" name="readmsn_FCH_3" id="readmsn_FCH_3" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="readmsn_cases_Total_3" id="readmsn_cases_Total_3" class="form-control"></td>
					<td><input type="number" name="readmsn_cases_Duration_3" id="readmsn_cases_Duration_3" class="form-control"></td>
					<td><input type="number" name="readmsn_cases_Prog_3" id="readmsn_cases_Prog_3" class="form-control"></td>
				</tr>

			</tbody>
		</table>
		

		<!-- LOA patients -->
		<table class="table table-bordered">
			<thead>
				<td>LOA</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					Child
					<table class="table table-bordered">
						<thead>
							<td><center>MCH</center></td>
							<td><center>FCH</center></td>
						</thead>
					</table>
				</td>
				<td>Total</td>
				<td>During Month</td>
				<td>Progressive</td>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="LOA_case_1" id="LOA_case_1" class="form-control"></td>
					<td><input type="number" name="LOA_male_1" id="LOA_male_1" class="form-control"></td>
					<td><input type="number" name="LOA_female_1" id="LOA_female_1" class="form-control"></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="LOA_MCH_1" id="LOA_MCH_1" class="form-control"></td>
								<td><input type="number" name="LOA_FCH_1" id="LOA_FCH_1" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="LOA_total_1" id="LOA_total_1" class="form-control"></td>
					<td><input type="number" name="LOA_month_1" id="LOA_month_1" class="form-control"></td>
					<td><input type="number" name="LOA_progressive_1" id="LOA_progressive_1" class="form-control"></td>
				</tr>
			</tbody>
		</table>

		<!-- Discharge Patients -->
		<table class="table table-bordered">
			<thead>
				<td>Discharges</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					Child
					<table class="table table-bordered">
						<thead>
							<td><center>MCH</center></td>
							<td><center>FCH</center></td>
						</thead>
					</table>
				</td>
				<td>Total</td>
				<td>During Month</td>
				<td>Progressive</td>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="discharge_case_1" id="discharge_case_1" class="form-control" value="Reffer Out" readonly></td>
					<td><input type="number" name="discharge_male_1" id="discharge_male_1" class="form-control"></td>
					<td><input type="number" name="discharge_female_1" id="discharge_female_1" class="form-control"></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="discharge_MCH_1" id="discharge_MCH_1" class="form-control"></td>
								<td><input type="number" name="discharge_FCH_1" id="discharge_FCH_1" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="discharge_total_1" id="discharge_total_1" class="form-control"></td>
					<td><input type="number" name="discharge_month_1" id="discharge_month_1" class="form-control"></td>
					<td><input type="number" name="discharge_progressive_1" id="discharge_progressive_1" class="form-control"></td>
				</tr>

				<tr>
					<td><input type="text" name="discharge_case_2" id="discharge_case_2" class="form-control" value="Voluntary" readonly></td>
					<td><input type="number" name="discharge_male_2" id="discharge_male_2" class="form-control"></td>
					<td><input type="number" name="discharge_female_2" id="discharge_female_2" class="form-control"></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="discharge_MCH_2" id="discharge_MCH_2" class="form-control"></td>
								<td><input type="number" name="discharge_FCH_2" id="discharge_FCH_2" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="discharge_total_2" id="discharge_total_2" class="form-control"></td>
					<td><input type="number" name="discharge_month_2" id="discharge_month_2" class="form-control"></td>
					<td><input type="number" name="discharge_progressive_2" id="discharge_progressive_2" class="form-control"></td>
				</tr>

				<tr>
					<td><input type="text" name="discharge_case_total" id="discharge_case_total" class="form-control" value="Total" readonly></td>
					<td><input type="number" name="discharge_male_total" id="discharge_male_total" class="form-control"></td>
					<td><input type="number" name="discharge_female_total" id="discharge_female_total" class="form-control"></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="discharge_MCH_total" id="discharge_MCH_total" class="form-control"></td>
								<td><input type="number" name="discharge_FCH_total" id="discharge_FCH_total" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="discharge_total_total" id="discharge_total_total" class="form-control"></td>
					<td><input type="number" name="discharge_month_total" id="discharge_month_total" class="form-control"></td>
					<td><input type="number" name="discharge_progressive_total" id="discharge_progressive_total" class="form-control"></td>
				</tr>
			</tbody>
		</table>

	</form>
	<input type="submit" id="submit" name="submit" class="btn btn-primary">

		<!-- Outreach patients table end -->
	</form>
	</section>

	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
</body>
</html>