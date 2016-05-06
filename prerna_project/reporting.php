<!DOCTYPE html>
<html>
<head>
<title>REPORTING</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
	tr{
		font-size: 12px;
	}
	td{
		height: 0;
	}
</style>
</head>
<body>
	<header id="NRHM_logo">
		<img src="../images/NRHM_slider.jpg" id="header_img" alt="NRHM logo">
	</header>
	<?php
		require_once '../templates/navbar.php';
	?>
    <section class="container-fluid col-md-12" id="prerna_report">
	<center> <table class="table table-condensed">
	          <thead> <center><h5><strong>DH Report(CS Report)</strong></h5></center></thead>
			    <tr> 
				 <td colspan="10">
				  <label><strong> District:-</strong></label> 
				  <input  type="text" name="district"/>
				  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				  <label><strong>DATE:-</strong></label>    
				  <input  type="text" name="date"/>
				 </td>
				</tr>
				<tr>
				  <td rowspan="2"><strong>Sr.No.</strong></td>
				  <td rowspan="2"><strong>Activity</strong></td>
				  <td colspan="3" ><strong>Monthly</strong></td> 
				  <td colspan="3" ><strong>Progresssive(NOV-DEC 2015 SINCE)</strong></td>
				  <td><strong> Grand Total</strong></td>
				  <td><strong> Remark </strong></td>
				  <tr> <td>Male</td>
				       <td>Female</td> 
				  <td><strong>Total</strong></td>
				       <td>Male</td>
					   <td>Female</td> 
					   <td><strong>Total</strong></td>
					   <td></td>
					   <td></td>
				  </tr>
				</tr>
				<tr>
				  <td>1</td> <td><strong>Total OPD</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>2</td> <td>Out Of Total OPD No.Of farmers</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>3</td> <td>Psychatric OPD Total</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td></td> <td style="width:150px"><strong>Disease wise Distribution of farmers attending Psychatric OPD</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>1</td> <td>Depression</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			    <tr>
				  <td>2</td> <td>Addiction</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>3</td> <td>Other</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td></td> <td style="width:150px"><strong>Other Disease wise Distribution Of farmers attending</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>1</td> <td>Diabetic</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>2</td> <td>Hypertension/IHD</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>3</td> <td>cancer</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			     <tr>
				  <td>4</td> <td>Stroke</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			    <tr>
				  <td>5</td> <td>Dialysis</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>6</td> <td>Other</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			    <tr>
				  <td></td> <td style="width:150px"><strong>Referal Services</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>1</td> <td>R H / SDH</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>2</td> <td>others - DH</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>3</td> <td>Total</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				 <tr>
				  <td>1</td> <td style="width:150px"><strong>Total IPD (FARMER)</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>2</td> <td>Psychiatric TOTAL IPD</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				 <tr>
				  <td></td> <td style="width:150px"><strong>Psychiatric IPD (FARMER)</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>1</td> <td>Depression</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>2</td> <td>Addiction</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			    <tr>
				  <td>3</td> <td>Other</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td></td> <td style="width:150px"><strong>Other Disease wise Distribution (FARMER)</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>1</td> <td>Diabetic</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>2</td> <td>Hypertension/IHD</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>3</td> <td>cancer</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			     <tr>
				  <td>4</td> <td>Stroke</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			    <tr>
				  <td>5</td> <td>Cataract Operation</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>6</td> <td>Other</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td></td> <td style="width:150px"><strong>Referal Services</strong></td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>1</td> <td>Medical College</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td>2</td> <td>Other - RGJAY</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
				<tr>
				  <td></td> <td>Total</td>
				  <td><input  type="text" name="opdmale-month" style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-month"style="width:100px"/></td>
				  <td><input  type="text" name="opdmale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdfemale-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opdtotal-prog"style="width:100px"/></td>
				  <td><input  type="text" name="opd-grandtotal"style="width:100px"/></td>
				  <td><input  type="text" name="opd-remark"style="width:100px"/></td>
				</tr>
			    
				
				
			  
			  
	</table></center>
	</section>

	<input type="button" name="submit" id="submit" value="Submit" class="btn btn-primary">
	<input type="button" name="print" id="print" value="Print" class="btn btn-default" onclick="printForm('prerna_report');">
	

	<script src="../script/jquery-2.1.3.min.js"></script>
	<script src="../script/bootstrap.min.js"></script>
	<script>

	function printForm(id){
		var w = window.open('', '', 'width=1000,height=600,resizeable,scrollbars');

		w.document.write('<html><head><title>HR Report</title>');
		w.document.write('<link rel="stylesheet" media="print" href="css/bootstrap.css">');
		w.document.write('<link rel="stylesheet" href="css/main.css">');
		w.document.write('<style>tr{font-size: 12px;}td{height: 0;}.table-condensed > tbody > tr > td{0px;}</style>');
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
	