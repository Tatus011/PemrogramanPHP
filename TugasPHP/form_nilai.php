<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Ujian</title>
</head>
<body>

<h2>Form Nilai Ujian</h2>

<form method="POST" action="">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Nilai Ujian:</label><br>
    <input type="number" name="nilai" min="0" max="100" required><br><br>

    <input type="submit" name="submit" value="Kirim">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nilai = $_POST['nilai'];

    // Struktur kendali
    if ($nilai > 70) {
        $status = "Lulus";
    } else {
        $status = "Remedial";
    }

    // Tampilkan output
    echo "<h3>Hasil:</h3>";
    echo "Nama: $nama <br>";
    echo "Email: $email <br>";
    echo "Nilai Ujian: $nilai <br>";
    echo "Status: <strong>$status</strong>";
}
?>

</body>
</html>
