<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'class'	=> 'small input-text',
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}

$error_message = '';
if( form_error($login['name']) !=''){
$error_message = "<small class=\"error\">".str_replace("Login field", "Email field", form_error($login['name']) )."</small>";
}

if(isset($errors[$login['name']])){
$error_message .= "<small class=\"error\">".str_replace("Login", "Email", $errors[$login['name']] )."</small>";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>codeigniter Facebook Google Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Language" content="en-us"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta http-equiv="imagetoolbar" content="no"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="/css/main.css" media="all" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="wrapper">
	<div class="slim container">
		<div class="row">
			<div class="box01">
				<div class="login-window">
					<div id="header">
						<h1>Reset Password</h1>
					</div>
					
					<?php echo $error_message; ?>

					<div class="row left10">

						<?php echo form_open($this->uri->uri_string(), array('class'=>'nicely')); ?>
							<?php echo form_label($login_label, $login['id']); ?>
							<?php echo form_input($login); ?>

							<div class="logbtn resetbtn_margin">
								<button type="submit" id="loginBtn" class="nice radius button white">Reset Password</button>
							</div>
						</form>
					</div>

				</div>

		    <div style=margin-top:10px;>
		        &copy; <?php echo date("Y");?> by Young Jun "John" Kim
		    </div>

			</div>
		</div>
	</div>
</div>
</body>
</html>