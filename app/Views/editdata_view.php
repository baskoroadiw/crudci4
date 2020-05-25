<?=view('header',[
    'title'     => 'Edit Data Mahasiswa'
])?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center text-success mt-4"> Edit Data Mahasiswa </h1>
        </div>
        <div class="col-sm-12">
            <form action="/crud/edit/<?= $getEdit->nim; ?>" method="post">
                <div class="form-group">
                    <label for="inputnim">NIM</label>
                    <input type="number" class="form-control" name="nim" id="inputnim" value="<?= $getEdit->nim; ?>" placeholder="Masukkan Nim">
                    <small class="text-danger"><?=session()->getFlashdata('nim-error')?></small>
                </div>
                <div class="form-group">
                    <label for="inputnama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" id="inputnama" value="<?= $getEdit->nama; ?>" placeholder="Masukkan Nama">
                    <small class="text-danger"><?=session()->getFlashdata('nama-error')?></small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/hapus/<?= $getEdit->nim; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus <?= $getEdit->nama; ?>')">Delete</a>
            </form>
        </div>
    </div>
</div>

<?=view('footer')?>

