$(function(){
    $('.modalEdit').on('click', function(){
        $('#judulModal').html('Ubah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Ubah')
        $('.modal-body form').attr('action', 'http://localhost/oop/MVC/public/mahasiswa/ubah')

        const id = $(this).data('id')
        $.ajax({
            url: 'http://localhost/oop/MVC/public/mahasiswa/getUbah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                console.log(data)
                $('#id').val(data.id)
                $('#nama').val(data.nama)
                $('#kelas').val(data.kelas)
                $('#umur').val(data.umur)
            }

        })
    })
})

$(function(){
    $('.btn-tambah-data').on('click', function(){
        $('#judulModal').html('Tambah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Tambah')

    })
})