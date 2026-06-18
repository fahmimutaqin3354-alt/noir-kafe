<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Checkout Berhasil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{

            background:
            linear-gradient(135deg,#0f172a,#111827,#000);

            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            font-family:Poppins,sans-serif;
        }

        .success-card{

            background:white;

            width:100%;
            max-width:500px;

            border-radius:30px;

            padding:50px;

            text-align:center;

            box-shadow:
            0 15px 50px rgba(0,0,0,0.3);
        }

        .icon-success{

            font-size:90px;

            color:#22c55e;

            margin-bottom:20px;
        }

        .title{

            font-size:35px;

            font-weight:700;

            margin-bottom:15px;
        }

        .desc{

            color:#6b7280;

            margin-bottom:30px;
        }

        .btn-menu{

            background:#111827;

            color:white;

            border:none;

            padding:14px 30px;

            border-radius:15px;

            font-weight:600;

            text-decoration:none;

            transition:0.3s;
        }

        .btn-menu:hover{

            background:#000;

            color:white;

            transform:translateY(-3px);
        }

    </style>

</head>

<body>

<div class="success-card">

    <div class="icon-success">

        <i class="bi bi-check-circle-fill"></i>

    </div>

    <h1 class="title">

        Checkout Berhasil

    </h1>

    <p class="desc">

        Pesanan kamu sedang diproses ☕<br>
        Terima kasih sudah memesan di Noir Coffee.

    </p>

    <a href="/menu-pelanggan"
       class="btn-menu">

       Kembali ke Menu

    </a>
    <a href="{{ route('status.pesanan') }}"
   class="btn btn-primary btn-lg mt-3">

    📦 Lihat Status Pesanan

</a>

</div>

</body>
</html>
