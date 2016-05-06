<?php
	require_once '../core/init.php';

	$user = new User();

?>

<div class="login-form col-xs-8" id="loginForm">
	<form class="changePass" action="changepassword.php" method="post">
		<div id="hiddenDiv"></div>
		<div id="passDiv"></div>
		<div class="col-xs-12">
			<div class="passwordDiv form-group col-xs-6">
				<input class="form-control changePassword" type="password" name="Oldpassword" placeholder="CURRENT PASSWORD"/>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="passwordDiv form-group col-xs-6">
				<input class="form-control changePassword" type="password" name="Newpassword" placeholder="NEW PASSWORD"/>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="passwordDiv form-group col-xs-6">
				<input class="form-control changePassword" type="password" name="Confirmpassword" placeholder="CONFIRM PASSWORD"/>
			</div>
		</div>
		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
		<div class="form-div form-group col-xs-6">
			<input class="form-element btn btn-primary" type="submit" id="passBtn" value="Change"/>
		</div>
	</form>
</div>
<script src="script/changepassword.js"></script>