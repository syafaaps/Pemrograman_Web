<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();
    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    // Jika ada kesalahan validasi
    if (is_array(($errors))){
        foreach ($errors as $error): ?>
        <?php echo $error; ?>
        <br/>
        <?php endforeach;
    }
        else {
    // Lanjutkan dengan pemrosesan data jika semua validasi berhasil 
    // Misalnya, menyimpan data ke database atau mengirim email
    echo "Data berhasil dikirim: Nama = $nama, Email = $email";
}
}
?>