const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal({
		title: 'Data Surat Masuk',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin',
		text: "data surat masuk akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cencelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
