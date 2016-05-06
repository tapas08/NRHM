<?php 

require_once 'core/init.php';

if (Input::exists('get')){
	/* Damn I am stuck! */
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HR Report</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		require_once 'templates/header.php';
		require_once 'templates/navbar.php';
	?>

	<section class="container-fluid col-xs-12">
		<form action="" id="hr_form">
			<center>
				<h2>DMHP HR INFORMATION, WARDHA</h2>
			</center>
			<table class="table table-bordered">
				<thead>
					<td>Sr. No.</td>
					<td>Post</td>
					<td>Name</td>
					<td>Qualification</td>
					<td>Mob. No.</td>
					<td>Email</td>
				</thead>
				<tbody>
					<tr>
						<td class="sr-no">1</td>
						<td><input type="text" name="post_1" id="post_1" class="form-control" value="Psychiatrist" readonly></td>
						<td><input type="text" name="name_1" id="name_1" class="form-control"></td>
						<td><input type="text" name="qualification_1" id="qualification_1" class="form-control"></td>
						<td><input type="phone" name="mob_1" id="mob_1" class="form-control"></td>
						<td><input type="email" name="email_1" id="email_1" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">2</td>
						<td><input type="text" name="post_2" id="post_2" class="form-control" value="Clinical Psychologist" readonly></td>
						<td><input type="text" name="name_2" id="name_2" class="form-control"></td>
						<td><input type="text" name="qualification_2" id="qualification_2" class="form-control"></td>
						<td><input type="phone" name="mob_2" id="mob_2" class="form-control"></td>
						<td><input type="email" name="email_2" id="email_2" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">3</td>
						<td><input type="text" name="post_3" id="post_3" class="form-control" value="Psychiatric Social Worker" readonly></td>
						<td><input type="text" name="name_3" id="name_3" class="form-control"></td>
						<td><input type="text" name="qualification_3" id="qualification_3" class="form-control"></td>
						<td><input type="phone" name="mob_3" id="mob_3" class="form-control"></td>
						<td><input type="email" name="email_3" id="email_3" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">4</td>
						<td><input type="text" name="post_4" id="post_4" class="form-control" value="Psychiatric Nurse" readonly></td>
						<td><input type="text" name="name_4" id="name_4" class="form-control"></td>
						<td><input type="text" name="qualification_4" id="qualification_4" class="form-control"></td>
						<td><input type="phone" name="mob_4" id="mob_4" class="form-control"></td>
						<td><input type="email" name="email_4" id="email_4" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">5</td>
						<td><input type="text" name="post_5" id="post_5" class="form-control" value="Community Nurse" readonly></td>
						<td><input type="text" name="name_5" id="name_5" class="form-control"></td>
						<td><input type="text" name="qualification_5" id="qualification_5" class="form-control"></td>
						<td><input type="phone" name="mob_5" id="mob_5" class="form-control"></td>
						<td><input type="email" name="email_5" id="email_5" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">6</td>
						<td><input type="text" name="post_6" id="post_6" class="form-control" value="Record Keeper" readonly></td>
						<td><input type="text" name="name_6" id="name_6" class="form-control"></td>
						<td><input type="text" name="qualification_6" id="qualification_6" class="form-control"></td>
						<td><input type="phone" name="mob_6" id="mob_6" class="form-control"></td>
						<td><input type="email" name="email_6" id="email_6" class="form-control"></td>
					</tr>
					<tr>
						<td class="sr-no">7</td>
						<td><input type="text" name="post_7" id="post_7" class="form-control" value="Case Registry Asst." readonly></td>
						<td><input type="text" name="name_7" id="name_7" class="form-control"></td>
						<td><input type="text" name="qualification_7" id="qualification_7" class="form-control"></td>
						<td><input type="phone" name="mob_7" id="mob_7" class="form-control"></td>
						<td><input type="email" name="email_7" id="email_7" class="form-control"></td>
					</tr>
				</tbody>
			</table>
		</form>
		<input type="submit" name="submit" id="submit" value="Save &amp; Update" class="btn btn-primary">
		<input type="button" name="print" id="print" value="Print" class="btn btn-primary" onclick="printForm('hr_form');">
	</section>

	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script>

	function printForm(id){
		var w = window.open('', '', 'width=1000,height=600,resizeable,scrollbars');

		w.document.write('<html><head><title>HR Report</title>');
		w.document.write('<link rel="stylesheet" media="print" href="css/bootstrap.css">');
		w.document.write('<link rel="stylesheet" href="css/main.css">');

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