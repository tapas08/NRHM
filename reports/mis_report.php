<?php

require_once '../core/init.php';

$db = DB::getInstance();

$regular_OPD = $db->get('regular_OPD', array('month', '=', Input::get('month')));
$OUTREACH_patients = $db->get('OUTREACH_patients', array('month', '=', Input::get('month')));
$indoor_Patients = $db->get('indoor_Patients', array('month', '=', Input::get('month')));
$other_Patients = $db->get('other_patients', array('month', '=', Input::get('month')));
$readmission_Patients = $db->get('readmission_patients', array('month', '=', Input::get('month')));
$loa_patients = $db->get('LOA_patients', array('month', '=', Input::get('month')));
$outdoor_diagnostic = $db->get('outdoor_diagnostic', array('month', '=', Input::get('month')));
$indoor_diagnostic = $db->get('indoor_diagnostic', array('month', '=', Input::get('month')));
$duration = $db->get('duration_of_stay', array('month', '=', Input::get('month')));
$outreach_services = $db->get('outreach_services', array('month', '=', Input::get('month')));
$criminal_patients = $db->get('criminal_patients', array('month', '=', Input::get('month')));

	/*
	* Regular OPD
	*/
?>

<div class="col-xs-12" id="form_1">
	<table class="table table-bordered">
		<thead>
			<td>Regular OPD</td>
			<td>Male</td>
			<td>Female</td>
			<td>
				<table class="table table-bordered">
				<thead>
					<center>Child</center>
				</thead>
				<tbody>
					<td><center>MCH</center></td>
					<td><center>FCH</center></td>
				</tbody>
				</table>
			</td>
			<td>Total</td>
			<td>During Months</td>
			<td>Progressive</td>
		</thead>
		<tbody>
<?php
	if ($regular_OPD->count() > 0):
		foreach ($regular_OPD->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['cases'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td>
					<table class="table">
						<tbody>
							<td><?php echo $report['OPD_MCH'] ?></td>
							<td><?php echo $report['OPD_FCH'] ?></td>
						</tbody>
					</table>
				</td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['during_month'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Regular OPD ends
	*/

/*-----------------------------------------------------------------------*/	

	/*
	* OUTREACH Patients
	*/
?>

<div class="col-xs-12" id="form_2">
	<table class="table table-bordered">
		<thead>
			<td>OUTREACH Patients</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<table class="table table-bordered">
					<thead>
						<center>Child</center>
					</thead>
					<tbody>
						<td><center>MCH</center></td>
						<td><center>FCH</center></td>
					</tbody>
					</table>
				</td>
				<td>Total</td>
				<td>During Months</td>
		</thead>
		<tbody>
<?php
	if ($OUTREACH_patients->count() > 0):
		foreach ($OUTREACH_patients->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['cases'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td>
					<table class="table">
						<tbody>
							<td><?php echo $report['MCH'] ?></td>
							<td><?php echo $report['FCH'] ?></td>
						</tbody>
					</table>
				</td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['during_month'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* OUTREACH Patients ends
	*/

/*-----------------------------------------------------------------------*/	

	/*
	* Indoor Patients
	*/
?>

<div class="col-xs-12" id="form_3">
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>New Cases</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<center>Child</center>
					<table class="table table-bordered">
						<thead>
							<td>MCH</td>
							<td>FCH</td>
						</thead>
					</table>
				</td>
				<td>Total</td>
				<td>During Month</td>
				<td>Progressive</td>
		</thead>
		<tbody>
<?php
	if ($indoor_Patients->count() > 0):
		foreach ($indoor_Patients->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['cases'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td>
					<table class="table">
						<tbody>
							<td><?php echo $report['MCH'] ?></td>
							<td><?php echo $report['FCH'] ?></td>
						</tbody>
					</table>
				</td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['during_month'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Indoor Patients ends
	*/

/*-----------------------------------------------------------------------*/	

	/*
	* Indoor Patients Other Agencies
	*/
?>

<div class="col-xs-12" id="form_4">
	<table class="table table-bordered">
		<thead>
			<thead>
				<td></td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<center>Child</center>
					<table class="table table-bordered">
						<thead>
							<td>MCH</td>
							<td>FCH</td>
						</thead>
					</table>
				</td>
				<td>Total</td>
				<td>During Month</td>
				<td>Progressive</td>
		</thead>
		<tbody>
<?php
	if ($other_Patients->count() > 0):
		foreach ($other_Patients->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['cases'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td>
					<table class="table">
						<tbody>
							<td><?php echo $report['MCH'] ?></td>
							<td><?php echo $report['FCH'] ?></td>
						</tbody>
					</table>
				</td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['during_month'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Indoor Patients Other Agencies ends
	*/

/*-----------------------------------------------------------------------*/	

	/*
	* Indoor Patients Readmission
	*/
?>

<div class="col-xs-12" id="form_5">
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>Readmission</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<center>Child</center>
					<table class="table table-bordered">
						<thead>
							<td>MCH</td>
							<td>FCH</td>
						</thead>
					</table>
				</td>
				<td>Total</td>
				<td>During Month</td>
				<td>Progressive</td>
		</thead>
		<tbody>
<?php
	if ($readmission_Patients->count() > 0):
		foreach ($readmission_Patients->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['cases'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td>
					<table class="table">
						<tbody>
							<td><?php echo $report['MCH'] ?></td>
							<td><?php echo $report['FCH'] ?></td>
						</tbody>
					</table>
				</td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['during_month'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Indoor Patients Readmission ends
	*/

/*-----------------------------------------------------------------------*/	

	/*
	* Indoor Patients LOA
	*/
?>

<div class="col-xs-12" id="form_6">
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>LOA</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<center>Child</center>
					<table class="table table-bordered">
						<thead>
							<td>MCH</td>
							<td>FCH</td>
						</thead>
					</table>
				</td>
				<td>Total</td>
				<td>During Month</td>
				<td>Progressive</td>
		</thead>
		<tbody>
<?php
	if ($readmission_Patients->count() > 0):
		foreach ($readmission_Patients->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['cases'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td>
					<table class="table">
						<tbody>
							<td><?php echo $report['MCH'] ?></td>
							<td><?php echo $report['FCH'] ?></td>
						</tbody>
					</table>
				</td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['during_month'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Indoor Patients LOA ends
	*/

	/*-----------------------------------------------------------------------*/	

	/*
	* Indoor Patients Discharges
	*/
?>

<div class="col-xs-12" id="form_7">
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>Discharges</td>
				<td>Male</td>
				<td>Female</td>
				<td>
					<center>Child</center>
					<table class="table table-bordered">
						<thead>
							<td>MCH</td>
							<td>FCH</td>
						</thead>
					</table>
				</td>
				<td>Total</td>
				<td>During Month</td>
				<td>Progressive</td>
		</thead>
		<tbody>
<?php
	if ($readmission_Patients->count() > 0):
		foreach ($readmission_Patients->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['cases'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td>
					<table class="table">
						<tbody>
							<td><?php echo $report['MCH'] ?></td>
							<td><?php echo $report['FCH'] ?></td>
						</tbody>
					</table>
				</td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['during_month'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Indoor Patients Discharges ends
	*/

	/*-----------------------------------------------------------------------*/	

	/*
	* Outdoor Patients Diagnostic
	*/
?>

<div class="col-xs-12" id="form_8">
	<center><h4>DIAGNOSTIC CATEGORISATION (OUTDOOR)</h4></center><br>
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>S.N.</td>
				<td>DIAGNOSIS</td>
				<td></td>
				<td>MALE</td>
				<td>FEMALE</td>
				<td>
					<center>CHILD</center>
					<table class="table table-bordered">
						<thead>
							<td><center>MCH</center></td>
							<td><center>FCH</center></td>
						</thead>
					</table>
				</td>
				<td>TOTAL</td>
				<td>MONTHLY</td>
				<td>PROGRESSIVE</td>	
			</thead>
		<tbody>
<?php
	if ($outdoor_diagnostic->count() > 0):
		foreach ($outdoor_diagnostic->results() as $data => $report):
?>
			<tr>
				<td class="sr-no"><center>1</center></td>
					<td><?php echo $report['diagnosis'] ?></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['male_new'] ?></div>
						<div class="diag-old"><?php echo $report['male_old'] ?></div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['female_new'] ?></div>
						<div class="diag-old"><?php echo $report['female_old'] ?></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><?php echo $report['MCH_new'] ?></div>
									<div class="diag-old"><?php echo $report['MCH_old'] ?></div>
								</td>
								<td>
									<div class="diag-new"><?php echo $report['FCH_new'] ?></div>
									<div class="diag-old"><?php echo $report['FCH_old'] ?></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['total_new'] ?></div>
						<div class="diag-old"><?php echo $report['total_old'] ?></div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['monthly_new'] ?></div>
						<div class="diag-old"><?php echo $report['monthly_old'] ?></div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['progressive_new'] ?></div>
						<div class="diag-old"><?php echo $report['progressive_old'] ?></div>
					</td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Outdoor Patients Diagnostic ends
	*/

	/*-----------------------------------------------------------------------*/	

	/*
	* Indoor Patients Diagnostic
	*/
?>

<div class="col-xs-12" id="form_9">
	<center><h4>DIAGNOSTIC CATEGORISATION (INDOOR)</h4></center><br>
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>S.N.</td>
				<td>DIAGNOSIS</td>
				<td></td>
				<td>MALE</td>
				<td>FEMALE</td>
				<td>
					<center>CHILD</center>
					<table class="table table-bordered">
						<thead>
							<td><center>MCH</center></td>
							<td><center>FCH</center></td>
						</thead>
					</table>
				</td>
				<td>TOTAL</td>
				<td>MONTHLY</td>
				<td>PROGRESSIVE</td>	
			</thead>
		<tbody>
<?php
	if ($indoor_diagnostic->count() > 0):
		foreach ($indoor_diagnostic->results() as $data => $report):
?>
			<tr>
				<td class="sr-no"><center>1</center></td>
					<td><?php echo $report['diagnosis'] ?></td>
					<td>
						<div class="diag-new div-new">NEW</div>
						<div class="diag-old div-old">OLD</div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['male_new'] ?></div>
						<div class="diag-old"><?php echo $report['male_old'] ?></div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['female_new'] ?></div>
						<div class="diag-old"><?php echo $report['female_old'] ?></div>
					</td>
					<td>
						<table class="table table-bordered">
							<tbody>
								<td>
									<div class="diag-new"><?php echo $report['MCH_new'] ?></div>
									<div class="diag-old"><?php echo $report['MCH_old'] ?></div>
								</td>
								<td>
									<div class="diag-new"><?php echo $report['FCH_new'] ?></div>
									<div class="diag-old"><?php echo $report['FCH_old'] ?></div>
								</td>
							</tbody>
						</table>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['total_new'] ?></div>
						<div class="diag-old"><?php echo $report['total_old'] ?></div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['monthly_new'] ?></div>
						<div class="diag-old"><?php echo $report['monthly_old'] ?></div>
					</td>
					<td>
						<div class="diag-new"><?php echo $report['progressive_new'] ?></div>
						<div class="diag-old"><?php echo $report['progressive_old'] ?></div>
					</td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Indoor Patients Diagnostic ends
	*/	

	/*-----------------------------------------------------------------------*/	

	/*
	* Duration of Stay
	*/
?>

<div class="col-xs-12" id="form_10">
	<center><h4>DURATION OF STAY</h4></center><br>
	<table class="table table-bordered">
		<thead>
			<thead>
				<td></td>
				<td>MALE</td>
				<td>FEMALE</td>
				<td colspan="2">
					<center>CHILD</center>
					<table class="table table-bordered">
						<thead>
							<td><center>MCH</center></td>
							<td><center>FCH</center></td>
						</thead>
					</table>
				</td>
				<td>TOTAL</td>
				<td>DM</td>
				<td>PROGRESSIVE</td>
			</thead>
		<tbody>
<?php
	if ($duration->count() > 0):
		foreach ($duration->results() as $data => $report):
?>
			<tr>
				<td><?php echo $report['stay_period'] ?></td>
				<td><?php echo $report['stay_male'] ?></td>
				<td><?php echo $report['stay_female'] ?></td>
				<td><?php echo $report['stay_MCH'] ?></td>
				<td><?php echo $report['stay_FCH'] ?></td>
				<td><?php echo $report['stay_total'] ?></td>
				<td><?php echo $report['stay_DM'] ?></td>
				<td><?php echo $report['stay_progressive'] ?></td>
			</tr>
<?php			
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Duration of Stay ends
	*/	

	/*-----------------------------------------------------------------------*/	

	/*
	* Outreach services
	*/
?>

<div class="col-xs-12" id="form_11">
	<center><h4>OUTREACH SERVICES (OUTDOOR)</h4></center><br>
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>Sr. No.</td>
				<td></td>
				<td>MALE</td>
				<td>FEMALE</td>
				<td colspan="2">
					<center>CHILD</center>
					<table class="table table-bordered">
						<thead>
							<td><center>MCH</center></td>
							<td><center>FCH</center></td>
						</thead>
					</table>
				</td>
				<td>TOTAL</td>
				<td>DM</td>
				<td>PROGRESSIVE</td>
			</thead>
		<tbody>
<?php
	if ($outreach_services->count() > 0):
		$x = 1;
		foreach ($outreach_services->results() as $data => $report):
?>
			<tr>
				<td><?php echo $x; ?></td>
				<td><?php echo $report['place'] ?></td>
				<td><?php echo $report['male'] ?></td>
				<td><?php echo $report['female'] ?></td>
				<td><?php echo $report['MCH'] ?></td>
				<td><?php echo $report['FCH'] ?></td>
				<td><?php echo $report['total'] ?></td>
				<td><?php echo $report['DM'] ?></td>
				<td><?php echo $report['progressive'] ?></td>
			</tr>
<?php			
			$x++;
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Outreach Services ends
	*/

	/*-----------------------------------------------------------------------*/	

	/*
	* Criminal Patients
	*/
?>

<div class="col-xs-12" id="form_12">
	<center><h4>Information On Criminal Patients Admitted</h4></center><br>
	<table class="table table-bordered">
		<thead>
			<thead>
				<td>Sr. No.</td>
					<td>Name of the Pts</td>
					<td>G R No.</td>
					<td>Date of <br> Admission</td>
					<td>MLC No.</td>
					<td></td>
					<td>IPC <br> Crime Section</td>
					<td></td>
					<td>Diagnosis</td>
			</thead>
		<tbody>
<?php
	if ($criminal_patients->count() > 0):
		$x = 1;
		foreach ($criminal_patients->results() as $data => $report):
?>
			<tr>
				<td class="sr-no"><?php echo $x; ?></td>
				<td><?php echo $x ?></td>
				<td><?php echo $report['name_of_patient'] ?></td>
				<td><?php echo $report['g_r_no'] ?></td>
				<td><?php echo $report['date_of_admission'] ?></td>
				<td><?php echo $report['MLC'] ?></td>
				<td><?php echo $report['IPC'] ?></td>
				<td><?php echo $report['IPC_next'] ?></td>
				<td><?php echo $report['diagnosis'] ?></td>
			</tr>
<?php			
			$x++;
		endforeach;
	endif;
?>
		</tbody>
	</table>
</div>

<?php

	/*
	* Criminal Patients ends
	*/	