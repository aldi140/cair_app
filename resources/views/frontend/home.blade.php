@extends('frontend.layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-soft-primary" id="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active hero-3-bg bg-item-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 order-md-2 order-1 mb-5 mb-lg-0">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/hero-img.svg') }}" alt="" class="img-hero">
                                </div>
                            </div>
                            <div class="col-md-6 order-md-1 order-2">
                                <div class="text-start">
                                    <h4 class="hero-3-title text-dark line-height-1_4">Proses Approve Tanpa Survey</h4>
                                    <p class="text-muted mb-4 pb-3">nda akan memperoleh kemudahan dalam menyelesaikan
                                        masalah finansial. Pengajuan gadai sangat cepat dan tanpa survey</p>
                                    <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">Ajukan Sekarang <span
                                            class="ms-2 right-icon">&#8594;</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item hero-3-bg bg-item-2 ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 order-md-2 order-1 mb-5 mb-lg-0">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/hero-img5.svg') }}" alt="" class="img-hero">
                                </div>
                            </div>
                            <div class="col-md-6 order-md-1 order-2">
                                <div class="text-start">
                                    <h4 class="hero-3-title text-dark line-height-1_4">Dana Cair Hingga 90%</h4>
                                    <p class="text-muted mb-4 pb-3">Pencairan Pinjaman Gadai BPKB sangat tinggi. Mencapai
                                        hingga 90% dari estimasi harga kendaraan</p>
                                    <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">Ajukan Sekarang <span
                                            class="ms-2 right-icon">&#8594;</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item hero-3-bg bg-item-3 ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 order-md-2 order-1 mb-5 mb-lg-0">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/hero-img2.svg') }}" alt="" class="img-hero">
                                </div>
                            </div>
                            <div class="col-md-6 order-md-1 order-2">
                                <div class="text-start">
                                    <h4 class="hero-3-title text-dark line-height-1_4">Nikmati Bunga 0,7%</h4>
                                    <p class="text-muted mb-4 pb-3">Bunga yang ditawarkan sangat menarik dan kompetitif.
                                        Cocok bagi anda pengajuan corporate / perusahaan</p>
                                    <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">Ajukan Sekarang <span
                                            class="ms-2 right-icon">&#8594;</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </section>

    <!-- Hero End -->

    <!-- About us Start -->
    <section class="section" id="kelebihan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2 data-aos="fade-left">Gadai Aset Anda dengan Aman dan Terpercaya!</h2>
                        <P class="text-muted" data-aos="fade-down">Gadai aset berharga Anda dengan cepat dan mudah! Nikmati
                            layanan aman dan
                            terpercaya untuk kendaraan, properti, atau sertifikasi.</P>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2 data-aos="fade-in">Kenapa Memilih Kami?</h2>
                        <P class="text-muted">Pilihan utama untuk kualitas dan layanan terbaik. Percayakan kebutuhan Anda
                            pada kami.</P>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card service-box text-center p-4" data-aos="fade-up">
                        <div class="service-icon-bg mx-auto avatar-xxl p-4"
                            style="background-image: url(images/service-icon-bg.png)">
                            <div class="service-box-icon justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 16 16">

                                    <defs>
                                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%"
                                            y2="0%">
                                            <stop offset="0%" style="stop-color:#1e40d5;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#657be5;stop-opacity:1" />
                                        </linearGradient>




                                    </defs>
                                    <path fill="url(#grad1)"
                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                </svg>


                            </div>
                        </div>
                        <h4 class="service-title  mb-3 f-18">Terpercaya dan Transparan</h4>
                        <p class="service-subtitle mb-4 f-13">Dapatkan informasi yang jelas dan lengkap dalam setiap
                            transaksi dengan kami.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card service-box text-center p-4" data-aos="fade-up" data-aos-duration="500">
                        <div class="service-icon-bg mx-auto avatar-xxl p-4"
                            style="background-image: url(images/service-icon-bg.png)">
                            <div class="service-box-icon justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                    viewBox="0 0 16 16">
                                    <!-- Definisikan Gradien -->
                                    <defs>
                                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%"
                                            y2="0%">
                                            <stop offset="0%" style="stop-color:#1e40d5;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#657be5;stop-opacity:1" />
                                        </linearGradient>

                                        <!-- Gradien Hover -->
                                        <linearGradient id="grad1-hover" x1="0%" y1="0%" x2="100%"
                                            y2="0%">
                                            <stop offset="0%" style="stop-color:#5a77f7;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#5a77f7;stop-opacity:1" />
                                        </linearGradient>


                                    </defs>

                                    <!-- Terapkan Gradien dan Bayangan ke Elemen -->
                                    <path fill="url(#grad1)"
                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584l.013-.012.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354-.012.012A6.97 6.97 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0" />
                                </svg>
                            </div>
                        </div>
                        <h4 class="service-title  mb-3 f-18">Proses Cepat dan Mudah</h4>
                        <p class="service-subtitle mb-4 f-13">Prosedur sederhana, proses cepat. Dapatkan dana dengan mudah.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card service-box text-center p-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-icon-bg mx-auto avatar-xxl p-4"
                            style="background-image: url(images/service-icon-bg.png)">
                            <div class="service-box-icon justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                    viewBox="0 0 16 16">
                                    <defs>
                                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%"
                                            y2="0%">
                                            <stop offset="0%" style="stop-color:#1e40d5;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#657be5;stop-opacity:1" />
                                        </linearGradient>




                                    </defs>
                                    <path fill="url(#grad1)"
                                        d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path fill="url(#grad1)"
                                        d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
                                </svg>
                            </div>
                        </div>
                        <h4 class="service-title mb-3 f-18">Nilai Pencairan Tinggi</h4>
                        <p class="service-subtitle mb-4 f-13">Dapatkan tarif terbaik untuk aset Anda tanpa biaya
                            tersembunyi.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card service-box text-center p-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="service-icon-bg mx-auto avatar-xxl p-4"
                            style="background-image: url(images/service-icon-bg.png)">
                            <div class="service-box-icon justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                    viewBox="0 0 16 16">
                                    <defs>
                                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%"
                                            y2="0%">
                                            <stop offset="0%" style="stop-color:#1e40d5;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#657be5;stop-opacity:1" />
                                        </linearGradient>



                                    </defs>
                                    <path fill="url(#grad1)"
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                </svg>
                            </div>
                        </div>
                        <h4 class="service-title mb-3 f-18">Syarat Fleksibel</h4>
                        <p class="service-subtitle mb-4 f-13">Kami menawarkan syarat pengembalian yang dapat disesuaikan
                            dengan kemampuan Anda untuk memudahkan proses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us End -->

    <!-- Services Start -->
    <section class="section bg-light" id="produk">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2>Sesuaikan Solusi Kami dengan Kebutuhan Anda</h2>
                        <P class="text-muted">Temukan solusi yang tepat untuk kebutuhan Anda dengan produk kami yang dapat
                            disesuaikan.</P>
                    </div>
                </div>
            </div>

            <div class="row gy-3">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm  mb-5 bg-body-tertiary rounded" data-aos="fade-down">
                        <div class="bg-soft-primary about-img rounded">
                            <img src="{{ asset('assets/images/foto-mobil.png') }}" alt=""
                                class="img-fluid d-block mx-auto" style="height: 100px">
                        </div>
                        <div class="p-4">
                            <p class="text-uppercase text-muted mb-2 f-13">Kendaraan</p>
                            <h4 class="f-18">Dana Gadai BPKB Mobil</h4>
                            <p class="text-muted f-14">Dapatkan dana cepat dengan menjaminkan BPKB kendaraan Anda. Proses
                                mudah dan syarat yang fleksibel.</p>
                            <a href="{{ route('bpkb-mobil') }}" class="read-more fw-semibold">Lihat Detail <span
                                    class="ms-2 right-icon">&#8594;</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm  mb-5 bg-body-tertiary rounded" data-aos="fade-down"
                        data-aos-duration="500">
                        <div class="bg-soft-danger about-img rounded">
                            <img src="{{ asset('assets/images/foto-motor.png') }}" alt=""
                                class="img-fluid d-block mx-auto" style="width: 250px; height: 100px">
                        </div>
                        <div class="p-4">
                            <p class="text-uppercase text-muted mb-2 f-13">Kendaraan</p>
                            <h4 class="f-18">Dana Gadai BPKB Motor</h4>
                            <p class="text-muted f-14">Dapatkan pinjaman dengan proses cepat dan tenor maksimal hingga 24
                                bulan.</p>
                            <a href="{{ route('bpkb-motor') }}" class="read-more fw-semibold">Lihat Detail <span
                                    class="ms-2 right-icon">&#8594;</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-5 bg-body-tertiary rounded" data-aos="fade-down"
                        data-aos-duration="1000">
                        <div class="bg-soft-info about-img rounded">
                            <img src="{{ asset('assets/images/foto-gadai-properti.png') }}" alt=""
                                class="img-fluid d-block mx-auto" style="width: 270px; height: 100px">
                        </div>
                        <div class="p-4">
                            <p class="text-uppercase text-muted mb-2 f-13">Properti</p>
                            <h4 class="f-18">Dana Gadai Properti</h4>
                            <p class="text-muted f-14">Manfaatkan properti Anda untuk dana cepat dengan syarat terjangkau.
                            </p>
                            <a href="{{ route('properti') }}" class="read-more fw-semibold">Lihat Detail <span
                                    class="ms-2 right-icon">&#8594;</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-5 bg-body-tertiary rounded" data-aos="fade-down"
                        data-aos-duration="1500">
                        <div class="bg-soft-warning about-img rounded">
                            <img src="{{ asset('assets/images/foto-gadai-sertifikasi.png') }}" alt=""
                                class="img-fluid d-block mx-auto" style="width: 250px; height: 100px">
                        </div>
                        <div class="p-4">
                            <p class="text-uppercase text-muted mb-2 f-13">Sertifikasi</p>
                            <h4 class="f-18">Dana Gadai Sertifikasi</h4>
                            <p class="text-muted f-14">Optimalkan sertifikasi Anda dengan dana cepat dan mudah. Nikmati
                                proses transparan dan syarat bersahabat.</p>
                            <a href="{{ route('sertifikasi') }}" class="read-more fw-semibold">Lihat Detail <span
                                    class="ms-2 right-icon">&#8594;</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services End -->

    <!-- Features Start -->
    <section class="section" id="persyaratan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2>Persyaratan</h2>
                        <P class="text-muted">Ut enim ad minima veniam quis nostrum exercitationem ullam corporis
                            suscipit laboriosam nisi commodi consequatur.</P>
                    </div>
                </div>
            </div>
            <div class="features-content">
                <div class="row justify-content-center">
                    <div class="col-lg-5 offset-lg-1 col-12">
                        <div class="row">
                            <div class="col-6 col-md-6">
                                <div class="features-box" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="300" data-aos-offset="0">
                                    <h5 class="f-18">
                                        <i class="bi bi-check2-circle me-2 text-warning"></i>
                                        KTP Aktif
                                    </h5>
                                </div>
                                <div class="features-box" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="600" data-aos-offset="0">
                                    <h5 class="f-18">
                                        <i class="bi bi-check2-circle me-2 text-warning"></i>
                                        Slig Gaji
                                    </h5>
                                </div>
                                <div class="features-box" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="900" data-aos-offset="0">
                                    <h5 class="f-18">
                                        <i class="bi bi-check2-circle me-2 text-warning"></i>
                                        Rek Tab <span class="text-muted f-12 fw-normal">(Khusus Mobil)</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="features-box" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="1200" data-aos-offset="0">
                                    <h5 class="f-18">
                                        <i class="bi bi-check2-circle me-2 text-warning"></i>
                                        STNK BPKB
                                    </h5>
                                </div>
                                <div class="features-box" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="1500" data-aos-offset="0">
                                    <h5 class="f-18">
                                        <i class="bi bi-check2-circle me-2 text-warning"></i>
                                        NPWP
                                    </h5>
                                </div>
                                <div class="features-box" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="1800" data-aos-offset="0">
                                    <h5 class="f-18">
                                        <i class="bi bi-check2-circle me-2 text-warning"></i>
                                        BKR
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Features End -->

    <!-- Project Start -->
    <section class="section bg-light" id="step_pengajuan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2>Bagaimana Proses Pengajuan Gadai BPKB?</h2>
                        <P class="text-muted">Ada beberapa tahapan mulai dari aplikasi hingga pencairan.</P>
                    </div>
                </div>
            </div>

            <div class="features-content">
                <div class="row justify-content-center">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <div class="d-flex mb-3"data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="300" data-aos-offset="0">
                                    <div class="rounded bg-soft-primary p-3 my-auto">
                                        <img src="{{ asset('assets/images/icon-file-and-folder.png') }}" alt=""
                                            width="46" height="46">
                                    </div>
                                    <div class="keterangan">
                                        <h5 class="f-18 ms-3">Step 1 : Isi Form Pengajuan</h5>
                                        <p class="text-muted f-14 ms-3 mb-0">Melakukan Simulasi (Via Website / Telepon)</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="600" data-aos-offset="0">
                                    <div class="rounded bg-soft-primary p-3 my-auto">
                                        <img src="{{ asset('assets/images/icon-car.png') }}" alt=""
                                            width="46" height="46">
                                    </div>
                                    <d class="keterangan">
                                        <h5 class="f-18 ms-3">Step 2 : Penjemputan Data</h5>
                                        <p class="text-muted f-14 ms-3 mb-0">Jemput Data dan Cek Fisik Kendaraan</p>
                                    </d>
                                </div>
                                <div class="d-flex mb-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="900" data-aos-offset="0">
                                    <div class="rounded bg-soft-primary p-3 my-auto">
                                        <img src="{{ asset('assets/images/icon-handshake.png') }}" alt=""
                                            width="46" height="46">
                                    </div>
                                    <d class="keterangan">
                                        <h5 class="f-18 ms-3">Step 3 : Persetujuan Pembiayaan</h5>
                                        <p class="text-muted f-14 ms-3 mb-0">Pembiayaan Disetujui & Penyerahan BPKB</p>
                                    </d>
                                </div>
                                <div class="d-flex mb-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-out"
                                    data-aos-delay="1200" data-aos-offset="0">
                                    <div class="rounded bg-soft-primary p-3 my-auto">
                                        <img src="{{ asset('assets/images/icon-salary.png') }}" alt=""
                                            width="46" height="46">
                                    </div>
                                    <d class="keterangan">
                                        <h5 class="f-18 ms-3">Step 4 : Pencairan Dana</h5>
                                        <p class="text-muted f-14 ms-3 mb-0">Dana Full Sesuai Kontrak Tanpa Potongan</p>
                                    </d>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project End -->

    <!-- Testimonial Start -->
    <section class="section bg-primary" id="manfaat_keuntungan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h4 class="text-white f-16">Gadai BPKB Motor, Mobil , Properti & Sertifikasi</h4>
                        <h2 class="text-white">Apa Manfaat & Keuntungan Yang Diperoleh Saat Mengajukan Pinjaman Ini
                            Sekarang?</h2>
                        <P class="text-white opacity-75">Tingkatkan keuangan Anda dengan mengajukan pinjaman sekarang dan
                            nikmati manfaatnya secara langsung.</P>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme testi-content" id="testi-clients">
                        <div class="item">
                            <div class="testi-box text-center m-2">
                                <div class="card border-0 shadow p-4 mb-4">
                                    <div class="mt-1 mb-3">
                                        <img src="images/testi-icon.png" alt=""
                                            class="testi-icon img-fluid d-block mx-auto w-auto">
                                    </div>
                                    <p class="text-muted mb-0 f-15">Et harum quidem rerum facilis expedita distinctio
                                        nam libero tempore soluta nobis optio cumque.</p>
                                </div>
                                <div class="test-user-info">
                                    <div class="avatar-md mx-auto">
                                        <img src="images/user/img-1.jpg" alt=""
                                            class="img-fluid d-block rounded-circle testi-user-img">
                                    </div>
                                    <h5 class="f-17 mt-3 mb-1">Joshua Vargas</h5>
                                    <p class="text-muted f-14">Web Developer, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-box text-center m-2">
                                <div class="card border-0 shadow p-4 mb-4">
                                    <div class="mt-1 mb-3">
                                        <img src="images/testi-icon.png" alt=""
                                            class="testi-icon img-fluid d-block mx-auto w-auto">
                                    </div>
                                    <p class="text-muted mb-0 f-15">Et harum quidem rerum facilis expedita distinctio
                                        nam libero tempore soluta nobis optio cumque.</p>
                                </div>
                                <div class="test-user-info">
                                    <div class="avatar-md mx-auto">
                                        <img src="images/user/img-2.jpg" alt=""
                                            class="img-fluid d-block rounded-circle testi-user-img">
                                    </div>
                                    <h5 class="f-17 mt-3 mb-1">Sammie Lewis</h5>
                                    <p class="text-muted f-14">UI/UX Designer, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-box text-center m-2">
                                <div class="card border-0 shadow p-4 mb-4">
                                    <div class="mt-1 mb-3">
                                        <img src="images/testi-icon.png" alt=""
                                            class="testi-icon img-fluid d-block mx-auto w-auto">
                                    </div>
                                    <p class="text-muted mb-0 f-15">Et harum quidem rerum facilis expedita distinctio
                                        nam libero tempore soluta nobis optio cumque.</p>
                                </div>
                                <div class="test-user-info">
                                    <div class="avatar-md mx-auto">
                                        <img src="images/user/img-3.jpg" alt=""
                                            class="img-fluid d-block rounded-circle testi-user-img">
                                    </div>
                                    <h5 class="f-17 mt-3 mb-1">Sarah Levine</h5>
                                    <p class="text-muted f-14">PHP Developer, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-box text-center m-2">
                                <div class="card border-0 shadow p-4 mb-4">
                                    <div class="mt-1 mb-3">
                                        <img src="images/testi-icon.png" alt=""
                                            class="testi-icon img-fluid d-block mx-auto w-auto">
                                    </div>
                                    <p class="text-muted mb-0 f-15">Et harum quidem rerum facilis expedita distinctio
                                        nam libero tempore soluta nobis optio cumque.</p>
                                </div>
                                <div class="test-user-info">
                                    <div class="avatar-md mx-auto">
                                        <img src="images/user/img-4.jpg" alt=""
                                            class="img-fluid d-block rounded-circle testi-user-img">
                                    </div>
                                    <h5 class="f-17 mt-3 mb-1">Bobby Kelly</h5>
                                    <p class="text-muted f-14">Graphic Designer, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="features-content">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="features-box" data-aos="fade-down" data-aos-easing="ease-in-out"
                                    data-aos-delay="300" data-aos-offset="0">
                            <h5 class="f-24 text-white">
                                <i class="bi bi-check2-all text-success me-2"></i>
                                Include Asuransi Jiwa Selama Masa Kredit
                            </h5>
                        </div>
                        <div class="features-box"data-aos="fade-down" data-aos-easing="ease-in-out"
                                    data-aos-delay="600" data-aos-offset="0">
                            <h5 class="f-24 text-white">
                                <i class="bi bi-check2-all text-success me-2"></i>
                                Free Pulsa 1 Juta rupiah khusus pengajuan yang cair di bulan Mei 2024
                            </h5>
                        </div>
                        <div class="features-box"data-aos="fade-down" data-aos-easing="ease-in-out"
                                    data-aos-delay="900" data-aos-offset="0">
                            <h5 class="f-24 text-white">
                                <i class="bi bi-check2-all text-success me-2"></i>
                                2 Buah Mobil Honda CRV 7 Seaters
                            </h5>
                        </div>
                        <div class="features-box"data-aos="fade-down" data-aos-easing="ease-in-out"
                                    data-aos-delay="1200" data-aos-offset="0">
                            <h5 class="f-24 text-white">
                                <i class="bi bi-check2-all text-success me-2"></i>
                                Selalu Ada Tawaran Promo Menarik Untuk Diklaim
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->



    <!-- Contact Us Start -->
    <Section class="section" id="FAQ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2>Pertanyaan yang sering ditanyakan</h2>
                        <P class="text-muted">Temukan solusi yang tepat untuk kebutuhan Anda...</P>
                    </div>
                </div>
            </div>

            {{-- <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="mb-5 mb-lg-0">
                        <div class="text-center">
                            <img src="images/contact-img.png" alt="" class="img-fluid d-block w-75 mx-auto">
                            <h4 class="mt-4">Are You Facing Any Problem..?</h4>
                            <p class="text-muted mb-4">It va esser tam simplic quam Occidental in fact it va esser
                                Occidental angles quam un skeptic cambridge es.</p>
                            <a href="#" class="btn btn-success"><i class="icon me-2 icon-fill-white"
                                    data-feather="message-circle"></i> Start Live Chat</a>
                            <p class="mt-4">Or you can contact at</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#">
                                        <div class="badge f-14 bg-soft-dark text-muted"><span
                                                class="text-dark me-1">Email:</span> Youremailid@gmail.com</div>
                                    </a>
                                </div>
                                <div class="col-md-6 mt-2 mt-sm-0">
                                    <a href="#">
                                        <div class="badge f-14 bg-soft-dark text-muted"><span
                                                class="text-dark me-1">Phone:</span> (001) 1234 567 890</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <h4 class="line-height-1_4 mb-4">Get in Touch</h4>
                    <div class="custom-form mt-4 mt-lg-0">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Enter your name..">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Enter your email..">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Enter Subject..">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label">Message</label>
                                        <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Enter message.."></textarea>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send
                                        Message<i class="mdi mdi-telegram ms-2"></i></button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>
            </div> --}}

            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-medium f-16" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Berapa minimal dan maksimal dana yang bisa dipinjam?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="text-secondary f-14">Dana yang bisa dipinjam mulai dari Rp 300 Juta
                                                hingga Rp 5 Miliar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-medium f-16" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Kepemilikan sertifikat rumah apa saja yang bisa diajukan sebagai penjamin?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="text-secondary f-14">Jaminan yang bisa di biayai hanya sertifikat
                                                SHM/SHGB atas nama sendiri, pasangan, orang tua kandung (keduanya wajib
                                                masih hidup), mertua (keduanya wajib masih hidup)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-medium f-16" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Area mana saja yang tercover di produk pinjaman berjaminan Sertifikat Rumah oleh
                                            BFI Finance?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="text-secondary f-14">Area yang tercover untuk produk pinjaman
                                                berjaminan sertifikat rumah / ruko / rukan adalaah area Jabodetabek,
                                                Surabaya, Sidoarjo, Gresik dan Malang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </Section>
    <!-- Contact Us End -->
    <!-- Contact Us Start -->
    <Section class="section bg-soft-primary cta" id="cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2 data-aos="fade-left" data-aos-easing="ease-in-out"
                                     data-aos-offset="0">Tunggu Apa Lagi ?</h2>
                        <P class="text-muted">Segera Hubungi Kami Untuk Pengajuan Gadai BPKB</P>
                        <h5 class="text-primary">Proses Cepat Tanpa Survey</h5>
                        <a href="https://api.whatsapp.com/send?phone=6281331111111" target="_blank"
                            class="btn btn-success mt-4 text-white w-100 f-16 rounded-pill p-3 px-5 fw-bold"><i
                                class="bi bi-whatsapp"></i> Hubungi Kami</a>
                    </div>
                </div>
            </div>

        </div>
    </Section>
    <!-- Contact Us End -->
@endsection
