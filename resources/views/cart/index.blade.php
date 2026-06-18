<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Keranjang Belanja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>

body{

    background:#f5f5f5;
    font-family:'Poppins',sans-serif;
}

.cart-container{

    max-width:1200px;
    margin:auto;
}

.cart-title{

    font-size:55px;
    font-weight:bold;
}

.cart-card{

    border:none;
    border-radius:25px;
    overflow:hidden;

    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.cart-img{

    width:90px;
    height:90px;

    border-radius:20px;

    object-fit:cover;
}

.qty-modern{

    background:#198754;

    padding:12px 20px;

    border-radius:15px;

    min-width:90px;
}
.total-box{

    background:white;

    border-radius:25px;

    padding:30px;

    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.checkout-btn{

    background:#198754;

    color:white;

    border:none;

    border-radius:18px;

    padding:15px;

    font-size:22px;
    font-weight:bold;

    width:100%;
}

.cancel-btn{

    border-radius:18px;
    padding:15px;
    font-size:20px;
    font-weight:bold;
}

.input-modern{

    border-radius:18px;
    height:60px;
    font-size:18px;
}

</style>

</head>

<body>

<div class="container py-5 cart-container">

    <h1 class="cart-title mb-5">
        🛒 Keranjang Belanja
    </h1>

<div class="row">

<div class="col-lg-8">

@php
$grandTotal = 0;
@endphp

@foreach($carts as $cart)

@php
$grandTotal += $cart->total_harga;
@endphp

<div class="card cart-card mb-4">

<div class="card-body">

<div class="d-flex justify-content-between align-items-center">

<div class="d-flex align-items-center gap-4">

<img src="{{ asset('images/'.$cart->menu->gambar) }}"
     class="cart-img">

<div>

<h4 class="fw-bold">
    {{ $cart->menu->nama_kopi }}
</h4>

<h5 class="text-success fw-bold">

    Rp {{ number_format($cart->total_harga) }}

</h5>

</div>

</div>

<div class="qty-modern text-center">

    <small class="text-muted">
        Jumlah
    </small>

    <h4 class="fw-bold m-0">

        {{ $cart->jumlah }}

    </h4>

</div>

</div>

</div>

</div>

@endforeach

</div>

<div class="col-lg-4">

<div class="total-box">

<h5 class="text-muted">
    Total Belanja
</h5>

<h1 class="fw-bold text-success mb-4">

    Rp {{ number_format($grandTotal) }}

</h1>

<div class="mb-4">

    <label class="form-label fw-bold">
        💳 Metode Pembayaran
    </label>

    <select name="metode_pembayaran"
            class="form-select form-select-lg rounded-4">

        <option value="Cash">
            💵 Cash
        </option>

        <option value="QRIS">
            📱 QRIS
        </option>

        <option value="Dana">
            🟦 Dana
        </option>

        <option value="OVO">
            🟣 OVO
        </option>

        <option value="GoPay">
            🟢 GoPay
        </option>

    </select>

</div>

<form action="{{ route('checkout') }}"
      method="POST">

@csrf

<input type="text"
       name="nama_pembeli"
       class="form-control input-modern mb-3"
       placeholder="Nama Pelanggan"
       required>

<input type="number"
       name="nomor_meja"
       class="form-control input-modern mb-4"
       placeholder="Nomor Meja"
       required>

<button type="submit"
        class="checkout-btn mb-3">

    ☑ Checkout

</button>

<a href="{{ route('cart.cancel') }}"
   class="btn btn-danger cancel-btn w-100 btn-batal">

    ❌ Batal Checkout

</a>

</form>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

document.querySelector('.btn-batal')
.addEventListener('click', function(e){

    e.preventDefault();

    let link = this.getAttribute('href');

    Swal.fire({

    title: 'Batalkan Checkout?',
    text: 'Keranjang akan dikosongkan!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#dc3545',
    cancelButtonColor: '#6c757d',
    confirmButtonText: 'Ya, Batalkan',
    cancelButtonText: 'Tidak'

}).then((result) => {

    if(result.isConfirmed){

        Swal.fire({

            toast:true,
            position:'top-start',
            icon:'success',
            title:'Berhasil dibatalkan',
            showConfirmButton:false,
            timer:1500

        });

        setTimeout(() => {

            window.location.href = link;

        }, 1500);

    }

});

});

</script>

</body>
</html>
