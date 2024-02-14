$(function() {

    $('.tampilModalTambah').on('click', function(){
        
        $('#modalUbah').html('Tambah data');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        
        $.ajax({
            url: 'http://localhost/PhpMvc/public/mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType : 'json',
            success: function(data) {
                
                $('#nama').val('');
                $('#nim').val('');
                $('#jurusan').val('');
            },
            error: function(xhr, status, error) {
                console.error("AJAX request error:", status, error);
                alert("Terjadi kesalahan dalam permintaan AJAX. Silakan coba lagi.");
            }
        });
        
    });
    $('.tampilModalUbah').on('click', function(){
        $('#modalUbah').html('Ubah data');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/PhpMvc/public/mahasiswa/ubah');
        
        const id = $(this).data('id');
        
      
        $.ajax({
            url: 'http://localhost/PhpMvc/public/mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType : 'json',
            success: function(data) {

                $('#nama').val(data.Nama);
                $('#nim').val(data.Nim);
                $('#jurusan').val(data.Jurusan);
            },
            error: function(xhr, status, error) {
                console.error("AJAX request error:", status, error);
                alert("Terjadi kesalahan dalam permintaan AJAX. Silakan coba lagi.");
            }
        });
    });

});

