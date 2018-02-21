<div class="panel panel-default">
	<div class="panel-heading">
		<i class="fa fa-plus"></i> Tambah Data Pengguna
	</div>
	<div class="panel-body">
		<form action="{url}aksi/tambah" method="POST" role="form" autocomplete="off">
			<div class="modal-body">
				<input type="hidden" name="pk" id="pk">
				<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" id="username" required>
				</div>

				<div class="form-group">
					<label for="password">password</label>
					<input type="password" class="form-control" name="password" id="password" required>
				</div>

				<div class="form-group">
					<label for="nama_lengkap">Nama Lengkap</label>
					<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" required>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>
		</form>
	</div>
</div>