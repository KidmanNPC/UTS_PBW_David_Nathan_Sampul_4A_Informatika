<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $koneksi->real_escape_string(trim($_POST["name"]));
    $email = $koneksi->real_escape_string(trim($_POST["email"]));
    $subjek = $koneksi->real_escape_string(trim($_POST["subject"]));
    $pesan = $koneksi->real_escape_string(trim($_POST["message"]));
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $created_at = date('Y-m-d H:i:s');

    // Simpan ke database
    $sql = "INSERT INTO pesan (nama, email, subjek, pesan, ip_address, created_at) 
            VALUES ('$nama', '$email', '$subjek', '$pesan', '$ip_address', '$created_at')";

    if ($koneksi->query($sql) === TRUE) {
        // Kirim email (kode sebelumnya)
        mail($recipient, $subjek, $email_content, $headers);
        header("Location: ../index.php?status=success");
    } else {
        header("Location: ../contact.php?status=error");
    }

    $koneksi->close();
} else {
    header("Location: ../contact.php");
}
?>