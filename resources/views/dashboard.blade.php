<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b0cef64d70.js" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" />
        <title>Dashboard Project Akhir Pemrograman Framework</title>
        <style>
            .background{
                font-family: 'Poppins', sans-serif;
	            font-weight: 300;
	            font-size: 15px;
	            line-height: 1.7;
	            color: #c4c3ca;
                margin: 0;
                padding: 0;
	            background: url(https://images.unsplash.com/photo-1487954335942-047e6d1551ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) no-repeat;
                background-size: cover;
                height: 50%;
                background-repeat: no-repeat;
                background-position: center;
	            overflow-x: hidden;
            }
        </style>
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
  <!-- Header -->
  <div class="background">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1>SELAMAT DATANG DI PORTAL KPOP</h1>
        </div>
      </div>
  </div>
  <!-- Header-->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 align-center">HOME</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active align-center">PRESENTASE DATA</li>
                        </ol>
                        <div class="row">
                            <div class="col-7">
                                <div class="card mb-5">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Jumlah Pembeli Tiket
                                    </div>
                                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-5">
                            <div class="card mb-5" style="max-width: 540px;">
                                <div class="card border-left-primary shadow h-10 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                        <div class="col-md-4 object-cover w-10">
                                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="img-fluid rounded-start" alt="...">
                                        </div>
                                            <div class="col mr-2">
                                                <div class="text-xs text-center fw-bold text-uppercase mb-2 ">
                                                    Jumlah Pembeli Tiket</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center ">{{ $jumlah_tiket }}</div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="card border-left-success shadow h-10 py-2">
                                    <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-4 object-cover w-10">
                                        <img src="https://i.pinimg.com/564x/64/e2/a1/64e2a1927a6daa7c07729e88a917944d.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                            <div class="col mr-2">
                                                <div class="text-xs text-center fw-bold text-uppercase mb-2">
                                                    Jumlah Fans Meet n Greet</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $jumlah_meet }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-left-success shadow h-10 py-2">
                                    <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-4 object-cover w-10">
                                        <img src="https://i.pinimg.com/736x/0f/ea/54/0fea547e2d3dbce0ad889e8fe435dbda.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                            <div class="col mr-2">
                                                <div class="text-xs text-center fw-bold text-uppercase mb-2">
                                                    Total Pembelian Merchandise</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $jumlah_merch }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
                <!-- content -->
                <!-- footer -->
                <footer class="bg-dark text-center text-white">
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
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';
            // Area Chart Example
            var ctx = document.getElementById("myAreaChart");
            var _ydata=JSON.parse('{!! json_encode($jenistikets) !!}');
            var _xdata=JSON.parse('{!! json_encode($jenistiketCount) !!}');
            var myLineChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: _ydata,
                    datasets: [{
                    label: "Jumlah ",
                    lineTension: 0.3,
                    backgroundColor: "#dc3545",
                    borderColor: "rgba(133,78,74,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(133,78,74,1)",
                    pointBorderColor: "#d63384",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#0dcaf0",
                    pointHitRadius: 50,
                    pointBorderWidth: 2,
                    data: _xdata,
                    }],
                },
                options: {
                scales: {
                xAxes: [{
                    // time: {
                    //   unit: 'date'
                    // },
                    gridLines: {
                    display: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    min: 0,
                    max: {{ $jumlah_tiket }},
                    maxTicksLimit: 5
                    },
                    gridLines: {
                    color: "#fd7e14",
                    }
                }],
                },
                legend: {
                display: false
                }
            }
            });

        </script>

    </body>
</html>
