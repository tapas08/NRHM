<?php

require_once '../core/init.php';

$choice = Input::get('access');

switch ($choice) {
	case 'user_list':
		user_list();
		break;

	case 'insert_user_data':
		insert_user_data();
		break;
	
	case 'delete':
		delete();
		break;

	case 'place_details':
		place_details();
		break;

	default:
		# code...
		break;
}


function user_list(){
	if(Input::exists()){
		$db = DB::getInstance();

		$search_term = Input::get('search_term');
		$search_term = "%$search_term%";

		$get_list = $db->quert("SELECT * FROM authorized_doctors_list WHERE doctor_name LIKE $search_term");

		if ($get_list->count() > 0){
			foreach($get_list->results() as $doctors_list => $doctor){
				echo "<option>{$doctor['doctor_name']}</option>";
			}
		}
	}
}

function insert_user_data(){
	if (Input::exists()){
		$db = DB::getInstance();
		$doctor = [];
		$get_data = $db->get('authorized_doctors_list', array('doctor_name', '=', Input::get('user')));

		if ($get_data){
			$doctor['email'] = $get_data->first()['doctors_email'];
			$doctor['password'] = $get_data->first()['password'];

			echo json_encode($doctor);
		}
	}
}

function delete(){
	if (Input::exists()){
		$db = DB::getInstance();

		$delete = $db->delete("users", array('doctors_id', '=', Input::get('id')));

		if ($delete){
			echo "<p class='alert alert-info'>User deleted!</p>";
		}else{
			echo "<p class='alert alert-warning'>Error! Unable to carry your request.</p>";
		}
	}
}

function place_details(){
	if (Input::exists()){
		$place_details = '';
		if (Input::get('place') == "wardha"){
			$place_details .= '<div class="list-group-item">';
			$place_details .= '<h4 class="list-group-item-heading"><strong>C.S.</strong></h4>';
			$place_details .= '<p class="list-group-item-text">Dr Purushottam Madavi</p>';
			$place_details .= '</div>';
			$place_details .= '<div class="list-group-item">';
			$place_details .= '<h4 class="list-group-item-heading"><strong>ACS</strong></h4>';
			$place_details .= '<p class="list-group-item-text">Dr Rathod</p>';
			$place_details .= '</div>';
			$place_details .= '<div class="list-group-item">';
			$place_details .= '<h4 class="list-group-item-heading"><strong>Nodal officer</strong></h4>';
			$place_details .= '<p class="list-group-item-text">Dr S Harle</p>';
			$place_details .= '</div>';
			$place_details .= '<div class="list-group-item">';
			$place_details .= '<h4 class="list-group-item-heading"><strong>Record keeper</strong></h4>';
			$place_details .= '<p class="list-group-item-text">Ms Swati Waghmare</p>';
			$place_details .= '</div>';
			$place_details .= '<div class="list-group-item">';
			$place_details .= '<h4 class="list-group-item-heading"><strong>Phone No.</strong></h4>';
			$place_details .= '<p class="list-group-item-text">071 52-248333</p>';
			$place_details .= '</div>';
			$place_details .= '<div class="list-group-item">';
			$place_details .= '<h4 class="list-group-item-heading"><strong>Mail ID</strong></h4>';
			$place_details .= '<p class="list-group-item-text">cs_wardha@rediffmail.com</p>';
			$place_details .= '</div>';
			$place_details .= '<div class="list-group-item">';
			$place_details .= '<h4 class="list-group-item-heading"><strong>Fax No.</strong></h4>';
			$place_details .= '<p class="list-group-item-text">-----------</p>';
			$place_details .= '</div>';
			echo $place_details;
		}
	}
}