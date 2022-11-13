$(function(){

    $( '.tambahData' ).on('click', function() {
        $('#formModal').html('Tambah Data Mahasiswa');
        $('#simpan').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/Pembelajaran/php_mvc/public/mahasiswa/tambah');
    });
    
    $( '.tampilModalUbah' ).on('click', function() {
        $('#formModal').html('Ubah Data Mahasiswa');
        $('#simpan').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Pembelajaran/php_mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        $.ajax({
            url : 'http://localhost/Pembelajaran/php_mvc/public/mahasiswa/getUbah',
            data : {id : id},
            method: 'POST',
            dataType : 'json',
        }).success(function(data){
            $('#Nama').val(data.Nama);
            $('#NPM').val(data.NPM);
            $('#email').val(data.email);
            $('#jurusan').val(data.jurusan);
            $('#id').val(data.id);
            
        });
    });
});

