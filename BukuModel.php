<?php

require_once "koneksi.php";

class BukuModel
{
    private $db;

    public function __construct()
    {
        $koneksi = new Koneksi();
        $this->db = $koneksi->conn;
    }


    public function getSemuaBuku()
    {
        $query = "SELECT * FROM buku ORDER BY id_buku DESC";

        return $this->db->query($query);
    }


    public function getBukuById($id)
    {
        $id = (int) $id;

        $query = "SELECT * FROM buku WHERE id_buku = $id";

        $hasil = $this->db->query($query);

        return $hasil->fetch_assoc();
    }
}

?>