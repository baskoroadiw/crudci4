<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-edit">
                    <div class="form-group">
                        <label for="inputnim">NIM</label>
                        <input type="number" class="form-control" name="nim" id="inputnim" placeholder="Masukkan Nim">
                    </div>
                    <div class="form-group">
                        <label for="inputnama">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama" id="inputnama" placeholder="Masukkan Nama">
                        <input type="text" class="form-control d-none" name="tempId" id="tempId">
                    </div>
                    <button type="submit" class="btn btn-primary float-right" id="btn-edit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
