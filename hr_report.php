<?php
	require_once 'core/init.php';

	$db = DB::getInstance();

	$get = $db->query("SELECT * FROM hr_report");

?>
<div class="col-xs-12">
	<div class="form-group col-xs-6">
		<a href="HR.php" class="btn btn-danger"><i class="fa fa-edit"></i> Edit HR report</a>
	</div>
	<table class="table table-bordered">
		<thead>
			<td>#</td>
			<td>Post</td>
			<td>Name</td>
			<td>Qualification</td>
			<td>Mob No</td>
			<td>Email</td>
		</thead>
		<tbody>
<?php
	$i = 1;
	if ($get->count() > 0):
		foreach ($get->results() as $report => $hr):
?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $hr['hr_post'] ?></td>
				<td><?php echo $hr['hr_name'] ?></td>
				<td><?php echo $hr['hr_qualification'] ?></td>
				<td><?php echo $hr['hr_phone'] ?></td>
				<td><?php echo $hr['hr_email'] ?></td>
			</tr>
<?php
		$i++;
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>