<?php 
require_once 'core/init.php';
$errors = [];

if (Input::exists()){
	$db = DB::getInstance();

	// Insert data for duration of stay
	for ($i = 1; $i <= 6; $i++){
		$duration = $db->insert('duration_of_stay', array(
				'stay_period' 		=> Input::get("stay_period_$i"),
				'stay_male' 		=> Input::get("stay_male_$i"),
				'stay_female' 		=> Input::get("stay_female_$i"),
				'stay_MCH' 			=> Input::get("stay_MCH_$i"),
				'stay_FCH' 			=> Input::get("stay_FCH_$i"),
				'stay_total' 		=> Input::get("stay_total_$i"),
				'stay_DM'			=> Input::get("stay_DM_$i"),
				'stay_progressive'	=> Input::get("stay_progressive_$i"),
				'date'				=> date('m-d-Y'),
				'month'				=> date('F Y')
			));
		if (!$duration){
			$errors[] = "Error! Please check values for ". Input::get("stay_period_$i");
		}

		$services = $db->insert('outreach_services', array(
				'place' => Input::get("service_place_$i"),
				'male' => Input::get("service_male_$i"),
				'female' => Input::get("service_female_$i"),
				'MCH' => Input::get("service_MCH_$i"),
				'FCH' => Input::get("service_FCH_$i"),
				'total' => Input::get("service_total_$i"),
				'DM' => Input::get("service_DM_$i"),
				'progressive' => Input::get("service_progressive_$i"),
				'date' => date('m-d-Y'),
				'month' => date('F Y')
			));

		if (!$duration){
			$errors[] = "Error! Please check values for ". Input::get("service_place_$i");
		}
	}

	for ($i = 1; $i <= 7; $i++){
		$criminals = $db->insert('criminal_patients', array(
				'name_of_patient' => Input::get("patient_name_$i"),
				'g_r_no' => Input::get("gr_no_$i"),
				'date_of_admission' => Input::get("admission_$i"),
				'MLC' => Input::get("MLC_no_$i"),
				'MLC_next' => Input::get("MLC_next_$i"),
				'IPC' => Input::get("IPC_$i"),
				'IPC_next' => Input::get("IPC_next_$i"),
				'diagnosis' => Input::get("diagnosis_$i"),
				'date' => date('m-d-Y'),
				'month' => date('F Y')
			));

		if (!$duration){
			$errors[] = "Error! Please check values for ". Input::get("patient_name_$i");
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 5</title>
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
			
			<h4>DURATION OF STAY</h4><br>
			<table class="table table-bordered table-condensed">
				<thead>
					<td></td>
					<td>MALE</td>
					<td>FEMALE</td>
					<td colspan="2">
						<center>CHILD</center>
						<table class="table table-bordered">
							<thead>
								<td><center>MCH</center></td>
								<td><center>FCH</center></td>
							</thead>
						</table>
					</td>
					<td>TOTAL</td>
					<td>DM</td>
					<td>PROGRESSIVE</td>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="stay_period_1" id="stay_period_1" class="form-control" value="UP TO 6 MONTHS" readonly></td>
						<td><input type="number" name="stay_male_1" id="stay_male_1" class="form-control"></td>
						<td><input type="number" name="stay_female_1" id="stay_female_1" class="form-control"></td>
						<td><input type="number" name="stay_MCH_1" id="stay_MCH_1" class="form-control"></td>
						<td><input type="number" name="stay_FCH_1" id="stay_FCH_1" class="form-control"></td>
						<td><input type="number" name="stay_total_1" id="stay_total_1" class="form-control"></td>
						<td><input type="number" name="stay_DM_1" id="stay_DM_1" class="form-control"></td>
						<td><input type="number" name="stay_progressive_1" id="stay_progressive_1" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="stay_period_2" id="stay_period_2" class="form-control" value="6 TO 12 MONTHS" readonly></td>
						<td><input type="number" name="stay_male_2" id="stay_male_2" class="form-control"></td>
						<td><input type="number" name="stay_female_2" id="stay_female_2" class="form-control"></td>
						<td><input type="number" name="stay_MCH_2" id="stay_MCH_2" class="form-control"></td>
						<td><input type="number" name="stay_FCH_2" id="stay_FCH_2" class="form-control"></td>
						<td><input type="number" name="stay_total_2" id="stay_total_2" class="form-control"></td>
						<td><input type="number" name="stay_DM_2" id="stay_DM_2" class="form-control"></td>
						<td><input type="number" name="stay_progressive_2" id="stay_progressive_2" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="stay_period_3" id="stay_period_3" class="form-control" value="1 TO 2 YEARS" readonly></td>
						<td><input type="number" name="stay_male_3" id="stay_male_3" class="form-control"></td>
						<td><input type="number" name="stay_female_3" id="stay_female_3" class="form-control"></td>
						<td><input type="number" name="stay_MCH_3" id="stay_MCH_3" class="form-control"></td>
						<td><input type="number" name="stay_FCH_3" id="stay_FCH_3" class="form-control"></td>
						<td><input type="number" name="stay_total_3" id="stay_total_3" class="form-control"></td>
						<td><input type="number" name="stay_DM_3" id="stay_DM_3" class="form-control"></td>
						<td><input type="number" name="stay_progressive_3" id="stay_progressive_3" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="stay_period_4" id="stay_period_4" class="form-control" value="2 TO 5 YEARS" readonly></td>
						<td><input type="number" name="stay_male_4" id="stay_male_4" class="form-control"></td>
						<td><input type="number" name="stay_female_4" id="stay_female_4" class="form-control"></td>
						<td><input type="number" name="stay_MCH_4" id="stay_MCH_4" class="form-control"></td>
						<td><input type="number" name="stay_FCH_4" id="stay_FCH_4" class="form-control"></td>
						<td><input type="number" name="stay_total_4" id="stay_total_4" class="form-control"></td>
						<td><input type="number" name="stay_DM_4" id="stay_DM_4" class="form-control"></td>
						<td><input type="number" name="stay_progressive_4" id="stay_progressive_4" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="stay_period_5" id="stay_period_5" class="form-control" value="5 TO 10 YEARS" readonly></td>
						<td><input type="number" name="stay_male_5" id="stay_male_5" class="form-control"></td>
						<td><input type="number" name="stay_female_5" id="stay_female_5" class="form-control"></td>
						<td><input type="number" name="stay_MCH_5" id="stay_MCH_5" class="form-control"></td>
						<td><input type="number" name="stay_FCH_5" id="stay_FCH_5" class="form-control"></td>
						<td><input type="number" name="stay_total_5" id="stay_total_5" class="form-control"></td>
						<td><input type="number" name="stay_DM_5" id="stay_DM_5" class="form-control"></td>
						<td><input type="number" name="stay_progressive_5" id="stay_progressive_5" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="stay_period_6" id="stay_period_6" class="form-control" value="10 TO 20 YEARS" readonly></td>
						<td><input type="number" name="stay_male_6" id="stay_male_6" class="form-control"></td>
						<td><input type="number" name="stay_female_6" id="stay_female_6" class="form-control"></td>
						<td><input type="number" name="stay_MCH_6" id="stay_MCH_6" class="form-control"></td>
						<td><input type="number" name="stay_FCH_6" id="stay_FCH_6" class="form-control"></td>
						<td><input type="number" name="stay_total_6" id="stay_total_6" class="form-control"></td>
						<td><input type="number" name="stay_DM_6" id="stay_DM_6" class="form-control"></td>
						<td><input type="number" name="stay_progressive_6" id="stay_progressive_6" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="stay_period_total" id="stay_period_total" class="form-control" value="TOTAL" readonly></td>
						<td><input type="number" name="stay_male_total" id="stay_male_total" class="form-control"></td>
						<td><input type="number" name="stay_female_total" id="stay_female_total" class="form-control"></td>
						<td><input type="number" name="stay_MCH_total" id="stay_MCH_total" class="form-control"></td>
						<td><input type="number" name="stay_FCH_total" id="stay_FCH_total" class="form-control"></td>
						<td><input type="number" name="stay_total_total" id="stay_total_total" class="form-control"></td>
						<td><input type="number" name="stay_DM_total" id="stay_DM_total" class="form-control"></td>
						<td><input type="number" name="stay_progressive_total" id="stay_progressive_total" class="form-control"></td>
					</tr>
				</tbody>
			</table>

			<h4>OUTREACH SERVICES (OUTDOO)</h4><br>
			<table class="table table-bordered">
				<thead>
					<td></td>
					<td>MALE</td>
					<td>FEMALE</td>
					<td colspan="2">
						<center>CHILD</center>
						<table class="table table-bordered">
							<thead>
								<td><center>MCH</center></td>
								<td><center>FCH</center></td>
							</thead>
						</table>
					</td>
					<td>TOTAL</td>
					<td>DM</td>
					<td>PROGRESSIVE</td>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="service_place_1" id="service_place_1" class="form-control" value="UP TO 6 MONTHS" readonly></td>
						<td><input type="number" name="service_male_1" id="service_male_1" class="form-control"></td>
						<td><input type="number" name="service_female_1" id="service_female_1" class="form-control"></td>
						<td><input type="number" name="service_MCH_1" id="service_MCH_1" class="form-control"></td>
						<td><input type="number" name="service_FCH_1" id="service_FCH_1" class="form-control"></td>
						<td><input type="number" name="service_total_1" id="service_total_1" class="form-control"></td>
						<td><input type="number" name="service_DM_1" id="service_DM_1" class="form-control"></td>
						<td><input type="number" name="service_progressive_1" id="service_progressive_1" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="service_place_2" id="service_place_2" class="form-control" value="6 TO 12 MONTHS" readonly></td>
						<td><input type="number" name="service_male_2" id="service_male_2" class="form-control"></td>
						<td><input type="number" name="service_female_2" id="service_female_2" class="form-control"></td>
						<td><input type="number" name="service_MCH_2" id="service_MCH_2" class="form-control"></td>
						<td><input type="number" name="service_FCH_2" id="service_FCH_2" class="form-control"></td>
						<td><input type="number" name="service_total_2" id="service_total_2" class="form-control"></td>
						<td><input type="number" name="service_DM_2" id="service_DM_2" class="form-control"></td>
						<td><input type="number" name="service_progressive_2" id="service_progressive_2" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="service_place_3" id="service_place_3" class="form-control" value="1 TO 2 YEARS" readonly></td>
						<td><input type="number" name="service_male_3" id="service_male_3" class="form-control"></td>
						<td><input type="number" name="service_female_3" id="service_female_3" class="form-control"></td>
						<td><input type="number" name="service_MCH_3" id="service_MCH_3" class="form-control"></td>
						<td><input type="number" name="service_FCH_3" id="service_FCH_3" class="form-control"></td>
						<td><input type="number" name="service_total_3" id="service_total_3" class="form-control"></td>
						<td><input type="number" name="service_DM_3" id="service_DM_3" class="form-control"></td>
						<td><input type="number" name="service_progressive_3" id="service_progressive_3" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="service_place_4" id="service_place_4" class="form-control" value="2 TO 5 YEARS" readonly></td>
						<td><input type="number" name="service_male_4" id="service_male_4" class="form-control"></td>
						<td><input type="number" name="service_female_4" id="service_female_4" class="form-control"></td>
						<td><input type="number" name="service_MCH_4" id="service_MCH_4" class="form-control"></td>
						<td><input type="number" name="service_FCH_4" id="service_FCH_4" class="form-control"></td>
						<td><input type="number" name="service_total_4" id="service_total_4" class="form-control"></td>
						<td><input type="number" name="service_DM_4" id="service_DM_4" class="form-control"></td>
						<td><input type="number" name="service_progressive_4" id="service_progressive_4" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="service_place_5" id="service_place_5" class="form-control" value="5 TO 10 YEARS" readonly></td>
						<td><input type="number" name="service_male_5" id="service_male_5" class="form-control"></td>
						<td><input type="number" name="service_female_5" id="service_female_5" class="form-control"></td>
						<td><input type="number" name="service_MCH_5" id="service_MCH_5" class="form-control"></td>
						<td><input type="number" name="service_FCH_5" id="service_FCH_5" class="form-control"></td>
						<td><input type="number" name="service_total_5" id="service_total_5" class="form-control"></td>
						<td><input type="number" name="service_DM_5" id="service_DM_5" class="form-control"></td>
						<td><input type="number" name="service_progressive_5" id="service_progressive_5" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="service_place_6" id="service_place_6" class="form-control" value="10 TO 20 YEARS" readonly></td>
						<td><input type="number" name="service_male_6" id="service_male_6" class="form-control"></td>
						<td><input type="number" name="service_female_6" id="service_female_6" class="form-control"></td>
						<td><input type="number" name="service_MCH_6" id="service_MCH_6" class="form-control"></td>
						<td><input type="number" name="service_FCH_6" id="service_FCH_6" class="form-control"></td>
						<td><input type="number" name="service_total_6" id="service_total_6" class="form-control"></td>
						<td><input type="number" name="service_DM_6" id="service_DM_6" class="form-control"></td>
						<td><input type="number" name="service_progressive_6" id="service_progressive_6" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="service_place_total" id="service_place_total" class="form-control" value="TOTAL" readonly></td>
						<td><input type="number" name="service_male_total" id="service_male_total" class="form-control"></td>
						<td><input type="number" name="service_female_total" id="service_female_total" class="form-control"></td>
						<td><input type="number" name="service_MCH_total" id="service_MCH_total" class="form-control"></td>
						<td><input type="number" name="service_FCH_total" id="service_FCH_total" class="form-control"></td>
						<td><input type="number" name="service_total_total" id="service_total_total" class="form-control"></td>
						<td><input type="number" name="service_DM_total" id="service_DM_total" class="form-control"></td>
						<td><input type="number" name="service_progressive_total" id="service_progressive_total" class="form-control"></td>
					</tr>
				</tbody>
			</table>

			<h4>INFORMATION ON CRIMINAL PATIENTS ADMITED</h4><br>
			<table class="table table-bordered">
				<thead>
					<td>Sr. No.</td>
					<td>Name of the Pts</td>
					<td>G R No.</td>
					<td>Date of <br> Admission</td>
					<td>MLC No.</td>
					<td></td>
					<td>IPC <br> Crime Section</td>
					<td></td>
					<td>Diagnosis</td>
				</thead>
				<tbody>
					<tr>
						<td class="sr-no">1</td>
						<td><input type="text" name="patient_name_1" id="patient_name_1" class="form-control"></td>
						<td><input type="number" name="gr_no_1" id="gr_no_1" class="form-control"></td>
						<td><input type="number" name="admission_1" id="admission_1" class="form-control"></td>
						<td><input type="number" name="MLC_no_1" id="MLC_no_1" class="form-control"></td>
						<td><input type="text" name="MLC_next_1" id="MLC_next_1" class="form-control"></td>
						<td><input type="text" name="IPC_1" id="IPC_1" class="form-control"></td>
						<td><input type="text" name="IPC_next_1" id="IPC_next_1" class="form-control"></td>
						<td><input type="text" name="diagnosis_1" id="diagnosis_1" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">2</td>
						<td><input type="text" name="patient_name_2" id="patient_name_2" class="form-control"></td>
						<td><input type="number" name="gr_no_2" id="gr_no_2" class="form-control"></td>
						<td><input type="number" name="admission_2" id="admission_2" class="form-control"></td>
						<td><input type="number" name="MLC_no_2" id="MLC_no_2" class="form-control"></td>
						<td><input type="text" name="MLC_next_2" id="MLC_next_2" class="form-control"></td>
						<td><input type="text" name="IPC_2" id="IPC_2" class="form-control"></td>
						<td><input type="text" name="IPC_next_2" id="IPC_next_2" class="form-control"></td>
						<td><input type="text" name="diagnosis_2" id="diagnosis_2" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">3</td>
						<td><input type="text" name="patient_name_3" id="patient_name_3" class="form-control"></td>
						<td><input type="number" name="gr_no_3" id="gr_no_3" class="form-control"></td>
						<td><input type="number" name="admission_3" id="admission_3" class="form-control"></td>
						<td><input type="number" name="MLC_no_3" id="MLC_no_3" class="form-control"></td>
						<td><input type="text" name="MLC_next_3" id="MLC_next_3" class="form-control"></td>
						<td><input type="text" name="IPC_3" id="IPC_3" class="form-control"></td>
						<td><input type="text" name="IPC_next_3" id="IPC_next_3" class="form-control"></td>
						<td><input type="text" name="diagnosis_3" id="diagnosis_3" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">4</td>
						<td><input type="text" name="patient_name_4" id="patient_name_4" class="form-control"></td>
						<td><input type="number" name="gr_no_4" id="gr_no_4" class="form-control"></td>
						<td><input type="number" name="admission_4" id="admission_4" class="form-control"></td>
						<td><input type="number" name="MLC_no_4" id="MLC_no_4" class="form-control"></td>
						<td><input type="text" name="MLC_next_4" id="MLC_next_4" class="form-control"></td>
						<td><input type="text" name="IPC_4" id="IPC_4" class="form-control"></td>
						<td><input type="text" name="IPC_next_4" id="IPC_next_4" class="form-control"></td>
						<td><input type="text" name="diagnosis_4" id="diagnosis_4" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">5</td>
						<td><input type="text" name="patient_name_5" id="patient_name_5" class="form-control"></td>
						<td><input type="number" name="gr_no_5" id="gr_no_5" class="form-control"></td>
						<td><input type="number" name="admission_5" id="admission_5" class="form-control"></td>
						<td><input type="number" name="MLC_no_5" id="MLC_no_5" class="form-control"></td>
						<td><input type="text" name="MLC_next_5" id="MLC_next_5" class="form-control"></td>
						<td><input type="text" name="IPC_5" id="IPC_5" class="form-control"></td>
						<td><input type="text" name="IPC_next_5" id="IPC_next_5" class="form-control"></td>
						<td><input type="text" name="diagnosis_5" id="diagnosis_5" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">6</td>
						<td><input type="text" name="patient_name_6" id="patient_name_6" class="form-control"></td>
						<td><input type="number" name="gr_no_6" id="gr_no_6" class="form-control"></td>
						<td><input type="number" name="admission_6" id="admission_6" class="form-control"></td>
						<td><input type="number" name="MLC_no_6" id="MLC_no_6" class="form-control"></td>
						<td><input type="text" name="MLC_next_6" id="MLC_next_6" class="form-control"></td>
						<td><input type="text" name="IPC_6" id="IPC_6" class="form-control"></td>
						<td><input type="text" name="IPC_next_6" id="IPC_next_6" class="form-control"></td>
						<td><input type="text" name="diagnosis_6" id="diagnosis_6" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">7</td>
						<td><input type="text" name="patient_name_7" id="patient_name_7" class="form-control"></td>
						<td><input type="number" name="gr_no_7" id="gr_no_7" class="form-control"></td>
						<td><input type="number" name="admission_7" id="admission_7" class="form-control"></td>
						<td><input type="number" name="MLC_no_7" id="MLC_no_7" class="form-control"></td>
						<td><input type="text" name="MLC_next_7" id="MLC_next_7" class="form-control"></td>
						<td><input type="text" name="IPC_7" id="IPC_7" class="form-control"></td>
						<td><input type="text" name="IPC_next_7" id="IPC_next_7" class="form-control"></td>
						<td><input type="text" name="diagnosis_7" id="diagnosis_7" class="form-control"></td>
					</tr>
				</tbody>
			</table>
		</form>
		<input type="submit" name="submit" id="submit" value="Save" class="btn btn-primary">
	</section>

</body>
</html>