<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Pesan Kopi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">
      <style>
        .gambar-pesan{
    width:220px;
    height:220px;
    object-fit:cover;
    border-radius:50%;
    display:block;
    margin:0 auto 20px auto;
    background:#f5f5f5;
    padding:10px;
}
      </style>

</head>
<body class="bg-dark">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body p-5">

                    <h2 class="fw-bold mb-4 text-center">

                        ☕ Pesanan

                    </h2>

                    <img src="{{ asset('images/' . $menu->gambar) }}"
     class="gambar-pesan">


                    <h3>
                        {{ $menu->nama_kopi }}
                    </h3>

                    <h4 class="text-success mb-4">

                        Rp {{ number_format($menu->harga) }}

                    </h4>

                    <form action="{{ route('penjualan.store') }}"
                          method="POST">

                        @csrf

                        <div class="mb-3">

                            <label>
                                Nama Pembeli
                            </label>

                            <input type="text"
                                   name="nama_pembeli"
                                   class="form-control">

                        </div>

                        <input type="hidden"
                               name="nama_kopi"
                               value="{{ $menu->nama_kopi }}">

                        <input type="hidden"
                               name="harga"
                               value="{{ $menu->harga }}">

                        <div class="mb-3">

                            <label>
                                Jumlah
                            </label>

                            <input type="number"
                                   name="jumlah"
                                   class="form-control">

                        </div>

                        <button class="btn btn-success w-100 py-3">

                            Pesan Sekarang

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
