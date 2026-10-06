<?php

require_once "Models/HomeModel.php";

class HomeControl
{
    private $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    public function index()
    {
        $buku = $this->model->getBukuTerbaru();
        $jumlahBuku = $this->model->getJumlahBuku();
        $jumlahPengguna = $this->model->getJumlahPengguna();
        $jumlahChallenge = $this->model->getJumlahChallenge();

        require_once "Views/home/index.php";
    }
}

?>