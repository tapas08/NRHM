<?php
require_once 'core/init.php';
if (!Input::exists('get')){
	header('Location:getID.php');
}else{
	$db = DB::getInstance();

	$patient = $db->get('patients', array('unique_id', '=', Input::get('id')));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OPD Sheet</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/fileinput.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php require_once 'templates/header.php'; ?>
	<?php require_once 'templates/navbar.php'; ?>


	<section class="container">
		<form action="patientIDSubmit.php" id="opd_form" method="POST" enctype="multipart/form-data">
		<!-- Page I starts -->
		<article id="bioArticle">
			<!-- Biodata Section -->
			<div class="biodata col-xs-12 container-fluid">
				<center><h3>&nbsp;&nbsp;Case Report</h3></center>

					<div class="col-xs-12">
						<div class="col-xs-4">
							<label for="firstName">First Name</label>
							<input type="text" id="firstName" name="firstName" class="form-control" value="<?php echo $patient->first()['first_name']; ?>">
						</div>
						<div class="col-xs-4">
							<label for="middleName">Middle Name</label>
							<input type="text" id="middleName" name="middleName" class="form-control" value="<?php echo $patient->first()['middle_name']; ?>">
						</div>
						<div class="col-xs-4">
							<label for="lastName">Last Name</label>
							<input type="text" id="lastName" name="lastName" class="form-control" value="<?php echo $patient->first()['last_name']; ?>">
						</div>
					</div>

					<div class="col-xs-12">
						<div class="col-xs-4">
							<div class="col-xs-3">
								<label for="age">Age</label>
								<input type="text" id="age" name="age" class="form-control" value="<?php echo $patient->first()['age']; ?>">
							</div>
							<div class="col-xs-3"></div>
							<div class="col-xs-6">
								<label for="age">Sex</label>
								<select name="age" id="age" class="form-control" value="<?php echo $patient->first()['sex']; ?>">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="col-xs-3">
							<label for="dob">D.O.B</label>
							<input type="date" id="dob" name="dob" class="form-control" value="<?php echo $patient->first()['DOB']; ?>">
						</div>
						<div class="col-xs-1"></div>
						<div class="col-xs-4">
							<!-- <div class='col-xs-12'> -->
								<label for="address">Address</label>
								<textarea id="address" name="address" rows="3" class="form-control"><?php echo $patient->first()['address']; ?></textarea>
							<!-- </div> -->
						</div>
					</div>

					<div class="col-xs-12">
						<div class='col-xs-4'>
							<label for="city">Place</label>
							<select name="city" id="city" class="form-control" value="<?php echo $patient->first()['place']; ?>">
								<option value="Nagpur">Nagpur</option>
								<option value="Seloo">Seloo</option>
								<option value="Arvi">Arvi</option>
								<option value="Wardha">Wardha</option>
								<option value="Aravati">Aravati</option>
								<option value="Sevagram">Sevagram</option>
							</select>
						</div>
						<div class="col-xs-4">
							<label for="state">Village</label>
							<select name="state" id="state" class="form-control" value="<?php echo $patient->first()['state']; ?>">
								<option value="Maharashtra">Maharashtra</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Gujrat">Gujrat</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="West Bengal">West Bengal</option>
								<option value="Karnatak">Karnatak</option>
							</select>
						</div>
						<div class="col-xs-1">
							<label for="weight">Weight</label>
							<input type="text" id="weight" name="weight" class="form-control" value="<?php echo $patient->first()['weight']; ?>">
						</div>
					</div>

					<div class="form-group col-xs-12">
						<div class="col-xs-3"></div>
						<div class="col-xs-6">
							<center><label for="diagnose">Diagnose</label></center>
							<input type="text" list="diagnose_list" name="diagnose" id="diagnose" class="form-control" value="<?php echo $patient->first()['diagnose']; ?>">
							<datalist id="diagnose_list">
								<option>Psychosis</option>
								<option>Neurosis</option>
								<option>Depression</option>
								<option>Substance Abuse</option>
								<option>Child Mental Health Problem</option>
								<option>Epilepsy</option>
								<option>Mental Retardation</option>
								<option>Other</option>
							</datalist>
						</div>
					</div>

					<!-- <div class="col-xs-12">
						<div class="col-xs-4">
							<label for="height">Height</label>
							<input type="number" step="any" id="height" name="height" class="form-control" value="<?php echo $patient->first()['height']; ?>">
						</div>
						<div class="col-xs-4"></div>
					</div> -->
				
			</div>
		</article>
		<!-- Page I ends -->
		

		<!-- Page II Starts -->
		<article class='historyArticle col-xs-12 container-fluid'>
			<!-- History Section -->
			
			<div class="history">
				<h3>&nbsp;&nbsp;History</h3>
				<div class="col-xs-12">
					<div class="form-group col-xs-8" id="history_fields">
						<textarea name="history_1" id="history" cols="30" rows="8" class="form-control"></textarea>
					</div>
				</div>

				<div class="form-group col-xs-8">
					<input type="file" id="input-id pts_img" name="pts_img[]" class="btn btn-info btn-sm file" data-preview-file-type="text">
					<!-- <button id="deleteField" class="btn btn-info btn-sm" onclick="deleteField('history', 'history_fields');">Delete</button> -->
				</div>
			</div>
		</article>
		<!-- Page II ends -->

		<!-- Page III starts -->

		<article class="investigationArticle col-xs-12 container-fluid">
			<!-- Investigation Section -->
			<h3>&nbsp;&nbsp;Investigation</h3>
			<div class="col-xs-12">
				<div class="col-xs-8 form-group" id="investigation_fields">
					<textarea name="investigation_1" id="investigation" cols="30" rows="8" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group col-xs-8">
				<input type="file" id="input-id pts_img" name="pts_img[]" class="btn btn-info btn-sm file" data-preview-file-type="text">
			</div>
			<!-- <button id="addMore" class="btn btn-info btn-sm" onclick="addFields('investigation', 'investigation_fields');">Add More</button>
			<button id="deleteField" class="btn btn-info btn-sm" onclick="deleteField('investigation', 'investigation_fields');">Delete</button> -->
		</article>

		<!-- Page III ends -->

		<!-- Page IV starts -->

		<article id='treatmentArticle' class="treatmentArticle col-xs-12 container-fluid">
			<!-- Treatment Section -->
			<h3>&nbsp;&nbsp;Treatment</h3>
			<div class="col-xs-12">
				<img src="images/rx.jpg" id="rxImage" alt="Rx">
				<div class="col-xs-12">
					<div class="form-group col-xs-8">
						<textarea name="treatment" id="treatment" rows="7" class="form-control"></textarea>
					</div>
				</div>
			</div>
		</article>

		<!-- Page IV ends -->

		<!-- Page V starts -->

		<article id="remarkArticle" class="remarkArticle col-xs-12 container-fluid">
			<!-- Remark Section -->
			<h3>&nbsp;&nbsp;Remark</h3>
			<div class="col-xs-12">
				<div class="col-xs-8 form-group">
					<textarea name="remark" id="remark" cols="30" rows="5" class="form-control"></textarea>
				</div>
			</div>
		</article>

		<!-- Page V ends -->
		<div class="container-fluid form-group">
			<input type="hidden" id="unique_id" name="unique_id" value="<?php echo Input::get('id'); ?>">
			<input type="submit" id="submitOPD" name="submitOPD" value="Submit" class="btn btn-default">
			<input type="button" id="printOPD" name="printOPD" value="Print" class="btn btn-default" onclick="printOPDPaper();">
		</div>
		</form>
	</section>

	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script>

	function printOPDPaper(){
		console.log($('#pts_img[0] .file-preview-image').attr('src'));
		var w = window.open('', '', 'width=1000,height=600,resizeable,scrollbars');

		w.document.write('<html><head><title>OPD PAPER</title>');
		w.document.write('<link rel="stylesheet" media="print" href="css/bootstrap.css">');
		w.document.write('<link rel="stylesheet" href="css/main.css">');
		w.document.write('<link rel="stylesheet" href="css/fileinput.css">');

		w.document.write('</head><body >');
		w.document.write($('#bioArticle').html());
		w.document.write('<h3>&nbsp;&nbsp;History</h3>');
		w.document.write($('#history_fields').html());
		if ($('.file-preview-image').length){
			w.document.write("<img src="+$('.file-preview-image').attr('src')+" class='file-preview-image'>");
		}
		w.document.write($('.file-preview-thumbnails').html());
		w.document.write('<h3>&nbsp;&nbsp;Investigation</h3>');
		w.document.write($('.file-preview-thumbnails').html());
		w.document.write($('#investigation_fields').html());
		w.document.write($('#treatmentArticle').html());
		w.document.write($('#remarkArticle').html());
		w.document.write('</body></html>');
		w.document.close();
		javascript:w.print();
		w.close();
		return false;
	}
	</script>
	<script src="script/plugins/canvas-to-blob.js"></script>
	<script src="script/fileinput.js"></script>
	<script>
		$("#input-id").fileinput({'showUpload':true, 'previewFileType':'any'});
	</script>

</body>
</html>
<?php

}
?>