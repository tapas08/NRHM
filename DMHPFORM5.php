<?php 
require_once 'core/init.php';

$errors = [];

if (Input::exists()){
	$db = DB::getInstance();
	$doctors_id = substr(uniqid(), 0, 5);

	for ($i = 1; $i <= 15; $i++){
		$form_3 = $db->insert('DMHP_form_5', array(
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
	<title>FORM 5</title>
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
			<h4>Form 4</h4>
			<p>Duration of illness at the time of the first contact of the patients registered as part of total DMHP</p>
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
					<label for="population">Total Population of the District</label>
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
			<td>Name Of Drugs</td>
			<td>Opening Balance</td>
			<td>Drugs received in the last month</td>
			<td>Expiry Date</td>
			<td>Total Number of Patient who collect the drugs</td>
			<td>Number of Tablets dispensed</td>
			<td>Balance of the end of the month</td>
		</thead>

		<tbody>

			<tr>
				<td><textarea name="drug_name_0" id="drug_name_0" class="form-control" cols="28" rows="2" readonly>Tab Chlorpromazine 100 mg</textarea></td>
				<td><input type="number" name="opening_balance_0" id="opening_balance_0" class="form-control"></td>
				<td><input type="number" name="drugs_received_0" id="drugs_received_0" class="form-control"></td>
				<td><input type="number" name="expiry_date_0" id="expiry_date_0" class="form-control"></td>
				<td><input type="number" name="drugs_collected_0" id="drugs_collected_0" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_0" id="tablets_dispensed_0" class="form-control"></td>
				<td><input type="number" name="end_month_balance_0" id="end_month_balance_0" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_1" id="drug_name_1" class="form-control" cols="28" rows="1" readonly>Tab Respiridon 2 mg</textarea></td>
				<td><input type="number" name="opening_balance_1" id="opening_balance_1" class="form-control"></td>
				<td><input type="number" name="drugs_received_1" id="drugs_received_1" class="form-control"></td>
				<td><input type="number" name="expiry_date_1" id="expiry_date_1" class="form-control"></td>
				<td><input type="number" name="drugs_collected_1" id="drugs_collected_1" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_1" id="tablets_dispensed_1" class="form-control"></td>
				<td><input type="number" name="end_month_balance_1" id="end_month_balance_1" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_2" id="drug_name_2" class="form-control" cols="25" rows="1" readonly>Inj Flupennazine 25 mg</textarea></td>
				<td><input type="number" name="opening_balance_2" id="opening_balance_2" class="form-control"></td>
				<td><input type="number" name="drugs_received_2" id="drugs_received_2" class="form-control"></td>
				<td><input type="number" name="expiry_date_2" id="expiry_date_2" class="form-control"></td>
				<td><input type="number" name="drugs_collected_2" id="drugs_collected_2" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_2" id="tablets_dispensed_2" class="form-control"></td>
				<td><input type="number" name="end_month_balance_2" id="end_month_balance_2" class="form-control"></td>
			</tr>


			<tr>
				<td><textarea name="drug_name_3" id="drug_name_3" class="form-control" cols="25" rows="1" readonly>Inj Promethazine 50 mg</textarea></td>
				<td><input type="number" name="opening_balance_3" id="opening_balance_3" class="form-control"></td>
				<td><input type="number" name="drugs_received_3" id="drugs_received_3" class="form-control"></td>
				<td><input type="number" name="expiry_date_3" id="expiry_date_3" class="form-control"></td>
				<td><input type="number" name="drugs_collected_3" id="drugs_collected_3" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_3" id="tablets_dispensed_3" class="form-control"></td>
				<td><input type="number" name="end_month_balance_3" id="end_month_balance_3" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_4" id="drug_name_4" class="form-control" cols="25" rows="1" readonly>Inj Haloperidol 5 mg</textarea></td>
				<td><input type="number" name="opening_balance_4" id="opening_balance_4" class="form-control"></td>
				<td><input type="number" name="drugs_received_4" id="drugs_received_4" class="form-control"></td>
				<td><input type="number" name="expiry_date_4" id="expiry_date_4" class="form-control"></td>
				<td><input type="number" name="drugs_collected_4" id="drugs_collected_4" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_4" id="tablets_dispensed_4" class="form-control"></td>
				<td><input type="number" name="end_month_balance_4" id="end_month_balance_4" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_5" id="drug_name_5" class="form-control" cols="25" rows="2" readonly>Tab lithium carbonate 300 mg</textarea></td>
				<td><input type="number" name="opening_balance_5" id="opening_balance_5" class="form-control"></td>
				<td><input type="number" name="drugs_received_5" id="drugs_received_5" class="form-control"></td>
				<td><input type="number" name="expiry_date_5" id="expiry_date_5" class="form-control"></td>
				<td><input type="number" name="drugs_collected_5" id="drugs_collected_5" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_5" id="tablets_dispensed_5" class="form-control"></td>
				<td><input type="number" name="end_month_balance_5" id="end_month_balance_5" class="form-control"></td>
			</tr>


			<tr>
				<td><textarea name="drug_name_6" id="drug_name_6" class="form-control" cols="25" rows="2" readonly>Tab sodium Valporate 200 mg</textarea></td>
				<td><input type="number" name="opening_balance_6" id="opening_balance_6" class="form-control"></td>
				<td><input type="number" name="drugs_received_6" id="drugs_received_6" class="form-control"></td>
				<td><input type="number" name="expiry_date_6" id="expiry_date_6" class="form-control"></td>
				<td><input type="number" name="drugs_collected_6" id="drugs_collected_6" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_6" id="tablets_dispensed_6" class="form-control"></td>
				<td><input type="number" name="end_month_balance_6" id="end_month_balance_6" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_7" id="drug_name_7" class="form-control" cols="25" rows="2" readonly>Tab phenobarbitone 30/60 mg</textarea></td>
				<td><input type="number" name="opening_balance_7" id="opening_balance_7" class="form-control"></td>
				<td><input type="number" name="drugs_received_7" id="drugs_received_7" class="form-control"></td>
				<td><input type="number" name="expiry_date_7" id="expiry_date_7" class="form-control"></td>
				<td><input type="number" name="drugs_collected_7" id="drugs_collected_7" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_7" id="tablets_dispensed_7" class="form-control"></td>
				<td><input type="number" name="end_month_balance_7" id="end_month_balance_7" class="form-control"></td>
			</tr>
		
			<tr>
				<td><textarea name="drug_name_8" id="drug_name_8" class="form-control" cols="25" rows="2" readonly>Cab Dipheny hydanation 100 mg</textarea></td>
				<td><input type="number" name="opening_balance_8" id="opening_balance_8" class="form-control"></td>
				<td><input type="number" name="drugs_received_8" id="drugs_received_8" class="form-control"></td>
				<td><input type="number" name="expiry_date_8" id="expiry_date_8" class="form-control"></td>
				<td><input type="number" name="drugs_collected_8" id="drugs_collected_8" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_8" id="tablets_dispensed_8" class="form-control"></td>
				<td><input type="number" name="end_month_balance_8" id="end_month_balance_8" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_9" id="drug_name_9" class="form-control" cols="25" rows="2" readonly>Tab Emipramin / Amitryptaline 75 mg</textarea></td>
				<td><input type="number" name="opening_balance_9" id="opening_balance_9" class="form-control"></td>
				<td><input type="number" name="drugs_received_9" id="drugs_received_9" class="form-control"></td>
				<td><input type="number" name="expiry_date_9" id="expiry_date_9" class="form-control"></td>
				<td><input type="number" name="drugs_collected_9" id="drugs_collected_9" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_9" id="tablets_dispensed_9" class="form-control"></td>
				<td><input type="number" name="end_month_balance_9" id="end_month_balance_9" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_10" id="drug_name_10" class="form-control" cols="25" rows="1" readonly>Cap Fluoxine</textarea></td>
				<td><input type="number" name="opening_balance_10" id="opening_balance_10" class="form-control"></td>
				<td><input type="number" name="drugs_received_10" id="drugs_received_10" class="form-control"></td>
				<td><input type="number" name="expiry_date_10" id="expiry_date_10" class="form-control"></td>
				<td><input type="number" name="drugs_collected_10" id="drugs_collected_10" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_10" id="tablets_dispensed_10" class="form-control"></td>
				<td><input type="number" name="end_month_balance_10" id="end_month_balance_10" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_11" id="drug_name_11" class="form-control" cols="25" rows="1" readonly>Other-T. Pacitone</textarea></td>
				<td><input type="number" name="opening_balance_11" id="opening_balance_11" class="form-control"></td>
				<td><input type="number" name="drugs_received_11" id="drugs_received_11" class="form-control"></td>
				<td><input type="number" name="expiry_date_11" id="expiry_date_11" class="form-control"></td>
				<td><input type="number" name="drugs_collected_11" id="drugs_collected_11" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_11" id="tablets_dispensed_11" class="form-control"></td>
				<td><input type="number" name="end_month_balance_11" id="end_month_balance_11" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_12" id="drug_name_12" class="form-control" cols="25" rows="1" readonly>Other-T. Haloperidol</textarea></td>
				<td><input type="number" name="opening_balance_12" id="opening_balance_12" class="form-control"></td>
				<td><input type="number" name="drugs_received_12" id="drugs_received_12" class="form-control"></td>
				<td><input type="number" name="expiry_date_12" id="expiry_date_12" class="form-control"></td>
				<td><input type="number" name="drugs_collected_12" id="drugs_collected_12" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_12" id="tablets_dispensed_12" class="form-control"></td>
				<td><input type="number" name="end_month_balance_12" id="end_month_balance_12" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_13" id="drug_name_13" class="form-control" cols="25" rows="1" readonly>Other-T. Stablon</textarea></td>
				<td><input type="number" name="opening_balance_13" id="opening_balance_13" class="form-control"></td>
				<td><input type="number" name="drugs_received_13" id="drugs_received_13" class="form-control"></td>
				<td><input type="number" name="expiry_date_13" id="expiry_date_13" class="form-control"></td>
				<td><input type="number" name="drugs_collected_13" id="drugs_collected_13" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_13" id="tablets_dispensed_13" class="form-control"></td>
				<td><input type="number" name="end_month_balance_13" id="end_month_balance_13" class="form-control"></td>
			</tr>

			<tr>
				<td><textarea name="drug_name_14" id="drug_name_14" class="form-control" cols="25" rows="2" readonly>Other-T. Escitlopram 10 mg</textarea></td>
				<td><input type="number" name="opening_balance_14" id="opening_balance_14" class="form-control"></td>
				<td><input type="number" name="drugs_received_14" id="drugs_received_14" class="form-control"></td>
				<td><input type="number" name="expiry_date_14" id="expiry_date_14" class="form-control"></td>
				<td><input type="number" name="drugs_collected_14" id="drugs_collected_14" class="form-control"></td>
				<td><input type="number" name="tablets_dispensed_14" id="tablets_dispensed_14" class="form-control"></td>
				<td><input type="number" name="end_month_balance_14" id="end_month_balance_14" class="form-control"></td>
			</tr>

		</tbody>
	</table>
	</form>
	<input type="submit" name="submit" id="name" form="DMHP_form" class="btn btn-default" value="Save &amp; Continue">
	<input type="button" name="print" id="print" class="btn btn-default" value="Print" onclick="printForm();">
	</section>

</body>
</html>