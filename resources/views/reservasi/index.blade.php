<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<title>Reservasi Noir Coffee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{

    background:#f5eee3;
    font-family:Poppins;
}

.reserve-card{

    max-width:700px;

    margin:auto;

    background:#ffffff;

    padding:40px;

    border-radius:30px;

    box-shadow:0 10px 40px rgba(0,0,0,0.1);
}

.btn-reservasi{

    background:#a87f2f;

    color:rgb(255, 255, 255);

    border:none;

    padding:16px;

    border-radius:18px;

    font-weight:600;

    transition:0.3s;
}

.btn-reservasi:hover{

    background:#15803d;

    transform:translateY(-3px);
}

.btn-batal{

    background:#dc2626;

    color:white;

    padding:16px;

    border-radius:18px;

    font-weight:600;

    transition:0.3s;
}

.btn-batal:hover{

    background:#b91c1c;

    transform:translateY(-3px);

    color:white;
}

</style>

</head>

<body>

<div class="container py-5">

<div class="reserve-card">

<div class="d-flex align-items-center justify-content-center gap-3">

    <img src="{{ asset('images/logo.jpg') }}"
         width="90"
         style="
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
         ">

    <h1 class="display-4 fw-bold m-0">
        Noir Coffee
    </h1>

</div>


<form action="{{ route('reservasi.store') }}"
method="POST">

@csrf

<div class="mb-3">

<label>Nama Reservasi</label>

<input type="text"
name="nama"
class="form-control">

</div>

<div class="mb-3">

<label>Nomor Telepon</label>

<input type="text"
name="telepon"
class="form-control">

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Nomor Meja</label>

<select name="nomor_meja"
class="form-select">

@for($i=1;$i<=20;$i++)

<option value="{{ $i }}">
Meja {{ $i }}
</option>

@endfor

</select>

</div>

<div class="col-md-6 mb-3">

<label>Jumlah Orang</label>

<input type="number"
name="jumlah_orang"
class="form-control">

</div>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Tanggal</label>

<input type="date"
name="tanggal"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Jam</label>

<input type="time"
name="jam"
class="form-control">

</div>

</div>

<div class="mb-4">

<label>Catatan</label>

<textarea name="catatan"
class="form-control"></textarea>

</div>

<div class="mt-4 d-grid gap-3">

    <!-- Tombol Reservasi -->
    <button type="submit"
            class="btn-reservasi">

        Reservasi Sekarang

    </button>

    <!-- Tombol Batal -->
    <a href="/menu-pelanggan"
       class="btn-batal text-center text-decoration-none">

        Batalkan Reservasi

    </a>

</div>

</form>

</div>

</div>

</body>
</html>
