<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SISTEM PAKAR</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dist/img/logo/logo.png') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="home">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#home">SISTEM PAKAR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header id="home" class="masthead"
        style="background-image: url('{{ asset('assets/img/hero.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div>
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-center text-white">
                        <h3 class="display-3 mb-4">SISTEM PAKAR DETEKSI DINI PENYAKIT PADA TANAMAN PADI</h3>
                        <p class="mb-3" style="font-size: 3vh">Sistem Pakar Yang Dapat Mendiagnosa Penyakit Pada
                            Tanaman Padi Anda
                        </p>
                        <button class="btn btn-outline-light" style="color: white; border-radius: 15px;"
                            onmouseover="this.style.color='#00ff73';" onmouseout="this.style.color='white';"
                            onclick="window.location='{{ route('login') }}';">Diagnosa sekarang!</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about-us">
        <div class="container px-5">
            <div class="align-items-center">
                <div class="order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5 ">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-clipboard-data icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Data Penyakit</h3>
                                    <p class="text-muted mb-0">Database untuk mendiagnosa penyakit pada tanaman padi</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-search icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Diagnosa Penyakit</h3>
                                    <p class="text-muted mb-0">Diagnosa penyakit pada tanaman padi layaknya pakar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Thanks for using our app!</h2>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
