$(function () {

    //mencari button tampilmModalUbah yg di click menjalan kan sesuatu
    $('.tombolTambahData').on('click', function () {
        //cari id dan ubahnamanya
        $('#judulmodalLabel').html('Tambah Data Uks');
        //cari button dari class ini yang type nya ini dan ganti namanya
        $('.modal-footer button[type=submit]').html('Tambah data');
        //happus value menjadi default
        $('#nama').val('');
        $('#alamat').val('');
        $('#notelp').val('');
    });

    //mencari button tampilmModalUbah yg di click menjalan kan sesuatu
    $('.tampilmModalUbah').on('click', function () {

        //cari id dan ubahnamanya
        $('#judulmodalLabel').html('Ubah Data Uks');
        //cari button dari class ini yang type nya ini dan ganti namanya
        $('.modal-footer button[type=submit]').html('Ubah data');
        // mencari elemen modal body cari form dan ganti atribut nya yaitu action nya
        $('.modal-body form').attr('action', 'http://localhost/belajar_ulang/mvc%20lawas/public/uks/ubah')
        //tombol manapun yang di clik ambil data nya yang namanya id 
        const id = $(this).data('id');

        //menjalankan ajax
        $.ajax({
            //mengambil data ke url mana
            url: 'http://localhost/belajar_ulang/mvc%20lawas/public/uks/getubah',
            //mengirim data
            data: {
                id: id
            },
            //mnegirim data dgn method apa
            method: 'post',
            //tipe datanya apa
            dataType: 'json',
            //ketika sukses menjalanin apa
            success: function (data) {

                $('#nama').val(data.nama); //mencari input nama dan mengganti value nya sesuai data
                $('#alamat').val(data.alamat); //mencari input alamat dan mengganti value nya sesuai data
                $('#notelp').val(data.notelp); //mencari input notelp dan mengganti value nya sesuai data
                $('#id').val(data.id); //mencari input id dan mengganti value nya sesuai data
            }
        });
    });


});