<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Koleksi Buku - DigiBook</title>

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

<nav class="navbar navbar-expand-lg">

    <div class="container">

        <a
            class="navbar-brand"
            href="/DigiBook/"
        >
            DigiBook.
        </a>

        <div>

            <a
                href="/DigiBook/index.php?halaman=home"
                class="btn btn-outline-dark"
            >
                Home
            </a>

        </div>

    </div>

</nav>


<section class="section">

    <div class="container">

        <div class="section-title">

            <p>DISCOVER</p>

            <h2>
                Koleksi Buku
            </h2>

            <p class="mt-3">
                Temukan cerita dan pengetahuan baru
                untuk menemani perjalanan membacamu.
            </p>

        </div>


        <div class="row">

            <?php if ($buku->num_rows > 0) { ?>

                <?php while ($data = $buku->fetch_assoc()) { ?>

                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="book-card">

                            <?php if (!empty($data['cover'])) { ?>

                                <img
                                    src="/DigiBook/uploads/buku/<?= htmlspecialchars($data['cover']) ?>"
                                    alt="<?= htmlspecialchars($data['judul']) ?>"
                                >

                            <?php } else { ?>

                                <div class="book-cover-empty">
                                    📖
                                </div>

                            <?php } ?>


                            <div class="book-content">

                                <small>
                                    <?= htmlspecialchars($data['kategori']) ?>
                                </small>

                                <h4>
                                    <?= htmlspecialchars($data['judul']) ?>
                                </h4>

                                <p>
                                    <?= htmlspecialchars($data['penulis']) ?>
                                </p>

                                <a
                                    href="/DigiBook/index.php?halaman=detail_buku&id=<?= $data['id_buku'] ?>"
                                    class="btn btn-dark"
                                >
                                    Lihat Buku →
                                </a>

                            </div>

                        </div>

                    </div>

                <?php } ?>

            <?php } else { ?>

                <div class="text-center">

                    <h4>
                        Belum ada buku.
                    </h4>

                    <p>
                        Admin belum menambahkan buku.
                    </p>

                </div>

            <?php } ?>

        </div>

    </div>

</section>

</body>

</html>