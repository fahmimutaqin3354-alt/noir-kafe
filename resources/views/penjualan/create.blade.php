<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pesan Kopi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">

                <div class="card-body p-4">

                    <h2 class="mb-4 text-center">
                        ☕ Form Pemesanan
                    </h2>

                    <form action="{{ route('penjualan.store') }}"
                          method="POST">

                        @csrf

                        <div class="mb-3">

                            <label>Nama Pelanggan</label>

                            <input type="text"
                                   name="nama_pembeli"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label>Menu Kopi</label>

                            <input type="text"
                                   name="nama_kopi"
                                   class="form-control"
                                   value="{{ $menu }}"
                                   readonly>

                        </div>

                        <div class="mb-3">

                            <label>Harga</label>

                            <input type="number"
                                   name="harga"
                                   class="form-control"
                                   value="{{ $harga }}"
                                   readonly>

                        </div>

                        <div class="mb-3">

                            <label>Jumlah</label>

                            <input type="number"
                                   name="jumlah"
                                   class="form-control"
                                   required>

                        </div>

                        <button class="btn btn-success w-100">

                            <i class="bi bi-cart"></i>
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
