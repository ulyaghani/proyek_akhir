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
    <title>Halaman Edit Merchandise</title >
</head>
<body>
    <nav class="text-center text-white navbar navbar-expand-lg navbar-dark bg-dark position-fixed w-100 top-0">
        <div class="container-fluid">
            <h2> HALAMAN EDIT </h2>
        </div>
    </nav>

    <div class="container mt-4 d-flex justify-content-center align-items-center h-75 w-100 sb-nav-fixed mt-5">
        <div class="card mt-5">
            <div class="card-header text-center font-weight-bold">
                Edit Data Pembelian Merchandise
            </div>
            <div class="card-body">
                <form name="update-data-merch" id="update-data-merch" method="post" action="{{url('update-merch')}}/{{ $post->id}}">
                @csrf
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror""  value="{{ $post->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="ukurankaos">Ukuran Kaos</label>
                        <select name="ukurankaos" class="form-control @error('ukurankaos') is-invalid @enderror" >{{ $post->ukurankaos }}>
                            {{-- <option value="{{ $post->ukurankaos }}">{{ $post->ukurankaos}}</option> --}}
                            <option @php
                                $ukurankaos= $post->ukurankaos;
                            @endphp
                            @if ($ukurankaos == 'S')
                                {{ 'selected' }}
                            @endif value="S">S</option>
                            <option @php
                                $ukurankaos= $post->ukurankaos;
                            @endphp
                            @if ($ukurankaos == 'M')
                                {{ 'selected' }}
                            @endif value="M">M</option>
                            <option @php
                                $ukurankaos= $post->ukurankaos;
                            @endphp
                            @if ($ukurankaos == 'L')
                                {{ 'selected' }}
                            @endif value="L">L</option>
                            <option @php
                                $ukurankaos= $post->ukurankaos;
                            @endphp
                            @if ($ukurankaos == 'XL')
                                {{ 'selected' }}
                            @endif value="XL">XL</option>
                        </select>
                        @error('ukurankaos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lightstick" class="mb-2 mt-1">Lightstick</label>
                        <input type="text" id="lightstick" name="lightstick" class="form-control @error('lightstick') is-invalid @enderror""  value="{{ $post->lightstick }}">
                        @error('lightstick')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="photocard">Photocard <i>( 1 member saja / akan dikirim random )</i></label>
                        <input type="text" id="photocard" name="photocard" class="form-control @error('photocard') is-invalid @enderror""  value="{{ $post->photocard }}">
                        @error('photocard')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="accessories">Accessories</label>
                        <select name="accessories" class="form-control @error('accessories') is-invalid @enderror" >{{ $post->accessories}}>
                            {{-- <option value="{{ $post->accessories }}">{{ $post->accessories}}</option> --}}
                            <option @php
                                $accessories= $post->accessories;
                            @endphp
                            @if ($accessories == 'Kipas')
                                {{ 'selected' }}
                            @endif value="Kipas">Kipas</option>
                            <option @php
                                $accessories= $post->accessories;
                            @endphp
                            @if ($accessories == 'Topi')
                                {{ 'selected' }}
                            @endif value="Topi">Topi</option>
                            <option @php
                                $accessories= $post->accessories;
                            @endphp
                            @if ($accessories == 'Ganci')
                                {{ 'selected' }}
                            @endif value="Ganci">Ganci</option>
                        </select>
                        @error('accessories')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a class="btn btn-danger mt-2" href="{{ url('show-meet') }}">Batal</a>
                </form>
            </div>
        </div>
        </div>
        <!-- content -->
        <!-- footer -->
        <footer class="bg-dark text-center text-white position-fixed bottom-0 end-o w-100">
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
        <!-- footer -->
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
