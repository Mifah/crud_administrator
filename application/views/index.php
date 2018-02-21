<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Administrator</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container-fluid">
			<secttion id="head">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="{url}dashboard">Administrator</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengguna <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="{url}daftar/pengguna">Daftar</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('name');?> <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="{url}logout">logout</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</secttion>	
			<article id="content">
				<div class="container-fluid">
					{content}
				</div>
			</article>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var mdl_ubah		= $('#mdl_ubah');
			var form_edit = $('#form_edit');
			$('table').on('click','#ubah',function () {
				var pk 				= $(this).data('pk');
				// console.log("{url}");
				$.ajax({
					url: '{url}detail/pengguna/'+pk,
					type:'get',
					dataType:'json',
					success: function(data) {
						var parse = data[0];
						// console.log(parse);
						$('#pk').val(parse.pk);
						$('#username').val(parse.username);
						$('#password').val(parse.password);
						$('#email').val(parse.email);
						$('#nama_lengkap').val(parse.nama_lengkap);
						mdl_ubah.modal('show');
					}
				});

			});
			if (form_edit.length>0) {

				$('#btn_edit').click(function (e) {
					e.preventDefault();
					$.ajax({
						url : form_edit.attr('action'),
						type : form_edit.attr('method'),
						data : form_edit.serialize(),
						success : function(data) {
							$('.table').load();
							mdl_ubah.modal('hide');
							console.log(data);
							location.reload();
						}
					});
					// console.log($('#form_edit').serialize());
				});
			}
		</script>
	</body>
</html>