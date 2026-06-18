<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>NOIR COFFEE</title>

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

        .hero{
            height:100vh;
            background:
            linear-gradient(rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)),
            url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1400');

            background-size:cover;
            background-position:center;

            color:white;

            display:flex;
            align-items:center;
        }

        .hero-content{
            max-width:600px;
        }

        .coffee-card{
            border:none;
            border-radius:20px;
            overflow:hidden;
            transition:0.3s;
        }

        .coffee-card:hover{
            transform:translateY(-10px);
        }

        .coffee-card img{
            height:250px;
            object-fit:cover;
        }

    </style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <div class="container">

        <a class="navbar-brand fw-bold"
           href="#">

            ☕ NOIR COFFEE

        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto">

                @guest

                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('login') }}">

                        Login

                    </a>

                </li>

                <li class="nav-item">

                    <a class="btn btn-warning ms-2"
                       href="{{ route('register') }}">

                        Register

                    </a>

                </li>

                @endguest

                @auth

                <li class="nav-item">

                    <a class="btn btn-warning"
                       href="{{ route('dashboard') }}">

                        Dashboard

                    </a>

                </li>

                @endauth

            </ul>

        </div>

    </div>

</nav>

<!-- Hero -->
<section class="hero">

    <div class="container">

        <div class="hero-content">

            <h1 class="display-3 fw-bold">
                Nikmati Kopi Terbaik
            </h1>

            <p class="lead mt-4">

                Cafe modern dengan berbagai pilihan kopi,
                latte, espresso, dan minuman premium.

            </p>

            <a href="{{ route('login') }}"
               class="btn btn-warning btn-lg mt-3">

                Pesan Sekarang

            </a>

        </div>

    </div>

</section>

<!-- Menu Section -->
<section class="py-5">

    <div class="container">

        <h2 class="text-center mb-5">
            Menu Favorit
        </h2>

        <div class="row">

            <!-- Card 1 -->
            <div class="col-md-4 mb-4">

                <div class="card coffee-card shadow">

                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=1200"
                         class="card-img-top">

                    <div class="card-body">

                        <h4>Americano</h4>

                        <p>
                            Espresso dengan rasa kopi kuat.
                        </p>

                        <button class="btn btn-dark">
                            Rp 18.000
                        </button>

                    </div>

                </div>

            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">

                <div class="card coffee-card shadow">

                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1200"
                         class="card-img-top">

                    <div class="card-body">

                        <h4>Latte</h4>

                        <p>
                            Perpaduan kopi dan susu creamy.
                        </p>

                        <button class="btn btn-dark">
                            Rp 24.000
                        </button>

                    </div>

                </div>

            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">

                <div class="card coffee-card shadow">

                    <img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?q=80&w=1200"
                         class="card-img-top">

                    <div class="card-body">

                        <h4>Matcha Latte</h4>

                        <p>
                            Matcha premium dengan susu segar.
                        </p>

                        <button class="btn btn-dark">
                            Rp 25.000
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">

    <p class="mb-0">
        © 2026 Cafe Coffee Laravel
    </p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
