<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Status Reservasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            background:#f5eee3;
            font-family:Poppins,sans-serif;
        }

        .card-reservasi{

            background:white;

            border-radius:25px;

            padding:25px;

            margin-bottom:20px;

            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        }

        .status{

            background:#c89b3c;

            color:white;

            padding:10px 20px;

            border-radius:20px;

            font-weight:bold;
        }

        .btn-kembali{

            background:#1f2937;

            color:white;

            border:none;

            padding:14px 30px;

            border-radius:15px;

            text-decoration:none;

            font-weight:bold;
        }

    </style>

</head>

<body>

<div class="container py-5">

    <h1 class="fw-bold mb-5">
        📅 Status Reservasi
    </h1>

    @foreach($reservasis as $r)

    <div class="card-reservasi">

        <div class="row align-items-center">

            <div class="col-md-3">

                <h3 class="fw-bold">
                    {{ $r->nama }}
                </h3>

                <p class="text-muted">
                    📞 {{ $r->telepon }}
                </p>

            </div>

            <div class="col-md-3">

                <h5>
                    🪑 Meja {{ $r->meja }}
                </h5>

                <p>
                    👥 {{ $r->jumlah_orang }} Orang
                </p>

            </div>

            <div class="col-md-3">

                <h5>
                    📅 {{ $r->tanggal }}
                </h5>

                <p>
                    ⏰ {{ $r->jam }}
                </p>

            </div>

            <div class="col-md-3 text-end">

                @if($r->status == 'Disetujui')

<span style="
background:#16a34a;
color:white;
padding:12px 25px;
border-radius:30px;
font-weight:600;
">
✅ Disetujui
</span>

@elseif($r->status == 'Dibatalkan')

<span style="
background:#dc2626;
color:white;
padding:12px 25px;
border-radius:30px;
font-weight:600;
">
❌ Dibatalkan
</span>

@else

<span style="
background:#2563eb;
color:white;
padding:12px 25px;
border-radius:30px;
font-weight:600;
">
⏳ Menunggu
</span>

@endif

            </div>

        </div>

    </div>

    @endforeach

    <a href="/menu-pelanggan"
       class="btn-kembali">

        ← Kembali ke Menu

    </a>

</div>

</body>
</html>
