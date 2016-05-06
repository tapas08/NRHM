<?php 
require_once 'core/init.php';

$errors = [];

if (Input::exists()){

	$db = DB::getInstance();
	$doctors_id = substr(uniqid(), 0, 5);

	for ($i = 0; $i <= 7; $i++){
		$form_4 = $db->insert('DMHP_form_4', array(
			'diagnoses' => Input::get("diag_name_$i"),
			'less_than_month' => Input::get("less_than_month_$i"),
			'1_6_month' => Input::get("1_6_month_$i"),
			'6_12_month' => Input::get("6_12_month_$i"),
			'12_24_month' => Input::get("12_24_month_$i"),
			"24_month_above" => Input::get("24_month_above_$i"),
			'total' => Input::get("total_$i");
		));	

		if (!$form_4){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}

	$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 4',
			'date' => date('m-d-Y'),
			'doctors_Id' => $doctors_id
		));

	$form_details = $db->insert('form_details', array(
			'form' => 'DMHP FORM 4',
			'district' => Input::get('district'),
			'no_of_phu' => Input::get('no_of_phu'),
			'month' => Input::get('month'),
			'doctors_Id' => $doctors_id
		));

	if ($doctors_entry){
		header('Location:DMHPFORM5.php');
	}else{
		$errors[] = "Error! Something went wrong please try again.";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM 4</title>
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

		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="district">Name of District </label>
				</div>
				<div class="col-md-6">
					<input type="text" id="district" name="district" class="form-control">
				</div>
			</div>
		</div>

		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="no_of_phu">Total number of PHC/PHU/GAD</label>
				</div>
				<div class="col-md-6">
					<input type="text" id="no_of_phu" name="no_of_phu" class="form-control">
				</div>
			</div>
		</div>

		<table class="table table-bordered">

			<thead>

				<td>Diagnosis</td>
				<td>Less than 1 month</td>
				<td>1-6 Months</td>
				<td>6-12 Months</td>
				<td>12-24 Months</td>
				<td>More than 24 Months</td>
				<td>Total</td>

			</thead>	

			<tbody>

				<tr>
					<td><textarea name="diag_name_0" id="diag_name_0" class="form-control" cols="28" rows="2" readonly>Organic Mental Disorder</textarea></td>
					<td><input type="number" name="less_than_month_0" id="less_than_month_0" class="form-control"></td>
					<td><input type="number" name="1_6_month_0" id="1_6_month_0" class="form-control"></td>
					<td><input type="number" name="6_12_month_0" id="6_12_month_0" class="form-control"></td>
					<td><input type="number" name="12_24_month_0" id="12_24_month_0" class="form-control"></td>
					<td><input type="number" name="24_month_above_0" id="24_month_above_0" class="form-control"></td>
					<td><input type="number" name="total_0" id="total_0" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_1" id="diag_name_1" class="form-control" cols="28" rows="2" readonly>Psychosis Schizophrenia</textarea></td>
					<td><input type="number" name="less_than_month_1" id="less_than_month_1" class="form-control"></td>
					<td><input type="number" name="1_6_month_1" id="1_6_month_1" class="form-control"></td>
					<td><input type="number" name="6_12_month_1" id="6_12_month_1" class="form-control"></td>
					<td><input type="number" name="12_24_month_1" id="12_24_month_1" class="form-control"></td>
					<td><input type="number" name="24_month_above_1" id="24_month_above_1" class="form-control"></td>
					<td><input type="number" name="total_1" id="total_1" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_2" id="diag_name_2" class="form-control" cols="25" rows="1" readonly>Depression</textarea></td>
					<td><input type="number" name="less_than_month_2" id="less_than_month_2" class="form-control"></td>
					<td><input type="number" name="1_6_month_2" id="1_6_month_2" class="form-control"></td>
					<td><input type="number" name="6_12_month_2" id="6_12_month_2" class="form-control"></td>
					<td><input type="number" name="12_24_month_2" id="12_24_month_2" class="form-control"></td>
					<td><input type="number" name="24_month_above_2" id="24_month_above_2" class="form-control"></td>
					<td><input type="number" name="total_2" id="total_2" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_3" id="diag_name_3" class="form-control" cols="25" rows="1" readonly>Neurosis</textarea></td>
					<td><input type="number" name="less_than_month_3" id="less_than_month_3" class="form-control"></td>
					<td><input type="number" name="1_6_month_3" id="1_6_month_3" class="form-control"></td>
					<td><input type="number" name="6_12_month_3" id="6_12_month_3" class="form-control"></td>
					<td><input type="number" name="12_24_month_3" id="12_24_month_3" class="form-control"></td>
					<td><input type="number" name="24_month_above_3" id="24_month_above_3" class="form-control"></td>
					<td><input type="number" name="total_3" id="total_3" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_4" id="diag_name_4" class="form-control" cols="25" rows="1" readonly>Epilepsy</textarea></td>
					<td><input type="number" name="less_than_month_4" id="less_than_month_4" class="form-control"></td>
					<td><input type="number" name="1_6_month_4" id="1_6_month_4" class="form-control"></td>
					<td><input type="number" name="6_12_month_4" id="6_12_month_4" class="form-control"></td>
					<td><input type="number" name="12_24_month_4" id="12_24_month_4" class="form-control"></td>
					<td><input type="number" name="24_month_above_4" id="24_month_above_4" class="form-control"></td>
					<td><input type="number" name="total_4" id="total_4" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_5" id="diag_name_5" class="form-control" cols="25" rows="1" readonly>M.R.</textarea></td>
					<td><input type="number" name="less_than_month_5" id="less_than_month_5" class="form-control"></td>
					<td><input type="number" name="1_6_month_5" id="1_6_month_5" class="form-control"></td>
					<td><input type="number" name="6_12_month_5" id="6_12_month_5" class="form-control"></td>
					<td><input type="number" name="12_24_month_5" id="12_24_month_5" class="form-control"></td>
					<td><input type="number" name="24_month_above_5" id="24_month_above_5" class="form-control"></td>
					<td><input type="number" name="total_5" id="total_5" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_6" id="diag_name_6" class="form-control" cols="25" rows="2" readonly>Substance Abuse/Adication</textarea></td>
					<td><input type="number" name="less_than_month_6" id="less_than_month_6" class="form-control"></td>
					<td><input type="number" name="1_6_month_6" id="1_6_month_6" class="form-control"></td>
					<td><input type="number" name="6_12_month_6" id="6_12_month_6" class="form-control"></td>
					<td><input type="number" name="12_24_month_6" id="12_24_month_6" class="form-control"></td>
					<td><input type="number" name="24_month_above_6" id="24_month_above_6" class="form-control"></td>
					<td><input type="number" name="total_6" id="total_6" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_7" id="diag_name_7" class="form-control" cols="25" rows="2" readonly>Child Mental Health Problems Other</textarea></td>
					<td><input type="number" name="less_than_month_7" id="less_than_month_7" class="form-control"></td>
					<td><input type="number" name="1_6_month_7" id="1_6_month_7" class="form-control"></td>
					<td><input type="number" name="6_12_month_7" id="6_12_month_7" class="form-control"></td>
					<td><input type="number" name="12_24_month_7" id="12_24_month_7" class="form-control"></td>
					<td><input type="number" name="24_month_above_7" id="24_month_above_7" class="form-control"></td>
					<td><input type="number" name="total_7" id="total_7" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="total_field" id="total_field" class="form-control" cols="25" rows="1" readonly>Total</textarea></td>
					<td><input type="number" name="less_than_month_total" id="less_than_month_total" class="form-control"></td>
					<td><input type="number" name="1_6_month_total" id="1_6_month_total" class="form-control"></td>
					<td><input type="number" name="6_12_month_total" id="6_12_month_total" class="form-control"></td>
					<td><input type="number" name="12_24_month_total" id="12_24_month_total" class="form-control"></td>
					<td><input type="number" name="24_month_above_total" id="24_month_above_total" class="form-control"></td>
					<td><input type="number" name="grand_total" id="grand_total" class="form-control"></td>
				</tr>

			</tbody>

		</table>
		</form>

		<input type="submit" name="submit" id="name" form="DMHP_form" class="btn btn-default" value="Save &amp; Continue">
		<input type="button" name="print" id="print" class="btn btn-default" value="Print" onclick="printForm('DMHP_form');">

	</section>
	
	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/print.js"></script>
</body>
</html>