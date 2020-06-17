<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table COVID19</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ ('style/assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

  <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
              <img class="navbar-brand" src="{{ asset('style/images/e.png') }}" style="width:150px; height:20px; padding:10px" ></img>
                <a class="navbar-brand hidden" href="./"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/home') }}"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <li>
                        <a href="{{ url('/tugas') }}"> <i class="menu-icon fa fa-fort-awesome"></i>Indonesia </a>
                    </li>
                    <li>
                        <a href="{{ url('/dunia')}}"> <i class="menu-icon fa fa-globe"></i>Dunia </a>
                    </li>

                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">


        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">Ada pesan nih</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Es teh manis satu</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Sop kikil tiga</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Nasi anjing tujuh</p>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="" style="width:50px;" src="{{ asset('style/images/corona.png') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                                <a class="nav-link" href="{{ url('/biodata') }}"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <img src="{{ asset('style/images/globe.png') }}" style="width:30px;"></img>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Mengenal corona virus</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
              <img src="{{ asset('style/images/corong.png') }}" style="width:500px; margin-left:250px; "><br><br><br>
              <p>
                <b style="font-size:20px;">Apa itu virus Corona dan penyakit COVID-19?</b>
                <br>
                Virus Corona merupakan suatu kelompok virus yang dapat menyebabkan beberapa penyakit dari flu hingga penyakit yang berat seperti Middle East Respiratory Syndrome (MERS-CoV) dan Severe Acute Respiratory Syndrome (SARS-CoV).
                Saat ini ditemukan spesies baru yang beredar, disebut sebagai Novel Coronavirus (n-CoV). Penyakit yang disebabkan oleh n-COV ini disebut COVID-19 (Coronavirus Disease 2019).
                <br><br>
                <b style="font-size:20px;">Apa saja gejala COVID-19?</b>
                <br>
                Gejala biasanya diawali dengan demam, batuk, dan sesak napas. Pada kasus yang lebih berat, infeksi dapat menyebabkan gagal napas, gagal ginjal, hingga kematian.
                <br><br>
                <b style="font-size:20px;">Seberapa bahaya penyakit ini?</b>
                <br>
                Tingkat keparahan penyakit ini masih belum dapat dipastikan karena gejalanya beragam pada setiap orang. Hingga artikel ini ditulis angka kematian berkisar di 2-5%.
                <br><br>
                <b style="font-size:20px;">Apa yang dapat dilakukan untuk menghindari risiko tertular?</b>
                <br>
                Pencegahan terpenting adalah mencuci tangan dengan rutin, yaitu: setelah batuk atau bersin, sebelum dan sesudah makan, setelah ke toilet, setelah merawat orang sakit, dan saat tangan terasa kotor. Selain itu, jaga jarak setidaknya 1 meter dengan orang sekitar dan gunakan masker jika perlu.
                <br><br>
                <b style="font-size:20px;">Seberapa perlu menggunakan masker?</b>
                <br>
                Data WHO mengatakan bahwa masker dapat membatasi penyebaran virus. Penggunaan masker diutamakan jika Anda menunjukkan gejala gangguan pernapasan (batuk dan atau pilek), dicurigai terinfeksi, atau sedang merawat seseorang yang sedang atau dicurigai positif COVID-19.
                <br><br>
                <b style="font-size:20px;">Apakah sudah ada obatnya?</b>
                <br>
                Saat ini, vaksin virus Corona dan pengobatan penyakit COVID-19 masih dalam penelitian, sehingga tatalaksana yang diberikan kepada pasien bersifat suportif seperti penurun demam dan alat bantu napas jika diperlukan.
                <br><br>
                <b style="font-size:20px;">Jika mengalami gejala serupa, apa yang sebaiknya dilakukan?</b>
                <br>
                Lakukan jaga jarak aman dan ikuti alur deteksi COVID-19. Anda sangat disarankan melakukan isolasi mandiri selama 7-14 hari sebelum memeriksakan diri ke fasilitas layanan kesehatan (fasyankes). Kapasitas fasilitas dan tenaga medis sudah mulai mendekati ambang batas sehingga penting bagi kita semua untuk bekerja sama memastikan kapasitas tersebut tidak melalui ambang batas aman sehingga pasien dengan kondisi kritis yang memerlukan penanganan dan perawatan segera dapat mendapat penanganan yang efektif.
                <br><br>
              </p>
</body>
</html>
