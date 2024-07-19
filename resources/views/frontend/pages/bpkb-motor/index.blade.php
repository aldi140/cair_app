@extends('frontend.layouts.master')

@section('title')
    BPKB Motor
@endsection

@section('content')
    <!-- Hero Start -->
    <section class="hero-3-bg position-relative bg-soft-primary hero-gadai" id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-md-1 order-2">
                    <div class="text-start">
                        <h1 class="hero-1-title text-dark">Pinjaman Jaminan BPKB Motor</h1>
                        <p class="text-muted mb-4 pb-3">Pinjaman Jaminan BPKB Motor Atau Gadai BPKB Motor adalah solusi cepat
                            pinjaman dana yang dapat diambil dengan menjaminkan BPKB Motor sebagai jaminan. </p>
                        <a href="{{ route('pengajuan.index') }}" class="btn btn-warning">Ajukan Sekarang <span
                                class="ms-2 right-icon">&#8594;</span></a>
                    </div>
                </div>
                <div class="col-lg-7 order-md-2 order-1">
                    <div class="justify-content-center">
                        <img src="{{ asset('assets/images/foto-motor.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-bottom-shape">
            <img src="images/hero-3-bottom-img.png" alt="" class="img-fluid d-block mx-auto">
        </div>
    </section>
    <!-- Hero End -->

    <!-- Main Start -->
    <section class="section" id="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h5 class="text-primary">Gadai BPKB Motor</h5>
                        <h3>Prosesnya hanya 1 hari kerja</h3>
                        <hr class="text-primary border-1">
                        <P class=" opacity-75">Teman Gadai menyediakan produk pinjaman gadai BPKB Motor untuk memperoleh
                            dana langsung cair ke konsumen. Proses yang dibutuhkan sangat cepat dan tenor maksimal. Konsumen
                            akan kami referensikan ke Bank & Perusahaan Pembiayaan rekanan kami yang resmi & diawasi oleh
                            OJK.</P>
                        <P class=" opacity-75">Kami juga menerima transaksi Take Over jika memang ternyata BPKB masih
                            menjadi agunan di Bank/Perusahaan Pembiayaan. Transaksi Take Over akan dilakukan pelunasan tanpa
                            menggunakan biaya sepeserpun ke konsumen!</P>
                        <P class=" opacity-75">Pembayaran cicilan bulanan pun sangat ringan. Dengan proses pengajuan yang
                            cepat, tentu Teman Gadai bisa menjadi solusi paling mudah bagi anda. Yuk coba hitung simulasi
                            dan ajukan pinjaman gadai BPKB Motor sekarang juga!</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main End -->


    <!-- Simulasi Angsuran  Start -->
    <section class="section bg-light" id="simulasi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-3">
                    <h5 class="text-primary">Simulasi Angsuran BPKB Motor</h5>
                    <h3 class="mb-3">Contoh Tabel Simulasi Angsuran</h3>
                    <hr class="text-primary border-1">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="table-primary py-5">
                            <th class="f-18 text-white" style="padding: 20px;">Pinjaman</th>
                            <th class="f-18 text-white" style="padding: 20px;">6x Angsuran</th>
                            <th class="f-18 text-white" style="padding: 20px;">12x Angsuran</th>
                            <th class="f-18 text-white" style="padding: 20px;">18x Angsuran</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 2.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 531.500</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 289.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 221.000</td>                             
                            </tr>
                            <tr class="table-light">
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 2.500.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 674.500</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 342.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 260.000</td> 
                            </tr>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 3.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 770.500</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 396.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 300.500</td>
                            </tr>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 4.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 980.500</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 514.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 388.000</td>
                            </tr>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 5.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 1.219.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 621.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 470.000</td>
                            </tr>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 7.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 1.609.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 837.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 632.500</td>
                            </tr>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 10.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 2.193.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 1.165.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 880.000</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Simulasi Angsuran End -->


    <!-- Syarat dan ketentuan Start -->
    <Section class="section" id="syarat">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-3">
                    <h5 class="text-primary">Syarat dan ketentuan</h5>
                    <h3 class="mb-3">Persyaratan Pengajuan & Kelengkapan Dokumen</h3>
                    <hr class="text-primary border-1">
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 col-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-medium f-16" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Profil Diri
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Warga Negara Indonesia (WNI)</li>
                                                <li>Berusia 21 hingga 60 tahun serta status perkawinan belum menikah,
                                                    menikah, dan cerai</li>
                                                <li>Status tempat tinggal rumah sendiri, pasangan, keluarga, kontrak tahunan
                                                    dan rumah dinas</li>
                                                <li>Pekerjaan / profesi karyawan (tetap/kontrak), PNS, Wiraswasta</li>
                                                <li>Tidak bisa diterima jika jenis usaha atau profesi melanggar hukum</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-medium f-16" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Profil Kendaraan
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Kendaraan (motor) merupakan milik sendiri dengan BPKB asli</li>
                                                <li>BPKB bisa atas nama sendiri, pasangan dan orang lain (melampirkan bukti pembelian)</li>
                                                <li>Usia kendaraan (motor) maksimal 10 tahun dengan merek Jepang dan Italia</li>
                                                <li>STNK atau Pajak : Pajak Mati maksimal 4 tahun ( tanpa potongan pencairan pinjaman), Pajak mati di atas 4 tahun (kena potongan pencairan)</li>
                                                <li>Plat kendaraan hitam (bukan plat merah)</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-medium f-16" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Kelengkapan Dokumen
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <th class="f-16" style="padding: 20px;">Dokumen</th>
                                                        <th class="f-16 text-center" style="padding: 20px;">
                                                            Karyawan</th>
                                                        <th class="f-16 text-center" style="padding: 20px;">
                                                            Wiraswasta</th>

                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">KTP Pemohon & Pasangan (jika sudah menikah)</td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">Kartu
                                                                Keluarga / Akta Nikah (jika sudah menikah)</td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>

                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">STNK & Notice Pajak</td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">BPKB
                                                            </td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
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
    <!-- Syarat dan ketentuan End -->

    <!-- Skema Start -->
    <section class="section bg-primary" id="skema">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h4 class="text-white f-16">Skema Angsuran</h4>
                        <h2 class="text-white">Pinjaman Dengan Cicilan Transparan</h2>
                        <P class="text-white opacity-75">Tingkatkan keuangan Anda dengan mengajukan pinjaman sekarang dan
                            nikmati manfaatnya secara langsung.</P>
                    </div>
                </div>
            </div>

            <div class="features-content">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Bunga flat 0,85% sampai 1,65% per bulan
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Tenor Mulai 6-24 bulan
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Proses cepat 1 hari langsung cair
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Pinjaman Online Terpercaya Dengan Minimal Pengajuan 1 Juta
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                               Cover Seluruh Domisili Di Indonesia hingga 400 Kota/Kabupaten & 32 Provinsi
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Suku Bunga per Tahun, Mulai dari 10,0% sampai 22,5% (Sesuai kondisi aset & kelengkapan dokumen
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skema End -->

    <!-- CTA End -->
    <Section class="section bg-soft-primary cta" id="cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2>Tunggu Apa Lagi ?</h2>
                        <P class="text-muted">Segera Hubungi Kami Untuk Pengajuan Gadai BPKB</P>
                        <h5 class="text-primary">Proses Cepat Tanpa Survey</h5>
                        <a href="https://api.whatsapp.com/send?phone=6281331111111" target="_blank" class="btn btn-success mt-4 text-white w-100 f-16 rounded-pill p-3 px-5 fw-bold"><i class="bi bi-whatsapp"></i> Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!-- CTA End -->
@endsection
