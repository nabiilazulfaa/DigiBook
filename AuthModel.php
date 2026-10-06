<?php

require_once "koneksi.php";

class AuthModel
{
    private $db;

    public function __construct()
    {
        $koneksi = new Koneksi();
        $this->db = $koneksi->conn;
    }

    public function cekEmail($email)
    {
        $email = $this->db->real_escape_string($email);

        $query = "SELECT * FROM pengguna WHERE email = '$email'";

        return $this->db->query($query);
    }

    public function daftar(
    $nama,
    $email,
    $password,
    $role
)
{
    $nama = $this->db->real_escape_string($nama);

    $email = $this->db->real_escape_string($email);

    $role = $this->db->real_escape_string($role);


    $password = password_hash(
        $password,
        PASSWORD_DEFAULT
    );


    // Cek email

    $cek = $this->db->query(
        "SELECT * FROM pengguna
         WHERE email = '$email'"
    );


    if ($cek->num_rows > 0) {

        return false;

    }


    $query = "INSERT INTO pengguna
              (
                  nama,
                  email,
                  password,
                  role
              )
              VALUES
              (
                  '$nama',
                  '$email',
                  '$password',
                  '$role'
              )";


    return $this->db->query($query);
}
    public function login($email)
    {
        $email = $this->db->real_escape_string($email);

        $query = "SELECT * FROM pengguna WHERE email = '$email'";

        return $this->db->query($query);
    }
}

?>