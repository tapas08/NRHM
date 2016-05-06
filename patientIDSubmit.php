<?php

$message = [];

require_once 'core/init.php';

if (Input::exists()){
	$db = DB::getInstance();

	$insertReports = $db->insert('OPD_Paper', array(
			'history' => Input::get('history'),
			'investigation' => Input::get('investigation'),
			'treatment' => Input::get('treatment'),
			'remark' => Input::get('remark'),
			'unique_id' => Input::get('unique_id')
		));

	if ($insertReports){
		// Proceed to insert images if any
		try {
			$dir_name = Input::get('unique_id');
			mkdir("$dir_name/", 0777, true);	
			if (count($_FILES['pts_img']) > 0){
				//$count = count($_FILES['pts_img']),"<br>";
				$keys = array_keys($_FILES['pts_img']);
				//print_r($keys);
				$i = 0;
				foreach ($_FILES['pts_img']['name'] as $key => $values){
					//echo $i,"<br>";
					//print_r($_FILES);
					echo $path = Input::get('unique_id').'/'.$_FILES['pts_img']['name'][$i];
					$file_ext = array('jpg', 'JPG', 'bmp', 'png', 'gif', 'JPEG');
					$image_ext = end(explode('.', $_FILES['pts_img']['name'][$i]));
					$image_name = $_FILES['pts_img']['name'][$i];
					$image_type = $_FILES['pts_img']['type'][$i];
					$image_tmp = $_FILES['pts_img']['tmp_name'][$i];
					$image_error = $_FILES['pts_img']['error'][$i];
					$image_size = $_FILES['pts_img']['size'][$i];

					if (($image_type == 'image/png')|| ($image_type == 'image/gif') || 
						($image_type == 'image/jpeg') || ($image_type == 'image/pjpeg') &&
						($image_size < 2000000) && in_array($image_ext, $file_ext)){
						if ($image_error > 0){
							$message[] = '<p class="alert alert-warning">Error! '+$image_error+'</p>';
						}
						else{
							move_uploaded_file($_FILES['pts_img']['tmp_name'][$i], $path);
						}
					}
					$i++;
				}
			}
		} catch (Exception $e) {
			$message[] = "<p class='alert alert-warning'>Error creating new directory</p>";
		}
	}else{
		$message[] = "<p class='alert alert-warning'>Problem inserting data. Please try again!</p>";
	}

}else{
	header('Location:index.php');
}

print_r($message);