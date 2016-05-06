<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Expenditure Statement</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		require_once 'templates/header.php';
		require_once 'templates/navbar.php';
	?>
	<div class="container" id="expenditure_report">
		<h2 class="text-center">Name of Hospital: Civil Surgeon, General Hospital, Wardha</h2>
		<h4 class="text-center">Expenditure Statement of DMHP ACTIVITIES up to Month of Jan - <?php echo date('Y'); ?></h4>

		<form action="" method="POST" id="expenditure_report_form">
			<table class="table table-bordered">
				<thead class="text-center">
					<td>FMR CODE</td>
					<td>Activities under RCH/NRHM Additi/Immunization</td>
					<td>Sanction Budget Allocation 2015-2016</td>
					<td>Opening Balance as on 01-04-2015</td>
					<td>Grant Released in 2015-2016</td>
					<td>Total Receipts</td>
					<td colspan="2">Expenditure
						<table class="table table-bordered">
							<thead class="text-center">
								<td>During Month</td>
								<td>Upto Jan - 16</td>
							</thead>
						</table>
					</td>
					<td>Closing Balance</td>
				</thead>
				<tbody class='text-center'>
					<tr>
						<td>(A)</td>
						<td><input type="text" name="activity_1" id='activity_1' class="form-control" value="DMHP Activities" readonly></td>
						<td><input type="number" step="any" name="budget_1" id="budget_1" class="form-control" oninput="calculate('budget', 1);"></td>
						<td><input type="number" step="any" name="opening_balance_1" id="opening_balance_1" class="form-control" oninput="calculate('opening_balance', 1);"></td>
						<td><input type="number" step="any" name="grant_released_1" id="grant_released_1" class="form-control" oninput="calculate('grant_released', 1);"></td>
						<td><input type="number" step="any" name="total_receipt_1" id="total_receipt_1" class="form-control" oninput="calculate('total_receipt', 1);"></td>
						<td><input type="number" step="any" name="during_month_1" id="during_month_1" class="form-control" oninput="calculate('during_month', 1);"></td>
						<td><input type="number" step="any" name="upto_1" id="upto_1" class="form-control" oninput="calculate('upto', 1);"></td>
						<td><input type="number" step="any" name="closing_balance_1" id="closing_balance_1" class="form-control" oninput="calculate('closing_balance', 1);"></td>
					</tr>
					<tr>
						<td>1.1</td>
						<td><input type="text" name="activity_2" id='activity_2' class="form-control" value="Salary" readonly></td>
						<td><input type="number" step="any" name="budget_2" id="budget_2" class="form-control" oninput="calculate('budget', 2);"></td>
						<td><input type="number" step="any" name="opening_balance_2" id="opening_balance_2" class="form-control" oninput="calculate('opening_balance', 2);"></td>
						<td><input type="number" step="any" name="grant_released_2" id="grant_released_2" class="form-control" oninput="calculate('grant_released', 2);"></td>
						<td><input type="number" step="any" name="total_receipt_2" id="total_receipt_2" class="form-control" oninput="calculate('total_receipt', 2);"></td>
						<td><input type="number" step="any" name="during_month_2" id="during_month_2" class="form-control" oninput="calculate('during_month', 2);"></td>
						<td><input type="number" step="any" name="upto_2" id="upto_2" class="form-control" oninput="calculate('upto', 2);"></td>
						<td><input type="number" step="any" name="closing_balance_2" id="closing_balance_2" class="form-control" oninput="calculate('closing_balance', 2);"></td>
					</tr>
					<tr>
						<td>1.2</td>
						<td><input type="text" name="activity_3" id='activity_3' class="form-control" value="NON RECURING" readonly></td>
						<td><input type="number" step="any" name="budget_3" id="budget_3" class="form-control" oninput="calculate('budget', 3);"></td>
						<td><input type="number" step="any" name="opening_balance_3" id="opening_balance_3" class="form-control" oninput="calculate('opening_balance', 3);"></td>
						<td><input type="number" step="any" name="grant_released_3" id="grant_released_3" class="form-control" oninput="calculate('grant_released', 3);"></td>
						<td><input type="number" step="any" name="total_receipt_3" id="total_receipt_3" class="form-control" oninput="calculate('total_receipt', 3);"></td>
						<td><input type="number" step="any" name="during_month_3" id="during_month_3" class="form-control" oninput="calculate('during_month', 3);"></td>
						<td><input type="number" step="any" name="upto_3" id="upto_3" class="form-control" oninput="calculate('upto', 3);"></td>
						<td><input type="number" step="any" name="closing_balance_3" id="closing_balance_3" class="form-control" oninput="calculate('closing_balance', 3);"></td>
					</tr>
					<tr>
						<td>1.3</td>
						<td><input type="text" name="activity_4" id='activity_4' class="form-control" value="TRAINING OF PHC MEDICAL OFFICER" readonly></td>
						<td><input type="number" step="any" name="budget_4" id="budget_4" class="form-control" oninput="calculate('budget', 4);"></td>
						<td><input type="number" step="any" name="opening_balance_4" id="opening_balance_4" class="form-control" oninput="calculate('opening_balance', 4);"></td>
						<td><input type="number" step="any" name="grant_released_4" id="grant_released_4" class="form-control" oninput="calculate('grant_released', 4);"></td>
						<td><input type="number" step="any" name="total_receipt_4" id="total_receipt_4" class="form-control" oninput="calculate('total_receipt', 4);"></td>
						<td><input type="number" step="any" name="during_month_4" id="during_month_4" class="form-control" oninput="calculate('during_month', 4);"></td>
						<td><input type="number" step="any" name="upto_4" id="upto_4" class="form-control" oninput="calculate('upto', 4);"></td>
						<td><input type="number" step="any" name="closing_balance_4" id="closing_balance_4" class="form-control" oninput="calculate('closing_balance', 4);"></td>
					</tr>
					<tr>
						<td>1.4</td>
						<td><input type="text" name="activity_5" id='activity_5' class="form-control" value="IEC & COMMUNITY MOBILIZATION ACTIVITIES" readonly></td>
						<td><input type="number" step="any" name="budget_5" id="budget_5" class="form-control" oninput="calculate('budget', 5);"></td>
						<td><input type="number" step="any" name="opening_balance_5" id="opening_balance_5" class="form-control" oninput="calculate('opening_balance', 5);"></td>
						<td><input type="number" step="any" name="grant_released_5" id="grant_released_5" class="form-control" oninput="calculate('grant_released', 5);"></td>
						<td><input type="number" step="any" name="total_receipt_5" id="total_receipt_5" class="form-control" oninput="calculate('total_receipt', 5);"></td>
						<td><input type="number" step="any" name="during_month_5" id="during_month_5" class="form-control" oninput="calculate('during_month', 5);"></td>
						<td><input type="number" step="any" name="upto_5" id="upto_5" class="form-control" oninput="calculate('upto', 5);"></td>
						<td><input type="number" step="any" name="closing_balance_5" id="closing_balance_5" class="form-control" oninput="calculate('closing_balance', 5);"></td>
					</tr>
					<tr>
						<td>1.5</td>
						<td><input type="text" name="activity_6" id='activity_6' class="form-control" value="TARGETED INTERVENTION AT COMMUNITY MOBILIZATION LEVEL" readonly></td>
						<td><input type="number" step="any" name="budget_6" id="budget_6" class="form-control" oninput="calculate('budget', 6);"></td>
						<td><input type="number" step="any" name="opening_balance_6" id="opening_balance_6" class="form-control" oninput="calculate('opening_balance', 6);"></td>
						<td><input type="number" step="any" name="grant_released_6" id="grant_released_6" class="form-control" oninput="calculate('grant_released', 6);"></td>
						<td><input type="number" step="any" name="total_receipt_6" id="total_receipt_6" class="form-control" oninput="calculate('total_receipt', 6);"></td>
						<td><input type="number" step="any" name="during_month_6" id="during_month_6" class="form-control" oninput="calculate('during_month', 6);"></td>
						<td><input type="number" step="any" name="upto_6" id="upto_6" class="form-control" oninput="calculate('upto', 6);"></td>
						<td><input type="number" step="any" name="closing_balance_6" id="closing_balance_6" class="form-control" oninput="calculate('closing_balance', 6);"></td>
					</tr>
					<tr>
						<td>1.6</td>
						<td><input type="text" name="activity_7" id='activity_7' class="form-control" value="DRUGS" readonly></td>
						<td><input type="number" step="any" name="budget_7" id="budget_7" class="form-control" oninput="calculate('budget', 7);"></td>
						<td><input type="number" step="any" name="opening_balance_7" id="opening_balance_7" class="form-control" oninput="calculate('opening_balance', 7);"></td>
						<td><input type="number" step="any" name="grant_released_7" id="grant_released_7" class="form-control" oninput="calculate('grant_released', 7);"></td>
						<td><input type="number" step="any" name="total_receipt_7" id="total_receipt_7" class="form-control" oninput="calculate('total_receipt', 7);"></td>
						<td><input type="number" step="any" name="during_month_7" id="during_month_7" class="form-control" oninput="calculate('during_month', 7);"></td>
						<td><input type="number" step="any" name="upto_7" id="upto_7" class="form-control" oninput="calculate('upto', 7);"></td>
						<td><input type="number" step="any" name="closing_balance_7" id="closing_balance_7" class="form-control" oninput="calculate('closing_balance', 7);"></td>
					</tr>
					<tr>
						<td>1.7</td>
						<td><input type="text" name="activity_8" id='activity_8' class="form-control" value="EQUIPMENTS" readonly></td>
						<td><input type="number" step="any" name="budget_8" id="budget_8" class="form-control" oninput="calculate('budget', 8);"></td>
						<td><input type="number" step="any" name="opening_balance_8" id="opening_balance_8" class="form-control" oninput="calculate('opening_balance', 8);"></td>
						<td><input type="number" step="any" name="grant_released_8" id="grant_released_8" class="form-control" oninput="calculate('grant_released', 8);"></td>
						<td><input type="number" step="any" name="total_receipt_8" id="total_receipt_8" class="form-control" oninput="calculate('total_receipt', 8);"></td>
						<td><input type="number" step="any" name="during_month_8" id="during_month_8" class="form-control" oninput="calculate('during_month', 8);"></td>
						<td><input type="number" step="any" name="upto_8" id="upto_8" class="form-control" oninput="calculate('upto', 8);"></td>
						<td><input type="number" step="any" name="closing_balance_8" id="closing_balance_8" class="form-control" oninput="calculate('closing_balance', 8);"></td>
					</tr>
					<tr>
						<td>1.8</td>
						<td><input type="text" name="activity_9" id='activity_9' class="form-control" value="OPERATIONAL EXPENSES" readonly></td>
						<td><input type="number" step="any" name="budget_9" id="budget_9" class="form-control" oninput="calculate('budget', 9);"></td>
						<td><input type="number" step="any" name="opening_balance_9" id="opening_balance_9" class="form-control" oninput="calculate('opening_balance', 9);"></td>
						<td><input type="number" step="any" name="grant_released_9" id="grant_released_9" class="form-control" oninput="calculate('grant_released', 9);"></td>
						<td><input type="number" step="any" name="total_receipt_9" id="total_receipt_9" class="form-control" oninput="calculate('total_receipt', 9);"></td>
						<td><input type="number" step="any" name="during_month_9" id="during_month_9" class="form-control" oninput="calculate('during_month', 9);"></td>
						<td><input type="number" step="any" name="upto_9" id="upto_9" class="form-control" oninput="calculate('upto', 9);"></td>
						<td><input type="number" step="any" name="closing_balance_9" id="closing_balance_9" class="form-control" oninput="calculate('closing_balance', 9);"></td>
					</tr>
					<tr>
						<td>1.9</td>
						<td><input type="text" name="activity_10" id='activity_10' class="form-control" value="MISCELLANEOUS/TRAVEL/CONTIGENCY" readonly></td>
						<td><input type="number" step="any" name="budget_10" id="budget_10" class="form-control" oninput="calculate('budget', 10);"></td>
						<td><input type="number" step="any" name="opening_balance_10" id="opening_balance_10" class="form-control" oninput="calculate('opening_balance', 10);"></td>
						<td><input type="number" step="any" name="grant_released_10" id="grant_released_10" class="form-control" oninput="calculate('grant_released', 10);"></td>
						<td><input type="number" step="any" name="total_receipt_10" id="total_receipt_10" class="form-control" oninput="calculate('total_receipt', 10);"></td>
						<td><input type="number" step="any" name="during_month_10" id="during_month_10" class="form-control" oninput="calculate('during_month', 10);"></td>
						<td><input type="number" step="any" name="upto_10" id="upto_10" class="form-control" oninput="calculate('upto', 10);"></td>
						<td><input type="number" step="any" name="closing_balance_10" id="closing_balance_10" class="form-control" oninput="calculate('closing_balance', 10);"></td>
					</tr>
					<tr>
						<td>1.10</td>
						<td><input type="text" name="activity_11" id='activity_11' class="form-control" value="DAY CARE CENTER @ Rs.50000 per month" readonly></td>
						<td><input type="number" step="any" name="budget_11" id="budget_11" class="form-control" oninput="calculate('budget', 11);"></td>
						<td><input type="number" step="any" name="opening_balance_11" id="opening_balance_11" class="form-control" oninput="calculate('opening_balance', 11);"></td>
						<td><input type="number" step="any" name="grant_released_11" id="grant_released_11" class="form-control" oninput="calculate('grant_released', 11);"></td>
						<td><input type="number" step="any" name="total_receipt_11" id="total_receipt_11" class="form-control" oninput="calculate('total_receipt', 11);"></td>
						<td><input type="number" step="any" name="during_month_11" id="during_month_11" class="form-control" oninput="calculate('during_month', 11);"></td>
						<td><input type="number" step="any" name="upto_11" id="upto_11" class="form-control" oninput="calculate('upto', 11);"></td>
						<td><input type="number" step="any" name="closing_balance_11" id="closing_balance_11" class="form-control" oninput="calculate('closing_balance', 11);"></td>
					</tr>
					<tr>
						<td>1.11</td>
						<td><input type="text" name="activity_12" id='activity_12' class="form-control" value="Primary Health Care Center for Payment of salaries of 2 Community Mental Health Worker at" readonly></td>
						<td><input type="number" step="any" name="budget_12" id="budget_12" class="form-control" oninput="calculate('budget', 12);"></td>
						<td><input type="number" step="any" name="opening_balance_12" id="opening_balance_12" class="form-control" oninput="calculate('opening_balance', 12);"></td>
						<td><input type="number" step="any" name="grant_released_12" id="grant_released_12" class="form-control" oninput="calculate('grant_released', 12);"></td>
						<td><input type="number" step="any" name="total_receipt_12" id="total_receipt_12" class="form-control" oninput="calculate('total_receipt', 12);"></td>
						<td><input type="number" step="any" name="during_month_12" id="during_month_12" class="form-control" oninput="calculate('during_month', 12);"></td>
						<td><input type="number" step="any" name="upto_12" id="upto_12" class="form-control" oninput="calculate('upto', 12);"></td>
						<td><input type="number" step="any" name="closing_balance_12" id="closing_balance_12" class="form-control" oninput="calculate('closing_balance', 12);"></td>
					</tr>
					<tr>
						<td>1.12</td>
						<td><input type="text" name="activity_13" id='activity_13' class="form-control" value="Support for NGOs" readonly></td>
						<td><input type="number" step="any" name="budget_13" id="budget_13" class="form-control" oninput="calculate('budget', 13);"></td>
						<td><input type="number" step="any" name="opening_balance_13" id="opening_balance_13" class="form-control" oninput="calculate('opening_balance', 13);"></td>
						<td><input type="number" step="any" name="grant_released_13" id="grant_released_13" class="form-control" oninput="calculate('grant_released', 13);"></td>
						<td><input type="number" step="any" name="total_receipt_13" id="total_receipt_13" class="form-control" oninput="calculate('total_receipt', 13);"></td>
						<td><input type="number" step="any" name="during_month_13" id="during_month_13" class="form-control" oninput="calculate('during_month', 13);"></td>
						<td><input type="number" step="any" name="upto_13" id="upto_13" class="form-control" oninput="calculate('upto', 13);"></td>
						<td><input type="number" step="any" name="closing_balance_13" id="closing_balance_13" class="form-control" oninput="calculate('closing_balance', 13);"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" name="activity_total" id='activity_total' class="form-control" value="SUb-Total of DMHP" readonly></td>
						<td><input type="number" step="any" name="budget_total" id="budget_total" class="form-control" oninput="calculate('budget', 13);"></td>
						<td><input type="number" step="any" name="opening_balance_total" id="opening_balance_total" class="form-control" oninput="calculate('opening_balance', 13);"></td>
						<td><input type="number" step="any" name="grant_released_total" id="grant_released_total" class="form-control" oninput="calculate('grant_released', 13);"></td>
						<td><input type="number" step="any" name="total_receipt_total" id="total_receipt_total" class="form-control" oninput="calculate('total_receipt', 13);"></td>
						<td><input type="number" step="any" name="during_month_total" id="during_month_total" class="form-control" oninput="calculate('during_month', 13);"></td>
						<td><input type="number" step="any" name="upto_total" id="upto_total" class="form-control" oninput="calculate('upto', 13);"></td>
						<td><input type="number" step="any" name="closing_balance_total" id="closing_balance_total" class="form-control" oninput="calculate('closing_balance', 13);"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<div class="col-md-12">
		<input type="submit" form="expenditure_report_form" name="submit" id="submit" value="Submit" class="btn btn-primary">
		<input type="button" form="expenditure_report_form" name="submit" id="print" value="print" class="btn btn-default" onclick="printForm('expenditure_report');">
	</div>
	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script>

	function printForm(id){
		var w = window.open('', '', 'width=1000,height=600,resizeable,scrollbars');

		w.document.write('<html><head><title>Expenditure Report</title>');
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