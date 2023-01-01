<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b0cef64d70.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <title>Input Data Penonton Konser</title>
</head>
<body class="sb-nav-fixed">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed w-100 top-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PORTAL KPOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('dashboard')}}">Home
                <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tiket</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('show-tiket') }}">Daftar Pembeli Tiket</a>
                        <a class="dropdown-item" href="{{ url('input-tiket') }}">Beli Tiket</a>
                    </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Merchandise</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('show-merch') }}">Daftar Pembeli Merchendise</a>
                        <a class="dropdown-item" href="{{ url('input-merch') }}">Beli Merchandise</a>
                    </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Meet n Greet</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('show-meet') }}">Peserta Meet n Greet</a>
                        <a class="dropdown-item" href="{{ url('input-meet') }}">Ikut Meet n Greet</a>
                    </div>
            </li>
        </ul>
    <li>
        <div class="small fw-bold, text-light">
            <button type="button" class="btn btn-outline-light, rounded-pill" disabled>{{auth()->user()->name}}</button>
        </div>
    </li>
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        id="navbarDropdown" 
        ref="#" 
        data-bs-toggle="dropdown"
        role="button"
        aria-expanded="false"
        >
          <img
            src="https://cdn-icons-png.flaticon.com/512/4322/4322991.png"
            class="rounded-circle"
            height="30"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('pengaturan') }}">Settings</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
    </li>
  </div>
</nav>
<!-- Navbar -->
<!-- Content -->
            <main class="d-flex justify-content-center align-items-center h-100 sb-nav-fixed">
                <div class="container mb-5">
                    <div class="card">
                        <div class="card-header text-center font-weight-bold">
                            Input Data Pembelian Tiket Konser
                        </div>
                        <div class="card-body">
                            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('kirim-tiket')}}">
                            @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="notelp">No Telepon</label>
                                    <input type="number" id="notelp" name="notelp" class="form-control @error('notelp') is-invalid @enderror"  value="{{ old('notelp') }}">
                                    @error('notelp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group w-50">
                                    <label for="jadwal" class="mb-2 mt-3">Jadwal Konser</label>
                                    <input type="date" id="jadwal" name="jadwal" class="form-control @error('jadwal') is-invalid @enderror"  value="{{ old('jadwal') }}">
                                    @error('jadwal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="fandom">Fandom</label>
                                    <input type="text" id="fandom" name="fandom" class="form-control @error('fandom') is-invalid @enderror"  value="{{ old('fandom') }}">
                                    @error('fandom')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jenistiket">Jenis Tiket</label>
                                    <select type="text" id="jenistiket" name="jenistiket" class="form-control @error('jenistiket') is-invalid @enderror"  value="{{ old('jenistiket') }}">
                                        <option value="VIP">VIP - 2.500.000</option>
                                        <option value="Festival">Festival - 2.000.000</option>
                                        <option value="Tribune">Tribune - 1.800.000</option>
                                    </select>
                                    @error('jenistiket')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
<!-- Content -->
<!-- Footer -->
<footer class="bg-dark text-center text-white position-absolute bottom-0 end-o w-100">
                <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/yuji" role="button">
                        <i class="fab fa-facebook-f"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ghaachan/" role="button">
                        <i class="fab fa-instagram"></i></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/ulyaghani" role="button">
                        <i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2022 Copyright: Ulya Ghani - G.231.21.0103
            </div>
            <!-- Copyright -->
        </footer>
<!-- Footer -->
        </div>
    </div>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
