<?php 

require 'function.php';
$id = $_GET["id"];
// var_dump($id); die;
if ( hapus($id) > 0 ) {
    echo  "<script>
                alert('data berhasil di hapus');
                document.location.href = 'index.php';
            </script>
            ";
}
else {
    echo  
            "<script>
                alert('data gagal di hapus');
                document.location.href = 'index.php';
            </script>";
}
?>