<?php
require_once 'core/init.php';

$msg = [];

if (Input::exists()){
	$db = DB::getInstance();

	$insertData = $db->insert('patients', array(
			'first_name' =>Input::get('first_name'),
			'middle_name' => Input::get('middle_name'),
			'last_name' => Input::get('last_name'),
			'phone' => Input::get('phone'),
			'age'=> Input::get('age'),
			'sex' => Input::get('sex'),
			'DOB' => Input::get('dob'),
			'address' => Input::get('address'),
			'place' => Input::get('city'),
			'state' => Input::get('state'),
			'opd' => Input::get('opd'),
			'blood_group' => Input::get('bloodGroup'),
			'diagnose' => Input::get('diagnose'),
			'height' => Input::get('height'),
			'weight' => Input::get('weight'),
			'unique_id' => substr(uniqid(), 0, 8)
		));

	if ($insertData){
		$msg[] = "Patient data inserted!";
	}else{
		$msg[] = "Error! Something went wrong.";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patient Entry</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		require_once 'templates/header.php';
		require_once 'templates/navbar.php';
	?>

	<section class="container-fluid col-md-12">

		<?php
			if (count($msg) > 0){
				foreach($msg as $m){
					echo "<p class='alert alert-info'>{$m}</p>";
				}
			}
		?>

		<div class="col-md-1"></div>
		<form action="" class="col-md-10" method="POST">
			<div class="col-md-12">
						<div class="col-md-4">
							<label for="firstName">First Name</label>
							<input type="text" id="firstName" name="firstName" class="form-control">
						</div>
						<div class="col-md-4">
							<label for="middleName">Middle Name</label>
							<input type="text" id="middleName" name="middleName" class="form-control">
						</div>
						<div class="col-md-4">
							<label for="lastName">Last Name</label>
							<input type="text" id="lastName" name="lastName" class="form-control">
						</div>
				</div>

				<div class="col-md-12">
					<div class="col-md-4">
						<label for="age">Age</label>
						<input type="number" id="age" name="age" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="age">Sex</label>
						<select name="age" id="age" class="form-control">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Transgender">Transgender</option>
						</select>
					</div>
					<div class="col-md-4">
						<label for="dob">D.O.B</label>
						<input type="date" id="dob" name="dob" class="form-control">
					</div>
				</div>

				<div class="col-md-12">
					<div class='col-md-4'>
						<label for="address">Address</label>
						<textarea id="address" name="address" rows="1" class="form-control"></textarea>
					</div>
					<div class='col-md-4'>
						<label for="city">City/Town</label>
						<select name="city" id="city" class="form-control">
							<option value="Nagpur">Nagpur</option>
							<option value="Seloo">Seloo</option>
							<option value="Arvi">Arvi</option>
							<option value="Wardha">Wardha</option>
							<option value="Aravati">Aravati</option>
							<option value="Sevagram">Sevagram</option>
						</select>
					</div>
					<div class="col-md-4">
						<label for="state">State</label>
						<select name="state" id="state" class="form-control">
							<option value="Maharashtra">Maharashtra</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Gujrat">Gujrat</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="West Bengal">West Bengal</option>
							<option value="Karnatak">Karnatak</option>
						</select>
					</div>
				</div>

				<div class="col-md-12">
					<div class="col-md-4">
						<label for="opd">OPD</label>
						<input type="text" id="opd" name="opd" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="bloodGroup">Blood Group</label>
						<select name="bloodGroup" id="bloodGroup" class="form-control">
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
					</div>
					<div class="col-md-4">
						<label for="diagnose">Diagnose</label>
						<select name="diagnose" id="diagnose" class="form-control">
							<option value="Psychosis">Psychosis</option>
							<option value="Psychosis">Neurosis</option>
							<option value="Psychosis">Depression</option>
							<option value="Psychosis">Substance Abuse</option>
							<option value="Psychosis">Child Mental Health Problem</option>
							<option value="Psychosis">Epilepsy</option>
							<option value="Psychosis">Mental Retardation</option>
							<option value="Psychosis">Other</option>
						</select>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group col-md-4">
						<label for="height">Height</label>
						<input type="number" step="any" id="height" name="height" class="form-control">
					</div>
					<div class="form-group  col-md-4">
						<label for="weight">Weight</label>
						<input type="text" id="weight" name="weight" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label for="phone">Phone No.</label>
						<input type="phone" id="phone" name='phone' class="form-control">
					</div>
				</div> 

			<div class="form-group">
				<input type="submit" id="submit" name="submit" class="btn btn-success">
				<input type="reset" id="reset" value="Cancel" class="btn btn-warning">
			</div>

		</form>

	</section>

</body>
</html>