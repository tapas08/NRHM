<?php 
	require_once 'core/init.php';

	$errors = [];

	if (Input::exists()){
		$db = DB::getInstance();
		$doctors_id = substr(uniqid(), 0, 5);

		for ($i = 1; $i <= 9; $i++){
			$form_7 = $db->insert("DMHP_form_7", array(
					'activity' => Input::get("activity_name_$i"),
					'fresh_deputed' => Input::get("fresh_deputed_$i"),
					'fresh_attended' => Input::get("fresh_attended_$i"),
					'fresh_absent' => Input::get("fresh_absent_$i"),
					'refresh_deputed' => Input::get("refresh_deputed_$i"),
					'refresh_attended' => Input::get("refresh_attended_$i"),
					'refresh_absent' => Input::get("refresh_absent_$i"),
					'courses_per_year' => Input::get("total_courses_$i")
				));

			if (!$form_7){
				$errors[] = "Error! Please check if the entered value in field $i is correct.";
			}
		}

		$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 7',
			'date' => date('m-d-Y'),
			'doctors_Id' => $doctors_id
		));

		$form_details = $db->insert('form_details', array(
				'form' => 'DMHP FORM 7',
				'district' => Input::get('district'),
				'month' => Input::get('month'),
				'doctors_Id' => $doctors_id,
				'starting_date' => Input::get('DMHP_date'),
				'fresh_or_extended' => Input::get('fresh_or_extended')
			));

		if ($doctors_entry){
			header("Location:DMHPFORM8.php");
		}else{
			$errors[] = "Error! Something went wrong please try again.";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM 7</title>
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
			<h4>Form 7</h4>
			<p><u>Activities of DMHP</u></p>
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
					<label for="DMHP_date">Date of starting DMHP </label>
				</div>
				<div class="col-md-6">
					<input type="date" id="DMHP_date" name="DMHP_date" class="form-control">
				</div>
			</div>
		</div>

		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="fresh_or_extended">Whether the DMHP is fresh or extended</label>
				</div>
				<div class="col-md-6">
					<input type="text" list="option" id="fresh_or_extended" name="fresh_or_extended" class="form-control">
					<datalist id="option">
						<option value="Fresh"></option>
						<option value="Extended"></option>
					</datalist>
				</div>
			</div>
		</div>

		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="month">Report for the Month of </label>
				</div>
				<div class="col-md-6">
					<input type="month" id="month" name="month" class="form-control">
				</div>
			</div>
		</div>

		<table class="table table-bordered">
			<thead>
				<td>Name of the Activity</td>
				<td>
					<center>Training-fresh batch</center>
					<table class="table table-bordered">
						<thead>
							<td>Actual Number deputed</td>
							<td>Actual Number Attended</td>
							<td>Absent</td>
						</thead>
					</table>
				</td>
				<td>
					<center>Training-Refresher batch</center>
					<table class="table table-bordered">
						<thead>
							<td>Actual Number deputed</td>
							<td>Actual Number Attended</td>
							<td>Absent</td>
						</thead>
					</table>
				</td>
				<td>
					<center>Total Number of training courses</center>
					<table class="table table-bordered">
						<thead>
							<td>Per Year</td>	
						</thead>
					</table>
				</td>
			</thead>		

			<tbody>

				<tr>
					<td><textarea name="activity_name_1" id="activity_name_1" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_1" id="fresh_deputed_1" class="form-control"></td>
								<td><input type="number" name="fresh_attended_1" id="fresh_attended_1" class="form-control"></td>
								<td><input type="number" name="fresh_absent_1" id="fresh_absent_1" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_1" id="refresh_deputed_1" class="form-control"></td>
								<td><input type="number" name="refresh_attended_1" id="refresh_attended_1" class="form-control"></td>
								<td><input type="number" name="refresh_absent_1" id="refresh_absent_1" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_1" id="total_courses_1" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_2" id="activity_name_2" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_2" id="fresh_deputed_2" class="form-control"></td>
								<td><input type="number" name="fresh_attended_2" id="fresh_attended_2" class="form-control"></td>
								<td><input type="number" name="fresh_absent_2" id="fresh_absent_2" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_2" id="refresh_deputed_2" class="form-control"></td>
								<td><input type="number" name="refresh_attended_2" id="refresh_attended_2" class="form-control"></td>
								<td><input type="number" name="refresh_absent_2" id="refresh_absent_2" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_2" id="total_courses_2" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_3" id="activity_name_3" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_3" id="fresh_deputed_3" class="form-control"></td>
								<td><input type="number" name="fresh_attended_3" id="fresh_attended_3" class="form-control"></td>
								<td><input type="number" name="fresh_absent_3" id="fresh_absent_3" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_3" id="refresh_deputed_3" class="form-control"></td>
								<td><input type="number" name="refresh_attended_3" id="refresh_attended_3" class="form-control"></td>
								<td><input type="number" name="refresh_absent_3" id="refresh_absent_3" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_3" id="total_courses_3" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_4" id="activity_name_4" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_4" id="fresh_deputed_4" class="form-control"></td>
								<td><input type="number" name="fresh_attended_4" id="fresh_attended_4" class="form-control"></td>
								<td><input type="number" name="fresh_absent_4" id="fresh_absent_4" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_4" id="refresh_deputed_4" class="form-control"></td>
								<td><input type="number" name="refresh_attended_4" id="refresh_attended_4" class="form-control"></td>
								<td><input type="number" name="refresh_absent_4" id="refresh_absent_4" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_4" id="total_courses_4" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_5" id="activity_name_5" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_5" id="fresh_deputed_5" class="form-control"></td>
								<td><input type="number" name="fresh_attended_5" id="fresh_attended_5" class="form-control"></td>
								<td><input type="number" name="fresh_absent_5" id="fresh_absent_5" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_5" id="refresh_deputed_5" class="form-control"></td>
								<td><input type="number" name="refresh_attended_5" id="refresh_attended_5" class="form-control"></td>
								<td><input type="number" name="refresh_absent_5" id="refresh_absent_5" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_5" id="total_courses_5" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_6" id="activity_name_6" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_6" id="fresh_deputed_6" class="form-control"></td>
								<td><input type="number" name="fresh_attended_6" id="fresh_attended_6" class="form-control"></td>
								<td><input type="number" name="fresh_absent_6" id="fresh_absent_6" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_6" id="refresh_deputed_6" class="form-control"></td>
								<td><input type="number" name="refresh_attended_6" id="refresh_attended_6" class="form-control"></td>
								<td><input type="number" name="refresh_absent_6" id="refresh_absent_6" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_6" id="total_courses_6" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_7" id="activity_name_7" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_7" id="fresh_deputed_7" class="form-control"></td>
								<td><input type="number" name="fresh_attended_7" id="fresh_attended_7" class="form-control"></td>
								<td><input type="number" name="fresh_absent_7" id="fresh_absent_7" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_7" id="refresh_deputed_7" class="form-control"></td>
								<td><input type="number" name="refresh_attended_7" id="refresh_attended_7" class="form-control"></td>
								<td><input type="number" name="refresh_absent_7" id="refresh_absent_7" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_7" id="total_courses_7" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_8" id="activity_name_8" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_8" id="fresh_deputed_8" class="form-control"></td>
								<td><input type="number" name="fresh_attended_8" id="fresh_attended_8" class="form-control"></td>
								<td><input type="number" name="fresh_absent_8" id="fresh_absent_8" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_8" id="refresh_deputed_8" class="form-control"></td>
								<td><input type="number" name="refresh_attended_8" id="refresh_attended_8" class="form-control"></td>
								<td><input type="number" name="refresh_absent_8" id="refresh_absent_8" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_8" id="total_courses_8" class="form-control"></td>		
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td><textarea name="activity_name_9" id="activity_name_9" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="fresh_deputed_9" id="fresh_deputed_9" class="form-control"></td>
								<td><input type="number" name="fresh_attended_9" id="fresh_attended_9" class="form-control"></td>
								<td><input type="number" name="fresh_absent_9" id="fresh_absent_9" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="refresh_deputed_9" id="refresh_deputed_9" class="form-control"></td>
								<td><input type="number" name="refresh_attended_9" id="refresh_attended_9" class="form-control"></td>
								<td><input type="number" name="refresh_absent_9" id="refresh_absent_9" class="form-control"></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><input type="number" name="total_courses_9" id="total_courses_9" class="form-control"></td>		
							</tbody>
						</table>
					</td>
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