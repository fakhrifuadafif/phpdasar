$(document).ready(function() {
    // hilangkan tombol cari
    $('#tombol-cari').hide();

//   event ketika kyword ditulis
     $('#keyword').on('keyup', function(){
        $('.loading').show();
    //     $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val ());
   
             $.get('ajax/mahasiswa.php?keyword=' +$('#keyword').val(), function(data) {
          
             $('#container') .html (data);
             $('.loading').hide();

         });   
    });

});
