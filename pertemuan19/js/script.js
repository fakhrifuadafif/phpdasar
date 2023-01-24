//ambil elemen yang di butuhkan

var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombol-cari');
var container = document.getElementById('container');
//tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup',function(){
    //buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status ==200){
            container.innerHTML = xhr.responseText;
        }
    }
    // ekekusi ajaxa
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value , true);
    xhr.send();
});