<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cafe Coffee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        :root{

    --gold:#c89b3c;
    --dark:#1b1407;
    --cream:#f5eee3;
}

        body{
            font-family: Poppins, sans-serif;
            background: #140f05;
            color: white;
        }

        .hero{
            height: 100vh;
            background:
            linear-gradient(
rgba(20,15,5,0.75),
rgba(20,15,5,0.75)
),
            url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085');

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            text-shadow:0 5px 20px rgba(0,0,0,0.5);
        }

        .hero h1{
            font-size: 70px;
            font-weight: 700;
        }

        .hero p{
            font-size: 22px;
            color: #f5eee3;
        }

        .btn-menu{
            background: #22c55e;
            border: none;
            padding: 15px 40px;
            border-radius: 15px;
            font-size: 20px;
            font-weight: 600;
            margin-top: 20px;
        }

        .btn-menu:hover{
            background: #16a34a;
            .btn{

    transition:0.3s;
}

.btn:hover{

    transform:translateY(-5px);

    box-shadow:0 10px 25px rgba(0,0,0,0.4);
}
        }

    </style>
</head>
<body>

<section class="hero">

    <div>

        <div class="mb-4">

    <img src="{{ asset('images/logo.jpg') }}"
         style="
            width:120px;
            height:120px;
            object-fit:cover;
            border-radius:50%;
            border:4px solid #c89b3c;
            padding:5px;
            background:#1b1407;
            box-shadow:0 10px 30px rgba(0,0,0,0.5);
         ">

</div>

<h1 style="
    color:#f8f3e7;
    font-weight:700;
">
    Noir Coffee
</h1>

        <p>
            Nikmati kopi terbaik dengan suasana nyaman
        </p>

        <div class="d-flex justify-content-center gap-3 flex-wrap">

    <!-- Tombol Pelanggan -->
    <a href="/menu-pelanggan"
       class="btn btn-lg px-5 py-3 rounded-4 fw-bold shadow"

style="
    background:#c89b3c;
    color:#1b1407;
    border:none;
">
        <i class="bi bi-cup-hot-fill"></i>
        Lihat Menu

    </a>

    <!-- Tombol Admin -->
    <a href="/login"
       class="btn btn-lg px-5 py-3 rounded-4 fw-bold shadow"

style="
    background:#1b1407;
    color:#f8f3e7;
    border:2px solid #c89b3c;
">

        <i class="bi bi-shield-lock-fill"></i>
        Login Admin

    </a>

</div>

    </div>

</section>

</body>
</html>
