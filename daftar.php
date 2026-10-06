<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0" >
    <title>Daftar - DigiBook</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/DigiBook/css/style.css">
</head>
<body class="auth-page">
<div class="auth-container">
    <div class="auth-card">
        <div class="text-center mb-4">
            <h1>
                Bergabung di DigiBook
            </h1>
            <p>
                Buat akun pembacamu
            </p>
        </div>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php } ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label>
                    Nama
                </label>
                <input type="text"name="nama"class="form-control"placeholder="Nama lengkap"required >
            </div>
            <div class="mb-3">
                <label>
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Email"
                    required
                >
            </div>
            <div class="mb-3">
                <label>
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                    required
                >
                <div class="input-group-custom">

    <label>
        Daftar Sebagai
    </label>

    <select
        name="role"
        required
    >
        <option value="">-- Pilih Role --</option>
        <option value="rakyat">User</option>
        <option value="admin">Admin</option>
    </select>

</div>
            </div>
            <button
                type="submit"
                name="daftar"
                class="btn btn-dark w-100"
            >
                Daftar
            </button>
        </form>
        <p class="text-center mt-4">
            Sudah punya akun?
            <a
                href="index.php?halaman=login"
            >
                Login
            </a>
        </p>
    </div>
</div>
</body>
</html>