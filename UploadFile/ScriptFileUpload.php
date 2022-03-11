<?php 
	include 'Koneksi.php';
	
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$namaFile = $_FILES['berkas']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];

	// Lokasi Penempatan file
	$dirUpload = "file/";
	$linkBerkas = $dirUpload.$namaFile;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);

	$dataArr = array(
        'kode_buku' => $kode, 
        'nama_buku' => $nama,
        'title' => $namaFile, 
        'size' => $ukuranFile, 
        'ekstensi' => $ekstensiFile, 
        'berkas' => $linkBerkas, 
    );

	if ($terupload && (insertData($dataArr) == 1)) {
	    echo "Upload berhasil!";
	    header("Location: index.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: halaman_upload.php", true, 301);
        exit();
	}

 ?>