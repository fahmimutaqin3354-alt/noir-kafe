<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Laporan Penjualan</title>

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

        .header-box{
            background:
            linear-gradient(rgba(0,0,0,0.6),
            rgba(0,0,0,0.6)),
            url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1400');

            background-size:cover;
            background-position:center;

            height:250px;

            display:flex;
            align-items:center;
            justify-content:center;

            color:white;
        }

        .card-modern{
            border:none;
            border-radius:20px;
            box-shadow:0 4px 15px rgba(0,0,0,0.1);
        }

        .table{
            border-radius:20px;
            overflow:hidden;
        }

    </style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">

        <a class="navbar-brand fw-bold"
           href="#">

            ☕ Cafe Coffee

        </a>

        <div>

            <a href="{{ route('dashboard') }}"
               class="btn btn-warning">

                Dashboard

            </a>

        </div>

    </div>

</nav>

<!-- Header -->
<section class="header-box">

    <div class="text-center">

        <h1 class="display-5 fw-bold">
            Laporan Penjualan
        </h1>

        <p>
            Data transaksi cafe coffee
        </p>

    </div>

</section>

<!-- Content -->
<div class="container py-5">

    <!-- Card Pendapatan -->
    <div class="row mb-4">

        <div class="col-md-4">

            <div class="card card-modern text-center p-4">

                <h5>Total Pendapatan</h5>

                <h1 class="text-success fw-bold">

                    Rp {{ number_format($totalPendapatan) }}

                </h1>

            </div>

        </div>

        <div class="col-md-8 text-end">

            <a href="{{ route('penjualan.create') }}"
               class="btn btn-success btn-lg">

                <i class="bi bi-plus-circle"></i>
                Tambah Penjualan

            </a>

        </div>

    </div>

    <!-- Table -->
    <div class="card card-modern p-4">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>Pembeli</th>
                        <th>Menu</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($penjualans as $penjualan)

                    <tr>

                        <td>

                            <strong>
                                {{ $penjualan->nama_pembeli }}
                            </strong>

                        </td>

                        <td>

                            {{ $penjualan->nama_kopi }}

                        </td>

                        <td>

                            {{ $penjualan->jumlah }}

                        </td>

                        <td>

                            Rp {{ number_format($penjualan->harga) }}

                        </td>

                        <td class="text-success fw-bold">

                            Rp {{ number_format($penjualan->total) }}

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
