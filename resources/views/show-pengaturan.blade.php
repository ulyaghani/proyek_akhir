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
    <title>Data Mahasiswa</title>
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
                {{-- {{ $errors->error->isNotEmpty() }} --}}
                <div class="container mt-5">
                    @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('status-error'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    {{ session('status-error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @error('password')
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header text-center">Ganti Password</div>
                                <form action="{{ url('update-password') }}" method="POST">
                                    @csrf
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label for="oldPasswordInput" class="form-label">Password Lama</label>
                                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                                placeholder="Password Lama">
                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="newPasswordInput" class="form-label">Password Baru</label>
                                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                                placeholder="Password Baru">
                                            @error('new_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmNewPasswordInput" class="form-label">Konfirmasi Password</label>
                                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                                placeholder="Konfirmasi Password">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Ganti</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-5 mb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header text-center">Hapus Akun</div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-danger w-75 " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Hapus</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('delete') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Password</label>
                                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="recipient-name">
                                    </div>
                                    <div class="modal-footer">
                                        <button  class="btn btn-danger">Hapus Akun</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
    const exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    // const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    // const modalTitle = exampleModal.querySelector('.modal-title')
    // const modalBodyInput = exampleModal.querySelector('.modal-body input')
    modalTitle.textContent = `Masukan Password Anda ${recipient}`
    // modalBodyInput.value = recipient
})
    </script>
</body>
</html>
