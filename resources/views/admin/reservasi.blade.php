<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Reservasi Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<style>

*{
    font-family:Poppins;
}

body{

    background:#f5eee3;
}

.title{

    font-size:50px;
    font-weight:700;

    color:#1b1407;
}

.reserve-card{

    background:white;

    border-radius:25px;

    padding:25px;

    margin-bottom:25px;

    box-shadow:
    0 10px 25px rgba(0,0,0,0.08);
}

.badge-status{

    padding:10px 18px;

    border-radius:30px;

    font-size:14px;

    font-weight:600;
}

.menunggu{
    background:#ffc107;
    color:black;
}

.disetujui{
    background:#198754;
    color:white;
}

.dibatalkan{
    background:#dc3545;
    color:white;
}

.info-box{

    background:#f5eee3;

    padding:15px;

    border-radius:18px;

    text-align:center;
}

.btn-gold{

    background:#c89b3c;

    color:white;

    border:none;

    border-radius:15px;

    padding:10px 18px;
}

.btn-gold:hover{

    background:#a87f2f;

    color:white;
}

</style>

</head>

<body>

<div class="container py-5">

<div class="d-flex justify-content-between align-items-center mb-5">

<h1 class="title">

📅 Reservasi Pelanggan

</h1>

<a href="/dashboard"
class="btn btn-dark btn-lg rounded-4">

← Dashboard

</a>

</div>

@foreach($reservasis as $r)

<div class="reserve-card">

<div class="row align-items-center">

<div class="col-md-3">

<h3 class="fw-bold">

{{ $r->nama }}

</h3>

<p class="text-muted mb-1">

📞 {{ $r->telepon }}

</p>

<p class="text-muted">

🪑 Meja {{ $r->nomor_meja }}

</p>

</div>

<div class="col-md-2">

<div class="info-box">

<h6>Tanggal</h6>

<h5 class="fw-bold">

{{ $r->tanggal }}

</h5>

</div>

</div>

<div class="col-md-2">

<div class="info-box">

<h6>Jam</h6>

<h5 class="fw-bold">

{{ $r->jam }}

</h5>

</div>

</div>

<div class="col-md-2">

<div class="info-box">

<h6>Orang</h6>

<h5 class="fw-bold">

{{ $r->jumlah_orang }}

</h5>

</div>

</div>

<div class="col-md-3 text-end">

@if($r->status == 'Menunggu')

<span class="badge-status menunggu">

⏳ Menunggu

</span>

@elseif($r->status == 'Disetujui')

<span class="badge-status disetujui">

✅ Disetujui

</span>

@else

<span class="badge-status dibatalkan">

❌ Dibatalkan

</span>

@endif

<form action="/reservasi/status/{{ $r->id }}"
method="POST"
class="mt-3">

@csrf

<select name="status"
class="form-select mb-2">

<option>Menunggu</option>
<option>Disetujui</option>
<option>Dibatalkan</option>

</select>

<button class="btn btn-gold w-100">

Update Status

</button>

</form>

</div>

</div>

@if($r->catatan)

<div class="mt-4">

<strong>Catatan:</strong>

<p class="text-muted">

{{ $r->catatan }}

</p>

</div>

@endif

</div>

@endforeach

</div>

</body>
</html>
