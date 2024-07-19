@extends('layouts.master')

@section('title')
    Data Pengajuan
@endsection

@section('css')
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- choices css -->
    <link href="{{ asset('build/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <style>
        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }
    </style>
@endsection

@section('page-title')
    Data Pengajuan
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Daftar Data Pengajuan Mobil</h4>
                </div>
                <div class="card-body">
                    <div id="table-gridjs"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Pengajuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="detailContent"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- gridjs js -->
    <script src="{{ asset('build/libs/gridjs/gridjs.umd.js') }}"></script>
    <!-- choices js -->
    <script src="{{ asset('build/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route('admin.pengajuan-mobil') }}',
                type: 'GET',
                success: function(response) {
                    const datas = response.datas;

                    // Fungsi untuk format rupiah
                    const formatRupiah = (number) => {
                        // Menggunakan NumberFormat dengan options yang sesuai
                        return new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR',
                            minimumFractionDigits: 0,
                            maximumFractionDigits: 0
                        }).format(number);
                    };

                    // Fungsi untuk format tanggal
                    const formatDate = (dateString) => {
                        const options = {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        };
                        return new Date(dateString).toLocaleDateString('id-ID', options);
                    };

                    // Inisialisasi Grid.js dengan data dari server
                    new gridjs.Grid({
                        columns: [{
                                id: 'nama_lengkap',
                                name: 'Nama Lengkap'
                            },
                            {
                                id: 'no_hp',
                                name: 'No HP'
                            },
                            {
                                id: 'province',
                                name: 'Provinsi'
                            },
                            {
                                id: 'mobil',
                                name: 'Data Mobil'
                            },
                            {
                                id: 'nominal_pinjaman',
                                name: 'Nominal Pinjaman',
                                formatter: (cell) => formatRupiah(cell)
                            },
                            {
                                id: 'tanggal_pengajuan',
                                name: 'Tanggal Pengajuan',
                                formatter: (cell) => formatDate(cell)
                            },
                            {
                                name: 'Aksi',
                                formatter: (cell, row) => {
                                    return gridjs.html(`
                                        <button class="btn btn-primary btn-sm btn-detail" data-id="${row.cells[2].data}"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-id="${row.cells[2].data}"><i class="bi bi-trash3"></i></button>
                                    `);
                                },
                                style: {
                                    width: '150px',
                                    textAlign: 'center'
                                }
                            }
                        ],
                        pagination: {
                            limit: 5
                        },
                        sort: true,
                        search: {
                            enabled: true,
                            placeholder: 'Cari...'
                        },
                        dropdowns: {
                            merk: {
                                enabled: true,
                                placeholder: 'Filter Merk',
                                values: []
                            }
                        },
                        data: datas.map(data => [
                            data.nama_lengkap,
                            data.no_hp,
                            data.province.name,
                            data.nama_mobil, // Mengambil nama mobil dari relasi mobil
                            data.nominal_pinjaman,
                            data.created_at
                        ])
                    }).render(document.getElementById("table-gridjs"));

                    // Tambahkan event listener untuk tombol detail
                    $('#table-gridjs').on('click', '.btn-detail', function() {
                        const id = $(this).data('id');
                        $.ajax({
                            url:"{{ route('admin.pengajuan-mobil-show', ':id') }}".replace(':id', id),
                            type: 'GET',
                            success: function(response) {
                                $('#detailContent').html(
                                response); // Masukkan konten detail ke dalam modal
                                $('#detailModal').modal(
                                'show'); // Tampilkan modal detail
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    </script>
@endsection
