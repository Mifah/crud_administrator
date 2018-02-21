<!DOCTYPE html>
<html lang="">
	<head>
		{meta}
		<title>Login</title>

		{css}
		{ie}
		
	</head>
	<body>
		<div class="container" style="margin-top: 200px;">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="{url}cek" method="POST" role="form" id="form_login" autocomplete="off">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
								<legend class="text-center">Login</legend>
								<div class="notif"></div>
								<div class="form-group">
									<label for="username">Username</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus>
									</div>
									<div id="help_username" class="help-block"></div>
								</div>
								
								<div class="form-group">
									<label for="password">Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-lock"></i>
										</div>
										<input type="password" name="password" id="password" class="form-control" placeholder="Password">
									</div>
									<div id="help_password" class="help-block"></div>
								</div>
								
								Belum Punya Akun? <a href="{url}register">Registrasi</a>
								<button type="submit" class="btn btn-primary btn-block" id="btn_login">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		{js}
	</body>
</html>