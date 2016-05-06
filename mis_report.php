<?php
require_once 'core/init.php';
$errors = [];
if (Input::exists()){
	$db = DB::getInstance();

	$timestamp = time();

	// Insert to outdoor patients table for regular OPD
	for ($i = 1; $i < 2; $i++):
		$regular_OPD = $db->insert('regular_OPD', array(
				'cases' => Input::get("OPD_cases_$i"),
				'male' => Input::get("OPD_Male_$i"),
				'female' => Input::get("OPD_Female_$i"),
				'OPD_MCH' => Input::get("OPD_MCH_$i"),
				'OPD_FCH' => Input::get("OPD_FCH_$i"),
				'total' => Input::get("cases_Total_$i"),
				'during_month' => Input::get("cases_Duration_$i"),
				'progressive' => Input::get("cases_Prog_$i"),
				'timestamp' => $timestamp,
				'month' => date('F Y')
			));
		$errors[] = "Error! Please check the entry for "+Input::get("indoor_cases_$i");
	endfor;

	// Insert to outdoor patients table for OUTREACH Patients
	for ($i = 1; $i <= 2; $i++):
		$outreach_patients = $db->insert('OUTREACH_patients', array(
				'cases' => Input::get("OUT_cases_$i"),
				'male' => Input::get("OUT_Male_$i"),
				'female' => Input::get("OUT_Female_$i"),
				'MCH' => Input::get("OUT_MCH_$i"),
				'FCH' => Input::get("OUT_FCH_$i"),
				'total' => Input::get("OUT_cases_Total_$i"),
				'during_month' => Input::get("OUT_cases_Duration_$i"),
				'progressive' => Input::get("OUT_cases_Prog_$i"),
				'timestamp' => $timestamp,
				'month' => date('F Y')
			));
			$errors[] = "Error! Please check the entry for "+Input::get("indoor_cases_$i");
	endfor;

	// Insert to outdoor patients table for Indoor Patients
	for ($i = 1; $i <= 2; $i++):
		$indoor_Patients = $db->insert('indoor_Patients', array(
				'cases' => Input::get("indoor_case_$i"),
				'male' => Input::get("indoor_male_$i"),
				'female' => Input::get("indoor_female_$i"),
				'MCH' => Input::get("indoor_MCH_$i"),
				'FCH' => Input::get("indoor_FCH_$i"),
				'total' => Input::get("indoor_total_$i"),
				'during_month' => Input::get("indoor_month_$i"),
				'progressive' => Input::get("indoor_progressive_$i"),
				'timestamp' => $timestamp,
				'month' => date('F Y')
			));
		$errors[] = "Error! Please check the entry for "+Input::get("indoor_case_$i");
	endfor;

	if (count($errors) == 0){
		header('Location:Page2.php');
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
		<center><h6><b>OUTDOOR PATIENTS</b></h6></center>
		<table class="table table-bordered">
			<thead>
				<td>Regular OPD</td>
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
					<td><input type="text" name="OPD_cases_1" id="OPD_cases_1" class="form-control" value="New Cases" readonly></td>
					<td><input type="number" name="OPD_Male_1" id="OPD_Male_1" class="form-control"></td>
					<td><input type="number" name="OPD_Female_1" id="OPD_Female_1" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="OPD_MCH_1" id="OPD_MCH_1" class="form-control"></td>
								<td><input type="number" name="OPD_FCH_1" id="OPD_FCH_1" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="cases_Total_1" id="cases_Total_1" class="form-control"></td>
					<td><input type="number" name="cases_Duration_1" id="cases_Duration_1" class="form-control"></td>
					<td><input type="number" name="cases_Prog_1" id="cases_Prog_1" class="form-control"></td>	
				</tr>

				<!-- Old Cases -->
				<tr>
					<td><input type="text" name="OPD_cases_2" id="OPD_cases_2" class="form-control" value="Old Cases" readonly></td>
					<td><input type="number" name="OPD_Male_2" id="OPD_Male_2" class="form-control"></td>
					<td><input type="number" name="OPD_Female_2" id="OPD_Female_2" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="OPD_MCH_2" id="OPD_MCH_2" class="form-control"></td>
								<td><input type="number" name="OPD_FCH_2" id="OPD_FCH_2" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="cases_Total_2" id="cases_Total_2" class="form-control"></td>
					<td><input type="number" name="cases_Duration_2" id="cases_Duration_2" class="form-control"></td>
					<td><input type="number" name="cases_Prog_2" id="cases_Prog_2" class="form-control"></td>
				</tr>

				<!-- Total -->
				<tr>
					<td><input type="text" name="OPD_cases_total" id="OPD_cases_total" class="form-control" value="Total" readonly></td>
					<td><input type="number" name="OPD_Male_total" id="OPD_Male_total" class="form-control"></td>
					<td><input type="number" name="OPD_Female_total" id="OPD_Female_total" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="OPD_MCH_total" id="OPD_MCH_total" class="form-control"></td>
								<td><input type="number" name="OPD_FCH_total" id="OPD_FCH_total" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="cases_Total_total" id="cases_Total_total" class="form-control"></td>
					<td><input type="number" name="cases_Duration_total" id="cases_Duration_total" class="form-control"></td>
					<td><input type="number" name="cases_Prog_total" id="cases_Prog_total" class="form-control"></td>
				</tr>
			</tbody>
		</table>

		<!-- Outdoor patients table end -->

		<!-- OUTREACH PATIENTS table -->

		<!-- <center><h6>OUTDOOR PATIENTS</h6></center> -->
		<table class="table table-bordered table-condensed">
			<thead>
				<td>OUTREACH Patients</td>
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
					<td><input type="text" name="OUT_cases_1" id="OUT_cases_1" class="form-control" value="New Cases" readonly></td>
					<td><input type="number" name="OUT_Male_1" id="OUT_Male_1" class="form-control"></td>
					<td><input type="number" name="OUT_Female_1" id="OUT_Female_1" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="OUT_MCH_1" id="OUT_MCH_1" class="form-control"></td>
								<td><input type="number" name="OUT_FCH_1" id="OUT_FCH_1" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="OUT_cases_Total_1" id="OUT_cases_Total_1" class="form-control"></td>
					<td><input type="number" name="OUT_cases_Duration_1" id="OUT_cases_Duration_1" class="form-control"></td>
					<td><input type="number" name="OUT_cases_Prog_1" id="OUT_cases_Prog_1" class="form-control"></td>
				</tr>

				<!-- Old Cases -->
				<tr>
					<td><input type="text" name="OUT_cases_2" id="OUT_cases_2" class="form-control" value="Old Cases" readonly></td>
					<td><input type="number" name="OUT_Male_2" id="OUT_Male_2" class="form-control"></td>
					<td><input type="number" name="OUT_Female_2" id="OUT_Female_2" class="form-control"></td>
					<td>
						<table class="table">
							<tbody>
								<td><input type="number" name="OUT_MCH_2" id="OUT_MCH_2" class="form-control"></td>
								<td><input type="number" name="OUT_FCH_2" id="OUT_FCH_2" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="OUT_cases_Total_2" id="OUT_cases_Total_2" class="form-control"></td>
					<td><input type="number" name="OUT_cases_Duration_2" id="OUT_cases_Duration_2" class="form-control"></td>
					<td><input type="number" name="OUT_cases_Prog_2" id="OUT_cases_Prog_2" class="form-control"></td>
				</tr>

			</tbody>
		</table>

		<center><h6><b>INDOOR PATIENTS</b></h6></center>
		<table class="table table-bordered">
			<thead>
				<td>New Cases</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<center>Child</center>
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
					<td><input type="text" name="indoor_case_1" id="indoor_case_1" class="form-control" value="THROUGH COURT" readonly></td>
					<td><input type="number" name="indoor_male_1" id="indoor_male_1" class="form-control"></td>
					<td><input type="number" name="indoor_female_1" id="indoor_female_1" class="form-control"></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="indoor_MCH_1" id="indoor_MCH_1" class="form-control"></td>
								<td><input type="number" name="indoor_FCH_1" id="indoor_FCH_1" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="indoor_total_1" id="indoor_total_1" class="form-control"></td>
					<td><input type="number" name="indoor_month_1" id="indoor_month_1" class="form-control"></td>
					<td><input type="number" name="indoor_progressive_1" id="indoor_progressive_1" class="form-control"></td>
				</tr>
				<tr>
					<td><input type="text" name="indoor_case_2" id="indoor_case_2" class="form-control" value="Voluntary" readonly></td>
					<td><input type="number" name="indoor_male_2" id="indoor_male_2" class="form-control"></td>
					<td><input type="number" name="indoor_female_2" id="indoor_female_2" class="form-control"></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="indoor_MCH_2" id="indoor_MCH_2" class="form-control"></td>
								<td><input type="number" name="indoor_FCH_2" id="indoor_FCH_2" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="indoor_total_2" id="indoor_total_2" class="form-control"></td>
					<td><input type="number" name="indoor_month_2" id="indoor_month_2" class="form-control"></td>
					<td><input type="number" name="indoor_progressive_2" id="indoor_progressive_2" class="form-control"></td>
				</tr>
				<tr>
					<td><input type="text" name="indoor_case_total" id="indoor_case_total" class="form-control" value="Total" readonly></td>
					<td><input type="number" name="indoor_male_total" id="indoor_male_total" class="form-control"></td>
					<td><input type="number" name="indoor_female_total" id="indoor_female_total" class="form-control"></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="indoor_MCH_total" id="indoor_MCH_total" class="form-control"></td>
								<td><input type="number" name="indoor_FCH_total" id="indoor_FCH_total" class="form-control"></td>
							</tbody>
						</table>
					</td>
					<td><input type="number" name="indoor_total_total" id="indoor_total_total" class="form-control"></td>
					<td><input type="number" name="indoor_month_total" id="indoor_month_total" class="form-control"></td>
					<td><input type="number" name="indoor_progressive_total" id="indoor_progressive_total" class="form-control"></td>
				</tr>
			</tbody>
		</table>
		<?php require_once 'templates/report_footer.html' ?>
	</form>
	<input type="submit" id="submit" name="submit" class="btn btn-primary">

		<!-- Outreach patients table end -->
	</form>
	</section>

	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
</body>
</html>