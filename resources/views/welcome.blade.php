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
                    <li class="nav-item"><a class="nav-link me-lg-3 text-black" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 text-black" href="#basis-pengetahuan">Basis
                            Pengetahuan</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 text-black" href="#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 text-black" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header id="home" class="masthead"
        style="background-image: url('{{ asset('assets/img/hero.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; position: relative;  filter: brightness(60%);">
    </header>

    <div class="container px-5"
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; z-index: 1;">
        <h3 class="display-3 mb-4" style="text-shadow: 2px 2px 4px #000; color: white;">SISTEM PAKAR DETEKSI DINI
            PENYAKIT PADA TANAMAN PADI</h3>
        <p class="mb-3" style="font-size: 3vh; text-shadow: 2px 2px 4px #000; color: white;">Sistem Pakar Yang
            Dapat Mendiagnosa Penyakit Pada Tanaman Padi Anda</p>
        <button class="btn btn-success mt-4 text-white"
            style=" border-radius: 15px; width: auto; height: 40px; font-size: 3vh"
            onclick="window.location='{{ route('login') }}';">Diagnosa sekarang!</button>
    </div>

    <div class="bg-gradient-primary-to-secondary" id="basis-pengetahuan">
        <div class="py-5">
            <h2 class="text-center text-white font-alt mb-4">Basis Pengetahuan</h2>
        </div>
    </div>
    <section id="basis-pengetahuan" class="py-5 bg-white">
        <div class="container">
            <div class="row gap-4 justify-content-around">
                <div class="col-lg-5 col-md-4 d-flex mb-2">
                    <x-card-penyakit id="card-1" title="Hawar daun bakteri"
                        description="  Hawar daun bakteri (HDB) merupakan penyakit
                    bakteri yang tersebar luas dan menurunkan hasil sampai 36%. Penyakit terjadi
                    pada musim hujan atau musim kemarau yang basah, terutama pada lahan sawah
                    yang selalu tergenang, dan dipupuk N tinggi (> 250 kg urea /ha)."
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                    <p>Penyakit HDB secara efektif dikendalikan dengan varietas tahan; pemupukan
                    lengkap; dan pengaturan air. Untuk daerah-daerah
                    yang endemis penyakit HDB, tanam varietas tahan seperti Code dan Angke dan
                    gunakan pupuk NPK dalam dosis yang tepat. Bila memungkinkan, hindari
                    penggenangan yang terus-menerus, mis. 1 hari digenangi dan 3 hari
                    dikeringkan</p>" />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-2" title="
                    Bakteri daun bergaris"
                        description="Infeksi penyakit ini biasanya terbatas pada helaian daun saja. Gejala yang timbul berupa bercak sempit berwarna hijau gelap yang lama-kelamaan membesar berwarna kuning dan tembus cahaya di antara pembuluh daun. Sejalan dengan berkembangnnya penyakit, bercak membesar, berubah menjadi berwarna coklat, dan berkembang menyamping melampaui pembuluh daun yang besar. Seluruh daun varietas yang rentan bisa berubah warna menjadi coklat dan mati. Pada keadaan ideal untuk infeksi, seluruh pertanaman menjadi berwarna oranye kekuning-kuningan.
                    Bakteri memasuki tanaman melalui kerusakan mekanik atau melalui terbukanya sel secara alami. Butir-butiran embun yang mengandung bakteri akan muncul pada permukaan daun. Hujan dan angin membantu penyebaran penyakit ini.
                    Stadia tanaman yang paling rentan adalah dari fase anakan sampai stadia pematangan. Pada infeksi yang berat, kehilangan hasil dapat mencapai 30%"
                        solutions="<h4 class='font-alt'>Cara Pengendalian : </h4>
                        <ul>
                        <li> Buang atau hancurkan tunggul-tunggul dan jerami-jerami yang terinfeksi/sakit</li>
                        <li>Pastikan jerami dari tanaman sakit sudah terdekomposisi sempurna sebelum tanam pindah.</li>
                        <li>Gunakan benih atau bibit yang bebas dari penyakit bakteri daun bergaris</li>
                        <li>Gunakan pupuk nitrogen sesuai anjuran</li>
                        <li>Atur jarak tanam tidak terlalu rapat</li>
                        <li>Berakan tanah sesudah panen</li>
                    </ul>
                        " />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-3" title="Blas"
                        description=" Semula penyakit blas dikenal sebagai salah satu kendala utama pada padi gogo, tetapi sejak akhir
                        1980-an, penyakit ini juga sudah terdapat pada padi sawah beirigasi. Penyakit yang mampu menurunkan hasil yang sangat besar ini disebabkan oleh jamur pathogen Pyricularia grisae."
                        solutions="<h4 class='font-alt'> Cara Pengendalian : </h4>
                        <p>Penyakit ini dikendalikan melalui penanaman varietas tahan secara bergantian untuk mengantisipasi perubahan ras blas yang sangat cepat dan pemupukan NPK yang tepat. Penanaman dalam waktu yang tepat serta perlakuan benih dapat pula diupayakan. Bila diperlukan pakai fungisida yag berbahan aktif metil tiofanat, fosdifen, atau
                        kasugamisin.</p>" />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-4" title="Hawar Pelepah"
                        description="Hawar pelepah, merupakan penyakit penting pada tanaman padi. Penyakit ini merusak pelepah, sehingga untuk menemukan dan mengenali penyakit, perlu dibuka kanopi pertanaman. Penyakit menyebabkan tanaman menjadi mudah rebah, makin awal terjadi kerebahan, makin besar kehilangan yang diakibatkannya. Penyakit ini menyebabkan gabah kurang terisi penuh atau
                        bahkan hampa. Hawar pelepah terjadi umumnya saat tanaman mulai membentuk anakan sampai menjelang panen. Namun demikian, penyakit ini juga dapat terjadi pada tanaman muda.
                        Cara Pengendalian : Penyakit ini sangat sulit dikendalikan karena pathogen bersifat poliphag (memiliki kisaran inang yang sangat luas). Pemupukan tanaman dengan dosis 250 kg urea, 100 kg SP36, dan 100 kg KCl per ha dapat menekan perkembangan penyakit ini.
                        "
                        solutions="<h4 class='font-alt'>Cara pencegahan penyakit antara lain:</h4>
                        <ul>
                            <li>atur pertanaman di lapang agar jangan terlalu rapat</li>
                        <li>keringkan sawah beberapa hari pada saat anakan maksimum</li>
                        <li>⁠bajak yang dalam untuk mengubur sisa-sisa tanaman yang terinfeksi</li>
                        <li>rotasi tanaman dengan kacang-kacangan untuk menurunkan serangan penyakit</li>
                        <li>buang gulma dan tanaman yang sakit dari sawah</li>
                        <li>gunakan fungisida (bila diperlukan) antara lain yang berbahan aktif: heksakonazol, karbendazim, tebukanazol, belerang, flutalonil, difenokonazol, propikonazol, atau validamisin A.</li>
                        </ul>" />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-5" title="Busuk Batang"
                        description="Busuk batang merupakan penyakit yang menginfeksi bagian tanaman dalam kanopi dan menyebabkan tanaman menjadi mudah rebah.
                        Untuk mengamati penyakit ini, kanopi pertanaman perlu dibuka. Perlu diwaspadai apabila terjadi kerebahan pada pertanaman, tanpa sebelumnya terjadi hujan atau hujan dengan angin yang kencang."
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                        <p>Pemupukan tanaman dengan dosis 250 kg urea,
                        100 kg SP36, dan 100 kg KCI per ha dapat menekan perkembangan penyakit. Untuk mengurangi penyebaran lebih luas lagi, keringkan tanaman sampai saat panen tiba. Cara pencegahan penyakit ini antara lain adalah :</p>
                        <ul>
                        <li>tunggul-tunggul padi sesudah panen dibakar atau didekomposisi</li>
                        <li>keringkan petakan dan biarkan tanah sampai retak sebelum diari lagi</li>
                        <li>⁠gunakan pemupukan berimbang; pupuk nitrogen sesuai anjuran dan pemupukan K cenderung dapat menurunkan infeksi penyakit</li>
                        <li>gunakan fungisida (bila diperlukan) yang berbahan aktif belerang atau difenokonazol.</li>
                        </ul>" />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-6" title="Busuk Pelepah"
                        description="Infeksi terjadi pada pelepah daun paling atas yang menutupi malai muda pada akhir fase bunting.
                        Gejala awal adalah adanya noda berbentuk bulat memanjang hingga tidak teratur dengan panjang 0,5
                        - 1,5 cm, warna abu-abu di tengahnya dan coklat atau coklat abu-abu di pinggirnya. Bercak membesar, sering bersambung, dan bisa menutupi seluruh pelepah daun. Infeksi berat menyebabkan
                        malai hanya muncul sebagian (tidak berkembang) dan mengerut. Malai yang muncul sebagian hanya dapat menghasilkan sedikit bulir yang berisi. Stadia tanaman yang paling rentan adalah saat keluar malai sampai matang susu.
                        "
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                        <p>Busuk pelepah dapat dikendalikan dengan cara:</p>
                        <ul>
                        <li>Bakar tunggul segera sesudah panen untuk mengurangi inokulum</li>
                        <li>Atur jarak tanam agar tidak terlalu rapat</li>
                        <li>Beri pupuk K pada fase anakan</li>
                        <li>Penyemprotan fungisida pada daun hanya dilakukan bila diperlukan yaitu pada fase bunting dan perlakuan benih dengan fungisida yang berbahan aktif karbendazim atau mankozeb untuk mengurangi infeksi penyakit</li>
                        <li>Penyemprotan dengan fungisida (bila diperlukan) yang berbahan aktif benomil juga efektif menekan infeksi penyakit</li>
                        </ul>" />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-7" title="Bercak Coklat"
                        description="Penyakit bercak coklat disebabkan oleh
                    jamur Helmintosporium oryzae pada pertanaman.
                    Bercak coklat dapat menyebabkan kematian
                    tanaman muda dan menurunkan kualitas gabah.
                    Seperti penyakit bercak cercospora, penyakit ini merusak sekali pada pertanaman padi di lahan dengan sistem drainase buruk atau lahan yang kahat unsur hara, terutama yang unsur kalium. Penyakit jarang sekali terjadi di lahan subur.
                    "
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                        <p>Penyakit dapat dikendalikan secara efektif dengan varietas tahan dan melalui pemupukan dengan 250 kg urea, 100 kg SP36, dan 100 kg KCI.</p>
                        " />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-8" title="Bercak Cercospora"
                        description="Bercak cercospora disebabkan oleh jamur
                        Cercospora oryzae. Penyakit menyebabkan
                        kerusakan yang serius pada pertanaman di lahan yang kurang subur.
                        "
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                        <p>Penyakit dikendalikan dengan pemupukan berimbang yang lengkap, dengan dosis 250 kg urea,
                        100 kg SP36, dan 100 kg KCl per ha.</p>
                        " />
                </div>

                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-10" title="Tungro"
                        description="Tungro merupakan salah satu penyakit penting pada padi sangat merusak dan tersebar luas. Di Indonesia, semula penyakit ini hanya terbatas di Sulawesi Selatan, tetapi sejak awal tahun 1980-an menyebar ke Bali, Jawa Timur, dan sekarang sudah menyebar ke hampir seluruh wilayah Indonesia. Bergantung pada saat tanaman
                        terinfeksi, tungro dapat menyebabkan kehilangan hasil 5-70%. Makin awal tanaman terinfeksi tungro, makin besar kehilangan hasil yang ditimbulkannya.
                        "
                        solutions="<h4 class='font-alt'>Cara pengendalian :</h4>
                        <p>Dapat dikendalikan melalui pergiliran varietas tahan yang memiliki tetua berbeda, pengaturan
                            waktu tanam, sanitasi dengan menghilangkan sumber tanaman sakit, dan penekanan populasi
                            wereng hijau dengan insektisida. Beberapa varietas tahan tugro antara lain Tukad Petanu,
                            Tukad Unda, Tukad Balian, Kalimas, dan Bondoyudo. Beberapa cara yang juga dapat dilakukan
                            adalah:</p>
                        <ul>
                            <li>Mengatur waktu tanam serempak minimal 20 ha luasan sawah;</li>
                            <li>Menanam bibit pada saat yang tepat, yaitu dengan menanam bibit sebulan sebelum puncak
                                kepadatan wereng hijau tercapai;</li>
                            <li>Menanam dengan cara jajar legowo;</li>
                            <li>Pada saat tanaman umur 2-3 minggu setelah tanam bila dijumpai 2 tanaman bergejala lebih
                                dari 10 rumpun segera aplikasikan insektisida yang efektif mematikan wereng hijau; dan
                            </li>
                            <li>Sawah jangan dikeringkan, biarkan kondisi air pada kapasitas lapang agar wereng hijau
                                tidak aktif berpencar menyebarkan tungro.</li>
                        </ul>
                        " />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-11" title="Kerdil Rumput"
                        description="Tanaman yang terinfeksi berat akan menjadi kerdil dengan anakan yang berlebihan, sehingga tampak seperti rumput. Daun tanaman padi menjadi sempit, pendek, kaku, berwarna hijau pucat sampai hijau, dan kadang-kadang terdapat bercak karat. Tanaman yang terinfeksi biasanya dapat hidup sampai fase pemasakan tetapi tidak memproduksi malai.
                        Stadia pertumbuhan tanaman yang paling rentan adalah pada saat tanam pindah sampai bunting. Penyakit ini disebabkan oleh virus yang ditularkan oleh wereng coklat, dan tanaman inangnya hanya padi.
                        "
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                        <p> Pengendalian dilakukan terhadap vektornya yaitu wereng Nilaparvata lunges
                        </p>" />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-12" title="Kerdil Hampa"
                        description="Kerdil hampa disebabkan oleh virus yang ditularkan oleh wereng coklat. Penyakit ini menghasilkan beberapa gejala malformasi pada daun seperti daun bergerigi (ragged) dan melintir (twisting). Daun tanaman sakit berwarna hijau tua. Malai dari tanaman yang sakit hanya keluar sebagian dan gabah yang dihasilkan hampa."
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                        <p>Penyakit dikendalikan melalui pengendalian
                        wereng coklat antara lain dengan penanaman
                        varietas tahan.</p>" />
                </div>
                <div class="col-lg-5 col-md-4 d-flex">
                    <x-card-penyakit id="card-9" title="Hawar daun jingga"
                        description="Red stripe (RS) atau hawar daung jingga (HDJ), merupakan penyakit padi yang relatif baru yang pertama kali ditemukan di Subang, Jawa Barat tanun
                        1987. Penyakit ini umumnya terjadi pada daun, di lahan sawah dengan kondisi drainase buruk, dan pada tanaman yang telah mencapai fase tumbuh generatif. HDJ berkorelasi negatif dengan tinggi tempat karena semakin tinggi tempat, penyakit semakin ringan. Penyakit ini menyebabkan gabah tidak terisi penuh atau bahkan hampa. Sampai saat ini, penyebab penyakit belum diidentifikasi secara pasti."
                        solutions="<h4 class='font-alt'>Cara Pengendalian :</h4>
                       <p> Hawar daun jingga dikendalikan secara kultur teknis. Pemberian pupuk Idengan dosis 250 kg urea, 100 kg SP36, dan 100 kg KCI per ha dapat menekan perkembangan penyakit.
                        Penyakit juga dapat ditekan dengan mengeringkan lahan dan membuka kanopi pertanaman, untuk mengurangi kelembaban dan memperbaiki sirkulasi
                        udara dalam kanopi.</p>" />
                </div>
            </div>
        </div>
    </section>


    <div class="bg-gradient-primary-to-secondary" id="about-us">
        <div class="py-5">
            <h2 class="text-center text-white font-alt mb-4">About Us</h2>
        </div>
    </div>

    <section id="about-us">
        <div class="container px-5">
            <div class="align-items-center">
                <div class="order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5 mt-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-clipboard-data icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Data Penyakit</h3>
                                    <p class="text-muted mb-0">Database untuk mendiagnosa penyakit pada tanaman padi
                                    </p>
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
