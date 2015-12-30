<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get ID</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script>
	
	</script>
</head>
<body onload="$('#getID').modal();">
	<div class="modal fade" id="getID" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<form action="OPD.php" method="GET">
				<div class="modal-body">
					<div class="form-group">
						<label for="id">Patients ID</label>
						<input type="text" id="id" name="id" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" id="getID" name="getID" value="Submit" class="btn btn-default">
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>