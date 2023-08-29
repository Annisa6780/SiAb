<?php
// Sambungkan ke database MySQL
$host = "192.168.0.153";
$username = "username_db";
$password = "password_db";
$database = "test";

$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari formulir HTML
$nama = $_POST['email'];
$email = $_POST['password'];

// Simpan data ke database
$query = "INSERT INTO tabel_pengguna (nama, email) VALUES ('$nama', '$email')";
if ($koneksi->query($query) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
