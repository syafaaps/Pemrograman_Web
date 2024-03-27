<?php
// Mendapatkan nilai dari input
$input = isset($_POST['input']) ? $_POST['input'] : '';

// Melakukan sanitasi input
$input_sanitized = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

// Memeriksa apakah input adalah email yang valid
$email = isset($_POST['email']) ? $_POST['email'] : '';
$emailErr = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
        } else {
            // Tangani input yang tidak valid
            $emailErr = "Format email tidak valid!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sanitasi Input</title>
</head>
<body>
    <h2>Sanitasi Input</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Masukkan Input:</label>
        <input type="text" name="input" id="input" value="<?php echo htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
    // Menampilkan hasil sanitasi input
    if (isset($input_sanitized)) {
        echo "<p>Input yang disanitasi: $input_sanitized</p>";
    }
    ?>
</body>
</html>
