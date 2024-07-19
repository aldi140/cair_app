@extends('frontend.layouts.master')

@section('title')
    Tentang Kami
@endsection

@section('content')
    {{-- <!-- Hero Start -->
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
    <!-- Hero End --> --}}

    <!-- Main Start -->
    <section class="section bg-light mt-5" id="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h5 class="text-primary">Tentang Kami</h5>
                        <h3>Apa itu Cair?</h3>
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
