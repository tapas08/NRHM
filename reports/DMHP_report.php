<?php 
	// if (!Input::exists('get')) {
	// 	header('Location: index.php');
	// 	die();
	// }

	require_once '../core/init.php';

	$db = DB::getInstance();

	//$form_no = $GLOBALS['DMHP_form_no'] > 9 ? 1 : $GLOBALS['DMHP_form_no'];

	$form_1 = DB::getInstance()->get("DMHP_form_1", array('month', '=', Input::get('month')));
	$form_2 = DB::getInstance()->get("DMHP_form_2", array('month', '=', Input::get('month')));
	$form_3 = DB::getInstance()->get("DMHP_form_3", array('month', '=', Input::get('month')));
	$form_4 = DB::getInstance()->get("DMHP_form_4", array('month', '=', Input::get('month')));
	$form_5 = DB::getInstance()->get("DMHP_form_5", array('month', '=', Input::get('month')));
	$form_6 = DB::getInstance()->get("DMHP_form_6", array('month', '=', Input::get('month')));
	$form_7 = DB::getInstance()->get("DMHP_form_7", array('month', '=', Input::get('month')));
	$form_8 = DB::getInstance()->get("DMHP_form_8", array('month', '=', Input::get('month')));
	$form_9 = DB::getInstance()->get("DMHP_form_9", array('month', '=', Input::get('month')));

	/*
	* Displaying contents of $form_1
	*/

?>
	<div class="col-xs-12" id="form_1">
		<table class="table table-bordered">
			<thead>
				<td>Diagnoses</td>
				<td>Total no. of Old Cases registered till last month</td>
				<td>Total no. of New Cases registered this month</td>
				<td>Total no. of cases registered</td>
				<td>No. of patients regular treatment</td>
				<td>First contact dropped</td>
				<td>Irregular patients</td>
				<td>No. who have recovered</td>
				<td>Dead</td>
				<td>Migrated</td>
			</thead>
			<tbody>
<?php
	if ($form_1->count() > 0):
		foreach ($form_1->results() as $form => $report):
?>
				<tr>
					<td><?php echo $report["diagnoses"] ?></td>
					<td><?php echo $report["old_Cases"] ?></td>
					<td><?php echo $report["new_Cases"] ?></td>
					<td><?php echo $report["total_Cases"] ?></td>
					<td><?php echo $report["regular_Treatment"] ?></td>
					<td><?php echo $report["dropped"] ?></td>
					<td><?php echo $report["irregular_Patients"] ?></td>
					<td><?php echo $report["recovered"] ?></td>
					<td><?php echo $report["dead"] ?></td>
					<td><?php echo $report["migrated"] ?></td>
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* First form ends
	*/

/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_2
	*/

?>
	<div class="col-xs-12" id="form_2">
		<table class="table table-bordered">
			<thead>
				<td>Diagnosis</td>
				<td>Visit by the HW/ANM to educate & motivate Patients</td>
				<td>Home care - Counseling education domiciliary care monitoring side effects & networking</td>
				<td>Admission to In-Patient facility after review</td>
				<td>Motivation through grampanechyat & others in the community</td>
				<td>Migrated</td>
				<td>Died</td>
				<td>Total</td>
			</thead>
			<tbody>
<?php
	if ($form_2->count() > 0):
		foreach ($form_2->results() as $form => $report):
?>
				<tr>
					<td><?php echo $report["diagnoses"] ?></td>
					<td><?php echo $report["visits"] ?></td>
					<td><?php echo $report["home_Care"] ?></td>
					<td><?php echo $report["admission"] ?></td>
					<td><?php echo $report["motivated"] ?></td>
					<td><?php echo $report["migrated"] ?></td>
					<td><?php echo $report["died"] ?></td>
					<td><?php echo $report["total"] ?></td>
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Second form ends
	*/
/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_3
	*/

?>
	<div class="col-xs-12" id="form_3">
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
<?php
	if ($form_3->count() > 0):
		foreach ($form_3->results() as $form => $report):
?>
				<tr>
					<td><?php echo $report["drug_name"] ?></td>
					<td><?php echo $report["opening_balance"] ?></td>
					<td><?php echo $report["drugs_received"] ?></td>
					<td><?php echo $report["expiry_date"] ?></td>
					<td><?php echo $report["drugs_collected"] ?></td>
					<td><?php echo $report["tablets_dispensed"] ?></td>
					<td><?php echo $report["end_month_balance"] ?></td>
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Third form ends
	*/

	/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_4
	*/

?>
	<div class="col-xs-12" id="form_4">
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
<?php
	if ($form_4->count() > 0):
		foreach ($form_4->results() as $form => $report):
?>
				<tr>
					<td><?php echo $report["diagnoses"] ?></td>
					<td><?php echo $report["less_than_month"] ?></td>
					<td><?php echo $report["1_6_month"] ?></td>
					<td><?php echo $report["6_12_month"] ?></td>
					<td><?php echo $report["12_24_month"] ?></td>
					<td><?php echo $report["24_month_above"] ?></td>
					<td><?php echo $report["total"] ?></td>
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Fourth form ends
	*/

	/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_5
	*/

?>
	<div class="col-xs-12" id="form_5">
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
<?php
	if ($form_5->count() > 0):
		foreach ($form_5->results() as $form => $report):
?>
				<tr>
					<td><?php echo $report["drug_name"] ?></td>
					<td><?php echo $report["opening_balance"] ?></td>
					<td><?php echo $report["drugs_received"] ?></td>
					<td><?php echo $report["expiry_date"] ?></td>
					<td><?php echo $report["drugs_collected"] ?></td>
					<td><?php echo $report["tablets_dispensed"] ?></td>
					<td><?php echo $report["end_month_balance"] ?></td>
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Fifth form ends
	*/

	/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_6
	*/

?>
	<div class="col-xs-12" id="form_6">
		<table class="table table-bordered">
			<thead>
				<td>Domains</td>
				<td>Good</td>
				<td>Satisfactory</td>
				<td>Poor</td>
				<td>Any Specific difficulties please elaborate</td>
			</thead>
			<tbody>
<?php
	if ($form_6->count() > 0):
		foreach ($form_6->results() as $form => $report):
?>
				<tr>
					<td><?php echo $report["domains"] ?></td>
					<td><?php echo $report["good"] ?></td>
					<td><?php echo $report["satisfactory"] ?></td>
					<td><?php echo $report["poor"] ?></td>
					<td><?php echo $report["difficulties"] ?></td>
					<td><?php echo $report["date"] ?></td>
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Sixth form ends
	*/

	/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_7
	*/

?>
	<div class="col-xs-12" id="form_7">
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
<?php
	if ($form_7->count() > 0):
		foreach ($form_7->results() as $form => $report):
?>
				<tr>
					<td><?php echo $report['activity'] ?></td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><?php echo $report['fresh_deputed'] ?></td>
								<td><?php echo $report['fresh_attended'] ?></td>
								<td><?php echo $report['fresh_absent'] ?></td>
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><?php echo $report['refresh_deputed'] ?></td>
								<td><?php echo $report['refresh_attended'] ?></td>
								<td><?php echo $report['refresh_absent'] ?></td>		
							</tbody>
						</table>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td><?php echo $report['courses_per_year']; ?></td>		
							</tbody>
						</table>
					</td>
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Seventh form ends
	*/

	/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_8
	*/

?>
	<div class="col-xs-12" id="form_8">
		<table class="table table-bordered">
			<thead>
				<td></td>
				<td><u>MALE</u></td>
				<td><u>FEMALE</u></td>
				<td><u>CHILD</u></td>
				<td><u>TOTAL</u></td>
			</thead>
			<tbody>
<?php
	if ($form_8->count() > 0):
		foreach ($form_8->results() as $form => $report):
?>
				<tr>
					<td><u><?php echo $report[''] ?></u></td>
					<td><?php echo $report[''] ?></td>
					<td><?php echo $report[''] ?></td>
					<td><?php echo $report[''] ?></td>
					<td><?php echo $report[''] ?></td>	
				</tr>
<?php
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Eight form ends
	*/

	/*--------------------------------------------------------------------------*/

	/*
	* Displaying contents of $form_9
	*/

?>
	<div class="col-xs-12" id="form_9">
		<table class="table table-bordered">
			<thead>
				<td><u>S.NO</u></td>
				<td><u>Name Of Institution</u></td>
				<td><u>No. of Visits</u></td>
				<td><u>MALE</u></td>
				<td><u>FEMALE</u></td>
				<td><u>CHILD</u></td>
				<td><u>TOTAL</u></td>
			</thead>
			<tbody>
<?php
	if ($form_9->count() > 0):
		$x = 1;
		foreach ($form_9->results() as $form => $report):
?>
				<tr>
					<td><?php echo $x; ?></td>
					<td><?php echo $report['institution'] ?></td>
					<td><?php echo $report['no_of_visits'] ?></td>
					<td><?php echo $report['male'] ?></td>
					<td><?php echo $report['female'] ?></td>
					<td><?php echo $report['child'] ?></td>
					<td><?php echo $report['total'] ?></td>
					<td><?php echo $report['date'] ?></td>
				</tr>
<?php
			$x++;
		endforeach;
	else:
		echo "<p class='alert alert-warning'>No Records!</p>";
	endif;

?>
			</tbody>
		</table>
	</div>
<?php 
	/*
	* Ninth form ends
	*/