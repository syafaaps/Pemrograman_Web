<!DOCTYPE html>
<html>
<head>
    <title>IMPLEMENTASI LOOPS PADA MULTIDIMENSIONAL ARRAY</title>
</head>
<body>

<?php  

// Deklarasi array $gambar yang berisi informasi tentang setiap gambar
$gambar = array(
    "gambar1.jpeg" => array(
        "nama" => "Nissa Sabyan",
        "alamat" => "Sidoarjo, Krian",
        "nomor_telepon" => "089532766345",
        "jurusan" => "Sistem Informasi Bisnis"
    ),
    "gambar2.jpeg" => array(
        "nama" => "Kumala Sari",
        "alamat" => "Kediri Kota",
        "nomor_telepon" => "08797535675",
        "jurusan" => "Teknik Informatika"
    ),
    "gambar3.jpeg" => array(
        "nama" => "Sarah Wijayanto",
        "alamat" => "Jl. Melati Putih no. 2D, Jakarta",
        "nomor_telepon" => "08976565454",
        "jurusan" => "Akuntansi"
    )
);

// Judul untuk multidimensional array
echo "<h2>KARTU MAHASISWA POLINEMA</h2>";

// Loop foreach untuk mencetak informasi setiap gambar
foreach ($gambar as $gambar_file => $info) {
    // Menampilkan tag img dengan atribut src yang sesuai dengan file gambar
    echo '<img src="' . $gambar_file . '"><br>';
    // Menampilkan informasi nama, alamat, nomor telepon, dan jurusan dari setiap gambar
    echo "Nama       ".": " . $info['nama'] . "<br>";
    echo "Alamat     ".": " . $info['alamat'] . "<br>";
    echo "Nomor Telp ".": " . $info['nomor_telepon'] . "<br>";
    echo "Jurusan    ".": " . $info['jurusan'] . "<br>";
    echo "<br>";
    echo "<br>";
}

?>  

</body>
</html>