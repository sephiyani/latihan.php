<?php
if (isset($_POST['input'])) {
    $nama = ($_POST['Nama']);
    $nis = ($_POST['NIS']);
    $alamat = ($_POST['alamat']);
    $jk = ($_POST['Jenis Kelamin']);
    $agama = ($_POST['Agama']);
    $asalsekolah = ($_POST['Asal Sekolah']);
    $not = ($_POST['Nama Orang Tua']);
    $mp = ($_POST['Mata Pelajaran Yang di Sukai']);
    $email = ($_POST['Email']);
    $nj = ($_POST['Nilai Ijazah SD']);

    echo "Nama : <b>$nama</b><br>";
    echo "Nomor Induk Siswa : <b>$nis</b><br>";
    echo "Alamat : <b>$alamat</b><br>";
    echo "Jenis Kelamin : <b>$jk</b><br>";
    echo "Agama : <b>$agama</b><br>";
    echo "Asal Sekolah : <b>$asalsekolah</b><br>";
    echo "Nama Orang Tua : <b>$not</b><br>";
    echo "Mata Pelajaran Yang di Sukai : <b>$mp</b><br>";
    echo "Email : <b>$email</b><br>";
    echo "Nilai Ijazah SD : <b>$nj</b><br>";

    if ($nj >=23) {
        echo "Selamat Anda Diterima";
    } else{
        echo "Maaf Anda Tidak Diterima";
    }

}
?>