<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:Segoe UI;
}

.page-title{
    font-size:55px;
    font-weight:bold;
    color:#2b2b2b;
}

.subtitle{
    color:#777;
    margin-top:-10px;
}

.order-card{

    background:white;

    border-radius:30px;

    padding:30px;

    margin-bottom:30px;

    box-shadow:0 10px 25px rgba(0,0,0,0.06);
}

.menu-img{

    width:90px;
    height:90px;

    object-fit:cover;

    border-radius:20px;
}

.harga-box{

    background:#f3ede6;

    padding:12px 25px;

    border-radius:20px;

    font-size:20px;
    font-weight:bold;

    color:#0c8a52;
}

.status-btn{

    border:none;

    padding:15px 30px;

    border-radius:20px;

    font-size:20px;
    font-weight:bold;

    color:white;
}

.status-menunggu{
    background:#f4b400;
}

.status-diproses{
    background:#1a73e8;
}

.status-selesai{
    background:#16a34a;
}

.update-btn{

    background:#1f2937;

    color:white;

    border:none;

    padding:14px 25px;

    border-radius:15px;

    font-weight:bold;

    text-decoration:none;
}

.update-btn:hover{
    background:black;
    color:white;
}

.total-text{
    font-size:35px;
    font-weight:bold;
}

/* MOBILE */

@media(max-width:768px){

    .page-title{
        font-size:38px;
    }

    .order-card{
        padding:20px;
    }

    .menu-img{
        width:70px;
        height:70px;
    }

    .total-text{
        font-size:28px;
    }

}

</style>

</head>

<body>

<div class="container py-5">

    <h1 class="page-title">
        📦 Data Pesanan Pelanggan
    </h1>

    <p class="subtitle">
        Dashboard Admin Noir Coffee
    </p>

    <a href="/dashboard"
       class="btn btn-dark px-4 py-3 rounded-4 fw-bold mb-4">

        ← Kembali ke Dashboard

    </a>

    @foreach($pesanans as $group)

    @php
        $first = $group->first();
    @endphp

    <div class="order-card">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">

            <div>

                <h2 class="fw-bold">

                    👤 {{ $first->nama_pembeli }}

                </h2>

                <h4 class="text-secondary">

                    🪑 Meja {{ $first->nomor_meja }}

                </h4>

                <p class="m-0">

                    💳 {{ $first->metode_pembayaran }}

                </p>

            </div>

            <div class="text-end">

                @if($first->status == 'Menunggu')

                    <button class="status-btn status-menunggu">

                        ⏳ Menunggu

                    </button>

                @elseif($first->status == 'Diproses')

                    <button class="status-btn status-diproses">

                        👨‍🍳 Diproses

                    </button>

                @else

                    <button class="status-btn status-selesai">

                        ✅ Selesai

                    </button>

                @endif

                <div class="mt-3">

                    @if($first->status != 'Selesai')

                    <a href="{{ route('pesanan.status', $first->id) }}"
                       class="update-btn">

                        Update Status

                    </a>

                    @endif

                </div>

            </div>

        </div>

        <hr>

        <!-- LIST MENU -->
        @foreach($group as $pesanan)

        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">

            <div class="d-flex align-items-center gap-3">

                <img src="{{ asset('images/'.$pesanan->menu->gambar) }}"
                     class="menu-img">

                <div>

                    <h4 class="fw-bold m-0">

                        {{ $pesanan->menu->nama_kopi }}

                    </h4>

                    <small class="text-muted">

                        Jumlah x{{ $pesanan->jumlah }}

                    </small>

                </div>

            </div>

            <div class="harga-box">

                Rp {{ number_format($pesanan->total_harga) }}

            </div>

        </div>

        @endforeach

        <hr>

        <!-- TOTAL -->
        <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div class="total-text">

                Total:
                Rp {{ number_format($group->sum('total_harga')) }}

            </div>

            <div>

                @if($first->status_pembayaran == 'Belum Dibayar')

                    <span class="badge bg-danger p-3">

                        Belum Dibayar

                    </span>

                @else

                    <span class="badge bg-success p-3">

                        Sudah Dibayar

                    </span>

                @endif

            </div>

        </div>

        <!-- KONFIRMASI -->
        <form action="/payment/{{ $first->id }}"
              method="POST"
              class="mt-4">

            @csrf
            @method('PUT')

            <button class="btn btn-success px-4 py-3 fw-bold rounded-4">

                ✔ Konfirmasi Pembayaran

            </button>

        </form>

    </div>

    @endforeach

</div>

</body>
</html>
