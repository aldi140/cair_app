    @extends('frontend.layouts.master')

    @section('title')
        Form Pengajuan
    @endsection

    @push('css')
        <!-- Choices CSS -->
        <link href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet"
            type="text/css" />
    @endpush

    @section('content')
        <!-- Contact Us Start -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-3">
                            <h2>Form Pengajuan</h2>
                            <p class="text-muted f-14">Isi dan kirim form ini. Kami akan segera menghubungimu untuk
                                konsultasi
                                pengajuan.</p>
                        </div>
                        <hr>
                    </div>
                </div>


                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10">
                        <div class="custom-form mt-4 mt-lg-0">
                            <form method="post" id="form-pengajuan" name="myForm">
                                <p id="error-msg"></p>
                                <div class="row gap-5">
                                    <div class="col-lg-6 ">
                                        <label class="form-label fw-bold f-14 mb-4">Data Diri</label>
                                        <div class="mb-2">
                                            <label for="nama_lengkap" class="form-label f-14 fw-semibold">Nama Lengkap
                                            </label>
                                            <input name="nama_lengkap" id="nama_lengkap" type="text"
                                                class="form-control f-13" placeholder="Nama lengkap sesuai KTP">
                                            <div class="error-message"></div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="nomor_hp" class="form-label f-14 fw-semibold">Nomor HP</label>
                                            <input name="no_hp" id="nomor_hp" type="text" class="form-control f-13"
                                                placeholder="Masukan nomor HP">
                                            <div class="error-message"></div>

                                        </div>
                                        <div class="mb-2">
                                            <label for="province" class="form-label f-14 fw-semibold">Provinsi
                                                Domisili</label>
                                            <select class="form-control text-muted" name="provinsi_id" id="province"
                                                placeholder="This is a search placeholder">
                                                <option value="">Pilih Provinsi </option>
                                            </select>
                                            <div class="error-message"></div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="regency" class="form-label f-14 fw-semibold">Kota/Kabupaten
                                                Domisili</label>
                                            <select class="form-control text-muted" name="kota_id" id="regency"
                                                placeholder="This is a search placeholder">
                                                <option value="">Pilih Kota </option>
                                            </select>
                                            <div class="error-message"></div>
                                        </div>
                                        <div class="row">

                                            <div class="col">
                                                {{-- <div class="mb-2 w-100">
                                                    <label for="merk" class="form-label f-14 fw-semibold">Kelurahan</label>
                                                    <select class="form-control text-muted" name="merk_id" id="kelurahan"
                                                        placeholder="This is a search placeholder">
                                                        <option value="">Pilih Kelurahan </option>
                                                    </select>
                                                </div> --}}
                                                <div class="mb-2 w-100">
                                                    <label for="district"
                                                        class="form-label f-14 fw-semibold">Kecamatan</label>
                                                    <select class="form-control text-muted" name="kecamatan_id"
                                                        id="district" placeholder="This is a search placeholder">
                                                        <option value="">Pilih Kecamatan</option>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-2 w-100">
                                                    <label for="village"
                                                        class="form-label f-14 fw-semibold">Kelurahan</label>
                                                    <select class="form-control text-muted" name="kelurahan_id"
                                                        id="village" placeholder="This is a search placeholder">
                                                        <option value="">Pilih Kelurahan </option>
                                                    </select>
                                                    <div class="error-message"></div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-5">
                                        <label class="fw-bold f-14 mb-4">Data Jaminan</label>
                                        <div class="mb-2">
                                            <label for="tipeJaminan" class="form-label f-14 fw-semibold">Tipe
                                                Jaminan</label>
                                            <select class="form-control" name="tipe_jaminan" id="tipeJaminan"
                                                placeholder="This is a search placeholder">
                                                <option value="">Pilih Tipe Jaminan</option>
                                                <option value="BPKB Mobil">BPKB Mobil</option>
                                                <option value="BPKB Motor">BPKB Motor</option>
                                                <option value="Property">Property</option>
                                                <option value="Sertifikat PNS, GURU/DOSEN">Sertifkat PNS, GURU/DOSEN
                                                </option>
                                            </select>
                                            <div class="error-message"></div>
                                        </div>
                                        {{-- input mobil --}}
                                        <div class="input-mobil d-none">
                                            <div class="mb-2">
                                                <label for="merk-mobil" class="form-label f-14 fw-semibold">Merk
                                                    Mobil</label>
                                                <select class="form-control text-muted" name="merk_mobil_id" id="merk-mobil"
                                                    placeholder="This is a search placeholder">
                                                    <option value="">Pilih Merk Mobil</option>
                                                </select>
                                                <div class="error-message"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="mobil" class="form-label f-14 fw-semibold">Model
                                                    Mobil</label>
                                                <input name="nama_mobil" id="mobil" type="text"
                                                    class="form-control f-13" placeholder="Nama lengkap sesuai KTP">
                                                {{-- <select class="form-control text-muted" name="mobil_id" id="mobil"
                                                    placeholder="This is a search placeholder">
                                                    <option value="">Pilih Model Mobil</option>
                                                </select> --}}
                                                <div class="error-message"></div>
                                            </div>
                                        </div>

                                        {{-- input motor --}}
                                        <div class="input-motor d-none">
                                            <div class="mb-2 ">
                                                <label for="merk-motor" class="form-label f-14 fw-semibold">Merk
                                                    Motor</label>

                                                <select class="form-control text-muted" name="merk_motor_id"
                                                    id="merk-motor" placeholder="This is a search placeholder">
                                                    <option value="">Pilih Merk Motor</option>
                                                </select>
                                                <div class="error-message"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="motor" class="form-label f-14 fw-semibold">Model
                                                    Motor</label>
                                                <input name="nama_motor" id="motor" type="text"
                                                    class="form-control f-13" placeholder="Masukan Nama Motor">
                                                {{-- <select class="form-control text-muted" name="motor_id" id="motor"
                                                    placeholder="This is a search placeholder">
                                                    <option value="">Pilih Model Motor</option>
                                                </select> --}}
                                                <div class="error-message"></div>
                                            </div>
                                        </div>

                                        {{-- input property --}}
                                        <div class="input-property d-none">
                                            <div class="mb-2">
                                                <label for="property" class="form-label f-14 fw-semibold">Jenis Property
                                                </label>
                                                <select class="form-control text-muted" name="property" id="property"
                                                    placeholder="This is a search placeholder">
                                                    <option value="">Pilih Jenis Property</option>
                                                    <option value="Rumah Tinggal Lapak">Rumah Tinggal Lapak</option>
                                                    <option value="Rumah Toko/Rumah Kantor">Rumah Toko/Rumah Kantor
                                                    </option>
                                                    <option value="Gedung Kos/Kontrakan">Gedung Kos/Kontrakan</option>
                                                    <option value="Unit Apartemen">Unit Apartemen</option>
                                                    <option value="Ruangan Kantor">Ruangan Kantor (Office Space)</option>
                                                </select>
                                                <div class="error-message"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="sertifikat" class="form-label f-14 fw-semibold">Jenis
                                                    Sertifikat</label>
                                                <select class="form-control text-muted" name="sertifikat"
                                                    id="sertifikat-property" placeholder="This is a search placeholder">
                                                    <option value="">Pilih Jenis Sertifikat</option>
                                                    <option value="SHGB">SHGB</option>
                                                    <option value="SHM">SHM</option>
                                                    <option value="SHMRS">SHMRS</option>
                                                </select>
                                                <div class="error-message"></div>

                                            </div>
                                            <div class="mb-2">
                                                <label for="alamat-property" class="form-label f-14 fw-semibold">Alamat
                                                    Lengkap
                                                    Property</label>
                                                <textarea class="form-control f-13" name="alamat_property" id="alamat-property" cols="30" rows="100"
                                                    placeholder="Masukkan alamat property, RT/RW, kelurahan, kecamatan" style="height: 100px;"></textarea>

                                                <div class="error-message"></div>
                                            </div>
                                        </div>

                                        <div class="input-tahun d-none">
                                            <div class="mb-2">
                                                <label for="tahun" class="form-label f-14 fw-semibold">Tahun</label>
                                                <select class="form-control text-muted" name="tahun" id="tahun"
                                                    placeholder="This is a search placeholder">
                                                    <option value="">Pilih Tahun </option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5 mt-5">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="nominal_pinjaman" class="form-label f-14 fw-bold">Nominal Pinjaman
                                                <span class="text-muted f-12 fw-normal">(Min 1 juta - 250
                                                    juta)</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text text-muted f-12" id="basic-addon1">Rp</span>
                                                <input name="nominal_pinjaman" id="nominal_pinjaman" type="text"
                                                class="form-control f-13" placeholder="Masukan Nominal Pinjaman">
                                            </div>
                                            
                                            <div class="error-message"></div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <div class="row">
                                    <div class="form-check d-flex justify-content-center align-items-center gap-2 mb-3">
                                        <input type="checkbox" class="form-check-input" id="agreeTerms">
                                        <label class="form-check-label text-secondary f-13" for="agreeTerms">Saya setuju
                                            dengan
                                            <a href="#" class="text-primary fw-bold">Persyaratan dan Ketentuan</a>
                                            PT. Pengajuan</label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" id="submit" name="send"
                                            class="btn btn-secondary btn-sm" disabled>Ajukan Sekarang<i
                                                class="mdi mdi-telegram ms-2"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Choices.js -->
        <script src="{{ asset('build/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

        <script>
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                const provinceSelect = document.getElementById('province');
                const choicesProvince = new Choices(provinceSelect, {
                    searchEnabled: true,
                });

                // Load Provinsi
                function loadProvinsi(province_id = null) {
                    $.ajax({
                        url: "{{ route('ajax.provinsi') }}",
                        type: "GET",
                        success: function(response) {
                            if (response.success) {
                                var data = response.data;
                                $('#province').empty(); // Kosongkan elemen select sebelum diisi ulang
                                $('#province').append('<option value="">Pilih province</option>');

                                $.each(data, function(index, province) {
                                    $('#province').append('<option value="' + province.id + '">' +
                                        province
                                        .province + '</option>');
                                });

                                if (province_id) {
                                    $('#province').val(province_id);
                                }

                                // Refresh Choices.js setelah menambahkan opsi baru
                                choicesProvince.setChoices(
                                    data.map(item => ({
                                        value: item.id,
                                        label: item.name
                                    })),
                                    'value',
                                    'label',
                                    true
                                );
                            } else {
                                console.error('Error fetching data');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error: ' + status + error);
                        }
                    });
                }



                const regencySelect = document.getElementById('regency');
                const choicesRegency = new Choices(regencySelect, {
                    searchEnabled: true,
                });
                // Load Kota
                function loadKota(province_id, regency_id = null) {
                    $.ajax({
                        url: "{{ route('ajax.kota') }}",
                        type: "GET",
                        data: {
                            province_id: province_id
                        },
                        success: function(response) {
                            if (response.success) {
                                var data = response.data;
                                $('#regency').empty(); // Kosongkan elemen select sebelum diisi ulang

                                $.each(data, function(index, regency) {
                                    $('#regency').append('<option value="' + regency.id + '">' +
                                        regency
                                        .regency + '</option>');
                                });

                                if (regency_id) {
                                    $('#regency').val(regency_id);
                                }

                                // Refresh Choices.js setelah menambahkan opsi baru
                                choicesRegency.setChoices(
                                    data.map(item => ({
                                        value: item.id,
                                        label: item.name
                                    })),
                                    'value',
                                    'label',
                                    true
                                );
                            } else {
                                console.error('Error fetching data');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error: ' + status + error);
                        }
                    });
                }


                const districtSelect = document.getElementById('district');
                const choicesDistrict = new Choices(districtSelect, {
                    searchEnabled: true,
                });
                // load Kecamatan
                function loadKecamatan(regency_id, district_id = null) {
                    $.ajax({
                        url: "{{ route('ajax.kecamatan') }}",
                        type: "GET",
                        data: {
                            regency_id: regency_id
                        },
                        success: function(response) {
                            if (response.success) {
                                var data = response.data;
                                console.log(data);
                                $('#district').empty(); // Kosongkan elemen select sebelum diisi ulang

                                $.each(data, function(index, district) {
                                    $('#district').append('<option value="' + district.id + '">' +
                                        district
                                        .district + '</option>');
                                });

                                if (district_id) {
                                    $('#district').val(district_id);
                                }

                                // Refresh Choices.js setelah menambahkan opsi baru
                                choicesDistrict.setChoices(
                                    data.map(item => ({
                                        value: item.id,
                                        label: item.name
                                    })),
                                    'value',
                                    'label',
                                    true
                                );
                            } else {
                                console.error('Error fetching data');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error: ' + status + error);
                        }
                    });
                }



                const villageSelect = document.getElementById('village');
                const choicesVillage = new Choices(villageSelect, {
                    searchEnabled: true,
                });
                // Load Kelurahan
                function loadKelurahan(district_id, village_id = null) {
                    $.ajax({
                        url: "{{ route('ajax.kelurahan') }}",
                        type: "GET",
                        data: {
                            district_id: district_id
                        },
                        success: function(response) {
                            if (response.success) {
                                var data = response.data;
                                $('#village').empty(); // Kosongkan elemen select sebelum diisi ulang

                                $.each(data, function(index, village) {
                                    $('#village').append('<option value="' + village.id + '">' +
                                        village
                                        .village + '</option>');
                                });

                                if (village_id) {
                                    $('#village').val(village_id);
                                }

                                // Refresh Choices.js setelah menambahkan opsi baru
                                choicesVillage.setChoices(
                                    data.map(item => ({
                                        value: item.id,
                                        label: item.name
                                    })),
                                    'value',
                                    'label',
                                    true
                                );
                            } else {
                                console.error('Error fetching data');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error: ' + status + error);
                        }
                    });
                }


                const merkSelect = document.getElementById('merk-mobil');
                const choicesMerk = new Choices(merkSelect, {
                    searchEnabled: true,
                });

                // Load Merk
                function loadMerk(merk_id = null) {
                    $.ajax({
                        url: "{{ route('ajax.merk') }}",
                        type: "GET",
                        success: function(response) {
                            if (response.success) {
                                var data = response.data;
                                $('#merk-mobil').empty(); // Kosongkan elemen select sebelum diisi ulang
                                $('#merk-mobil').append('<option value="">Pilih Merk</option>');

                                $.each(data, function(index, merk) {
                                    $('#merk-mobil').append('<option value="' + merk.id + '">' +
                                        merk
                                        .merk + '</option>');
                                });

                                if (merk_id) {
                                    $('#merk-mobil').val(merk_id);
                                }

                                // Refresh Choices.js setelah menambahkan opsi baru
                                choicesMerk.setChoices(
                                    data.map(item => ({
                                        value: item.id,
                                        label: item.merk
                                    })),
                                    'value',
                                    'label',
                                    true
                                );
                            } else {
                                console.error('Error fetching data');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error: ' + status + error);
                        }
                    });
                }

                // const mobilSelect = document.getElementById('mobil');
                // const choicesMobil = new Choices(mobilSelect, {
                //     searchEnabled: true,
                // });

                // // Load Mobil
                // function loadMobil(merk_id, mobil_id = null) {
                //     $.ajax({
                //         url: "{{ route('ajax.mobil') }}",
                //         type: "GET",
                //         data: {
                //             merk_id: merk_id
                //         },
                //         success: function(response) {
                //             if (response.success) {
                //                 var data = response.data;
                //                 $('#mobil').empty(); // Kosongkan elemen select sebelum diisi ulang

                //                 $.each(data, function(index, mobil) {
                //                     $('#mobil').append('<option value="' + mobil.id + '">' + mobil
                //                         .mobil + '</option>');
                //                 });

                //                 if (mobil_id) {
                //                     $('#mobil').val(mobil_id);
                //                 }

                //                 // Refresh Choices.js setelah menambahkan opsi baru
                //                 choicesMobil.setChoices(
                //                     data.map(item => ({
                //                         value: item.id,
                //                         label: item.nama_mobil
                //                     })),
                //                     'value',
                //                     'label',
                //                     true
                //                 );
                //             } else {
                //                 console.error('Error fetching data');
                //             }
                //         },
                //         error: function(xhr, status, error) {
                //             console.error('AJAX Error: ' + status + error);
                //         }
                //     });
                // }


                var tahun = new Choices('#tahun', {
                    shouldSort: false,
                });
                // Event listener untuk input dan select elements
                $('#form-pengajuan input, #form-pengajuan select, #form-pengajuan textarea').on('input change',
                    function() {
                        validateForm();
                    });
                // Fungsi untuk melakukan validasi formulir
                function validateForm() {
                    var isValid = true;

                    // Validasi Nama Lengkap
                    var namaLengkap = $('#nama_lengkap').val().trim();
                    if (namaLengkap === "") {
                        isValid = false;
                        $('#nama_lengkap').addClass('is-invalid');
                        $('#nama_lengkap').next('.error-message').text('Nama lengkap harus diisi');
                    } else {
                        $('#nama_lengkap').removeClass('is-invalid');
                        $('#nama_lengkap').next('.error-message').text('');
                    }

                    // Validasi Nomor HP
                    var nomorHP = $('#nomor_hp').val().trim();
                    if (nomorHP === "") {
                        isValid = false;
                        $('#nomor_hp').addClass('is-invalid');
                        $('#nomor_hp').next('.error-message').text('Nomor HP harus diisi');
                    } else {
                        $('#nomor_hp').removeClass('is-invalid');
                        $('#nomor_hp').next('.error-message').text('');
                    }

                    // Validasi Provinsi Domisili
                    var provinceValue = $('#province').val().trim();
                    if (provinceValue === "") {
                        isValid = false;
                        $('#province').addClass('is-invalid');
                        $('#province').next('.error-message').text('Pilih provinsi domisili');
                    } else {
                        $('#province').removeClass('is-invalid');
                        $('#province').next('.error-message').text('');
                    }

                    // Validasi Kota/Kabupaten Domisili
                    var regencyValue = $('#regency').val();
                    if (!regencyValue) {
                        isValid = false;
                        $('#regency').addClass('is-invalid');
                        $('#regency').next('.error-message').text('Pilih kota/kabupaten domisili');
                    } else {
                        $('#regency').removeClass('is-invalid');
                        $('#regency').next('.error-message').text('');
                    }

                    // Validasi Tipe Jaminan
                    var tipeJaminan = $('#tipeJaminan').val();
                    if (tipeJaminan === '') {
                        isValid = false;
                        $('#tipeJaminan').addClass('is-invalid');
                        $('#tipeJaminan').next('.error-message').text('Pilih tipe jaminan');
                    } else {
                        $('#tipeJaminan').removeClass('is-invalid');
                        $('#tipeJaminan').next('.error-message').text('');
                    }

                    // Validasi Merk Motor
                    var merkMotor = $('#merk-motor').val();
                    if (tipeJaminan === 'BPKB Motor' && !merkMotor && !$('.input-motor').hasClass('d-none')) {
                        isValid = false;
                        $('#merk-motor').addClass('is-invalid');
                        $('#merk-motor').next('.error-message').text('Pilih merk motor');
                    } else {
                        $('#merk-motor').removeClass('is-invalid');
                        $('#merk-motor').next('.error-message').text('');
                    }

                    // Validasi Merk Mobil
                    var merkMobil = $('#merk-mobil').val();
                    if (tipeJaminan === 'BPKB Mobil' && !merkMobil && !$('.input-mobil').hasClass('d-none')) {
                        isValid = false;
                        $('#merk-mobil').addClass('is-invalid');
                        $('#merk-mobil').next('.error-message').text('Pilih merk mobil');
                    } else {
                        $('#merk-mobil').removeClass('is-invalid');
                        $('#merk-mobil').next('.error-message').text('');
                    }

                    // Validasi motor 
                    var motor = $('#motor').val();
                    if (tipeJaminan === 'BPKB Motor' && !motor && !$('.input-motor').hasClass('d-none')) {
                        isValid = false;
                        $('#motor').addClass('is-invalid');
                        $('#motor').next('.error-message').text('Masukkan plat motor');
                    } else {
                        $('#motor').removeClass('is-invalid');
                        $('#motor').next('.error-message').text('');
                    }

                    // Validasi mobil
                    var mobil = $('#mobil').val();
                    if (tipeJaminan === 'BPKB Mobil' && !mobil && !$('.input-mobil').hasClass('d-none')) {
                        isValid = false;
                        $('#mobil').addClass('is-invalid');
                        $('#mobil').next('.error-message').text('Masukkan plat mobil');
                    } else {
                        $('#mobil').removeClass('is-invalid');
                        $('#mobil').next('.error-message').text('');
                    }

                    // Validasi Tahun
                    var tahun = $('#tahun').val();
                    if (tipeJaminan === 'BPKB Mobil' && tipeJaminan === 'BPKB Motor' && !tahun && !$('.input-tahun')
                        .hasClass('d-none')) {
                        isValid = false;
                        $('#tahun').addClass('is-invalid');
                        $('#tahun').next('.error-message').text('Masukkan tahun');
                    } else {
                        $('#tahun').removeClass('is-invalid');
                        $('#tahun').next('.error-message').text('');
                    }

                    // Validasi Property
                    var property = $('#property').val();
                    if (tipeJaminan === 'Property' && !property && !$('.input-property').hasClass('d-none')) {
                        isValid = false;
                        $('#property').addClass('is-invalid');
                        $('#property').next('.error-message').text('Masukkan lokasi property');
                    } else {
                        $('#property').removeClass('is-invalid');
                        $('#property').next('.error-message').text('');
                    }

                    // Validasi sertifikat
                    var sertifikat = $('#sertifikat-property').val();
                    if (tipeJaminan === 'Property' && !sertifikat && !$('.input-property').hasClass('d-none')) {
                        isValid = false;
                        $('#sertifikat-property').addClass('is-invalid');
                        $('#sertifikat-property').next('.error-message').text('Masukkan sertifikat property');
                    } else {
                        $('#sertifikat-property').removeClass('is-invalid');
                        $('#sertifikat-property').next('.error-message').text('');
                    }

                    // Validasi Alamat Property
                    var alamatProperty = $('#alamat-property').val();
                    if (tipeJaminan === 'Property' && !alamatProperty && !$('.input-property').hasClass('d-none')) {
                        isValid = false;
                        $('#alamat-property').addClass('is-invalid');
                        $('#alamat-property').next('.error-message').text('Masukkan alamat property');
                    } else {
                        $('#alamat-property').removeClass('is-invalid');
                        $('#alamat-property').next('.error-message').text('');
                    }

                    // Validasi Nominal Pinjaman
                    var nominalPinjaman = $('#nominal_pinjaman').val().replace(/[^,\d]/g, '');
                    var nominal = nominalPinjaman ? parseInt(nominalPinjaman.replace(/\./g, '')) : 0;
                    var errorMessage = '';

                    if (nominalPinjaman === "") {
                        isValid = false;
                        errorMessage = 'Nominal harus diisi';
                    } else if (nominal < 1000000) {
                        isValid = false;
                        errorMessage = 'Minimum Rp 1.000.000';
                    } else if (nominal > 250000000) {
                        isValid = false;
                        errorMessage = 'Maksimum Rp 250.000.000';
                    }

                    if (errorMessage) {
                        $('#nominal_pinjaman').addClass('is-invalid');
                        $('.input-group').next('.error-message').text(errorMessage);
                    } else {
                        $('#nominal_pinjaman').removeClass('is-invalid');
                        $('.input-group').next('.error-message').text('');
                    }

                    // Validasi Checkbox Persyaratan dan Ketentuan
                    var agreeTermsChecked = $('#agreeTerms').is(':checked');
                    if (!agreeTermsChecked) {
                        isValid = false;
                        $('#agreeTerms').addClass('is-invalid');
                    } else {
                        $('#agreeTerms').removeClass('is-invalid');
                    }

                    // Atur status tombol submit
                    if (isValid == true) {
                        $('#submit').removeAttr('disabled').removeClass('btn-secondary disabled').addClass(
                            'btn-warning');
                    } else {
                        $('#submit').attr('disabled', 'disabled').removeClass('btn-warning').addClass(
                            'btn-secondary disabled');
                    }

                    return isValid;
                }


                // Fungsi untuk mengubah angka menjadi format rupiah
                function formatRupiah(angka, prefix) {
                    var number_string = angka.toString().replace(/\D/g, '');
                    var split = number_string.split('');
                    var sisa = split.length % 3;
                    var rupiah = split.slice(0, sisa).join('');
                    var ribuan = split.slice(sisa).join('').match(/\d{1,3}/g);

                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }

                    rupiah = prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
                    return rupiah;
                }



                $('#nominal_pinjaman').on('input', function() {
                    var value = $(this).val().replace(/[^\d]/g, ''); // Menghapus semua kecuali digit
                    var nominal = parseInt(value, 10);

                    // Batasan panjang input
                    if (value.length > 12) {
                        value = value.substring(0, 12);
                        nominal = parseInt(value, 10);
                    }
                    // Memformat nilai ke format rupiah
                    $(this).val(formatRupiah(nominal));

                    // validasi nominal
                    if (nominal < 1000000) {
                        $('#nominal_pinjaman').addClass('is-invalid');
                        $('.input-group').next('.error-message').text('Minimum Rp 1.000.000');
                    } else if (nominal > 250000000) {
                        $('#nominal_pinjaman').addClass('is-invalid');
                        $('.input-group').next('.error-message').text('Maksimum Rp 250.000.000');
                    } else if (!nominal && nominal !== 0) {
                        $('#nominal_pinjaman').addClass('is-invalid');
                        $('#nominal_pinjaman').next('.error-message').text('Masukkan nominal pinjaman');
                    } else {
                        $('#nominal_pinjaman').removeClass('is-invalid');
                        $('.input-group').next('.error-message').text('');
                    }
                });




                $('#form-pengajuan').on('submit', function(event) {
                    event.preventDefault(); // Menghentikan pengiriman formulir secara default

                    var isValid = validateForm(); // Panggil fungsi validasi

                    if (isValid) {
                        // Mengambil nilai nominal pinjaman dan mengubahnya menjadi format rupiah
                        var nominalPinjaman = $('#nominal_pinjaman').val().replace(/[^,\d]/g, '');
                        var nominal = nominalPinjaman ? parseInt(nominalPinjaman.replace(/\./g, '')) :
                            0; // Menghapus titik ribuan dan mengubah ke integer

                        // Set nilai kembali ke input dengan format rupiah tanpa simbol 'Rp '
                        $('#nominal_pinjaman').val(formatRupiah(nominal));

                        // Fungsi untuk mengubah nominal menjadi format rupiah
                        function formatRupiah(angka) {
                            return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                        }

                        // Buat teks pesan WhatsApp
                        var whatsappMessage =
                            `Halo, saya ${$('#nama_lengkap').val().trim()}. Saya telah mengajukan pinjaman dengan detail sebagai berikut:\n\n`;

                        // Fungsi untuk menambahkan field ke pesan jika memiliki nilai
                        function addToMessage(label, value) {
                            if (value) {
                                // Jika label adalah 'Nominal Pinjaman', format menjadi rupiah
                                if (label === 'Nominal Pinjaman') {
                                    whatsappMessage += `*${label}:* Rp ${formatRupiah(value)}\n`;
                                } else {
                                    whatsappMessage += `*${label}:* ${value}\n`;
                                }
                            }
                        }

                        addToMessage('Nama Lengkap', $('#nama_lengkap').val().trim());
                        addToMessage('Nomor HP', $('#nomor_hp').val().trim());
                        addToMessage('Provinsi', $('#province option:selected').text());
                        addToMessage('Kota', $('#regency option:selected').text());
                        addToMessage('Kecamatan', $('#district option:selected').text());
                        addToMessage('Kelurahan', $('#village option:selected').text());
                        addToMessage('Tipe Jaminan', $('#tipeJaminan').val());

                        // Menyesuaikan data berdasarkan tipe jaminan yang dipilih
                        var tipeJaminan = $('#tipeJaminan').val();
                        if (tipeJaminan === 'BPKB Mobil') {
                            addToMessage('Merk Mobil', $('#merk-mobil option:selected').text());
                            addToMessage('Nama Mobil', $('#mobil').val());
                        } else if (tipeJaminan === 'BPKB Motor') {
                            addToMessage('Merk Motor', $('#merk-motor option:selected').text());
                            addToMessage('Nama Motor', $('#motor').val());
                        } else if (tipeJaminan === 'Property') {
                            addToMessage('Property', $('#property').val());
                            addToMessage('Sertifikat Property', $('#sertifikat-property').val());
                            addToMessage('Alamat Property', $('#alamat-property').val().trim());
                        }

                        addToMessage('Tahun', $('#tahun').val().trim());
                        addToMessage('Nominal Pinjaman', formatRupiah(
                            nominal)); // Mengirim format rupiah ke pesan WhatsApp

                        // Data formulir yang akan dikirim ke server
                        var formData = {
                            nama_lengkap: $('#nama_lengkap').val().trim(),
                            no_hp: $('#nomor_hp').val().trim(),
                            provinsi_id: $('#province').val(),
                            kota_id: $('#regency').val(),
                            kecamatan_id: $('#district').val(),
                            kelurahan_id: $('#village').val(),
                            tipe_jaminan: $('#tipeJaminan').val(),
                            merk_motor_id: (tipeJaminan === 'BPKB Motor') ? $('#merk-motor').val() : null,
                            merk_mobil_id: (tipeJaminan === 'BPKB Mobil') ? $('#merk-mobil').val() : null,
                            nama_mobil: (tipeJaminan === 'BPKB Mobil') ? $('#mobil').val() : null,
                            nama_motor: (tipeJaminan === 'BPKB Motor') ? $('#motor').val() : null,
                            property: (tipeJaminan === 'Property') ? $('#property').val() : null,
                            sertifikat: (tipeJaminan === 'Property') ? $('#sertifikat-property').val() :
                                null,
                            alamat_property: (tipeJaminan === 'Property') ? $('#alamat-property').val()
                                .trim() : null,
                            tahun: $('#tahun').val().trim(),
                            nominal_pinjaman: nominal, // Mengirimkan nilai integer ke server
                        };

                        console.log("Sending form data:", formData);

                        // Kirim data ke server menggunakan AJAX
                        $.ajax({
                            type: 'POST',
                            url: "{{ route('pengajuan.store') }}", // Ganti dengan URL endpoint Anda
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content') // Token CSRF Laravel
                            },
                            data: formData,
                            success: function(response) {
                                // Handle respons sukses
                                console.log("Response from server:", response);

                                // Reset formulir setelah berhasil
                                $('#form-pengajuan')[0].reset();

                                // Tampilkan SweetAlert
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses!',
                                    text: 'Formulir berhasil disubmit!',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    // Redirect ke WhatsApp Web dengan pesan yang sudah dibuat setelah SweetAlert ditutup
                                    var whatsappURL =
                                        `https://wa.me/6281806942266/?text=${encodeURIComponent(whatsappMessage)}`;
                                   
                                    window.location.href = whatsappURL;

                                    // Reload halaman setelah 1.5 detik
                                    // setTimeout(function() {
                                    //     location.reload();
                                    // }, 1500);
                                });
                            },
                            error: function(xhr, status, error) {
                                // Handle error
                                console.error(xhr.responseText);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan, formulir tidak dapat disubmit.'
                                });
                            }
                        });
                    } else {
                        // Jika formulir tidak valid, fokuskan ke input pertama yang tidak valid
                        $('.is-invalid').first().focus();
                    }
                });







                const tipeJaminanSelect = document.getElementById('tipeJaminan');
                const choicesTipeJaminan = new Choices(tipeJaminanSelect, {
                    searchEnabled: false,
                    shouldSort: false,
                });

                $('#tipeJaminan').on('change', function() {
                    var tipeJaminan = $(this).val();

                    // Kosongkan nilai input dan select ketika tipe jaminan berubah
                    $('.input-mobil input, .input-mobil select, .input-motor input, .input-motor select, .input-property input, .input-property select, .input-tahun input')
                        .val('');
                    

                    if (tipeJaminan === 'BPKB Mobil') {
                        $('.input-mobil').removeClass('d-none');
                        $('.input-tahun').removeClass('d-none');
                        $('.input-motor').addClass('d-none');
                        $('.input-property').addClass('d-none');
                    } else if (tipeJaminan === 'BPKB Motor') {
                        $('.input-mobil').addClass('d-none');
                        $('.input-property').addClass('d-none');
                        $('.input-motor').removeClass('d-none');
                        $('.input-tahun').removeClass('d-none');
                    } else if (tipeJaminan === 'Property') {
                        $('.input-mobil').addClass('d-none');
                        $('.input-motor').addClass('d-none');
                        $('.input-tahun').addClass('d-none');
                        $('.input-property').removeClass('d-none');
                    } else {
                        $('.input-mobil').addClass('d-none');
                        $('.input-motor').addClass('d-none');
                        $('.input-property').addClass('d-none');
                        $('.input-tahun').addClass('d-none');
                    }
                });









                // load ajax
                loadProvinsi();
                loadKota();
                loadKecamatan();
                loadKelurahan();
                loadMerk();
                loadMerkMotor();



                // Panggil data Kota ketika data provinsi dimuat 
                $('#province').on('change', function() {
                    var province_id = $(this).val();
                    // Kosongkan pilihan kota saat merk berubah
                    choicesRegency.clearStore();
                    choicesRegency.setChoices([{
                        value: '',
                        label: 'Pilih Kota/Kabupaten',
                        selected: true,
                        disabled: true
                    }]);
                    if (province_id) {
                        loadKota(province_id);
                    }
                });
                // Panggil data kecamatan ketika data provinsi dimuat 
                $('#regency').on('change', function() {
                    var regency_id = $(this).val();
                    // Kosongkan pilihan kota saat merk berubah
                    choicesDistrict.clearStore();
                    choicesDistrict.setChoices([{
                        value: '',
                        label: 'Pilih Kecamatan',
                        selected: true,
                        disabled: true
                    }]);
                    if (regency_id) {
                        loadKecamatan(regency_id);
                    }
                });
                // Panggil data kecamatan ketika data provinsi dimuat 
                $('#district').on('change', function() {
                    var distict_id = $(this).val();
                    // Kosongkan pilihan kota saat merk berubah
                    choicesVillage.clearStore();
                    choicesVillage.setChoices([{
                        value: '',
                        label: 'Pilih Kecamatan',
                        selected: true,
                        disabled: true
                    }]);
                    if (distict_id) {
                        loadKelurahan(distict_id);
                    }
                });


                // $('#merk-mobil').on('change', function() {
                //     var merk_id = $(this).val();
                //     // Kosongkan pilihan mobil saat merk berubah
                //     choicesMobil.clearStore();
                //     choicesMobil.setChoices([{
                //         value: '',
                //         label: 'Pilih Mobil',
                //         selected: true,
                //         disabled: true
                //     }]);
                //     if (merk_id) {
                //         loadMobil(merk_id);
                //     }
                // });
                // $('#merk-motor').on('change', function() {
                //     var merk_id = $(this).val();
                //     // Kosongkan pilihan mobil saat merk berubah
                //     choicesMotor.clearStore();
                //     choicesMotor.setChoices([{
                //         value: '',
                //         label: 'Pilih Motor',
                //         selected: true,
                //         disabled: true
                //     }]);
                //     if (merk_id) {
                //         loadMotor(merk_id);
                //     }
                // });







                const merkMotorSelect = document.getElementById('merk-motor');
                const choicesMerkMotor = new Choices(merkMotorSelect, {
                    searchEnabled: true,
                });

                function loadMerkMotor(merk_id = null) {
                    $.ajax({
                        url: "{{ route('ajax.merk-motor') }}", // URL untuk mengakses data merk motor melalui AJAX
                        type: "GET", // Metode HTTP untuk permintaan
                        success: function(response) {
                            if (response.success) { // Memastikan bahwa respons sukses
                                var data = response.data; // Data merk motor yang diterima dari server

                                // Menambahkan opsi-opsi lainnya dari data yang diterima
                                $.each(data, function(index, merk) {
                                    $('#merk-motor').append('<option value="' + merk.id +
                                        '">' + merk.merk + '</option>'
                                    ); // Menambahkan opsi baru
                                });

                                // Jika merk_id diberikan, atur nilai select ke merk_id tersebut
                                if (merk_id) {
                                    $('#merk-motor').val(merk_id);
                                }

                                // Memperbarui Choices.js dengan opsi baru
                                choicesMerkMotor.setChoices(
                                    data.map(item => ({
                                        value: item.id,
                                        label: item.merk
                                    })),
                                    'value', // Properti yang digunakan sebagai nilai pilihan
                                    'label', // Properti yang digunakan sebagai label pilihan
                                    true // Atur ulang pilihan sebelumnya
                                );
                            } else {
                                console.error(
                                    'Error fetching data'); // Menangani jika ada kesalahan dalam respons
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error: ' + status + error); // Menangani kesalahan AJAX
                        }
                    });
                }



                // const motorSelect = document.getElementById('motor');
                // const choicesMotor = new Choices(motorSelect, {
                //     searchEnabled: true,
                // });

                // function loadMotor(merk_id, motor_id = null) {
                //     $.ajax({
                //         url: "{{ route('ajax.motor') }}",
                //         type: "GET",
                //         data: {
                //             merk_id: merk_id
                //         },
                //         success: function(response) {
                //             if (response.success) {
                //                 var data = response.data;
                //                 $('#motor').empty(); // Kosongkan elemen select sebelum diisi ulang

                //                 $.each(data, function(index, motor) {
                //                     $('#motor').append('<option value="' + motor.id + '">' + motor
                //                         .motor + '</option>');
                //                 });

                //                 if (motor_id) {
                //                     $('#motor').val(motor_id);
                //                 }

                //                 // Refresh Choices.js setelah menambahkan opsi baru
                //                 choicesMotor.setChoices(
                //                     data.map(item => ({
                //                         value: item.nama_motor,
                //                         label: item.motor
                //                     })),
                //                     'value',
                //                     'label',
                //                     true
                //                 );
                //             } else {
                //                 console.error('Error fetching data');
                //             }
                //         },
                //         error: function(xhr, status, error) {
                //             console.error('AJAX Error: ' + status + error);
                //         }
                //     });
                // }


                const propertySelect = document.getElementById('property');
                const choicesProperty = new Choices(propertySelect, {
                    searchEnabled: false,
                });
                const sertifikatSelect = document.getElementById('sertifikat-property');
                const choicesSertifikat = new Choices(sertifikatSelect, {
                    searchEnabled: false,
                });
            });
        </script>
    @endpush
