<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login - DigiBook</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="css/style.css"
    >

</head>

<body class="auth-page">

<div class="auth-container">

    <div class="auth-card">

        <div class="text-center mb-4">

            <h1>
                DigiBook
            </h1>

            <p>
                Masuk ke akunmu
            </p>

        </div>


        <?php if (isset($error)) { ?>

            <div class="alert alert-danger">
                <?= $error ?>
            </div>

        <?php } ?>


        <form
            method="POST"
            action=""
        >

            <div class="mb-3">

                <label>
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan email"
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
                    placeholder="Masukkan password"
                    required
                >

            </div>


            <button
                type="submit"
                name="login"
                class="btn btn-dark w-100"
            >
                Login
            </button>

        </form>


        <p class="text-center mt-4">

            Belum punya akun?

            <a
                href="index.php?halaman=daftar"
            >
                Daftar sekarang
            </a>

        </p>


        <div class="text-center">

            <a href="index.php">
                ← Kembali ke DigiBook
            </a>

        </div>

    </div>

</div>

</body>

</html>