<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h2>Buku Tamu</h2>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="komentar">Komentar:</label><br>
        <textarea id="komentar" name="komentar" rows="4" required></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];

        // Simpan data ke dalam file atau database
        $file = fopen("bukutamu.txt", "a"); // buka file untuk menulis (mode 'a' untuk menambahkan ke akhir file)
        fwrite($file, "Nama: $nama\n");
        fwrite($file, "Email: $email\n");
        fwrite($file, "Komentar: $komentar\n\n");
        fclose($file);

        echo "<p>Terima kasih telah mengisi buku tamu!</p>";
    }
    ?>
</body>
</html>
