<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Menu Kopi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background:#f5f5f5;
        }

        .navbar{
            background:#2d1b14;
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

.menu-card{
    border-radius:20px;
    overflow:hidden;
    transition:0.3s;
}

.badge-kategori{
    background:#6f4e37;
    color:white;
    padding:8px 14px;
    border-radius:30px;
    font-size:12px;
    width:max-content;
}
        .menu-card:hover{
            transform:translateY(-10px);
        }

        .badge-kategori{
    background:#6f4e37;
}

.judul-kategori{
    font-size:40px;
    font-weight:bold;
    color:#6f4e37;
    margin-bottom:30px;
    margin-top:20px;
    border-left:8px solid #6f4e37;
    padding-left:20px;
}

/* =========================
   RESPONSIVE MENU ADMIN
========================= */

@media(max-width:768px){

    body{
        overflow-x:hidden;
    }

    /* NAVBAR */
    .navbar{

        padding:15px !important;
    }

    .navbar-brand{

        font-size:22px !important;
    }

    /* HERO */
    .hero{

        height:auto !important;

        padding:60px 20px;

        text-align:center;
    }

    .hero h1{

        font-size:40px !important;
    }

    .hero p{

        font-size:16px !important;
    }

    /* SEARCH + BUTTON */
    .top-action{

        flex-direction:column !important;

        gap:15px;
    }

    .search-form{

        width:100% !important;
    }

    .search-form input{

        height:50px;
    }

    .action-buttons{

        width:100%;

        display:flex;

        flex-direction:column;

        gap:10px;
    }

    .action-buttons a{

        width:100%;
    }

    /* TITLE */
    .judul-kategori{

        font-size:40px !important;
    }

    /* CARD */
    .menu-card{

        margin-bottom:25px;
    }

    .menu-card img{

        width:160px !important;
        height:160px !important;
    }

    .menu-card h4{

        font-size:28px;
    }

    .menu-card p{

        font-size:16px;
    }

    /* BUTTON CARD */
    .menu-card .btn{

        width:100%;

        margin-bottom:10px;
    }

}

    </style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">

        <a class="navbar-brand fw-bold"
           href="#">

            ☕ NOIR COFFEE

        </a>

        <div>

            <a href="{{ route('dashboard') }}"
               class="btn btn-warning">

                Dashboard

            </a>

        </div>

    </div>

</nav>

<!-- Hero -->
<section class="hero">

    <div class="text-center">

        <h1 class="display-4 fw-bold">
            Daftar Menu Kopi
        </h1>

        <p>
            Nikmati kopi terbaik pilihan cafe kami
        </p>

    </div>

</section>

<!-- Content -->
<div class="container py-5">

    <!-- Search -->
    <div class="row mb-4 top-action align-items-center">

    <!-- SEARCH -->
    <div class="col-md-8 search-form">

        <form action="{{ route('menu.index') }}"
              method="GET">

            <div class="input-group">

                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Cari menu kopi..."
                       value="{{ request('search') }}">

                <button class="btn btn-dark">

                    <i class="bi bi-search"></i>

                </button>

            </div>

        </form>

    </div>

    <!-- BUTTON -->
    <div class="col-md-4 text-end action-buttons">

        <a href="{{ route('menu.create') }}"
           class="btn btn-success">

            <i class="bi bi-plus-circle"></i>
            Tambah Menu

        </a>

        <a href="{{ route('pesanan.index') }}"
           class="btn btn-primary">

            <i class="bi bi-bag-check"></i>
            Pesanan

        </a>

        <a href="{{ route('penjualan.index') }}"
           class="btn btn-warning">

            <i class="bi bi-bar-chart"></i>
            Penjualan

        </a>

    </div>

</div>

    <!-- Menu Card -->
    <h1 class="judul-kategori">
    ☕ Coffee
</h1>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4">

       @foreach($menus as $menu)

@if($menu->jenis_menu == 'Coffee')

        <div class="col">

            <div class="card menu-card shadow h-100">

                @if($menu->gambar)

                <img src="{{ asset('images/' . $menu->gambar) }}"
     class="card-img-top"

     >

                @endif

                <div class="card-body d-flex flex-column">

                    <span class="badge-kategori mb-2">

                        {{ $menu->kategori }}

                    </span>

                    <h5 class="fw-bold">

                        {{ $menu->nama_kopi }}

                    </h5>

                    <p class="text-muted flex-grow-1"
   style="min-height:90px; font-size:14px;">

                        {{ $menu->deskripsi }}

                    </p>

                    <h6 class="text-success fw-bold mb-3">

                        Rp {{ number_format($menu->harga) }}

                    </h6>

                    <div class="d-grid gap-2 mt-auto">

                        <a href="{{ route('menu.edit', $menu->id) }}"
                           class="btn btn-primary">

                            <i class="bi bi-pencil"></i>
                            Edit

                        </a>

                        <form action="{{ route('menu.destroy', $menu->id) }}"
      method="POST"
      class="form-hapus">

    @csrf
    @method('DELETE')

    <button type="submit"
            class="btn btn-danger w-100">

        🗑 Hapus

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
<div class="container py-2">

    <h1 class="judul-kategori mt-5">
        🥤 Non Coffee
    </h1>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4">

    @foreach($menus as $menu)

   @if($menu->jenis_menu == 'Non Coffee')

    <div class="col">

        <div class="card menu-card shadow h-100">

            <img src="{{ asset('images/'.$menu->gambar) }}"
                 class="card-img-top">

            <div class="card-body d-flex flex-column">

                <span class="badge-kategori mb-2">

    {{ $menu->kategori }}

</span>

                <h5 class="fw-bold">

    {{ $menu->nama_kopi }}

</h5>

                <p class="text-muted flex-grow-1"
   style="min-height:90px; font-size:14px;">

    {{ $menu->deskripsi }}

</p>

                <h6 class="text-success fw-bold mb-3">

    Rp {{ number_format($menu->harga) }}

</h6>

                <div class="d-grid gap-2 mt-auto">

    <a href="{{ route('menu.edit', $menu->id) }}"
       class="btn btn-primary">

        <i class="bi bi-pencil"></i>
        Edit

    </a>

    <form action="{{ route('menu.destroy', $menu->id) }}"
          method="POST"
          class="form-hapus">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-danger w-100">

            🗑 Hapus

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

<div class="container py-2">

    <h1 class="judul-kategori mt-5">
        🍔 Makanan
    </h1>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4">

    @foreach($menus as $menu)

    @if($menu->jenis_menu == 'Makanan')

    <div class="col">

        <div class="card menu-card shadow h-100">

            <img src="{{ asset('images/'.$menu->gambar) }}"
                 class="card-img-top">

             <div class="card-body d-flex flex-column">

                <span class="badge-kategori mb-2">

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

                <div class="d-grid gap-2 mt-auto">

    <a href="{{ route('menu.edit', $menu->id) }}"
       class="btn btn-primary">

        <i class="bi bi-pencil"></i>
        Edit

    </a>

    <form action="{{ route('menu.destroy', $menu->id) }}"
          method="POST"
          class="form-hapus">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-danger w-100">

            🗑 Hapus

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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

document.querySelectorAll('.form-hapus').forEach(form => {

    form.addEventListener('submit', function(e) {

        e.preventDefault();

        Swal.fire({
            title: 'Hapus Menu?',
            text: "Menu yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {

            if (result.isConfirmed) {

                form.submit();

            }

        });

    });

});

</script>
</body>
</html>
