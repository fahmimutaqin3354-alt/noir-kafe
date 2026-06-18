<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Status Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

<style>

body{

    background:#f5f5f5;
    font-family:'Poppins',sans-serif;
}

.page-title{

    font-size:55px;
    font-weight:bold;
}

.status-card{

    background:white;

    border-radius:30px;

    padding:25px;

    margin-bottom:20px;

    box-shadow:0 10px 25px rgba(0,0,0,0.08);

    transition:0.3s;
}

.status-card:hover{

    transform:translateY(-5px);
}

.menu-img{

    width:90px;
    height:90px;

    border-radius:20px;

    object-fit:cover;
}

.status-badge{

    padding:10px 20px;

    border-radius:30px;

    font-size:15px;
    font-weight:bold;
}

.badge-menunggu{

    background:#ffc107;
    color:black;
}

.badge-diproses{

    background:#0d6efd;
    color:white;
}

.badge-selesai{

    background:#198754;
    color:white;
}

.total-box{

    background:#f8f1e9;

    border-radius:20px;

    padding:10px 18px;

    font-weight:bold;

    color:#198754;
}

.btn-menu{

    background:#1f232b;
    color:white;

    border-radius:18px;

    padding:15px 25px;

    font-size:20px;
    font-weight:bold;

    border:none;
}

.btn-menu:hover{

    background:black;
    color:white;
}

</style>

</head>

<body>

<div class="container py-5">

<h1 class="page-title mb-5">
    📦 Status Pesanan
</h1>

@foreach($pesanans as $group)

@php
    $first = $group->first();
@endphp

<div class="status-card">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold m-0">

                👤 {{ $first->nama_pembeli }}

            </h2>

            <h4 class="text-secondary mt-2">

                🪑 Meja {{ $first->nomor_meja }}

            </h4>

            <p class="m-0">

                💳 {{ $first->metode_pembayaran }}

            </p>

        </div>

        <div>

            @if($first->status == 'Menunggu')

                <span class="status-badge badge-menunggu">

                    ⏳ Menunggu

                </span>

            @elseif($first->status == 'Diproses')

                <span class="status-badge badge-diproses">

                    ☕ Diproses

                </span>

            @else

                <span class="status-badge badge-selesai">

                    ✅ Selesai

                </span>

            @endif

        </div>

    </div>

    <hr>

    <!-- LIST MENU -->
    @foreach($group as $pesanan)

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div class="d-flex align-items-center gap-3">

            <img src="{{ asset('images/'.$pesanan->menu->gambar) }}"
                 class="menu-img">

            <div>

                <h5 class="fw-bold m-0">

                    {{ $pesanan->menu->nama_kopi }}

                </h5>

                <small class="text-muted">

                    x{{ $pesanan->jumlah }}

                </small>

            </div>

        </div>

        <div class="fw-bold text-success">

            Rp {{ number_format($pesanan->total_harga) }}

        </div>

    </div>

    @endforeach

    <hr>

    <!-- TOTAL -->
    <div class="d-flex justify-content-between align-items-center">

        <h3 class="fw-bold">

            Total:
            Rp {{ number_format($group->sum('total_harga')) }}

        </h3>

        @if($first->status_pembayaran == 'Belum Dibayar')

            <span class="badge bg-danger">

                Belum Dibayar

            </span>

        @else

            <span class="badge bg-success">

                Sudah Dibayar

            </span>

        @endif

    </div>

</div>

@endforeach

<div class="mt-5">

<a href="/menu-pelanggan"
   class="btn btn-menu">

    ☕ Kembali ke Menu

</a>

</div>

</div>

<script>

Echo.channel('pesanan-channel')

.listen('.status.updated', (e) => {

    location.reload();

});

</script>

</body>
</html>
