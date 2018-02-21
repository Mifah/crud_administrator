console.log('admin.js initialed');
	var mdl_ubah		= $('#mdl_ubah');
	var form_edit = $('#form_edit');
$('table').on('click','#ubah',function () {
	var pk 				= $(this).data('pk');
	console.log("{url}");
	// $.ajax({
	// 	url: '{url}'
	// });
	// $('#pk').val(pk);
	// $('#username').val(username);
	// $('#password').val(password);
	// $('#email').val(email);
	// $('#nama_lengkap').val(nama_lengkap);
	// mdl_ubah.modal('show');

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