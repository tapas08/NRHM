<?php
require_once 'core/init.php';

$error = [];

if (Input::exists()){
	$db = DB::getInstance();
	
	//Insert form 1 details in form_1_details table
	$insertForm_1_details = $db->insert('form_1_details', array(
			'doctor_name' => Input::get('Form1_doctor'),
			'Month' => Input::get('Form1_month'),
			'No_of_subcenter' => Input::get('Form1_centers')
		));

	//Insert form 1 data in form1 table
	for($i = 1; $i <= 8; $i++){
		
		$insert_data = $db->insert('form1', array(
				'Diagnoses' => Input::get("diag{$i}_name"),
				'No_of_oldCases' => (int)Input::get("diag{$i}_oldCases"),
				'No_of_newCases' => (int)Input::get("diag{$i}_newCases"),
				'Total_cases' => (int)Input::get("diag{$i}_totalCases"),
				'No_of_regularTreatments'=> (int)Input::get("diag{$i}_regularTreatment"),
				'First_contact_dropout' => (int)Input::get("diag{$i}_contactDropout"),
				'Irregular_patients' => (int)Input::get("diag{$i}_irregularPatients"),
				'Recovered_patients' => (int)Input::get("diag{$i}_recoveredPatients"),
				'Dead' => (int)Input::get("diag{$i}_dead"),
				'Migrated' => (int)Input::get("diag{$i}_migrated"),
				'Month' => Input::get('Form1_month'),
				'date' => Input::get('form1_date')
			));

	}

	if ($insert_data && $insertForm_1_details){
		header('Location:form2.php');
	}else{
		$error[] = "Something went wrong! Please try again";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>NHRM</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<?php
		require_once 'templates/header.php';
		require_once 'templates/navbar.php';
	?>
	
	<section class="container col-md-12" id="Form1Section">
		<?php
			if(count($error) > 0){
				foreach($error as $msg){
					echo "<p class='alert alert-info'>{$msg}</p>";
				}
			}
		?>
		<!-- FORM 1 starts -->

		<div class="col-md-12">
			<form action="" id="Form1" method="POST">
			<div id="form1_div">
				<h2 class="col-md-7 pull-right">
					Form 1
				</h2>

				<div class="col-md-12 center">
					<small>Report of the cases in the PHC/PHU/GAD as part of the DMHP<br>
			(Report to the sent by the PHC/PHU/GAD medical officer to DMHP officer-monthly</small>
				</div>
				<div class="col-md-8 details">
					<div class="col-md-12">
						<div class="col-md-6">Name of the Doctor :- </div>
						<div class="col-md-6"><input type="text" id="Form1_doctor" name="Form1_doctor" class="form-control"></div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6">Reports for the Month of  :- </div>
						<div class="col-md-6"><input type="month" id="Form1_month" name="Form1_month" class="form-control"></div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6">Number of Sub centers in the PHC/PHU/GAD :- </div>
						<div class="col-md-6"><input type="number" id="Form1_centers" name="Form1_centers" class="form-control"></div>
					</div>
				</div>
			</div>
			
			<table class="table table-bordered">
				<thead id="thead">
					<td>Diagnoses</td>
					<td>Total No. of Old Cases</td>
					<td>Total No. of New Cases</td>
					<td>Total Cases</td>
					<td>No. of regular patients treatment</td>
					<td>First contact dropout</td>
					<td>Irregular Patients</td>
					<td>No. of recovered patients</td>
					<td>Dead</td>
					<td>Migrated</td>
				</thead>
				<tbody>
		
					<!-- Psychosis fields -->

					<tr>
						<td>
							<input type="text" id="diag1_name" name="diag1_name" class="form-control" value="Psychosis" readonly>
						</td>
						<td>
							<input type="text" id="diag1_oldCases" name="diag1_oldCases" pattern="[0-9].+" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_newCases" name="diag1_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_totalCases" name="diag1_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_regularTreatment" name="diag1_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_contactDropout" name="diag1_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_irregularPatients" name="diag1_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_recoveredPatients" name="diag1_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_dead" name="diag1_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag1_migrated" name="diag1_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->

					<!-- Neurosis fields -->

					<tr>
						<td>
							<input type="text" id="diag2_name" name="diag2_name" class="form-control" value="Neurosis" readonly>
						</td>
						<td>
							<input type="text" id="diag2_oldCases" name="diag2_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_newCases" name="diag2_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_totalCases" name="diag2_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_regularTreatment" name="diag2_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_contactDropout" name="diag2_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_irregularPatients" name="diag2_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_recoveredPatients" name="diag2_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_dead" name="diag2_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag2_migrated" name="diag2_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->

					<!-- Depression fields -->

					<tr>
						<td>
							<input type="text" id="diag3_name" name="diag3_name" class="form-control" value="Depression" readonly>
						</td>
						<td>
							<input type="text" id="diag3_oldCases" name="diag3_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_newCases" name="diag3_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_totalCases" name="diag3_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_regularTreatment" name="diag3_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_contactDropout" name="diag3_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_irregularPatients" name="diag3_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_recoveredPatients" name="diag3_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_dead" name="diag3_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag3_migrated" name="diag3_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->
					
					<!-- Epilepsy fields -->

					<tr>
						<td>
							<input type="text" id="diag4_name" name="diag4_name" class="form-control" value="Epilepsy" readonly>
						</td>
						<td>
							<input type="text" id="diag4_oldCases" name="diag4_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_newCases" name="diag4_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_totalCases" name="diag4_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_regularTreatment" name="diag4_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_contactDropout" name="diag4_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_irregularPatients" name="diag4_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_recoveredPatients" name="diag4_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_dead" name="diag4_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag4_migrated" name="diag4_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->

					<!-- Mental Retardation fields -->

					<tr>
						<td>
							<input type="text" id="diag5_name" name="diag5_name" class="form-control" value="Mental Retardation" readonly>
						</td>
						<td>
							<input type="text" id="diag5_oldCases" name="diag5_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_newCases" name="diag5_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_totalCases" name="diag5_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_regularTreatment" name="diag5_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_contactDropout" name="diag5_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_irregularPatients" name="diag5_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_recoveredPatients" name="diag5_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_dead" name="diag5_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag5_migrated" name="diag5_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->
					
					<!-- Substance Abuse fields -->

					<tr>
						<td>
							<input type="text" id="diag6_name" name="diag6_name" class="form-control" value="Substance Abuse" readonly>
						</td>
						<td>
							<input type="text" id="diag6_oldCases" name="diag6_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_newCases" name="diag6_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_totalCases" name="diag6_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_regularTreatment" name="diag6_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_contactDropout" name="diag6_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_irregularPatients" name="diag6_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_recoveredPatients" name="diag6_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_dead" name="diag6_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag6_migrated" name="diag6_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->
					
					<!-- Child Mental Health Problems fields -->

					<tr>
						<td>
							<textarea type="text" id="diag7_name" name="diag7_name" class="form-control" readonly>Child Mental Health Problems</textarea>
						</td>
						<td>
							<input type="text" id="diag7_oldCases" name="diag7_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_newCases" name="diag7_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_totalCases" name="diag7_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_regularTreatment" name="diag7_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_contactDropout" name="diag7_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_irregularPatients" name="diag7_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_recoveredPatients" name="diag7_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_dead" name="diag7_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag7_migrated" name="diag7_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->
					
					<!-- Other fields -->

					<tr>
						<td>
							<input type="text" id="diag8_name" name="diag8_name" class="form-control" value="Other" readonly>
						</td>
						<td>
							<input type="text" id="diag8_oldCases" name="diag8_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_newCases" name="diag8_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_totalCases" name="diag8_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_regularTreatment" name="diag8_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_contactDropout" name="diag8_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_irregularPatients" name="diag8_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_recoveredPatients" name="diag8_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_dead" name="diag8_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="diag8_migrated" name="diag8_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->
					
					<!-- Total fields -->

					<tr>
						<td>
							<input type="text" id="form1_total" name="form1_total" class="form-control" value="Total" readonly>
						</td>
						<td>
							<input type="text" id="form1_total_oldCases" name="form1_total_oldCases" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_newCases" name="form1_total_newCases" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_totalCases" name="form1_total_totalCases" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_regularTreatment" name="form1_total_regularTreatment" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_contactDropout" name="form1_total_contactDropout" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_irregularPatients" name="form1_total_irregularPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_recoveredPatients" name="form1_total_recoveredPatients" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_dead" name="form1_total_dead" class="form-control">
						</td>
						<td>
							<input type="text" id="form1_total_migrated" name="form1_total_migrated" class="form-control">
						</td>
					</tr>

					<!-- End -->

				</tbody>
			
			</table>

			<div class='col-md-12'>
				<div class="col-md-6">
					<span class="col-md-4"><label for="form1_date">Date</label></span>
					<span class="col-md-4"><input type="date" id="form1_date" name="form1_date" class="form-control"></span>
					<span class="col-md-4"></span>
				</div>
				<div class="col-md-6">
					<div class="col-md-3"></div>
					<div class="col-md-6" id="signature">Signature of Doctor</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
		<input type="submit" id="Form1_button" name="Form1_button" form="Form1" class="btn btn-primary" value="Save &amp; Continue">
		<input type="button" id="Form1_print" name="Form1_print" form="FORM1" class="btn btn-primary" value="Print" onclick="printForm('Form1Section');">

		</form>
		

		<!-- FORM1 ENDS -->

		<!-- *************************************************************** -->
		
		<!-- FORM 2 STARTS -->

			<!-- //TODO -->

		<!-- FORM 2 ENDS -->

	</section>

	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script>
		function printForm(id){
			var w = window.open('', '', 'width=1000,height=600,resizeable,scrollbars');

			w.document.write('<html><head><title>Form 1</title>');
			w.document.write('<link rel="stylesheet" href="css/main.css">');
			w.document.write('<link rel="stylesheet" href="css/bootstrap.css">');
			w.document.write('<style type="text/css">.style1{width: 100%;}</style>');

			w.document.write('</head><body >');
			w.document.write($('#'+id).html());
			w.document.write('</body></html>');
			w.document.close();
			javascript:w.print();
			w.close();
			return false;
		}
	</script>
</body>
</html>