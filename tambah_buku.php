<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Tambah Buku - DigiBook</title>

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
            href="/DigiBook/index.php?halaman=admin_buku"
            class="btn btn-outline-dark"
        >
            ← Kembali
        </a>

    </div>

</nav>


<section class="section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="mb-5">

                    <p>
                        ADMIN / BUKU
                    </p>

                    <h1>
                        Tambahkan Buku
                    </h1>

                    <p class="text-muted">
                        Masukkan informasi dan file buku
                        yang ingin tersedia di DigiBook.
                    </p>

                </div>


                <?php if (isset($error)) { ?>

                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>

                <?php } ?>


                <form
                    method="POST"
                    enctype="multipart/form-data"
                    class="bg-white p-4 p-md-5 rounded-4 shadow-sm"
                >

                    <div class="mb-4">

                        <label class="form-label">
                            Judul Buku
                        </label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control"
                            placeholder="Contoh: Laut Bercerita"
                            required
                        >

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Penulis
                        </label>

                        <input
                            type="text"
                            name="penulis"
                            class="form-control"
                            placeholder="Nama penulis"
                            required
                        >

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Kategori
                        </label>

                        <select
                            name="kategori"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Pilih kategori
                            </option>

                            <option value="Novel">
                                Novel
                            </option>

                            <option value="Fiksi">
                                Fiksi
                            </option>

                            <option value="Non-Fiksi">
                                Non-Fiksi
                            </option>

                            <option value="Pendidikan">
                                Pendidikan
                            </option>

                            <option value="Teknologi">
                                Teknologi
                            </option>

                            <option value="Komik">
                                Komik
                            </option>

                            <option value="Biografi">
                                Biografi
                            </option>

                        </select>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            class="form-control"
                            rows="5"
                            placeholder="Tuliskan deskripsi buku..."
                        ></textarea>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Jumlah Halaman
                        </label>

                        <input
                            type="number"
                            name="total_halaman"
                            class="form-control"
                            min="1"
                            placeholder="Contoh: 250"
                            required
                        >

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Cover Buku
                        </label>

                        <input
                            type="file"
                            name="cover"
                            class="form-control"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                        <small class="text-muted">
                            JPG, JPEG, PNG, atau WEBP
                        </small>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            File Buku
                        </label>

                        <input
                            type="file"
                            name="file_buku"
                            class="form-control"
                            accept=".pdf"
                            required
                        >

                        <small class="text-muted">
                            File buku harus berupa PDF.
                        </small>

                    </div>


                    <button
                        type="submit"
                        name="tambah_buku"
                        class="btn btn-dark w-100 py-3 rounded-3"
                    >
                        + Tambahkan Buku
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

</body>

</html>