<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";
        ?>
</body>
</html>

// perulangan
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        // Menggunakan perulangan untuk menampilkan elemen array
        foreach ($Listdosen as $dosen) {
            echo $dosen . "<br>";
        }
    ?>
</body>
</html>
