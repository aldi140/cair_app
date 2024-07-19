@extends('layouts.master')
@section('title')
    Advance Tables
@endsection
@section('css')
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- choices css -->
    <link href="{{ asset('build/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page-title')
    Advance Tables
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Daftar List Motor</h4>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="javascript:void(0);" class="btn btn-primary fw-semibold" id="btn-add-model"><i
                                    class="bi bi-plus-circle me-2"></i>Model Motor</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary fw-semibold" id="btn-add-merk"><i
                                    class="bi bi-plus-circle me-2"></i>Merk Motor</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="table-gridjs"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for model -->
        <div class="modal fade" id="modal_create_model" tabindex="-1" aria-labelledby="title_modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title_modal">Tambah data motor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-create-model" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="nama_motor" class="form-label">Nama Motor</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Motor"
                                    id="CreateTask-Task-Name" name="nama_motor">
                                @error('nama_motor')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="choices-single-default" class="form-label">Merk Motor</label>
                                <select class="form-control" data-trigger name="merk_id" id="choices-single-default"
                                    placeholder="This is a search placeholder">
                                    <option value="">Pilih Merk Motor</option>
                                    @foreach ($merkMotors as $merkMotor)
                                        <option value="{{ $merkMotor->id }}">{{ $merkMotor->merk }}</option>
                                    @endforeach
                                </select>
                                @error('merk_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="btn_save_model">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for edit -->
        <div class="modal fade" id="modal_edit_model" tabindex="-1" aria-labelledby="title_modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title_modal">Edit data motor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-edit-model" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-2">
                                <label for="edit_nama_motor" class="form-label">Nama Motor</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Motor"
                                    id="edit_nama_motor" name="nama_motor">
                                @error('nama_motor')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="edit_choices_single_default" class="form-label">Merk Motor</label>
                                <select class="form-control" data-trigger name="merk_id" id="edit_choices_single_default"
                                    placeholder="This is a search placeholder">
                                    <option value="">Pilih Merk Motor</option>
                                    @foreach ($merkMotors as $merkMotor)
                                        <option value="{{ $merkMotor->id }}">{{ $merkMotor->merk }}</option>
                                    @endforeach
                                </select>
                                @error('merk_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="btn_update_model">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for merk -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="title_modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title_modal">Tambah data merk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Dynamic content -->
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
                const choices = new Choices('#choices-single-default', {
                    searchEnabled: true,
                });

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('admin.motor.index') }}',
                    type: 'GET',
                    success: function(response) {
                        const motors = response.motors;

                        // Inisialisasi Grid.js dengan data dari server
                        new gridjs.Grid({
                            columns: [{
                                    id: 'nama_motor',
                                    name: 'Nama'
                                },
                                {
                                    id: 'merk',
                                    name: 'Merek'
                                },
                                {
                                    name: 'Aksi',
                                    formatter: (cell, row) => {
                                        return gridjs.html(`
                                        <button class="btn btn-primary btn-sm btn-edit" data-id="${row.cells[2].data}">Edit</button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-id="${row.cells[2].data}">Delete</button>
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
                            data: motors.map(motor => [
                                motor.nama_motor,
                                motor.merk.merk,
                                motor.id
                            ])
                        }).render(document.getElementById("table-gridjs"));
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });

                // Event listener untuk tombol edit dan delete
                $('body').on('click', '.btn-edit', function() {
                    const id = $(this).data('id');
                    $.ajax({
                        url:"{{ route('admin.motor.edit', ':id') }}".replace(
                                ':id', id),
                        type: 'GET',
                        success: function(response) {
                            $('#edit_nama_motor').val(response.motor.nama_motor);
                            $('#edit_choices_single_default').val(response.motor.merk_id);
                            $('#form-edit-model').attr('action', `/admin/motor/${id}`);
                            $('#modal_edit_model').modal('show');
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                });

                $('body').on('click', '.btn-delete', function() {
                    const id = $(this).data('id');
                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: "Data ini akan dihapus secara permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "{{ route('admin.motor.destroy', ':id') }}".replace(
                                ':id', id),
                                type: 'DELETE',
                                success: function(response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Terhapus!',
                                        text: response.message,
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(function() {
                                        location.reload();
                                    });
                                },
                                error: function(xhr, status, error) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Gagal menghapus data.'
                                    });
                                }
                            });
                        }
                    });
                });

                // btn add model motor
                $('body').on('click', '#btn-add-model', function(e) {
                    e.preventDefault();
                    $('#modal_create_model').modal('show');
                });

                // btn save motor
                $('body').on('click', '#btn_save_model', function(e) {
                    e.preventDefault();
                    var url = "{{ route('admin.motor.store') }}";
                    var form = $('#form-create-model');

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                $('#modal_create_model').modal('hide');
                                location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            if (xhr.status === 409) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Data Motor sudah ada.'
                                });
                            } else if (xhr.status === 422) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Data motor harus diisi!'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Gagal menyimpan data.'
                                });
                            }
                        }
                    });
                });

                // btn tambah merk
                $('body').on('click', '#btn-add-merk', function(e) {
                    e.preventDefault();
                    var url = "{{ route('admin.merk-motor.create') }}";
                    $.ajax({
                        url: url,
                        type: "GET",
                        success: function(response) {
                            $('.modal-body').html(response);
                            $('#modal').modal('show');
                        }
                    });
                });

                // btn save merk
                $('body').on('click', '#btn_save_merk', function(e) {
                    e.preventDefault();
                    var url = "{{ route('admin.merk-motor.store') }}";
                    var form = $('.modal-body form');

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                $('#modal').modal('hide');
                                location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            if (xhr.status === 409) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Data Merk Motor sudah ada.'
                                });
                            } else if (xhr.status === 422) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Data merk harus diisi!'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Gagal menyimpan data.'
                                });
                            }
                        }
                    });
                });

                // btn update motor
                $('body').on('click', '#btn_update_model', function(e) {
                    e.preventDefault();
                    var url = $('#form-edit-model').attr('action');
                    var form = $('#form-edit-model');

                    $.ajax({
                        url: url,
                        type: "PUT",
                        data: form.serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                $('#modal_edit_model').modal('hide');
                                location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            if (xhr.status === 409) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oops...',
                                    text: 'Data Motor sudah ada.'
                                });
                            } else if (xhr.status === 422) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Data motor harus diisi!'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Gagal menyimpan data.'
                                });
                            }
                        }
                    });
                });

            });
        </script>
    @endsection
