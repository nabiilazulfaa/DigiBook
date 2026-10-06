<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Kelola Buku - DigiBook</title>

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

        <div>

            <a
                href="/DigiBook/index.php?halaman=admin"
                class="btn btn-outline-dark"
            >
                Dashboard
            </a>

            <a
                href="/DigiBook/index.php?halaman=logout"
                class="btn btn-dark"
            >
                Logout
            </a>

        </div>

    </div>

</nav>


<section class="section">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5">

            <div>

                <p>
                    ADMIN
                </p>

                <h1>
                    Kelola Buku
                </h1>

            </div>


            <a
                href="/DigiBook/index.php?halaman=tambah_buku"
                class="btn btn-dark rounded-pill px-4"
            >
                + Tambah Buku
            </a>

        </div>


        <div class="table-responsive bg-white rounded-4 p-3">

            <table class="table align-middle">

                <thead>

                    <tr>

                        <th>
                            Cover
                        </th>

                        <th>
                            Judul
                        </th>

                        <th>
                            Penulis
                        </th>

                        <th>
                            Kategori
                        </th>

                        <th>
                            Halaman
                        </th>

                        <th>
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php while ($data = $buku->fetch_assoc()) { ?>

                        <tr>

                            <td>

                                <?php if (!empty($data['cover'])) { ?>

                                    <img
                                        src="/DigiBook/uploads/buku/<?= htmlspecialchars($data['cover']) ?>"
                                        width="55"
                                        height="70"
                                        style="object-fit: cover; border-radius: 8px;"
                                    >

                                <?php } else { ?>

                                    📖

                                <?php } ?>

                            </td>


                            <td>
                                <?= htmlspecialchars($data['judul']) ?>
                            </td>


                            <td>
                                <?= htmlspecialchars($data['penulis']) ?>
                            </td>


                            <td>
                                <?= htmlspecialchars($data['kategori']) ?>
                            </td>


                            <td>
                                <?= $data['total_halaman'] ?>
                            </td>


                            <td>

                                <a
                                    href="/DigiBook/index.php?halaman=detail_buku&id=<?= $data['id_buku'] ?>"
                                    class="btn btn-sm btn-outline-dark"
                                >
                                    Lihat
                                </a>


                                <a
                                    href="/DigiBook/index.php?halaman=hapus_buku&id=<?= $data['id_buku'] ?>"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Yakin ingin menghapus buku ini?')"
                                >
                                    Hapus
                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</section>

</body>

</html>