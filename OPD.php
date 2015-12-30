<?php
require_once 'core/init.php';

if (!Input::exists('get')){
	header('Location:getID.php');
}

	$db = DB::getInstance();
	$id = Input::get('id');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OPD paper</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		require_once 'templates/header.php';
		require_once 'templates/navbar.php';
	?>

	<section class="container-fluid">
		<!-- Biodata -->
		<article id="biodataArticle">
			<div class="biodata col-md-12 container-fluid">
				<h3>&nbsp;&nbsp;Biodata</h3>
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="firstName">First Name</label>
						<input type="text" id="firstName" name="firstName" class="form-control" >
					</div>
					<div class="col-md-4">
						<label for="middleName">Middle Name</label>
						<input type="text" id="middleName" name="middleName" class="form-control" >
					</div>
					<div class="col-md-4">
						<label for="lastName">Last Name</label>
						<input type="text" id="lastName" name="lastName" class="form-control" >
					</div>
				</div>

				<div class="col-md-12">
					<div class="col-md-4">
						<label for="age">Age</label>
						<input type="number" id="age" name="age" class="form-control" >
					</div>
					<div class="col-md-4">
						<label for="age">Sex</label>
						<select name="age" id="age" class="form-control" >
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
						<input type="text" id="opd" name="opd" class="form-control" >
					</div>
					<div class="col-md-4">
						<label for="bloodGroup">Blood Group</label>
						<select name="bloodGroup" id="bloodGroup" class="form-control" >
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
						<select name="diagnose" id="diagnose" class="form-control" >
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
					<div class="col-md-4">
						<label for="height">Height</label>
						<input type="number" step="any" id="height" name="height" class="form-control">
					</div>
					<div class="col-md-4">
						<label for="weight">Weight</label>
						<input type="text" id="weight" name="weight" class="form-control">
					</div>
					<div class="col-md-4"></div>
				</div>
				
			</div>
		</article>
		<!-- Bidodata ends -->
			
		<!-- Doctors Note  -->
		
		<article id="doctorsNoteArticle">
			<div class="doctorsNote">
				<h3>&nbsp;&nbsp;Doctors Note</h3>
				<div class="col-md-12">
					<div class="form-group col-md-8" id="doctorsNote_fields">
						<textarea name="doctors_note_1" id="doctors_note_1" cols="30" rows="2" class="form-control"></textarea>
					</div>
				</div>
			</div>
		</article>

		<!-- Doctors Note ends -->


		<!-- Psychologist Opinion -->

		<article class="investigationArticle col-md-12 container-fluid">
			<!-- Investigation Section -->
			<h3>&nbsp;&nbsp;Psychologist Opinion</h3>
			<div class="col-md-12">
				<div class="col-md-8 form-group" id="investigation_fields">
					<textarea name="investigation_1" id="investigation_1" cols="30" rows="2" class="form-control"></textarea>
				</div>
			</div>
		</article>

		<!-- Psychologist Opinion ends -->

		<!-- Social Worker Review -->

		<article class="investigationArticle col-md-12 container-fluid">
			<!-- Investigation Section -->
			<h3>&nbsp;&nbsp;Social Worker Review</h3>
			<div class="col-md-12">
				<div class="col-md-8 form-group" id="investigation_fields">
					<textarea name="investigation_1" id="investigation_1" cols="30" rows="2" class="form-control"></textarea>
				</div>
			</div>
		</article>

		<!-- Social Worker Review Ends -->

		<div class="form-group">
			<input type="submit" id="submitOPD" name="submitOPD" value="Submit" class="btn btn-primary">
			<input type="button" id="print" value="print" class="btn btn-primary">
		</div>

	</section>

</body>
</html>