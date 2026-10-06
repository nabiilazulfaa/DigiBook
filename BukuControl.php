<?php

require_once "Models/BukuModel.php";

class BukuControl
{
    private $model;

    public function __construct()
    {
        $this->model = new BukuModel();
    }


    public function index()
    {
        $buku = $this->model->getSemuaBuku();

        require_once "Views/buku/index.php";
    }


    public function detail()
    {
        if (!isset($_GET['id'])) {

            header("Location: index.php?halaman=buku");
            exit;

        }

        $id = $_GET['id'];

        $buku = $this->model->getBukuById($id);

        if (!$buku) {

            echo "Buku tidak ditemukan.";
            exit;

        }

        require_once "Views/buku/detail.php";
    }


    public function baca()
    {
        if (!isset($_SESSION['id_pengguna'])) {

            header("Location: index.php?halaman=login");
            exit;

        }

        if (!isset($_GET['id'])) {

            header("Location: index.php?halaman=buku");
            exit;

        }

        $id = $_GET['id'];

        $buku = $this->model->getBukuById($id);

        if (!$buku) {

            echo "Buku tidak ditemukan.";
            exit;

        }

        require_once "Views/buku/baca.php";
    }
}

?>