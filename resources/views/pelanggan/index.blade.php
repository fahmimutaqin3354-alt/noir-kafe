<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Menu Cafe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body.dark-mode{
    background:#111827 !important;
    color:white !important;
}

body.dark-mode .menu-card,
body.dark-mode .card,
body.dark-mode .pesanan-card,
body.dark-mode .sidebar{
    background:#1f2937 !important;
    color:white !important;
}

body.dark-mode .section-title{
    color:#facc15 !important;
}

body.dark-mode .btn-darkmode{
    background:#e5dec2;
    color:black;
}

body.dark-mode .floating-cart{
    background:#1f2937 !important;
}

body.dark-mode .modal-content{
    background:#1f2937 !important;
    color:white !important;
}

        body{
    background:var(--cream);
}

        .hero{
            background:
            linear-gradient(rgba(0,0,0,0.6),
            rgba(0,0,0,0.6)),
            url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1400');

            background-size:cover;
            background-position:center;

            height:300px;

            display:flex;
            align-items:center;
            justify-content:center;

            color:white;
            padding-top:40px;
        }

        .menu-card{
    border-radius:20px;
    overflow:hidden;
    transition:0.3s;
}

        .menu-card:hover{
            transform:translateY(-10px);
        }

        .menu-card img{
    width:180px;
    height:180px;
    object-fit:cover;
    border-radius:50%;
    margin:20px auto 10px auto;
    display:block;
    background:#f5f5f5;
    padding:10px;
}

:root{

    --gold:#c89b3c;
    --dark:#1b1407;
    --cream:#f5eee3;
}

.badge-kategori{
    background:#ff884d;
    color:white;
}

.judul-kategori{
    font-size:40px;
    font-weight:bold;
      color:#ff884d;
    margin-bottom:30px;
    margin-top:20px;
  border-left:8px solid #ff884d;
    padding-left:20px;
}

.floating-cart{

    position:fixed;

    bottom:20px;
    left:50%;

    transform:translateX(-50%);

    width:90%;
    max-width:800px;

    background:#f8f1e9;

    border-radius:30px;

    padding:15px 25px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:0 10px 30px rgba(0,0,0,0.2);

    z-index:999;
}

.cart-left{

    display:flex;
    align-items:center;
    gap:20px;
}

.cart-icon{

    width:70px;
    height:70px;

    background:white;

    border-radius:20px;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:35px;

    position:relative;
}

.cart-badge{

    position:absolute;

    top:-8px;
    right:-8px;

    width:28px;
    height:28px;

    background:#ff884d;

    color:white;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:14px;
    font-weight:bold;
}

.checkout-btn{

       background:#ff884d;

    color:white;

    border:none;

    padding:18px 40px;

    border-radius:25px;

    font-size:28px;
    font-weight:bold;

    transition:0.3s;
}

.checkout-btn:hover{

     background:#ff6b2c;
}

body{

    padding-bottom:140px;
}

.menu-desc{
    color:#4b5563;
    transition:0.3s;
}

body.dark-mode .menu-desc{
    color:#d1d5db !important;
}

body.dark-mode .menu-card h3,
body.dark-mode .menu-card h4{
    color:white !important;
}

body.dark-mode .harga{
    color:#22c55e !important;
}

body.dark-mode .menu-card{
    background:#1e293b !important;
    border:1px solid rgba(255,255,255,0.08);
}

.top-buttons{

    display:flex;

    justify-content:flex-end;

    align-items:center;

    gap:18px;

    flex-wrap:wrap;

    margin-top:30px;

    margin-right:40px;
}

.btn-top{

    height:60px;

    padding:0 28px;

    border-radius:20px;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:18px;

    font-weight:600;
}

.btn-reservasi{

    background:#6f4e37;

    color:white;
}

.btn-reservasi:hover{

    background:#aa734c;

    color:white;
}
.btn-kembali{
    height:55px;
    padding:0 30px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:600;
}

.menu-desc{
    color:#4b5563;
    transition:0.3s;
}

body.dark-mode .menu-desc{
    color:#f3f4f6 !important;
}

body.dark-mode p{
    color:#f3f4f6 !important;
}

.btn-minus{

    width:48px;
    height:48px;

    background:white !important;

    color:black !important;

    border:1px solid #d1d5db !important;

    transition:0.3s;

    display:flex;
    align-items:center;
    justify-content:center;
}

.btn-minus:hover{

    background:black !important;

    color:white !important;

    border-color:black !important;
}

.btn-plus{

    width:48px;
    height:48px;

    background:black !important;

    color:white !important;

    border:1px solid black !important;

    transition:0.3s;

    display:flex;
    align-items:center;
    justify-content:center;
}

.btn-plus:hover{

    background:black !important;

    color:white !important;

    border-color:black !important;

    transform:scale(1.05);
}

.search-box{

    max-width:500px;

    margin:auto;
}

.search-input{

    height:60px;

    border-radius:20px;

    border:none;

    padding:0 25px;

    font-size:18px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.search-input:focus{

    box-shadow:0 5px 25px rgba(255,136,77,0.3);

    border:2px solid #ff884d;
}

/* =========================
   RESPONSIVE MOBILE
========================= */

@media(max-width:768px){

    body{
        padding-bottom:220px;
    }

    /* HERO */
    .hero{

        height:auto;

        padding:40px 20px;

        text-align:center;
    }

    .hero h1{

        font-size:45px !important;
    }

    .hero img{

        width:70px !important;
    }

    /* BUTTON ATAS */
    .top-buttons{

        justify-content:center;

        margin:20px 0;

        padding:0 15px;
    }

    .btn-top{

        width:100%;

        height:55px;

        font-size:16px;
        display:flex;
align-items:center;
justify-content:center;
border-radius:20px;
    }

    .btn-reservasi{

        width:100%;
    }

    /* SEARCH */
    .search-box{

        width:100%;
        padding:0 15px;
    }

    .search-input{

        height:55px;

        font-size:16px;
    }

    /* JUDUL */
    .judul-kategori{

        font-size:32px;

        margin-top:40px;
    }

    /* CARD */
    .menu-card{

        border-radius:25px;
    }

    .menu-card img{

        width:150px;
        height:150px;
    }

    .menu-card h4{

        font-size:28px;
    }

    .menu-desc,
    .text-muted{

        font-size:16px !important;

        min-height:auto !important;
    }

    /* BUTTON MENU */
    .menu-card .btn{

        height:50px;

        font-size:17px;

        border-radius:15px;
    }

    /* FLOATING CART */
    .floating-cart{

        width:95%;

        padding:18px;

        border-radius:25px;

        flex-direction:column;

        gap:15px;
    }

    .cart-left{

        width:100%;

        justify-content:center;
    }

    .checkout-btn{

        width:100%;

        font-size:20px;

        padding:14px;
    }

    .floating-cart .d-flex{

        width:100%;

        flex-direction:column;
    }

    /* MODAL */
    .modal-dialog{

        margin:10px;
    }

    .modal-body{

        padding:15px;
    }

    /* KERANJANG */
    .modal-body .d-flex.justify-content-between{

        flex-direction:column;

        align-items:flex-start !important;

        gap:15px;
    }

}

    </style>

</head>

<body>

<!-- Hero -->
<section class="hero">

    <div class="text-center">

        <div class="d-flex align-items-center justify-content-center gap-3">

    <img src="{{ asset('images/logo.jpg') }}"
         width="90"
         style="
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
         ">

    <h1 class="display-4 fw-bold m-0">
       noir Coffee
    </h1>

</div>

        <p>
            Pilih Menu Favoritmu
        </p>

    </div>

</section>


<div class="top-buttons">

    <a href="/"
       class="btn btn-outline-dark btn-top">

        ← Kembali

    </a>

    <button onclick="toggleDarkMode()"
        id="darkModeBtn"
        class="btn btn-dark btn-top btn-darkmode">
        🌙 Dark Mode

    </button>

    <a href="/status-pesanan"
       class="btn btn-dark btn-top">

        📦 Status Pesanan

    </a>

    </a>

<a href="/status-reservasi"
   class="btn btn-dark btn-top rounded-pill px-4 py-3 fw-bold">

    📅 Status Reservasi

</a>

    <a href="/reservasi"
       class="btn btn-reservasi btn-top">

        🗓️ Reservasi

    </a>

</div>

<div class="container mt-5">

    <div class="search-box">

        <input type="text"
               id="searchMenu"
               class="form-control search-input"
               placeholder="🔍 Cari menu favoritmu...">

    </div>

</div>

<div class="container py-5"
  id="menuSection">
    <h1 class="judul-kategori">
    ☕ Coffee
</h1>

   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
        @foreach($menus as $menu)

@if($menu->jenis_menu == 'Coffee')

       <div class="col menu-item">

          <div class="card menu-card shadow h-100"
     data-name="{{ strtolower($menu->nama_kopi) }}">

                <img src="{{ asset('images/'.$menu->gambar) }}"
                     class="card-img-top">

                <div class="card-body d-flex flex-column">
                    <span class="badge rounded-pill mb-2 px-3 py-2"
      style="
        background:#6f4e37;
        color:white;
      ">
    {{ $menu->kategori }}
</span>

                    <h4>

                        {{ $menu->nama_kopi }}

                    </h4>

                    <p class="text-muted flex-grow-1"
   style="
      min-height:90px;
      font-size:15px;
   ">
    {{ $menu->deskripsi }}
</p>

                    <h6 class="text-success fw-bold">

                        Rp {{ number_format($menu->harga) }}

                    </h6>
<button class="btn btn-dark w-100"
        data-bs-toggle="collapse"
        data-bs-target="#cartForm{{ $menu->id }}">

    Pilih Menu

</button>


<div class="collapse mt-3"
     id="cartForm{{ $menu->id }}">

    <form action="{{ route('cart.add', $menu->id) }}#menuSection"
      method="POST">

    @csrf

    <input type="hidden"
           name="jumlah"
           value="1">

    <button type="submit"
            class="btn btn-dark w-100">

        🛒 Tambah ke Keranjang

    </button>

</form>

</div>
                </div>

            </div>

        </div>

       @endif
@endforeach

    </div>

</div>
<div class="container py-2"
  id="menuSection">

    <h1 class="judul-kategori mt-5">
        🥤 Non Coffee
    </h1>

   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

    @foreach($menus as $menu)

   @if($menu->jenis_menu == 'Non Coffee')

    <div class="col menu-item">

        <div class="card menu-card shadow h-100"
     data-name="{{ strtolower($menu->nama_kopi) }}">

            <img src="{{ asset('images/'.$menu->gambar) }}"
                 class="card-img-top">

            <div class="card-body d-flex flex-column">

                <span class="badge rounded-pill mb-2 px-3 py-2"
                      style="background:#6f4e37;color:white;">

                    {{ $menu->kategori }}

                </span>

                <h4>
                    {{ $menu->nama_kopi }}
                </h4>

                <p class="text-muted flex-grow-1"
                   style="min-height:90px;font-size:15px;">

                    {{ $menu->deskripsi }}

                </p>

                <h6 class="text-success fw-bold">

                    Rp {{ number_format($menu->harga) }}

                </h6>

                <button class="btn btn-dark w-100"
        data-bs-toggle="collapse"
        data-bs-target="#cartForm{{ $menu->id }}">

    Pilih Menu

</button>

<div class="collapse mt-3"
     id="cartForm{{ $menu->id }}">

    <form action="{{ route('cart.add', $menu->id) }}#menuSection"
      method="POST">

    @csrf

    <input type="hidden"
           name="jumlah"
           value="1">

    <button type="submit"
            class="btn btn-dark w-100">

        🛒 Tambah ke Keranjang

    </button>

</form>
</div>
            </div>

        </div>

    </div>

    @endif

    @endforeach

    </div>

</div>

<div class="container py-2"
  id="menuSection">

    <h1 class="judul-kategori mt-5">
        🍔 Makanan
    </h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

    @foreach($menus as $menu)

    @if($menu->jenis_menu == 'Makanan')

   <div class="col menu-item">

        <div class="card menu-card shadow h-100"
     data-name="{{ strtolower($menu->nama_kopi) }}">
            <img src="{{ asset('images/'.$menu->gambar) }}"
                 class="card-img-top">

            <div class="card-body d-flex flex-column">

                <span class="badge rounded-pill mb-2 px-3 py-2"
                      style="background:#6f4e37;color:white;">

                    {{ $menu->kategori }}

                </span>

                <h4>
                    {{ $menu->nama_kopi }}
                </h4>

                <p class="menu-desc flex-grow-1"
                   style="min-height:90px;font-size:15px;">

                    {{ $menu->deskripsi }}

                </p>

                <h6 class="text-success fw-bold">

                    Rp {{ number_format($menu->harga) }}

                </h6>

                <button class="btn btn-dark w-100"
        data-bs-toggle="collapse"
        data-bs-target="#cartForm{{ $menu->id }}">

    Pilih Menu

</button>

<div class="collapse mt-3"
     id="cartForm{{ $menu->id }}">

    <form action="{{ route('cart.add', $menu->id) }}#menuSection"
          method="POST">

        @csrf

        <input type="hidden"
               name="jumlah"
               value="1">

        <button type="submit"
                class="btn btn-dark w-100">

            🛒 Tambah ke Keranjang

        </button>

    </form>

</div>

            </div>

        </div>

    </div>

    @endif

    @endforeach

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@if(count($carts) > 0)

<div class="floating-cart">

    <div class="cart-left">

        <div class="cart-icon">

            🛍️

            <div class="cart-badge">

               {{ $carts->sum('jumlah') }}

            </div>

        </div>

        <div>

            <small>Total Belanja</small>

            <h2 class="m-0 fw-bold">

                Rp {{ number_format($grandTotal) }}

            </h2>

        </div>

    </div>

    <div class="d-flex gap-3">

    <button class="checkout-btn"
            data-bs-toggle="modal"
            data-bs-target="#cartModal">

        🛍️ Lihat Menu

    </button>

    <a href="/cart"
       class="checkout-btn text-decoration-none">

        Check Out

    </a>

</div>

</div>
@endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))

<script>

Swal.fire({

    toast:true,
    position:'top-end',
    icon:'success',
    title:'Berhasil ditambahkan',
    showConfirmButton:false,
    timer:1500

});

</script>

@endif

<!-- Modal Cart -->
<div class="modal fade"
     id="cartModal"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content border-0 rounded-4">

            <div class="modal-header border-0">

                <h3 class="fw-bold">
                    🛒 Keranjang Belanja
                </h3>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                @foreach($carts as $cart)

                <div class="d-flex align-items-center justify-content-between mb-4">

                    <div class="d-flex align-items-center gap-3">

                        <img src="{{ asset('images/'.$cart->menu->gambar) }}"
                             width="80"
                             height="80"
                             style="
                                object-fit:cover;
                                border-radius:20px;
                             ">

                        <div>

                            <h5 class="fw-bold m-0">

                                {{ $cart->menu->nama_kopi }}

                            </h5>

                            <small class="text-muted">

                                Rp {{ number_format($cart->menu->harga) }}

                            </small>

                        </div>

                    </div>

                    <div class="d-flex align-items-center gap-2">

@if($cart->jumlah > 1)

<a href="/cart/min/{{ $cart->id }}#cartModal"
   class="btn btn-outline-dark rounded-circle btn-minus">

    -

</a>

@else

<a href="{{ route('cart.remove', $cart->id) }}"
   class="btn btn-outline-dark rounded-circle btn-minus">

    -

</a>

@endif

<strong>

    {{ $cart->jumlah }}

</strong>

<a href="/cart/plus/{{ $cart->id }}#cartModal"
   class="btn rounded-circle btn-plus">

    +

</a>
</div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</div>
<script>

function toggleDarkMode(){

    document.body.classList.toggle('dark-mode');

    let btn = document.getElementById('darkModeBtn');

    // cek mode
    if(document.body.classList.contains('dark-mode')){

        localStorage.setItem('theme','dark');

        btn.innerHTML = '☀ Light Mode';

    }else{

        localStorage.setItem('theme','light');

        btn.innerHTML = '🌙 Dark Mode';
    }
}

// load saat refresh
window.onload = function(){

    let btn = document.getElementById('darkModeBtn');

    if(localStorage.getItem('theme') === 'dark'){

        document.body.classList.add('dark-mode');

        btn.innerHTML = '☀ Light Mode';

    }else{

        btn.innerHTML = '🌙 Dark Mode';
    }
}

</script>
<script>

window.onload = function(){

    if(window.location.hash === "#cartModal"){

        let modal = new bootstrap.Modal(
            document.getElementById('cartModal')
        );

        modal.show();

    }

}

</script>

<script>

document.getElementById('searchMenu')
.addEventListener('keyup', function(){

    let keyword = this.value.toLowerCase();

    let menus = document.querySelectorAll('.menu-item');

    menus.forEach(menu => {

        let name = menu
        .querySelector('.menu-card')
        .getAttribute('data-name');

        if(name.includes(keyword)){

            menu.style.display = 'block';

        }else{

            menu.style.display = 'none';
        }

    });

});

</script>

</body>
</html>
