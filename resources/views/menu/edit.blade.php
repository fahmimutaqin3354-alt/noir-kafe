<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Menu Kopi</title>

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
            linear-gradient(135deg,#0f172a,#111827,#000);

            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            padding:40px;
        }

        .edit-card{

            width:100%;
            max-width:650px;

            background:rgba(255,255,255,0.08);

            backdrop-filter:blur(12px);

            border:1px solid rgba(255,255,255,0.1);

            border-radius:30px;

            padding:40px;

            box-shadow:
            0 10px 40px rgba(0,0,0,0.4);
        }

        .title{

            color:white;

            font-size:35px;

            font-weight:700;

            margin-bottom:30px;
        }

        .form-label{

            color:white;

            font-weight:500;
        }

        .form-control,
        .form-select{

            background:rgba(255,255,255,0.08);

            border:none;

            color:white;

            border-radius:15px;

            padding:14px;
        }

        .form-control:focus,
        .form-select:focus{

            background:rgba(255,255,255,0.12);

            color:white;

            box-shadow:none;

            border:1px solid #22c55e;
        }

        .form-select option{

            background:#1f2937;

            color:white;
        }

        textarea{
            resize:none;
        }

        .btn-update{

            background:#3b82f6;

            border:none;

            padding:14px;

            border-radius:15px;

            font-weight:600;

            transition:0.3s;
        }

        .btn-update:hover{

            background:#2563eb;

            transform:translateY(-3px);
        }

        .preview-img{

            width:120px;
            height:120px;

            object-fit:cover;

            border-radius:20px;

            margin-top:15px;

            border:3px solid rgba(255,255,255,0.2);
        }

    </style>

</head>

<body>

<div class="edit-card">

    <div class="text-center">

        <h1 class="title">
            ✏️ Edit Menu 
        </h1>

    </div>

    <form action="{{ route('menu.update', $menu->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- Gambar -->
        <div class="mb-4">

            <label class="form-label">
                Gambar Menu
            </label>

            <input type="file"
                   name="gambar"
                   class="form-control">

            @if($menu->gambar)

                <img src="{{ asset('images/'.$menu->gambar) }}"
                     class="preview-img">

            @endif

        </div>

        <!-- Nama -->
        <div class="mb-4">

            <label class="form-label">
                Nama Kopi
            </label>

            <input type="text"
                   name="nama_kopi"
                   value="{{ $menu->nama_kopi }}"
                   class="form-control">

        </div>

        <!-- Harga -->
        <div class="mb-4">

            <label class="form-label">
                Harga
            </label>

            <input type="number"
                   name="harga"
                   value="{{ $menu->harga }}"
                   class="form-control">

        </div>

        <!-- Deskripsi -->
        <div class="mb-4">

            <label class="form-label">
                Deskripsi
            </label>

            <textarea name="deskripsi"
                      rows="4"
                      class="form-control">{{ $menu->deskripsi }}</textarea>

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
                class="btn btn-update text-white w-100">

            Update Menu

        </button>

    </form>

</div>

</body>
</html>
