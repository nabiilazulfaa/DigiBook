<?php

require_once "koneksi.php";

class AdminModel
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


    public function tambahBuku(
        $judul,
        $penulis,
        $kategori,
        $deskripsi,
        $cover,
        $file_buku,
        $total_halaman
    ) {

        $judul = $this->db->real_escape_string($judul);
        $penulis = $this->db->real_escape_string($penulis);
        $kategori = $this->db->real_escape_string($kategori);
        $deskripsi = $this->db->real_escape_string($deskripsi);
        $cover = $this->db->real_escape_string($cover);
        $file_buku = $this->db->real_escape_string($file_buku);

        $total_halaman = (int) $total_halaman;


        $query = "INSERT INTO buku
                  (
                    judul,
                    penulis,
                    kategori,
                    deskripsi,
                    cover,
                    file_buku,
                    total_halaman
                  )
                  VALUES
                  (
                    '$judul',
                    '$penulis',
                    '$kategori',
                    '$deskripsi',
                    '$cover',
                    '$file_buku',
                    $total_halaman
                  )";


        return $this->db->query($query);
    }


    public function hapusBuku($id)
    {
        $id = (int) $id;

        $query = "DELETE FROM buku WHERE id_buku = $id";

        return $this->db->query($query);
    }
}

?>