<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Admin DigiBook</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="/DigiBook/css/style.css"
    >

</head>

<body>

<nav class="navbar">

    <div class="container">

        <a
            class="navbar-brand"
            href="/DigiBook/"
        >
            DigiBook.
        </a>

        <span>
            👑 Admin
        </span>

        <a
            href="/DigiBook/index.php?halaman=logout"
            class="btn btn-outline-dark"
        >
            Logout
        </a>

    </div>

</nav>


<section class="section">

    <div class="container">

        <p>
            ADMIN DASHBOARD
        </p>

        <h1 class="mb-5">
            Halo, <?= htmlspecialchars($_SESSION['nama']) ?> 👋
        </h1>


        <div class="row">

            <div class="col-md-4">

                <div class="p-4 bg-white rounded-4 shadow-sm">

                    <small>
                        TOTAL BUKU
                    </small>

                    <h2 class="mt-2">
                        <?= $buku->num_rows ?>
                    </h2>

                </div>

            </div>


            <div class="col-md-4">

                <div class="p-4 bg-white rounded-4 shadow-sm">

                    <small>
                        KELOLA BUKU
                    </small>

                    <h2 class="mt-2">
                        📚
                    </h2>

                    <a
                        href="/DigiBook/index.php?halaman=admin_buku"
                        class="btn btn-dark rounded-pill"
                    >
                        Kelola Buku
                    </a>

                </div>

            </div>


            <div class="col-md-4">

                <div class="p-4 bg-white rounded-4 shadow-sm">

                    <small>
                        TAMBAH BUKU
                    </small>

                    <h2 class="mt-2">
                        +
                    </h2>

                    <a
                        href="/DigiBook/index.php?halaman=tambah_buku"
                        class="btn btn-dark rounded-pill"
                    >
                        Tambah Buku
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

</body>

</html>