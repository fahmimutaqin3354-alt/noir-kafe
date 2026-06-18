<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tambah Menu Kopi</title>

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

        :root{

    --gold:#c89b3c;
    --dark:#1b1407;
    --cream:#f5eee3;
    --input:#343b4f;
}

        body{

            background:
    linear-gradient(135deg,#0b1220,#111827,#000);
            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            padding:40px;
        }

        .menu-card{

             width:100%;
    max-width:700px;

    background:rgba(255,255,255,0.06);
            backdrop-filter:blur(12px);

            border:1px solid rgba(255,255,255,0.1);

            border-radius:30px;

            padding:40px;

            box-shadow:
            0 10px 40px rgba(0,0,0,0.4);
        }

        .title{

             color:white;
            font-size:42px;
            text-align:center;

            font-weight:700;

            margin-bottom:30px;
        }

        .form-label{

            color:white;
            font-weight:500;
        }

        .form-control,
        .form-select{

          background:var(--input);

            border:none;

            color:white;

            border-radius:15px;

            padding:14px;
        }

        .form-select option{

    background:white;

    color:black;
}

.form-select{
    color:white !important;
}

        .form-control:focus,
        .form-select:focus{

            background:rgba(255,255,255,0.12);

            color:white;

            box-shadow:none;

           border:1px solid var(--gold);
        }

        textarea{
            resize:none;
        }

        .btn-save{

           background:var(--gold);

            border:none;

            padding:14px;

            border-radius:15px;

            font-weight:600;

            transition:0.3s;
        }

        .btn-save:hover{

            background:#a87f2f;

            transform:translateY(-3px);
        }

    </style>

</head>

<body>

<div class="menu-card">

    <div class="text-center">

        <h1 class="title">

    <img src="{{ asset('images/logo.jpg') }}"
         width="70"
         class="mb-2">

    <br>

    Tambah Menu

</h1>
    </div>

    <form action="{{ route('menu.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <!-- Gambar -->
        <div class="mb-4">

            <label class="form-label">
                Gambar Menu
            </label>

            <input type="file"
                   name="gambar"
                   class="form-control">

        </div>

        <!-- Nama -->
        <div class="mb-4">

            <label class="form-label">
                Nama Kopi
            </label>

            <input type="text"
                   name="nama_kopi"
                   class="form-control"
                   placeholder="Masukkan nama kopi">

        </div>

        <!-- Harga -->
        <div class="mb-4">

            <label class="form-label">
                Harga
            </label>

            <input type="number"
                   name="harga"
                   class="form-control"
                   placeholder="Masukkan harga">

        </div>

        <!-- Deskripsi -->
        <div class="mb-4">

            <label class="form-label">
                Deskripsi
            </label>

            <textarea name="deskripsi"
                      rows="4"
                      class="form-control"
                      placeholder="Deskripsi kopi"></textarea>

        </div>
        <div class="mb-3">

    <label class="form-label">
        Jenis Menu
    </label>

    <select name="jenis_menu"
            class="form-select">

        <option value="Coffee">
            Coffee
        </option>

        <option value="Non Coffee">
            Non Coffee
        </option>

        <option value="Makanan">Makanan</option>

    </select>

</div>

        <!-- Kategori -->
        <div class="mb-4">

            <label class="form-label">
                Kategori
            </label>

            <input type="text"
       name="kategori"
       class="form-control form-control-lg bg-dark text-white border-0 rounded-4 p-3"
       placeholder="Contoh: Espresso, Latte, Tea">

        </div>
        <!-- Button -->
        <button type="submit"
                class="btn btn-save text-white w-100">

            Simpan Menu

        </button>

    </form>

</div>

</body>
</html>
