<?php

require_once "Models/AdminModel.php";

class AdminControl
{
    private $model;


    public function __construct()
    {
        $this->model = new AdminModel();
    }


    private function cekAdmin()
    {
        if (
            !isset($_SESSION['id_pengguna']) ||
            $_SESSION['role'] !== 'admin'
        ) {

            header("Location: index.php?halaman=home");
            exit;

        }
    }


    public function dashboard()
    {
        $this->cekAdmin();

        $buku = $this->model->getSemuaBuku();

        require_once "Views/admin/dashboard.php";
    }


    public function buku()
    {
        $this->cekAdmin();

        $buku = $this->model->getSemuaBuku();

        require_once "Views/admin/buku.php";
    }


    public function tambahBuku()
    {
        $this->cekAdmin();


        if (isset($_POST['tambah_buku'])) {

            $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $kategori = $_POST['kategori'];
            $deskripsi = $_POST['deskripsi'];
            $total_halaman = $_POST['total_halaman'];


            /* =========================
               COVER
            ========================= */

            $cover = "";

            if (
                isset($_FILES['cover']) &&
                $_FILES['cover']['error'] === 0
            ) {

                $namaCover = time() . "_" . basename(
                    $_FILES['cover']['name']
                );

                $lokasiCover =
                    "uploads/buku/" . $namaCover;

                move_uploaded_file(
                    $_FILES['cover']['tmp_name'],
                    $lokasiCover
                );

                $cover = $namaCover;
            }


            /* =========================
               FILE BUKU
            ========================= */

            $file_buku = "";

            if (
                isset($_FILES['file_buku']) &&
                $_FILES['file_buku']['error'] === 0
            ) {

                $namaFile = time() . "_" . basename(
                    $_FILES['file_buku']['name']
                );

                $lokasiFile =
                    "uploads/buku/" . $namaFile;

                move_uploaded_file(
                    $_FILES['file_buku']['tmp_name'],
                    $lokasiFile
                );

                $file_buku = $namaFile;
            }


            $hasil = $this->model->tambahBuku(
                $judul,
                $penulis,
                $kategori,
                $deskripsi,
                $cover,
                $file_buku,
                $total_halaman
            );


            if ($hasil) {

                header(
                    "Location: index.php?halaman=admin_buku"
                );

                exit;

            } else {

                $error = "Buku gagal ditambahkan.";

            }
        }


        require_once "Views/admin/tambah_buku.php";
    }


    public function hapusBuku()
    {
        $this->cekAdmin();


        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $this->model->hapusBuku($id);

        }


        header(
            "Location: index.php?halaman=admin_buku"
        );

        exit;
    }
}

?>