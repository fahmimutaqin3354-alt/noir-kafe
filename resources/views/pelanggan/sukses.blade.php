<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pesanan Berhasil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#111827;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
        }

        .success-box{
            background:#1f2937;
            padding:50px;
            border-radius:20px;
            text-align:center;
            width:450px;
            box-shadow:0 10px 30px rgba(0,0,0,0.4);
        }

        .check{
            font-size:70px;
        }
    </style>
</head>
<body>

<div class="success-box">

    <div class="check">✅</div>

    <h2 class="mt-3 fw-bold">
        Pesanan Berhasil
    </h2>

    <p class="text-light mt-3">
        Terima kasih sudah memesan kopi ☕
    </p>

    <a href="/menu-pelanggan"
       class="btn btn-success mt-4 px-4">
       Kembali ke Menu
    </a>

</div>

</body>
</html>
