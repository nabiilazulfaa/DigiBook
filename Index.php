<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DigiBook</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm">

    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            DigiBook
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarNav"
        >

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="index.php?halaman=home"
                    >
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="#buku"
                    >
                        Buku
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="#challenge"
                    >
                        Reading Challenge
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="#komunitas"
                    >
                        Komunitas
                    </a>
                </li>

                <?php if (isset($_SESSION['id_pengguna'])) { ?>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="index.php?halaman=logout"
                        >
                            Logout
                        </a>
                    </li>

                <?php } else { ?>

                    <li class="nav-item">
                        <a
                            class="btn btn-dark ms-2"
                            href="index.php?halaman=login"
                        >
                            Login
                        </a>
                    </li>

                <?php } ?>

            </ul>

        </div>

    </div>

</nav>


<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-7">

                <p class="hero-small">
                    SELAMAT DATANG DI DIGIBOOK
                </p>

                <h1>
                    Temukan Buku.
                    <br>
                    Mulai Petualanganmu.
                </h1>

                <p class="hero-text">
                    Baca buku favoritmu, ikuti reading challenge,
                    bergabung dengan komunitas, dan request buku
                    yang ingin kamu baca.
                </p>

                <a
                    href="#buku"
                    class="btn btn-dark btn-lg"
                >
                    Mulai Membaca
                </a>

            </div>

            <div class="col-md-5">

                <div class="hero-card">

                    <div class="book-icon">
                        📖
                    </div>

                    <h3>
                        Your Digital Library
                    </h3>

                    <p>
                        Satu tempat untuk semua perjalanan membaca kamu.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="statistics">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-4">

                <h2>
                    <?= $jumlahBuku ?>
                </h2>

                <p>
                    Koleksi Buku
                </p>

            </div>

            <div class="col-md-4">

                <h2>
                    <?= $jumlahPengguna ?>
                </h2>

                <p>
                    Pembaca
                </p>

            </div>

            <div class="col-md-4">

                <h2>
                    <?= $jumlahChallenge ?>
                </h2>

                <p>
                    Reading Challenge
                </p>

            </div>

        </div>

    </div>

</section>


<section
    id="buku"
    class="section"
>

    <div class="container">

        <div class="section-title">

            <p>
                KOLEKSI TERBARU
            </p>

            <h2>
                Buku Pilihan
            </h2>

        </div>


        <div class="row">

            <?php if ($buku->num_rows > 0) { ?>

                <?php while ($data = $buku->fetch_assoc()) { ?>

                    <div class="col-md-4 mb-4">

                        <div class="book-card">

                            <?php if (!empty($data['cover'])) { ?>

                                <img
                                    src="uploads/buku/<?= $data['cover'] ?>"
                                    alt="<?= $data['judul'] ?>"
                                >

                            <?php } else { ?>

                                <div class="book-cover-empty">
                                    📚
                                </div>

                            <?php } ?>


                            <div class="book-content">

                                <small>
                                    <?= $data['kategori'] ?>
                                </small>

                                <h4>
                                    <?= $data['judul'] ?>
                                </h4>

                                <p>
                                    <?= $data['penulis'] ?>
                                </p>

                                <a
                                    href="#"
                                    class="btn btn-outline-dark"
                                >
                                    Lihat Buku
                                </a>

                            </div>

                        </div>

                    </div>

                <?php } ?>

            <?php } else { ?>

                <div class="col-12 text-center">

                    <p>
                        Belum ada buku yang tersedia.
                    </p>

                </div>

            <?php } ?>

        </div>

    </div>

</section>


<section
    id="challenge"
    class="challenge-section"
>

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-7">

                <p>
                    READING CHALLENGE
                </p>

                <h2>
                    Tantang Dirimu
                    <br>
                    Untuk Lebih Banyak Membaca.
                </h2>

                <p>
                    Tentukan target membaca dan lihat perkembangan
                    perjalananmu bersama DigiBook.
                </p>

                <a
                    href="#"
                    class="btn btn-dark"
                >
                    Lihat Challenge
                </a>

            </div>

            <div class="col-md-5">

                <div class="challenge-card">

                    <div class="challenge-number">
                        05
                    </div>

                    <p>
                        Buku bulan ini
                    </p>

                    <div class="progress">

                        <div
                            class="progress-bar"
                            style="width: 60%"
                        >
                        </div>

                    </div>

                    <small>
                        3 dari 5 buku selesai
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>


<footer>

    <div class="container text-center">

        <h4>
            DigiBook
        </h4>

        <p>
            Read. Connect. Discover.
        </p>

        <small>
            © 2026 DigiBook
        </small>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>