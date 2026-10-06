<?php

require_once "Models/AuthModel.php";

class AuthControl
{
    private $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }

    public function login()
    {
        if (isset($_POST['login'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $hasil = $this->model->login($email);

            if ($hasil->num_rows > 0) {

                $data = $hasil->fetch_assoc();

                if (password_verify($password, $data['password'])) {

                    $_SESSION['id_pengguna'] = $data['id_pengguna'];
                    $_SESSION['nama'] = $data['nama'];
                    $_SESSION['role'] = $data['role'];

                    header("Location: index.php?halaman=home");
                    exit;

                } else {

                    $error = "Email atau password salah.";

                }

            } else {

                $error = "Email atau password salah.";

            }
        }

        require_once "Views/login.php";
    }

    public function daftar()
{
    if (isset($_POST['daftar'])) {

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];


        $hasil = $this->model->daftar(
            $nama,
            $email,
            $password,
            $role
        );


        if ($hasil) {

            header(
                "Location: index.php?halaman=login"
            );

            exit;

        } else {

            $error =
                "Pendaftaran gagal. Email mungkin sudah digunakan.";

        }
    }


    require_once "Views/daftar.php";
}
    public function logout()
    {
        session_destroy();

        header("Location: index.php?halaman=login");
        exit;
    }
    
}

?>