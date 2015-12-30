<?php
require_once 'core/init.php';

$db = DB::getInstance();

$patients = $db->query("SELECT * FROM patients");

if (!$patients->error()):
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patients List</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php 
		require_once 'templates/header.php';
		require_once 'templates/navbar.php';
	?>

	<section class="container-fluid">
		<table class="table table-bordered">
			<thead>
				<td>#</td>
				<td>Patient Id</td>
				<td>Name</td>
				<td>Phone No.</td>
				<td>City</td>
			</thead>
			<tbody>
			<?php
				foreach($patients->results() as $patient):
					$name = "{$patient['first_name']} {$patient['middle_name']} {$patient['last_name']}";
			?>
					<tr>
						<td><?php echo $patient['id']; ?></td>
						<td><?php echo $patient['unique_id']; ?></td>
						<td><a href="patientID.php?id=<?php echo $patient['unique_id']; ?>"><?php echo $name; ?></a></td>
						<td><?php echo $patient['phone']; ?></td>
						<td><?php echo $patient['place']; ?></td>
					</tr>
			<?php
				endforeach;
			?>
			</tbody>
		</table>
	</section>
	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
</body>
</html>

<?php
endif

?>