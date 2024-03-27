<IDOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Form Contoh</h2>
    <form id="myForm">
        <label for="buah">Pilih Buah :</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih Warna Favorit :</label><br>
        <input type="checkbox" nane="warna[]" value="nerah"> Merah<br>
        <input type="checkbox" nane="warna[]" value="biru"> Biru<br>
        <input type="checkbox" nane="warna[]" value="hijau"> Hijau<br>

        <br>

        <label>Pilih Jenis Kelamin :</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" nane="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </forn>

    <div id="hasil">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <script>
            $(document).ready(function () {
                $("tmyForm").submit(function (e) {
                    e.preventDefault(); // Mencegah pengiriman form secara default

                    // Mengumpulkan data form
                    var formData = $("#myForm").serialize();

                    // Kirim data ke server PHP
                    $.ajax({
                        url: "proses_lanjut.php", // Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: fornData,
                        success: function (response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("ahasil").html(response);
                        }
                    });
                });
            });
    </script>
</body>
</html>