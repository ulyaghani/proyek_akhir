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
    <link href="css/styles.css" rel="stylesheet" /><title>Halaman Edit Pembelian Tiket/title </title>
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
                Edit Data Pembelian Tiket
            </div>
            <div class="card-body">
                <form name="update-data-tiket" id="update-data-tiket" method="post" action="{{url('update-tiket')}}/{{ $post->id}}">
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
                    <div class="form-group">
                        <label for="notelp">No Telpon</label>
                        <input type="number" id="notelp" name="notelp" class=" form-control @error('notelp') is-invalid @enderror""  value="{{ $post->notelp }}">
                        @error('notelp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jadwal">Jadwal Konser</label>
                        <input type="date" id="jadwal" name="jadwal" class="form-control @error('jadwal') is-invalid @enderror""  value="{{ $post->jadwal }}">
                        @error('jadwal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fandom">Fandom</label>
                        <input type="text" id="fandom" name="fandom" class="form-control @error('fandom') is-invalid @enderror""  value="{{ $post->fandom }}">
                        @error('fandom')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="jenistiket">Jenis Tiket</label>
                        <select name="jenistiket" class="form-control @error('jenistiket') is-invalid @enderror" >{{ $post->jenistiket }}>
                            {{-- <option value="{{ $post->jenistiket }}">{{ $post->jenistiket}}</option> --}}
                            <option @php
                                $jenistiket= $post->jenistiket;
                            @endphp
                            @if ($jenistiket == 'VIP')
                                {{ 'selected' }}
                            @endif value="VIP">VIP - 2.500.000</option>
                            <option @php
                                $jenistiket= $post->jenistiket;
                            @endphp
                            @if ($jenistiket == 'Festival')
                                {{ 'selected' }}
                            @endif value="Festival">Festival - 2.000.000</option>
                            <option @php
                                $jenistiket= $post->jenistiket;
                            @endphp
                            @if ($jenistiket == 'Tribune')
                                {{ 'selected' }}
                            @endif value="Tribune">Tribune - 1.800.000</option>
                        </select>
                        @error('jenistiket')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a class="btn btn-danger mt-2" href="{{ url('show-tiket') }}">Batal</a>
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
