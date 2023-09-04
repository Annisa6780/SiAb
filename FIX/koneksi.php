<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "test";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
}

class koneksi {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "test";
    protected $koneksi;
    public function __construct(){
        try {
            $this->koneksi = new PDO ("mysql:host=$this->host; dbname=$this->db", $this->user, $this->pass);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $this->koneksi;
    }
        
    }
?>

