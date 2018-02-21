<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<!-- <script src="Hello World"></script> -->
 		<script type="text/javascript">
 			var btn_login 		= $('#btn_login');
 			var btn_signup 		= $('#btn_signup');
 			var nama_lengkap 	= $('#nama_lengkap');
 			var email 			= $('#email');
 			var username 		= $('#username');
 			var password 		= $('#password');
 			var password_c 		= $('#password_c');
 			var help_nama 		= $('#help_nama');
 			var help_email 		= $('#help_email');
 			var help_username 	= $('#help_username');
 			var help_password 	= $('#help_password');
 			var help_password_c = $('#help_password_c');
 			var form_login 		= $('#form_login');
 			var form_signup 	= $('#form_signup');
 			var $return;

 			function validate_login() 
 			{
 				if (username.val()=='') 
 				{
 					help_username.text('Username Jangan Kosong');
 					$return = 0;
 				} else 
 				{
 					help_username.text('');
 					$return = 1;
 				}

 				if (password.val()=='') 
 				{
 					help_password.text('password Jangan Kosong');
 					$return = 0;
 				} else 
 				{
 					help_password.text('');
 					$return = 1;
 				}

 				return $return;
 			}

 			function validate_register() 
 			{

 				if (nama_lengkap.val()=='') 
 				{
 					help_nama.text('Nama Lengkap Jangan Kosong');
 					$return = 0;
 				} else {
 					help_nama.text('');
 					$return = 1;
 				}

 				if (email.val()=='') 
 				{
 					help_email.text('email Jangan Kosong');
 					$return = 0;
 				} else 
 				{
 					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					var cek = emailReg.test( email.val() );
					console.log('isi cek '+cek);

					if (!cek) 
					{
	 					help_email.text('Silahkan Isi Dengan Format Email');
	 					$return = 0;
					} else 
					{
	 					help_email.text('');
	 					$return = 1;
					}
 				}

 				if (username.val()=='') 
 				{
 					help_username.text('Username Jangan Kosong');
 					$return = 0;
 				} else {
 					help_username.text('');
 					$return = 1;
 				}

 				if (password.val()=='') 
 				{
 					help_password.text('password Jangan Kosong');
 					$return = 0;
 				} else 
 				{
 					help_password.text('');
 					$return = 1;
 				}

 				if (password_c.val()=='') 
 				{
 					help_password_c.text('Konfirmasi Password Jangan Kosong');
 					$return = 0;
 				} else 
 				{
 					if (password_c.val()==password.val()) 
 					{
	 					help_password_c.text('');
	 					$return = 1;
 					} else 
 					{
	 					help_password_c.text('Konfirmasi Password Tidak Sama');
	 					$return = 0;

 					}
 				}

 				return $return;

 			}

 			$(document).ready(function() {
 				// body...
 			});


 			btn_login.click(function (e) 
 			{
 				e.preventDefault();
	 			// console.log(validate_login());
 				if (validate_login()===1) 
 				{
	 				btn_login.html("<i class='fa fa-spin fa-refresh'></i> Wait");
	 				$.ajax({
	 					url 		: form_login.attr('action'),
	 					type 		: form_login.attr('method'),
	 					data 		: form_login.serialize(),
	 					dataType	: 'json',
	 					success		: function (data) {
	 						if (data.status=='success') 
	 						{
	 							console.log('sukses');
	 							setTimeout(function() {
	 								location.href = '{url}admin';	
	 							},2000);
	 						} else 
	 						{
	 							console.log('gagal');
	 						}
	 						// console.log(data);
	 						form_login[0].reset();
	 						username.focus();
	 						btn_login.text('Login');
	 					}
	 				});
	 				// console.log('Form Submitted');
	 				// console.log('The Username Field Contains '+username.val());
	 				// console.log('The Password Field Contains '+password.val());
 				}
 			});

 			btn_signup.click(function (e) 
 			{
 				e.preventDefault();
 				console.log('form register submitted!');
 				// console.log(validate_register());
 				if (validate_register()===1) {
	 				btn_signup.html("<i class='fa fa-spin fa-refresh'></i> Wait");
	 				$.ajax({
	 					url 		: form_login.attr('action'),
	 					type 		: form_login.attr('method'),
	 					data 		: form_login.serialize(),
	 					dataType	: 'json',
	 					success		: function (data) {
	 						// console.log(data);
	 						btn_signup.text('Register');
	 					}
	 				});
	 				// console.log('Form Submitted');
	 				// console.log('The Username Field Contains '+username.val());
	 				// console.log('The Password Field Contains '+password.val());
 				}
 			});
 		</script>