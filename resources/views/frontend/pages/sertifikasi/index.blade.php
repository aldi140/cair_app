@extends('frontend.layouts.master')

@section('title')
    Sertifikasi
@endsection

@section('content')
    <!-- Hero Start -->
    <section class="hero-3-bg position-relative bg-soft-primary hero-gadai" id="properti">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-md-1 order-2">
                    <div class="text-start">
                        <h1 class="hero-1-title text-dark">Pinjaman Jaminan Sertifikasi</h1>
                        <p class="text-muted mb-4 pb-3">Pinjaman Jaminan Sertifikasi Atau Gadai Sertifikasi adalah solusi cepat
                            pinjaman dana yang dapat diambil dengan menjaminkan Sertifikasi sebagai jaminan. </p>
                        <a href="{{ route('pengajuan.index') }}" class="btn btn-warning">Ajukan Sekarang <span
                                class="ms-2 right-icon">&#8594;</span></a>
                    </div>
                </div>
                <div class="col-lg-7 order-md-2 order-1 d-flex justify-content-center">
                    <div class="d-flex justify-content-center" style="border-radius: 50%; overflow: hidden; border: 5px solid #fff;" >
                        <img src="{{ asset('assets/images/foto-gadai-sertifikasi.png') }}" alt="" class="img-fluid" style=" width: 350px; height: 320px; object-fit: contain">
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
                        <h5 class="text-primary">Gadai Sertifikasi</h5>
                        <h3>Prosesnya hanya 1 hari kerja</h3>
                        <hr class="text-primary border-1">
                        <P class=" opacity-75">Selaku agen leasing terbaik dan terpercaya di Indonesia. Kami
                            (Temangadai.com) menawarkan produk pinjaman gadai Sertifikat Rumah / Tanah (SHM). Yang
                            pencairannya bisa langsung ke konsumen.</P>
                        <P class=" opacity-75">Selain itu, proses yang dibutuhkan sangatlah cepat. Serta tenor sangat
                            fleksibel yang bisa disesuaikan menurut kemampuan konsumen. Selanjutnya, konsumen akan kami
                            referensikan ke Bank & Perusahaan pembiayaan rekanan yang resmi dan di awasi OJK.</P>
                        <P class=" opacity-75">Punya sertifikat rumah tapi tidak tau tempat gadai yang tepat? Kami bisa
                            memberi solusinya!</P>
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
                    <h5 class="text-primary">Simulasi Angsuran Sertifikasi</h5>
                    <h3 class="mb-3">Contoh Tabel Simulasi Angsuran</h3>
                    <hr class="text-primary border-1">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="table-primary py-5">
                            <th class="f-18 text-white" style="padding: 20px;">Pinjaman</th>
                            <th class="f-18 text-white" style="padding: 20px;">1x Angsuran</th>
                            <th class="f-18 text-white" style="padding: 20px;">12x Angsuran</th>
                            <th class="f-18 text-white" style="padding: 20px;">23x Angsuran</th>
                            <th class="f-18 text-white" style="padding: 20px;">24x Angsuran</th>
                            <th class="f-18 text-white" style="padding: 20px;">35x Angsuran</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 50.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 5.550.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 5.132.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 2.984.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 3.875.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 2.194.000</td>
                            </tr>
                            <tr class="table-light">
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 70.500.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 7.625.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 7.035.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 4.084.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 3.934.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 2.990.000</td>
                            </tr>
                            <tr>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 100.000.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 10.734.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 9.902.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 5.734.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 5.524.000</td>
                                <td class="f-16 fw-bold " style="padding: 12px 20px;">Rp. 4.185.000</td>
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
                                            Profil SHM
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Sertifikat atas nama sendiri atau nama pasangan.</li>
                                                <li>Berada di lokasi strategis (opsional).</li>
                                                <li>Dll.</li>
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
                                                            <td class="f-16 " style="padding: 12px 20px;">KTP / SIM
                                                                Pemohon & Pasangan (jika sudah menikah)</td>
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
                                                            <td class="f-16 " style="padding: 12px 20px;">PBB 2 tahun
                                                                terakhir</td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">Status tempat
                                                                tinggal kontrak melampirkan kwitansi / perjanjian sewa
                                                            </td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">Status tempat
                                                                tinggal rumah dinas melampirkan surat keterangan menempati
                                                                rumah
                                                            </td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">Slip asli gaji
                                                                3 bulan terakhir (salah satu bulan saja) & ID Card (untuk
                                                                Karyawan)
                                                            </td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">NPWP
                                                            </td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                            <td class="f-16 text-center" style="padding: 12px 20px;"><i
                                                                    class="bi bi-check-circle"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="f-16 " style="padding: 12px 20px;">SIUP / TDP /
                                                                akta perusahaan / izin usaha/ izin praktik
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
                                Bunga flat 0,95% per bulan
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Tenor Mulai 12-120 bulan
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Proses cepat 1 hari
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Pinjaman Online Terpercaya Dengan Minimal Pengajuan 300 Juta
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Cover Seluruh Domisili Di Jabodetabek & Bandung
                            </h5>
                        </div>
                        <div class="features-box d-flex">
                            <i class="bi bi-check2-all text-success me-2"></i>
                            <h5 class="f-18 fw-normal text-white">
                                Suku Bunga per Tahun, Mulai dari 11,5% (Sesuai kondisi aset & kelengkapan dokumen)
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
                        <a href="https://api.whatsapp.com/send?phone=6281331111111" target="_blank"
                            class="btn btn-success mt-4 text-white w-100 f-16 rounded-pill p-3 px-5 fw-bold"><i
                                class="bi bi-whatsapp"></i> Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!-- CTA End -->
@endsection
