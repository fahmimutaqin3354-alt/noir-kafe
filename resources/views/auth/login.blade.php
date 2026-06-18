<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        *{
            font-family:'Poppins', sans-serif;
        }

        body{

            background:
linear-gradient(
135deg,
#111827,
#1b1f2e,
#4b3d00
);
            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            overflow:hidden;
        }

        .login-card{

            width:420px;

            background:rgba(27,31,46,0.95);

            border:1px solid rgba(200,155,60,0.2);

            backdrop-filter:blur(15px);

            border-radius:30px;

            padding:40px;

            box-shadow:
            0 10px 40px rgba(0,0,0,0.5);

            animation:fadeIn 1s ease;
        }

        @keyframes fadeIn{

            from{
                opacity:0;
                transform:translateY(30px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        .logo{

            font-size:55px;
        }

        .title{

            color:white;
            font-weight:700;
            font-size:32px;
        }

        .subtitle{

            color:#9ca3af;
            margin-bottom:30px;
        }

        .form-control{

            background:rgba(255,255,255,0.08);
            border:none;
            color:white;

            padding:14px;
            border-radius:15px;
        }

        .form-control:focus{

            background:rgba(255,255,255,0.12);

            color:white;

            box-shadow:none;

            border:1px solid #c89b3c;
        }

        .btn-login{

           background:#c89b3c;

            color:#1b1f2e;

            border:none;

            padding:14px;

            border-radius:15px;

            font-weight:600;

            transition:0.3s;
        }

        .btn-login:hover{

           background:#e0ad42;

            transform:translateY(-3px);
        }

        .register-link{

           color:#c89b3c;
            text-decoration:none;
            font-weight:600;
        }

        .register-link:hover{

            color:#e0ad42;
        }

        label{
            color:white;
            margin-bottom:8px;
        }

    </style>

</head>

<body>

<div class="login-card">

    <div class="text-center mb-4">

        <div class="logo">
            <img src="{{ asset('images/logo.jpg') }}"
     style="
        width:95px;
        height:95px;
        border-radius:50%;
        object-fit:cover;
        border:4px solid #c89b3c;
        padding:4px;
        background:#1b1f2e;
        box-shadow:0 5px 20px rgba(0,0,0,0.4);
     ">
        </div>

        <div class="title">
            Noir COffee
        </div>

        <div class="subtitle">
            Login Admin Dashboard
        </div>

    </div>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <!-- Email -->
        <div class="mb-4">

            <label>Email</label>

            <input type="email"
                   name="email"
                   class="form-control"
                   required>

        </div>

        <!-- Password -->
        <div class="mb-4">

            <label>Password</label>

            <input type="password"
                   name="password"
                   class="form-control"
                   required>

        </div>

        <!-- Remember -->
        <div class="form-check mb-4">

            <input class="form-check-input"
                   type="checkbox"
                   name="remember">

            <label class="form-check-label text-light">

                Remember me

            </label>

        </div>

        <!-- Button -->
        <button type="submit"
                class="btn btn-login text-white w-100">

            Login

        </button>

        <!-- Register -->
        <div class="text-center mt-4 text-light">

            Belum punya akun?

            <a href="{{ route('register') }}"
               class="register-link">

                Register Sekarang

            </a>

        </div>

    </form>

</div>

</body>
</html>
