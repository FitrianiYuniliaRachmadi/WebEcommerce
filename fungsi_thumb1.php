<?php
function UploadImage($fupload_name){
  //direktori gambar
  $vdir_upload = "gambar_bukti/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
?>
