<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Membaca <?= htmlspecialchars($buku['judul']) ?>
    </title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #252525;
            font-family: Arial, sans-serif;
        }

        .reader-navbar {
            height: 65px;
            background: #171717;
            color: white;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 30px;
        }

        .reader-title {
            font-size: 15px;
            font-weight: 600;
        }

        .back-button {
            color: white;
            text-decoration: none;

            padding: 9px 18px;

            border-radius: 30px;

            background: #3f3f3f;
        }

        .reader {
            width: 100%;
            height: calc(100vh - 65px);
        }

        .reader iframe {
            width: 100%;
            height: 100%;

            border: none;
        }

    </style>

</head>

<body>


<div class="reader-navbar">

    <div class="reader-title">

        📖
        <?= htmlspecialchars($buku['judul']) ?>

    </div>


    <a
        href="/DigiBook/index.php?halaman=detail_buku&id=<?= $buku['id_buku'] ?>"
        class="back-button"
    >
        ← Keluar dari Reader
    </a>

</div>


<div class="reader">

    <iframe
        src="/DigiBook/uploads/buku/<?= htmlspecialchars($buku['file_buku']) ?>"
    >
    </iframe>

</div>


</body>

</html>