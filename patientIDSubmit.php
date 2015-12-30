<?php

require_once 'core/init.php';

if (Input::exists()){
	$db = DB::getInstance();

	$insertReports = $db->insert('OPD_Paper', array(
			'history' => Input::get('history_1'),
			'investigation' => Input::get('investigation_1'),
			'treatment' => Input::get('treatment'),
			'remark' => Input::get('remark'),
			'unique_id' => Input::get('unique_id')
		));

}else{
	header('Location:index.php');
}