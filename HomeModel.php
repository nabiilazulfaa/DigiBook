<?php

require_once "koneksi.php";

class HomeModel
{
    private $db;

    public function __construct()
    {
        $koneksi = new Koneksi();
        $this->db = $koneksi->conn;
    }

    public function getBukuTerbaru()
    {
        $query = "SELECT * FROM buku ORDER BY id_buku DESC LIMIT 6";

        $hasil = $this->db->query($query);

        return $hasil;
    }

    public function getJumlahBuku()
    {
        $query = "SELECT COUNT(*) AS jumlah FROM buku";

        $hasil = $this->db->query($query);
        $data = $hasil->fetch_assoc();

        return $data['jumlah'];
    }

    public function getJumlahPengguna()
    {
        $query = "SELECT COUNT(*) AS jumlah FROM pengguna";

        $hasil = $this->db->query($query);
        $data = $hasil->fetch_assoc();

        return $data['jumlah'];
    }

    public function getJumlahChallenge()
    {
        $query = "SELECT COUNT(*) AS jumlah FROM challenge";

        $hasil = $this->db->query($query);
        $data = $hasil->fetch_assoc();

        return $data['jumlah'];
    }
}

?>