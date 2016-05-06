<?php 
	// if (!Input::exists('get')) {
	// 	header('Location: index.php');
	// 	die();
	// }

	require_once '../../core/init.php';

	$db = DB::getInstance();

	$form_no = $GLOBALS['DMHP_form_no'] > 9 ? 1 : $GLOBALS['DMHP_form_no'];

	$form_1 = DB::getInstance()->get("DMHP_form_$form_no", array('month', '=', Input::get('month')));
	$form_2 = DB::getInstance()->get("DMHP_form_".((int)$form_no + 1), array('month', '=', Input::get('month')));
	$form_3 = DB::getInstance()->get("DMHP_form_".((int)$form_no + 2), array('month', '=', Input::get('month')));

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

