<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

        body{
            background:#f5f5f5;
            font-family:Segoe UI;
        }

        .sidebar{

    width:280px;
    height:100vh;

    background:#f3e7dc;

    position:fixed;

    left:0;
    top:0;

    padding:30px;

    overflow-y:auto;
}

.sidebar::-webkit-scrollbar{
    width:5px;
}

.sidebar::-webkit-scrollbar-thumb{
    background:#c89b3c;
    border-radius:10px;
}

        .logo{

            font-size:40px;
            font-weight:bold;

            color:#2b2b2b;

            margin-bottom:50px;
        }

        .menu-link{

            display:block;

            text-decoration:none;

            color:#333;

            padding:15px 20px;

            border-radius:15px;

            margin-bottom:15px;

            font-size:20px;
            font-weight:600;

            transition:0.3s;
        }

        .menu-link:hover{

            background:white;

            transform:translateX(5px);
        }

        .main{

            margin-left:300px;

            padding:40px;
        }

        .welcome{

            font-size:50px;
            font-weight:bold;

            color:#2b2b2b;
        }

        .subtext{
            color:#777;
            margin-bottom:40px;
        }

        .card-dashboard{

            background:white;

            border-radius:30px;

            padding:35px;

            box-shadow:0 10px 25px rgba(0,0,0,0.06);

            transition:0.3s;
        }

        .card-dashboard:hover{
            transform:translateY(-5px);
        }

        .card-title{

            font-size:22px;
            color:#777;
        }

        .card-value{

            font-size:50px;
            font-weight:bold;
        }

        .menu-card{

            background:white;

            border-radius:25px;

            padding:25px;

            box-shadow:0 10px 20px rgba(0,0,0,0.05);

            transition:0.3s;
        }

        .menu-card:hover{
            transform:translateY(-5px);
        }

        .menu-img{

            width:100%;
            height:180px;

            object-fit:cover;

            border-radius:20px;
        }

        .btn-modern{

            background:#6f4e37;

            color:white;

            border:none;

            padding:12px 20px;

            border-radius:15px;

            text-decoration:none;

            font-weight:bold;
        }

        .btn-modern:hover{
            background:#5a3f2d;
            color:white;
        }

        .chart-card{

            background:white;

            border-radius:30px;

            padding:30px;

            margin-top:40px;

            box-shadow:0 10px 25px rgba(0,0,0,0.05);
        }

        .logout-btn{

            background:#dc3545;

            color:white;

            border:none;

            width:100%;

            padding:15px;

            border-radius:15px;

            margin-top:50px;

            font-size:18px;
            font-weight:bold;
        }

        /* =========================
   MOBILE ADMIN
========================= */

.mobile-toggle{

    display:none;

    position:fixed;

    top:20px;
    left:20px;

    z-index:2000;

    width:55px;
    height:55px;

    border:none;

    border-radius:15px;

    background:#6f4e37;

    color:white;

    font-size:28px;

    box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

.sidebar-overlay{

    display:none;

    position:fixed;

    inset:0;

    background:rgba(0,0,0,0.5);

    z-index:998;
}

@media(max-width:768px){

    .mobile-toggle{

        display:block;
    }

    .sidebar{

        transform:translateX(-100%);

        transition:0.3s;

        z-index:999;
    }

    .sidebar.active{

        transform:translateX(0);
    }

    .sidebar-overlay.active{

        display:block;
    }

    .main{

        margin-left:0;

        padding:90px 20px 30px 20px;
    }

    .welcome{

        font-size:32px;
    }

    .card-value{

        font-size:35px;
    }

    .menu-card{

        margin-bottom:20px;
    }

    .menu-img{

        height:160px;
    }

    .chart-card{

        padding:20px;
    }

}

    </style>

</head>

<body>

    <button class="mobile-toggle"
        onclick="toggleSidebar()">

    ☰

</button>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">
        ☕ Noir Coffee
    </div>

    <a href="/dashboard"
       class="menu-link">

        🏠 Dashboard

    </a>

    <a href="/menu"
       class="menu-link">

        📋 Menu Edit Kopi

    </a>

    <a href="/pesanan"
       class="menu-link">

        📦 Data Pesanan

    </a>

    <a href="/status-pesanan"
       class="menu-link">

        👨‍🍳 Status Pesanan

    </a>

    <a href="/admin/reservasi"
class="menu-link">

    📅 Reservasi

</a>

    <a href="/menu-pelanggan"
       class="menu-link">

        🌐 Website Pelanggan

    </a>


    <form action="/logout"
          method="POST">

        @csrf

        <button class="logout-btn">

            Logout

        </button>

    </form>

</div>

<div class="sidebar-overlay"
     onclick="toggleSidebar()">
</div>

<!-- MAIN -->
<div class="main">

    <div class="welcome">
        Welcome Back, Admin 👋
    </div>

    <div class="subtext">
        Dashboard management Noir Coffee
    </div>

    <!-- CARD -->
    <div class="row g-4">

       <div class="col-lg-4 col-md-6 col-12">
            <div class="card-dashboard text-center">

                <div class="card-title">

                    Total Menu

                </div>

                <div class="card-value text-primary">

                    {{ $menus->count() }}

                </div>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-12">

            <div class="card-dashboard text-center">

                <div class="card-title">

                    Total Pesanan

                </div>

                <div class="card-value text-success">

                    {{ $pesanans->count() }}

                </div>

            </div>

        </div>

       <div class="col-lg-4 col-md-6 col-12">

            <div class="card-dashboard text-center">

                <div class="card-title">

                    Total Sales

                </div>

                <div class="card-value text-warning">

                    Rp {{ number_format($pesanans->sum('total_harga')) }}

                </div>

            </div>

        </div>

    </div>

    <!-- MENU -->
    <div class="mt-5 mb-4">

        <h2 class="fw-bold">
            ☕ Menu Favorit
        </h2>

    </div>

    <div class="row g-4">

        @foreach($menus->take(4) as $menu)

       <div class="col-lg-3 col-md-6 col-12">

            <div class="menu-card">

                <img src="{{ asset('images/'.$menu->gambar) }}"
                     class="menu-img">

                <h4 class="mt-3 fw-bold">

                    {{ $menu->nama_kopi }}

                </h4>

                <p class="text-muted">

                    {{ $menu->kategori }}

                </p>

                <div class="d-flex justify-content-between align-items-center">

                    <h5 class="text-success fw-bold">

                        Rp {{ number_format($menu->harga) }}

                    </h5>

                    <a href="/menu"
                       class="btn-modern">

                        Lihat

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

    <!-- CHART -->
    <div class="chart-card">

        <h3 class="fw-bold mb-4">

            📈 Sales Analytics

        </h3>

        <canvas id="salesChart"></canvas>

    </div>

</div>

<script>

const ctx = document.getElementById('salesChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],

        datasets: [{

            label: 'Penjualan',

            data: [12, 19, 8, 15, 20, 18, 25],

            borderWidth: 4,

            tension: 0.4,

            fill: true

        }]

    },

    options: {

        responsive:true

    }

});

</script>

<script>

function toggleSidebar(){

    document.querySelector('.sidebar')
    .classList.toggle('active');

    document.querySelector('.sidebar-overlay')
    .classList.toggle('active');

}

</script>

</body>
</html>
