<?php

session_start();

$halaman = isset($_GET['halaman'])
    ? $_GET['halaman']
    : 'home';

switch ($halaman) {

    case 'home':

        require_once "Controllers/HomeControl.php";

        $controller = new HomeControl();
        $controller->index();

        break;


    case 'login':

        require_once "Controllers/AuthControl.php";

        $controller = new AuthControl();
        $controller->login();

        break;


    case 'daftar':

        require_once "Controllers/AuthControl.php";

        $controller = new AuthControl();
        $controller->daftar();

        break;


    case 'logout':

        require_once "Controllers/AuthControl.php";

        $controller = new AuthControl();
        $controller->logout();

        break;


    case 'buku':

        require_once "Controllers/BukuControl.php";

        $controller = new BukuControl();
        $controller->index();

        break;


    case 'detail_buku':

        require_once "Controllers/BukuControl.php";

        $controller = new BukuControl();
        $controller->detail();

        break;


    case 'baca':

        require_once "Controllers/BukuControl.php";

        $controller = new BukuControl();
        $controller->baca();

        break;


    case 'admin':

        require_once "Controllers/AdminControl.php";

        $controller = new AdminControl();
        $controller->dashboard();

        break;


    case 'admin_buku':

        require_once "Controllers/AdminControl.php";

        $controller = new AdminControl();
        $controller->buku();

        break;


    case 'tambah_buku':

        require_once "Controllers/AdminControl.php";

        $controller = new AdminControl();
        $controller->tambahBuku();

        break;


    case 'hapus_buku':

        require_once "Controllers/AdminControl.php";

        $controller = new AdminControl();
        $controller->hapusBuku();

        break;


    default:

        echo "Halaman tidak ditemukan.";

        break;
}

?>