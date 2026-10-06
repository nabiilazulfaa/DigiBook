<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= htmlspecialchars($buku['judul']) ?> - DigiBook
    </title>

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

        <a
            href="/DigiBook/index.php?halaman=buku"
            class="btn btn-outline-dark"
        >
            ← Kembali
        </a>

    </div>

</nav>


<section class="section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-4">

                <?php if (!empty($buku['cover'])) { ?>

                    <img
                        src="/DigiBook/uploads/buku/<?= htmlspecialchars($buku['cover']) ?>"
                        class="img-fluid rounded-4 shadow"
                        alt="<?= htmlspecialchars($buku['judul']) ?>"
                    >

                <?php } else { ?>

                    <div class="book-cover-empty rounded-4">
                        📖
                    </div>

                <?php } ?>

            </div>


            <div class="col-md-7 offset-md-1">

                <small class="text-success fw-bold">
                    <?= htmlspecialchars($buku['kategori']) ?>
                </small>

                <h1 class="mt-3">
                    <?= htmlspecialchars($buku['judul']) ?>
                </h1>

                <h5 class="text-muted">
                    <?= htmlspecialchars($buku['penulis']) ?>
                </h5>

                <p class="mt-4">
                    <?= nl2br(htmlspecialchars($buku['deskripsi'])) ?>
                </p>

                <p class="text-muted">
                    <?= $buku['total_halaman'] ?> halaman
                </p>


                <?php if (isset($_SESSION['id_pengguna'])) { ?>

                    <a
                        href="/DigiBook/index.php?halaman=baca&id=<?= $buku['id_buku'] ?>"
                        class="btn btn-dark btn-lg rounded-pill px-4"
                    >
                        📖 Baca Sekarang
                    </a>

                <?php } else { ?>

                    <a
                        href="/DigiBook/index.php?halaman=login"
                        class="btn btn-dark btn-lg rounded-pill px-4"
                    >
                        Login untuk Membaca
                    </a>

                <?php } ?>

            </div>

        </div>

    </div>

</section>

</body>

</html>