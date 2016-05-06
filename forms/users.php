<div class="col-xs-8">
	
	<div id="user_msg"></div>

	<table class="table table-bordered">
		<thead>
			<td><center>Name</center></td>
			<td><center>Email</center></td>
			<td><center>Ph No.</center></td>
			<td><center>Operation</center></td>
		</thead>
		<tbody>
		<?php
			require_once '../core/init.php';

			$db = DB::getInstance();

			$userslist = $db->query("SELECT * FROM users");

			foreach ($userslist as $users => $user):
		?>
				<tr>
					<td><?php echo $user['username'] ?></td>
					<td><?php echo $user['email'] ?></td>
					<td><?php echo $user['phone'] ?></td>
					<td>
						<a href="javascript:;" onclick="delete_user(<?php echo $user['id']; ?>);">Delete</a>
					</td>
				</tr>
		<?
			endforeach;
		?>
		</tbody>
	</table>
</div>