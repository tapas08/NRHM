<?php 
require_once 'core/init.php';

$errors = [];

if (Input::exists()){
	$db = DB::getInstance();
	$doctors_id = substr(uniqid(), 0, 5);

	for ($i = 1; $i <= 15; $i++){
		$form_3 = $db->insert('DMHP_form_3', array(
				'drug_name' => Input::get("drug_name_$i"),
				'opening_balance' => Input::get("opening_balance_$i"),
				'drugs_received' => Input::get("drugs_received_$i"),
				'expiry_date' => Input::get("expiry_date_$i"),
				'drugs_collected' => Input::get("drugs_collected_$i"),
				'tablets_dispened' => Input::get("tablets_dispened_$i"),
				'end_month_balance' => Input::get("end_month_balance_$i"),
				'date' => date('m-d-Y')
			));

		if (!$form_3){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}

	$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 3',
			'date' => date('m-d-Y'),
			'population' => Input::get('population'),
			'doctors_Id' => $doctors_id
		));

	$form_details = $db->insert('form_details', array(
			'form' => 'DMHP FORM 3',
			'no_of_taluka' => Input::get('no_of_hospital'),
			'patients_on_medication' => Input::get('no_of_patients'),
			'month' => Input::get('month'),
			'doctors_Id' => $doctors_id
		));

	if ($doctors_details){
		header('Location:DMHPFORM4.php');
	}else{
		$errors[] = "Error! Something went wrong please try again.";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>FORM 3</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<?php require_once 'templates/header.php'; ?>
	<?php require_once 'templates/navbar.php'; ?>

	<section class="container-fluid col-md-12">

		<?php
		if (count($errors) > 0){
			foreach ($errors as $error){
				echo "<p class='alert'>{$error}</p>";
			}
		}
		?>
		<form action="" method="POST" id='DMHP_form'>
		<center>
			<h4>Form 3</h4>
			<p><u>Stock Balance of the essential drugs in the District</u></p>
		</center>
		<br>
		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="doctor_name">Name of Doctor </label>
				</div>
				<div class="col-md-6">
					<input type="text" id="doctor_name" name="doctor_name" class="form-control">
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="no_of_hospital">No of Taluka Hospital and one District Mental Health Clinic in the District</label>
				</div>
				<div class="col-md-6">
					<input type="text" id="no_of_hospital" name="no_of_hospital" class="form-control">
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="month">Report for the month of </label>
				</div>
				<div class="col-md-6">
					<input type="month" id="month" name="month" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="population">Total Population Covered </label>
				</div>
				<div class="col-md-6">
					<input type="text" id="population" name="population" class="form-control">
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="no_of_patients">Total No. of Patients of medication in the District</label>
				</div>
				<div class="col-md-6">
					<input type="text" id="no_of_patients" name="no_of_patients" class="form-control">
				</div>
			</div>
		</div>

		<table class="table table-bordered">
			<thead>
					<td>Name of Drugs</td>
					<td>Opening Balance</td>
					<td>Drugs received in the last month</td>
					<td>Expiry Date</td>
					<td>Total Number of Patient who collect the drugs</td>
					<td>Number of Tablets dispensed</td>
					<td>Balance of the end of the month</td>
			</thead>	

			<tbody>
				<tr>
					<td><textarea name="drug_name_1" id="drug_name_1" class="form-control" cols="25" rows="2" readonly>Total Chlopromazine 100 mg</textarea></td>
					<td><input type="number" name="opening_balance_1" id="opening_balance_1" class="form-control"></td>
					<td><input type="number" name="drugs_received_1" id="drugs_received_1" class="form-control"></td>
					<td><input type="number" name="expiry_date_1" id="expiry_date_1" class="form-control"></td>
					<td><input type="number" name="drugs_collected_1" id="drugs_collected_1" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_1" id="tablets_dispened_1" class="form-control"></td>
					<td><input type="number" name="end_month_balance_1" id="end_month_balance_1" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_2" id="drug_name_2" class="form-control" cols="25" rows="2" readonly>Tab Respiridon 2 mg</textarea></td>
					<td><input type="number" name="opening_balance_2" id="opening_balance_2" class="form-control"></td>
					<td><input type="number" name="drugs_received_2" id="drugs_received_2" class="form-control"></td>
					<td><input type="number" name="expiry_date_2" id="expiry_date_2" class="form-control"></td>
					<td><input type="number" name="drugs_collected_2" id="drugs_collected_2" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_2" id="tablets_dispened_2" class="form-control"></td>
					<td><input type="number" name="end_month_balance_2" id="end_month_balance_2" class="form-control"></td>
				</tr>	

				<tr>	
					<td><textarea name="drug_name_3" id="drug_name_3" class="form-control" cols="25" rows="2" readonly>Inj Flupennazine 25 mg</textarea></td>
					<td><input type="number" name="opening_balance_3" id="opening_balance_3" class="form-control"></td>
					<td><input type="number" name="drugs_received_3" id="drugs_received_3" class="form-control"></td>
					<td><input type="number" name="expiry_date_3" id="expiry_date_3" class="form-control"></td>
					<td><input type="number" name="drugs_collected_3" id="drugs_collected_3" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_3" id="tablets_dispened_3" class="form-control"></td>
					<td><input type="number" name="end_month_balance_3" id="end_month_balance_3" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_4" id="drug_name_4" class="form-control" cols="25" rows="2" readonly>Inj Promethazine 50 mg</textarea></td>
					<td><input type="number" name="opening_balance_4" id="opening_balance_4" class="form-control"></td>
					<td><input type="number" name="drugs_received_4" id="drugs_received_4" class="form-control"></td>
					<td><input type="number" name="expiry_date_4" id="expiry_date_4" class="form-control"></td>
					<td><input type="number" name="drugs_collected_4" id="drugs_collected_4" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_4" id="tablets_dispened_4" class="form-control"></td>
					<td><input type="number" name="end_month_balance_4" id="end_month_balance_4" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_5" id="drug_name_5" class="form-control" cols="25" rows="2" readonly>Inj Haloperidol 5 mg</textarea></td>
					<td><input type="number" name="opening_balance_5" id="opening_balance_5" class="form-control"></td>
					<td><input type="number" name="drugs_received_5" id="drugs_received_5" class="form-control"></td>
					<td><input type="number" name="expiry_date_5" id="expiry_date_5" class="form-control"></td>
					<td><input type="number" name="drugs_collected_5" id="drugs_collected_5" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_5" id="tablets_dispened_5" class="form-control"></td>
					<td><input type="number" name="end_month_balance_5" id="end_month_balance_5" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_6" id="drug_name_6" class="form-control" cols="25" rows="2" readonly>Tab lithium earbonate 300 mg</textarea></td>
					<td><input type="number" name="opening_balance_6" id="opening_balance_6" class="form-control"></td>
					<td><input type="number" name="drugs_received_6" id="drugs_received_6" class="form-control"></td>
					<td><input type="number" name="expiry_date_6" id="expiry_date_6" class="form-control"></td>
					<td><input type="number" name="drugs_collected_6" id="drugs_collected_6" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_6" id="tablets_dispened_6" class="form-control"></td>
					<td><input type="number" name="end_month_balance_6" id="end_month_balance_6" class="form-control"></td>
				</tr>


				<tr>
					<td><textarea name="drug_name_7" id="drug_name_7" class="form-control" cols="25" rows="2" readonly>Tab sodium Valporate 200 mg</textarea></td>
					<td><input type="number" name="opening_balance_7" id="opening_balance_7" class="form-control"></td>
					<td><input type="number" name="drugs_received_7" id="drugs_received_7" class="form-control"></td>
					<td><input type="number" name="expiry_date_7" id="expiry_date_7" class="form-control"></td>
					<td><input type="number" name="drugs_collected_7" id="drugs_collected_7" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_7" id="tablets_dispened_7" class="form-control"></td>
					<td><input type="number" name="end_month_balance_7" id="end_month_balance_7" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_8" id="drug_name_8" class="form-control" cols="25" rows="2" readonly>Tab Phenobarbitone 30/60 mg</textarea></td>
					<td><input type="number" name="opening_balance_8" id="opening_balance_8" class="form-control"></td>
					<td><input type="number" name="drugs_received_8" id="drugs_received_8" class="form-control"></td>
					<td><input type="number" name="expiry_date_8" id="expiry_date_8" class="form-control"></td>
					<td><input type="number" name="drugs_collected_8" id="drugs_collected_8" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_8" id="tablets_dispened_8" class="form-control"></td>
					<td><input type="number" name="end_month_balance_8" id="end_month_balance_8" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_9" id="drug_name_9" class="form-control" cols="25" rows="2" readonly>Cab Dipheny bydanation 100 mg</textarea></td>
					<td><input type="number" name="opening_balance_9" id="opening_balance_9" class="form-control"></td>
					<td><input type="number" name="drugs_received_9" id="drugs_received_9" class="form-control"></td>
					<td><input type="number" name="expiry_date_9" id="expiry_date_9" class="form-control"></td>
					<td><input type="number" name="drugs_collected_9" id="drugs_collected_9" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_9" id="tablets_dispened_9" class="form-control"></td>
					<td><input type="number" name="end_month_balance_9" id="end_month_balance_9" class="form-control"></td>
				</tr>


				<tr>
					<td><textarea name="drug_name_10" id="drug_name_10" class="form-control" cols="25" rows="3" readonly>Tab Emipramin/Amitryptaline 75 mg</textarea></td>
					<td><input type="number" name="opening_balance_10" id="opening_balance_10" class="form-control"></td>
					<td><input type="number" name="drugs_received_10" id="drugs_received_10" class="form-control"></td>
					<td><input type="number" name="expiry_date_10" id="expiry_date_10" class="form-control"></td>
					<td><input type="number" name="drugs_collected_10" id="drugs_collected_10" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_10" id="tablets_dispened_10" class="form-control"></td>
					<td><input type="number" name="end_month_balance_10" id="end_month_balance_10" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_11" id="drug_name_11" class="form-control" cols="25" rows="2" readonly>Cap Fluoxine</textarea></td>
					<td><input type="number" name="opening_balance_11" id="opening_balance_11" class="form-control"></td>
					<td><input type="number" name="drugs_received_11" id="drugs_received_11" class="form-control"></td>
					<td><input type="number" name="expiry_date_11" id="expiry_date_11" class="form-control"></td>
					<td><input type="number" name="drugs_collected_11" id="drugs_collected_11" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_11" id="tablets_dispened_11" class="form-control"></td>
					<td><input type="number" name="end_month_balance_11" id="end_month_balance_11" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_12" id="drug_name_12" class="form-control" cols="25" rows="2" readonly>Other-T. Pacitone</textarea></td>
					<td><input type="number" name="opening_balance_12" id="opening_balance_12" class="form-control"></td>
					<td><input type="number" name="drugs_received_12" id="drugs_received_12" class="form-control"></td>
					<td><input type="number" name="expiry_date_12" id="expiry_date_12" class="form-control"></td>
					<td><input type="number" name="drugs_collected_12" id="drugs_collected_12" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_12" id="tablets_dispened_12" class="form-control"></td>
					<td><input type="number" name="end_month_balance_12" id="end_month_balance_12" class="form-control"></td>
				</tr>


				<tr>
					<td><textarea name="drug_name_13" id="drug_name_13" class="form-control" cols="25" rows="2" readonly>Other-T. Haloperidol</textarea></td>
					<td><input type="number" name="opening_balance_13" id="opening_balance_13" class="form-control"></td>
					<td><input type="number" name="drugs_received_13" id="drugs_received_13" class="form-control"></td>
					<td><input type="number" name="expiry_date_13" id="expiry_date_13" class="form-control"></td>
					<td><input type="number" name="drugs_collected_13" id="drugs_collected_13" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_13" id="tablets_dispened_13" class="form-control"></td>
					<td><input type="number" name="end_month_balance_13" id="end_month_balance_13" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_14" id="drug_name_14" class="form-control" cols="25" rows="2" readonly>Other-T. Stablon</textarea></td>
					<td><input type="number" name="opening_balance_14" id="opening_balance_14" class="form-control"></td>
					<td><input type="number" name="drugs_received_14" id="drugs_received_14" class="form-control"></td>
					<td><input type="number" name="expiry_date_14" id="expiry_date_14" class="form-control"></td>
					<td><input type="number" name="drugs_collected_14" id="drugs_collected_14" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_14" id="tablets_dispened_14" class="form-control"></td>
					<td><input type="number" name="end_month_balance_14" id="end_month_balance_14" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="drug_name_15" id="drug_name_15" class="form-control" cols="25" rows="2" readonly>Other-Escitlopram 10 mg</textarea></td>
					<td><input type="number" name="opening_balance_15" id="opening_balance_15" class="form-control"></td>
					<td><input type="number" name="drugs_received_15" id="drugs_received_15" class="form-control"></td>
					<td><input type="number" name="expiry_date_15" id="expiry_date_15" class="form-control"></td>
					<td><input type="number" name="drugs_collected_15" id="drugs_collected_15" class="form-control"></td>
					<td><input type="number" name="tablets_dispened_15" id="tablets_dispened_15" class="form-control"></td>
					<td><input type="number" name="end_month_balance_15" id="end_month_balance_15" class="form-control"></td>
				</tr>
			</tbody>	
		</table>
		</form>
		<input type="submit" name="submit" id="name" form="DMHP_form" class="btn btn-default" value="Save &amp; Continue">
		<input type="button" name="print" id="print" class="btn btn-default" value="Print" onclick="printForm();">
	</section>
</body>
</html>