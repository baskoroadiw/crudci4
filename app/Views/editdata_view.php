<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center text-success mt-4"> <?= $h1;?> </h1>
        </div>
        <div class="col-sm-12">
            <form action="/crud/edit/<?= $getEdit->nim; ?>" method="post">
                <div class="form-group">
                    <label for="inputnim">NIM</label>
                    <input type="number" class="form-control" name="nim" id="inputnim" value="<?= $getEdit->nim; ?>" placeholder="Masukkan Nim">
                </div>
                <div class="form-group">
                    <label for="inputnama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" id="inputnama" value="<?= $getEdit->nama; ?>" placeholder="Masukkan Nama">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

