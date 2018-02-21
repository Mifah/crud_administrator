<div class="panel panel-default">
	<div class="panel-heading">
		<i class="fa fa-user"></i> Daftar Pengguna
	</div>
	<div class="panel-body">
	<a href="{url}tambah/pengguna" class="btn btn-primary">Tambah</a>
	<div class="table-responsive">
		<p>
			<?php if (!empty($this->session->flashdata('berhasil'))): ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Berhasil!</strong> <?= $this->session->flashdata('berhasil'); ?>
				</div>
			<?php endif ?>
			<?php if (!empty($this->session->flashdata('gagal'))): ?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Gagal!</strong> <?= $this->session->flashdata('gagal'); ?>
				</div>
			<?php endif ?>
		</p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th colspan="3" width="10%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				{pengguna}
				<tr>
					<td>{username}</td>
					<td>{email}</td>
					<td>{password}</td>
					<td>
						<a href="<?= $url ?>edit/pengguna/{pk_user}" class="btn btn-small btn-primary"><i class="fa fa-pencil"></i> Edit</a>
					</td>
					<td>
						<a href="<?= $url ?>hapus/pengguna/{pk_user}" class="btn btn-small btn-danger"><i class="fa fa-trash"></i> Hapus</a>
					</td>
					<td>
						<a id="ubah" data-pk="{pk_user}" class="btn btn-small btn-warning"><i class="fa fa-eye"></i> Detail
						</a></td>
				</tr>
				{/pengguna}
			</tbody>
		</table>
	</div>
</div>

	<div class="modal fade" id="mdl_ubah">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Detail Data Pengguna</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name="pk" id="pk">

					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username">
					</div>

					<div class="form-group">
						<label for="password">password</label>
						<input type="password" class="form-control" name="password" id="password">
					</div>

					<div class="form-group">
						<label for="nama_lengkap">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email">
					</div>
				</div>
				<div class="modal-footer">
					<!-- <button type="submit" class="btn btn-primary" id="btn_detail">Edit</button> -->
				</div>
			</div>
		</div>
	</div>
</div>