<form action="" method="POST">
    @csrf
    {{-- <input type="hidden" name="keluarga_id" id="user_id" value="{{ $keluarga->id }}"> --}}
    {{-- <div id="bubble-editor" style="height: 300px;"></div> --}}
    <div class="form-group mb-2">
        <label for="nama_motor" class="form-label">Merk Motor</label>
        <div class="d-flex align-items-center gap-4">
            <input type="text" class="form-control" placeholder="Masukan Merk Motor" id="merk" name="merk[]">
            <a href="javascript:void(0)" class="btn btn-subtle-primary waves-effect waves-light btn-sm d-flex"
                id="btn-add-other-merk"><i class="bi bi-plus-circle me-2"></i>Add</a>
        </div>
        @error('merk')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Tempat untuk input tambahan -->
    <div class="additional-inputs"></div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btn_save_merk">Simpan</button>
    </div>
</form>
