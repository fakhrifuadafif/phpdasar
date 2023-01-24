$(document).ready(function() {
    $('#tombol-cari').hide();

//   event ketika kyword ditulis

    $('#keyword').on('keyup', function(){
        $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val ());
    });

});
